# Taxonomies

<section class="route">
<div class="primary">
## Schema
The schema defines all the fields that exist for a taxonomy object.
<table class="attributes">
<tbody>
<tr id="schema-capabilities">
<td>`capabilities`
<span class="type">object</span></td>
<td>All capabilities used by the taxonomy.
<p class="read-only">Read only</p>
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-description">
<td>`description`
<span class="type">string</span></td>
<td>A human-readable description of the taxonomy.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-hierarchical">
<td>`hierarchical`
<span class="type">boolean</span></td>
<td>Whether or not the taxonomy should have children.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-labels">
<td>`labels`
<span class="type">object</span></td>
<td>Human-readable labels for the taxonomy for various contexts.
<p class="read-only">Read only</p>
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-name">
<td>`name`
<span class="type">string</span></td>
<td>The title for the taxonomy.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-slug">
<td>`slug`
<span class="type">string</span></td>
<td>An alphanumeric identifier for the taxonomy.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-show_cloud">
<td>`show_cloud`
<span class="type">boolean</span></td>
<td>Whether or not the term cloud should be displayed.
<p class="read-only">Read only</p>
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-types">
<td>`types`
<span class="type">array</span></td>
<td>Types associated with the taxonomy.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-rest_base">
<td>`rest_base`
<span class="type">string</span></td>
<td>REST base route for the taxonomy.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Example Request
`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/taxonomies`</div>
</section><section class="route">
<div class="primary">
## List Taxonomys
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
<td>`type`</td>
<td>Limit results to taxonomies associated with a specific post type.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/taxonomies`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/taxonomies`</div>
</section><section class="route">
<div class="primary">
## Retrieve a Taxonomy
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
`GET /wp/v2/taxonomies/&lt;taxonomy&gt;`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/taxonomies/&lt;taxonomy&gt;`</div>
</section>
