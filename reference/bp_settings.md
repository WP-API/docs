---
---

# Bp_Settings

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_settings record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Name of the setting.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Whether the setting is active or inactive.</p>
								<p class="context">Context: <code>view</code></p>
									<p>One of: <code>active</code>, <code>inactive</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Title of the setting.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Description of the setting.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Settings</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/settings</code>

		<p>Query this endpoint to retrieve a specific bp_settings record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/settings</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>context</code><br />
									</td>
				<td>
																					<p class="default">
							Default: <code>view</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
</section>
</div>
