---
---

# Bp_Xprofile_Fields

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_xprofile_field record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the profile field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_id">
			<td>
				<code>group_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the group the field is part of.</p>
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
				<p>The ID of the parent field.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The type for the profile field.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>checkbox</code>, <code>datebox</code>, <code>multiselectbox</code>, <code>number</code>, <code>url</code>, <code>radio</code>, <code>selectbox</code>, <code>textarea</code>, <code>textbox</code>, <code>telephone</code>, <code>gender</code>, <code>socialnetworks</code>, <code>membertypes</code>, <code>option</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The name of the profile field.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-alternate_name">
			<td>
				<code>alternate_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The alternate name of the profile field.</p>
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
				<p>The description of the profile field.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_required">
			<td>
				<code>is_required</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the profile field must have a value.</p>
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
				<p>Whether the profile field can be deleted or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-field_order">
			<td>
				<code>field_order</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The order of the profile field into the group of fields.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-option_order">
			<td>
				<code>option_order</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The order of the option into the profile field list of options</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-order_by">
			<td>
				<code>order_by</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The way profile field&#039;s options are ordered.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>asc</code>, <code>desc</code></p>
							</td>
		</tr>
			<tr id="schema-is_default_option">
			<td>
				<code>is_default_option</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the option is the default one for the profile field.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-visibility_level">
			<td>
				<code>visibility_level</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Who may see the saved value for this profile field.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>public</code>, <code>loggedin</code>, <code>friends</code>, <code>adminsonly</code></p>
							</td>
		</tr>
			<tr id="schema-options">
			<td>
				<code>options</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Options of the profile field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-data">
			<td>
				<code>data</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The saved value for this profile field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Xprofile_Fields</h2>
		<p>Query this endpoint to retrieve a collection of bp_xprofile_fields. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/xprofile/fields</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/xprofile/fields</code>
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
											<p>ID of the profile group of fields that have profile fields</p>
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
											<p>Whether to hide profile fields where the user has not provided data or not.</p>
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
		<h2>Create a Bp_Xprofile_Field</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-group_id">group_id</a></code><br />
									</td>
				<td>
											<p>The ID of the group the field is part of.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent_id">parent_id</a></code><br />
									</td>
				<td>
											<p>The ID of the parent field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-type">type</a></code><br />
									</td>
				<td>
											<p>The type for the profile field.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>checkbox</code>, <code>datebox</code>, <code>multiselectbox</code>, <code>number</code>, <code>url</code>, <code>radio</code>, <code>selectbox</code>, <code>textarea</code>, <code>textbox</code>, <code>telephone</code>, <code>gender</code>, <code>socialnetworks</code>, <code>membertypes</code>, <code>option</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of the profile field.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-alternate_name">alternate_name</a></code><br />
									</td>
				<td>
											<p>The alternate name of the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>The description of the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-is_required">is_required</a></code><br />
									</td>
				<td>
											<p>Whether the profile field must have a value.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-can_delete">can_delete</a></code><br />
									</td>
				<td>
											<p>Whether the profile field can be deleted or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-field_order">field_order</a></code><br />
									</td>
				<td>
											<p>The order of the profile field into the group of fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-option_order">option_order</a></code><br />
									</td>
				<td>
											<p>The order of the option into the profile field list of options</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-order_by">order_by</a></code><br />
									</td>
				<td>
											<p>The way profile field&#039;s options are ordered.</p>
																					<p class="default">
							Default: <code>asc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-is_default_option">is_default_option</a></code><br />
									</td>
				<td>
											<p>Whether the option is the default one for the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-default_visibility">default_visibility</a></code><br />
									</td>
				<td>
											<p>Default visibility for the profile field.</p>
																					<p class="default">
							Default: <code>public</code>
						</p>
																<p>One of: <code>public</code>, <code>loggedin</code>, <code>friends</code>, <code>adminsonly</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-allow_custom_visibility">allow_custom_visibility</a></code><br />
									</td>
				<td>
											<p>Whether to allow members to set the visibility for the profile field data or not.</p>
																					<p class="default">
							Default: <code>allowed</code>
						</p>
																<p>One of: <code>allowed</code>, <code>disabled</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-do_autolink">do_autolink</a></code><br />
									</td>
				<td>
											<p>Autolink status for this profile field</p>
																					<p class="default">
							Default: <code>off</code>
						</p>
																<p>One of: <code>on</code>, <code>off</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/fields</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Xprofile_Field</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/xprofile/fields/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_xprofile_field record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/xprofile/fields/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the profile field.</p>
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
											<code>fetch_field_data</code><br />
									</td>
				<td>
											<p>Whether to fetch data for the field. Requires a $user_id.</p>
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
		<h2>Update a Bp_Xprofile_Field</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_id">group_id</a></code><br />
									</td>
				<td>
											<p>The ID of the group the field is part of.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent_id">parent_id</a></code><br />
									</td>
				<td>
											<p>The ID of the parent field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-type">type</a></code><br />
									</td>
				<td>
											<p>The type for the profile field.</p>
																										<p>One of: <code>checkbox</code>, <code>datebox</code>, <code>multiselectbox</code>, <code>number</code>, <code>url</code>, <code>radio</code>, <code>selectbox</code>, <code>textarea</code>, <code>textbox</code>, <code>telephone</code>, <code>gender</code>, <code>socialnetworks</code>, <code>membertypes</code>, <code>option</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-alternate_name">alternate_name</a></code><br />
									</td>
				<td>
											<p>The alternate name of the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>The description of the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-is_required">is_required</a></code><br />
									</td>
				<td>
											<p>Whether the profile field must have a value.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-can_delete">can_delete</a></code><br />
									</td>
				<td>
											<p>Whether the profile field can be deleted or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-field_order">field_order</a></code><br />
									</td>
				<td>
											<p>The order of the profile field into the group of fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-option_order">option_order</a></code><br />
									</td>
				<td>
											<p>The order of the option into the profile field list of options</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-order_by">order_by</a></code><br />
									</td>
				<td>
											<p>The way profile field&#039;s options are ordered.</p>
																					<p class="default">
							Default: <code>asc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-is_default_option">is_default_option</a></code><br />
									</td>
				<td>
											<p>Whether the option is the default one for the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-default_visibility">default_visibility</a></code><br />
									</td>
				<td>
											<p>Default visibility for the profile field.</p>
																					<p class="default">
							Default: <code>public</code>
						</p>
																<p>One of: <code>public</code>, <code>loggedin</code>, <code>friends</code>, <code>adminsonly</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-allow_custom_visibility">allow_custom_visibility</a></code><br />
									</td>
				<td>
											<p>Whether to allow members to set the visibility for the profile field data or not.</p>
																					<p class="default">
							Default: <code>allowed</code>
						</p>
																<p>One of: <code>allowed</code>, <code>disabled</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-do_autolink">do_autolink</a></code><br />
									</td>
				<td>
											<p>Autolink status for this profile field</p>
																					<p class="default">
							Default: <code>off</code>
						</p>
																<p>One of: <code>on</code>, <code>off</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/fields/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Xprofile_Field</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the profile field.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>delete_data</code><br />
									</td>
				<td>
											<p>Required if you want to delete users data for the field.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/xprofile/fields/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/xprofile/fields/&lt;id&gt;</code>
	</div>
</section>
</div>
