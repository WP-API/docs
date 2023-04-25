---
---

# Nav_Menus

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a nav_menu record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the term.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML description of the term.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML title for the term.</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric identifier for the term unique to its type.</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-meta">
			<td>
				<code>meta</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Meta fields.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-locations">
			<td>
				<code>locations</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The locations assigned to the menu.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-auto_add">
			<td>
				<code>auto_add</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to automatically add top level pages to this menu.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Nav_Menus</h2>
		<p>Query this endpoint to retrieve a collection of nav_menus. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/menus</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/menus</code>
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
											<code>search</code><br />
									</td>
				<td>
											<p>Limit results to those matching a string.</p>
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
							Default: <code>asc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>orderby</code><br />
									</td>
				<td>
											<p>Sort collection by term attribute.</p>
																					<p class="default">
							Default: <code>name</code>
						</p>
																<p>One of: <code>id</code>, <code>include</code>, <code>name</code>, <code>slug</code>, <code>include_slugs</code>, <code>term_group</code>, <code>description</code>, <code>count</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>hide_empty</code><br />
									</td>
				<td>
											<p>Whether to hide terms not assigned to any posts.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>post</code><br />
									</td>
				<td>
											<p>Limit result set to terms assigned to a specific post.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>slug</code><br />
									</td>
				<td>
											<p>Limit result set to terms with one or more specific slugs.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Nav_Menu</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>HTML description of the term.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>HTML title for the term.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-slug">slug</a></code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the term unique to its type.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-meta">meta</a></code><br />
									</td>
				<td>
											<p>Meta fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-locations">locations</a></code><br />
									</td>
				<td>
											<p>The locations assigned to the menu.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-auto_add">auto_add</a></code><br />
									</td>
				<td>
											<p>Whether to automatically add top level pages to this menu.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/menus</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Nav_Menu</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/menus/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific nav_menu record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/menus/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the term.</p>
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
		<h2>Update a Nav_Menu</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the term.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>HTML description of the term.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>HTML title for the term.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-slug">slug</a></code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the term unique to its type.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-meta">meta</a></code><br />
									</td>
				<td>
											<p>Meta fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-locations">locations</a></code><br />
									</td>
				<td>
											<p>The locations assigned to the menu.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-auto_add">auto_add</a></code><br />
									</td>
				<td>
											<p>Whether to automatically add top level pages to this menu.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/menus/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Nav_Menu</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the term.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Required to be true, as terms do not support trashing.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/menus/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/menus/&lt;id&gt;</code>
	</div>
</section>
</div>
