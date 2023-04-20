---
---

# Quizs

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a quiz record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
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
			<tr id="schema-featured_media">
			<td>
				<code>featured_media</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Feature media object containing thumb and full URL of image.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-mode">
			<td>
				<code>mode</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Mode of the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-course">
			<td>
				<code>course</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The Course id for the object</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-lesson">
			<td>
				<code>lesson</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The Lesson id for the object</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-topic">
			<td>
				<code>topic</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The Topic id for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
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
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-can_take_again">
			<td>
				<code>can_take_again</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether or not user can take the object again.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-form">
			<td>
				<code>form</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Pre request form for object.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-settings">
			<td>
				<code>settings</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Settings for object.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-quiz_resume_activity">
			<td>
				<code>quiz_resume_activity</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Quiz activity for object shows when quiz saving feature enable.</p>
								<p class="context">Context: <code>view</code></p>
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
			<tr id="schema-materials">
			<td>
				<code>materials</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Materials for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Quizs</h2>
		<p>Query this endpoint to retrieve a collection of quizs. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss-app/learndash/v1/quiz</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/quiz</code>
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
		<h2>Retrieve a Quiz</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss-app/learndash/v1/quiz/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific quiz record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/quiz/&lt;id&gt;</code>
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
		<h2>Retrieve a Quiz</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss-app/learndash/v1/quiz/user_quizdata</code>

		<p>Query this endpoint to retrieve a specific quiz record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/quiz/user_quizdata</code>
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
</div>
