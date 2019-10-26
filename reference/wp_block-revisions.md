---
---

# wp_block Revisions

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist for a wp_block-revision object.</p>
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
			<tr id="schema-preview_link">
			<td>
				<code>preview_link</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>Preview link for the post.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i https://example.com/wp-json/wp/v2/blocks/&lt;id&gt;/autosaves</code>
	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a wp_block-revision</h2>
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

		<code>GET /wp/v2/blocks/&lt;id&gt;/autosaves</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/blocks/&lt;id&gt;/autosaves</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a wp_block-revision</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-date">date</a></code><br />
									</td>
				<td>
											<p>The date the object was published, in the site&#039;s timezone.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-date_gmt">date_gmt</a></code><br />
									</td>
				<td>
											<p>The date the object was published, as GMT.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-slug">slug</a></code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the object unique to its type.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>A named status for the object.</p>
																										<p>One of: <code>publish</code>, <code>future</code>, <code>draft</code>, <code>pending</code>, <code>private</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-password">password</a></code><br />
									</td>
				<td>
											<p>A password to protect access to the content and excerpt.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>The title for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>The content for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-template">template</a></code><br />
									</td>
				<td>
											<p>The theme file to use to display the object.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/blocks/&lt;id&gt;/autosaves</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a wp_block-revision</h2>
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
											<p>The ID for the object.</p>
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

		<code>GET /wp/v2/blocks/&lt;parent&gt;/autosaves/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/blocks/&lt;parent&gt;/autosaves/&lt;id&gt;</code>
	</div>
</section>
</div>
