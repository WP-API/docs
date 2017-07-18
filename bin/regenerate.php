<?php

require dirname( __DIR__ ) . '/vendor/autoload.php';

function add_simple_schemas() {
	$objects = [];

	$response = Requests::get( 'http://demo.wp-api.org/wp-json/?context=help' );
	$parsed_data = json_decode( $response->body, true );

	foreach ( $parsed_data['routes'] as $key => $route ) {
		if ( ! isset( $route['schema'] ) ) {
			continue;
		}

		# make a readable route name from the route regex
		$route_nicename = preg_replace( '/\(\?P<(\w+?)>.*?\)/', '<\1>', $key );

		# escape the <> as this value is only used in HTML
		$route['nicename'] = str_replace( [ '<', '>' ], [ '&lt;', '&gt;' ], $route_nicename );

		# group the objects by unique schema titles [ post => ..., term => ..., etc ]
		$title = $route['schema']['title'];
		if ( ! isset( $objects[ $title ] ) ) {
			$objects[ $title ] = [
				'name' => $title,
				'routes' => [ $route_nicename => $route ],
				'schema' => $route['schema'],
			];
		} else {
			$objects[ $title ]['routes'][ $route_nicename ] = $route;
		}
	}

	foreach ( $objects as $key => $value ) {
		$file = fopen( '_data/' . $key . '.json', 'w' );
		fwrite( $file, json_encode( $value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );
		fclose( $file );
	}
}

function add_terms_schema() {
	$response = Requests::options( 'http://demo.wp-api.org/wp-json/wp/v2/terms/category' );
	$file = fopen( '_data/terms.json', 'w' );
	$parsed_data = json_decode( $response->body );

	# puts data
	fwrite( $file, json_encode( $parsed_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );
	fclose( $file );
}

add_simple_schemas();
