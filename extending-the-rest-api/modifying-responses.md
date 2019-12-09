# Modifying Responses

The default endpoints of the WordPress REST API are designed to return data by default that provides for the majority of sites and use cases, but there are often situations where you will need to access or expose additional data in the responses for various object types.

As with the rest of WordPress, the REST API is designed to be highly extensible to fit these needs. This guide details how to add additional data to the responses of default endpoints using the `register_rest_field` and `register_meta` functions. You can use these functions to add fields to any of the object types supported by the REST API. These custom fields can support both get and update operations.


## Important Note about Changing Responses

[alert]
Changing or removing data from core REST API endpoint responses can break plugins or WordPress core behavior, and should be avoided wherever possible.
[/alert]

The API exposes many fields on API responses, including things you might not need, or which might not fit into how your site works. While it's tempting to modify or remove fields from REST API responses, this **will** cause problems with API clients that expect standard responses. This includes mobile clients, third party tools to help you manage your site, or wp-admin itself.

You may only need a small amount of data, but it's important to keep in mind that the API is about exposing an interface to all clients, not just the feature you're working on. Changing responses is dangerous.

Adding fields is not dangerous, so if you need to modify data, it's much better to duplicate the field instead with your modified data. Removing fields is never encouraged; if you need to get back a smaller subset of data, use the [`_fields` parameter](https://developer.wordpress.org/rest-api/using-the-rest-api/global-parameters/#_fields) or work with contexts instead.

If you must remove fields from an existing context you should ensure that the behavior is **opt-in**, for example by providing a custom query parameter to trigger the field removal.

The API cannot prevent you from changing responses, but the code is structured to strongly discourage doing so. Internally, field registration is powered by filters, and these can be used if you absolutely have no other choice.


## Using `register_rest_field` vs `register_meta`

There are two methods which can be used to add data to WordPress REST API responses, `register_rest_field` and `register_meta`.

`register_rest_field` may be used to add arbitrary fields to any REST API response, and can be used to both read and write data using the API. To register a new REST field you must provide your own callback functions to get or set the field's value, as well as manually specify your own schema definition for the field.

`register_meta` is used to whitelist an existing custom meta value for access through the REST API. By setting a meta field's `show_in_rest` parameter to `true`, that field's value will be exposed on a `.meta` key in the endpoint response, and WordPress will handle setting up the callbacks for reading and writing to that meta key. This is much simpler than `register_rest_field`, with one caveat:

[alert]
Prior to WordPress 4.9.8, meta fields set to `show_in_rest` using `register_meta` are registered for all objects of a given type. If one custom post type shows a meta field, all custom post types will show that meta field. As of WordPress 4.9.8 it's possible to use `register_meta` with the `object_subtype` argument that allows one to reduce the usage of the meta key to a particular post type.
[/alert]

Prior to WordPress 5.3, `register_meta` could only support scalar values (`string`, `integer`, `number` and `boolean`). WordPress 5.3 adds support for the `object` and `array` types.

## Adding Custom Fields to API Responses

### Using `register_rest_field`

The [`register_rest_field`](https://developer.wordpress.org/reference/functions/register_rest_field/) function is the most flexible way to add fields to REST API response objects. It accepts three parameters:

1. `$object_type`: The name of the object, as a string, or an array of the names of objects for which the field is being registered. This may be a core type like "post", "terms", "meta", "user" or "comment", but can also be the string name of a custom post type.
2. `$attribute`: The name of the field. This name will be used to define the key in the response object.
3. `$args`: An array with keys that define the callback functions used to retrieve the value of the field ('get_callback'), to update the value of the field ('update_callback'), and to define its schema ('schema').

Each of the keys of the $args array is optional, but if not used, that capability will not be added. This means that you may specify a callback function for reading the value and omit the update callback to make that field read-only if desired.

Fields should be registered at the `rest_api_init` action. Using this action rather than `init` will prevent the field registration from happening during requests to WordPress that do not use the REST API.


### Examples

#### Read and write an extra field in comment responses

```php
<?php
add_action( 'rest_api_init', function () {
    register_rest_field( 'comment', 'karma', array(
        'get_callback' => function( $comment_arr ) {
            $comment_obj = get_comment( $comment_arr['id'] );
            return (int) $comment_obj->comment_karma;
        },
        'update_callback' => function( $karma, $comment_obj ) {
            $ret = wp_update_comment( array(
                'comment_ID'    => $comment_obj->comment_ID,
                'comment_karma' => $karma
            ) );
            if ( false === $ret ) {
                return new WP_Error(
                  'rest_comment_karma_failed',
                  __( 'Failed to update comment karma.' ),
                  array( 'status' => 500 )
                );
            }
            return true;
        },
        'schema' => array(
            'description' => __( 'Comment karma.' ),
            'type'        => 'integer'
        ),
    ) );
} );
```

This example illustrates adding a field called `karma` to the response for posts. It works because the `comment_karma` field exists, but is unused by core. Note that an actual implementation of comment karma would need to use a separate endpoint.

This is a basic example; carefully consider what permissions checks or error handling may be required for your specific field.


### How `register_rest_field` Works

The global variable `$wp_rest_additional_fields` is used internally by the REST API infrastructure to hold the response fields to be added to each object type. The REST API provides `register_rest_field` as a utility function for adding to this global variable. Adding to the global variable directly should be avoided to ensure forward-compatibility.

For each object type &mdash; posts, or users, terms, comments, etc. &mdash; `$wp_rest_additional_fields` contains an array of field definitions containing the callbacks used to retrieve or update the field's value.


## Working with registered meta in the REST API

The [`register_meta`](https://developer.wordpress.org/reference/functions/register_meta/) function simplifies the process of defining a meta field for a particular object type. By setting `'show_in_rest' => true` when registering a new meta key, that key will be accessible through the REST API.

### Read and write a post meta field in post responses

```php
<?php
// The object type. For custom post types, this is 'post';
// for custom comment types, this is 'comment'. For user meta,
// this is 'user'.
$object_type = 'post';
$meta_args = array( // Validate and sanitize the meta value.
    // Note: currently (4.7) one of 'string', 'boolean', 'integer',
    // 'number' must be used as 'type'. The default is 'string'.
    'type'         => 'string',
    // Shown in the schema for the meta key.
    'description'  => 'A meta key associated with a string meta value.',
    // Return a single value of the type.
    'single'       => true,
    // Show in the WP REST API response. Default: false.
    'show_in_rest' => true,
);
register_meta( $object_type, 'my_meta_key', $meta_args );
```

This example shows how to allow reading and writing of a post meta field. This will allow that field to be updated via a POST request to `wp-json/wp/v2/posts/<post-id>` or created along with a post via a POST request to `wp-json/wp/v2/posts/`.

Note that for meta fields registered on custom post types, the post type must have `custom-fields` support. Otherwise the meta fields will not appear in the REST API.

### Post Type Specific Meta
WordPress 4.9.8 adds support for registering meta for a specific post type or taxonomy by using the `register_post_meta` and `register_term_meta` functions. They follow the same rules as `register_meta` but accept a post type or taxonomy as their first parameter instead of an object type. The following code would register the `my_meta_key` example above, but only for the `page` custom post type.

```php
$meta_args = array(
    'type'         => 'string',
    'description'  => 'A meta key associated with a string meta value.',
    'single'       => true,
    'show_in_rest' => true,
);
register_post_meta( 'page', 'my_meta_key', $meta_args );
```

### Object Meta Type
WordPress 5.3 adds support for using the `object` [type](https://tools.ietf.org/html/draft-zyp-json-schema-04#section-3.5) when registering meta. Importantly `object` refers to a JSON object, this is equivalent to an associative array in PHP.

When registering `object` meta, setting the `type` to `object` is not sufficient, you also need to inform WordPress of what properties to allow. This is done by writing a JSON Schema when registering the metadata.

For instance, the following code sample registers a post meta field called “release” that accepts the given JSON data.

```json
{
  "meta": {
    "release": {
      "version": "5.2",
      "artist": "Jaco"
    }
  }
}
```

```php
register_post_meta(
     'post',
     'release',
     array(
         'single'       => true,
         'type'         => 'object',
         'show_in_rest' => array(
             'schema' => array(
                 'type'       => 'object',
                 'properties' => array(
                     'version' => array(
                         'type' => 'string',
                     ),
                     'artist'  => array(
                         'type' => 'string',
                     ),
                 ),
             ),
         ),
     )
 );
```

Notice that `show_in_rest` becomes an array instead of `true` and a Json Schema is specified for the `schema` key. Each property is then listed in the `properties` array. At a minimum, each property must specify a `type`, but any JSON Schema keyword that `rest_validate_value_from_schema` understands can be used as well.

#### Additional Properties
By default, the list of properties is a strict whitelist. If a property is sent in the request that is not listed, the REST API will return an error: `your_property is not a valid property of Object.`. If you don't know the property names ahead of time the `additionalProperties` keyword can be used. `additionalProperties` accepts a JSON Schema that is used to validate the unknown properties. For instance, to enforce that any additional properties are numbers, the following code can be used.

```php
{
   "meta": {
     "release": {
       "version": "5.2",
       "artist": "Jaco",
       "unknown_field": 5.3
     }
   }
 }
 ```

```php
register_post_meta(
     'post',
     'version',
     array(
         'single'       => true,
         'type'         => 'object',
         'show_in_rest' => array(
             'schema' => array(
                 'type'       => 'object',
                 'properties' => array(
                     'version' => array(
                         'type' => 'string',
                     ),
                     'artist'  => array(
                         'type' => 'string',
                     ),
                 ),
                 'additionalProperties' => array(
                     'type' => 'number',
                 ),
             ),
         ),
     )
 );
 ```
 
`additionalProperties` can be set to true to allow unknown properties of any format, but this is not recommended.

### Array Meta Type
WordPress 5.3 also adds support for using the `array` [type](https://tools.ietf.org/html/draft-zyp-json-schema-04#section-3.5). Importantly `array` refers to a JSON array, this is equivalent to a numeric array in PHP.

When registering `array` meta, setting the `type` to `array` is not sufficient, you need to inform WordPress of what the expected format is of the items in the array. This is done by writing a JSON Schema entry when registering the metadata.

If you do not provide this value, `register_meta` will return false and issue the following warning: `When registering an "array" meta type to show in the REST API, you must specify the schema for each array item in "show_in_rest.schema.items".`

The following code sample registers a post meta field called “projects” that contains a list of project names. It accepts the given JSON data.

```json
{
   "meta": {
     "projects": [
       "WordPress",
       "BuddyPress"
     ]
   }
 }
 ```

```php
register_post_meta(
     'post',
     'projects',
     array(
         'single'       => true,
         'type'         => 'array',
         'show_in_rest' => array(
             'schema' => array(
                 'type'  => 'array',
                 'items' => array(
                     'type' => 'string',
                 ),
             ),
         ),
     )
 );
 ```
 
Notice that again `show_in_rest` becomes an array instead of `true` and a JSON Schema is specified for the `schema` key.
The `items` keyword is used to define the JSON schema to validate each array member against. It can be a scalar type like `string` or a complex type like `object`.

For instance, to accept the given JSON data, the following meta registration would be used.

```json
{
   "meta": {
     "projects": [
       {
         "name": "WordPress",
         "website": "https://wordpress.org"
       },
       {
         "name": "BuddyPress",
         "website": "https://buddypress.org"
       }
     ]
   }
 }
```

```php
register_post_meta(
     'post',
     'projects',
     array(
         'single'       => true,
         'type'         => 'array',
         'show_in_rest' => array(
             'schema' => array(
                 'items' => array(
                     'type'       => 'object',
                     'properties' => array(
                         'name'    => array(
                             'type' => 'string',
                         ),
                         'website' => array(
                             'type'   => 'string',
                             'format' => 'uri',
                         ),
                     ),
                 ),
             ),
         ),
     )
 );
 ```

[alert]The `array` type enforces that the array keys are sequential integers starting from 0. The array will be reindexed using `array_values`.[/alert]

### Non-Single Metadata

Non-single meta fields have an array of values per object, instead of one value per object. Each of those values is stored in a separate row in the meta table.

The `array` and `object` types can be used with non-single meta fields as well. For example, if the “release” meta key from earlier had `single` set to `false`, the following JSON data could be accepted.

```json
{
   "meta": {
     "release": [
       {
         "version": "5.2",
         "artist": "Jaco"
       },
       {
         "version": "5.1",
         "artist": "Betty"
       }
     ]
   }
 }
 ```
 
This would result in two meta database rows. The first containing `{ "version": "5.2", "artist": "Jaco" }` and the second containing `{ "version": "5.1", "artist": "Betty" }`.

Similarly, the following data would be accepted for the “projects” example if it had set `single` to `false`.

```json
{
   "meta": {
     "projects": [
       [
         "WordPress",
         "BuddyPress"
       ],
       [
         "bbPress"
       ]
     ]
   }
 }
```
 
This would result in two meta database rows. The first containing `[ "WordPress", "BuddyPress" ]` and the second containing `[ "bbPress" ]`.

### Invalid Stored Values

If the existing value for a meta field does not validate against the registered type and schema, the value for that meta field will be returned as null. If that null value is passed back to the API when doing an update request, you'll receive a `rest_invalid_stored_value` error: `The %s property has an invalid stored value, and cannot be updated to null.`. To fix this, either update the meta key with a valid value or omit that property from your request.

## Adding Links to the API Response
WordPress generates a list of links associated with the queried resource to make it easier to navigate to related resources. 

```json
{
 "_links": {
    "self": [
      {
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/posts/28312"
      }
    ],
    "collection": [
      {
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/posts"
      }
    ],
    "author": [
      {
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/users/8670591"
      }
    ],
    "replies": [
      {
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/comments?post=28312"
      }
    ],
    "wp:term": [
      {
        "taxonomy": "category",
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/categories?post=28312"
      },
      {
        "taxonomy": "post_tag",
        "embeddable": true,
        "href": "https://make.wordpress.org/core/wp-json/wp/v2/tags?post=28312"
      }
    ]
  }
}
```
_A sample of links from a Make.WordPress.org post_

While these links will appear under the `_links` property in the JSON response object, it is not stored in `WP_REST_Response::$data` or accessible via `WP_REST_Response::get_data()`. Instead, the server will append the link data to the response right before echoing the response data.

Custom links can be added to the response by using the `WP_REST_Response::add_link()` method. This method accepts three parameters, the link relation, the URL and optionally a list of link attributes. For example, to add the `author` and `wp:term` link.

```php
<?php
$response->add_link( 'author', rest_url( "/wp/v2/users/{$post->post_author}" ) );

$response->add_link( 'https://api.w.org/term', add_query_arg( 'post', $post->ID, rest_url( "/wp/v2/{$tax_base}" ) ) );
```

The link relation MUST be either a [registered link relation from the IANA](https://www.iana.org/assignments/link-relations/link-relations.xhtml) or a URI that is under your control.

`author` is a registered link relation described as "the context's author", we use that to point to the WordPress user who wrote the post. No link relation exists that describes the terms associated with a post, so WordPress uses the `https://api.w.org/term` URL. This is transformed to `wp:term` when generating the response by using a CURIE.

The third parameter of `add_link()` is a list of custom attributes. The `embeddable` attribute can be used to include the linked resource appears in the `_embedded` section of the repsonse when using the `_embed` query parameter. If multiple links are added with the same relation, the embedded responses will be in the same order the links were added in.

```php
<?php
$response->add_link( 'author', rest_url( "/wp/v2/users/{$post->post_author}" ), array(
	'embeddable' => true,
) );
$response->add_link( 'author', rest_url( "/wp/v2/users/{$additional_author}" ), array(
	'embeddable' => true,
) );
```
_A sample implementation of linking to multi-author posts._

```json
{
  "_links": {
    "author": [
      {
        "embeddable": true,
        "href": "https://yourwebsite.com/wp-json/wp/v2/users/1"
      },
      {
        "embeddable": true,
        "href": "https://yourwebsite.com/wp-json/wp/v2/users/2"
      }
    ]
  },
  "_embedded": {
    "author": [
      {
        "id": 1,
        "name": "Primary Author"
      },
      {
        "id": 2,
        "name": "Secondary Author"
      }
    ]
  }
}
```
_The order links are added is maintained._

### Registering a CURIE

WordPress version 4.5 introduced support for Compact URIs, or CURIEs. This makes it possible to reference links by a much simpler identifier than the full URL which could easily be quite lengthy.

A CURIE is registered using the `rest_response_link_curies` filter. For example.

```php
<?php
function my_plugin_prefix_register_curie( $curies ) {

	$curies[] = array(
		'name'      => 'my_plugin',
		'href'      => 'https://api.mypluginurl.com/{rel}',
		'templated' => true,
	);

	return $curies;
}
```

This will convert link URLs from `https://api.mypluginurl.com/my_link` to `my_plugin:my_link` in the API response. The full URL must still be used when adding links using `WP_REST_Response::add_link`.
