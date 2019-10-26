# Global Parameters

The API includes a number of global parameters (also called "meta-parameters") which control how the API handles the request/response handling. These operate at a layer above the actual resources themselves, and are available on all resources.

## `_fields`

A REST resource like a Post contains a large quantity of data: basic information such as content, title, and author ID, but also [registered metadata and fields](https://developer.wordpress.org/rest-api/extending-the-rest-api/modifying-responses/), media information, and links to other resources. Your application may not need all of this information on every request.

To instruct WordPress to return only a subset of the fields in a response, you may use the `_fields` query parameter. If for example you are building an archive view and only need the ID, title, permalink, author and excerpt for a collection of posts, you can restrict the response to only those properties with this fields query:

```
/wp/v2/posts?_fields=author,id,excerpt,title,link
```

You may alternatively provide that same list using query parameter array syntax instead of a comma-separated list:

```
/wp/v2/posts?_fields[]=author&_fields[]=id&_fields[]=excerpt&_fields[]=title&_fields[]=link
```

When `_fields` is provided then WordPress will skip unneeded fields when generating your response object, avoiding potentially expensive internal computation or queries for data you don't need. This also means the JSON object returned from the REST API will be smaller, requiring less time to download and less time to parse on your client device.

Carefully design your queries to pull in only the needed properties from each resource to make your application faster to use and more efficient to run.

As of WordPress 5.3 the `_fields` parameter supports nested properties. This can be useful if you have registered many meta keys, permitting you to request the value for only one of the registered meta properties:

```
?_fields=meta.one-of-many-keys
```

Only the meta value with the key `one-of-many-keys` will be returned, and others will be excluded.

You can also request specific deeply-nested properties within a complex meta object:

```
?_fields=meta.key_name.nested_prop.deeply_nested_prop,meta.key_name.other_nested_prop
```

## `_jsonp`

The API natively supports [JSONP](https://en.wikipedia.org/wiki/JSONP) responses to allow cross-domain requests for legacy browsers and clients. This parameter takes a JavaScript callback function which will be prepended to the data. This URL can then be loaded via a `<script>` tag.

The callback function can contain any alphanumeric, `_` (underscore), or `.` (period) character. Callbacks which contain invalid characters will receive a HTTP 400 error response, and the callback will not be called.

[info]
Modern browsers can use <a href="https://en.wikipedia.org/wiki/Cross-origin_resource_sharing">Cross-Origin Resource Sharing (CORS)</a> preflight requests for cross-domain requests, but JSONP can be used to ensure support with all browsers.

<ul>
  <li><a href="http://caniuse.com/#feat=cors">Browser Support</a></li>
  <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS">MDN Article on CORS</a></li>
</ul>
[/info]

For example:

```html
<script>
function receiveData( data ) {
  // Do something with the data here.
  // For demonstration purposes, we'll simply log it.
  console.log( data );
}
</script>
<script src="https://example.com/wp-json/?_jsonp=receiveData"></script>
```


## `_method` (or `X-HTTP-Method-Override` header)

Some servers and clients cannot correctly process some HTTP methods that the API makes use of. For example, all deletion requests on resources use the `DELETE` method, but some clients do not provide the ability to send this method.

To ensure compatibility with these servers and clients, the API supports a method override. This can be passed either via a `_method` parameter or the `X-HTTP-Method-Override` header, with the value set to the HTTP method to use.

[alert]
Clients should only ever send a method override parameter or header with POST requests. Using the method override with GET requests may cause the request to be incorrectly cached.
[/alert]

A `POST` to `/wp-json/wp/v2/posts/42?_method=DELETE` would be translated to a `DELETE` to the `wp/v2/posts/42` route.

Similarly, the following POST request would become a DELETE:

```
POST /wp-json/wp/v2/posts/42 HTTP/1.1
Host: example.com
X-HTTP-Method-Override: DELETE
```


## `_envelope`

Similarly to `_method`, some servers, clients, and proxies do not support accessing the full response data. The API supports passing an `_envelope` parameter, which sends all response data in the body, including headers and status code.

Envelope mode is enabled if the `_envelope` parameter is passed in the query string (GET parameter). This parameter does not require a value (i.e. `?_envelope` is valid), but can be passed "1" as a value if required by a client library.

[info]
For future compatibility, other values should not be passed.
[/info]

Enveloped responses include a "fake" HTTP 200 response code with no additional headers (apart from Content-Type) that should ensure the response correctly passes through intermediaries.

For example, given the following response to a `GET` to `wp/v2/users/me`:

```
HTTP/1.1 302 Found
Location: http://example.com/wp-json/wp/v2/users/42

{
  "id": 42,
  ...
}
```

The equivalent enveloped response (with a `GET` to `wp/v2/users/me?_envelope`) would be:

```
HTTP/1.1 200 OK

{
  "status": 302,
  "headers": {
    "Location": "http://example.com/wp-json/wp/v2/users/42"
  },
  "body": {
    "id": 42
  }
}
```


## `_embed`

Most resources include links to related resources. For example, a post can link to the parent post, or to comments on the post. To reduce the number of HTTP requests required, clients may wish to fetch a resource as well as the linked resources. The `_embed` parameter indicates to the server that the response should include these embedded resources.

Embed mode is enabled if the `_embed` parameter is passed in the query string (GET parameter). This parameter does not require a value (i.e. `?_embed` is valid), however can be passed "1" as a value if required by a client library.

[info]
For future compatibility, other values should not be passed.
[/info]

Resources in embed mode will contain an additional `_embedded` key next to the `_links` key containing the linked resources. Only links with the `embeddable` parameter set to `true` will be embedded.

For more about linking and embedding, see the [Linking and Embedding](https://developer.wordpress.org/rest-api/linking-and-embedding/) page.
