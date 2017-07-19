---
---

# Statuses

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist for a status object.</p>
<table class="attributes">
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The title for the status.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-private">
			<td>
				<code>private</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether posts with this status should be private.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-protected">
			<td>
				<code>protected</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether posts with this status should be protected.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-public">
			<td>
				<code>public</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether posts of this status should be shown in the front end of the site.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-queryable">
			<td>
				<code>queryable</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether posts with this status should be publicly-queryable.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-show_in_list">
			<td>
				<code>show_in_list</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether to include posts in the edit listing for their post type.</p>
									<p class="read-only">Read only</p>
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
				<p>An alphanumeric identifier for the status.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/statuses</code>
	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Status</h2>
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
	<div class="secondary">
		<h3>Definition</h3>

		<code>GET /wp/v2/statuses</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/statuses</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Status</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>An alphanumeric identifier for the status.</p>
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
	<div class="secondary">
		<h3>Definition</h3>

		<code>GET /wp/v2/statuses/&lt;status&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl http://demo.wp-api.org/wp-json/wp/v2/statuses/&lt;status&gt;</code>
	</div>
</section>
</div>
