---
---

# Learndash_Courses

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a learndash_courses record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the course.</p>
									<p class="read-only">Read only</p>
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
				<p>The date the object was published, in the site&#039;s timezone.</p>
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
				<p>The date the object was published, as GMT.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-guid">
			<td>
				<code>guid</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The url identifier for the course.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
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
				<p>The date for course was last modified, in the site&#039;s timezone.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
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
				<p>The date for course was last modified, as GMT.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric unique identifier for the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The current status of the course.</p>
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
				<p>Post type slug.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the author of the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-menu_order">
			<td>
				<code>menu_order</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Order number of the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-featured_media">
			<td>
				<code>featured_media</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The featured media for the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-lessons_count">
			<td>
				<code>lessons_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Lessons count for the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-has_access">
			<td>
				<code>has_access</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the current user has access for the course or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-purchasable">
			<td>
				<code>purchasable</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the course is purchasable or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-status_bubble">
			<td>
				<code>status_bubble</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Course bubble strip text.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-progress">
			<td>
				<code>progress</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Course progress status.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_activity">
			<td>
				<code>last_activity</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Last activity for the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The title of the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-excerpt">
			<td>
				<code>excerpt</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Short Content of the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-content">
			<td>
				<code>content</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The content of the course.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Learndash_Courses</h2>
		<p>Query this endpoint to retrieve a collection of learndash_courses. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/learndash/courses</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/learndash/courses</code>
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
											<code>after</code><br />
									</td>
				<td>
											<p>Limit response to resources published after a given ISO8601 compliant date.</p>
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
											<p>Ensure result set excludes specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Limit result set to specific IDs.</p>
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
							Default: <code>asc</code>
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
																<p>One of: <code>author</code>, <code>date</code>, <code>id</code>, <code>include</code>, <code>modified</code>, <code>parent</code>, <code>relevance</code>, <code>slug</code>, <code>include_slugs</code>, <code>title</code>, <code>menu_order</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to posts assigned one or more statuses.</p>
																										<p>One of: <code>publish</code>, <code>future</code>, <code>draft</code>, <code>pending</code>, <code>private</code>, <code>trash</code>, <code>auto-draft</code>, <code>inherit</code>, <code>request-pending</code>, <code>request-confirmed</code>, <code>request-failed</code>, <code>request-completed</code>, <code>closed</code>, <code>spam</code>, <code>orphan</code>, <code>hidden</code>, <code>graded</code>, <code>not_graded</code>, <code>any</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>course_category</code><br />
									</td>
				<td>
											<p>Limit result set to all items that have the specified term assigned in the ld_course_category taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>course_category_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to all items except those that have the specified term assigned in the ld_course_category taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>course_tag</code><br />
									</td>
				<td>
											<p>Limit result set to all items that have the specified term assigned in the ld_course_tag taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>course_tag_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to all items except those that have the specified term assigned in the ld_course_tag taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_id</code><br />
									</td>
				<td>
											<p>Limit response to specific buddypress group.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
</div>
