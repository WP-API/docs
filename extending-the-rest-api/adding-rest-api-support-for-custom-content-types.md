# Adding REST API Support For Custom Content Types

The REST API can create routes for custom post types and custom taxonomies inside of the `wp/v2` namespace, using the same controllers as the default post type or taxonomy term controllers. Alternatively, you can use your own controllers and namespace. This document will cover using the default controllers for your custom content type's API routes. This is the easiest way and ensures the highest chance of compatibility with third parties.


## Registering A Custom Post Type With REST API Support

When registering a custom post type, if you want it to be available via the REST API you should set `'show_in_rest' => true` in the arguments passed to `register_post_type`. Setting this argument to true will add a route in the `wp/v2` namespace.

```php
/**
 * Register a book post type, with REST API support
 *
 * Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'my_book_cpt' );
function my_book_cpt() {
    $args = array(
      'public'       => true,
      'show_in_rest' => true,
      'label'        => 'Books'
    );
    register_post_type( 'book', $args );
}
```

You can optionally set the `rest_base` argument to change the base url, which will otherwise default to the post type's name. In the example below, "books" is used as the value of `rest_base`. This will make the URL for the route `wp-json/v2/books` instead of `wp-json/v2/book/`, which would have been the default.

In addition, you can pass an argument for `rest_controller_class`. This class must be a subclass of `WP_REST_Controller`. By default, `WP_REST_Posts_Controller` is used as the controller. If you are using a custom controller, then you likely will not be within the `wp/v2` namespace.

Here is an example of registering a post type, with full labels, support for the REST API, a customized rest_base, and explicit registry of the default controller:

```php
/**
 * Register a book post type, with REST API support
 *
 * Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'my_book_cpt' );
function my_book_cpt() {
  $labels = array(
    'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'book' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'books',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'book', $args );
}
```


## Registering A Custom Taxonomy With REST API Support

Registering a custom taxonomy with REST API support is very similar to registering a custom post type: pass `'show_in_rest' => true` in the arguments passed to `register_taxonomy`. You may optionally pass `rest_base` to change the base url for the taxonomy's routes.

The default controller for taxonomies is `WP_REST_Terms_Controller`. You may modify this with the `rest_controller_class` if you choose to use a custom controller.

Here is an example of how to register a custom taxonomy with REST API support:

```php
/**
 * Register a genre post type, with REST API support
 *
 * Based on example at: https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
add_action( 'init', 'my_book_taxonomy', 30 );
function my_book_taxonomy() {

  $labels = array(
    'name'              => _x( 'Genres', 'taxonomy general name' ),
    'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Genres' ),
    'all_items'         => __( 'All Genres' ),
    'parent_item'       => __( 'Parent Genre' ),
    'parent_item_colon' => __( 'Parent Genre:' ),
    'edit_item'         => __( 'Edit Genre' ),
    'update_item'       => __( 'Update Genre' ),
    'add_new_item'      => __( 'Add New Genre' ),
    'new_item_name'     => __( 'New Genre Name' ),
    'menu_name'         => __( 'Genre' ),
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'genre' ),
    'show_in_rest'          => true,
    'rest_base'             => 'genre',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
  );

  register_taxonomy( 'genre', array( 'book' ), $args );

}
```


## Adding REST API Support To Existing Content Types

When a custom post type or custom taxonomy has been added by code that you do not control, for example a theme or plugin you are using, you may need to add REST API support after it has alredy been registered. The arguments are the same as in the previous examples, but need to be added to the global `$wp_post_types` and `$wp_taxonomies` arrays.

Here is an example of adding REST API support to an existing custom post type:

```php
/**
 * Add REST API support to an already registered post type.
 */
add_action( 'init', 'my_custom_post_type_rest_support', 25 );
function my_custom_post_type_rest_support() {
  global $wp_post_types;

  //be sure to set this to the name of your post type!
  $post_type_name = 'planet';
  if( isset( $wp_post_types[ $post_type_name ] ) ) {
    $wp_post_types[$post_type_name]->show_in_rest = true;
    // Optionally customize the rest_base or controller class
    $wp_post_types[$post_type_name]->rest_base = $post_type_name;
    $wp_post_types[$post_type_name]->rest_controller_class = 'WP_REST_Posts_Controller';
  }
}
```

Here is an example of how to add REST API support to an already registered custom taxonomy.

```php
/**
 * Add REST API support to an already registered taxonomy.
 */
add_action( 'init', 'my_custom_taxonomy_rest_support', 25 );
function my_custom_taxonomy_rest_support() {
  global $wp_taxonomies;

  //be sure to set this to the name of your taxonomy!
  $taxonomy_name = 'planet_class';

  if ( isset( $wp_taxonomies[ $taxonomy_name ] ) ) {
    $wp_taxonomies[ $taxonomy_name ]->show_in_rest = true;

    // Optionally customize the rest_base or controller class
    $wp_taxonomies[ $taxonomy_name ]->rest_base = $taxonomy_name;
    $wp_taxonomies[ $taxonomy_name ]->rest_controller_class = 'WP_REST_Terms_Controller';
  }
}
```

If you are having trouble implementing either of these examples, be sure that you are adding these hooks with a sufficiently high priority. If the callback functions run before the post type or taxonomy is registered, then the `isset` check will prevent an error, but the support will not be added.


## Custom Link Relationships

Taxonomies & custom post types have a built-in association within WordPress, but what if you want to establish a link between two custom post types? This is not supported formally within WordPress itself, but we can create our own connections between arbitrary content types using the `_link` relation.
