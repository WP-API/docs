---
---

# Bp_Medias

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_media record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the Media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-blog_id">
			<td>
				<code>blog_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Current Site ID.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-attachment_id">
			<td>
				<code>attachment_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the media object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_id">
			<td>
				<code>user_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the author of the media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The Media title.</p>
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
				<p>The Media description.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-album_id">
			<td>
				<code>album_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the Album.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_id">
			<td>
				<code>group_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the Group.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-activity_id">
			<td>
				<code>activity_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the activity.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-hide_activity_actions">
			<td>
				<code>hide_activity_actions</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Based on this hide like/comment button for media activity comments.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-privacy">
			<td>
				<code>privacy</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Privacy of the media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>public</code>, <code>loggedin</code>, <code>onlyme</code>, <code>friends</code>, <code>grouponly</code></p>
							</td>
		</tr>
			<tr id="schema-menu_order">
			<td>
				<code>menu_order</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Order of the item.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date_created">
			<td>
				<code>date_created</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the media was created, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-attachment_data">
			<td>
				<code>attachment_data</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Wordpress Media Data.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_name">
			<td>
				<code>group_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Group name associate with the media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-visibility">
			<td>
				<code>visibility</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Visibility of the media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_nicename">
			<td>
				<code>user_nicename</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The User&#039;s nice name to create a media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_login">
			<td>
				<code>user_login</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The User&#039;s login name to create a media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-display_name">
			<td>
				<code>display_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The User&#039;s display name to create a media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-url">
			<td>
				<code>url</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Media file URL.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-download_url">
			<td>
				<code>download_url</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Download Media file URL.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_permissions">
			<td>
				<code>user_permissions</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Current user&#039;s permission with the media.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Current media type, photo or video.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Medias</h2>
		<p>Query this endpoint to retrieve a collection of bp_medias. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/media</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/media</code>
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
											<code>search</code><br />
									</td>
				<td>
											<p>Limit results to those matching a string.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>order</code><br />
									</td>
				<td>
											<p>Order sort attribute ascending or descending.</p>
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
											<p>Order media by which attribute.</p>
																					<p class="default">
							Default: <code>date_created</code>
						</p>
																<p>One of: <code>date_created</code>, <code>menu_order</code>, <code>id</code>, <code>include</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Limit results to friends of a user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>max</code><br />
									</td>
				<td>
											<p>Maximum number of results to return</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>album_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Album.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>activity_id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Media&#039;s Activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>privacy</code><br />
									</td>
				<td>
											<p>Privacy of the media.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>scope</code><br />
									</td>
				<td>
											<p>Scope of the media.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Ensure result set includes specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific media IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>count_total</code><br />
									</td>
				<td>
											<p>Show total count or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Media</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-upload_ids">upload_ids</a></code><br />
									</td>
				<td>
											<p>Media specific IDs.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-activity_id">activity_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the activity.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_id">group_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-album_id">album_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Media Album.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-privacy">privacy</a></code><br />
									</td>
				<td>
											<p>Privacy of the media.</p>
																					<p class="default">
							Default: <code>public</code>
						</p>
																<p>One of: <code>public</code>, <code>loggedin</code>, <code>onlyme</code>, <code>friends</code>, <code>grouponly</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/media</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Media</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>media_ids</code><br />
									</td>
				<td>
											<p>A unique numeric IDs for the media.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/media</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/media</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Media</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/media/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_media record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/media/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the media.</p>
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
		<h2>Update a Bp_Media</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the media.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-group_id">group_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Group.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-album_id">album_id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the Media Album.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-privacy">privacy</a></code><br />
									</td>
				<td>
											<p>Privacy of the media.</p>
																										<p>One of: <code>public</code>, <code>loggedin</code>, <code>onlyme</code>, <code>friends</code>, <code>grouponly</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/media/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Media</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the media.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/media/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/media/&lt;id&gt;</code>
	</div>
</section>
</div>
