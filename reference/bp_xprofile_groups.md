---
---

# Bp_Xprofile_Groups

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_xprofile_group record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the group of profile fields.</p>
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
				<p>The name of group of profile fields.</p>
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
				<p>The description of the group of profile fields.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_order">
			<td>
				<code>group_order</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The order of the group of profile fields.</p>
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
				<p>Whether the group of profile fields can be deleted or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-repeater_enabled">
			<td>
				<code>repeater_enabled</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the group of profile fields can be repeated or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-fields">
			<td>
				<code>fields</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The fields associated with this group of profile fields.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Xprofile_Groups</h2>
		<p>Query this endpoint to retrieve a collection of bp_xprofile_groups. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/xprofile/groups</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/xprofile/groups</code>
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
											<code>profile_group_id</code><br />
									</td>
				<td>
											<p>ID of the field group that have fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>hide_empty_groups</code><br />
									</td>
				<td>
											<p>Whether to hide profile groups of fields that do not have any profile fields or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Required if you want to load a specific user&#039;s data.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>member_type</code><br />
									</td>
				<td>
											<p>Limit fields by those restricted to a given member type, or array of member types. If `$user_id` is provided, the value of `$member_type` will be overridden by the member types of the provided user. The special value of &#039;any&#039; will return only those fields that are unrestricted by member type - i.e., those applicable to any type.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>hide_empty_fields</code><br />
									</td>
				<td>
											<p>Whether to hide profile groups of fields that do not have any profile fields or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>fetch_fields</code><br />
									</td>
				<td>
											<p>Whether to fetch the fields for each group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>fetch_field_data</code><br />
									</td>
				<td>
											<p>Whether to fetch data for each field. Requires a $user_id.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>fetch_visibility_level</code><br />
									</td>
				<td>
											<p>Whether to fetch the visibility level for each field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude_groups</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific profile field groups.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude_fields</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>update_meta_cache</code><br />
									</td>
				<td>
											<p>Whether to pre-fetch xprofilemeta for all retrieved groups, fields, and data.</p>
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
		<h2>Create a Bp_Xprofile_Group</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of group of profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>The description of the group of profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-can_delete">can_delete</a></code><br />
									</td>
				<td>
											<p>Whether the group of profile fields can be deleted or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-repeater_enabled">repeater_enabled</a></code><br />
									</td>
				<td>
											<p>Whether the group of profile fields can be repeated or not.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/groups</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Xprofile_Group</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/xprofile/groups/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_xprofile_group record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/xprofile/groups/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group of profile fields.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Xprofile_Group</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group of profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of group of profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>The description of the group of profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_order">group_order</a></code><br />
									</td>
				<td>
											<p>The order of the group of profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-can_delete">can_delete</a></code><br />
									</td>
				<td>
											<p>Whether the group of profile fields can be deleted or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-repeater_enabled">repeater_enabled</a></code><br />
									</td>
				<td>
											<p>Whether the group of profile fields can be repeated or not.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/groups/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Xprofile_Group</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group of profile fields.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/xprofile/groups/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/xprofile/groups/&lt;id&gt;</code>
	</div>
</section>
</div>
