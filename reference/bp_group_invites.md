---
---

# Bp_Group_Invites

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_group_invites record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the BP Invitation object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_id">
			<td>
				<code>user_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the user who is invited to join the Group.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-invite_sent">
			<td>
				<code>invite_sent</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the invite has been sent to the invitee.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-inviter_id">
			<td>
				<code>inviter_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the user who made the invite.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_id">
			<td>
				<code>group_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the group to which the user has been invited.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date_modified">
			<td>
				<code>date_modified</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the object was created or last updated, in the site&#039;s timezone.</p>
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
				<p>Invitation or request.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
									<p>One of: <code>invite</code>, <code>request</code></p>
							</td>
		</tr>
			<tr id="schema-message">
			<td>
				<code>message</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The raw and rendered versions for the content of the message.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Group_Invites</h2>
		<p>Query this endpoint to retrieve a collection of bp_group_invites. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/groups/invites</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups/invites</code>
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
																<p>One of: <code>view</code>, <code>edit</code></p>
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
											<code>group_id</code><br />
									</td>
				<td>
											<p>ID of the group to limit results to.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Return only invitations extended to this user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>inviter_id</code><br />
									</td>
				<td>
											<p>Return only invitations extended by this user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>invite_sent</code><br />
									</td>
				<td>
											<p>Limit result set to invites that have been sent, not sent, or include all.</p>
																					<p class="default">
							Default: <code>sent</code>
						</p>
																<p>One of: <code>draft</code>, <code>sent</code>, <code>all</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>order_by</code><br />
									</td>
				<td>
											<p>Name of the field to order according to.</p>
																										<p>One of: <code>id</code>, <code>include</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>sort_order</code><br />
									</td>
				<td>
											<p>Order sort attribute ascending or descending.</p>
																					<p class="default">
							Default: <code>asc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Group_Invites</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>The ID of the user who is invited to join the Group.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-inviter_id">inviter_id</a></code><br />
									</td>
				<td>
											<p>The ID of the user who made the invite.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_id">group_id</a></code><br />
									</td>
				<td>
											<p>The ID of the group to which the user has been invited.</p>
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
											<p>The optional message to send to the invited user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-send_invite">send_invite</a></code><br />
									</td>
				<td>
											<p>Whether the invite should be sent to the invitee.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/groups/invites</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Group_Invites</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/groups/invites/&lt;invite_id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_group_invites record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups/invites/&lt;invite_id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>invite_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group invitation.</p>
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
																<p>One of: <code>view</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Group_Invites</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-invite_id">invite_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group invitation.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/groups/invites/&lt;invite_id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Group_Invites</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>invite_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group invitation.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/groups/invites/&lt;invite_id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/groups/invites/&lt;invite_id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Group_Invites</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>Return only invitations extended to those users.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-inviter_id">inviter_id</a></code><br />
									</td>
				<td>
											<p>The ID of the user who made the invite.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_id">group_id</a></code><br />
									</td>
				<td>
											<p>The ID of the group to which the user has been invited.</p>
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
											<p>The optional message to send to the invited user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-send_invite">send_invite</a></code><br />
									</td>
				<td>
											<p>Whether the invite should be sent to the invitee.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/groups/invites/multiple</code>
	</div>
</section>
</div>
