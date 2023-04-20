---
---

# Bp_Groups_Types

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_groups_types record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-labels">
			<td>
				<code>labels</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Labels to use in various parts of the interface.</p>
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
				<p>Slug of the group type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Description of the group type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-directory_slug">
			<td>
				<code>directory_slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Directory slug of the group type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-has_directory">
			<td>
				<code>has_directory</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the group type should have its own type-specific directory.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-show_in_create_screen">
			<td>
				<code>show_in_create_screen</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether this group type is allowed to be selected on the group creation page.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-show_in_list">
			<td>
				<code>show_in_list</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether this group type should be shown in lists.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-create_screen_checked">
			<td>
				<code>create_screen_checked</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether we should have our group type checkbox checked by default on group create.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-enable_filter">
			<td>
				<code>enable_filter</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Display this group type in &quot;Types&quot; filter in Groups Directory.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-enable_remove">
			<td>
				<code>enable_remove</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Hide all groups of this type from Groups Directory.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-restrict-invites-user-same-group-type">
			<td>
				<code>restrict-invites-user-same-group-type</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>If a member is already in a group of this type, they cannot be sent an invite to join another group of this type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-member_type_group_invites">
			<td>
				<code>member_type_group_invites</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Only members of the selected profile types may be sent requests to join this group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-member_type_join">
			<td>
				<code>member_type_join</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Members of the selected Profile Types below can join Private groups of the Group Type without approval.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_type_role_labels">
			<td>
				<code>group_type_role_labels</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Rename the group member roles for groups of this type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-label_colors">
			<td>
				<code>label_colors</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Label&#039;s text and background colors for group types.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Groups_Types</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/groups/types</code>

		<p>Query this endpoint to retrieve a specific bp_groups_types record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups/types</code>
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
</div>
