# Authentication

## Cookie Authentication

Cookie authentication is the standard authentication method included with WordPress. When you log in to your dashboard, this sets up the cookies correctly for you, so plugin and theme developers need only to have a logged-in user.

However, the REST API includes a technique called [nonces](http://codex.wordpress.org/WordPress_Nonces) to avoid [CSRF](http://en.wikipedia.org/wiki/Cross-site_request_forgery) issues. This prevents other sites from forcing you to perform actions without explicitly intending to do so. This requires slightly special handling for the API.

For developers using the built-in Javascript API, this is handled automatically for you. This is the recommended way to use the API for plugins and themes. Custom data models can extend `wp.api.models.Base` to ensure this is sent correctly for any custom requests.

For developers making manual Ajax requests, the nonce will need to be passed with each request. The API uses nonces with the action set to `wp_rest`. These can then be passed to the API via the `_wpnonce` data parameter (either POST data or in the query for GET requests), or via the `X-WP-Nonce` header. If no nonce is provided the API will set the current user to 0, turning the request into an **unauthenticated request**, even if you're logged into WordPress.

Note: Until recently, most software had spotty support for `DELETE` requests. For instance, PHP doesn't transform the request body of a `DELETE` request into a super global. As such, supplying the nonce as a header is the most reliable approach.

It is important to keep in mind that this authentication method relies on WordPress cookies. As a result this method is only applicable when the REST API is used inside of WordPress and the current user is logged in. In addition, the current user must have the appropriate capability to perform the action being performed.

As an example, this is how the built-in Javascript client creates the nonce:

```php
<?php
wp_localize_script( 'wp-api', 'wpApiSettings', array(
	'root' => esc_url_raw( rest_url() ),
	'nonce' => wp_create_nonce( 'wp_rest' )
) );
```

This is then used in the base model:

```js
options.beforeSend = function(xhr) {
	xhr.setRequestHeader('X-WP-Nonce', wpApiSettings.nonce);

	if (beforeSend) {
		return beforeSend.apply(this, arguments);
	}
};
```

Here is an example of editing the title of a post, using jQuery AJAX:

```js
$.ajax( {
	url: wpApiSettings.root + 'wp/v2/posts/1',
	method: 'POST',
	beforeSend: function ( xhr ) {
		xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );
	},
	data:{
		'title' : 'Hello Moon'
	}
} ).done( function ( response ) {
	console.log( response );
} );
```

Note that you do not need to verify that the nonce in valid inside your custom end point. This is automatically done for you in 
`rest_cookie_check_errors()`

## Authentication Plugins

While cookie authentication is the only authentication mechanism available natively within WordPress, plugins may be added to support alternative modes of authentication that will work from remote applications. Some example plugins are [OAuth 1.0a Server](https://wordpress.org/plugins/rest-api-oauth1/), [Application Passwords](https://wordpress.org/plugins/application-passwords/), and [JSON Web Tokens](https://wordpress.org/plugins/jwt-authentication-for-wp-rest-api/).

[info]

There's also a [Basic Authentication](https://github.com/WP-API/Basic-Auth) plugin.

Note that this plugin requires sending your username and password with every request, and should only be used for development and testing i.e. not in a production environment.

[/info]
