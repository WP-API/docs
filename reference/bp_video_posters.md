---
---

# Bp_Video_Posters

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_video_poster record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-attachment_id">
			<td>
				<code>attachment_id</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>A Unique numeric ID for the video poster.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-url">
			<td>
				<code>url</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>URL of the Video poster.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-preview">
			<td>
				<code>preview</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check it&#039;s setup for the preview or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_delete">
			<td>
				<code>can_delete</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can delete the video poster image or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_set">
			<td>
				<code>can_set</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can set as preview or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Video_Poster</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/video/&lt;id&gt;/poster</code>

		<p>Query this endpoint to retrieve a specific bp_video_poster record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/video/&lt;id&gt;/poster</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the video.</p>
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
		<h2>Create a Bp_Video_Poster</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the video.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-attachment_id">attachment_id</a></code><br />
									</td>
				<td>
											<p>A Unique numeric ID for the video poster.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-file">file</a></code><br />
									</td>
				<td>
											<p>File path for video poster.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/video/&lt;id&gt;/poster</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Video_Poster</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the video.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code>attachment_id</code><br />
									</td>
				<td>
											<p>A Unique numeric ID for the video poster.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/video/&lt;id&gt;/poster</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/video/&lt;id&gt;/poster</code>
	</div>
</section>
</div>
