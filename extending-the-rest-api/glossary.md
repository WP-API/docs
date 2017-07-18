# Glossary

New to REST APIs? Get up to speed with phrases used throughout our documentation.


<h2 id="controller">Controller</h2>

[Model-View-Controller](http://en.wikipedia.org/wiki/Model-view-controller) is a standard pattern in software development. If you aren't already familiar it, you should do a bit of reading to get up to speed.

Within WP-API, we've adopted the controller concept to have a standard pattern for the classes representing our resource endpoints. All resource endpoints extend `WP_REST_Controller` to ensure they implement common methods.


<h2 id="head-get-post-put-and-delete-requests">HEAD, GET, POST, PUT, and DELETE Requests</h2>

These "HTTP verbs" represent the *type* of action a HTTP client might perform against a resource. For instance, `GET` requests are used to fetch a Post's data, whereas `DELETE` requests are used to delete a Post. They're collectively called "HTTP verbs" because they're standardized across the web.

If you're familiar with WordPress functions, a `GET` request is the equivalent of `wp_remote_get()`, and a `POST` request is the same as `wp_remote_post()`.


<h2 id="http-client">HTTP Client</h2>

The phrase "HTTP Client" refers to the tool you use to interact with WP-API. You might use [Postman](https://chrome.google.com/webstore/detail/postman-rest-client/fdmmgilgnpjigdojojpjoooidkmcomcm?hl=en) (Chrome) or [REST Easy](https://github.com/nathan-osman/REST-Easy) (Firefox) to test requests in your browser, or [httpie](https://github.com/jakubroztocil/httpie) to test requests at the commandline.

WordPress itself provides a HTTP Client in the [`WP_HTTP` class](https://codex.wordpress.org/HTTP_API) and related functions (e.g. `wp_remote_get()`). This can be used to access one WordPress site from another.


<h2 id="resource">Resource</h2>

A "Resource" is a *discrete entity* within WordPress. You may know these resources already as Posts, Pages, Comments, Users, Terms, and so on. WP-API permits HTTP clients to perform CRUD operations against resources (CRUD stands for Create, Read, Update, and Delete).

Pragmatically, here's how you'd typically interact with WP-API resources:

* `GET /wp-json/wp/v2/posts` to get a collection of Posts. This is roughly equivalent to using `WP_Query`.
* `GET /wp-json/wp/v2/posts/123` to get a single Post with ID 123. This is roughly equivalent to using `get_post()`.
* `POST /wp-json/wp/v2/posts` to create a new Post. This is roughly equivalent to using `wp_insert_post()`.
* `DELETE /wp-json/wp/v2/posts/123` to delete Post with ID 123. This is roughly equivalent to `wp_delete_post()`.


<h2 id="routes--endpoints">Routes / Endpoints</h2>

Endpoints are functions available through the API. This can be things like retrieving the API index, updating a post, or deleting a comment. Endpoints perform a specific function, taking some number of parameters and return data to the client.

A route is the "name" you use to access endpoints, used in the URL. A route can have multiple endpoints associated with it, and which is used depends on the HTTP verb.

For example, with the URL `http://example.com/wp-json/wp/v2/posts/123`:

* The "route" is `wp/v2/posts/123` - The route doesn't include `wp-json` because `wp-json` is the base path for the API itself.
* This route has 3 endpoints:
  * `GET` triggers a `get_item` method, returning the post data to the client.
  * `PUT` triggers an `update_item` method, taking the data to update, and returning the updated post data.
  * `DELETE` triggers a `delete_item` method, returning the now-deleted post data to the client.

**Note:** On sites without pretty permalinks, the route is instead added to the URL as the `rest_route` parameter. For the above example, the full URL would then be `http://example.com/?rest_route=wp/v2/posts/123`


<h2 id="schema">Schema</h2>

A "schema" is a representation of the format for WP-API's response data. For instance, the Post schema communicates that a request to get a Post will return `id`, `title`, `content`, `author`, and other fields. Our schemas also indicate the type each field is, provide a human-readable description, and show which contexts the field will be returned in.
