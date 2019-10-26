# REST API Handbook

The WordPress REST API provides an interface for applications to interact with your WordPress site by sending and receiving data as [JSON](https://en.wikipedia.org/wiki/JSON) (JavaScript Object Notation) objects. It is the foundation of the [WordPress Block Editor](https://developer.wordpress.org/block-editor/), and can likewise enable your theme, plugin or custom application to present new, powerful interfaces for managing and publishing your site content.

An API is an Application Programming Interface. REST, standing for "REpresentational State Transfer," is a set of concepts for modeling and accessing your application's data as interrelated objects and collections. The WordPress REST API provides REST endpoints (URLs) representing the posts, pages, taxonomies, and other built-in WordPress data types. Your application can send and receive JSON data to these endpoints to query, modify & create content on your site. JSON is an open standard data format that is lightweight and human-readable, and looks like Objects do in JavaScript. When you request content from or send content to the API, the response will also be returned in JSON. Because JSON is widely supported in many programming languages, developers can build WordPress applications in client-side JavaScript (like the block editor), as mobile apps, or as desktop or command line tools.

[info]The REST API is just one of many APIs provided by WordPress. You can find the [documentation on these additional APIs here](https://codex.wordpress.org/WordPress_APIs).[/info]

## Why use the WordPress REST API

WordPress already provides a rich set of tools and interfaces for building sites, and you should not feel pressured to use the REST API if your site is already working the way you expect. You do not need to use the REST API to build a WordPress theme or plugin.

However, if you do wish to write your theme, plugin, or external application as a client-side JavaScript application, or a standalone program in a language other than PHP, then your application will need a structured way to access content within your WordPress site. Any programming language which can make HTTP requests and interpret JSON can use the REST API to interact with WordPress, from PHP, Node.js, Go, and Java, to Swift, Kotlin, and beyond.

Using the WordPress REST API you can create a plugin to provide an entirely new admin experiences for WordPress, build a brand new interactive front-end experience, or bring your WordPress content into completely separate applications. Even if you're using vanilla JavaScript or jQuery within a theme or plugin the REST API provides a more predictable and structured way to interact with your site's content than [`admin-ajax`](https://codex.wordpress.org/AJAX_in_Plugins), enabling you to spend less time accessing the data you need and more time creating better user experiences.

If you want a structured, extensible, and simple way to get data in and out of WordPress, you probably want to use the REST API.

For all of its simplicity the REST API can feel quite complex at first, so in this handbook we will attempt to break it down into smaller components to explain each part of the full puzzle.


## Key Concepts

To get started with using the WordPress REST API we will break down some of the key concepts and terms associated with the API:

* Routes/Endpoints
* Requests
* Responses
* Schema
* Controller Classes

Each of these concepts play a crucial role in using and understanding the WordPress REST API. Let's briefly break them down so that we can later explore each in greater depth.

### Routes & Endpoints

A route, in the context of the WordPress REST API, is a URI which can be mapped to different HTTP methods. The mapping of an individual HTTP method to a route is known as an "endpoint". To clarify: If we make a `GET` request to `http://oursite.com/wp-json/`, we will get a JSON response showing us what routes are available, and within each route, what endpoints are available. `/wp-json/` is a route itself and when a `GET` request is made it matches to the endpoint that displays what is known as the index for the WordPress REST API. We will learn how to register our own routes and endpoints in the following sections.

If you get a `404` error when trying to access `http://oursite.com/wp-json/` URL you may try fixing your pretty permalinks.
[info]If you're using [non-pretty permalinks](https://wordpress.org/support/article/using-permalinks/), you should pass the REST API route as a query string parameter. The route `http://oursite.com/wp-json/` in the example above would hence be `http://oursite.com/?rest_route=/`.[/info]

### Requests

One of the primary classes in the  WordPress REST API infrastructure is `WP_REST_Request`. This class is used to store and retrieve information for the current request; requests can be submitted remotely via HTTP but may also be made internally from PHP with WordPress. `WP_REST_Request` objects are automatically generated for you whenever you make an HTTP request to a registered route. The data specified in the request will determine what response you get back out of the API. There are a lot of neat things you can do using the request class. The request section will go into greater detail.


### Responses

Responses are the data you get back from the API. The `WP_REST_Response` class provides a way to interact with the response data returned by endpoints. Responses can return the desired data, and they can also be used to return errors.

### Schema

Each endpoint requires and provides slightly different data structures, and those structures are defined in the API Schema. The schema structures API data and provides a comprehensive list of all of the properties the API can return and input parameters it can accept. Schema also provides security benefits for the API, as it enables us to validate the requests being made to the API. The Schema section further explores this large topic.


### Controller Classes

As you can see, the WordPress REST API has a lot of moving parts that all need to work together. Controller classes bring all of these elements together in a single place. With a controller class you can manage the registration of routes & endpoints, handle requests, utilize schema, and generate API responses.


## Next Steps

Let's look at the reference for the WordPress REST API.
