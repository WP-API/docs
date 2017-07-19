---
---

# Taxonomies

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist for a taxonomy object.</p>
<table class="attributes">
			<tr id="schema-capabilities">
			<td>
				<code>capabilities</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>All capabilities used by the taxonomy.</p>
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
				<p>A human-readable description of the taxonomy.</p>
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
				<p>Whether or not the taxonomy should have children.</p>
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
				<p>Human-readable labels for the taxonomy for various contexts.</p>
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
				<p>The title for the taxonomy.</p>
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
				<p>An alphanumeric identifier for the taxonomy.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-show_cloud">
			<td>
				<code>show_cloud</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not the term cloud should be displayed.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-types">
			<td>
				<code>types</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Types associated with the taxonomy.</p>
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
				<p>REST base route for the taxonomy.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
	</table>

	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/taxonomies</code>
	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Taxonomy</h2>
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
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>Limit results to taxonomies associated with a specific post type.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>GET /wp/v2/taxonomies</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/taxonomies</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Taxonomy</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>taxonomy</code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the taxonomy.</p>
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

		<code>GET /wp/v2/taxonomies/&lt;taxonomy&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/taxonomies/&lt;taxonomy&gt;</code>
	</div>
</section>
</div>
