---
---

# Block Types

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a block type record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-api_version">
			<td>
				<code>api_version</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Version of block API.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Title of block type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Unique name identifying the block type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Description of block type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-icon">
			<td>
				<code>icon</code><br />
				<span class="type">
					string or null				</span>
			</td>
			<td>
				<p>Icon of block type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-attributes">
			<td>
				<code>attributes</code><br />
				<span class="type">
					object or null				</span>
			</td>
			<td>
				<p>Block attributes.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-provides_context">
			<td>
				<code>provides_context</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Context provided by blocks of this type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-uses_context">
			<td>
				<code>uses_context</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Context values inherited by blocks of this type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-supports">
			<td>
				<code>supports</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Block supports.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-category">
			<td>
				<code>category</code><br />
				<span class="type">
					string or null				</span>
			</td>
			<td>
				<p>Block category.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_dynamic">
			<td>
				<code>is_dynamic</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Is the block dynamically rendered.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-editor_script">
			<td>
				<code>editor_script</code><br />
				<span class="type">
					string or null				</span>
			</td>
			<td>
				<p>Editor script handle.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-script">
			<td>
				<code>script</code><br />
				<span class="type">
					string or null				</span>
			</td>
			<td>
				<p>Public facing script handle.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-editor_style">
			<td>
				<code>editor_style</code><br />
				<span class="type">
					string or null				</span>
			</td>
			<td>
				<p>Editor style handle.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-style">
			<td>
				<code>style</code><br />
				<span class="type">
					string or null				</span>
			</td>
			<td>
				<p>Public facing style handle.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-styles">
			<td>
				<code>styles</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Block style variations.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-textdomain">
			<td>
				<code>textdomain</code><br />
				<span class="type">
					string or null				</span>
			</td>
			<td>
				<p>Public text domain.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code><br />
				<span class="type">
					array or null				</span>
			</td>
			<td>
				<p>Parent blocks.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-keywords">
			<td>
				<code>keywords</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Block keywords.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-example">
			<td>
				<code>example</code><br />
				<span class="type">
					object or null				</span>
			</td>
			<td>
				<p>Block example.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Block Type</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/block-types</code>

		<p>Query this endpoint to retrieve a specific block type record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/block-types</code>
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
					<tr>
				<td>
											<code>namespace</code><br />
									</td>
				<td>
											<p>Block namespace.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Block Type</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/block-types/&lt;namespace&gt;</code>

		<p>Query this endpoint to retrieve a specific block type record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/block-types/&lt;namespace&gt;</code>
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
					<tr>
				<td>
											<code>namespace</code><br />
									</td>
				<td>
											<p>Block namespace.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Block Type</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/block-types/&lt;namespace&gt;/&lt;name&gt;</code>

		<p>Query this endpoint to retrieve a specific block type record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/block-types/&lt;namespace&gt;/&lt;name&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>name</code><br />
									</td>
				<td>
											<p>Block name.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>namespace</code><br />
									</td>
				<td>
											<p>Block namespace.</p>
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
