---
---

# Bp_Xprofile_Repeater_Fields

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_xprofile_repeater_fields record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-data">
			<td>
				<code>data</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Object of groups.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Create a Bp_Xprofile_Repeater_Fields</h2>
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
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group of profile fields.</p>
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
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/repeater/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Xprofile_Repeater_Fields</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>context</code><br />
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
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group of profile fields.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>fetch_fields</code><br />
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
											<code>fetch_field_data</code><br />
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
											<code>fetch_visibility_level</code><br />
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
											<code>fields</code><br />
									</td>
				<td>
											<p>Pass Field IDs which you want to delete it.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/xprofile/repeater/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/xprofile/repeater/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Xprofile_Repeater_Fields</h2>
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
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the group of profile fields.</p>
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
											<code><a href="#schema-fields">fields</a></code><br />
									</td>
				<td>
											<p>Fields array with order of field set with field ID and value to reorder.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/repeater/order/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
