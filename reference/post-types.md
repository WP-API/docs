---
---

# Types

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a type record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-capabilities">
			<td>
				<code>capabilities</code>
			</td>
			<td>
				<p>All capabilities used by the post type.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code>
			</td>
			<td>
				<p>A human-readable description of the post type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-hierarchical">
			<td>
				<code>hierarchical</code>
			</td>
			<td>
				<p>Whether or not the post type should have children.</p>
				<p class="type">
					JSON data type: boolean				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-viewable">
			<td>
				<code>viewable</code>
			</td>
			<td>
				<p>Whether or not the post type can be viewed.</p>
				<p class="type">
					JSON data type: boolean				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-labels">
			<td>
				<code>labels</code>
			</td>
			<td>
				<p>Human-readable labels for the post type for various contexts.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code>
			</td>
			<td>
				<p>The title for the post type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code>
			</td>
			<td>
				<p>An alphanumeric identifier for the post type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-supports">
			<td>
				<code>supports</code>
			</td>
			<td>
				<p>All features, supported by the post type.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-has_archive">
			<td>
				<code>has_archive</code>
			</td>
			<td>
				<p>If the value is a string, the value will be used as the archive slug. If the value is false the post type has no archive.</p>
				<p class="type">
					JSON data type: string or boolean				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-taxonomies">
			<td>
				<code>taxonomies</code>
			</td>
			<td>
				<p>Taxonomies associated with post type.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-rest_base">
			<td>
				<code>rest_base</code>
			</td>
			<td>
				<p>REST base route for the post type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-rest_namespace">
			<td>
				<code>rest_namespace</code>
			</td>
			<td>
				<p>REST route&#039;s namespace for the post type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-visibility">
			<td>
				<code>visibility</code>
			</td>
			<td>
				<p>The visibility settings for the post type.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-icon">
			<td>
				<code>icon</code>
			</td>
			<td>
				<p>The icon for the post type.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Type</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/types</code>

		<p>Query this endpoint to retrieve a specific type record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/types</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>context</code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
																					<p class="default">
							Default: <code>view</code>
						</p>
																<p>One of: <code>view</code>, <code>embed</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Type</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/types/&lt;type&gt;</code>

		<p>Query this endpoint to retrieve a specific type record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/types/&lt;type&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the post type.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>context</code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
																					<p class="default">
							Default: <code>view</code>
						</p>
																<p>One of: <code>view</code>, <code>embed</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
</div>
