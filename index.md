# REST API Handbook

The WordPress REST API provides an interface for applications to interact with your WordPress site by sending and receiving data as [JSON](https://en.wikipedia.org/wiki/JSON) (JavaScript Object Notation) objects. It is the foundation of the [WordPress Block Editor](https://developer.wordpress.org/block-editor/), and can likewise enable your theme, plugin or custom application to present new, powerful interfaces for managing and publishing your site content.

An API is an Application Programming Interface. REST, standing for "REpresentational State Transfer," is a set of concepts for modeling and accessing your application's data as interrelated objects and collections. The WordPress REST API provides REST endpoints (URLs) representing the posts, pages, taxonomies, and other built-in WordPress data types. Your application can send and receive JSON data to these endpoints to query, modify and create content on your site. JSON is an open standard data format that is lightweight and human-readable, and looks like Objects do in JavaScript. When you request content from or send content to the API, the response will also be returned in JSON. Because JSON is widely supported in many programming languages, developers can build WordPress applications in client-side JavaScript (like the block editor), as mobile apps, or as desktop or command line tools.

[info]The REST API is just one of many APIs provided by WordPress. You can find the [documentation on these additional APIs here](https://codex.wordpress.org/WordPress_APIs).[/info]

## Why use the WordPress REST API

WordPress already provides a rich set of tools and interfaces for building sites, and you should not feel pressured to use the REST API if your site is already working the way you expect. You do not need to use the REST API to build a WordPress theme or plugin.

However, if you do wish to write your theme, plugin, or external application as a client-side JavaScript application, or a standalone program in a language other than PHP, then your application will need a structured way to access content within your WordPress site. Any programming language which can make HTTP requests and interpret JSON can use the REST API to interact with WordPress, from PHP, Node.js, Go, and Java, to Swift, Kotlin, and beyond.

Using the WordPress REST API you can create a plugin to provide an entirely new admin experiences for WordPress, build a brand new interactive front-end experience, or bring your WordPress content into completely separate applications. Even if you're using vanilla JavaScript or jQuery within a theme or plugin the REST API provides a more predictable and structured way to interact with your site's content than [`admin-ajax`](https://codex.wordpress.org/AJAX_in_Plugins), enabling you to spend less time accessing the data you need and more time creating better user experiences.

If you want a structured, extensible, and simple way to get data in and out of WordPress, you probably want to use the REST API.

For all of its simplicity the REST API can feel quite complex at first, so in this handbook we will attempt to break it down into smaller components to explain each part of the full puzzle.


## Key Concepts

To get started we will break down some of the key concepts and terms associated with the REST API: **Routes & Endpoints,** **Requests**, **Responses**, **Schema**, and **Controller Classes**. Each of these concepts play a crucial role in understanding, using, and extending the WordPress REST API, and each is explored in greater depth within this handbook.

### Routes & Endpoints

In the context of the WordPress REST API a **route** is a URI which can be mapped to different HTTP methods. The mapping of an individual HTTP method to a route is known as an **endpoint**.

As an example, if we make a `GET` request to the URI `http://oursite.com/wp-json/` we are returned a JSON response showing what routes are available, and what endpoints are available within each route. `/wp-json/` is a route, and when that route receives a `GET` request then that request is handled by the endpoint which displays what is known as the index for the WordPress REST API. The route `wp-json/wp/v2/posts` by contrast has a `GET` endpoint which returns a list of posts, but also a `POST` endpoint which accepts authenticated requests to create new posts.

We will learn how to register our own routes and endpoints in the following sections.

[info]If you are using [non-pretty permalinks](https://wordpress.org/support/article/using-permalinks/), you should pass the REST API route as a query string parameter. The route `http://oursite.com/wp-json/` in the example above would hence be `http://oursite.com/?rest_route=/`.[/info]

If you get a `404` error when trying to access `http://oursite.com/wp-json/`, consider enabling pretty permalinks or try using the `rest_route` parameter instead.

### Requests

A REST API request is represented within WordPress by an instance of the `WP_REST_Request` class, which is used to store and retrieve information for the current request. A `WP_REST_Request` object is automatically generated when you make an HTTP request to a registered API route. The data specified in this object (derived from the route URI or the JSON payload sent as a part of the request) determines what response you will get back out of the API.

Requests are usually submitted remotely via HTTP but may also be made internally from PHP within WordPress plugin or theme code. There are a lot of neat things you can do using this class, detailed further elsewhere in the handbook.

### Responses

Responses are the data you get back from the API. The `WP_REST_Response` class provides a way to interact with the response data returned by endpoints. Responses return the requested data, or can also be used to return errors if something goes wrong while fulfilling the request.

### Schema

Each endpoint requires a particular structure of input data, and returns data using a defined and predictable structure. Those data structures are defined in the API Schema. The schema structures API data and provides a comprehensive list of all of the properties the API can return and which input parameters it can accept. Well-defined schema also provides one layer of security within the API, as it enables us to validate and sanitize the requests being made to the API. The [Schema section](https://developer.wordpress.org/rest-api/extending-the-rest-api/schema/) explores this large topic further.


### Controller Classes

Controller classes unify and coordinate all these various moving parts within a REST API response cycle. With a controller class you can manage the registration of routes & endpoints, handle requests, utilize schema, and generate API responses. A single class usually contains all of the logic for a given route, and a given route usually represents a specific type of data object within your WordPress site (like a custom post type or taxonomy).


## Next Steps

For a comprehensive overview of the resources and routes available within the default WordPress REST API, review the [API reference](https://developer.wordpress.org/rest-api/reference/). To learn more about how to interact with API resources, you can read through the [Using the REST API section](https://developer.wordpress.org/rest-api/using-the-rest-api/). Once you're comfortable with the default workings of the default routes and methods you may also dive in to how to [extend the REST API](https://developer.wordpress.org/rest-api/extending-the-rest-api/) to expose new data or enhance and manipulate existing response objects.