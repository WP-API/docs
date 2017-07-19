---
---

# Types

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist for a type object.</p>
<table class="attributes">
			<tr id="schema-capabilities">
			<td>
				<code>capabilities</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>All capabilities used by the post type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A human-readable description of the post type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-hierarchical">
			<td>
				<code>hierarchical</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not the post type should have children.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-labels">
			<td>
				<code>labels</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Human-readable labels for the post type for various contexts.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The title for the post type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric identifier for the post type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-supports">
			<td>
				<code>supports</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>All features, supported by the post type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-taxonomies">
			<td>
				<code>taxonomies</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Taxonomies associated with post type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-rest_base">
			<td>
				<code>rest_base</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>REST base route for the post type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
	</table>

	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/types</code>
	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Type</h2>
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
	<div class="secondary">
		<h3>Definition</h3>

		<code>GET /wp/v2/types</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/types</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Type</h2>
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
	<div class="secondary">
		<h3>Definition</h3>

		<code>GET /wp/v2/types/&lt;type&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/types/&lt;type&gt;</code>
	</div>
</section>
</div>

