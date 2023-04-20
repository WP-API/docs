---
---

# Bp_Activity_Link_Previews

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_activity_link_preview record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Title for the link preview.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Description or HTML to generate the link preview.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-images">
			<td>
				<code>images</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Image URLs for the preview.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-error">
			<td>
				<code>error</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>If any errors to retrieving a the preview data.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-wp_embed">
			<td>
				<code>wp_embed</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the URL is wp embed or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Activity_Link_Preview</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/activity/link-preview</code>

		<p>Query this endpoint to retrieve a specific bp_activity_link_preview record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/activity/link-preview</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>url</code><br />
									</td>
				<td>
											<p>URL for the generate link preview.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
</section>
</div>
