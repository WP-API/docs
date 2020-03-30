#!/usr/bin/env php
<?php

require dirname( __DIR__ ) . '/vendor/autoload.php';

// This assumes you have a local WP VM running the latest stable WP, mapped to
// use the domain name example.com using /etc/hosts. http://demo.wp-api.org is
// also available, though may be outdated.
const SITE_URL = 'http://example.com';

function update_route( $route ) {
	foreach ( $route['endpoints'] as &$endpoint ) {
		if ( in_array( 'POST', $endpoint['methods'] ) ) {
			if ( ! in_array( 'PUT', $endpoint['methods'] ) ) {
				$endpoint['type'] = 'create-item';
			} else {
				$endpoint['type'] = 'update-item';
			}
		} elseif ( in_array( 'DELETE', $endpoint['methods'] ) ) {
			$endpoint['type'] = 'delete-item';
		} elseif ( isset( $endpoint['args']['page'] ) ) {
			$endpoint['type'] = 'list-item';
		} else {
			$endpoint['type'] = 'get-item';
		}
	}

	return $route;
}

function add_simple_schemas() {
	$objects = [];

	$response = Requests::get( SITE_URL . '?rest_route=/&context=help' );

	$parsed_data = json_decode( $response->body, true );

	foreach ( $parsed_data['routes'] as $key => $route ) {
		if ( ! isset( $route['schema'] ) ) {
			continue;
		}

		# make a readable route name from the route regex
		$route_nicename = preg_replace( '/\(\?P<(\w+?)>.*?\)/', '<\1>', $key );
		$route['nicename'] = $route_nicename;

		# group the objects by unique schema titles [ post => ..., term => ..., etc ]
		$title = $route['schema']['title'];

		# pluralise, super-dodgy.
		if ( substr( $title, -1 ) === 's' ) {
			$plural = $title;
		} else {
			$plural = substr( $title, -1 ) === 'y' ? substr( $title, 0, -1 ) . 'ies' : $title . 's';
		}
		$key = $plural;

		# overrides
		switch ( $title ) {
			case 'attachment':
				$key = 'media';
				$title = 'Media Item';
				$plural = 'media';
				break;

			case 'status':
				$plural = 'statuses';
				$key = 'post-statuses';
				break;

			case 'type':
				$key = 'post-types';
				break;
		}

		if ( ! isset( $objects[ $key ] ) ) {
			$objects[ $key ] = [
				'name' => $title,
				'plural' => $plural,
				'routes' => [ $route_nicename => update_route( $route ) ],
				'schema' => $route['schema'],
			];
		} else {
			$objects[ $key ]['routes'][ $route_nicename ] = update_route( $route );
		}
	}

	return $objects;
}

function add_terms_schema() {
	$response = Requests::options( SITE_URL . '?rest_route=/wp/v2/terms/category' );
	$file = fopen( '_data/terms.json', 'w' );
	$parsed_data = json_decode( $response->body );

	# puts data
	fwrite( $file, json_encode( $parsed_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );
	fclose( $file );
}

function twig() {
	static $twig;
	if ( ! empty( $twig ) ) {
		return $twig;
	}

	$loader = new Twig_Loader_Filesystem( __DIR__ . '/templates' );

	$twig = new Twig_Environment( $loader, array(
	    'cache' => false,
	    // 'cache' => __DIR__ . '/cache',
	) );
	return $twig;
}

function generate_reference() {
	$template = twig()->load( 'endpoint.md' );

	$schemas = add_simple_schemas();
	$rendered = [];
	foreach ( $schemas as $key => $value ) {
		$rendered[ $key ] = $template->render( $value );
		file_put_contents( dirname( __DIR__ ) . '/reference/' . $key . '.md', $rendered[ $key ] );
	}
}

generate_reference();
