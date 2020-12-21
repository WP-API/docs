# Controller Classes

## Overview

To register a new REST route, you must specify a number of callback functions to control endpoint behavior such as how a request is fulfilled, how permissions checks are applied, and how the schema for your resource gets generated. While it is possible to declare all of these methods in an ordinary PHP file without any wrapping namespace or class, all functions declared in that manner coexist in the same global scope. If you decide to use a common function name for your endpoint logic like `get_items()` and another plugin (or another endpoint in your own plugin) also registers a function with that same name, PHP will fail with a fatal error because the function `get_items()` is being declared twice.

You can avoid this issue by naming your callback functions using a unique prefix such as `myplugin_myendpoint_` to avoid any potential conflics:

```php
function myplugin_myendpoint_register_routes() { /* ... */ }
function myplugin_myendpoint_get_item() { /* ... */ }
function myplugin_myendpoint_get_item_schema() { /* ... */ }
// etcetera

add_action( 'rest_api_init', 'myplugin_myendpoint_register_routes' );
```

You may already be familiar with this approach because it is commonly used within theme `functions.php` files. However these prefixes are unnecessarily verbose, and several better options exist to group and encapsulate your endpoint's logic in a more maintainable way.

WordPress currently requires PHP 5.6 or greater. PHP 5.6 supports <a href="https://www.php.net/manual/en/language.namespaces.rationale.php">namespaces</a>, which provide an easy way to encapsulate your endpoint's functionality. By declaring a `namespace` at the top of your endpoint's PHP file, all methods within that namespace will be declared within that namespace and will no longer conflict with global functions. You may then use shorter, more-readable names for your endpoint callbacks.

```php
namespace MyPlugin\API\MyEndpoint;

function register_routes() { /* ... */ }
function get_item() { /* ... */ }
function get_item_schema() { /* ... */ }
// and so on

add_action( 'rest_api_init', __NAMESPACE__ . '\\register_routes' );
```

While these shorter function names are simpler to work with, they don't provide any other benefits over declaring global functions. For this reason the core REST API endpoints within WordPress are all implemented using a _controller class_.

The remainder of this page details how to write your own controller class and explains the advantages of doing so.

## Controllers

A controller receives input (a `WP_REST_Request` object, in the case of the WordPress REST API) and generates response output as `WP_REST_Response` objects. Let's look at an example controller class:

```php
class My_REST_Posts_Controller {

	// Here initialize our namespace and resource name.
	public function __construct() {
		$this->namespace     = '/my-namespace/v1';
		$this->resource_name = 'posts';
	}

	// Register our routes.
	public function register_routes() {
		register_rest_route( $this->namespace, '/' . $this->resource_name, array(
			// Here we register the readable endpoint for collections.
			array(
				'methods'   => 'GET',
				'callback'  => array( $this, 'get_items' ),
				'permission_callback' => array( $this, 'get_items_permissions_check' ),
			),
			// Register our schema callback.
			'schema' => array( $this, 'get_item_schema' ),
		) );
		register_rest_route( $this->namespace, '/' . $this->resource_name . '/(?P<id>[\d]+)', array(
			// Notice how we are registering multiple endpoints the 'schema' equates to an OPTIONS request.
			array(
				'methods'   => 'GET',
				'callback'  => array( $this, 'get_item' ),
				'permission_callback' => array( $this, 'get_item_permissions_check' ),
			),
			// Register our schema callback.
			'schema' => array( $this, 'get_item_schema' ),
		) );
	}

	/**
	 * Check permissions for the posts.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_items_permissions_check( $request ) {
		if ( ! current_user_can( 'read' ) ) {
			return new WP_Error( 'rest_forbidden', esc_html__( 'You cannot view the post resource.' ), array( 'status' => $this->authorization_status_code() ) );
		}
		return true;
	}

	/**
	 * Grabs the five most recent posts and outputs them as a rest response.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_items( $request ) {
		$args = array(
			'post_per_page' => 5,
		);
		$posts = get_posts( $args );

		$data = array();

		if ( empty( $posts ) ) {
			return rest_ensure_response( $data );
		}

		foreach ( $posts as $post ) {
			$response = $this->prepare_item_for_response( $post, $request );
			$data[] = $this->prepare_response_for_collection( $response );
		}

		// Return all of our comment response data.
		return rest_ensure_response( $data );
	}

	/**
	 * Check permissions for the posts.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_item_permissions_check( $request ) {
		if ( ! current_user_can( 'read' ) ) {
			return new WP_Error( 'rest_forbidden', esc_html__( 'You cannot view the post resource.' ), array( 'status' => $this->authorization_status_code() ) );
		}
		return true;
	}

	/**
	 * Grabs the five most recent posts and outputs them as a rest response.
	 *
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_item( $request ) {
		$id = (int) $request['id'];
		$post = get_post( $id );

		if ( empty( $post ) ) {
			return rest_ensure_response( array() );
		}

		$response = $this->prepare_item_for_response( $post, $request );

		// Return all of our post response data.
		return $response;
	}

	/**
	 * Matches the post data to the schema we want.
	 *
	 * @param WP_Post $post The comment object whose response is being prepared.
	 */
	public function prepare_item_for_response( $post, $request ) {
		$post_data = array();

		$schema = $this->get_item_schema( $request );

		// We are also renaming the fields to more understandable names.
		if ( isset( $schema['properties']['id'] ) ) {
			$post_data['id'] = (int) $post->ID;
		}

		if ( isset( $schema['properties']['content'] ) ) {
			$post_data['content'] = apply_filters( 'the_content', $post->post_content, $post );
		}

		return rest_ensure_response( $post_data );
	}

	/**
	 * Prepare a response for inserting into a collection of responses.
	 *
	 * This is copied from WP_REST_Controller class in the WP REST API v2 plugin.
	 *
	 * @param WP_REST_Response $response Response object.
	 * @return array Response data, ready for insertion into collection data.
	 */
	public function prepare_response_for_collection( $response ) {
		if ( ! ( $response instanceof WP_REST_Response ) ) {
			return $response;
		}

		$data = (array) $response->get_data();
		$server = rest_get_server();

		if ( method_exists( $server, 'get_compact_response_links' ) ) {
			$links = call_user_func( array( $server, 'get_compact_response_links' ), $response );
		} else {
			$links = call_user_func( array( $server, 'get_response_links' ), $response );
		}

		if ( ! empty( $links ) ) {
			$data['_links'] = $links;
		}

		return $data;
	}

	/**
	 * Get our sample schema for a post.
	 *
	 * @return array The sample schema for a post
	 */
	public function get_item_schema() {
		if ( $this->schema ) {
			// Since WordPress 5.3, the schema can be cached in the $schema property.
			return $this->schema;
		}
	
		$this->schema = array(
			// This tells the spec of JSON Schema we are using which is draft 4.
			'$schema'              => 'http://json-schema.org/draft-04/schema#',
			// The title property marks the identity of the resource.
			'title'                => 'post',
			'type'                 => 'object',
			// In JSON Schema you can specify object properties in the properties attribute.
			'properties'           => array(
				'id' => array(
					'description'  => esc_html__( 'Unique identifier for the object.', 'my-textdomain' ),
					'type'         => 'integer',
					'context'      => array( 'view', 'edit', 'embed' ),
					'readonly'     => true,
				),
				'content' => array(
					'description'  => esc_html__( 'The content for the object.', 'my-textdomain' ),
					'type'         => 'string',
				),
			),
		);

		return $this->schema;
	}

	// Sets up the proper HTTP status code for authorization.
	public function authorization_status_code() {

		$status = 401;

		if ( is_user_logged_in() ) {
			$status = 403;
		}

		return $status;
	}
}

// Function to register our new routes from the controller.
function prefix_register_my_rest_routes() {
	$controller = new My_REST_Posts_Controller();
	$controller->register_routes();
}

add_action( 'rest_api_init', 'prefix_register_my_rest_routes' );
```

## Benefits of Classes

This class contains all the same components you may have written using simple functions. The structure of a class gives us a convenient way to refer to related methods using the `$this->method_name()` syntax, but unlike a namespace the class also permits us to cache values and share logic.

In the `get_item_schema ` method, note that we store the generated schema on the class as `$this->schema`. Class properties make it easy to cache these sorts of generated values. The introduction of schema caching in WordPress 5.3 increased the speed of some core REST API collection responses by up to 40%, so you should definitely consider following this pattern in your own controllers.

## Class Inheritance & WP_REST_Controller

We've seen above how classes solve the global-function encapsulation issue, and how a class instance can be used to cache complex values to speed up response processing. The other major advantage of classes is the way in which class inheritance lets you share logic between multiple endpoints.

Our example class here did not extend any base class, but within WordPress core all endpoint controllers extend a single `abstract` controller class called `WP_REST_Controller`. Extending this class gives you access to a number of useful methods, including but not limited to:

- [`prepare_response_for_collection()`](https://developer.wordpress.org/reference/classes/wp_rest_controller/prepare_response_for_collection/): Prepare a response for insertion into a collection.
- [`add_additional_fields_to_object()`](https://developer.wordpress.org/reference/classes/wp_rest_controller/add_additional_fields_to_object/): append any registered REST fields to your prepared response object.
- [`get_fields_for_response()`](https://developer.wordpress.org/reference/classes/wp_rest_controller/get_fields_for_response/): inspect the `_fields` query parameter to determine which response fields have been requested.
- [`get_context_param()`](https://developer.wordpress.org/reference/classes/wp_rest_controller/get_context_param/): Retrieve the `context` parameter.
* [`filter_response_by_context()`](https://developer.wordpress.org/reference/classes/wp_rest_controller/filter_response_by_context/): Filters the response shape based on the provided context parameter.
- [`get_collection_params()`](https://developer.wordpress.org/reference/classes/wp_rest_controller/get_collection_params/): return a basic set of parameter definitions useful for collection endpoints.

Endpoint-specific methods like `get_item`, `register_routes`, and `update_item_permissions_check` are not fully implemented by the abstract class, and must be defined in your own class.

Visit the [`WP_REST_Controller` class reference page](https://developer.wordpress.org/reference/classes/wp_rest_controller/#methods) for a complete list of this controller's methods.

It is important to note that `WP_REST_Controller` is implemented as an `abstract` class and only contains logic that is clearly needed in multiple classes. Inheritance couples your class to the base class it extends, and poorly-considered inheritance trees can make your endpoints much harder to maintain.

As an example, if you wrote a controller class for a posts endpoint (like the example above) and wanted to support custom post types as well, you should **NOT** extend your `My_REST_Posts_Controller` like this: `class My_CPT_REST_Controller extends My_REST_Posts_Controller`. Instead, you should either create an entirely separate base controller class for the shared logic, or make `My_REST_Posts_Controller` handle all available post types. Endpoint logic is subject to changing business requirements, and you don't want to have to change a number of unrelated controllers every time you update your base posts controller.

In most cases you will want to create a base controller class as either an `interface` or `abstract class` which each of your endpoint controllers can implement or extend, or to extend one of the core WordPress REST classes directly.

## Internal WordPress REST API Classes

The WordPress REST API follows a deliberate design pattern for its internal classes, which may be categorized as either *infrastructure* or *endpoint* classes.

Endpoint classes encapsulate the functional logic necessary to perform [CRUD](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete) operations on WordPress resources. WordPress exposes many REST API endpoints (such as [`WP_REST_Posts_Controller`](https://developer.wordpress.org/reference/classes/wp_rest_posts_controller/)), but as discussed above all endpoints extend from a common base controller class:

* [`WP_REST_Controller`](https://developer.wordpress.org/reference/classes/wp_rest_controller/): The base class for all WordPress core endpoints. This class is designed to represent a consistent pattern for manipulating WordPress resources. When interacting with an endpoint that implements `WP_REST_Controller`, a HTTP client can expect each endpoint to behave in a consistent way.

Infrastructure classes support the endpoint classes. They handle the logic for the WordPress REST API without performing any data transformation. The WordPress REST API implements three key infrastructure classes:

* [`WP_REST_Server`](https://developer.wordpress.org/reference/classes/wp_rest_server): The main controller for the WordPress REST API. Routes are registered to the server within WordPress. When `WP_REST_Server` is called upon to serve a request, it determines which route is to be called, and passes the route callback a `WP_REST_Request` object. `WP_REST_Server` also handles authentication, and can perform request validation and permissions checks.
* [`WP_REST_Request`](https://developer.wordpress.org/reference/classes/wp_rest_request): An object to represent the nature of the request. This object includes request details like request headers, parameters, and method, as well as the route. It can also perform request validation and sanitization.
* [`WP_REST_Response`](https://developer.wordpress.org/reference/classes/wp_rest_response): An object to represent the nature of the response. This class extends `WP_HTTP_Response`, which includes headers, body, and status, and provides helper methods like `add_link()` for adding linked media, and `query_navigation_headers()` for getting query navigtion headers.

Most types of API-driven application will not require you to extend or interact directly with the infrastructure layer, but if you are implementing your own REST API endpoints your application will likely benefit from one or more endpoint controller classes which extend `WP_REST_Controller`.
