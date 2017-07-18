# Users

<section class="route">
<div class="primary">
## Schema
The schema defines all the fields that exist for a user object.
<table class="attributes">
<tbody>
<tr id="schema-id">
<td>`id`
<span class="type">integer</span></td>
<td>Unique identifier for the user.
<p class="read-only">Read only</p>
<p class="context">Context: `embed`, `view`, `edit`</p>
</td>
</tr>
<tr id="schema-username">
<td>`username`
<span class="type">string</span></td>
<td>Login name for the user.
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-name">
<td>`name`
<span class="type">string</span></td>
<td>Display name for the user.
<p class="context">Context: `embed`, `view`, `edit`</p>
</td>
</tr>
<tr id="schema-first_name">
<td>`first_name`
<span class="type">string</span></td>
<td>First name for the user.
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-last_name">
<td>`last_name`
<span class="type">string</span></td>
<td>Last name for the user.
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-email">
<td>`email`
<span class="type">string, email</span></td>
<td>The email address for the user.
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-url">
<td>`url`
<span class="type">string, uri</span></td>
<td>URL of the user.
<p class="context">Context: `embed`, `view`, `edit`</p>
</td>
</tr>
<tr id="schema-description">
<td>`description`
<span class="type">string</span></td>
<td>Description of the user.
<p class="context">Context: `embed`, `view`, `edit`</p>
</td>
</tr>
<tr id="schema-link">
<td>`link`
<span class="type">string, uri</span></td>
<td>Author URL of the user.
<p class="read-only">Read only</p>
<p class="context">Context: `embed`, `view`, `edit`</p>
</td>
</tr>
<tr id="schema-locale">
<td>`locale`
<span class="type">string</span></td>
<td>Locale for the user.
<p class="context">Context: `edit`</p>
One of: ``, `en_US`</td>
</tr>
<tr id="schema-nickname">
<td>`nickname`
<span class="type">string</span></td>
<td>The nickname for the user.
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-slug">
<td>`slug`
<span class="type">string</span></td>
<td>An alphanumeric identifier for the user.
<p class="context">Context: `embed`, `view`, `edit`</p>
</td>
</tr>
<tr id="schema-registered_date">
<td>`registered_date`
<span class="type">string, datetime (ISO8601)</span></td>
<td>Registration date for the user.
<p class="read-only">Read only</p>
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-roles">
<td>`roles`
<span class="type">array</span></td>
<td>Roles assigned to the user.
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-password">
<td>`password`
<span class="type">string</span></td>
<td>Password for the user (never included).
<p class="context">Context: ``</p>
</td>
</tr>
<tr id="schema-capabilities">
<td>`capabilities`
<span class="type">object</span></td>
<td>All capabilities assigned to the user.
<p class="read-only">Read only</p>
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-extra_capabilities">
<td>`extra_capabilities`
<span class="type">object</span></td>
<td>Any extra capabilities assigned to the user.
<p class="read-only">Read only</p>
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-avatar_urls">
<td>`avatar_urls`
<span class="type">object</span></td>
<td>Avatar URLs for the user.
<p class="read-only">Read only</p>
<p class="context">Context: `embed`, `view`, `edit`</p>
</td>
</tr>
<tr id="schema-meta">
<td>`meta`
<span class="type">object</span></td>
<td>Meta fields.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Example Request
`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/users`</div>
</section><section class="route">
<div class="primary">
## List Users
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`context`</td>
<td>Scope under which the request is made; determines fields present in response.
<p class="default">Default: `view`</p>
One of: `view`, `embed`, `edit`</td>
</tr>
<tr>
<td>`page`</td>
<td>Current page of the collection.
<p class="default">Default: `1`</p>
</td>
</tr>
<tr>
<td>`per_page`</td>
<td>Maximum number of items to be returned in result set.
<p class="default">Default: `10`</p>
</td>
</tr>
<tr>
<td>`search`</td>
<td>Limit results to those matching a string.</td>
</tr>
<tr>
<td>`exclude`</td>
<td>Ensure result set excludes specific IDs.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`include`</td>
<td>Limit result set to specific IDs.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`offset`</td>
<td>Offset the result set by a specific number of items.</td>
</tr>
<tr>
<td>`order`</td>
<td>Order sort attribute ascending or descending.
<p class="default">Default: `asc`</p>
One of: `asc`, `desc`</td>
</tr>
<tr>
<td>`orderby`</td>
<td>Sort collection by object attribute.
<p class="default">Default: `name`</p>
One of: `id`, `include`, `name`, `registered_date`, `slug`, `email`, `url`</td>
</tr>
<tr>
<td>`slug`</td>
<td>Limit result set to users with a specific slug.</td>
</tr>
<tr>
<td>`roles`</td>
<td>Limit result set to users matching at least one specific role provided. Accepts csv list or single role.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/users`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/users`</div>
</section><section class="route">
<div class="primary">
## Retrieve a User
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`context`</td>
<td>Scope under which the request is made; determines fields present in response.
<p class="default">Default: `view`</p>
One of: `view`, `embed`, `edit`</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/users/&lt;id&gt;`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/users/&lt;id&gt;`</div>
</section><section class="route">
<div class="primary">
## Create a User
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[username](#schema-username)`</td>
<td>Login name for the user.
<p class="required">Required: true</p>
</td>
</tr>
<tr>
<td>`[name](#schema-name)`</td>
<td>Display name for the user.</td>
</tr>
<tr>
<td>`[first_name](#schema-first_name)`</td>
<td>First name for the user.</td>
</tr>
<tr>
<td>`[last_name](#schema-last_name)`</td>
<td>Last name for the user.</td>
</tr>
<tr>
<td>`[email](#schema-email)`</td>
<td>The email address for the user.
<p class="required">Required: true</p>
</td>
</tr>
<tr>
<td>`[url](#schema-url)`</td>
<td>URL of the user.</td>
</tr>
<tr>
<td>`[description](#schema-description)`</td>
<td>Description of the user.</td>
</tr>
<tr>
<td>`[locale](#schema-locale)`</td>
<td>Locale for the user.

One of: ``, `en_US`</td>
</tr>
<tr>
<td>`[nickname](#schema-nickname)`</td>
<td>The nickname for the user.</td>
</tr>
<tr>
<td>`[slug](#schema-slug)`</td>
<td>An alphanumeric identifier for the user.</td>
</tr>
<tr>
<td>`[roles](#schema-roles)`</td>
<td>Roles assigned to the user.</td>
</tr>
<tr>
<td>`[password](#schema-password)`</td>
<td>Password for the user (never included).
<p class="required">Required: true</p>
</td>
</tr>
<tr>
<td>`[meta](#schema-meta)`</td>
<td>Meta fields.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`POST /wp/v2/users`</div>
</section><section class="route">
<div class="primary">
## Update a User
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[username](#schema-username)`</td>
<td>Login name for the user.</td>
</tr>
<tr>
<td>`[name](#schema-name)`</td>
<td>Display name for the user.</td>
</tr>
<tr>
<td>`[first_name](#schema-first_name)`</td>
<td>First name for the user.</td>
</tr>
<tr>
<td>`[last_name](#schema-last_name)`</td>
<td>Last name for the user.</td>
</tr>
<tr>
<td>`[email](#schema-email)`</td>
<td>The email address for the user.</td>
</tr>
<tr>
<td>`[url](#schema-url)`</td>
<td>URL of the user.</td>
</tr>
<tr>
<td>`[description](#schema-description)`</td>
<td>Description of the user.</td>
</tr>
<tr>
<td>`[locale](#schema-locale)`</td>
<td>Locale for the user.

One of: ``, `en_US`</td>
</tr>
<tr>
<td>`[nickname](#schema-nickname)`</td>
<td>The nickname for the user.</td>
</tr>
<tr>
<td>`[slug](#schema-slug)`</td>
<td>An alphanumeric identifier for the user.</td>
</tr>
<tr>
<td>`[roles](#schema-roles)`</td>
<td>Roles assigned to the user.</td>
</tr>
<tr>
<td>`[password](#schema-password)`</td>
<td>Password for the user (never included).</td>
</tr>
<tr>
<td>`[meta](#schema-meta)`</td>
<td>Meta fields.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`POST /wp/v2/users/&lt;id&gt;`
### Example Request
``</div>
</section><section class="route">
<div class="primary">
## Delete a User
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`force`</td>
<td>Required to be true, as users do not support trashing.</td>
</tr>
<tr>
<td>`reassign`</td>
<td>Reassign the deleted user's posts and links to this user ID.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`DELETE /wp/v2/users/&lt;id&gt;`
### Example Request
`$ curl -X DELETE http://demo.wp-api.org/wp-json/wp/v2/users/&lt;id&gt;`</div>
</section>
