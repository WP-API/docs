---
---

# Bp_Attachments_Member_Covers

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_attachments_member_cover record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-image">
			<td>
				<code>image</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>Full size of the image file.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-warning">
			<td>
				<code>warning</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Warning while uploading the cover photo.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Attachments_Member_Cover</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/&lt;user_id&gt;/cover</code>

		<p>Query this endpoint to retrieve a specific bp_attachments_member_cover record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/&lt;user_id&gt;/cover</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the User.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Attachments_Member_Cover</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the User.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/members/&lt;user_id&gt;/cover</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Attachments_Member_Cover</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the User.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/members/&lt;user_id&gt;/cover</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/members/&lt;user_id&gt;/cover</code>
	</div>
</section>
</div>
