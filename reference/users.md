---
---

# Users

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a user record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-username">
			<td>
				<code>username</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Login name for the user.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Display name for the user.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-first_name">
			<td>
				<code>first_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>First name for the user.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_name">
			<td>
				<code>last_name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Last name for the user.</p>
								<p class="context">Context: <code>edit</code></p>
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
				<p>The email address for the user.</p>
								<p class="context">Context: <code>edit</code></p>
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
				<p>URL of the user.</p>
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
				<p>Description of the user.</p>
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
				<p>Author URL of the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-locale">
			<td>
				<code>locale</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Locale for the user.</p>
								<p class="context">Context: <code>edit</code></p>
									<p>One of: <code></code>, <code>en_US</code>, <code>de_DE</code></p>
							</td>
		</tr>
			<tr id="schema-nickname">
			<td>
				<code>nickname</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The nickname for the user.</p>
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
				<p>An alphanumeric identifier for the user.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-registered_date">
			<td>
				<code>registered_date</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>Registration date for the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-roles">
			<td>
				<code>roles</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Roles assigned to the user.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-password">
			<td>
				<code>password</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Password for the user (never included).</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-capabilities">
			<td>
				<code>capabilities</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>All capabilities assigned to the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-extra_capabilities">
			<td>
				<code>extra_capabilities</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Any extra capabilities assigned to the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-avatar_urls">
			<td>
				<code>avatar_urls</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Avatar URLs for the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-meta">
			<td>
				<code>meta</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Meta fields.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Users</h2>
		<p>Query this endpoint to retrieve a collection of users. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss-app/learndash/v1/courses/&lt;id&gt;/members</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss-app/learndash/v1/courses/&lt;id&gt;/members</code>
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
											<code>page</code><br />
									</td>
				<td>
											<p>Number of pages you want to retrieve items for.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
</section>
</div>
