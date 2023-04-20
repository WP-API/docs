---
---

# Members_Permissions

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a members_permission record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-can_create_activity">
			<td>
				<code>can_create_activity</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create activity or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_group">
			<td>
				<code>can_create_group</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_join_group">
			<td>
				<code>can_join_group</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can join the group or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_media">
			<td>
				<code>can_create_media</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the media or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_forum_media">
			<td>
				<code>can_create_forum_media</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the media into forums or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_message_media">
			<td>
				<code>can_create_message_media</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the media into messages or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_document">
			<td>
				<code>can_create_document</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the document or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_forum_document">
			<td>
				<code>can_create_forum_document</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the document into forums or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_message_document">
			<td>
				<code>can_create_message_document</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the document into messages or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_video">
			<td>
				<code>can_create_video</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the video or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_forum_video">
			<td>
				<code>can_create_forum_video</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the video into forums or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_create_message_video">
			<td>
				<code>can_create_message_video</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the user can create the video into messages or not.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Members_Permission</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/members/me/permissions</code>

		<p>Query this endpoint to retrieve a specific members_permission record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/members/me/permissions</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
</div>
