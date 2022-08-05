# REST API Handbook

The WordPress REST API provides an interface for applications to interact with your WordPress site by sending and receiving data as [JSON](https://en.wikipedia.org/wiki/JSON) (JavaScript Object Notation) objects. It is the foundation of the [WordPress Block Editor](https://developer.wordpress.org/block-editor/), and can likewise enable your theme, plugin or custom application to present new, powerful interfaces for managing and publishing your site content.

Using the WordPress REST API you can create a plugin to provide an entirely new admin experience for WordPress, build a brand new interactive front-end experience, or bring your WordPress content into completely separate applications.

The REST API is a developer-oriented feature of WordPress. It provides data access to the content of your site, and implements the same authentication restrictions -- content that is public on your site is generally publicly accessible via the REST API, while private content, password-protected content, internal users, custom post types, and metadata is only available with authentication or if you specifically set it to be so. If you are not a developer, the most important thing to understand about the API is that it enables the block editor and modern plugin interfaces without compromising the security or privacy of your site.

## What Is A REST API?

An API is an Application Programming Interface. REST, standing for "REpresentational State Transfer," is a set of concepts for modeling and accessing your application's data as interrelated objects and collections. The WordPress REST API provides REST endpoints (URLs) representing the posts, pages, taxonomies, and other built-in WordPress data types. Your application can send and receive JSON data to these endpoints to query, modify and create content on your site. JSON is an open standard data format that is lightweight and human-readable, and looks like Objects do in JavaScript. When you request content from or send content to the API, the response will also be returned in JSON. Because JSON is widely supported in many programming languages, developers can build WordPress applications in client-side JavaScript (like the block editor), as mobile apps, or as desktop or command line tools.

[info]The REST API is just one of many APIs provided by WordPress. You can find the [documentation on these additional APIs here](https://codex.wordpress.org/WordPress_APIs).[/info]

## Using the WordPress REST API 

WordPress already provides a rich set of tools and interfaces for building sites, and you should not feel pressured to use the REST API if your site is already working the way you expect. You do not need to use the REST API to build a WordPress theme or plugin.

However, if you do wish to write your theme, plugin, or external application as a client-side JavaScript application, or a standalone program in a language other than PHP, then your application will need a structured way to access content within your WordPress site. Any programming language which can make HTTP requests and interpret JSON can use the REST API to interact with WordPress, from PHP, Node.js, Go, and Java, to Swift, Kotlin, and beyond.

Even if you're using vanilla JavaScript or jQuery within a theme or plugin the REST API provides a more predictable and structured way to interact with your site's content than [`admin-ajax`](https://codex.wordpress.org/AJAX_in_Plugins), enabling you to spend less time accessing the data you need and more time creating better user experiences.

If you want a structured, extensible, and simple way to get data in and out of WordPress, you probably want to use the REST API.

For all of its simplicity the REST API can feel quite complex at first, so in this handbook we will attempt to break it down into smaller components to explain each part of the full puzzle.

## Next Steps

Familiarize yourself with the [key technical concepts](https://developer.wordpress.org/rest-api/key-concepts/) behind how the REST API functions.

Learn more about how to interact with API resources and query for specific data in the [Using the REST API](https://developer.wordpress.org/rest-api/using-the-rest-api/) section.

Once you're comfortable with the default workings of the default routes and methods, discover how to add new data to the API or enhance and manipulate existing response objects in the [Extending the REST API](https://developer.wordpress.org/rest-api/extending-the-rest-api/) section.

For a comprehensive overview of the resources and routes available by default, review the [API reference](https://developer.wordpress.org/rest-api/reference/).
