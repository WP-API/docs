<?php

$root = dirname( __DIR__ );
$reader = simplexml_load_file( __DIR__ . '/import.xml' );

// HTML is valid Markdown, but we should replace for comfort's sake.
$markdown_map = [
	'<h2>'      => '## ',
	'</h2>'     => '',
	'<h3>'      => '### ',
	'</h3>'     => '',
	'[php]'     => '```php',
	'&lt;?php'  => '<' . '?php',
	'[/php]'    => '```',
	'<code>'    => '`',
	'</code>'   => '`',
	'<em>'      => '*',
	'</em>'     => '*',
	'<strong>'  => '**',
	'</strong>' => '**',
	'“'         => '"',
	'”'         => '"',
	'’'         => "'",
	'&lt;'      => '<',
	'&gt;'      => '>',
	'&quot;'    => '"',
	'&amp;'     => '&',
];

foreach ( $reader->channel->item as $item ) {
	$title = (string) $item->title;
	$url = (string) $item->link;
	$content = (string) $item->children( 'http://purl.org/rss/1.0/modules/content/' )->encoded;

	$wxr_item = $item->children( 'http://wordpress.org/export/1.2/' );

	$status = (string) $wxr_item->status;
	if ( $status !== 'publish' ) {
		printf( "Skipping draft %s\n", $title );
		continue;
	}

	$slug = str_replace( 'https://developer.wordpress.org/rest-api/', '', $url );
	if ( empty( $slug ) ) {
		$slug = 'index';
	}

	$slug = rtrim( $slug, '/' ) . '.md';

	$path = $root . '/' . $slug;
	if ( ! file_exists( dirname( $path ) ) ) {
		mkdir( dirname( $path ), 0755, true );
	}
	printf( "Creating %s: %s\n", $title, $path );

	$markdowned = str_replace(
		array_keys( $markdown_map ),
		array_values( $markdown_map ),
		$content
	);
	$markdowned = preg_replace(
		'#<a href="([^"]+)">([^<]+)</a>#i',
		'[\2](\1)',
		$markdowned
	);
	$data = sprintf( "# %s\n\n%s\n", $title, $markdowned );
	// echo str_replace( "\n", "\n\t", $data ) . "\n\n";
	file_put_contents( $path, $data );
}
