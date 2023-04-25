---
---

# Application Passwords

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a application password record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-uuid">
			<td>
				<code>uuid</code><br />
				<span class="type">
					string,
													uuid
									</span>
			</td>
			<td>
				<p>The unique identifier for the application password.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-app_id">
			<td>
				<code>app_id</code><br />
				<span class="type">
					string,
													uuid
									</span>
			</td>
			<td>
				<p>A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The name of the application password.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-password">
			<td>
				<code>password</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The generated password. Only available after adding an application.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-created">
			<td>
				<code>created</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The GMT date the application password was created.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_used">
			<td>
				<code>last_used</code><br />
				<span class="type">
					string or null,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The GMT date the application password was last used.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-last_ip">
			<td>
				<code>last_ip</code><br />
				<span class="type">
					string or null,
													ip
									</span>
			</td>
			<td>
				<p>The IP address the application password was last used by.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Application Password</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/users/&lt;user_id&gt;)/application-passwords</code>

		<p>Query this endpoint to retrieve a specific application password record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/users/&lt;user_id&gt;)/application-passwords</code>
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
		<h2>Create a Application Password</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-app_id">app_id</a></code><br />
									</td>
				<td>
											<p>A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of the application password.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/users/&lt;user_id&gt;)/application-passwords</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Application Password</h2>
			<p>There are no arguments for this endpoint.</p>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/users/&lt;user_id&gt;)/application-passwords</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/users/&lt;user_id&gt;)/application-passwords</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Application Password</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/users/&lt;user_id&gt;)/application-passwords/introspect</code>

		<p>Query this endpoint to retrieve a specific application password record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/users/&lt;user_id&gt;)/application-passwords/introspect</code>
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
		<h2>Retrieve a Application Password</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/users/&lt;user_id&gt;)/application-passwords/&lt;uuid&gt;</code>

		<p>Query this endpoint to retrieve a specific application password record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/users/&lt;user_id&gt;)/application-passwords/&lt;uuid&gt;</code>
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
		<h2>Update a Application Password</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-app_id">app_id</a></code><br />
									</td>
				<td>
											<p>A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>The name of the application password.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/users/&lt;user_id&gt;)/application-passwords/&lt;uuid&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Application Password</h2>
			<p>There are no arguments for this endpoint.</p>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/users/&lt;user_id&gt;)/application-passwords/&lt;uuid&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/users/&lt;user_id&gt;)/application-passwords/&lt;uuid&gt;</code>
	</div>
</section>
</div>
