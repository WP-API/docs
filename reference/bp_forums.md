---
---

# Bp_Forums

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_forums record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the Forum.</p>
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
				<p>The url identifier for the forum.</p>
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
				<p>The date for forum was last modified, in the site&#039;s timezone.</p>
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
				<p>The date for forum was last modified, as GMT.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-password">
			<td>
				<code>password</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A password to protect access to the post.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric unique identifier for the forum.</p>
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
				<p>The current status of the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
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
				<p>The permalink to this forum on the site.</p>
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
				<p>The ID for the author of the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>ID of the parent forum.</p>
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
				<p>Menu order for the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-sticky">
			<td>
				<code>sticky</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the Forum is sticky or not.</p>
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
				<p>Featured Image URLs for the forum.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-total_topic_count">
			<td>
				<code>total_topic_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Total topics count in the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_topic_id">
			<td>
				<code>last_topic_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Recently edited topic id into the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-total_reply_count">
			<td>
				<code>total_reply_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Total replies count in the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_reply_id">
			<td>
				<code>last_reply_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Recently posted reply id into the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_active_author">
			<td>
				<code>last_active_author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Last updated the user&#039;s ID in forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_active_time">
			<td>
				<code>last_active_time</code><br />
				<span class="type">
					date-time				</span>
			</td>
			<td>
				<p>Last updated time for the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_closed">
			<td>
				<code>is_closed</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the Forum is closed or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_forum_category">
			<td>
				<code>is_forum_category</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the Forum is assigned as category or not.</p>
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
				<p>The title of the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-short_content">
			<td>
				<code>short_content</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Short Content of the forum.</p>
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
				<p>The content of the forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-group">
			<td>
				<code>group</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Forum&#039;s group.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-action_states">
			<td>
				<code>action_states</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Available actions with current user for Forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_permission">
			<td>
				<code>user_permission</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Current user&#039;s permission with the Forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-sub_forums">
			<td>
				<code>sub_forums</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Child forums with current forum.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Forums</h2>
		<p>Query this endpoint to retrieve a collection of bp_forums. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/forums</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/forums</code>
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
							Default: <code>15</code>
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
											<p>Author ID, or comma-separated list of IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>author_exclude</code><br />
									</td>
				<td>
											<p>An array of author IDs not to query from.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>An array of forums IDs not to retrieve.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>An array of forums IDs to retrieve.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>offset</code><br />
									</td>
				<td>
											<p>The number of forums to offset before retrieval.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>order</code><br />
									</td>
				<td>
											<p>Designates ascending or descending order of forums.</p>
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
											<p>Sort retrieved forums by parameter.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to forums assigned a specific status.</p>
																					<p class="default">
							Default: <code>
Notice: Array to string conversion in /Users/hardip/LocalSites/developer/app/public/docs/vendor/twig/twig/src/Environment.php(358) : eval()'d code on line 97
Array</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>Forum ID to retrieve child pages for. Use 0 to only retrieve top-level forums.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>subscriptions</code><br />
									</td>
				<td>
											<p>Retrieve subscribed forums by user.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Forums</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/forums/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_forums record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/forums/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the forum.</p>
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
		<h2>Update a Bp_Forums</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the forum.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/forums/subscribe/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
