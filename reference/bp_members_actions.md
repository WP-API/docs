---
---

# Bp_Members_Actions

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_members_action record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-action">
			<td>
				<code>action</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Action performed or not.</p>
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
				<p>Object of member.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Update a Bp_Members_Action</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the member.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-action">action</a></code><br />
									</td>
				<td>
											<p>Action name which you want to perform for the member.</p>
																										<p>One of: <code>follow</code>, <code>unfollow</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/members/action/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
