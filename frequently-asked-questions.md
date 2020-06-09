# Frequently Asked Questions

This page provides solutions to some common questions and problems that may arise while using the API. If your question is not explained here it may have been answered in the [WordPress support forums](https://wordpress.org/support/topic-tag/rest-api).


## Can I disable the REST API?

You should not disable the REST API; doing so will break WordPress Admin functionality that depends on the API being active. However, you may use a filter to require that API consumers be authenticated, which effectively prevents anonymous external access. See below for more information.


## Require Authentication for All Requests

You can require authentication for all REST API requests by adding an `is_user_logged_in` check to the [`rest_authentication_errors`](https://developer.wordpress.org/reference/hooks/rest_authentication_errors/) filter.

Note: The incoming callback parameter can be either `null`, a `WP_Error`, or a boolean. The type of the parameter indicates the state of authentication:

 * `null`: no authentication check has yet been performed, and the hook callback may apply custom authentication logic.
 * boolean: indicates a previous authentication method check was performed. Boolean `true` indicates the request was successfully authenticated, and boolean `false` indicates authentication failed.
 * `WP_Error`: Some kind of error was encountered.

```php
add_filter( 'rest_authentication_errors', function( $result ) {
    // If a previous authentication check was applied,
    // pass that result along without modification.
    if ( true === $result || is_wp_error( $result ) ) {
        return $result;
    }

    // No authentication has been performed yet.
    // Return an error if user is not logged in.
    if ( ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_not_logged_in',
            __( 'You are not currently logged in.' ),
            array( 'status' => 401 )
        );
    }

    // Our custom authentication check should have no effect
    // on logged-in requests
    return $result;
});
```


## Can I make API requests from PHP within a plugin?

Yes, you can! Use [rest_do_request](https://developer.wordpress.org/reference/functions/rest_do_request/) to make API requests internally within other WordPress code:

```php
$request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
// Set one or more request query parameters
$request->set_param( 'per_page', 20 );
$response = rest_do_request( $request );
```

## How do I use the _embed parameter on internal requests?

Setting the `_embed` param on the request object won't work.

```php
$request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
$request->set_param( '_embed', 1 );
$response = rest_do_request( $request );
```

Instead, manually call the [`WP_REST_Server::response_to_data`](https://developer.wordpress.org/reference/classes/wp_rest_server/) function.

```php
$request = new WP_REST_Request( 'GET', '/wp/v2/posts' );
$response = rest_do_request( $request );
$data = rest_get_server()->response_to_data( $response, true );
var_dump( $data['_embedded'] );
```

## What happened to the `?filter=` query parameter?

When the REST API was merged into WordPress core the `?filter` query parameter was removed to prevent future compatibility and maintenance issues. The ability to pass arbitrary WP_Query arguments to the API using a `?filter` query parameter was necessary at the genesis of the REST API project, but most API response filtering functionality has been superseded by more robust query parameters like `?categories=`, `?slug=` and `?per_page=`.

First-party query parameters should be used whenever possible. However, the [rest-filter](https://github.com/wp-api/rest-filter) plugin restores the ability to pass arbitrary `?filter` values in API request if needed.


## Query parameters are not working

If you find that query parameters such as `?page=2` or `?_embed` are not having any effect, your server may not be properly configured to detect them. If you are using Nginx to serve your website, look for a `try_files` line in your site configuration. If it looks like this:

```
try_files $uri $uri/ /index.php$args;
```

change it to this:

```
try_files $uri $uri/ /index.php$is_args$args;
```

Adding `$is_args` (which will print a ? character if query arguments are found) will allow WordPress to properly receive and interpret the query parameters.


## Why is Authentication not working?

If you're finding that you are sending Authentication headers but the request is not being accepted, and you're using Apache in a CGI environment, Apache may be stripping the headers. Try adding this to a configuration file or .htaccess:

```
<IfModule mod_setenvif>
  SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
</IfModule>
```

## Why is the REST API not verifying the incoming Origin header? Does this expose my site to CSRF attacks?

Cross-Origin Resource Sharing (CORS) is a mechanism which allows a website to control which Origins (originating external sites) are allowed to access your site's data. CORS prevents against a particular type of attack known as Cross-Site Request Forgery, or CSRF. However, WordPress has an existing CSRF protection mechanism which uses [nonces](https://developer.wordpress.org/plugins/security/nonces/). Tightening CORS restrictions would prevent some authentication methods, so the WordPress REST API uses nonces for CSRF protection instead of CORS.

Because the WordPress REST API does not verify the Origin header of incoming requests, public REST API endpoints may therefore be accessed from any site.

This is an [intentional design decision](https://core.trac.wordpress.org/changeset/40600), but if you wish to prevent your site from being accessed from unknown origins you may unhook the default [`rest_send_cors_headers` function](https://developer.wordpress.org/reference/functions/rest_send_cors_headers/) from the [`rest_pre_serve_request` filter hook](https://developer.wordpress.org/reference/hooks/rest_pre_serve_request/), then hook in your own function to that same filter to specify stricter CORS headers.
