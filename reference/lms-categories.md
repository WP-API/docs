---
---

# Lms Categories

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a lms categories record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the term.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-count">
			<td>
				<code>count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Number of published posts for the term.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML description of the term.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
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
				<p>URL of the term.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML title for the term.</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric identifier for the term unique to its type.</p>
								<p class="context">Context: <code>view</code>, <code>embed</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-icon">
			<td>
				<code>icon</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>icon object containing thumb and full URL of image.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The parent term ID.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-courses">
			<td>
				<code>courses</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Courses for the term.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-meta">
			<td>
				<code>meta</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Meta for the term.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Lms Categories</h2>
		<p>Query this endpoint to retrieve a collection of lms categories. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss-app/learndash/v1/course-categories</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/course-categories</code>
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
							Default: <code>name</code>
						</p>
																<p>One of: <code>date</code>, <code>name</code>, <code>id</code>, <code>slug</code>, <code>term_group</code>, <code>term_id</code>, <code>description</code>, <code>parent</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>course_order</code><br />
									</td>
				<td>
											<p>Order sort attribute ascending or descending of courses.</p>
																					<p class="default">
							Default: <code>desc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>course_orderby</code><br />
									</td>
				<td>
											<p>Sort courses collection by object attribute.</p>
																					<p class="default">
							Default: <code>date</code>
						</p>
																<p>One of: <code>date</code>, <code>id</code>, <code>include</code>, <code>title</code>, <code>slug</code>, <code>relevance</code>, <code>menu_order</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>hide_empty</code><br />
									</td>
				<td>
											<p>Whether to hide terms not assigned to any items.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>slug</code><br />
									</td>
				<td>
											<p>Limit result set to terms with one or more specific slugs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>courses_limit</code><br />
									</td>
				<td>
											<p>Limit result set to courses populated on each category.</p>
																					<p class="default">
							Default: <code>5</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>Limit result set by courses category parent.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>courses_exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific course IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>mycourses</code><br />
									</td>
				<td>
											<p>Limit response to resources which are taken by the current user.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Lms Categories</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss-app/learndash/v1/course-categories/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific lms categories record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/course-categories/&lt;id&gt;</code>
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
