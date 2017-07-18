# Reference

The WordPress REST API is organized around [REST](http://en.wikipedia.org/wiki/Representational_state_transfer), and is designed to have predictable, resource-oriented URLs and to use HTTP response codes to indicate API errors. The API uses built-in HTTP features, like HTTP authentication and HTTP verbs, which can be understood by off-the-shelf HTTP clients, and supports cross-origin resource sharing to allow you to interact securely with the API from a client-side web application.

The REST API uses JSON exclusively as the request and response format, including error responses. While the REST API does not completely conform to the [HAL standard](http://stateless.co/hal_specification.html), it does implement HAL's `._links` and `._embedded` properties for linking API resources, and is fully discoverable via hyperlinks in the responses.

The REST API provides public data accessible to any client anonymously, as well as private data only available after [authentication](https://developer.wordpress.org/rest-api/authentication/). Once authenticated the REST API supports most content management actions, allowing you to build alternative dashboards for a site, enhance your plugins with more responsive management tools, or build complex single-page applications.

This API reference provides information on the specific endpoints available through the API, their parameters, and their response data format.

## REST API Developer Endpoint Reference

<table>
  <tr>
    <th>Resource</th>
    <th>Base Route</th>
  </tr>
  <tr>
    <td>[Posts](https://developer.wordpress.org/rest-api/reference/posts/)</td>
    <td>`/wp/v2/posts`</td>
  </tr>
  <tr>
    <td>[Post Revisions](https://developer.wordpress.org/rest-api/reference/post-revisions/)</td>
    <td>`/wp/v2/revisions`</td>
  </tr>
  <tr>
    <td>[Categories](https://developer.wordpress.org/rest-api/reference/categories/)</td>
    <td>`/wp/v2/categories`</td>
  </tr>
  <tr>
    <td>[Tags](https://developer.wordpress.org/rest-api/reference/tags/)</td>
    <td>`/wp/v2/tags`</td>
  </tr>
  <tr>
    <td>[Pages](https://developer.wordpress.org/rest-api/reference/pages/)</td>
    <td>`/wp/v2/pages`</td>
  </tr>
  <tr>
    <td>[Comments](https://developer.wordpress.org/rest-api/reference/comments/)</td>
    <td>`/wp/v2/comments`</td>
  </tr>
  <tr>
    <td>[Taxonomies](https://developer.wordpress.org/rest-api/reference/taxonomies/)</td>
    <td>`/wp/v2/taxonomies`</td>
  </tr>
  <tr>
    <td>[Media](https://developer.wordpress.org/rest-api/reference/media/)</td>
    <td>`/wp/v2/media`</td>
  </tr>
  <tr>
    <td>[Users](https://developer.wordpress.org/rest-api/reference/users/)</td>
    <td>`/wp/v2/users`</td>
  </tr>
  <tr>
    <td>[Post Types](https://developer.wordpress.org/rest-api/reference/post-types/)</td>
    <td>`/wp/v2/types`</td>
  </tr>
  <tr>
    <td>[Post Statuses](https://developer.wordpress.org/rest-api/reference/post-statuses/)</td>
    <td>`/wp/v2/statuses`</td>
  </tr>
  <tr>
    <td>[Settings](https://developer.wordpress.org/rest-api/reference/settings/)</td>
    <td>`/wp/v2/settings`</td>
  </tr>
</table>

## A Distributed API

Unlike many other REST APIs, the WordPress REST API is distributed and available individually on each site that supports it. This means there is no singular API root or base to contact; instead, we have [a discovery process](https://developer.wordpress.org/rest-api/discovery/) that allows interacting with sites without prior contact. The API also exposes self-documentation at the index endpoint, or via an `OPTIONS` request to any endpoint, allowing human- or machine-discovery of endpoint capabilities.

A [demo installation](https://demo.wp-api.org/) of the API for testing purposes is available at `https://demo.wp-api.org/wp-json/`; this site supports auto-discovery, and provides read-only demo data.
