# Post Statuses

<section class="route">
	<div class="primary">
		## Schema
<p>The schema defines all the fields that exist for a status object.</p>
<table class="attributes">
	
		<tbody><tr id="schema-name">
			<td>
				`name`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>The title for the resource.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `embed`, `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-private">
			<td>
				`private`<br>
				<span class="type">
					boolean
				</span>
			</td>
			<td>
				<p>Whether posts with this resource should be private.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-protected">
			<td>
				`protected`<br>
				<span class="type">
					boolean
				</span>
			</td>
			<td>
				<p>Whether posts with this resource should be protected.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-public">
			<td>
				`public`<br>
				<span class="type">
					boolean
				</span>
			</td>
			<td>
				<p>Whether posts of this resource should be shown in the front end of the site.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-queryable">
			<td>
				`queryable`<br>
				<span class="type">
					boolean
				</span>
			</td>
			<td>
				<p>Whether posts with this resource should be publicly-queryable.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-show_in_list">
			<td>
				`show_in_list`<br>
				<span class="type">
					boolean
				</span>
			</td>
			<td>
				<p>Whether to include posts in the edit listing for their post type.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `edit`</p>
				
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
				<p>An alphanumeric identifier for the resource.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `embed`, `view`, `edit`</p>
				
			</td>
		</tr>
	
</tbody></table>

	</div>
	<div class="secondary">
		### Example Request

		`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/statuses`
	</div>
</section>
<section class="route">
	<div class="primary">
		## List Statuss
		
		
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
		
	</tbody></table>


	</div>
	<div class="secondary">
		### Definition

		`GET /wp/v2/statuses`

		### Example Request

		`$ curl http://demo.wp-api.org/wp-json/wp/v2/statuses`
	</div>
</section>
<section class="route">
	<div class="primary">
		## Retrieve a Status
		
		
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
		
	</tbody></table>


	</div>
	<div class="secondary">
		### Definition

		`GET /wp/v2/statuses/&lt;status&gt;`

		### Example Request

		`$ curl http://demo.wp-api.org/wp-json/wp/v2/statuses/&lt;status&gt;`
	</div>
</section>
