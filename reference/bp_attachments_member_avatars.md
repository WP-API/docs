---
---

# Bp_Attachments_Member_Avatars

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_attachments_member_avatar record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-full">
			<td>
				<code>full</code><br />
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
			<tr id="schema-thumb">
			<td>
				<code>thumb</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>Thumb size of the image file.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Attachments_Member_Avatar</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/&lt;user_id&gt;/avatar</code>

		<p>Query this endpoint to retrieve a specific bp_attachments_member_avatar record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/&lt;user_id&gt;/avatar</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Member.</p>
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
					<tr>
				<td>
											<code>html</code><br />
									</td>
				<td>
											<p>Whether to return an &lt;img&gt; HTML element, vs a raw URL to an avatar.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>alt</code><br />
									</td>
				<td>
											<p>The alt attribute for the &lt;img&gt; element.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>no_gravatar</code><br />
									</td>
				<td>
											<p>Whether to disable the default Gravatar fallback.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Attachments_Member_Avatar</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Member.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/members/&lt;user_id&gt;/avatar</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Attachments_Member_Avatar</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Member.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/members/&lt;user_id&gt;/avatar</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/members/&lt;user_id&gt;/avatar</code>
	</div>
</section>
</div>
