# Post Revisions

<section id="content">
<div class="background"></div>
<section class="route">
<div class="primary">
## Schema
The schema defines all the fields that exist for a posts-revision object.
<table class="attributes">
<tbody>
<tr id="schema-author">
<td>`author`
<span class="type">
integer
</span></td>
<td>The id for the author of the object.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-date">
<td>`date`
<span class="type"><span class="type">
string,
datetime (ISO8601)</span></span>&nbsp;</td>
<td>The date the object was published.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-date_gmt">
<td>`date_gmt`
<span class="type"><span class="type">
string,
datetime (ISO8601)</span></span>&nbsp;</td>
<td>The date the object was published, as GMT.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-guid">
<td>`guid`
<span class="type">
string
</span></td>
<td>GUID for the object, as it exists in the database.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-id">
<td>`id`
<span class="type">
integer
</span></td>
<td>Unique identifier for the object.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-modified">
<td>`modified`
<span class="type"><span class="type">
string,
datetime (ISO8601)</span></span>&nbsp;</td>
<td>The date the object was last modified.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-modified_gmt">
<td>`modified_gmt`
<span class="type"><span class="type">
string,
datetime (ISO8601)</span></span>&nbsp;</td>
<td>The date the object was last modified, as GMT.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-parent">
<td>`parent`
<span class="type">
integer
</span></td>
<td>The id for the parent of the object.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-slug">
<td>`slug`
<span class="type">
string
</span></td>
<td>An alphanumeric identifier for the object unique to its type.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-title">
<td>`title`
<span class="type">
string
</span></td>
<td>Title for the object, as it exists in the database.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-content">
<td>`content`
<span class="type">
string
</span></td>
<td>Content for the object, as it exists in the database.
<p class="context">Context: `view`</p>
</td>
</tr>
<tr id="schema-excerpt">
<td>`excerpt`
<span class="type">
string
</span></td>
<td>Excerpt for the object, as it exists in the database.
<p class="context">Context: `view`</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Example Request
`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json`

</div>
</section><section class="route">
<div class="primary">
## List Post Revisions
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`context`</td>
<td>Scope under which the request is made; determines fields present in response.
<p class="default">Default: `view`</p>
One of: `view`</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/posts/&lt;parent_id&gt;/revisions`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/posts/&lt;parent_id&gt;/revisions`

</div>
</section><section class="route">
<div class="primary">
## Retrieve a Post Revision
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`context`</td>
<td>Scope under which the request is made; determines fields present in response.
<p class="default">Default: `view`</p>
One of: `view`</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/posts/&lt;parent_id&gt;/revisions/&lt;id&gt;`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/posts/&lt;parent_id&gt;/revisions/&lt;id&gt;`

</div>
</section><section class="route">
<div class="primary">
## Delete a Post Revision
There are no arguments for this enpdoint.

</div>
<div class="secondary">
### Definition
`DELETE /wp/v2/posts/&lt;parent_id&gt;/revisions/&lt;id&gt;`
### Example Request
`$ curl -X DELETE http://demo.wp-api.org/wp-json/wp/v2/posts/&lt;parent_id&gt;/revisions/&lt;id&gt;`

</div>
</section></section>
