---
---

# Bp_Messages

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_messages record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the Thread.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-message_id">
			<td>
				<code>message_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the latest message of the Thread.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_sender_id">
			<td>
				<code>last_sender_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of latest sender of the Thread.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-subject">
			<td>
				<code>subject</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Title of the latest message of the Thread.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-excerpt">
			<td>
				<code>excerpt</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Summary of the latest message of the Thread.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-message">
			<td>
				<code>message</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Content of the latest message of the Thread.</p>
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
				<p>The date the latest message of the Thread, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-start_date">
			<td>
				<code>start_date</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the first message of the Thread, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-unread_count">
			<td>
				<code>unread_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Total count of unread messages into the Thread for the requested user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-sender_ids">
			<td>
				<code>sender_ids</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The list of user IDs for all messages in the Thread.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-current_user">
			<td>
				<code>current_user</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Current Logged in user&#039;s ID.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_send_message">
			<td>
				<code>can_send_message</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Current user can send message or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-avatar">
			<td>
				<code>avatar</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Avatar URLs for the author of the activity.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_group">
			<td>
				<code>is_group</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Group ID if message sent from group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_group_thread">
			<td>
				<code>is_group_thread</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether is a group thread or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_name">
			<td>
				<code>group_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Group name if thread created from group.  </p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_link">
			<td>
				<code>group_link</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>The permalink to the Group on the site.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_message_users">
			<td>
				<code>group_message_users</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Thread for all group users or selected one.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_message_type">
			<td>
				<code>group_message_type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Thread type its from all or private one.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_message_from">
			<td>
				<code>group_message_from</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Message from group or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-recipients_count">
			<td>
				<code>recipients_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Recipient users count.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-recipients_per_page">
			<td>
				<code>recipients_per_page</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Number of recipient loading per page.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-recipients_total_pages">
			<td>
				<code>recipients_total_pages</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Total number of pages for the recipients.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-recipients">
			<td>
				<code>recipients</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The list of recipient User Objects involved into the Thread.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-message_per_page">
			<td>
				<code>message_per_page</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Number of message loading per page.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-messages_count">
			<td>
				<code>messages_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Total message count into the thread.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-next_messages_timestamp">
			<td>
				<code>next_messages_timestamp</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>Last Message time stamp from response.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-messages">
			<td>
				<code>messages</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>List of message objects for the thread.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-loggedin_user_permissions">
			<td>
				<code>loggedin_user_permissions</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>List of user permission for loggedin user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_hidden">
			<td>
				<code>is_hidden</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check the thread archived or not for loggedin user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-starred_message_ids">
			<td>
				<code>starred_message_ids</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>List of starred message IDs.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp_media_ids">
			<td>
				<code>bp_media_ids</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Messages Medias.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-media_gif">
			<td>
				<code>media_gif</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Message Gifs.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp_videos">
			<td>
				<code>bp_videos</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Messages Videos.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp_documents">
			<td>
				<code>bp_documents</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Messages Documents.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Messages</h2>
		<p>Query this endpoint to retrieve a collection of bp_messages. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/messages</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/messages</code>
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
											<code>box</code><br />
									</td>
				<td>
											<p>Filter the result by box.</p>
																					<p class="default">
							Default: <code>inbox</code>
						</p>
																<p>One of: <code>sentbox</code>, <code>inbox</code>, <code>starred</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>Filter the result by thread status.</p>
																					<p class="default">
							Default: <code>all</code>
						</p>
																<p>One of: <code>all</code>, <code>read</code>, <code>unread</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Limit result to messages created by a specific user.</p>
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
		<h2>Create a Bp_Messages</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>ID of the Messages Thread. Required when replying to an existing Thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-subject">subject</a></code><br />
									</td>
				<td>
											<p>Subject of the Message initializing the Thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-message">message</a></code><br />
									</td>
				<td>
											<p>Content of the Message to add to the Thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_message_users">group_message_users</a></code><br />
									</td>
				<td>
											<p>Thread for all group users or selected one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_message_type">group_message_type</a></code><br />
									</td>
				<td>
											<p>Thread type its from all or private one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_message_from">group_message_from</a></code><br />
									</td>
				<td>
											<p>Message from group or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_count">recipients_count</a></code><br />
									</td>
				<td>
											<p>Recipient users count.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_per_page">recipients_per_page</a></code><br />
									</td>
				<td>
											<p>Number of recipient loading per page.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_total_pages">recipients_total_pages</a></code><br />
									</td>
				<td>
											<p>Total number of pages for the recipients.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients">recipients</a></code><br />
									</td>
				<td>
											<p>The list of the recipients user IDs of the Message.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_media_ids">bp_media_ids</a></code><br />
									</td>
				<td>
											<p>Media specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-media_gif">media_gif</a></code><br />
									</td>
				<td>
											<p>Save gif data into topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_videos">bp_videos</a></code><br />
									</td>
				<td>
											<p>Video specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_documents">bp_documents</a></code><br />
									</td>
				<td>
											<p>Document specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-sender_id">sender_id</a></code><br />
									</td>
				<td>
											<p>The user ID of the Message sender.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-send_at">send_at</a></code><br />
									</td>
				<td>
											<p>Messages send date according UTC time and date.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/messages</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Messages</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/messages/search-thread</code>

		<p>Query this endpoint to retrieve a specific bp_messages record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/messages/search-thread</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Sender users ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipient_id</code><br />
									</td>
				<td>
											<p>Thread recipient ID.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code>include_group_thread</code><br />
									</td>
				<td>
											<p>Include group thread or not.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Messages</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/messages/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_messages record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/messages/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>ID of the Messages Thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_message_users</code><br />
									</td>
				<td>
											<p>Thread for all group users or selected one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_message_type</code><br />
									</td>
				<td>
											<p>Thread type its from all or private one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_message_from</code><br />
									</td>
				<td>
											<p>Message from group or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_count</code><br />
									</td>
				<td>
											<p>Recipient users count.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_per_page</code><br />
									</td>
				<td>
											<p>Number of recipient loading per page.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_total_pages</code><br />
									</td>
				<td>
											<p>Total number of pages for the recipients.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>bp_media_ids</code><br />
									</td>
				<td>
											<p>Messages Medias.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>media_gif</code><br />
									</td>
				<td>
											<p>Message Gifs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>bp_videos</code><br />
									</td>
				<td>
											<p>Messages Videos.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>bp_documents</code><br />
									</td>
				<td>
											<p>Messages Documents.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_pagination</code><br />
									</td>
				<td>
											<p>Load recipients in a paginated manner.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_page</code><br />
									</td>
				<td>
											<p>Current page of the recipients.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>is_hidden</code><br />
									</td>
				<td>
											<p>List the archived threads.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>before</code><br />
									</td>
				<td>
											<p>Messages to get before a specific date.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Messages</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>ID of the Messages Thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_message_users">group_message_users</a></code><br />
									</td>
				<td>
											<p>Thread for all group users or selected one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_message_type">group_message_type</a></code><br />
									</td>
				<td>
											<p>Thread type its from all or private one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_message_from">group_message_from</a></code><br />
									</td>
				<td>
											<p>Message from group or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_count">recipients_count</a></code><br />
									</td>
				<td>
											<p>Recipient users count.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_per_page">recipients_per_page</a></code><br />
									</td>
				<td>
											<p>Number of recipient loading per page.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_total_pages">recipients_total_pages</a></code><br />
									</td>
				<td>
											<p>Total number of pages for the recipients.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_media_ids">bp_media_ids</a></code><br />
									</td>
				<td>
											<p>Media specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-media_gif">media_gif</a></code><br />
									</td>
				<td>
											<p>Save gif data into topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_videos">bp_videos</a></code><br />
									</td>
				<td>
											<p>Video specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_documents">bp_documents</a></code><br />
									</td>
				<td>
											<p>Document specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_pagination">recipients_pagination</a></code><br />
									</td>
				<td>
											<p>Load recipients in a paginated manner.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-recipients_page">recipients_page</a></code><br />
									</td>
				<td>
											<p>Current page of the recipients.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-message_id">message_id</a></code><br />
									</td>
				<td>
											<p>By default the latest message of the thread will be updated. Specify this message ID to edit another message of the thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-before">before</a></code><br />
									</td>
				<td>
											<p>Messages to get before a specific date.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/messages/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Messages</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>ID of the Messages Thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_message_users</code><br />
									</td>
				<td>
											<p>Thread for all group users or selected one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_message_type</code><br />
									</td>
				<td>
											<p>Thread type its from all or private one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_message_from</code><br />
									</td>
				<td>
											<p>Message from group or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_count</code><br />
									</td>
				<td>
											<p>Recipient users count.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_per_page</code><br />
									</td>
				<td>
											<p>Number of recipient loading per page.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_total_pages</code><br />
									</td>
				<td>
											<p>Total number of pages for the recipients.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>bp_media_ids</code><br />
									</td>
				<td>
											<p>Messages Medias.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>media_gif</code><br />
									</td>
				<td>
											<p>Message Gifs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>bp_videos</code><br />
									</td>
				<td>
											<p>Messages Videos.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>bp_documents</code><br />
									</td>
				<td>
											<p>Messages Documents.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_pagination</code><br />
									</td>
				<td>
											<p>Load recipients in a paginated manner.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>recipients_page</code><br />
									</td>
				<td>
											<p>Current page of the recipients.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>The user ID to remove from the thread</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code>before</code><br />
									</td>
				<td>
											<p>Messages to get before a specific date.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/messages/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/messages/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Messages</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>ID of one of the message of the Thread.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/messages/starred/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Messages</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-context">context</a></code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
																					<p class="default">
							Default: <code>edit</code>
						</p>
																<p>One of: <code>view</code>, <code>embed</code>, <code>edit</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_id">group_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-message">message</a></code><br />
									</td>
				<td>
											<p>Content of the Message to add to the Thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-users">users</a></code><br />
									</td>
				<td>
											<p>Group thread users individual or all.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>all</code>, <code>individual</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-users_list">users_list</a></code><br />
									</td>
				<td>
											<p>Limit result to messages created by a specific user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-type">type</a></code><br />
									</td>
				<td>
											<p>Type of message, Group thread or private reply.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>open</code>, <code>private</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_media_ids">bp_media_ids</a></code><br />
									</td>
				<td>
											<p>Media specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-media_gif">media_gif</a></code><br />
									</td>
				<td>
											<p>Save gif data into topic.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_videos">bp_videos</a></code><br />
									</td>
				<td>
											<p>Video specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_documents">bp_documents</a></code><br />
									</td>
				<td>
											<p>Document specific IDs.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/messages/group</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Messages</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>ID of the Messages Thread.</p>
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
											<p>Action name to perform on the message thread.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>delete_messages</code>, <code>hide_thread</code>, <code>unread</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-value">value</a></code><br />
									</td>
				<td>
											<p>Value for the action on message thread.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-context">context</a></code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-page">page</a></code><br />
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
											<code><a href="#schema-per_page">per_page</a></code><br />
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
											<code><a href="#schema-search">search</a></code><br />
									</td>
				<td>
											<p>Limit results to those matching a string.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/messages/action/&lt;id&gt;</code>
	</div>
</section>
</div>
