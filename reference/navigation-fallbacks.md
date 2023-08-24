---
---

# Navigation Fallbacks

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a navigation fallback record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code>
			</td>
			<td>
				<p>The unique identifier for the Navigation Menu.</p>
				<p class="type">
					JSON data type: integer				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Navigation Fallback</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp-block-editor/v1/navigation-fallback</code>

		<p>Query this endpoint to retrieve a specific navigation fallback record.</p>

		<code>$ curl https://example.com/wp-json/wp-block-editor/v1/navigation-fallback</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
</div>
