# Pages

<section class="route">
	<div class="primary">
		## Schema
<p>The schema defines all the fields that exist for a page object.</p>
<table class="attributes">
	
		<tbody><tr id="schema-date">
			<td>
				`date`<br>
				<span class="type">
					string, 
							datetime (ISO8601)
						
				</span>
			</td>
			<td>
				<p>The date the object was published, in the site's timezone.</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-date_gmt">
			<td>
				`date_gmt`<br>
				<span class="type">
					string, 
							datetime (ISO8601)
						
				</span>
			</td>
			<td>
				<p>The date the object was published, as GMT.</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-guid">
			<td>
				`guid`<br>
				<span class="type">
					object
				</span>
			</td>
			<td>
				<p>The globally unique identifier for the object.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-id">
			<td>
				`id`<br>
				<span class="type">
					integer
				</span>
			</td>
			<td>
				<p>Unique identifier for the object.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-link">
			<td>
				`link`<br>
				<span class="type">
					string, 
							uri
						
				</span>
			</td>
			<td>
				<p>URL to the object.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-modified">
			<td>
				`modified`<br>
				<span class="type">
					string, 
							datetime (ISO8601)
						
				</span>
			</td>
			<td>
				<p>The date the object was last modified, in the site's timezone.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-modified_gmt">
			<td>
				`modified_gmt`<br>
				<span class="type">
					string, 
							datetime (ISO8601)
						
				</span>
			</td>
			<td>
				<p>The date the object was last modified, as GMT.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-slug">
			<td>
				`slug`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>An alphanumeric identifier for the object unique to its type.</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-status">
			<td>
				`status`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>A named status for the object.</p>
				
				<p>Context: `edit`</p>
				
					<p>One of: `publish`, `future`, `draft`, `pending`, `private`</p>
				
			</td>
		</tr>
	
		<tr id="schema-type">
			<td>
				`type`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>Type of Post for the object.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-parent">
			<td>
				`parent`<br>
				<span class="type">
					integer
				</span>
			</td>
			<td>
				<p>The id for the parent of the object.</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-title">
			<td>
				`title`<br>
				<span class="type">
					object
				</span>
			</td>
			<td>
				<p>The title for the object.</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-content">
			<td>
				`content`<br>
				<span class="type">
					object
				</span>
			</td>
			<td>
				<p>The content for the object.</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-author">
			<td>
				`author`<br>
				<span class="type">
					integer
				</span>
			</td>
			<td>
				<p>The id for the author of the object.</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-excerpt">
			<td>
				`excerpt`<br>
				<span class="type">
					object
				</span>
			</td>
			<td>
				<p>The excerpt for the object.</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-featured_media">
			<td>
				`featured_media`<br>
				<span class="type">
					integer
				</span>
			</td>
			<td>
				<p>The id of the featured media for the object.</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-comment_status">
			<td>
				`comment_status`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>Whether or not comments are open on the object.</p>
				
				<p>Context: `view`, `edit`</p>
				
					<p>One of: `open`, `closed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-ping_status">
			<td>
				`ping_status`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>Whether or not the object can be pinged.</p>
				
				<p>Context: `view`, `edit`</p>
				
					<p>One of: `open`, `closed`</p>
				
			</td>
		</tr>
	
		<tr id="schema-menu_order">
			<td>
				`menu_order`<br>
				<span class="type">
					integer
				</span>
			</td>
			<td>
				<p>The order of the object in relation to other object of its type.</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-meta">
			<td>
				`meta`<br>
				<span class="type">
					object
				</span>
			</td>
			<td>
				<p>Meta fields.</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-template">
			<td>
				`template`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>The theme file to use to display the object.</p>
				
				<p>Context: `view`, `edit`</p>
				
					<p>One of: ``</p>
				
			</td>
		</tr>
	
</tbody></table>

	</div>
	<div class="secondary">
		### Example Request

		`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/pages`
	</div>
</section>
<section class="route">
	<div class="primary">
		## List Pages
		
		
	### Arguments
	<table class="arguments">
		
			<tbody><tr>
				<td>
					
						`context`<br>
					
				</td>
				<td>
					
						<p>Scope under which the request is made; determines fields present in response.</p>
					
					
					
						<p>
							Default: `view`
						</p>
					
					
						<p>One of: `view`, `embed`, `edit`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`page`<br>
					
				</td>
				<td>
					
						<p>Current page of the collection.</p>
					
					
					
						<p>
							Default: `1`
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`per_page`<br>
					
				</td>
				<td>
					
						<p>Maximum number of items to be returned in result set.</p>
					
					
					
						<p>
							Default: `10`
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`search`<br>
					
				</td>
				<td>
					
						<p>Limit results to those matching a string.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`after`<br>
					
				</td>
				<td>
					
						<p>Limit response to resources published after a given ISO8601 compliant date.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`author`<br>
					
				</td>
				<td>
					
						<p>Limit result set to posts assigned to specific authors.</p>
					
					
					
						<p>
							Default: ``
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`author_exclude`<br>
					
				</td>
				<td>
					
						<p>Ensure result set excludes posts assigned to specific authors.</p>
					
					
					
						<p>
							Default: ``
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`before`<br>
					
				</td>
				<td>
					
						<p>Limit response to resources published before a given ISO8601 compliant date.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`exclude`<br>
					
				</td>
				<td>
					
						<p>Ensure result set excludes specific ids.</p>
					
					
					
						<p>
							Default: ``
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`include`<br>
					
				</td>
				<td>
					
						<p>Limit result set to specific ids.</p>
					
					
					
						<p>
							Default: ``
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`menu_order`<br>
					
				</td>
				<td>
					
						<p>Limit result set to resources with a specific menu_order value.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`offset`<br>
					
				</td>
				<td>
					
						<p>Offset the result set by a specific number of items.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`order`<br>
					
				</td>
				<td>
					
						<p>Order sort attribute ascending or descending.</p>
					
					
					
						<p>
							Default: `desc`
						</p>
					
					
						<p>One of: `asc`, `desc`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`orderby`<br>
					
				</td>
				<td>
					
						<p>Sort collection by object attribute.</p>
					
					
					
						<p>
							Default: `date`
						</p>
					
					
						<p>One of: `date`, `relevance`, `id`, `include`, `title`, `slug`, `menu_order`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`parent`<br>
					
				</td>
				<td>
					
						<p>Limit result set to those of particular parent ids.</p>
					
					
					
						<p>
							Default: ``
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`parent_exclude`<br>
					
				</td>
				<td>
					
						<p>Limit result set to all items except those of a particular parent id.</p>
					
					
					
						<p>
							Default: ``
						</p>
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`slug`<br>
					
				</td>
				<td>
					
						<p>Limit result set to posts with a specific slug.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`status`<br>
					
				</td>
				<td>
					
						<p>Limit result set to posts assigned a specific status; can be comma-delimited list of status types.</p>
					
					
					
						<p>
							Default: `publish`
						</p>
					
					
						<p>One of: `publish`, `future`, `draft`, `pending`, `private`, `trash`, `auto-draft`, `inherit`, `any`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`filter`<br>
					
				</td>
				<td>
					
						<p>Use WP Query arguments to modify the response; private query vars require appropriate authorization.</p>
					
					
					
					
				</td>
			</tr>
		
	</tbody></table>


	</div>
	<div class="secondary">
		### Definition

		`GET /wp/v2/pages`

		### Example Request

		`$ curl http://demo.wp-api.org/wp-json/wp/v2/pages`
	</div>
</section>
<section class="route">
	<div class="primary">
		## Retrieve a Page
		
		
	### Arguments
	<table class="arguments">
		
			<tbody><tr>
				<td>
					
						`context`<br>
					
				</td>
				<td>
					
						<p>Scope under which the request is made; determines fields present in response.</p>
					
					
					
						<p>
							Default: `view`
						</p>
					
					
						<p>One of: `view`, `embed`, `edit`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`password`<br>
					
				</td>
				<td>
					
						<p>The password for the post if it is password protected.</p>
					
					
					
					
				</td>
			</tr>
		
	</tbody></table>


	</div>
	<div class="secondary">
		### Definition

		`GET /wp/v2/pages/&lt;id&gt;`

		### Example Request

		`$ curl http://demo.wp-api.org/wp-json/wp/v2/pages/&lt;id&gt;`
	</div>
</section>
<section class="route">
	<div class="primary">
		## Create a Page
		
		
	### Arguments
	<table class="arguments">
		
			<tbody><tr>
				<td>
					
						`[date](#schema-date)`<br>
					
				</td>
				<td>
					
						<p>The date the object was published, in the site's timezone.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[date_gmt](#schema-date_gmt)`<br>
					
				</td>
				<td>
					
						<p>The date the object was published, as GMT.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[slug](#schema-slug)`<br>
					
				</td>
				<td>
					
						<p>An alphanumeric identifier for the object unique to its type.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[status](#schema-status)`<br>
					
				</td>
				<td>
					
						<p>A named status for the object.</p>
					
					
					
					
						<p>One of: `publish`, `future`, `draft`, `pending`, `private`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[parent](#schema-parent)`<br>
					
				</td>
				<td>
					
						<p>The id for the parent of the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[title](#schema-title)`<br>
					
				</td>
				<td>
					
						<p>The title for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[content](#schema-content)`<br>
					
				</td>
				<td>
					
						<p>The content for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[author](#schema-author)`<br>
					
				</td>
				<td>
					
						<p>The id for the author of the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[excerpt](#schema-excerpt)`<br>
					
				</td>
				<td>
					
						<p>The excerpt for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[featured_media](#schema-featured_media)`<br>
					
				</td>
				<td>
					
						<p>The id of the featured media for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[comment_status](#schema-comment_status)`<br>
					
				</td>
				<td>
					
						<p>Whether or not comments are open on the object.</p>
					
					
					
					
						<p>One of: `open`, `closed`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[ping_status](#schema-ping_status)`<br>
					
				</td>
				<td>
					
						<p>Whether or not the object can be pinged.</p>
					
					
					
					
						<p>One of: `open`, `closed`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[menu_order](#schema-menu_order)`<br>
					
				</td>
				<td>
					
						<p>The order of the object in relation to other object of its type.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[meta](#schema-meta)`<br>
					
				</td>
				<td>
					
						<p>Meta fields.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[template](#schema-template)`<br>
					
				</td>
				<td>
					
						<p>The theme file to use to display the object.</p>
					
					
					
					
						<p>One of: ``</p>
					
				</td>
			</tr>
		
	</tbody></table>


	</div>
	<div class="secondary">
		### Definition

		`POST /wp/v2/pages`
	</div>
</section>
<section class="route">
	<div class="primary">
		## Update a Page
		
		
	### Arguments
	<table class="arguments">
		
			<tbody><tr>
				<td>
					
						`[date](#schema-date)`<br>
					
				</td>
				<td>
					
						<p>The date the object was published, in the site's timezone.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[date_gmt](#schema-date_gmt)`<br>
					
				</td>
				<td>
					
						<p>The date the object was published, as GMT.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[slug](#schema-slug)`<br>
					
				</td>
				<td>
					
						<p>An alphanumeric identifier for the object unique to its type.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[status](#schema-status)`<br>
					
				</td>
				<td>
					
						<p>A named status for the object.</p>
					
					
					
					
						<p>One of: `publish`, `future`, `draft`, `pending`, `private`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[parent](#schema-parent)`<br>
					
				</td>
				<td>
					
						<p>The id for the parent of the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[title](#schema-title)`<br>
					
				</td>
				<td>
					
						<p>The title for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[content](#schema-content)`<br>
					
				</td>
				<td>
					
						<p>The content for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[author](#schema-author)`<br>
					
				</td>
				<td>
					
						<p>The id for the author of the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[excerpt](#schema-excerpt)`<br>
					
				</td>
				<td>
					
						<p>The excerpt for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[featured_media](#schema-featured_media)`<br>
					
				</td>
				<td>
					
						<p>The id of the featured media for the object.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[comment_status](#schema-comment_status)`<br>
					
				</td>
				<td>
					
						<p>Whether or not comments are open on the object.</p>
					
					
					
					
						<p>One of: `open`, `closed`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[ping_status](#schema-ping_status)`<br>
					
				</td>
				<td>
					
						<p>Whether or not the object can be pinged.</p>
					
					
					
					
						<p>One of: `open`, `closed`</p>
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[menu_order](#schema-menu_order)`<br>
					
				</td>
				<td>
					
						<p>The order of the object in relation to other object of its type.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[meta](#schema-meta)`<br>
					
				</td>
				<td>
					
						<p>Meta fields.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[template](#schema-template)`<br>
					
				</td>
				<td>
					
						<p>The theme file to use to display the object.</p>
					
					
					
					
						<p>One of: ``</p>
					
				</td>
			</tr>
		
	</tbody></table>


	</div>
	<div class="secondary">
		### Definition

		`POST /wp/v2/pages/&lt;id&gt;`

		### Example Request
		

		``
	</div>
</section>
<section class="route">
	<div class="primary">
		## Delete a Page
		
		
	### Arguments
	<table class="arguments">
		
			<tbody><tr>
				<td>
					
						`force`<br>
					
				</td>
				<td>
					
						<p>Whether to bypass trash and force deletion.</p>
					
					
					
					
				</td>
			</tr>
		
	</tbody></table>


	</div>
	<div class="secondary">
		### Definition

		`DELETE /wp/v2/pages/&lt;id&gt;`

		### Example Request

		`$ curl -X DELETE http://demo.wp-api.org/wp-json/wp/v2/pages/&lt;id&gt;`
	</div>
</section>
