---
---

# Bp_Members

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_members record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the Member.</p>
									<p class="read-only">Read only</p>
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
				<p>Display name for the member.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-mention_name">
			<td>
				<code>mention_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The name used for that user in @-mentions.</p>
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
				<p>Profile URL of the member.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_login">
			<td>
				<code>user_login</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric identifier for the Member.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-member_types">
			<td>
				<code>member_types</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Member types associated with the member.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-registered_date">
			<td>
				<code>registered_date</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>Registration date for the member.</p>
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
				<p>Password for the member (never included).</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-roles">
			<td>
				<code>roles</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Roles assigned to the member.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-capabilities">
			<td>
				<code>capabilities</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>All capabilities assigned to the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-extra_capabilities">
			<td>
				<code>extra_capabilities</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Any extra capabilities assigned to the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-profile_name">
			<td>
				<code>profile_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Display name for the member based on the privacy setting.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_activity">
			<td>
				<code>last_activity</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Last Active time for the member.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-xprofile">
			<td>
				<code>xprofile</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Member XProfile groups and its fields.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-followers">
			<td>
				<code>followers</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Followers counts for the current user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-following">
			<td>
				<code>following</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Followings counts for the current user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-friendship_status">
			<td>
				<code>friendship_status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Friendship relation with, current, logged in user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>is_friends</code>, <code>not_friends</code>, <code>pending</code>, <code>awaiting_response</code></p>
							</td>
		</tr>
			<tr id="schema-friendship_id">
			<td>
				<code>friendship_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the friendship.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-create_friendship">
			<td>
				<code>create_friendship</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Logged in user can create friendship with current user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_following">
			<td>
				<code>is_following</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Check if a user is following or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_wp_admin">
			<td>
				<code>is_wp_admin</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the member is an administrator.</p>
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
				<p>Avatar URLs for the member.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-cover_url">
			<td>
				<code>cover_url</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Cover images URL for the member.</p>
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
				<p>Whether to check member has default cover image or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Members</h2>
		<p>Query this endpoint to retrieve a collection of bp_members. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/members</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members</code>
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
							Default: <code>newest</code>
						</p>
																<p>One of: <code>active</code>, <code>newest</code>, <code>alphabetical</code>, <code>random</code>, <code>online</code>, <code>popular</code>, <code>include</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Limit results to friends of a user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_ids</code><br />
									</td>
				<td>
											<p>Pass IDs of users to limit result set.</p>
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
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>member_type</code><br />
									</td>
				<td>
											<p>Limit results set to certain type(s).</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>xprofile</code><br />
									</td>
				<td>
											<p>Limit results set to a certain xProfile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>bp_ps_search</code><br />
									</td>
				<td>
											<p>Profile Search form field data(s).</p>
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
																<p>One of: <code>all</code>, <code>personal</code>, <code>following</code>, <code>followers</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Members</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>Display name for the member.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-user_login">user_login</a></code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the Member.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-password">password</a></code><br />
									</td>
				<td>
											<p>Password for the member (never included).</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-roles">roles</a></code><br />
									</td>
				<td>
											<p>Roles assigned to the member.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-types">types</a></code><br />
									</td>
				<td>
											<p>Set type(s) for a member.</p>
																										<p>One of: <code>testprofile-type</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-email">email</a></code><br />
									</td>
				<td>
											<p>The email address for the member.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/members</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Members</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_members record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the user.</p>
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
		<h2>Update a Bp_Members</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>Display name for the member.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-roles">roles</a></code><br />
									</td>
				<td>
											<p>Roles assigned to the member.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-types">types</a></code><br />
									</td>
				<td>
											<p>Set type(s) for a member.</p>
																										<p>One of: <code>testprofile-type</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/members/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Members</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Member.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/members/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/members/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Members</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/me</code>

		<p>Query this endpoint to retrieve a specific bp_members record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/me</code>
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
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Members</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>Display name for the member.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-roles">roles</a></code><br />
									</td>
				<td>
											<p>Roles assigned to the member.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-types">types</a></code><br />
									</td>
				<td>
											<p>Set type(s) for a member.</p>
																										<p>One of: <code>testprofile-type</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/members/me</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Members</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Required to be true, as users do not support trashing.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>reassign</code><br />
									</td>
				<td>
											<p>Reassign the deleted user&#039;s posts and links to this user ID.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/members/me</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/members/me</code>
	</div>
</section>
</div>
