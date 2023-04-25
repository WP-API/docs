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

		<code>GET /wp/v2/users</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/users</code>
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
											<p>Sort collection by user attribute.</p>
																					<p class="default">
							Default: <code>name</code>
						</p>
																<p>One of: <code>id</code>, <code>include</code>, <code>name</code>, <code>registered_date</code>, <code>slug</code>, <code>include_slugs</code>, <code>email</code>, <code>url</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>slug</code><br />
									</td>
				<td>
											<p>Limit result set to users with one or more specific slugs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>roles</code><br />
									</td>
				<td>
											<p>Limit result set to users matching at least one specific role provided. Accepts csv list or single role.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>capabilities</code><br />
									</td>
				<td>
											<p>Limit result set to users matching at least one specific capability provided. Accepts csv list or single capability.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>who</code><br />
									</td>
				<td>
											<p>Limit result set to users who are considered authors.</p>
																										<p>One of: <code>authors</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>has_published_posts</code><br />
									</td>
				<td>
											<p>Limit result set to users who have published posts.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a User</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-username">username</a></code><br />
									</td>
				<td>
											<p>Login name for the user.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>Display name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-first_name">first_name</a></code><br />
									</td>
				<td>
											<p>First name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-last_name">last_name</a></code><br />
									</td>
				<td>
											<p>Last name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-email">email</a></code><br />
									</td>
				<td>
											<p>The email address for the user.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-url">url</a></code><br />
									</td>
				<td>
											<p>URL of the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>Description of the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-locale">locale</a></code><br />
									</td>
				<td>
											<p>Locale for the user.</p>
																										<p>One of: <code></code>, <code>en_US</code>, <code>de_DE</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-nickname">nickname</a></code><br />
									</td>
				<td>
											<p>The nickname for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-slug">slug</a></code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-roles">roles</a></code><br />
									</td>
				<td>
											<p>Roles assigned to the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-password">password</a></code><br />
									</td>
				<td>
											<p>Password for the user (never included).</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-meta">meta</a></code><br />
									</td>
				<td>
											<p>Meta fields.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/users</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a User</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/users/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific user record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/users/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the user.</p>
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
		<h2>Update a User</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-username">username</a></code><br />
									</td>
				<td>
											<p>Login name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>Display name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-first_name">first_name</a></code><br />
									</td>
				<td>
											<p>First name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-last_name">last_name</a></code><br />
									</td>
				<td>
											<p>Last name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-email">email</a></code><br />
									</td>
				<td>
											<p>The email address for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-url">url</a></code><br />
									</td>
				<td>
											<p>URL of the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>Description of the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-locale">locale</a></code><br />
									</td>
				<td>
											<p>Locale for the user.</p>
																										<p>One of: <code></code>, <code>en_US</code>, <code>de_DE</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-nickname">nickname</a></code><br />
									</td>
				<td>
											<p>The nickname for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-slug">slug</a></code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-roles">roles</a></code><br />
									</td>
				<td>
											<p>Roles assigned to the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-password">password</a></code><br />
									</td>
				<td>
											<p>Password for the user (never included).</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-meta">meta</a></code><br />
									</td>
				<td>
											<p>Meta fields.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/users/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a User</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Required to be true, as users do not support trashing.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>reassign</code><br />
									</td>
				<td>
											<p>Reassign the deleted user&#039;s posts and links to this user ID.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/users/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/users/&lt;id&gt;</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a User</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/users/me</code>

		<p>Query this endpoint to retrieve a specific user record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/users/me</code>
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
		<h2>Update a User</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-username">username</a></code><br />
									</td>
				<td>
											<p>Login name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>Display name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-first_name">first_name</a></code><br />
									</td>
				<td>
											<p>First name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-last_name">last_name</a></code><br />
									</td>
				<td>
											<p>Last name for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-email">email</a></code><br />
									</td>
				<td>
											<p>The email address for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-url">url</a></code><br />
									</td>
				<td>
											<p>URL of the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>Description of the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-locale">locale</a></code><br />
									</td>
				<td>
											<p>Locale for the user.</p>
																										<p>One of: <code></code>, <code>en_US</code>, <code>de_DE</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-nickname">nickname</a></code><br />
									</td>
				<td>
											<p>The nickname for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-slug">slug</a></code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-roles">roles</a></code><br />
									</td>
				<td>
											<p>Roles assigned to the user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-password">password</a></code><br />
									</td>
				<td>
											<p>Password for the user (never included).</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-meta">meta</a></code><br />
									</td>
				<td>
											<p>Meta fields.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/users/me</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a User</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Required to be true, as users do not support trashing.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>reassign</code><br />
									</td>
				<td>
											<p>Reassign the deleted user&#039;s posts and links to this user ID.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/users/me</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/users/me</code>
	</div>
</section>
</div>
