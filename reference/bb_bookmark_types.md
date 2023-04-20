---
---

# Bb_Bookmark_Types

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bb_bookmark_types record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The type of the bookmark.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-label">
			<td>
				<code>label</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Label of bookmark type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-count">
			<td>
				<code>count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Count of the bookmark items.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bb_Bookmark_Types</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/bookmark-types</code>

		<p>Query this endpoint to retrieve a specific bb_bookmark_types record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/bookmark-types</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bb_Bookmark_Types</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/bookmark-types/&lt;type&gt;</code>

		<p>Query this endpoint to retrieve a specific bb_bookmark_types record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/bookmark-types/&lt;type&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>A unique type for the bookmark.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
</div>
