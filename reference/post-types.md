# Post Types

<section class="route">
	<div class="primary">
		## Schema
<p>The schema defines all the fields that exist for a type object.</p>
<table class="attributes">
	
		<tbody><tr id="schema-capabilities">
			<td>
				`capabilities`<br>
				<span class="type">
					array
				</span>
			</td>
			<td>
				<p>All capabilities used by the resource.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-description">
			<td>
				`description`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>A human-readable description of the resource.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-hierarchical">
			<td>
				`hierarchical`<br>
				<span class="type">
					boolean
				</span>
			</td>
			<td>
				<p>Whether or not the resource should have children.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-labels">
			<td>
				`labels`<br>
				<span class="type">
					object
				</span>
			</td>
			<td>
				<p>Human-readable labels for the resource for various contexts.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `edit`</p>
				
			</td>
		</tr>
	
		<tr id="schema-name">
			<td>
				`name`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>The title for the resource.</p>
				
					<p>*Read only*</p>
				
				<p>Context: `view`, `edit`, `embed`</p>
				
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
				
				<p>Context: `view`, `edit`, `embed`</p>
				
			</td>
		</tr>
	
</tbody></table>

	</div>
	<div class="secondary">
		### Example Request

		`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/types`
	</div>
</section>
<section class="route">
	<div class="primary">
		## List Types
		
		
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

		`GET /wp/v2/types`

		### Example Request

		`$ curl http://demo.wp-api.org/wp-json/wp/v2/types`
	</div>
</section>
<section class="route">
	<div class="primary">
		## Retrieve a Type
		
		
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

		`GET /wp/v2/types/&lt;type&gt;`

		### Example Request

		`$ curl http://demo.wp-api.org/wp-json/wp/v2/types/&lt;type&gt;`
	</div>
</section>
