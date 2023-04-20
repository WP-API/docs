---
---

# Bp_Groups_Details

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_groups_details record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-tabs">
			<td>
				<code>tabs</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Groups directory tabs.</p>
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
				<p>Groups order by options.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Groups_Details</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/groups/details</code>

		<p>Query this endpoint to retrieve a specific bp_groups_details record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups/details</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>Filter by.. active(Last Active), popular(Most Members), newest(Newly Created), alphabetical(Alphabetical)</p>
																					<p class="default">
							Default: <code>active</code>
						</p>
																<p>One of: <code>active</code>, <code>popular</code>, <code>newest</code>, <code>alphabetical</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Groups_Details</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/groups/&lt;id&gt;/detail</code>

		<p>Query this endpoint to retrieve a specific bp_groups_details record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups/&lt;id&gt;/detail</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Groups_Details</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/groups/&lt;id&gt;/settings</code>

		<p>Query this endpoint to retrieve a specific bp_groups_details record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/groups/&lt;id&gt;/settings</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>nav</code><br />
									</td>
				<td>
											<p>Navigation item slug.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>edit-details</code>, <code>group-settings</code>, <code>forum</code>, <code>courses</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Bp_Groups_Details</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-nav">nav</a></code><br />
									</td>
				<td>
											<p>Navigation item slug.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>edit-details</code>, <code>group-settings</code>, <code>forum</code>, <code>courses</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-fields">fields</a></code><br />
									</td>
				<td>
											<p>The list of fields Objects to update with name and value of the field.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/groups/&lt;id&gt;/settings</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
