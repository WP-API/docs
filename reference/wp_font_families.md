---
---

# Font_Families

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a font_family record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code>
			</td>
			<td>
				<p>Unique identifier for the post.</p>
				<p class="type">
					JSON data type: integer				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-theme_json_version">
			<td>
				<code>theme_json_version</code>
			</td>
			<td>
				<p>Version of the theme.json schema used for the typography settings.</p>
				<p class="type">
					JSON data type: integer				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-font_faces">
			<td>
				<code>font_faces</code>
			</td>
			<td>
				<p>The IDs of the child font faces in the font family.</p>
				<p class="type">
					JSON data type: array				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-font_family_settings">
			<td>
				<code>font_family_settings</code>
			</td>
			<td>
				<p>font-face definition in theme.json format.</p>
				<p class="type">
					JSON data type: object				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Font_Families</h2>
		<p>Query this endpoint to retrieve a collection of font_families. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/font-families</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/font-families</code>
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
											<code>page</code><br />
									</td>
				<td>
											<p>Current page of the collection.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>per_page</code><br />
									</td>
				<td>
											<p>Maximum number of items to be returned in result set.</p>
																					<p class="default">
							Default: <code>10</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Limit result set to specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>offset</code><br />
									</td>
				<td>
											<p>Offset the result set by a specific number of items.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>order</code><br />
									</td>
				<td>
											<p>Order sort attribute ascending or descending.</p>
																					<p class="default">
							Default: <code>desc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>orderby</code><br />
									</td>
				<td>
											<p>Sort collection by post attribute.</p>
																					<p class="default">
							Default: <code>id</code>
						</p>
																<p>One of: <code>id</code>, <code>include</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>slug</code><br />
									</td>
				<td>
											<p>Limit result set to posts with one or more specific slugs.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Font_Family</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-theme_json_version">theme_json_version</a></code><br />
									</td>
				<td>
											<p>Version of the theme.json schema used for the typography settings.</p>
																					<p class="default">
							Default: <code>2</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-font_family_settings">font_family_settings</a></code><br />
									</td>
				<td>
											<p>font-family declaration in theme.json format, encoded as a string.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/font-families</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Font_Family</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/font-families/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific font_family record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/font-families/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the post.</p>
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
<section class="route">
	<div class="primary">
		<h2>Update a Font_Family</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the post.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-theme_json_version">theme_json_version</a></code><br />
									</td>
				<td>
											<p>Version of the theme.json schema used for the typography settings.</p>
																					<p class="default">
							Default: <code>2</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-font_family_settings">font_family_settings</a></code><br />
									</td>
				<td>
											<p>font-family declaration in theme.json format, encoded as a string.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/font-families/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Font_Family</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the post.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Whether to bypass Trash and force deletion.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/font-families/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/font-families/&lt;id&gt;</code>
	</div>
</section>
</div>
