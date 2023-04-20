---
---

# Bp_Document_Folders

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_document_folder record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the Document.</p>
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
				<p>Unique identifier for the document object.</p>
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
				<p>The ID for the author of the document.</p>
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
				<p>The Document title.</p>
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
				<p>The Document description.</p>
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
				<p>Whether it is a document or folder.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-folder_id">
			<td>
				<code>folder_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the parent Folder.</p>
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
				<p>Based on this hide like/comment button for document activity comments.</p>
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
				<p>Privacy of the document.</p>
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
				<p>The date the document was created, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date_modified">
			<td>
				<code>date_modified</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the document was modified, in the site&#039;s timezone.</p>
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
				<p>Group name associate with the document.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group_status">
			<td>
				<code>group_status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Group status associate with the document.</p>
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
				<p>Visibility of the document.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-count">
			<td>
				<code>count</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Count of the child documents and folders of the folder.</p>
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
				<p>Download URL for the document.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-extension">
			<td>
				<code>extension</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Document file extension.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-extension_description">
			<td>
				<code>extension_description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Document file description.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-svg_icon">
			<td>
				<code>svg_icon</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Document Icon based on the extension.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-filename">
			<td>
				<code>filename</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Full name of the document file with extension.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-size">
			<td>
				<code>size</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Size of the uploaded document.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-msg_preview">
			<td>
				<code>msg_preview</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Message preview for the document.</p>
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
				<p>Wordpress Document Data.</p>
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
				<p>The User&#039;s nice name to create a document.</p>
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
				<p>The User&#039;s login name to create a document.</p>
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
				<p>The User&#039;s display name to create a document.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Document_Folders</h2>
		<p>Query this endpoint to retrieve a collection of bp_document_folders. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/document/folder</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/document/folder</code>
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
											<p>Order folders by which attribute.</p>
																					<p class="default">
							Default: <code>date_created</code>
						</p>
																<p>One of: <code>id</code>, <code>title</code>, <code>date_created</code>, <code>user_id</code>, <code>group_id</code>, <code>privacy</code></p>
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
											<code>user_id</code><br />
									</td>
				<td>
											<p>Limit results to a specific user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the parent Folder.</p>
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
											<code>privacy</code><br />
									</td>
				<td>
											<p>Privacy of the folder.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Ensure result set includes specific folder IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific folder IDs.</p>
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
		<h2>Create a Bp_Document_Folder</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>Folder Title.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the parent folder.</p>
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
											<code><a href="#schema-privacy">privacy</a></code><br />
									</td>
				<td>
											<p>Privacy of the folder.</p>
																					<p class="default">
							Default: <code>public</code>
						</p>
																<p>One of: <code>public</code>, <code>loggedin</code>, <code>friends</code>, <code>onlyme</code>, <code>grouponly</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/document/folder</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Document_Folder</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/document/folder/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_document_folder record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/document/folder/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the folder.</p>
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
		<h2>Update a Bp_Document_Folder</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the folder</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>Folder Title.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the parent folder.</p>
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
											<code><a href="#schema-privacy">privacy</a></code><br />
									</td>
				<td>
											<p>Privacy of the folder.</p>
																										<p>One of: <code>public</code>, <code>loggedin</code>, <code>friends</code>, <code>onlyme</code>, <code>grouponly</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/document/folder/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Document_Folder</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the folder.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/document/folder/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/document/folder/&lt;id&gt;</code>
	</div>
</section>
</div>
