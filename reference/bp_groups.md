---
---

# Bp_Groups

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_groups record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the Group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-creator_id">
			<td>
				<code>creator_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the user who created the Group.</p>
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
				<p>The name of the Group.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name_raw">
			<td>
				<code>name_raw</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Content for the name of the Group, as it exists in the database.</p>
									<p class="read-only">Read only</p>
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
				<p>The URL-friendly slug for the Group.</p>
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
				<p>The permalink to the Group on the site.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The description of the Group.</p>
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
				<p>The status of the Group.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>public</code>, <code>private</code>, <code>hidden</code></p>
							</td>
		</tr>
			<tr id="schema-enable_forum">
			<td>
				<code>enable_forum</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the Group has a forum enabled or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent_id">
			<td>
				<code>parent_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>ID of the parent Group.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date_created">
			<td>
				<code>date_created</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the Group was created, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-types">
			<td>
				<code>types</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The type(s) of the Group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_type_label">
			<td>
				<code>group_type_label</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Name of the group type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-subgroups_id">
			<td>
				<code>subgroups_id</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Sub Groups id if having a sub groups.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-admins">
			<td>
				<code>admins</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Group administrators.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-mods">
			<td>
				<code>mods</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Group moderators.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-total_member_count">
			<td>
				<code>total_member_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Count of all Group members.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_activity">
			<td>
				<code>last_activity</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the Group was last active, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_member">
			<td>
				<code>is_member</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>The current user is member of a group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-invite_id">
			<td>
				<code>invite_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Return&#039;s invite ID if current user is invited for a group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-request_id">
			<td>
				<code>request_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Return&#039;s request ID if invitation is pending for a group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_admin">
			<td>
				<code>is_admin</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>The current user is admin of a group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_mod">
			<td>
				<code>is_mod</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>The current user is moderator of a group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-members_count">
			<td>
				<code>members_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Members count of the group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-role">
			<td>
				<code>role</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Current member&#039;s role label in the group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-plural_role">
			<td>
				<code>plural_role</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Current member&#039;s role label in the plural form in the group</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_join">
			<td>
				<code>can_join</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Check current user can join or request access.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_post">
			<td>
				<code>can_post</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Check current user can post activity or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-forum">
			<td>
				<code>forum</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Forum id of the group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-create_media">
			<td>
				<code>create_media</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user has permission to upload media to the group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-create_album">
			<td>
				<code>create_album</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user has permission to create an album to the group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-create_video">
			<td>
				<code>create_video</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user has permission to upload video to the group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-create_document">
			<td>
				<code>create_document</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user has permission to upload document to the group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_type">
			<td>
				<code>group_type</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Whether the group type details will pass.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-avatar_urls">
			<td>
				<code>avatar_urls</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Avatar URLs for the group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-cover_url">
			<td>
				<code>cover_url</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>Cover Image URLs for the group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-cover_is_default">
			<td>
				<code>cover_is_default</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check the default cover image or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_subscribed">
			<td>
				<code>is_subscribed</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>The current user is subscribed of a group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-subscribed_id">
			<td>
				<code>subscribed_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The group subscription ID of current user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Groups</h2>
		<p>Query this endpoint to retrieve a collection of bp_groups. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/groups</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups</code>
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
											<code>type</code><br />
									</td>
				<td>
											<p>Shorthand for certain orderby/order combinations.</p>
																					<p class="default">
							Default: <code>active</code>
						</p>
																<p>One of: <code>active</code>, <code>newest</code>, <code>alphabetical</code>, <code>random</code>, <code>popular</code>, <code>include</code></p>
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
											<p>Order Groups by which attribute.</p>
																					<p class="default">
							Default: <code>date_created</code>
						</p>
																<p>One of: <code>date_created</code>, <code>last_activity</code>, <code>total_member_count</code>, <code>name</code>, <code>random</code>, <code>id</code>, <code>include</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Group statuses to limit results to.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Pass a user_id to limit to only Groups that this user is a member of.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>parent_id</code><br />
									</td>
				<td>
											<p>Get Groups that are children of the specified Group(s) IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>meta</code><br />
									</td>
				<td>
											<p>Get Groups based on their meta data information.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Ensure result set includes Groups with specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes Groups with specific IDs</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_type</code><br />
									</td>
				<td>
											<p>Limit results set to a certain Group type.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>enable_forum</code><br />
									</td>
				<td>
											<p>Whether the Group has a forum enabled or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>show_hidden</code><br />
									</td>
				<td>
											<p>Whether results should include hidden Groups.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>scope</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific scope.</p>
																					<p class="default">
							Default: <code>all</code>
						</p>
																<p>One of: <code>all</code>, <code>personal</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>can_post</code><br />
									</td>
				<td>
											<p>Fetch current users groups which can post activity in it.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Groups</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-creator_id">creator_id</a></code><br />
									</td>
				<td>
											<p>The ID of the user who created the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of the Group.</p>
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
											<p>The URL-friendly slug for the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>The description of the Group.</p>
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
											<p>The status of the Group.</p>
																					<p class="default">
							Default: <code>public</code>
						</p>
																<p>One of: <code>public</code>, <code>private</code>, <code>hidden</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-enable_forum">enable_forum</a></code><br />
									</td>
				<td>
											<p>Whether the Group has a forum enabled or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent_id">parent_id</a></code><br />
									</td>
				<td>
											<p>ID of the parent Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-types">types</a></code><br />
									</td>
				<td>
											<p>Set type(s) for a group.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/groups</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Groups</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/groups/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_groups record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
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
		<h2>Update a Bp_Groups</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-creator_id">creator_id</a></code><br />
									</td>
				<td>
											<p>The ID of the user who created the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>The description of the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>The status of the Group.</p>
																										<p>One of: <code>public</code>, <code>private</code>, <code>hidden</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-enable_forum">enable_forum</a></code><br />
									</td>
				<td>
											<p>Whether the Group has a forum enabled or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent_id">parent_id</a></code><br />
									</td>
				<td>
											<p>ID of the parent Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-types">types</a></code><br />
									</td>
				<td>
											<p>Set type(s) for a group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-append_types">append_types</a></code><br />
									</td>
				<td>
											<p>Append type(s) for a group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-remove_types">remove_types</a></code><br />
									</td>
				<td>
											<p>Remove type(s) for a group.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/groups/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Groups</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
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
											<code>delete_group_forum</code><br />
									</td>
				<td>
											<p>Delete the Group forum if exist.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/groups/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/groups/&lt;id&gt;</code>
	</div>
</section>
</div>
