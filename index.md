# REST API Handbook

The WordPress REST API provides API endpoints for WordPress data types that allow developers to interact with sites remotely by sending and receiving [JSON](https://en.wikipedia.org/wiki/JSON) (JavaScript Object Notation) objects. JSON is an open standard data format that is lightweight and human-readable, and looks like Objects do in JavaScript; hence the name. When you send content to or make a request to the API, the response will be returned in JSON. This enables developers to create, read and update WordPress content from client-side JavaScript or from external applications, even those written in languages beyond PHP.

[info]Looking for a list of the other APIs available within WordPress? You can find the <a href="https://codex.wordpress.org/WordPress_APIs">documentation here</a>.[/info]


## Why use the WordPress REST API

The WordPress REST API makes it easier than ever to use WordPress in new and exciting ways, such as creating Single Page Applications on top of WordPress. You could create a plugin to provide an entirely new admin experiences for WordPress, or create a brand new interactive front-end experience.

You would not even have to write the applications in PHP: any programming language that can make HTTP requests and interpret JSON can interact with WordPress through the REST API, from Node.js to Java and beyond.

The WordPress REST API can also serve as a strong replacement for the admin-ajax API in core. By using the REST API, you can more easily structure the way you want to get data into and out of WordPress. AJAX calls can be greatly simplified by using the REST API, enabling you to spend less time accessing the data you need and more time creating better user experiences.

Our imagination is the only limit to what can be done with the WordPress REST API. The bottom line is, if you want a structured, extensible, and simple way to get data in and out of WordPress over HTTP, you probably want to use the REST API. For all of its simplicity the REST API can feel quite complex at first, and we will attempt to break it down into smaller components so that we can easily piece together the full puzzle.


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
[info] If you're using [non-pretty permalinks](https://codex.wordpress.org/Using_Permalinks), you should pass the REST API route as a query string parameter (with `?rest_route=/`, for example `http://oursite.com/?rest_route=/`). The route `http://oursite.com/wp-json/` in the example above would hence be  `http://oursite.com/?rest_route=/`.[/info]

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
