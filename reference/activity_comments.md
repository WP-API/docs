---
---

# Activity_Comments

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a activity_comments record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-created">
			<td>
				<code>created</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the comment created or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comments">
			<td>
				<code>comments</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>A list of comments for activity.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp_media_ids">
			<td>
				<code>bp_media_ids</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Activity Medias.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-media_gif">
			<td>
				<code>media_gif</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Topic Gifs.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_media">
			<td>
				<code>comment_upload_media</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload media or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_gif">
			<td>
				<code>comment_upload_gif</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload gif or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_emoji">
			<td>
				<code>comment_upload_emoji</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload emoji or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp_videos">
			<td>
				<code>bp_videos</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Activity Videos.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_video">
			<td>
				<code>comment_upload_video</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload video or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp_documents">
			<td>
				<code>bp_documents</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Activity Documents.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comment_upload_document">
			<td>
				<code>comment_upload_document</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to check user can upload media or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Activity_Comments</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/activity/&lt;id&gt;/comment</code>

		<p>Query this endpoint to retrieve a specific activity_comments record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/activity/&lt;id&gt;/comment</code>
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
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>display_comments</code><br />
									</td>
				<td>
											<p>Comments by default, stream for within stream display, threaded for below each activity item.</p>
																					<p class="default">
							Default: <code>threaded</code>
						</p>
																<p>One of: <code>stream</code>, <code>threaded</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Activity_Comments</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-context">context</a></code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
																					<p class="default">
							Default: <code>edit</code>
						</p>
																<p>One of: <code>view</code>, <code>embed</code>, <code>edit</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-display_comments">display_comments</a></code><br />
									</td>
				<td>
											<p>Comments by default, stream for within stream display, threaded for below each activity item.</p>
																					<p class="default">
							Default: <code>threaded</code>
						</p>
																<p>One of: <code>stream</code>, <code>threaded</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-content">content</a></code><br />
									</td>
				<td>
											<p>The content for the comment.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent_id">parent_id</a></code><br />
									</td>
				<td>
											<p>Parent comment ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_media_ids">bp_media_ids</a></code><br />
									</td>
				<td>
											<p>Media specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-media_gif">media_gif</a></code><br />
									</td>
				<td>
											<p>Save gif data into activity</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_videos">bp_videos</a></code><br />
									</td>
				<td>
											<p>Video specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-bp_documents">bp_documents</a></code><br />
									</td>
				<td>
											<p>Document specific IDs.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/activity/&lt;id&gt;/comment</code>
	</div>
</section>
</div>
