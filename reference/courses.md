---
---

# Courses

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a course record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-featured_media">
			<td>
				<code>featured_media</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Feature media object containing thumb and full URL of the image.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-cover_media">
			<td>
				<code>cover_media</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Cover media object containing thumb and full URL of the image.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-menu_order">
			<td>
				<code>menu_order</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The order of the object in relation to other object of its type.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-categories">
			<td>
				<code>categories</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The terms assigned to the object in the categories taxonomy.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-enrolled_members">
			<td>
				<code>enrolled_members</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Total count of enrolled member in course.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-certificate">
			<td>
				<code>certificate</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Certificate Details</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-tags">
			<td>
				<code>tags</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The terms assigned to the object in the tags taxonomy.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-module">
			<td>
				<code>module</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The terms assigned to the object in the module taxonomy.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-featured">
			<td>
				<code>featured</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not the object should be treated as featured.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-materials">
			<td>
				<code>materials</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Materials for the object.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-purchasable">
			<td>
				<code>purchasable</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not object is purchasable</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-offline_disabled">
			<td>
				<code>offline_disabled</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Disable offline support</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-price">
			<td>
				<code>price</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The price of the object</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group">
			<td>
				<code>group</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>BuddyPress group for the object.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-forum">
			<td>
				<code>forum</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>bbpress forum for the object.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_closed">
			<td>
				<code>is_closed</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether object is closed or not.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-can_enroll">
			<td>
				<code>can_enroll</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Whether object is return user can enrolled.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-has_course_access">
			<td>
				<code>has_course_access</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user have the object access.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-has_content_access">
			<td>
				<code>has_content_access</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user have the object content access.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-hide_content_table">
			<td>
				<code>hide_content_table</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user have the access of object content access.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-progression">
			<td>
				<code>progression</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The progression % of user for the object</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-points">
			<td>
				<code>points</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Point for the object</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-duration">
			<td>
				<code>duration</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The time duration for the object</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-quizzes">
			<td>
				<code>quizzes</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The quizzes list which has access of the object</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-lessons">
			<td>
				<code>lessons</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The lessons list which has access of the object</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-completed">
			<td>
				<code>completed</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>The object is completed by current user or not.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-quiz_completed">
			<td>
				<code>quiz_completed</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>The object Quizzes is completed by current user or not.</p>
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code></p>
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
								<p class="context">Context: <code>view</code>, <code>single</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-show_start">
			<td>
				<code>show_start</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user has started the process.</p>
								<p class="context">Context: <code>single</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_activity_time">
			<td>
				<code>last_activity_time</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Course last activity time.</p>
								<p class="context">Context: <code>single</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Courses</h2>
		<p>Query this endpoint to retrieve a collection of courses. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss-app/learndash/v1/courses</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/courses</code>
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
																<p>One of: <code>view</code>, <code>single</code>, <code>embed</code>, <code>edit</code></p>
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
																<p>One of: <code>date</code>, <code>id</code>, <code>include</code>, <code>title</code>, <code>slug</code>, <code>relevance</code>, <code>my_progress</code>, <code>menu_order</code></p>
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
					<tr>
				<td>
											<code>categories</code><br />
									</td>
				<td>
											<p>Limit result set to all items that have the specified term assigned in the category.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>categories_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to all items that have the specified term assigned in the category.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>tags</code><br />
									</td>
				<td>
											<p>Limit result set to all items that have the specified term assigned in the tag.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>tags_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to all items except those that have the specified term assigned in the tag.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>mycourses</code><br />
									</td>
				<td>
											<p>Limit response to resources which is taken by current user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>group_id</code><br />
									</td>
				<td>
											<p>Limit response to resources that are connected with a group.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Course</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss-app/learndash/v1/courses/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific course record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/courses/&lt;id&gt;</code>
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
							Default: <code>single</code>
						</p>
																<p>One of: <code>view</code>, <code>single</code>, <code>embed</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Course</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss-app/learndash/v1/courses/&lt;id&gt;/details</code>

		<p>Query this endpoint to retrieve a specific course record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/courses/&lt;id&gt;/details</code>
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
																<p>One of: <code>view</code>, <code>single</code>, <code>embed</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Course</h2>
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
																<p>One of: <code>view</code>, <code>single</code>, <code>embed</code>, <code>edit</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss-app/learndash/v1/courses/&lt;id&gt;/enroll</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
