---
---

# Replies

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a reply record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the reply.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-guid">
			<td>
				<code>guid</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The url identifier for the reply.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-modified">
			<td>
				<code>modified</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date for reply was last modified, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-modified_gmt">
			<td>
				<code>modified_gmt</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date for reply was last modified, as GMT.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-password">
			<td>
				<code>password</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A password to protect access to the post.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric unique identifier for the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The current status of the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
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
				<p>The permalink to this reply on the site.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the author of the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>ID of the parent topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-depth">
			<td>
				<code>depth</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Depth for the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-reply_to">
			<td>
				<code>reply_to</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Parent reply ID.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_reply_anonymous">
			<td>
				<code>is_reply_anonymous</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the post is by an anonymous user or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-anonymous_author_data">
			<td>
				<code>anonymous_author_data</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>An anonymous users data.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-classes">
			<td>
				<code>classes</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Classes lists for the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The title of the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-short_content">
			<td>
				<code>short_content</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Short content of the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-content">
			<td>
				<code>content</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The content of the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-current_user_permissions">
			<td>
				<code>current_user_permissions</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Current user&#039;s permission with the reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-action_states">
			<td>
				<code>action_states</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Available actions with current user for reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-revisions">
			<td>
				<code>revisions</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Revisions for reply.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bbp_media">
			<td>
				<code>bbp_media</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Reply Medias.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bbp_media_gif">
			<td>
				<code>bbp_media_gif</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Topic Gifs.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bbp_videos">
			<td>
				<code>bbp_videos</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Reply Videos.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bbp_documents">
			<td>
				<code>bbp_documents</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Reply Documents.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Replies</h2>
		<p>Query this endpoint to retrieve a collection of replies. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/reply</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/reply</code>
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
											<code>author</code><br />
									</td>
				<td>
											<p>Author ID, or comma-separated list of IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author_exclude</code><br />
									</td>
				<td>
											<p>An array of author IDs not to query from.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>An array of reply IDs not to retrieve.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>An array of reply IDs to retrieve.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>offset</code><br />
									</td>
				<td>
											<p>The number of reply to offset before retrieval.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>order</code><br />
									</td>
				<td>
											<p>Designates ascending or descending order of replies.</p>
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
											<p>Sort retrieved replies by parameter.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>Topic or Reply ID to retrieve all the child replies.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>thread_replies</code><br />
									</td>
				<td>
											<p>Calculated value and the thread replies depth.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Reply</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>The title of the reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-short_content">short_content</a></code><br />
									</td>
				<td>
											<p>Short content of the reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>The content of the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_media">bbp_media</a></code><br />
									</td>
				<td>
											<p>Media specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_media_gif">bbp_media_gif</a></code><br />
									</td>
				<td>
											<p>Save gif data into topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_videos">bbp_videos</a></code><br />
									</td>
				<td>
											<p>Video specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_documents">bbp_documents</a></code><br />
									</td>
				<td>
											<p>Document specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-reply_to">reply_to</a></code><br />
									</td>
				<td>
											<p>Parent Reply ID for reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-topic_id">topic_id</a></code><br />
									</td>
				<td>
											<p>ID of the topic to perform the reply on it.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-forum_id">forum_id</a></code><br />
									</td>
				<td>
											<p>Forum ID to reply on.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-tags">tags</a></code><br />
									</td>
				<td>
											<p>Tags to add into the topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-subscribe">subscribe</a></code><br />
									</td>
				<td>
											<p>Whether user subscribe topic or not.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/reply</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Reply</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/reply/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific reply record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/reply/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Reply</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>The title of the reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-short_content">short_content</a></code><br />
									</td>
				<td>
											<p>Short content of the reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>The content of the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_media">bbp_media</a></code><br />
									</td>
				<td>
											<p>Media specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_media_gif">bbp_media_gif</a></code><br />
									</td>
				<td>
											<p>Save gif data into topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_videos">bbp_videos</a></code><br />
									</td>
				<td>
											<p>Video specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bbp_documents">bbp_documents</a></code><br />
									</td>
				<td>
											<p>Document specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-reply_to">reply_to</a></code><br />
									</td>
				<td>
											<p>Parent Reply ID for reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-topic_id">topic_id</a></code><br />
									</td>
				<td>
											<p>ID of the topic to perform the reply on it.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-forum_id">forum_id</a></code><br />
									</td>
				<td>
											<p>Forum ID to reply on.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-tags">tags</a></code><br />
									</td>
				<td>
											<p>Tags to add into the topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-subscribe">subscribe</a></code><br />
									</td>
				<td>
											<p>Whether user subscribe topic or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-reason">reason</a></code><br />
									</td>
				<td>
											<p>Reason for editing a reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-log">log</a></code><br />
									</td>
				<td>
											<p>Keep a log of reply edit.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/reply/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Reply</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/reply/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/reply/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Reply</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-action">action</a></code><br />
									</td>
				<td>
											<p>Action name to perform on the reply.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>spam</code>, <code>trash</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-value">value</a></code><br />
									</td>
				<td>
											<p>Value for the action on reply.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/reply/action/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Reply</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-move_option">move_option</a></code><br />
									</td>
				<td>
											<p>Options for Move the reply.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>topic</code>, <code>existing</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-destination_topic_id">destination_topic_id</a></code><br />
									</td>
				<td>
											<p>Destination Topic ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-destination_topic_title">destination_topic_title</a></code><br />
									</td>
				<td>
											<p>New Topic Title.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/reply/move/&lt;id&gt;</code>
	</div>
</section>
</div>
