---
---

# Posts

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a post record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-date">
			<td>
				<code>date</code><br />
				<span class="type">
					Array,
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
					Array,
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
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-link">
			<td>
				<code>link</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>URL to the object.</p>
									<p class="read-only">Read only</p>
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
									<p class="read-only">Read only</p>
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
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
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
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A named status for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
									<p>One of: <code>publish</code>, <code>future</code>, <code>draft</code>, <code>pending</code>, <code>private</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Type of Post for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-password">
			<td>
				<code>password</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A password to protect access to the content and excerpt.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-permalink_template">
			<td>
				<code>permalink_template</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Permalink template for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-generated_slug">
			<td>
				<code>generated_slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Slug automatically generated from the object title.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
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
			<tr id="schema-featured_media">
			<td>
				<code>featured_media</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the featured media for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-comment_status">
			<td>
				<code>comment_status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Whether or not comments are open on the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
									<p>One of: <code>open</code>, <code>closed</code></p>
							</td>
		</tr>
			<tr id="schema-ping_status">
			<td>
				<code>ping_status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Whether or not the object can be pinged.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
									<p>One of: <code>open</code>, <code>closed</code></p>
							</td>
		</tr>
			<tr id="schema-format">
			<td>
				<code>format</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The format for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
									<p>One of: <code>standard</code>, <code>aside</code>, <code>chat</code>, <code>gallery</code>, <code>link</code>, <code>image</code>, <code>quote</code>, <code>status</code>, <code>video</code>, <code>audio</code></p>
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
			<tr id="schema-sticky">
			<td>
				<code>sticky</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not the object should be treated as sticky.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-template">
			<td>
				<code>template</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The theme file to use to display the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-categories">
			<td>
				<code>categories</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The terms assigned to the object in the category taxonomy.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-tags">
			<td>
				<code>tags</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The terms assigned to the object in the post_tag taxonomy.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Posts</h2>
		<p>Query this endpoint to retrieve a collection of posts. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/posts</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/posts</code>
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
											<code>after</code><br />
									</td>
				<td>
											<p>Limit response to posts published after a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author</code><br />
									</td>
				<td>
											<p>Limit result set to posts assigned to specific authors.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author_exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes posts assigned to specific authors.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>before</code><br />
									</td>
				<td>
											<p>Limit response to posts published before a given ISO8601 compliant date.</p>
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
											<p>Sort collection by object attribute.</p>
																					<p class="default">
							Default: <code>date</code>
						</p>
																<p>One of: <code>author</code>, <code>date</code>, <code>id</code>, <code>include</code>, <code>modified</code>, <code>parent</code>, <code>relevance</code>, <code>slug</code>, <code>include_slugs</code>, <code>title</code></p>
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
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to posts assigned one or more statuses.</p>
																					<p class="default">
							Default: <code>publish</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>tax_relation</code><br />
									</td>
				<td>
											<p>Limit result set based on relationship between multiple taxonomies.</p>
																										<p>One of: <code>AND</code>, <code>OR</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>categories</code><br />
									</td>
				<td>
											<p>Limit result set to all items that have the specified term assigned in the categories taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>categories_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to all items except those that have the specified term assigned in the categories taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>tags</code><br />
									</td>
				<td>
											<p>Limit result set to all items that have the specified term assigned in the tags taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>tags_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to all items except those that have the specified term assigned in the tags taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>sticky</code><br />
									</td>
				<td>
											<p>Limit result set to items that are sticky.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Post</h2>
			<h3>Arguments</h3>
	<table class="arguments">
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
											<code><a href="#schema-author">author</a></code><br />
									</td>
				<td>
											<p>The ID for the author of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-excerpt">excerpt</a></code><br />
									</td>
				<td>
											<p>The excerpt for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-featured_media">featured_media</a></code><br />
									</td>
				<td>
											<p>The ID of the featured media for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-comment_status">comment_status</a></code><br />
									</td>
				<td>
											<p>Whether or not comments are open on the object.</p>
																										<p>One of: <code>open</code>, <code>closed</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-ping_status">ping_status</a></code><br />
									</td>
				<td>
											<p>Whether or not the object can be pinged.</p>
																										<p>One of: <code>open</code>, <code>closed</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-format">format</a></code><br />
									</td>
				<td>
											<p>The format for the object.</p>
																										<p>One of: <code>standard</code>, <code>aside</code>, <code>chat</code>, <code>gallery</code>, <code>link</code>, <code>image</code>, <code>quote</code>, <code>status</code>, <code>video</code>, <code>audio</code></p>
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
											<code><a href="#schema-sticky">sticky</a></code><br />
									</td>
				<td>
											<p>Whether or not the object should be treated as sticky.</p>
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
					<tr>
				<td>
											<code><a href="#schema-categories">categories</a></code><br />
									</td>
				<td>
											<p>The terms assigned to the object in the category taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-tags">tags</a></code><br />
									</td>
				<td>
											<p>The terms assigned to the object in the post_tag taxonomy.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/posts</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Post</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/posts/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific post record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/posts/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
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
					<tr>
				<td>
											<code>password</code><br />
									</td>
				<td>
											<p>The password for the post if it is password protected.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Post</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the object.</p>
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
											<code><a href="#schema-author">author</a></code><br />
									</td>
				<td>
											<p>The ID for the author of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-excerpt">excerpt</a></code><br />
									</td>
				<td>
											<p>The excerpt for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-featured_media">featured_media</a></code><br />
									</td>
				<td>
											<p>The ID of the featured media for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-comment_status">comment_status</a></code><br />
									</td>
				<td>
											<p>Whether or not comments are open on the object.</p>
																										<p>One of: <code>open</code>, <code>closed</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-ping_status">ping_status</a></code><br />
									</td>
				<td>
											<p>Whether or not the object can be pinged.</p>
																										<p>One of: <code>open</code>, <code>closed</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-format">format</a></code><br />
									</td>
				<td>
											<p>The format for the object.</p>
																										<p>One of: <code>standard</code>, <code>aside</code>, <code>chat</code>, <code>gallery</code>, <code>link</code>, <code>image</code>, <code>quote</code>, <code>status</code>, <code>video</code>, <code>audio</code></p>
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
											<code><a href="#schema-sticky">sticky</a></code><br />
									</td>
				<td>
											<p>Whether or not the object should be treated as sticky.</p>
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
					<tr>
				<td>
											<code><a href="#schema-categories">categories</a></code><br />
									</td>
				<td>
											<p>The terms assigned to the object in the category taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-tags">tags</a></code><br />
									</td>
				<td>
											<p>The terms assigned to the object in the post_tag taxonomy.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/posts/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X POST https://example.com/wp-json/wp/v2/posts/&lt;id&gt; -d '{"title":"My New Title"}'
</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Post</h2>
			<h3>Arguments</h3>
	<table class="arguments">
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
											<p>Whether to bypass Trash and force deletion.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/posts/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/posts/&lt;id&gt;</code>
	</div>
</section>
</div>
