---
---

# Bp_Video_Details

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_video_details record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-tabs">
			<td>
				<code>tabs</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Video directory tabs.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-privacy">
			<td>
				<code>privacy</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Video privacy.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Video_Details</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/video/details</code>

		<p>Query this endpoint to retrieve a specific bp_video_details record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/video/details</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
</div>
