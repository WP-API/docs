---
---

# Site Settings

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a Site Setting record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Site title.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Site tagline.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-url">
			<td>
				<code>url</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>Site URL.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-email">
			<td>
				<code>email</code><br />
				<span class="type">
					string,
													email
									</span>
			</td>
			<td>
				<p>This address is used for admin purposes, like new user notification.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-timezone">
			<td>
				<code>timezone</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A city in the same timezone as you.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-date_format">
			<td>
				<code>date_format</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A date format for all date strings.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-time_format">
			<td>
				<code>time_format</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A time format for all time strings.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-start_of_week">
			<td>
				<code>start_of_week</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A day number of the week that the week should start on.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-language">
			<td>
				<code>language</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>WordPress locale code.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-use_smilies">
			<td>
				<code>use_smilies</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Convert emoticons like :-) and :-P to graphics on display.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-default_category">
			<td>
				<code>default_category</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Default post category.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-default_post_format">
			<td>
				<code>default_post_format</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Default post format.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-posts_per_page">
			<td>
				<code>posts_per_page</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Blog pages show at most.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-show_on_front">
			<td>
				<code>show_on_front</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>What to show on the front page</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-page_on_front">
			<td>
				<code>page_on_front</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the page that should be displayed on the front page</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-page_for_posts">
			<td>
				<code>page_for_posts</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the page that should display the latest posts</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-default_ping_status">
			<td>
				<code>default_ping_status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Allow link notifications from other blogs (pingbacks and trackbacks) on new articles.</p>
								<p class="context">Context: <code></code></p>
									<p>One of: <code>open</code>, <code>closed</code></p>
							</td>
		</tr>
			<tr id="schema-default_comment_status">
			<td>
				<code>default_comment_status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Allow people to submit comments on new posts.</p>
								<p class="context">Context: <code></code></p>
									<p>One of: <code>open</code>, <code>closed</code></p>
							</td>
		</tr>
			<tr id="schema-site_logo">
			<td>
				<code>site_logo</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Site logo.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-site_icon">
			<td>
				<code>site_icon</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Site icon.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Site Setting</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/settings</code>

		<p>Query this endpoint to retrieve a specific Site Setting record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/settings</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Site Setting</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>Site title.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>Site tagline.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-url">url</a></code><br />
									</td>
				<td>
											<p>Site URL.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-email">email</a></code><br />
									</td>
				<td>
											<p>This address is used for admin purposes, like new user notification.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-timezone">timezone</a></code><br />
									</td>
				<td>
											<p>A city in the same timezone as you.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-date_format">date_format</a></code><br />
									</td>
				<td>
											<p>A date format for all date strings.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-time_format">time_format</a></code><br />
									</td>
				<td>
											<p>A time format for all time strings.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-start_of_week">start_of_week</a></code><br />
									</td>
				<td>
											<p>A day number of the week that the week should start on.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-language">language</a></code><br />
									</td>
				<td>
											<p>WordPress locale code.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-use_smilies">use_smilies</a></code><br />
									</td>
				<td>
											<p>Convert emoticons like :-) and :-P to graphics on display.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-default_category">default_category</a></code><br />
									</td>
				<td>
											<p>Default post category.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-default_post_format">default_post_format</a></code><br />
									</td>
				<td>
											<p>Default post format.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-posts_per_page">posts_per_page</a></code><br />
									</td>
				<td>
											<p>Blog pages show at most.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-show_on_front">show_on_front</a></code><br />
									</td>
				<td>
											<p>What to show on the front page</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-page_on_front">page_on_front</a></code><br />
									</td>
				<td>
											<p>The ID of the page that should be displayed on the front page</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-page_for_posts">page_for_posts</a></code><br />
									</td>
				<td>
											<p>The ID of the page that should display the latest posts</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-default_ping_status">default_ping_status</a></code><br />
									</td>
				<td>
											<p>Allow link notifications from other blogs (pingbacks and trackbacks) on new articles.</p>
																										<p>One of: <code>open</code>, <code>closed</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-default_comment_status">default_comment_status</a></code><br />
									</td>
				<td>
											<p>Allow people to submit comments on new posts.</p>
																										<p>One of: <code>open</code>, <code>closed</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-site_logo">site_logo</a></code><br />
									</td>
				<td>
											<p>Site logo.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-site_icon">site_icon</a></code><br />
									</td>
				<td>
											<p>Site icon.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/settings</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
