---
---

# Bp_Xprofile_Updates

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_xprofile_update record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-updated">
			<td>
				<code>updated</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Whether fields updated or giving an error.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-data">
			<td>
				<code>data</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Object of groups.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Update a Bp_Xprofile_Update</h2>
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
																<p>One of: <code>edit</code></p>
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
					<tr>
				<td>
											<code><a href="#schema-fields">fields</a></code><br />
									</td>
				<td>
											<p>Fields array with field_id, group_id, type, value and visibility_level to update the data.</p>
																<p class="required">
							Required: 1
						</p>
																<p class="default">
							Default: <code>
Notice: Array to string conversion in /Users/hardip/LocalSites/developer/app/public/docs/vendor/twig/twig/src/Environment.php(358) : eval()'d code on line 97
Array</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-profile_group_id">profile_group_id</a></code><br />
									</td>
				<td>
											<p>ID of the field group that have fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-hide_empty_groups">hide_empty_groups</a></code><br />
									</td>
				<td>
											<p>Whether to hide profile groups of fields that do not have any profile fields or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-member_type">member_type</a></code><br />
									</td>
				<td>
											<p>Limit fields by those restricted to a given member type, or array of member types. If `$user_id` is provided, the value of `$member_type` will be overridden by the member types of the provided user. The special value of &#039;any&#039; will return only those fields that are unrestricted by member type - i.e., those applicable to any type.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-hide_empty_fields">hide_empty_fields</a></code><br />
									</td>
				<td>
											<p>Whether to hide profile groups of fields that do not have any profile fields or not.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-fetch_fields">fetch_fields</a></code><br />
									</td>
				<td>
											<p>Whether to fetch the fields for each group.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-fetch_field_data">fetch_field_data</a></code><br />
									</td>
				<td>
											<p>Whether to fetch data for each field. Requires a $user_id.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-fetch_visibility_level">fetch_visibility_level</a></code><br />
									</td>
				<td>
											<p>Whether to fetch the visibility level for each field.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-exclude_groups">exclude_groups</a></code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific profile field groups.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-exclude_fields">exclude_fields</a></code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-update_meta_cache">update_meta_cache</a></code><br />
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
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/update</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
