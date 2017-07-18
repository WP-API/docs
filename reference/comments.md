# Comments

<section class="route">
<div class="primary">
## Schema
The schema defines all the fields that exist for a comment object.
<table class="attributes">
<tbody>
<tr id="schema-id">
<td>`id`
<span class="type">
integer
</span></td>
<td>Unique identifier for the object.

*Read only*

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-author">
<td>`author`
<span class="type">
integer
</span></td>
<td>The id of the user object, if author was a user.

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-author_email">
<td>`author_email`
<span class="type"><span class="type">
string,
email</span></span>&nbsp;</td>
<td>Email address for the object author.

Context: `edit`</td>
</tr>
<tr id="schema-author_ip">
<td>`author_ip`
<span class="type"><span class="type">
string,
ipv4</span></span>&nbsp;</td>
<td>IP address for the object author.

Context: `edit`</td>
</tr>
<tr id="schema-author_name">
<td>`author_name`
<span class="type">
string
</span></td>
<td>Display name for the object author.

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-author_url">
<td>`author_url`
<span class="type"><span class="type">
string,
uri</span></span>&nbsp;</td>
<td>URL for the object author.

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-author_user_agent">
<td>`author_user_agent`
<span class="type">
string
</span></td>
<td>User agent for the object author.

*Read only*

Context: `edit`</td>
</tr>
<tr id="schema-content">
<td>`content`
<span class="type">
object
</span></td>
<td>The content for the object.

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-date">
<td>`date`
<span class="type"><span class="type">
string,
datetime ([details](https://core.trac.wordpress.org/ticket/41032))</span></span>&nbsp;</td>
<td>The date the object was published.

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-date_gmt">
<td>`date_gmt`
<span class="type"><span class="type">
string,
datetime ([details](https://core.trac.wordpress.org/ticket/41032))</span></span>

&nbsp;</td>
<td>The date the object was published as GMT.

Context: `view`, `edit`</td>
</tr>
<tr id="schema-karma">
<td>`karma`
<span class="type">
integer
</span></td>
<td>Karma for the object.

Context: `edit`</td>
</tr>
<tr id="schema-link">
<td>`link`
<span class="type"><span class="type">
string,
uri</span></span>&nbsp;</td>
<td>URL to the object.

*Read only*

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-parent">
<td>`parent`
<span class="type">
integer
</span></td>
<td>The id for the parent of the object.

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-post">
<td>`post`
<span class="type">
integer
</span></td>
<td>The id of the associated post object.

Context: `view`, `edit`</td>
</tr>
<tr id="schema-status">
<td>`status`
<span class="type">
string
</span></td>
<td>State of the object.

Context: `view`, `edit`</td>
</tr>
<tr id="schema-type">
<td>`type`
<span class="type">
string
</span></td>
<td>Type of Comment for the object.

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-author_avatar_urls">
<td>`author_avatar_urls`
<span class="type">
object
</span></td>
<td>Avatar URLs for the object author.

*Read only*

Context: `view`, `edit`, `embed`</td>
</tr>
<tr id="schema-meta">
<td>`meta`
<span class="type">
object
</span></td>
<td>Meta fields.

Context: `view`, `edit`</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Example Request
`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/comments`

</div>
</section><section class="route">
<div class="primary">
## List Comments
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`context`</td>
<td>Scope under which the request is made; determines fields present in response.

Default: `view`

One of: `view`, `embed`, `edit`</td>
</tr>
<tr>
<td>`page`</td>
<td>Current page of the collection.

Default: `1`</td>
</tr>
<tr>
<td>`per_page`</td>
<td>Maximum number of items to be returned in result set.

Default: `10`</td>
</tr>
<tr>
<td>`search`</td>
<td>Limit results to those matching a string.</td>
</tr>
<tr>
<td>`after`</td>
<td>Limit response to resources published after a given date ([details](https://core.trac.wordpress.org/ticket/41032)).</td>
</tr>
<tr>
<td>`author`</td>
<td>Limit result set to comments assigned to specific user ids. Requires authorization.</td>
</tr>
<tr>
<td>`author_exclude`</td>
<td>Ensure result set excludes comments assigned to specific user ids. Requires authorization.</td>
</tr>
<tr>
<td>`author_email`</td>
<td>Limit result set to that from a specific author email. Requires authorization.</td>
</tr>
<tr>
<td>`before`</td>
<td>Limit response to resources published before a given date ([details](https://core.trac.wordpress.org/ticket/41032)).</td>
</tr>
<tr>
<td>`exclude`</td>
<td>Ensure result set excludes specific ids.

Default: ``</td>
</tr>
<tr>
<td>`include`</td>
<td>Limit result set to specific ids.

Default: ``</td>
</tr>
<tr>
<td>`karma`</td>
<td>Limit result set to that of a particular comment karma. Requires authorization.</td>
</tr>
<tr>
<td>`offset`</td>
<td>Offset the result set by a specific number of comments.</td>
</tr>
<tr>
<td>`order`</td>
<td>Order sort attribute ascending or descending.

Default: `desc`

One of: `asc`, `desc`</td>
</tr>
<tr>
<td>`orderby`</td>
<td>Sort collection by object attribute.

Default: `date_gmt`

One of: `date`, `date_gmt`, `id`, `include`, `post`, `parent`, `type`</td>
</tr>
<tr>
<td>`parent`</td>
<td>Limit result set to resources of specific parent ids.

Default: ``</td>
</tr>
<tr>
<td>`parent_exclude`</td>
<td>Ensure result set excludes specific parent ids.

Default: ``</td>
</tr>
<tr>
<td>`post`</td>
<td>Limit result set to resources assigned to specific post ids.

Default: ``</td>
</tr>
<tr>
<td>`status`</td>
<td>Limit result set to comments assigned a specific status. Requires authorization.

Default: `approve`</td>
</tr>
<tr>
<td>`type`</td>
<td>Limit result set to comments assigned a specific type. Requires authorization.

Default: `comment`</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/comments`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/comments`

</div>
</section><section class="route">
<div class="primary">
## Retrieve a Comment
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`context`</td>
<td>Scope under which the request is made; determines fields present in response.

Default: `view`

One of: `view`, `embed`, `edit`</td>
</tr>
</tbody>
</table>
</div>
<div class="secondary">
### Definition
`GET /wp/v2/comments/&lt;id&gt;`
### Example Request
`$ curl http://demo.wp-api.org/wp-json/wp/v2/comments/&lt;id&gt;`

</div>
</section><section class="route">
<div class="primary">
## Create a Comment
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[author](#schema-author)`</td>
<td>The id of the user object, if author was a user.</td>
</tr>
<tr>
<td>`[author_email](#schema-author_email)`</td>
<td>Email address for the object author.</td>
</tr>
<tr>
<td>`[author_ip](#schema-author_ip)`</td>
<td>IP address for the object author.

Default: `127.0.0.1`</td>
</tr>
<tr>
<td>`[author_name](#schema-author_name)`</td>
<td>Display name for the object author.</td>
</tr>
<tr>
<td>`[author_url](#schema-author_url)`</td>
<td>URL for the object author.</td>
</tr>
<tr>
<td>`[content](#schema-content)`</td>
<td>The content for the object.</td>
</tr>
<tr>
<td>`[date](#schema-date)`</td>
<td>The date the object was published.</td>
</tr>
<tr>
<td>`[date_gmt](#schema-date_gmt)`</td>
<td>The date the object was published as GMT.</td>
</tr>
<tr>
<td>`[karma](#schema-karma)`</td>
<td>Karma for the object.</td>
</tr>
<tr>
<td>`[parent](#schema-parent)`</td>
<td>The id for the parent of the object.

Default: `0`</td>
</tr>
<tr>
<td>`[post](#schema-post)`</td>
<td>The id of the associated post object.

Default: `0`</td>
</tr>
<tr>
<td>`[status](#schema-status)`</td>
<td>State of the object.</td>
</tr>
<tr>
<td>`[type](#schema-type)`</td>
<td>Type of Comment for the object.

Default: `comment`</td>
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
`POST /wp/v2/comments`

</div>
</section><section class="route">
<div class="primary">
## Update a Comment
### Arguments
<table class="arguments">
<tbody>
<tr>
<td>`[author](#schema-author)`</td>
<td>The id of the user object, if author was a user.</td>
</tr>
<tr>
<td>`[author_email](#schema-author_email)`</td>
<td>Email address for the object author.</td>
</tr>
<tr>
<td>`[author_ip](#schema-author_ip)`</td>
<td>IP address for the object author.</td>
</tr>
<tr>
<td>`[author_name](#schema-author_name)`</td>
<td>Display name for the object author.</td>
</tr>
<tr>
<td>`[author_url](#schema-author_url)`</td>
<td>URL for the object author.</td>
</tr>
<tr>
<td>`[content](#schema-content)`</td>
<td>The content for the object.</td>
</tr>
<tr>
<td>`[date](#schema-date)`</td>
<td>The date the object was published.</td>
</tr>
<tr>
<td>`[date_gmt](#schema-date_gmt)`</td>
<td>The date the object was published as GMT.</td>
</tr>
<tr>
<td>`[karma](#schema-karma)`</td>
<td>Karma for the object.</td>
</tr>
<tr>
<td>`[parent](#schema-parent)`</td>
<td>The id for the parent of the object.</td>
</tr>
<tr>
<td>`[post](#schema-post)`</td>
<td>The id of the associated post object.</td>
</tr>
<tr>
<td>`[status](#schema-status)`</td>
<td>State of the object.</td>
</tr>
<tr>
<td>`[type](#schema-type)`</td>
<td>Type of Comment for the object.</td>
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
`POST /wp/v2/comments/&lt;id&gt;`
### Example Request
``

</div>
</section><section class="route">
<div class="primary">
## Delete a Comment
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
`DELETE /wp/v2/comments/&lt;id&gt;`
### Example Request
`$ curl -X DELETE http://demo.wp-api.org/wp-json/wp/v2/comments/&lt;id&gt;`

</div>
</section>
