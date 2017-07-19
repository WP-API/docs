#!/usr/bin/env php
<?php

$root = dirname( __DIR__ );
$repo = 'WP-API/docs';

$manifest = array();
$paths = array(
	$root . '/*.md',
	$root . '/*/*.md',
	$root . '/*/*/*.md',
);
$excludes = array(
	$root . '/README.md',
	$root . '/bin/templates/endpoint.md',
);
foreach ( $paths as $path ) {
	foreach ( glob( $path ) as $file ) {
		if ( in_array( $file, $excludes ) ) {
			continue;
		}

		$slug = basename( $file, '.md' );
		$key = str_replace( array( $root . '/', '.md' ), '', $file );
		$parent = null;
		if ( stripos( $key, '/' ) ) {
			$bits = explode( '/', $key );
			array_pop( $bits );
			$parent = implode( '/', $bits );
		}
		$manifest[ $key ] = array(
			'slug'            => $slug,
			'parent'          => $parent,
			'markdown_source' => sprintf( 'https://github.com/%s/blob/master/%s.md', $repo, $key ),
		);
	}
}

file_put_contents( $root . '/bin/manifest.json', json_encode( (object) $manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

$count = count( $manifest );
echo "Generated manifest.json of {$count} pages\n";
