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
				<code>stylesheet</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The theme&#039;s stylesheet. This uniquely identifies the theme.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-template">
			<td>
				<code>template</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The theme&#039;s template. If this is a child theme, this refers to the parent theme, otherwise this is the same as the theme&#039;s stylesheet.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The theme author.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-author_uri">
			<td>
				<code>author_uri</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The website of the theme author.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>A description of the theme.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The name of the theme.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-requires_php">
			<td>
				<code>requires_php</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The minimum PHP version required for the theme to work.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-requires_wp">
			<td>
				<code>requires_wp</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The minimum WordPress version required for the theme to work.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-screenshot">
			<td>
				<code>screenshot</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>The theme&#039;s screenshot URL.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-tags">
			<td>
				<code>tags</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Tags indicating styles and features of the theme.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-textdomain">
			<td>
				<code>textdomain</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The theme&#039;s text domain.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-theme_supports">
			<td>
				<code>theme_supports</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Features supported by this theme.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-theme_uri">
			<td>
				<code>theme_uri</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The URI of the theme&#039;s webpage.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-version">
			<td>
				<code>version</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The theme&#039;s current version.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Themes</h2>
		<p>Query this endpoint to retrieve a collection of themes. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/themes</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/themes</code>
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
											<code>search</code><br />
									</td>
				<td>
											<p>Limit results to those matching a string.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to themes assigned one or more statuses.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
</section>
</div>
