# Adding Custom Endpoints

The WordPress REST API is more than just a set of default routes. It is also a tool for creating custom routes and endpoints. The WordPress front-end provides a default set of URL mappings, but the tools used to create them (e.g. the Rewrites API, as well as the query classes: `WP_Query`, `WP_User`, etc) are also available for creating your own URL mappings, or custom queries.

This document details how to create a totally custom route, with its own endpoints. We'll first work through a short example, then expand it out to the full controller pattern as used internally.


## Bare Basics

So you want to add custom endpoints to the API? Fantastic! Let's get started with a simple example.
Let's start with a simple function that looks like this:

```php
<?php
/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function my_awesome_func( $data ) {
  $posts = get_posts( array(
    'author' => $data['id'],
  ) );

  if ( empty( $posts ) ) {
    return null;
  }

  return $posts[0]->post_title;
}
```

To make this available via the API, we need to register a route. This tells the API to respond to a given request with our function. We do this through a function called `register_rest_route`, which should be called in a callback on `rest_api_init` to avoid doing extra work when the API isn't loaded.

We need to pass in three things to `register_rest_route`: the namespace, the route we want, and the options. We'll come back to the namespace in a bit, but for now, let's pick `myplugin/v1`. We're going to have the route match anything with `/author/{id}`, where `{id}` is an integer.

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
  ) );
} );
```

Right now, we're only registering the one endpoint for the route. The term "route" refers to the URL, whereas "endpoint" refers to the function behind it that corresponds to a method *and* a URL (for more information, see the [Glossary](https://developer.wordpress.org/rest-api/glossary/)).

For example, if your site domain is `example.com` and you've kept the API path of `wp-json`, then the full URL would be `http://example.com/wp-json/myplugin/v1/author/(?P\d+)`.

Each route can have any number of endpoints, and for each endpoint, you can define the HTTP methods allowed, a callback function for responding to the request and a permissions callback for creating custom permissions. In addition you can define allowed fields in the request and for each field specify a default value, a sanitization callback, a validation callback, and whether the field is required.


### Namespacing

Namespaces are the first part of the URL for the endpoint. They should be used as a vendor/package prefix to prevent clashes between custom routes. Namespaces allows for two plugins to add a route of the same name, with different functionality.

Namespaces in general should follow the pattern of `vendor/v1`, where `vendor` is typically your plugin or theme slug, and `v1` represents the first version of the API. If you ever need to break compatibility with new endpoints, you can then bump this to `v2`.

The above scenario, two routes with the same name, from two different plugins, requires all vendors to use a unique namespace. Failing to do so is analogous to a failure to use a vendor function prefix, class prefix and/ or class namespace in a theme or plugin, which is **very very bad**.

An added benefit of using namespaces is that clients can detect support for your custom API. The API index lists out the available namespaces on a site:

```php
{
  "name": "WordPress Site",
  "description": "Just another WordPress site",
  "url": "http://example.com/",
  "namespaces": [
    "wp/v2",
    "vendor/v1",
    "myplugin/v1",
    "myplugin/v2",
  ]
}
```

If a client wants to check that your API exists on a site, they can check against this list. (For more information, see the [Discovery guide](https://developer.wordpress.org/rest-api/using-the-rest-api/discovery/).)

### Arguments

By default, routes receive all arguments passed in from the request. These are merged into a single set of parameters, then added to the Request object, which is passed in as the first parameter to your endpoint:

```php
<?php
function my_awesome_func( WP_REST_Request $request ) {
  // You can access parameters via direct array access on the object:
  $param = $request['some_param'];

  // Or via the helper method:
  $param = $request->get_param( 'some_param' );

  // You can get the combined, merged set of parameters:
  $parameters = $request->get_params();

  // The individual sets of parameters are also available, if needed:
  $parameters = $request->get_url_params();
  $parameters = $request->get_query_params();
  $parameters = $request->get_body_params();
  $parameters = $request->get_json_params();
  $parameters = $request->get_default_params();

  // Uploads aren't merged in, but can be accessed separately:
  $parameters = $request->get_file_params();
}
```

(To find out exactly how parameters are merged, check the source of `WP_REST_Request::get_parameter_order()`; the basic order is body, query, URL, then defaults.)

Normally, you'll get every parameter brought in unaltered. However, you can register your arguments when registering your route, which allows you to run sanitization and validation on these.

If the request has the `Content-type: application/json` header set and valid JSON in the body, `get_json_params()` will return the parsed JSON body as an associative array.

Arguments are defined as a map in the key `args` for each endpoint (next to your `callback` option). This map uses the name of the argument of the key, with the value being a map of options for that argument. This array can contain a key for `default`, `required`, `sanitize_callback` and `validate_callback`.

* `default`: Used as the default value for the argument, if none is supplied.
* `required`: If defined as true, and no value is passed for that argument, an error will be returned. No effect if a default value is set, as the argument will always have a value.
* `validate_callback`: Used to pass a function that will be passed the value of the argument. That function should return true if the value is valid, and false if not.
* `sanitize_callback`: Used to pass a function that is used to sanitize the value of the argument before passing it to the main callback.

Using `sanitize_callback` and `validate_callback` allows the main callback to act only to process the request, and prepare data to be returned using the `WP_REST_Response` class. By using these two callbacks, you will be able to safely assume your inputs are valid and safe when processing.

Taking our previous example, we can ensure the parameter passed in is always a number:

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
    'args' => array(
      'id' => array(
        'validate_callback' => function($param, $request, $key) {
          return is_numeric( $param );
        }
      ),
    ),
  ) );
} );
```

You could also pass in a function name to `validate_callback`, but passing certain functions like `is_numeric` directly will not only throw a warning about having extra parameters passed to it, but will also return `NULL` causing the callback function to be called with invalid data. We hope to [eventually solve this problem in WordPress core](https://core.trac.wordpress.org/ticket/34659).

We could also use something like `'sanitize_callback' => 'absint'` instead, but validation will throw an error, allowing clients to understand what they're doing wrong. Sanitization is useful when you would rather change the data being input rather than throwing an error (such as invalid HTML).


### Return Value

After your callback is called, the return value is then converted to JSON, and returned to the client. This allows you to return basically any form of data. In our example above, we're returning either a string or null, which are automatically handled by the API and converted to JSON.

Like any other WordPress function, you can also return a `WP_Error` instance. This error information will be passed along to the client, along with a 500 Internal Service Error status code. You can further customise your error by setting the `status` option in the `WP_Error` instance data to a code, such as `400` for bad input data.
Taking our example from before, we can now return an error instance:

```php
<?php
/**
 * Grab latest post title by an author!
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,
 * or null if none.
 */
function my_awesome_func( $data ) {
  $posts = get_posts( array(
    'author' => $data['id'],
  ) );

  if ( empty( $posts ) ) {
    return new WP_Error( 'no_author', 'Invalid author', array( 'status' => 404 ) );
  }

  return $posts[0]->post_title;
}
```

When an author doesn't have any posts belonging to them, this will return a 404 Not Found error to the client:

```
HTTP/1.1 404 Not Found

[{
   "code": "no_author",
   "message": "Invalid author",
   "data": { "status": 404 }
}]
```

For more advanced usage, you can return a `WP_REST_Response` object. This object "wraps" normal body data, but allows you to return a custom status code, or custom headers. You can also [add links to your response](https://developer.wordpress.org/rest-api/using-the-rest-api/linking-and-embedding/). The quickest way to use this is via the constructor:

```php
<?php
$data = array( 'some', 'response', 'data' );

// Create the response object
$response = new WP_REST_Response( $data );

// Add a custom status code
$response->set_status( 201 );

// Add a custom header
$response->header( 'Location', 'http://example.com/' );
```

When wrapping existing callbacks, you should always use `rest_ensure_response()` on the return value. This will take raw data returned from an endpoint and automatically turn it into a `WP_REST_Response` for you. (Note that `WP_Error` is not converted to a `WP_REST_Response` to allow proper error handling.)

Importantly, a REST API route's callback should _always_ return data; it shouldn't attempt to send the response body itself. This ensures that the additional processing that the REST API server does, like handling linking/embedding, sending headers, etc… takes place. In other words, don't call `die( wp_json_encode( $data ) );` or `wp_send_json( $data )`. As of [WordPress 5.5](https://core.trac.wordpress.org/changeset/48361), a `_doing_it_wrong` notice is issued if the `wp_send_json()` family of functions is used during a REST API request.

> Return a WP_REST_Response or WP_Error object from your callback when using the REST API.

### Permissions Callback

You must also register a permissions callback for the endpoint. This is a function that checks if the user can perform the action (reading, updating, etc) before the real callback is called. This allows the API to tell the client what actions they can perform on a given URL without needing to attempt the request first.

This callback can be registered as `permission_callback`, again in the endpoint options next to your `callback` option. This callback should return a boolean or a `WP_Error` instance. If this function returns true, the response will be processed. If it returns false, a default error message will be returned and the request will not proceed with processing. If it returns a `WP_Error`, that error will be returned to the client.

The permissions callback is run after remote authentication, which sets the current user. This means you can use `current_user_can` to check if the user that has been authenticated has the appropriate capability for the action, or any other check based on current user ID. Where possible, you should always use `current_user_can`; instead of checking if the user is logged in (authentication), check whether they can perform the action (authorization).

Once you register a `permission_callback`, you will need to authenticate your requests (for example by including a nonce parameter) or you will receive a `rest_forbidden` error. See [Authentication](https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/) for more details.

Continuing with our previous example, we can make it so that only editors or above can view this author data. We can check a number of different capabilities here, but the best is `edit_others_posts`, which is really the core of what an editor is. To do this, we just need a callback here:

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
    'args' => array(
      'id' => array(
        'validate_callback' => 'is_numeric'
      ),
    ),
    'permission_callback' => function () {
      return current_user_can( 'edit_others_posts' );
    }
  ) );
} );
```

Note that the permission callback also receives the Request object as the first parameter, so you can do checks based on request arguments if you need to.

As of [WordPress 5.5](https://core.trac.wordpress.org/changeset/48526), if a `permission_callback` is not provided, the REST API will issue a `_doing_it_wrong` notice.

> The REST API route definition for myplugin/v1/author is missing the required permission_callback argument. For REST API routes that are intended to be public, use __return_true as the permission callback.

If your REST API endpoint is public, you can use `__return_true` as the permission callback.

```php
<?php
add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
    'permission_callback' => '__return_true',
  ) );
} );
```

## The Controller Pattern

The controller pattern is a best practice for working with complex endpoints with the API.

It is recommended that you read ["Extending Internal Classes"](https://developer.wordpress.org/rest-api/extending-the-rest-api/controller-classes/#extending-internal-classes) before reading this section. Doing so will familiarize you with the patterns used by the default routes, which is the best practice. While it is not required that the class you use to process your request extends the `WP_REST_Controller` class or a class that extends it, doing so allows you to inherit work done in those classes. In addition, you can rest assured that you're following best practices based on the controller methods you're using.

At their core, controllers are nothing more than a set of commonly named methods to match up with REST conventions, along with some handy helpers. Controllers register their routes in a `register_routes` method, respond to requests with `get_items`, `get_item`, `create_item`, `update_item` and `delete_item`, and have similarly named permission check methods. Following this pattern will ensure you don't miss any steps or functionality in your endpoints.

To use controllers, you first need to subclass the base controller. This gives you a base set of methods, ready for you to add your own behaviour into.

Once we've subclassed the controller, we need to instantiate the class to get it working. This should be done inside of a callback hooked into `rest_api_init`, which ensures we only instantiate the class when we need to. The normal controller pattern is to call `$controller->register_routes()` inside this callback, where the class can then register its endpoints.


## Examples

The following is a "starter" custom route:

```php
<?php

class Slug_Custom_Route extends WP_REST_Controller {

  /**
   * Register the routes for the objects of the controller.
   */
  public function register_routes() {
    $version = '1';
    $namespace = 'vendor/v' . $version;
    $base = 'route';
    register_rest_route( $namespace, '/' . $base, array(
      array(
        'methods'             => WP_REST_Server::READABLE,
        'callback'            => array( $this, 'get_items' ),
        'permission_callback' => array( $this, 'get_items_permissions_check' ),
        'args'                => array(

        ),
      ),
      array(
        'methods'             => WP_REST_Server::CREATABLE,
        'callback'            => array( $this, 'create_item' ),
        'permission_callback' => array( $this, 'create_item_permissions_check' ),
        'args'                => $this->get_endpoint_args_for_item_schema( true ),
      ),
    ) );
    register_rest_route( $namespace, '/' . $base . '/(?P<id>[\d]+)', array(
      array(
        'methods'             => WP_REST_Server::READABLE,
        'callback'            => array( $this, 'get_item' ),
        'permission_callback' => array( $this, 'get_item_permissions_check' ),
        'args'                => array(
          'context' => array(
            'default' => 'view',
          ),
        ),
      ),
      array(
        'methods'             => WP_REST_Server::EDITABLE,
        'callback'            => array( $this, 'update_item' ),
        'permission_callback' => array( $this, 'update_item_permissions_check' ),
        'args'                => $this->get_endpoint_args_for_item_schema( false ),
      ),
      array(
        'methods'             => WP_REST_Server::DELETABLE,
        'callback'            => array( $this, 'delete_item' ),
        'permission_callback' => array( $this, 'delete_item_permissions_check' ),
        'args'                => array(
          'force' => array(
            'default' => false,
          ),
        ),
      ),
    ) );
    register_rest_route( $namespace, '/' . $base . '/schema', array(
      'methods'  => WP_REST_Server::READABLE,
      'callback' => array( $this, 'get_public_item_schema' ),
    ) );
  }

  /**
   * Get a collection of items
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function get_items( $request ) {
    $items = array(); //do a query, call another class, etc
    $data = array();
    foreach( $items as $item ) {
      $itemdata = $this->prepare_item_for_response( $item, $request );
      $data[] = $this->prepare_response_for_collection( $itemdata );
    }

    return new WP_REST_Response( $data, 200 );
  }

  /**
   * Get one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function get_item( $request ) {
    //get parameters from request
    $params = $request->get_params();
    $item = array();//do a query, call another class, etc
    $data = $this->prepare_item_for_response( $item, $request );

    //return a response or error based on some conditional
    if ( 1 == 1 ) {
      return new WP_REST_Response( $data, 200 );
    } else {
      return new WP_Error( 'code', __( 'message', 'text-domain' ) );
    }
  }

  /**
   * Create one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function create_item( $request ) {
    $item = $this->prepare_item_for_database( $request );

    if ( function_exists( 'slug_some_function_to_create_item' ) ) {
      $data = slug_some_function_to_create_item( $item );
      if ( is_array( $data ) ) {
        return new WP_REST_Response( $data, 200 );
      }
    }

    return new WP_Error( 'cant-create', __( 'message', 'text-domain' ), array( 'status' => 500 ) );
  }

  /**
   * Update one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function update_item( $request ) {
    $item = $this->prepare_item_for_database( $request );

    if ( function_exists( 'slug_some_function_to_update_item' ) ) {
      $data = slug_some_function_to_update_item( $item );
      if ( is_array( $data ) ) {
        return new WP_REST_Response( $data, 200 );
      }
    }

    return new WP_Error( 'cant-update', __( 'message', 'text-domain' ), array( 'status' => 500 ) );
  }

  /**
   * Delete one item from the collection
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|WP_REST_Response
   */
  public function delete_item( $request ) {
    $item = $this->prepare_item_for_database( $request );

    if ( function_exists( 'slug_some_function_to_delete_item' ) ) {
      $deleted = slug_some_function_to_delete_item( $item );
      if ( $deleted ) {
        return new WP_REST_Response( true, 200 );
      }
    }

    return new WP_Error( 'cant-delete', __( 'message', 'text-domain' ), array( 'status' => 500 ) );
  }

  /**
   * Check if a given request has access to get items
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function get_items_permissions_check( $request ) {
    //return true; <--use to make readable by all
    return current_user_can( 'edit_something' );
  }

  /**
   * Check if a given request has access to get a specific item
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function get_item_permissions_check( $request ) {
    return $this->get_items_permissions_check( $request );
  }

  /**
   * Check if a given request has access to create items
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function create_item_permissions_check( $request ) {
    return current_user_can( 'edit_something' );
  }

  /**
   * Check if a given request has access to update a specific item
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function update_item_permissions_check( $request ) {
    return $this->create_item_permissions_check( $request );
  }

  /**
   * Check if a given request has access to delete a specific item
   *
   * @param WP_REST_Request $request Full data about the request.
   * @return WP_Error|bool
   */
  public function delete_item_permissions_check( $request ) {
    return $this->create_item_permissions_check( $request );
  }

  /**
   * Prepare the item for create or update operation
   *
   * @param WP_REST_Request $request Request object
   * @return WP_Error|object $prepared_item
   */
  protected function prepare_item_for_database( $request ) {
    return array();
  }

  /**
   * Prepare the item for the REST response
   *
   * @param mixed $item WordPress representation of the item.
   * @param WP_REST_Request $request Request object.
   * @return mixed
   */
  public function prepare_item_for_response( $item, $request ) {
    return array();
  }

  /**
   * Get the query params for collections
   *
   * @return array
   */
  public function get_collection_params() {
    return array(
      'page'     => array(
        'description'       => 'Current page of the collection.',
        'type'              => 'integer',
        'default'           => 1,
        'sanitize_callback' => 'absint',
      ),
      'per_page' => array(
        'description'       => 'Maximum number of items to be returned in result set.',
        'type'              => 'integer',
        'default'           => 10,
        'sanitize_callback' => 'absint',
      ),
      'search'   => array(
        'description'       => 'Limit results to those matching a string.',
        'type'              => 'string',
        'sanitize_callback' => 'sanitize_text_field',
      ),
    );
  }
}
```
