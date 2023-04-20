---
---

# Bp_Members_Details

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_members_details record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-tabs">
			<td>
				<code>tabs</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Members directory tabs.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-order_options">
			<td>
				<code>order_options</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Members order by options.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Members_Details</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/details</code>

		<p>Query this endpoint to retrieve a specific bp_members_details record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/details</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Members_Details</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/&lt;id&gt;/detail</code>

		<p>Query this endpoint to retrieve a specific bp_members_details record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/&lt;id&gt;/detail</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the member.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Members_Details</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/profile-dropdown</code>

		<p>Query this endpoint to retrieve a specific bp_members_details record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/profile-dropdown</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>default</code><br />
									</td>
				<td>
											<p>Whichever menu you have to retrieve.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
</div>
