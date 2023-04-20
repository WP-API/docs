---
---

# Assignments

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a assignment record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The title for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-content">
			<td>
				<code>content</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The content for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
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
				<p>The date the object was published, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
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
				<p>The date the object was published, as GMT.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-modified">
			<td>
				<code>modified</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the object was last modified, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-modified_gmt">
			<td>
				<code>modified_gmt</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the object was last modified, as GMT.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-link">
			<td>
				<code>link</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>URL to the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric identifier for the object unique to its type.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the author of the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-excerpt">
			<td>
				<code>excerpt</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The excerpt for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-can_delete">
			<td>
				<code>can_delete</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>User can delete his/her assignment.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-file_link">
			<td>
				<code>file_link</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Assignment file link.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_comment">
			<td>
				<code>can_comment</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>User can create comment.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-comments_count">
			<td>
				<code>comments_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>how much comment exists in this assignment.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-video">
			<td>
				<code>video</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>video for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-assignment_status">
			<td>
				<code>assignment_status</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Assignment status with necessary data.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-course">
			<td>
				<code>course</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Assignment associated course id.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-lesson">
			<td>
				<code>lesson</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Assignment associated lesson id.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-topic">
			<td>
				<code>topic</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Assignment associated topic id.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-error_message">
			<td>
				<code>error_message</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Error message for this object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Assignments</h2>
		<p>Query this endpoint to retrieve a collection of assignments. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss-app/learndash/v1/assignments/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/assignments/&lt;id&gt;</code>
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
											<code>search</code><br />
									</td>
				<td>
											<p>Limit results to those matching a string.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the lesson or topic.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code>type</code><br />
									</td>
				<td>
											<p>Which type assignment fetching.</p>
																<p class="required">
							Required: 1
						</p>
																<p class="default">
							Default: <code>lesson</code>
						</p>
																<p>One of: <code>lesson</code>, <code>topic</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>course_id</code><br />
									</td>
				<td>
											<p>Assignment course id.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code>after</code><br />
									</td>
				<td>
											<p>Limit response to resources published after a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author</code><br />
									</td>
				<td>
											<p>Limit result set to posts assigned to specific authors.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author_exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes posts assigned to specific authors.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>before</code><br />
									</td>
				<td>
											<p>Limit response to resources published before a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific ids.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Limit result set to specific ids.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>offset</code><br />
									</td>
				<td>
											<p>Offset the result set by a specific number of items.</p>
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
											<p>Sort collection by object attribute.</p>
																					<p class="default">
							Default: <code>date</code>
						</p>
																<p>One of: <code>date</code>, <code>id</code>, <code>include</code>, <code>title</code>, <code>slug</code>, <code>relevance</code>, <code>menu_order</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>Limit result set to those of particular parent IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>parent_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to all items except those of a particular parent ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>slug</code><br />
									</td>
				<td>
											<p>Limit result set to posts with a specific slug.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>filter</code><br />
									</td>
				<td>
											<p>Use WP Query arguments to modify the response; private query vars require appropriate authorization.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Assignment</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss-app/learndash/v1/assignments/&lt;id&gt;/&lt;assignment_id&gt;</code>

		<p>Query this endpoint to retrieve a specific assignment record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/assignments/&lt;id&gt;/&lt;assignment_id&gt;</code>
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
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Assignment</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the reply.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss-app/learndash/v1/assignments/&lt;id&gt;/&lt;assignment_id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss-app/learndash/v1/assignments/&lt;id&gt;/&lt;assignment_id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Assignment</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-context">context</a></code><br />
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
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss-app/learndash/v1/assignments/&lt;id&gt;/upload</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
