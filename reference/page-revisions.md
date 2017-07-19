---
---

# Page-revisions

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist for a page-revision object.</p>
<table class="attributes">
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the author of the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-date">
			<td>
				<code>date</code><br />
				<span class="type">
					string,
													datetime ([details](https://core.trac.wordpress.org/ticket/41032))
										</span>
			</td>
			<td>
				<p>The date the object was published, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-date_gmt">
			<td>
				<code>date_gmt</code><br />
				<span class="type">
					string,
													datetime ([details](https://core.trac.wordpress.org/ticket/41032))
										</span>
			</td>
			<td>
				<p>The date the object was published, as GMT.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-guid">
			<td>
				<code>guid</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The globally unique identifier for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-modified">
			<td>
				<code>modified</code><br />
				<span class="type">
					string,
													datetime ([details](https://core.trac.wordpress.org/ticket/41032))
										</span>
			</td>
			<td>
				<p>The date the object was last modified, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-modified_gmt">
			<td>
				<code>modified_gmt</code><br />
				<span class="type">
					string,
													datetime ([details](https://core.trac.wordpress.org/ticket/41032))
										</span>
			</td>
			<td>
				<p>The date the object was last modified, as GMT.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the parent of the object.</p>
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
				<p>An alphanumeric identifier for the object unique to its type.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The title for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-content">
			<td>
				<code>content</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The content for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-excerpt">
			<td>
				<code>excerpt</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The excerpt for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
	</table>

	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/pages/&lt;parent&gt;/revisions</code>
	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Page-revision</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
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

		<code>GET /wp/v2/pages/&lt;parent&gt;/revisions</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/pages/&lt;parent&gt;/revisions</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Page-revision</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the object.</p>
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

		<code>GET /wp/v2/pages/&lt;parent&gt;/revisions/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/pages/&lt;parent&gt;/revisions/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Page-revision</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Required to be true, as revisions do not support trashing.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/pages/&lt;parent&gt;/revisions/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE http://demo.wp-api.org/wp-json/wp/v2/pages/&lt;parent&gt;/revisions/&lt;id&gt;</code>
	</div>
</section>
</div>
