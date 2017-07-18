# Modifying Responses

The default endpoints of the WordPress REST API are designed to return data by default that provides for the majority of sites and use cases, but there are often needs to extend the responses for various object types.

To fit these needs, the REST API is designed to be highly extensible, like the `rest` of WordPress. This document details how to add additional data to the responses of default endpoints using the `register_rest_field` and `register_meta` functions.  You can use these functions to add fields to any of the object types supported by the REST API. These custom fields can support both get and update operations.
<h2 id="important-note-about-changing-responses">Important Note about Changing Responses
The API exposes many fields on API responses, including things you might not need, or might not fit into how your site works. While it's tempting to modify or remove fields from responses, this **will** cause problems with API clients that expect standard responses. This includes mobile clients, or third party tools to help you manage your site, and eventually wp-admin itself.

You may only need a small amount of data, but it's important to keep in mind that the API is about exposing an interface to all clients, not just the feature you're working on. Changing responses is dangerous.

Adding fields is not dangerous, so if you need to modify data, it's much better to duplicate the field instead with your modified data. Removing fields is never encouraged; if you need to get back a smaller subset of data, work with contexts instead, and consider making your own context.

Note that the API cannot prevent you from changing responses, but the code is structured to strongly discourage this. Internally, field registration is powered by filters, and these can be used if you absolutely have no other choice.
<h2 id="what-register_rest_field-does">What `register_rest_field` Does
In the infrastructure for responses, the global variable `$wp_rest_additional_fields` is used for holding the fields to be added to the responses for each object type. The REST API provides `register_rest_field` as a utility function for adding to this global variable. Adding to the global variable directly should be avoided to ensure maximum forward-compatibility.

For each object type -- posts, or users, terms, comments, etc, `$wp_rest_additional_fields` contains an array of fields, each of which can have a value for callbacks used to retrieve the value, update the value using any endpoint that field is added to that can be used for updating.
<h2 id="how-to-use-register_rest_field">How To Use `register_rest_field`
The function `register_rest_field` field accepts three parameters:
<ol style="list-style-type: decimal">
 	<li>`$object_type`: The name of the object, as a string, or an array of the names of objects the field is being registered to. When adding to posts type endpoints, "post" should be used. Alternatively "terms", "meta", "user" or "comment" may be used.</li>
 	<li>`$attribute`: The name of the field. This name will be used to define the key in the response object.</li>
 	<li>`$args`: An array with keys that define the callback functions used to retrieve the value of the field, to update the value of the field and define its schema. Each of these keys are optional, but if not used, that capability will not be added.</li>
</ol>
This means that if you specify a callback function for reading the value, but not a callback for updating then it will be readable, but not updatable. This may be desired in many situations.

Fields should be registered at the `rest_api_init` action. Using this action rather than `init` will prevent the field registration from happening during requests to WordPress that do not use the REST API.
<h2 id="examples">Examples
<h3 id="show-a-post-meta-field-in-post-responses">Read and write an extra field in comment responses
TODO with this example:
<ul>
 	<li>Change anonymous functions to named functions ([discussion](https://wordpress.slack.com/archives/core-restapi/p1484585662002662))</li>
 	<li>How do permissions checks work?  Error handling?  (Under what conditions will the update code be called or not, and what other checks need to be done in a real-world plugin?)</li>
 	<li>Much shorter lines and/or style fixes to code blocks in dev handbooks</li>
</ul>

```php
<?php
add_action( 'rest_api_init', function() {
    register_rest_field( 'comment', 'karma', array(
        'get_callback' =&gt; function( $comment_arr ) {
            $comment_obj = get_comment( $comment_arr['id'] ); 
            return (int) $comment_obj-&gt;comment_karma;
        },
        'update_callback' =&gt; function( $karma, $comment_obj ) {
            $ret = wp_update_comment( array(
                'comment_ID'    =&gt; $comment_obj-&gt;comment_ID,
                'comment_karma' =&gt; $karma
            ) );
            if ( false === $ret ) {
                return new WP_Error( 'rest_comment_karma_failed', __( 'Failed to update comment karma.' ), array( 'status' =&gt; 500 ) );
            }
            return true;
        },
        'schema' =&gt; array(
            'description' =&gt; __( 'Comment karma.' ),
            'type'        =&gt; 'integer'
        ),
    ) );
} );
```

This example illustrates adding a field called `karma` to the response for posts. It works because the `comment_karma` field exists, but is unused by core.  Note that an actual implementation of comment karma would need to use a separate endpoint.
<h2 id="working-with-meta-and-register_meta">Working with Meta &amp; `register_meta`
<h3 id="read-and-write-a-post-meta-field-in-post-responses">Read and write a post meta field in post responses

```php
<?php
// The object type. For custom post types, this is 'post';
// for custom comment types, this is 'comment'. For user meta,
// this is 'user'.
$object_type = 'post';
$args1 = array( // Validate and sanitize the meta value.
    // Note: currently (4.7) one of 'string', 'boolean', 'integer',
    // 'number' must be used as 'type'. The default is 'string'.
    'type'         =&gt; 'string',
    // Shown in the schema for the meta key.
    'description'  =&gt; 'A meta key associated with a string meta value.',
    // Return a single value of the type.
    'single'       =&gt; true,
    // Show in the WP REST API response. Default: false.
    'show_in_rest' =&gt; true,
);
register_meta( $object_type, 'my_meta_key', $args1 );
```

This example shows how to allow reading and writing of a post meta field. This will allow the spaceship field to be updated via a POST request to `wp-json/wp/v2/posts/&lt;post-id&gt;` or created along with a post via a POST request to `wp-json/wp/v2/posts/`.

Note that for meta fields registered on custom post types, the post type must have `custom-fields` support.  Otherwise the meta fields will not appear in the REST API.
