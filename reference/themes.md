---
---

# Themes

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a theme record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-stylesheet">
			<td>
				<code>stylesheet</code>
			</td>
			<td>
				<p>The theme&#039;s stylesheet. This uniquely identifies the theme.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-template">
			<td>
				<code>template</code>
			</td>
			<td>
				<p>The theme&#039;s template. If this is a child theme, this refers to the parent theme, otherwise this is the same as the theme&#039;s stylesheet.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code>
			</td>
			<td>
				<p>The theme author.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-author_uri">
			<td>
				<code>author_uri</code>
			</td>
			<td>
				<p>The website of the theme author.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code>
			</td>
			<td>
				<p>A description of the theme.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-is_block_theme">
			<td>
				<code>is_block_theme</code>
			</td>
			<td>
				<p>Whether the theme is a block-based theme.</p>
				<p class="type">
					JSON data type: boolean				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code>
			</td>
			<td>
				<p>The name of the theme.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-requires_php">
			<td>
				<code>requires_php</code>
			</td>
			<td>
				<p>The minimum PHP version required for the theme to work.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-requires_wp">
			<td>
				<code>requires_wp</code>
			</td>
			<td>
				<p>The minimum WordPress version required for the theme to work.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-screenshot">
			<td>
				<code>screenshot</code>
			</td>
			<td>
				<p>The theme&#039;s screenshot URL.</p>
				<p class="type">
					JSON data type: string,
											Format: uri
									</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-tags">
			<td>
				<code>tags</code>
			</td>
			<td>
				<p>Tags indicating styles and features of the theme.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-textdomain">
			<td>
				<code>textdomain</code>
			</td>
			<td>
				<p>The theme&#039;s text domain.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-theme_supports">
			<td>
				<code>theme_supports</code>
			</td>
			<td>
				<p>Features supported by this theme.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-theme_uri">
			<td>
				<code>theme_uri</code>
			</td>
			<td>
				<p>The URI of the theme&#039;s webpage.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-version">
			<td>
				<code>version</code>
			</td>
			<td>
				<p>The theme&#039;s current version.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code>
			</td>
			<td>
				<p>A named status for the theme.</p>
				<p class="type">
					JSON data type: string				</p>
								<p class="context">Context: <code></code></p>
									<p>One of: <code>inactive</code>, <code>active</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Theme</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/themes</code>

		<p>Query this endpoint to retrieve a specific theme record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/themes</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to themes assigned one or more statuses.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Theme</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/themes/&lt;stylesheet&gt;?)</code>

		<p>Query this endpoint to retrieve a specific theme record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/themes/&lt;stylesheet&gt;?)</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>stylesheet</code><br />
									</td>
				<td>
											<p>The theme&#039;s stylesheet. This uniquely identifies the theme.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
</div>
