---
---

# Bp_Xprofile_Datas

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_xprofile_data record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the profile data.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-field_id">
			<td>
				<code>field_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the field the data is from.</p>
									<p class="read-only">Read only</p>
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
				<p>The ID of the user the field data is from.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-value">
			<td>
				<code>value</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The value of the field data.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_updated">
			<td>
				<code>last_updated</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the field data was last updated, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Xprofile_Data</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/xprofile/&lt;field_id&gt;/data/&lt;user_id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_xprofile_data record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/xprofile/&lt;field_id&gt;/data/&lt;user_id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>field_id</code><br />
									</td>
				<td>
											<p>The ID of the field the data is from.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>The ID of user the field data is from.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Xprofile_Data</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-field_id">field_id</a></code><br />
									</td>
				<td>
											<p>The ID of the field the data is from.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>The ID of user the field data is from.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-value">value</a></code><br />
									</td>
				<td>
											<p>The list of values for the field data.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/xprofile/&lt;field_id&gt;/data/&lt;user_id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Xprofile_Data</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>field_id</code><br />
									</td>
				<td>
											<p>The ID of the field the data is from.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>The ID of user the field data is from.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/xprofile/&lt;field_id&gt;/data/&lt;user_id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/xprofile/&lt;field_id&gt;/data/&lt;user_id&gt;</code>
	</div>
</section>
</div>
