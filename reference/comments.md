---
---

# Comments

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a comment record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
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
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the user object, if author was a user.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-author_email">
			<td>
				<code>author_email</code><br />
				<span class="type">
					string,
													email
									</span>
			</td>
			<td>
				<p>Email address for the object author.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-author_ip">
			<td>
				<code>author_ip</code><br />
				<span class="type">
					string,
													ip
									</span>
			</td>
			<td>
				<p>IP address for the object author.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-author_name">
			<td>
				<code>author_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Display name for the object author.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-author_url">
			<td>
				<code>author_url</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>URL for the object author.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-author_user_agent">
			<td>
				<code>author_user_agent</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>User agent for the object author.</p>
								<p class="context">Context: <code>edit</code></p>
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
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-date">
			<td>
				<code>date</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
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
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the object was published, as GMT.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
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
			<tr id="schema-post">
			<td>
				<code>post</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the associated post object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>State of the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Type of Comment for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-author_avatar_urls">
			<td>
				<code>author_avatar_urls</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Avatar URLs for the object author.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
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
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Comments</h2>
		<p>Query this endpoint to retrieve a collection of comments. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/comments</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/comments</code>
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
											<p>Limit response to comments published after a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author</code><br />
									</td>
				<td>
											<p>Limit result set to comments assigned to specific user IDs. Requires authorization.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author_exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes comments assigned to specific user IDs. Requires authorization.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author_email</code><br />
									</td>
				<td>
											<p>Limit result set to that from a specific author email. Requires authorization.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>before</code><br />
									</td>
				<td>
											<p>Limit response to comments published before a given ISO8601 compliant date.</p>
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
							Default: <code>date_gmt</code>
						</p>
																<p>One of: <code>date</code>, <code>date_gmt</code>, <code>id</code>, <code>include</code>, <code>post</code>, <code>parent</code>, <code>type</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>Limit result set to comments of specific parent IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>parent_exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific parent IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>post</code><br />
									</td>
				<td>
											<p>Limit result set to comments assigned to specific post IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to comments assigned a specific status. Requires authorization.</p>
																					<p class="default">
							Default: <code>approve</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>Limit result set to comments assigned a specific type. Requires authorization.</p>
																					<p class="default">
							Default: <code>comment</code>
						</p>
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
		<h2>Create a Comment</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-author">author</a></code><br />
									</td>
				<td>
											<p>The ID of the user object, if author was a user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_email">author_email</a></code><br />
									</td>
				<td>
											<p>Email address for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_ip">author_ip</a></code><br />
									</td>
				<td>
											<p>IP address for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_name">author_name</a></code><br />
									</td>
				<td>
											<p>Display name for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_url">author_url</a></code><br />
									</td>
				<td>
											<p>URL for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_user_agent">author_user_agent</a></code><br />
									</td>
				<td>
											<p>User agent for the object author.</p>
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
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-post">post</a></code><br />
									</td>
				<td>
											<p>The ID of the associated post object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>State of the object.</p>
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

		<code>POST /wp/v2/comments</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Comment</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/comments/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific comment record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/comments/&lt;id&gt;</code>
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
											<p>The password for the parent post of the comment (if the post is password protected).</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Comment</h2>
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
											<code><a href="#schema-author">author</a></code><br />
									</td>
				<td>
											<p>The ID of the user object, if author was a user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_email">author_email</a></code><br />
									</td>
				<td>
											<p>Email address for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_ip">author_ip</a></code><br />
									</td>
				<td>
											<p>IP address for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_name">author_name</a></code><br />
									</td>
				<td>
											<p>Display name for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_url">author_url</a></code><br />
									</td>
				<td>
											<p>URL for the object author.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-author_user_agent">author_user_agent</a></code><br />
									</td>
				<td>
											<p>User agent for the object author.</p>
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
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-post">post</a></code><br />
									</td>
				<td>
											<p>The ID of the associated post object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>State of the object.</p>
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

		<code>POST /wp/v2/comments/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Comment</h2>
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
					<tr>
				<td>
											<code>password</code><br />
									</td>
				<td>
											<p>The password for the parent post of the comment (if the post is password protected).</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/comments/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/comments/&lt;id&gt;</code>
	</div>
</section>
</div>
