# Categories

<section class="route">
<div class="primary">
## Schema
The schema defines all the fields that exist for a category object.
<table class="attributes">
<tbody>
<tr id="schema-id">
<td>`id`
<span class="type">integer</span></td>
<td>Unique identifier for the term.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `embed`, `edit`</p>
</td>
</tr>
<tr id="schema-count">
<td>`count`
<span class="type">integer</span></td>
<td>Number of published posts for the term.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-description">
<td>`description`
<span class="type">string</span></td>
<td>HTML description of the term.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-link">
<td>`link`
<span class="type">string, uri</span></td>
<td>URL of the term.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `embed`, `edit`</p>
</td>
</tr>
<tr id="schema-name">
<td>`name`
<span class="type">string</span></td>
<td>HTML title for the term.
<p class="context">Context: `view`, `embed`, `edit`</p>
</td>
</tr>
<tr id="schema-slug">
<td>`slug`
<span class="type">string</span></td>
<td>An alphanumeric identifier for the term unique to its type.
<p class="context">Context: `view`, `embed`, `edit`</p>
</td>
</tr>
<tr id="schema-taxonomy">
<td>`taxonomy`
<span class="type">string</span></td>
<td>Type attribution for the term.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `embed`, `edit`</p>
One of: `category`, `post_tag`, `nav_menu`, `link_category`, `post_format`</td>
</tr>
<tr id="schema-parent">
<td>`parent`
<span class="type">integer</span></td>
<td>The parent term ID.
<p class="context">Context: `view`, `edit`</p>
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
`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/categories`</div>
</section><section class="route">
<div class="primary">
## List Categorys
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
<td>`order`</td>
<td>Order sort attribute ascending or descending.
<p class="default">Default: `asc`</p>
One of: `asc`, `desc`</td>
</tr>
<tr>
<td>`orderby`</td>
<td>Sort collection by term attribute.
<p class="default">Default: `name`</p>
One of: `id`, `include`, `name`, `slug`, `term_group`, `description`, `count`</td>
</tr>
<tr>
<td>`hide_empty`</td>
<td>Whether to hide terms not assigned to any posts.</td>
</tr>
<tr>
<td>`parent`</td>
<td>Limit result set to terms assigned to a specific parent.</td>
</tr>
<tr>
<td>`post`</td>
<td>Limit result set to terms assigned to a specific post.</td>
</tr>
<tr>
<td>`slug`</td>
<td>Limit result set to terms with a specific slug.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/categories`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/categories`</div>
</section><section class="route">
<div class="primary">
## Retrieve a Category
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
`GET /wp/v2/categories/&lt;id&gt;`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/categories/&lt;id&gt;`</div>
</section><section class="route">
<div class="primary">
## Create a Category
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[description](#schema-description)`</td>
<td>HTML description of the term.</td>
</tr>
<tr>
<td>`[name](#schema-name)`</td>
<td>HTML title for the term.
<p class="required">Required: true</p>
</td>
</tr>
<tr>
<td>`[slug](#schema-slug)`</td>
<td>An alphanumeric identifier for the term unique to its type.</td>
</tr>
<tr>
<td>`[parent](#schema-parent)`</td>
<td>The parent term ID.</td>
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
`POST /wp/v2/categories`</div>
</section><section class="route">
<div class="primary">
## Update a Category
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[description](#schema-description)`</td>
<td>HTML description of the term.</td>
</tr>
<tr>
<td>`[name](#schema-name)`</td>
<td>HTML title for the term.</td>
</tr>
<tr>
<td>`[slug](#schema-slug)`</td>
<td>An alphanumeric identifier for the term unique to its type.</td>
</tr>
<tr>
<td>`[parent](#schema-parent)`</td>
<td>The parent term ID.</td>
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
`POST /wp/v2/categories/&lt;id&gt;`
### Example Request
``</div>
</section><section class="route">
<div class="primary">
## Delete a Category
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`force`</td>
<td>Required to be true, as terms do not support trashing.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`DELETE /wp/v2/categories/&lt;id&gt;`
### Example Request
`$ curl -X DELETE http://demo.wp-api.org/wp-json/wp/v2/categories/&lt;id&gt;`</div>
</section>
