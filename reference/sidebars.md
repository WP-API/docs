---
---

# Sidebars

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a sidebar record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>ID of sidebar.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Unique name identifying the sidebar.</p>
									<p class="read-only">Read only</p>
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
				<p>Description of sidebar.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-class">
			<td>
				<code>class</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Extra CSS class to assign to the sidebar in the Widgets interface.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-before_widget">
			<td>
				<code>before_widget</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML content to prepend to each widget&#039;s HTML output when assigned to this sidebar. Default is an opening list item element.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-after_widget">
			<td>
				<code>after_widget</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML content to append to each widget&#039;s HTML output when assigned to this sidebar. Default is a closing list item element.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-before_title">
			<td>
				<code>before_title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML content to prepend to the sidebar title when displayed. Default is an opening h2 element.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-after_title">
			<td>
				<code>after_title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML content to append to the sidebar title when displayed. Default is a closing h2 element.</p>
									<p class="read-only">Read only</p>
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
				<p>Status of sidebar.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
									<p>One of: <code>active</code>, <code>inactive</code></p>
							</td>
		</tr>
			<tr id="schema-widgets">
			<td>
				<code>widgets</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Nested widgets.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Sidebar</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/sidebars</code>

		<p>Query this endpoint to retrieve a specific sidebar record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/sidebars</code>
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
		<h2>Retrieve a Sidebar</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/sidebars/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific sidebar record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/sidebars/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>The id of a registered sidebar</p>
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
		<h2>Update a Sidebar</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-widgets">widgets</a></code><br />
									</td>
				<td>
											<p>Nested widgets.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/sidebars/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
