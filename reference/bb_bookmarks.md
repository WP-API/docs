---
---

# Bb_Bookmarks

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bb_bookmark record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the bookmark.</p>
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
				<p>The ID of the user who created the bookmark.</p>
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
				<p>The type of the bookmark.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>post</code></p>
							</td>
		</tr>
			<tr id="schema-item_id">
			<td>
				<code>item_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of bookmark item.</p>
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
				<p>The ID of the current blog site.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date">
			<td>
				<code>date</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the Bookmark was created, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-date_gmt">
			<td>
				<code>date_gmt</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the Bookmark was created, in the GMT timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Whether to check the bookmark is active or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-item_title">
			<td>
				<code>item_title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Bookmark item title.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-item_featured_image">
			<td>
				<code>item_featured_image</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Feature image URLs of the item.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Author name of item.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-link">
			<td>
				<code>link</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Bookmark item link.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bb_Bookmarks</h2>
		<p>Query this endpoint to retrieve a collection of bb_bookmarks. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/bookmarks</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/bookmarks</code>
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
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific IDs.</p>
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
											<code>order_by</code><br />
									</td>
				<td>
											<p>Order by a specific parameter.</p>
																					<p class="default">
							Default: <code>date_recorded</code>
						</p>
																<p>One of: <code>id</code>, <code>type</code>, <code>item_id</code>, <code>date_recorded</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>blog_id</code><br />
									</td>
				<td>
											<p>The ID of the current blog site.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Limit result set to items created by a specific user (ID).</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific bookmark type.</p>
																										<p>One of: <code>post</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>item_id</code><br />
									</td>
				<td>
											<p>Limit result set to items with a specific prime association ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to active bookmarks or not.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
																<p>One of: <code>0</code>, <code>1</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bb_Bookmark</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>The ID of the user who created the bookmark.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-type">type</a></code><br />
									</td>
				<td>
											<p>The type of the bookmark.</p>
																<p class="required">
							Required: 1
						</p>
																					<p>One of: <code>post</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-item_id">item_id</a></code><br />
									</td>
				<td>
											<p>The ID of bookmark item.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-blog_id">blog_id</a></code><br />
									</td>
				<td>
											<p>The ID of the current blog site.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>Whether to check the bookmark is active or not.</p>
																<p class="required">
							Required: 1
						</p>
																<p class="default">
							Default: <code>1</code>
						</p>
																<p>One of: <code>0</code>, <code>1</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/bookmarks</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bb_Bookmark</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>The ID of the user who created the bookmark.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>The type of the bookmark.</p>
																										<p>One of: <code>post</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>item_id</code><br />
									</td>
				<td>
											<p>The ID of bookmark item.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>blog_id</code><br />
									</td>
				<td>
											<p>The ID of the current blog site.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Whether to check the bookmark is active or not.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/bookmarks</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/bookmarks</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bb_Bookmark</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/bookmarks/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bb_bookmark record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/bookmarks/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the bookmark.</p>
																								</td>
			</tr>
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
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bb_Bookmark</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the bookmark.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>The ID of the user who created the bookmark.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>The type of the bookmark.</p>
																										<p>One of: <code>post</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>item_id</code><br />
									</td>
				<td>
											<p>The ID of bookmark item.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>blog_id</code><br />
									</td>
				<td>
											<p>The ID of the current blog site.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Whether to check the bookmark is active or not.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/bookmarks/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/bookmarks/&lt;id&gt;</code>
	</div>
</section>
</div>
