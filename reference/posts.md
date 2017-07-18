# Posts

<section class="route">
<div class="primary">
## Schema
The schema defines all the fields that exist for a post object.
<table class="attributes">
<tbody>
<tr id="schema-date">
<td>`date`
<span class="type">string, datetime ([details](https://core.trac.wordpress.org/ticket/41032))</span></td>
<td>The date the object was published, in the site's timezone.
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-date_gmt">
<td>`date_gmt`
<span class="type">string, datetime ([details](https://core.trac.wordpress.org/ticket/41032))</span></td>
<td>The date the object was published, as GMT.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-guid">
<td>`guid`
<span class="type">object</span></td>
<td>The globally unique identifier for the object.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-id">
<td>`id`
<span class="type">integer</span></td>
<td>Unique identifier for the object.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-link">
<td>`link`
<span class="type">string, uri</span></td>
<td>URL to the object.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-modified">
<td>`modified`
<span class="type">string, datetime ([details](https://core.trac.wordpress.org/ticket/41032))</span></td>
<td>The date the object was last modified, in the site's timezone.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-modified_gmt">
<td>`modified_gmt`
<span class="type">string, datetime ([details](https://core.trac.wordpress.org/ticket/41032))</span></td>
<td>The date the object was last modified, as GMT.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-slug">
<td>`slug`
<span class="type">string</span></td>
<td>An alphanumeric identifier for the object unique to its type.
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-status">
<td>`status`
<span class="type">string</span></td>
<td>A named status for the object.
<p class="context">Context: `edit`</p>
One of: `publish`, `future`, `draft`, `pending`, `private`</td>
</tr>
<tr id="schema-type">
<td>`type`
<span class="type">string</span></td>
<td>Type of Post for the object.
<p class="read-only">Read only</p>
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-password">
<td>`password`
<span class="type">string</span></td>
<td>A password to protect access to the content and excerpt.
<p class="context">Context: `edit`</p>
</td>
</tr>
<tr id="schema-title">
<td>`title`
<span class="type">object</span></td>
<td>The title for the object.
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-content">
<td>`content`
<span class="type">object</span></td>
<td>The content for the object.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-author">
<td>`author`
<span class="type">integer</span></td>
<td>The ID for the author of the object.
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-excerpt">
<td>`excerpt`
<span class="type">object</span></td>
<td>The excerpt for the object.
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
<tr id="schema-featured_media">
<td>`featured_media`
<span class="type">integer</span></td>
<td>The ID of the featured media for the object.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-comment_status">
<td>`comment_status`
<span class="type">string</span></td>
<td>Whether or not comments are open on the object.
<p class="context">Context: `view`, `edit`</p>
One of: `open`, `closed`</td>
</tr>
<tr id="schema-ping_status">
<td>`ping_status`
<span class="type">string</span></td>
<td>Whether or not the object can be pinged.
<p class="context">Context: `view`, `edit`</p>
One of: `open`, `closed`</td>
</tr>
<tr id="schema-format">
<td>`format`
<span class="type">string</span></td>
<td>The format for the object.
<p class="context">Context: `view`, `edit`</p>
One of: `standard`</td>
</tr>
<tr id="schema-meta">
<td>`meta`
<span class="type">object</span></td>
<td>Meta fields.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-sticky">
<td>`sticky`
<span class="type">boolean</span></td>
<td>Whether or not the object should be treated as sticky.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-template">
<td>`template`
<span class="type">string</span></td>
<td>The theme file to use to display the object.
<p class="context">Context: `view`, `edit`</p>
One of: ``</td>
</tr>
<tr id="schema-categories">
<td>`categories`
<span class="type">array</span></td>
<td>The terms assigned to the object in the category taxonomy.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-tags">
<td>`tags`
<span class="type">array</span></td>
<td>The terms assigned to the object in the post_tag taxonomy.
<p class="context">Context: `view`, `edit`</p>
</td>
</tr>
<tr id="schema-liveblog_likes">
<td>`liveblog_likes`
<span class="type">integer</span></td>
<td>The number of Liveblog Likes the post has.
<p class="context">Context: `view`, `edit`, `embed`</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Example Request
`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/posts`

</div>
</section><section class="route">
<div class="primary">
## List Posts
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
<td>`after`</td>
<td>Limit response to posts published after a given date ([details](https://core.trac.wordpress.org/ticket/41032)).</td>
</tr>
<tr>
<td>`author`</td>
<td>Limit result set to posts assigned to specific authors.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`author_exclude`</td>
<td>Ensure result set excludes posts assigned to specific authors.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`before`</td>
<td>Limit response to posts published before a given date ([details](https://core.trac.wordpress.org/ticket/41032)).</td>
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
<p class="default">Default: `desc`</p>
One of: `asc`, `desc`</td>
</tr>
<tr>
<td>`orderby`</td>
<td>Sort collection by object attribute.
<p class="default">Default: `date`</p>
One of: `date`, `relevance`, `id`, `include`, `title`, `slug`</td>
</tr>
<tr>
<td>`slug`</td>
<td>Limit result set to posts with one or more specific slugs.</td>
</tr>
<tr>
<td>`status`</td>
<td>Limit result set to posts assigned one or more statuses.
<p class="default">Default: `publish`</p>
</td>
</tr>
<tr>
<td>`categories`</td>
<td>Limit result set to all items that have the specified term assigned in the categories taxonomy.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`categories_exclude`</td>
<td>Limit result set to all items except those that have the specified term assigned in the categories taxonomy.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`tags`</td>
<td>Limit result set to all items that have the specified term assigned in the tags taxonomy.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`tags_exclude`</td>
<td>Limit result set to all items except those that have the specified term assigned in the tags taxonomy.
<p class="default">Default: ``</p>
</td>
</tr>
<tr>
<td>`sticky`</td>
<td>Limit result set to items that are sticky.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/posts`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/posts`

</div>
</section><section class="route">
<div class="primary">
## Retrieve a Post
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
<td>`password`</td>
<td>The password for the post if it is password protected.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/posts/&lt;id&gt;`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/posts/&lt;id&gt;`

</div>
</section><section class="route">
<div class="primary">
## Create a Post
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[date](#schema-date)`</td>
<td>The date the object was published, in the site's timezone.</td>
</tr>
<tr>
<td>`[date_gmt](#schema-date_gmt)`</td>
<td>The date the object was published, as GMT.</td>
</tr>
<tr>
<td>`[slug](#schema-slug)`</td>
<td>An alphanumeric identifier for the object unique to its type.</td>
</tr>
<tr>
<td>`[status](#schema-status)`</td>
<td>A named status for the object.

One of: `publish`, `future`, `draft`, `pending`, `private`</td>
</tr>
<tr>
<td>`[password](#schema-password)`</td>
<td>A password to protect access to the content and excerpt.</td>
</tr>
<tr>
<td>`[title](#schema-title)`</td>
<td>The title for the object.</td>
</tr>
<tr>
<td>`[content](#schema-content)`</td>
<td>The content for the object.</td>
</tr>
<tr>
<td>`[author](#schema-author)`</td>
<td>The ID for the author of the object.</td>
</tr>
<tr>
<td>`[excerpt](#schema-excerpt)`</td>
<td>The excerpt for the object.</td>
</tr>
<tr>
<td>`[featured_media](#schema-featured_media)`</td>
<td>The ID of the featured media for the object.</td>
</tr>
<tr>
<td>`[comment_status](#schema-comment_status)`</td>
<td>Whether or not comments are open on the object.

One of: `open`, `closed`</td>
</tr>
<tr>
<td>`[ping_status](#schema-ping_status)`</td>
<td>Whether or not the object can be pinged.

One of: `open`, `closed`</td>
</tr>
<tr>
<td>`[format](#schema-format)`</td>
<td>The format for the object.

One of: `standard`</td>
</tr>
<tr>
<td>`[meta](#schema-meta)`</td>
<td>Meta fields.</td>
</tr>
<tr>
<td>`[sticky](#schema-sticky)`</td>
<td>Whether or not the object should be treated as sticky.</td>
</tr>
<tr>
<td>`[template](#schema-template)`</td>
<td>The theme file to use to display the object.

One of: ``</td>
</tr>
<tr>
<td>`[categories](#schema-categories)`</td>
<td>The terms assigned to the object in the category taxonomy.</td>
</tr>
<tr>
<td>`[tags](#schema-tags)`</td>
<td>The terms assigned to the object in the post_tag taxonomy.</td>
</tr>
<tr>
<td>`[liveblog_likes](#schema-liveblog_likes)`</td>
<td>The number of Liveblog Likes the post has.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`POST /wp/v2/posts`

</div>
</section><section class="route">
<div class="primary">
## Update a Post
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[date](#schema-date)`</td>
<td>The date the object was published, in the site's timezone.</td>
</tr>
<tr>
<td>`[date_gmt](#schema-date_gmt)`</td>
<td>The date the object was published, as GMT.</td>
</tr>
<tr>
<td>`[slug](#schema-slug)`</td>
<td>An alphanumeric identifier for the object unique to its type.</td>
</tr>
<tr>
<td>`[status](#schema-status)`</td>
<td>A named status for the object.

One of: `publish`, `future`, `draft`, `pending`, `private`</td>
</tr>
<tr>
<td>`[password](#schema-password)`</td>
<td>A password to protect access to the content and excerpt.</td>
</tr>
<tr>
<td>`[title](#schema-title)`</td>
<td>The title for the object.</td>
</tr>
<tr>
<td>`[content](#schema-content)`</td>
<td>The content for the object.</td>
</tr>
<tr>
<td>`[author](#schema-author)`</td>
<td>The ID for the author of the object.</td>
</tr>
<tr>
<td>`[excerpt](#schema-excerpt)`</td>
<td>The excerpt for the object.</td>
</tr>
<tr>
<td>`[featured_media](#schema-featured_media)`</td>
<td>The ID of the featured media for the object.</td>
</tr>
<tr>
<td>`[comment_status](#schema-comment_status)`</td>
<td>Whether or not comments are open on the object.

One of: `open`, `closed`</td>
</tr>
<tr>
<td>`[ping_status](#schema-ping_status)`</td>
<td>Whether or not the object can be pinged.

One of: `open`, `closed`</td>
</tr>
<tr>
<td>`[format](#schema-format)`</td>
<td>The format for the object.

One of: `standard`</td>
</tr>
<tr>
<td>`[meta](#schema-meta)`</td>
<td>Meta fields.</td>
</tr>
<tr>
<td>`[sticky](#schema-sticky)`</td>
<td>Whether or not the object should be treated as sticky.</td>
</tr>
<tr>
<td>`[template](#schema-template)`</td>
<td>The theme file to use to display the object.

One of: ``</td>
</tr>
<tr>
<td>`[categories](#schema-categories)`</td>
<td>The terms assigned to the object in the category taxonomy.</td>
</tr>
<tr>
<td>`[tags](#schema-tags)`</td>
<td>The terms assigned to the object in the post_tag taxonomy.</td>
</tr>
<tr>
<td>`[liveblog_likes](#schema-liveblog_likes)`</td>
<td>The number of Liveblog Likes the post has.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`POST /wp/v2/posts/&lt;id&gt;`
### Example Request
`$ curl -X POST http://demo.wp-api.org/wp-json/wp/v2/posts/&lt;id&gt; -d '{"title":"My New Title"}'`

</div>
</section><section class="route">
<div class="primary">
## Delete a Post
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`force`</td>
<td>Whether to bypass trash and force deletion.</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`DELETE /wp/v2/posts/&lt;id&gt;`
### Example Request
`$ curl -X DELETE http://demo.wp-api.org/wp-json/wp/v2/posts/&lt;id&gt;`

</div>
</section>
