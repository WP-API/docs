---
---

# Bp_Activities

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_activity record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the activity.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-primary_item_id">
			<td>
				<code>primary_item_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of some other object primarily associated with this one.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-secondary_item_id">
			<td>
				<code>secondary_item_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of some other object also associated with this one.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_id">
			<td>
				<code>user_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the author of the activity.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>User&#039;s display name for the activity.</p>
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
				<p>The permalink to this activity on the site.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-component">
			<td>
				<code>component</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The active BuddyPress component the activity relates to.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>notifications</code>, <code>groups</code>, <code>settings</code>, <code>forums</code>, <code>activity</code>, <code>media</code>, <code>messages</code>, <code>friends</code>, <code>invites</code>, <code>search</code>, <code>members</code>, <code>xprofile</code>, <code>document</code>, <code>video</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The activity type of the activity.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>new_member</code>, <code>new_avatar</code>, <code>updated_profile</code>, <code>activity_update</code>, <code>created_group</code>, <code>joined_group</code>, <code>group_details_updated</code>, <code>bbp_topic_create</code>, <code>bbp_reply_create</code>, <code>activity_comment</code>, <code>friendship_accepted</code>, <code>friendship_created</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The description of the activity&#039;s type (eg: Username posted an update)</p>
									<p class="read-only">Read only</p>
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
				<p>Allowed HTML content for the activity.</p>
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
				<p>The date the activity was published, in the site&#039;s timezone.</p>
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
				<p>Whether the activity has been marked as spam or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>published</code>, <code>spam</code></p>
							</td>
		</tr>
			<tr id="schema-comments">
			<td>
				<code>comments</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>A list of objects children of the activity object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_count">
			<td>
				<code>comment_count</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Comment count for the activity object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-hidden">
			<td>
				<code>hidden</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the activity object should be sitewide hidden or not.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-favorited">
			<td>
				<code>favorited</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the activity object has been favorited by the current user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_favorite">
			<td>
				<code>can_favorite</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user have the favorite access for the activity object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-favorite_count">
			<td>
				<code>favorite_count</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Favorite count for the activity object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_comment">
			<td>
				<code>can_comment</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user have the comment access for the activity object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_edit">
			<td>
				<code>can_edit</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user have the edit access for the activity object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_delete">
			<td>
				<code>can_delete</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user have the delete access for the activity object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-content_stripped">
			<td>
				<code>content_stripped</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Content for the activity without HTML tags.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-privacy">
			<td>
				<code>privacy</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Privacy of the activity.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>public</code>, <code>loggedin</code>, <code>onlyme</code>, <code>friends</code>, <code>media</code></p>
							</td>
		</tr>
			<tr id="schema-activity_data">
			<td>
				<code>activity_data</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Activity data for allow edit or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-feature_media">
			<td>
				<code>feature_media</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>Feature media image which added last in the content for blog post as well as custom post type.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-preview_data">
			<td>
				<code>preview_data</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>WordPress Embed data with activity.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_avatar">
			<td>
				<code>user_avatar</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Avatar URLs for the author of the activity.</p>
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
				<p>Activity Medias.</p>
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
				<p>Activity Gifs.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_media">
			<td>
				<code>comment_upload_media</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload media or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_gif">
			<td>
				<code>comment_upload_gif</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload gif or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_emoji">
			<td>
				<code>comment_upload_emoji</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload emoji or not.</p>
									<p class="read-only">Read only</p>
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
				<p>Activity Videos.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_video">
			<td>
				<code>comment_upload_video</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload video or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp_documents">
			<td>
				<code>bp_documents</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Activity Documents.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_document">
			<td>
				<code>comment_upload_document</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload media or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Activities</h2>
		<p>Query this endpoint to retrieve a collection of bp_activities. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/activity</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/activity</code>
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
											<p>Ensure result set includes specific IDs.</p>
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
											<p>Order by a specific parameter.</p>
																										<p>One of: <code>id</code>, <code>include</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>after</code><br />
									</td>
				<td>
											<p>Limit result set to items published after a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Limit result set to items created by a specific user (ID).</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific status.</p>
																					<p class="default">
							Default: <code>ham_only</code>
						</p>
																<p>One of: <code>ham_only</code>, <code>spam_only</code>, <code>all</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>scope</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific scope.</p>
																										<p>One of: <code>just-me</code>, <code>friends</code>, <code>groups</code>, <code>favorites</code>, <code>mentions</code>, <code>following</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>group_id</code><br />
									</td>
				<td>
											<p>Limit result set to items created by a specific group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>site_id</code><br />
									</td>
				<td>
											<p>Limit result set to items created by a specific site.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>primary_id</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific prime association ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>secondary_id</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific secondary association ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>component</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific active BuddyPress component.</p>
																										<p>One of: <code>notifications</code>, <code>groups</code>, <code>settings</code>, <code>forums</code>, <code>activity</code>, <code>media</code>, <code>messages</code>, <code>friends</code>, <code>invites</code>, <code>search</code>, <code>members</code>, <code>xprofile</code>, <code>document</code>, <code>video</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific activity type.</p>
																										<p>One of: <code>new_member</code>, <code>new_avatar</code>, <code>updated_profile</code>, <code>activity_update</code>, <code>created_group</code>, <code>joined_group</code>, <code>group_details_updated</code>, <code>bbp_topic_create</code>, <code>bbp_reply_create</code>, <code>activity_comment</code>, <code>friendship_accepted</code>, <code>friendship_created</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>display_comments</code><br />
									</td>
				<td>
											<p>No comments by default, stream for within stream display, threaded for below each activity item.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>privacy</code><br />
									</td>
				<td>
											<p>Privacy of the activity.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Activity</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-primary_item_id">primary_item_id</a></code><br />
									</td>
				<td>
											<p>The ID of some other object primarily associated with this one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-secondary_item_id">secondary_item_id</a></code><br />
									</td>
				<td>
											<p>The ID of some other object also associated with this one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>The ID for the author of the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>User&#039;s display name for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-link">link</a></code><br />
									</td>
				<td>
											<p>The permalink to this activity on the site.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-component">component</a></code><br />
									</td>
				<td>
											<p>The active BuddyPress component the activity relates to.</p>
																										<p>One of: <code>notifications</code>, <code>groups</code>, <code>settings</code>, <code>forums</code>, <code>activity</code>, <code>media</code>, <code>messages</code>, <code>friends</code>, <code>invites</code>, <code>search</code>, <code>members</code>, <code>xprofile</code>, <code>document</code>, <code>video</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-type">type</a></code><br />
									</td>
				<td>
											<p>The activity type of the activity.</p>
																										<p>One of: <code>new_member</code>, <code>new_avatar</code>, <code>updated_profile</code>, <code>activity_update</code>, <code>created_group</code>, <code>joined_group</code>, <code>group_details_updated</code>, <code>bbp_topic_create</code>, <code>bbp_reply_create</code>, <code>activity_comment</code>, <code>friendship_accepted</code>, <code>friendship_created</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>Allowed HTML content for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-date">date</a></code><br />
									</td>
				<td>
											<p>The date the activity was published, in the site&#039;s timezone.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-hidden">hidden</a></code><br />
									</td>
				<td>
											<p>Whether the activity object should be sitewide hidden or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-privacy">privacy</a></code><br />
									</td>
				<td>
											<p>Privacy of the activity.</p>
																										<p>One of: <code>public</code>, <code>loggedin</code>, <code>onlyme</code>, <code>friends</code>, <code>media</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-activity_data">activity_data</a></code><br />
									</td>
				<td>
											<p>Activity data for allow edit or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-feature_media">feature_media</a></code><br />
									</td>
				<td>
											<p>Feature media image which added last in the content for blog post as well as custom post type.</p>
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
											<p>Save gif data into activity</p>
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

		<code>POST /buddyboss/v1/activity</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Activity</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/activity/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_activity record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/activity/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the activity.</p>
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
		<h2>Update a Bp_Activity</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-primary_item_id">primary_item_id</a></code><br />
									</td>
				<td>
											<p>The ID of some other object primarily associated with this one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-secondary_item_id">secondary_item_id</a></code><br />
									</td>
				<td>
											<p>The ID of some other object also associated with this one.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>The ID for the author of the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>User&#039;s display name for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-link">link</a></code><br />
									</td>
				<td>
											<p>The permalink to this activity on the site.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-component">component</a></code><br />
									</td>
				<td>
											<p>The active BuddyPress component the activity relates to.</p>
																										<p>One of: <code>notifications</code>, <code>groups</code>, <code>settings</code>, <code>forums</code>, <code>activity</code>, <code>media</code>, <code>messages</code>, <code>friends</code>, <code>invites</code>, <code>search</code>, <code>members</code>, <code>xprofile</code>, <code>document</code>, <code>video</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-type">type</a></code><br />
									</td>
				<td>
											<p>The activity type of the activity.</p>
																										<p>One of: <code>new_member</code>, <code>new_avatar</code>, <code>updated_profile</code>, <code>activity_update</code>, <code>created_group</code>, <code>joined_group</code>, <code>group_details_updated</code>, <code>bbp_topic_create</code>, <code>bbp_reply_create</code>, <code>activity_comment</code>, <code>friendship_accepted</code>, <code>friendship_created</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>Allowed HTML content for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-date">date</a></code><br />
									</td>
				<td>
											<p>The date the activity was published, in the site&#039;s timezone.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-hidden">hidden</a></code><br />
									</td>
				<td>
											<p>Whether the activity object should be sitewide hidden or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-privacy">privacy</a></code><br />
									</td>
				<td>
											<p>Privacy of the activity.</p>
																										<p>One of: <code>public</code>, <code>loggedin</code>, <code>onlyme</code>, <code>friends</code>, <code>media</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-activity_data">activity_data</a></code><br />
									</td>
				<td>
											<p>Activity data for allow edit or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-feature_media">feature_media</a></code><br />
									</td>
				<td>
											<p>Feature media image which added last in the content for blog post as well as custom post type.</p>
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
											<p>Save gif data into activity</p>
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

		<code>POST /buddyboss/v1/activity/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Activity</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the activity.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/activity/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/activity/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Activity</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the activity.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/activity/&lt;id&gt;/favorite</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
