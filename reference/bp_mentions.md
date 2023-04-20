---
---

# Bp_Mentions

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_mention record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
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
			<tr id="schema-display_id">
			<td>
				<code>display_id</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Member&#039;s mention name.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_nicename">
			<td>
				<code>user_nicename</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Member&#039;s nicename.</p>
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
				<p>Member&#039;s display name.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-image">
			<td>
				<code>image</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Member&#039;s avatar image.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Mention</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/mention</code>

		<p>Query this endpoint to retrieve a specific bp_mention record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/mention</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>term</code><br />
									</td>
				<td>
											<p>Members @name suggestions.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code>only_friends</code><br />
									</td>
				<td>
											<p>Limit result set to Friends only.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group. Limit result set to the group.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
</div>
