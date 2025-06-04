---
---

# Tags

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a tag record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code>
			</td>
			<td>
				<p>Unique identifier for the term.</p>
				<p class="type">
					JSON data type: integer				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-count">
			<td>
				<code>count</code>
			</td>
			<td>
				<p>Number of published posts for the term.</p>
				<p class="type">
					JSON data type: integer				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code>
			</td>
			<td>
				<p>HTML description of the term.</p>
				<p class="type">
					JSON data type: string				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-link">
			<td>
				<code>link</code>
			</td>
			<td>
				<p>URL of the term.</p>
				<p class="type">
					JSON data type: string,
											Format: uri
									</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code>
			</td>
			<td>
				<p>HTML title for the term.</p>
				<p class="type">
					JSON data type: string				</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code>
			</td>
			<td>
				<p>An alphanumeric identifier for the term unique to its type.</p>
				<p class="type">
					JSON data type: string				</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-taxonomy">
			<td>
				<code>taxonomy</code>
			</td>
			<td>
				<p>Type attribution for the term.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
									<p>One of: <code>post_tag</code></p>
							</td>
		</tr>
			<tr id="schema-meta">
			<td>
				<code>meta</code>
			</td>
			<td>
				<p>Meta fields.</p>
				<p class="type">
					JSON data type: object				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Tags</h2>
		<p>Query this endpoint to retrieve a collection of tags. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/tags</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/tags</code>
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
		<h2>Create a Tag</h2>
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
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/tags</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Tag</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/tags/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific tag record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/tags/&lt;id&gt;</code>
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
		<h2>Update a Tag</h2>
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
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/tags/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Tag</h2>
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

		<code>DELETE /wp/v2/tags/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/tags/&lt;id&gt;</code>
	</div>
</section>
</div>
<div>
    <section class="route">
	    <div class="primary">
		    <h2>Custom Taxonomies</h2>
            <p>The <code>tags</code> endpoint only deals with tags/terms in the <code>post_tag</code> taxonomy. To work with terms in a custom taxonomy, read about <a href="../extending-the-rest-api/adding-rest-api-support-for-custom-content-types/#registering-a-custom-taxonomy-with-rest-api-support">registering a custom taxonomy with REST API support</a>.</p>
        </div>
    </section>
</div>