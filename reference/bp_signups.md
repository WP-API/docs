---
---

# Bp_Signups

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_signup record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the signup.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_login">
			<td>
				<code>user_login</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The username of the user the signup is for.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_name">
			<td>
				<code>user_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The full name of the user the signup is for.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_email">
			<td>
				<code>user_email</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The email for the user the signup is for.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-activation_key">
			<td>
				<code>activation_key</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Activation key of the signup.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-registered">
			<td>
				<code>registered</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The registered date for the user, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Signup</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/signup/form</code>

		<p>Query this endpoint to retrieve a specific bp_signup record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/signup/form</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Signup</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/signup</code>

		<p>Query this endpoint to retrieve a specific bp_signup record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/signup</code>
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
											<code>number</code><br />
									</td>
				<td>
											<p>Total number of signups to return.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>offset</code><br />
									</td>
				<td>
											<p>Offset the result set by a specific number of items.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Ensure result set includes specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>order</code><br />
									</td>
				<td>
											<p>Order sort attribute ascending or descending.</p>
																					<p class="default">
							Default: <code>desc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>orderby</code><br />
									</td>
				<td>
											<p>Order by a specific parameter (default: signup_id).</p>
																					<p class="default">
							Default: <code>signup_id</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>user_login</code><br />
									</td>
				<td>
											<p>Specific user login to return.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Signup</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-signup_email">signup_email</a></code><br />
									</td>
				<td>
											<p>New user email address.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-signup_password">signup_password</a></code><br />
									</td>
				<td>
											<p>New user account password.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/signup</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Signup</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/signup/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_signup record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/signup/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Identifier for the signup. Can be a signup ID, an email address, or a user_login.</p>
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
		<h2>Delete a Bp_Signup</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Identifier for the signup. Can be a signup ID, an email address, or a user_login.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>context</code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
																					<p class="default">
							Default: <code>edit</code>
						</p>
																<p>One of: <code>view</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/signup/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/signup/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Signup</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-activation_key">activation_key</a></code><br />
									</td>
				<td>
											<p>Activation key of the signup.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-context">context</a></code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
																					<p class="default">
							Default: <code>edit</code>
						</p>
																<p>One of: <code>view</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/signup/activate/&lt;activation_key&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
