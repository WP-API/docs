# Client Libraries

The API can be used from any application by sending basic HTTP requests; however, client libraries simplify the process of querying or creating specific resources. These libraries make it easy to connect an external application to the WordPress REST API using a variety of programming languages.

[alert]Aside from the Backbone.js client, these libraries are not part of WordPress core, and are not necessarily maintained or endorsed by the WordPress REST API team.[/alert]

[info]To perform authenticated requests from outside of the WordPress admin, themes, or plugins, a separate <a href="https://developer.wordpress.org/rest-api/authentication/#authentication-plugins">authentication plugin</a> is required.[/info]


## JavaScript

The [Backbone.js client](https://developer.wordpress.org/rest-api/backbone-javascript-client/) is built in to WordPress core and provides Backbone.js models &amp; collections for working with REST API resources.

[node-wpapi](http://wp-api.org/node-wpapi) is an isomorphic JavaScript client library for querying or writing to the REST API using an intuitive chaining syntax. It can be used with Node.js or with client-side JavaScript applications.

[ember-wordpress](https://github.com/oskarrough/ember-wordpress) provides a connection between Ember Data and the REST API


## Ruby

[wp-api-client](https://github.com/duncanjbrown/wp-api-client): a read-only REST API client written in Ruby.

## C# / .NET
[WordPressPCL](https://github.com/wp-net/WordPressPCL): a full REST API client written in C#.
