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
				<code>api_version</code>
			</td>
			<td>
				<p>Version of block API.</p>
				<p class="type">
					JSON data type: integer				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code>
			</td>
			<td>
				<p>Title of block type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code>
			</td>
			<td>
				<p>Unique name identifying the block type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code>
			</td>
			<td>
				<p>Description of block type.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-icon">
			<td>
				<code>icon</code>
			</td>
			<td>
				<p>Icon of block type.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-attributes">
			<td>
				<code>attributes</code>
			</td>
			<td>
				<p>Block attributes.</p>
				<p class="type">
					JSON data type: object or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-provides_context">
			<td>
				<code>provides_context</code>
			</td>
			<td>
				<p>Context provided by blocks of this type.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-uses_context">
			<td>
				<code>uses_context</code>
			</td>
			<td>
				<p>Context values inherited by blocks of this type.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-selectors">
			<td>
				<code>selectors</code>
			</td>
			<td>
				<p>Custom CSS selectors.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-supports">
			<td>
				<code>supports</code>
			</td>
			<td>
				<p>Block supports.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-category">
			<td>
				<code>category</code>
			</td>
			<td>
				<p>Block category.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_dynamic">
			<td>
				<code>is_dynamic</code>
			</td>
			<td>
				<p>Is the block dynamically rendered.</p>
				<p class="type">
					JSON data type: boolean				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-editor_script_handles">
			<td>
				<code>editor_script_handles</code>
			</td>
			<td>
				<p>Editor script handles.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-script_handles">
			<td>
				<code>script_handles</code>
			</td>
			<td>
				<p>Public facing and editor script handles.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-view_script_handles">
			<td>
				<code>view_script_handles</code>
			</td>
			<td>
				<p>Public facing script handles.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-editor_style_handles">
			<td>
				<code>editor_style_handles</code>
			</td>
			<td>
				<p>Editor style handles.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-style_handles">
			<td>
				<code>style_handles</code>
			</td>
			<td>
				<p>Public facing and editor style handles.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-styles">
			<td>
				<code>styles</code>
			</td>
			<td>
				<p>Block style variations.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-variations">
			<td>
				<code>variations</code>
			</td>
			<td>
				<p>Block variations.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-textdomain">
			<td>
				<code>textdomain</code>
			</td>
			<td>
				<p>Public text domain.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code>
			</td>
			<td>
				<p>Parent blocks.</p>
				<p class="type">
					JSON data type: array or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-ancestor">
			<td>
				<code>ancestor</code>
			</td>
			<td>
				<p>Ancestor blocks.</p>
				<p class="type">
					JSON data type: array or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-keywords">
			<td>
				<code>keywords</code>
			</td>
			<td>
				<p>Block keywords.</p>
				<p class="type">
					JSON data type: array				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-example">
			<td>
				<code>example</code>
			</td>
			<td>
				<p>Block example.</p>
				<p class="type">
					JSON data type: object or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-editor_script">
			<td>
				<code>editor_script</code>
			</td>
			<td>
				<p>Editor script handle. DEPRECATED: Use `editor_script_handles` instead.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-script">
			<td>
				<code>script</code>
			</td>
			<td>
				<p>Public facing and editor script handle. DEPRECATED: Use `script_handles` instead.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-view_script">
			<td>
				<code>view_script</code>
			</td>
			<td>
				<p>Public facing script handle. DEPRECATED: Use `view_script_handles` instead.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-editor_style">
			<td>
				<code>editor_style</code>
			</td>
			<td>
				<p>Editor style handle. DEPRECATED: Use `editor_style_handles` instead.</p>
				<p class="type">
					JSON data type: string or null				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-style">
			<td>
				<code>style</code>
			</td>
			<td>
				<p>Public facing and editor style handle. DEPRECATED: Use `style_handles` instead.</p>
				<p class="type">
					JSON data type: string or null				</p>
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
