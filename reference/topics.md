---
---

# Topics

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a topics record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the topic.</p>
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
				<p>The url identifier for the topic.</p>
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
				<p>The date for topic was last modified, in the site&#039;s timezone.</p>
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
				<p>The date for topic was last modified, as GMT.</p>
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
				<p>An alphanumeric unique identifier for the topic.</p>
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
				<p>The current status of the topic.</p>
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
				<p>The permalink to this topic on the site.</p>
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
				<p>The ID for the author of the topic.</p>
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
			<tr id="schema-sticky">
			<td>
				<code>sticky</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the topic is sticky or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-total_reply_count">
			<td>
				<code>total_reply_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Total replies count in the topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_reply_id">
			<td>
				<code>last_reply_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Recently posted reply id into the topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_active_author">
			<td>
				<code>last_active_author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Last updated the user&#039;s ID in topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_active_time">
			<td>
				<code>last_active_time</code><br />
				<span class="type">
					date-time				</span>
			</td>
			<td>
				<p>Last updated time for the topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_closed">
			<td>
				<code>is_closed</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the topic is closed or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-voice_count">
			<td>
				<code>voice_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Voice count of the topic</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-forum_id">
			<td>
				<code>forum_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Forum ID for the topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_topic_anonymous">
			<td>
				<code>is_topic_anonymous</code><br />
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
				<p>Classes lists for the topic.</p>
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
				<p>The title of the topic.</p>
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
				<p>Short Content of the topic.</p>
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
				<p>The content of the topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group">
			<td>
				<code>group</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Topic forum&#039;s group.</p>
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
				<p>Available actions with current user for topic.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-topic_tags">
			<td>
				<code>topic_tags</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Topic&#039;s tags</p>
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
				<p>Current user&#039;s permission with the topic.</p>
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
				<p>Revisions for topic.</p>
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
				<p>Topic Medias.</p>
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
				<p>Topic Videos.</p>
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
				<p>Topic Documentss.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Topics</h2>
		<p>Query this endpoint to retrieve a collection of topics. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/topics</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/topics</code>
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
							Default: <code>15</code>
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
											<p>An array of topic IDs not to retrieve.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>An array of topic IDs to retrieve.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>offset</code><br />
									</td>
				<td>
											<p>The number of topics to offset before retrieval.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>order</code><br />
									</td>
				<td>
											<p>Designates ascending or descending order of topics.</p>
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
											<p>Sort retrieved topics by parameter.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to topic assigned a specific status.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>Forum ID to retrieve all the topics.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>subscriptions</code><br />
									</td>
				<td>
											<p>Retrieve subscribed topics by user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>favorites</code><br />
									</td>
				<td>
											<p>Retrieve favorite topics by the current user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>tag</code><br />
									</td>
				<td>
											<p>Search topic with specific tag.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Topics</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>The current status of the topic.</p>
																					<p class="default">
							Default: <code>publish</code>
						</p>
																<p>One of: <code>publish</code>, <code>closed</code>, <code>spam</code>, <code>trash</code>, <code>pending</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>ID of the parent Forum.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-sticky">sticky</a></code><br />
									</td>
				<td>
											<p>Whether the topic is sticky or not.</p>
																										<p>One of: <code>stick</code>, <code>super</code>, <code>unstick</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>The title of the topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-short_content">short_content</a></code><br />
									</td>
				<td>
											<p>Short Content of the topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>The content of the topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group">group</a></code><br />
									</td>
				<td>
											<p>ID of the forum&#039;s group</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-topic_tags">topic_tags</a></code><br />
									</td>
				<td>
											<p>Topic&#039;s tags</p>
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
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/topics</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Topics</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/topics/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific topics record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/topics/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the topic.</p>
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
		<h2>Update a Topics</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>The current status of the topic.</p>
																					<p class="default">
							Default: <code>publish</code>
						</p>
																<p>One of: <code>publish</code>, <code>closed</code>, <code>spam</code>, <code>trash</code>, <code>pending</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>ID of the parent Forum.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-sticky">sticky</a></code><br />
									</td>
				<td>
											<p>Whether the topic is sticky or not.</p>
																										<p>One of: <code>stick</code>, <code>super</code>, <code>unstick</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>The title of the topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-short_content">short_content</a></code><br />
									</td>
				<td>
											<p>Short Content of the topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>The content of the topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group">group</a></code><br />
									</td>
				<td>
											<p>ID of the forum&#039;s group</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-topic_tags">topic_tags</a></code><br />
									</td>
				<td>
											<p>Topic&#039;s tags</p>
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
											<code><a href="#schema-reason_editing">reason_editing</a></code><br />
									</td>
				<td>
											<p>Reason for editing a topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-log">log</a></code><br />
									</td>
				<td>
											<p>Keep a log of topic edit.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/topics/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Topics</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/topics/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/topics/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Topics</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-destination_id">destination_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the destination topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-subscribers">subscribers</a></code><br />
									</td>
				<td>
											<p>Whether to migrate subscriptions or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-favorites">favorites</a></code><br />
									</td>
				<td>
											<p>Whether to migrate favorites or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-tags">tags</a></code><br />
									</td>
				<td>
											<p>Whether to migrate tags or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/topics/merge/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Topics</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-reply_id">reply_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the topic&#039;s reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-split_option">split_option</a></code><br />
									</td>
				<td>
											<p>Choose a valid split option.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>reply</code>, <code>existing</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-new_destination_title">new_destination_title</a></code><br />
									</td>
				<td>
											<p>New Topic title for the split with option reply.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-destination_id">destination_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the destination topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-subscribers">subscribers</a></code><br />
									</td>
				<td>
											<p>Whether to migrate subscriptions or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-favorites">favorites</a></code><br />
									</td>
				<td>
											<p>Whether to migrate favorites or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-tags">tags</a></code><br />
									</td>
				<td>
											<p>Whether to migrate tags or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/topics/split/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Topics</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the topic.</p>
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
											<p>Action name to perform on the topic</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>favorite</code>, <code>subscribe</code>, <code>close</code>, <code>sticky</code>, <code>super_sticky</code>, <code>spam</code>, <code>trash</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-value">value</a></code><br />
									</td>
				<td>
											<p>Value for the action on topic.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/topics/action/&lt;id&gt;</code>
	</div>
</section>
</div>
