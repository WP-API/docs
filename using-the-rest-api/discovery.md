# Discovery

When your client talks to an unknown site, you'll need to discover what the site is capable of and how the site is configured. There are a couple of steps for this, depending on what you need to discover.


## Discovering the API

The first step of connecting to a site is finding out whether the site has the API enabled. Typically, you'll be working with URLs from user input, so the site you're accessing could be anything. The discovery step lets you verify the API is available, as well as indicating how to access it.


### Link Header

The preferred way to handle discovery is to send a HEAD request to the supplied address. The REST API automatically adds a Link header to all front-end pages that looks like the following:

	Link: <http://example.com/wp-json/>; rel="https://api.w.org/"

This URL points to the root route (`/`) of the API, which is then used for further discovery steps.

For sites without "pretty permalinks" enabled, `/wp-json/` isn't automatically handled by WordPress. This means that normal/default WordPress permalinks will be used instead. These headers look more like this:

	Link: <http://example.com/?rest_route=/>; rel="https://api.w.org/"

Clients should keep this variation in mind and ensure that both routes can be handled seamlessly.

This auto-discovery can be applied to any URL served by a WordPress installation, so no pre-processing on user input needs to be added. Since this is a HEAD request, the request should be safe to send blindly to servers without worrying about causing side-effects.


### Element

For clients with a HTML parser, or running in the browser, the equivalent of the Link header is included in the `<head>` of front-end pages through a `<link>` element:

	<link rel='https://api.w.org/' href='http://example.com/wp-json/' />

In-browser Javascript can access this via the DOM:

```js
// jQuery method
var $link = jQuery( 'link[rel="https://api.w.org/"]' );
var api_root = $link.attr( 'href' );

// Native method
var links = document.getElementsByTagName( 'link' );
var link = Array.prototype.filter.call( links, function ( item ) {
	return ( item.rel === 'https://api.w.org/' );
} );
var api_root = link[0].href;
```

For in-browser clients, or clients without access to HTTP headers, this may be a more usable way of discovering the API. This is similar to Atom/RSS feed discovery, so existing code for that purpose may also be automatically adapted instead.


### RSD (Really Simple Discovery)

For clients with support for XML-RPC discovery, the [RSD method](http://cyber.law.harvard.edu/blogs/gems/tech/rsd.html) may be more applicable. This is an XML-based discovery format typically used for XML-RPC. RSD has two steps. The first step is to find the RSD endpoint, supplied as a `<link>` element:

	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://example.com/xmlrpc.php?rsd" />

The second step is to fetch the RSD document and parse the available endpoints. This involves using an XML parser on a document like the following:

```xml
<?xml version="1.0" encoding="utf-8"?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
  <service>
    <engineName>WordPress</engineName>
    <engineLink>http://wordpress.org/</engineLink>
    <homePageLink>http://example.com/</homePageLink>
    <apis>
      <api name="WordPress" blogID="1" preferred="true" apiLink="http://example.com/xmlrpc.php" />
      <!-- ... -->
      <api name="WP-API" blogID="1" preferred="false" apiLink="http://example.com/wp-json/" />
    </apis>
  </service>
</rsd>
```

The REST API always has a `name` attribute with the value equal to `WP-API`.

RSD is the least-preferred method of autodiscovery for a couple of reasons. The first step of RSD-based discovery involves parsing the HTML to first find the RSD document itself, which is equivalent to the `<link>` Element autodiscovery. It then involves another step to parse the RSD document, which requires a full XML parser.

Where possible, we suggest avoiding RSD-based discovery due to the complexity, but existing XML-RPC clients may prefer to use this method if they already have an RSD parser enabled. For XML-RPC clients which wish to use the REST API as a progressive enhancement to the codebase, this avoids needing to support different forms of discovery.


## Authentication Discovery

Discovery is also available for authentication methods available via the API. The API root's response is an object describing the API, which includes an `authentication` key:

```
{
	"name": "Example WordPress Site",
	"description": "YOLO",
	"routes": { ... },
	"authentication": {
		"oauth1": {
			"request": "http://example.com/oauth/request",
			"authorize": "http://example.com/oauth/authorize",
			"access": "http://example.com/oauth/access",
			"version": "0.1"
		}
	}
}
```

The `authentication` value is a map (associative array) of authentication method ID to authentication options. The options available here are specific to the authentication method itself. See the [authentication documentation](/rest-api/authentication/) for the options for specific authentication methods.


## Extension Discovery

Once you've discovered the API, the next step is check what the API supports. The index of the API exposes the `namespaces` item, which contains the extensions to the API that are supported.

For WordPress sites using versions 4.4 through 4.6, only the base API infrastructure is available, not the full API with endpoints. This also includes the oEmbed endpoints:

```
{
	"name": "Example WordPress Site",
	"namespaces": [
		"oembed/1.0/"
	]
}
```

Sites with the full API available (i.e. with WordPress 4.7+ or the REST API plugin installed) will have the `wp/v2` item in `namespaces` as well:

```
{
	"name": "Example WordPress Site",
	"namespaces": [
		"wp/v2",
		"oembed/1.0/"
	]
}
```

Before attempting to use any of the core endpoints, you should be sure to check that the API is supported by checking for `wp/v2` support. WordPress 4.4 enabled the API infrastructure for all sites, but did **not** include the core endpoints under `wp/v2`. Core endpoints were added in WordPress 4.7.

This same mechanism can be used for detecting support for any plugins that support the REST API. For example, take a plugin which registers the following route:

```php
<?php
register_rest_route( 'testplugin/v1', '/testroute', array( /* ... */ ) );
```

This would add the `testplugin/v1` namespace to the index:

```
{
	"name": "Example WordPress Site",
	"namespaces": [
		"wp/v2",
		"oembed/1.0/",
		"testplugin/v1"
	]
}
```

## Resource Discovery

As of [WordPress 5.5](https://core.trac.wordpress.org/changeset/48273) the REST API also provides a discovery mechanism for identifying the REST API route equivalent of the current document. A link is added with a `rel` of `alternate` and a `type` of `application/json` that points to a REST API url. The link is added both as a [`Link` header](#link-header) and a [`<link>` element](#element).

For instance, in the `<head>` section of this page, the following `<link>` appears.

```html
<link rel="alternate" type="application/json" href="https://developer.wordpress.org/wp-json/wp/v2/rest-api-handbook/23085">
```

Links are added for post, pages, and other custom post types, as well as terms and author pages. Links are not currently output for post archives or search results.
