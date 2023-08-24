---
---

# Block Patterns

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a block pattern record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-name">
			<td>
				<code>name</code>
			</td>
			<td>
				<p>The pattern name.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code>
			</td>
			<td>
				<p>The pattern title, in human readable format.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-content">
			<td>
				<code>content</code>
			</td>
			<td>
				<p>The pattern content.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code>
			</td>
			<td>
				<p>The pattern detailed description.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-viewport_width">
			<td>
				<code>viewport_width</code>
			</td>
			<td>
				<p>The pattern viewport width for inserter preview.</p>
				<p class="type">
					JSON data type: number				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-inserter">
			<td>
				<code>inserter</code>
			</td>
			<td>
				<p>Determines whether the pattern is visible in inserter.</p>
				<p class="type">
					JSON data type: boolean				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-categories">
			<td>
				<code>categories</code>
			</td>
			<td>
				<p>The pattern category slugs.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-keywords">
			<td>
				<code>keywords</code>
			</td>
			<td>
				<p>The pattern keywords.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-block_types">
			<td>
				<code>block_types</code>
			</td>
			<td>
				<p>Block types that the pattern is intended to be used with.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-post_types">
			<td>
				<code>post_types</code>
			</td>
			<td>
				<p>An array of post types that the pattern is restricted to be used with.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-template_types">
			<td>
				<code>template_types</code>
			</td>
			<td>
				<p>An array of template types where the pattern fits.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-source">
			<td>
				<code>source</code>
			</td>
			<td>
				<p>Where the pattern comes from e.g. core</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
									<p>One of: <code>core</code>, <code>plugin</code>, <code>theme</code>, <code>pattern-directory/core</code>, <code>pattern-directory/theme</code>, <code>pattern-directory/featured</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Block Pattern</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/block-patterns/patterns</code>

		<p>Query this endpoint to retrieve a specific block pattern record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/block-patterns/patterns</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
</div>
