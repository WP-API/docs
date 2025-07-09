# Examples

The following examples show how to use the WordPress REST API with PHP/cURL and the API's `WP_REST_Request` class. With external PHP scripts, you can access the REST API via the [libcurl library](https://www.php.net/manual/en/intro.curl.php). With the `WP_REST_Request` class, you can internally access the REST API from [WordPress PHP plugins](https://developer.wordpress.org/rest-api/frequently-asked-questions/#can-i-make-api-requests-from-php-within-a-plugin). The examples were tested with PHP version 8.3.8.

Although the REST API provides public data to clients anonymously, many REST operations require user authentication. To make authenticated requests, you must first set up an [authentication method](https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/) in WordPress.

[tip] 
**Tip:**
You can optionally configure the REST API to [require authentication for all operations](https://developer.wordpress.org/rest-api/frequently-asked-questions/#require-authentication-for-all-requests).
[/tip]

The examples in this topic assume a local development environment, with calls made with the http protocol. For calls requiring credentials, the Basic Authentication method is used as provided by the [Basic-Auth plugin](https://github.com/WP-API/Basic-Auth). 

Alternatively, consider using [Basic Authentication with Application Passwords](https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/#basic-authentication-with-application-passwords). A core WordPress feature, it requires https.

If you are using a remote development environment, https is strongly recommended, with either a self-signed or trusted certificate.

## PHP/cURL

All of the examples use the following PHP/cURL options, set in an array. For an explanation, see [cURL options](https://www.php.net/manual/en/function.curl-setopt.php).

```php
$curl_options = array(
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => -1, 
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_TIMEOUT => 0, 
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER => 1,
  CURLOPT_VERBOSE => true
);
```

In addition, the examples use the PHP functions `json_decode()` and `json_encode()` to print HTTP responses in prettified JSON format.

### Retrieving Approved Comments

This example uses the [comments](https://developer.wordpress.org/rest-api/reference/comments/) route to get comments with a status of `approved`. Approved comments do not require user credentials to retrieve.

```php
$curl = curl_init();
curl_setopt_array($curl, $curl_options);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_URL, 'http://example.com/wp-json/wp/v2/comments');
$response = curl_exec($curl);
$json_pretty = json_encode(json_decode($response),JSON_PRETTY_PRINT);
echo $json_pretty;
curl_close($curl);
```

### Retrieving Pending Comments

This example uses the [comments](https://developer.wordpress.org/rest-api/reference/comments/) route to get comments with a status of `hold`. Awaiting evaluation from an admin, retrieval of these comments requires an authenticated request.

```php
$status="hold";
$curl = curl_init();
curl_setopt_array($curl, $curl_options);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_URL, "http://example.com/wp-json/wp/v2/comments" . "?status=" . $status);
curl_setopt($curl, CURLOPT_USERNAME, "USERNAME");
curl_setopt($curl, CURLOPT_PASSWORD, "PASSWORD");
$response = curl_exec($curl);
$json_pretty = json_encode(json_decode($response),JSON_PRETTY_PRINT);
echo $json_pretty;
curl_close($curl);
```

### Creating an Image

This example uses the [media](https://developer.wordpress.org/rest-api/reference/media) route to post an image to WordPress. The request specifies the route, sets metadata on the image, and includes the REST API's [_fields](https://developer.wordpress.org/rest-api/using-the-rest-api/global-parameters/#_fields) global parameter. The `_fields` parameter limits the data returned in the response.

```php
$fileToUpload = file_get_contents("FILE_PATH");
$postHeader = array(
  'content-disposition: attachment; filename=FILE_NAME',
  'Content-Type: image/jpeg'
);
$route="http://example.com/wp-json/wp/v2/media";
$queryParams="?title=Before%20Wildfire&alt_text=Landscape%20prior%20to%20wildfire";
$responseFields="&_fields=author,id,title,media_details";

$curl = curl_init();
curl_setopt_array($curl, $curl_options);
curl_setopt($curl, CURLOPT_URL, $route . $queryParams . $responseFields);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeader);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fileToUpload);
curl_setopt($curl, CURLOPT_USERNAME, "USERNAME");
curl_setopt($curl, CURLOPT_PASSWORD, "PASSWORD"); 
$response = curl_exec($curl);
$json_pretty = json_encode(json_decode($response),JSON_PRETTY_PRINT);
echo $json_pretty;
curl_close($curl);
```

### Creating a Post

This example uses the [posts](https://developer.wordpress.org/rest-api/reference/posts/) route to create a new WordPress post. The `CURLOPT_POSTFIELDS` option seeds the post with initial data.

```php
$postData = array(
  'title' => 'Warmer World Means More Wildfires',
  'content' => '[<b>Writer, provide context for this subject. Reference the latest empirical evidence and include the featured media.</b>]',
  'format' => 'standard',
  'featured_media' => '41',
  'status' => 'draft'
);

$curl = curl_init();
curl_setopt_array($curl, $curl_options);
curl_setopt($curl, CURLOPT_URL, 'http://example.com/wp-json/wp/v2/posts');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
curl_setopt($curl, CURLOPT_USERNAME, 'USERNAME');
curl_setopt($curl, CURLOPT_PASSWORD, 'PASSWORD');
$response = curl_exec($curl);
$json_pretty = json_encode(json_decode($response),JSON_PRETTY_PRINT);
echo $json_pretty;
curl_close($curl);
```

### Updating a Post

The following example [updates](https://developer.wordpress.org/rest-api/reference/posts/#update-a-post) the post created in the prior example. As with creating a post, an update is also made with a `POST` request, but the URL specifies the ID of the post to be updated. The update changes the `format` and `featured_media` of the original post.

```php
$postData = array(
  'format' => 'gallery',
  'featured_media' => '168'
);

$curl = curl_init();
curl_setopt_array($curl, $curl_options);
curl_setopt($curl, CURLOPT_URL, 'http://example.com/wp-json/wp/v2/posts/163');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); 
curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
curl_setopt($curl, CURLOPT_USERNAME, 'USERNAME');
curl_setopt($curl, CURLOPT_PASSWORD, 'PASSWORD');
$response = curl_exec($curl);
$json_pretty = json_encode(json_decode($response),JSON_PRETTY_PRINT);
echo $json_pretty;
curl_close($curl);
```

### Deleting Comments with a Trash Status

The following example [deletes](https://developer.wordpress.org/rest-api/reference/comments/#delete-a-comment) all comments with a `trash` status.

```php
$curl = curl_init();
curl_setopt_array($curl, $curl_options);

// Get all comments with trash status. Return only the IDs of the comments in the response.
curl_setopt($curl, CURLOPT_URL, 'http://example.com/wp-json/wp/v2/comments?status=trash&_fields=id');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_USERNAME, "USERNAME");
curl_setopt($curl, CURLOPT_PASSWORD, "PASSWORD");
$response = curl_exec($curl);
echo "\nComments to be deleted: " . $response ."\n";

// Put all IDs of trash comments in PHP array.
$ids=json_decode($response,true);
$ids = array_column($ids,'id');

// For each ID, send an HTTP delete request.
foreach ($ids as $key => $value) {
  echo "\nComment " . $value . " to be deleted\n";
  curl_setopt($curl, CURLOPT_URL, 'http://example.com/wp-json/wp/v2/comments/' . $value . '?force=true');
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
  $response = curl_exec($curl);
  echo "\nComment deleted: " . $value ."\n";
}
curl_close($curl);
```

## PHP Plugins

The REST API supports internal HTTP requests from [WordPress PHP plugins](https://developer.wordpress.org/rest-api/frequently-asked-questions/#can-i-make-api-requests-from-php-within-a-plugin). You construct an HTTP request with the API's [WP_REST_Request](https://developer.wordpress.org/reference/classes/wp_rest_request/) class, then invoke the [rest_do_request](https://developer.wordpress.org/reference/functions/rest_do_request/) function to submit the request to the REST server. For internal requests from plugins, you do not have to explicitly authenticate the user in the REST API. Running as an extension to the WordPress core environment, a plugin, unlike an external PHP script, does not have to authenticate the user in the REST API.

### Tracking Activated Plugins

This plugin example tracks other plugins that are activated. Triggered by the `activated_plugin` hook, the `plugin_activated` callback function constructs an instance of `WP_REST_Request` that identifies the activated plugin, then executes the request with the `rest_do_request` function. The response is returned as a [WP_REST_Response](https://developer.wordpress.org/reference/classes/wp_rest_response/) object, which can be printed to a log or sent as an email notification.

```php
add_action('activated_plugin', 'plugin_activated', 1, 2);

function plugin_activated( $plugin) {
  $request = new WP_REST_Request( 'GET', '/wp/v2/plugins' );
  $request->set_param( 'search', $plugin);
  $response = rest_do_request($request);
  // Optionally, log response or send notification about it.
}
```

### Forcisng Deletion of Rejected Comments

This plugin example evaluates newly submitted comments to determine their suitability for public exposure. If a comment is rejected, the plugin forces immediate deletion. Unlike plugins that work with logged-in WordPress users as in the previous example, this plugin works with anonymous front-end users, raising permission-related considerations. 

The REST API class that handles comment operations, [WP_REST_Comments_Controller](https://developer.wordpress.org/reference/classes/wp_rest_comments_controller/), does a [permission check](https://developer.wordpress.org/reference/classes/wp_rest_comments_controller/delete_item_permissions_check/) when a request is submitted to delete a comment. For requests made with the core namespace (`wp/v2`) the check method disallows the request when initiated by an anonymous user.

To work around the REST API's default permission behavior, this example makes use of the API' capability to register [custom endpoints](https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/). You can configure the permission level of a custom endpoint.

The plugin code is triggered by two WordPress hooks: [comment_post](https://developer.wordpress.org/reference/hooks/comment_post/) and [rest_api_init](https://developer.wordpress.org/reference/hooks/rest_api_init/). When a new comment is posted, the callback function associated with `comment_post` evaluates the comment. If the comment is rejected, the plugin creates a deletion request and triggers the `rest_api_init` hook. The callback function associated with `rest_api_init` registers the custom endpoint and deletes the comment.

#### comment_post Hook

When the `comment_post` hook is triggered, the `check_for_unacceptable_comment` callback screens the comment. If the function rejects the comment, it instantiates `WP_REST_Request` to create a deletion request for the comment. In addition to specifying the ID of the comment to be deleted, the request specifies the namespace of the custom endpoint (`myplugin/v1`) and the path (`/comment/`). Two parameters are set on the request. The `force` parameter instructs WordPress to delete the comment after it's moved to the trash. The `requestOrigin` parameter is added for security, identifying the source of the request as this plugin, not an unauthorized client attempting to delete comments.

The `rest_do_request` function sends the request to the REST API. This initiates the REST API, firing the `rest_api_init` hook.

<pre id='check_for_unacceptable_comment'> 
add_action('comment_post', 'check_for_unacceptable_comment', 1, 2);

// Triggered when new comment posted
function check_for_unacceptable_comment( $comment_ID, $comment_approved, $commentdata ) {
 
    /** Placeholder code here that screens comment for disallowed values in the commentdata array 
     * (e.g. comment_content, comment_author_url). If any found, sets $rejected flag to true.
     */  

    if ($rejected) {
      $request = new WP_REST_Request( 'DELETE', '/myplugin/v1/comment/' . $comment_ID); // creates request with custom endpoint and path
      $request->set_param( 'force', true );
      $request->set_param( 'requestOrigin', 'plugin' ); // identifies this plugin as the origin of the request
		
      // Initiates the REST API, which triggers rest_api_init hook below.
      $response = rest_do_request( $request );  // returns WP_REST_Response object.

      // Optionally, log response or send notification about it.
    }
}</pre>

#### rest_api_init Hook

When the `rest_api_init` hook is fired, the associated anonymous callback registers the custom endpoint with the [register_rest_route](https://developer.wordpress.org/reference/functions/register_rest_route/) function. It takes the following parameters:

* [Namespace](https://developer.wordpress.org/rest-api/extending-the-rest-api/routes-and-endpoints/#namespaces) of the custom endpoint, `myplugin/v1`, and the resource path, `/comment/(?P<id>\d+)` (the comment ID).

* [HTTP method](https://developer.wordpress.org/rest-api/extending-the-rest-api/routes-and-endpoints/#http-methods) to be used for this route (`DELETE`).

* [Endpoint callback](https://developer.wordpress.org/rest-api/extending-the-rest-api/routes-and-endpoints/#callbacks) `delete_rejected`, which deletes a comment flagged as rejected in the [check_for_unacceptable_comment](#check_for_unacceptable_comment) function.

* Validation callback function for an extra parameter added to the request. In this example, the argument specified in the [args](https://developer.wordpress.org/rest-api/extending-the-rest-api/routes-and-endpoints/#arguments) array is the `id` of the comment to be deleted. However, for this example, the intent of the `validate_callback` function is not to validate the `id` parameter, but rather to validate the `requestOrigin` parameter in the request. Recall that this parameter is added to the request in the [check_for_unacceptable_comment](#check_for_unacceptable_comment) function to ensure that any deletion request with the custom endpoint originates from this plugin, not from an external unauthorized source.

* [Permissions callback](https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/#permissions-callback) to set the permission level of the user to delete a comment. In this example, the `__return_true` value allows unacceptable comments by anonymous users to be deleted.

```php
// Anonymous function is triggered when REST API initiated
add_action('rest_api_init', function() {
	register_rest_route( 'myplugin/v1', '/comment/(?P<id>\d+)', array(
		'methods'  => 'DELETE',
		'callback' => 'delete_rejected',
		'args' => array(
      			'id' => array(
        		'validate_callback' => function($param, $request, $key) {
					     return ($request->has_param("requestOrigin"));	} )
    ),
		'permission_callback' => '__return_true' );
} ); 
```

If the `validate_callback` function returns `true`, the `delete_rejected` function is invoked. This function instantiates `WP_REST_Comments_Controller` and passes the request to its [delete_item](https://developer.wordpress.org/reference/classes/wp_rest_comments_controller/delete_item/) method to delete the comment. The method returns a [WP_REST_Response](https://developer.wordpress.org/reference/classes/wp_rest_response/) object, and this function, in turn, returns the response object to the [check_for_unacceptable_comment](#check_for_unacceptable_comment) function.

```php
function delete_rejected( $request ) 	
{
    $controller = new WP_REST_Comments_Controller();
    $response=$controller->delete_item($request);
    return $response; 
}
```


