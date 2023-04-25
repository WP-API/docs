---
---

# Global_Styles

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a global_styles record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>ID of global styles config.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-styles">
			<td>
				<code>styles</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Global styles.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-settings">
			<td>
				<code>settings</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Global settings.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					object or string				</span>
			</td>
			<td>
				<p>Title of the global styles variation.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Global_Styles</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/global-styles/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific global_styles record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/global-styles/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>The id of a template</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Global_Styles</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-styles">styles</a></code><br />
									</td>
				<td>
											<p>Global styles.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-settings">settings</a></code><br />
									</td>
				<td>
											<p>Global settings.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>Title of the global styles variation.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/global-styles/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
