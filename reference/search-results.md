---
---

# Search Results

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a search result record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer or string				</span>
			</td>
			<td>
				<p>Unique identifier for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The title for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-url">
			<td>
				<code>url</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>URL to the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Object type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code></p>
									<p>One of: <code>post</code>, <code>term</code>, <code>post-format</code></p>
							</td>
		</tr>
			<tr id="schema-subtype">
			<td>
				<code>subtype</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Object subtype.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code></p>
									<p>One of: <code>post</code>, <code>page</code>, <code>category</code>, <code>post_tag</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Search Results</h2>
		<p>Query this endpoint to retrieve a collection of search results. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/search</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/search</code>
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
																<p>One of: <code>view</code>, <code>embed</code></p>
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
											<code>type</code><br />
									</td>
				<td>
											<p>Limit results to items of an object type.</p>
																					<p class="default">
							Default: <code>post</code>
						</p>
																<p>One of: <code>post</code>, <code>term</code>, <code>post-format</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>subtype</code><br />
									</td>
				<td>
											<p>Limit results to items of one or more object subtypes.</p>
																					<p class="default">
							Default: <code>any</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
</section>
</div>
