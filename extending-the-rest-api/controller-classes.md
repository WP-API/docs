# Controller Classes

## Overview
When writing endpoints it can be helpful to use a controller class to handle the functionality of an endpoint. Controller classes will provide a standard way to interact with the API and also a more maintainable way to interact with the API. WordPress's current minimum PHP version is 5.2, if you are developing endpoints that will be used by the WordPress ecosystem at large you should consider supporting WordPress's minimum requirements.

PHP 5.2 does not have namespacing built into it. This means that every function you declare will be in the global scope. If you decide to use a common function name for endpoints like `get_items()` and another plugin also registers that function, PHP will fail with a fatal error. This is because the function `get_items()` is being declared twice. By wrapping our endpoints we can avoid these naming conflicts and also have a consistent way to interact with the API.


## Controllers

Controllers typically do one thing; they receive input, and generate output. For the WordPress REST API our controllers will handle request input as `WP_REST_Request` objects and generate response output as `WP_REST_Response` objects. Let's look at an example controller class:

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

		$response = prepare_item_for_response( $post );

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
	 * @param WP_REST_Request $request Current request.
	 */
	public function get_item_schema( $request ) {
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


## Overview & The Future

Controller classes tackle two big problems for us while developing endpoints; lack of namespacing and consistent structures. It is important to note that you should not abuse inheritance of your endpoints. For example: if you wrote a controller class for a posts endpoint, like the above example, and wanted to support custom post types as well, you should **NOT** extend your `My_REST_Posts_Controller` like this: `class My_CPT_REST_Controller extends My_REST_Posts_Controller`.

Instead, you should either create an entirely separate controller class, or make `My_REST_Posts_Controller` handle all available post types. When you start go down the path of inheritance, it is important to understand that if the parent classes ever have to change at any point and your subclasses are dependent on them, you will have a major headache. In most cases, you will want to create a base controller class as either an `interface` or `abstract class`, that each of your endpoint controllers can implement or extend. The `abstract class` approach is in use within the core WordPress REST API endpoints.


## Extending Internal Classes

The WordPress REST API follows a deliberate design pattern for its internal classes, which may be categorized as either *infrastructure* or *endpoint* classes.

Infrastructure classes support the endpoint classes. They handle the logic for the WordPress REST API without performing any data transformation. Endpoint classes, on the other hand, encapsulate the functional logic necessary to perform CRUD operations on WordPress resources. More specifically, our infrastructure classes include `WP_REST_Server` and `WP_REST_Request`, where our endpoint classes include `WP_REST_Posts_Controller` and `WP_REST_Users_Controller`.

Let's dive into what each infrastructure class does:


* `WP_REST_Server`: The main controller for the WordPress REST API. Routes are registered to the server within WordPress. When `WP_REST_Server` is called upon to serve a request, it determines which route is to be called, and passes the route callback a `WP_REST_Request` object. `WP_REST_Server` also handles authentication, and can perform request validation and permissions checks.
* `WP_REST_Request`: An object to represent the nature of the request. This object includes request details like request headers, parameters, and method, as well as the route. It can also perform request validation and sanitization.
* `WP_REST_Response`: An object to represent the nature of the response. This class extends `WP_HTTP_Response`, which includes headers, body, and status, and provides helper methods like `add_link()` for adding linked media, and `query_navigation_headers()` for getting query navigtion headers.

All endpoint classes extend `WP_REST_Controller`. This class is designed to represent a consistent pattern for manipulating WordPress resources. `WP_REST_Controller` implements these methods:

* `register_routes()`: After instantiating the class for the first time, call `register_routes()` to register the resource's routes to the server.
* `get_items()`: Get a collection of existing entities.
* `get_item()`: Get an existing entity. If the entity doesn't exist, HTTP error code 404 should be returned. If the requester doesn't have permission to access the entity, a HTTP error code 403 should be returned.
* `create_item()`: Create a new entity, given a valid `WP_REST_Request`. If creation is successful, a `WP_REST_Response` should be returned with HTTP `status=201` and `location` header to the new resource. If creation errors in some form, the appropriate HTTP error code and message should be returned.
* `update_item()`: Update an existing entity, given a valid `WP_REST_Request`.
* `delete_item()`: Delete an existing entity, given a valid `WP_REST_Request`. If deletion errors in some way, the appropriate HTTP error code should be returned.
* `get_items_permissions_check()`: Before calling the callback, check whether a given request has permissions to a collection of a resource.
* `get_item_permissions_check()`: Before calling the callback, check whether a given request has permissions to get an individual resource.
* `create_item_permissions_check()`: Before calling the callback, check whether a given request has permissions to create an individual resource.
* `update_item_permissions_check()`: Before calling the callback, check whether a given request has permissions to update an individual resource.
* `delete_item_permissions_check()`: Before calling the callback, check whether a given request has permissions to delete an individual resource.
* `prepare_item_for_response()`: Format a resource to match how it should appear in the response.
* `prepare_response_for_collection()`: When using `prepare_item_for_response()` a `WP_REST_Response` is returned. This helper function wraps all of these responses into one collection.
* `filter_response_by_context()`: Filters the response shape based on the provided context parameter.
* `get_item_schema()`: Get the resource's schema JSON Schema object.

When interacting with an endpoint that implements `WP_REST_Controller`, a HTTP client can expect each endpoint to behave in a similar way.
