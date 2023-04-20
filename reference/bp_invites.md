---
---

# Bp_Invites

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_invites record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the invite.</p>
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
				<p>Member&#039;s name.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-email">
			<td>
				<code>email</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Member&#039;s email address</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date">
			<td>
				<code>date</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the object was published, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date_gmt">
			<td>
				<code>date_gmt</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the object was published, as GMT.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Status to perform on it.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-invitee-status">
			<td>
				<code>invitee-status</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether invitee is registered or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-revoke-invite">
			<td>
				<code>revoke-invite</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether revoke invite or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Invites</h2>
		<p>Query this endpoint to retrieve a collection of bp_invites. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/invites</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/invites</code>
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
											<code>order</code><br />
									</td>
				<td>
											<p>Designates ascending or descending order of invites.</p>
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
											<p>Sort retrieved invites by parameter.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Invites</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-fields">fields</a></code><br />
									</td>
				<td>
											<p>Fields array with name and email_id to create an invites.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-email_content">email_content</a></code><br />
									</td>
				<td>
											<p>Content for invite a member.</p>
																					<p class="default">
							Default: <code>You have been invited by  to join the &lt;a href=&quot;http://developer.local&quot;&gt;BuddyBossApp&lt;/a&gt; community.</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/invites</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Invites</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the member invitation.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/invites/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/invites/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Invites</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/invites/profile-type</code>

		<p>Query this endpoint to retrieve a specific bp_invites record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/invites/profile-type</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
</div>
