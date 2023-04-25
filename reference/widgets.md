---
---

# Widgets

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a widget record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Unique identifier for the widget.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-id_base">
			<td>
				<code>id_base</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The type of the widget. Corresponds to ID in widget-types endpoint.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-sidebar">
			<td>
				<code>sidebar</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The sidebar the widget belongs to.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-rendered">
			<td>
				<code>rendered</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML representation of the widget.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-rendered_form">
			<td>
				<code>rendered_form</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML representation of the widget admin form.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-instance">
			<td>
				<code>instance</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Instance settings of the widget, if supported.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-form_data">
			<td>
				<code>form_data</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only.</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Widget</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/widgets</code>

		<p>Query this endpoint to retrieve a specific widget record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/widgets</code>
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
											<code>sidebar</code><br />
									</td>
				<td>
											<p>The sidebar to return widgets for.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Widget</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the widget.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-id_base">id_base</a></code><br />
									</td>
				<td>
											<p>The type of the widget. Corresponds to ID in widget-types endpoint.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-sidebar">sidebar</a></code><br />
									</td>
				<td>
											<p>The sidebar the widget belongs to.</p>
																<p class="required">
							Required: 1
						</p>
																<p class="default">
							Default: <code>wp_inactive_widgets</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-instance">instance</a></code><br />
									</td>
				<td>
											<p>Instance settings of the widget, if supported.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-form_data">form_data</a></code><br />
									</td>
				<td>
											<p>URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/widgets</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Widget</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/widgets/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific widget record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/widgets/&lt;id&gt;</code>
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
		<h2>Update a Widget</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the widget.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-id_base">id_base</a></code><br />
									</td>
				<td>
											<p>The type of the widget. Corresponds to ID in widget-types endpoint.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-sidebar">sidebar</a></code><br />
									</td>
				<td>
											<p>The sidebar the widget belongs to.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-instance">instance</a></code><br />
									</td>
				<td>
											<p>Instance settings of the widget, if supported.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-form_data">form_data</a></code><br />
									</td>
				<td>
											<p>URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/widgets/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Widget</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Whether to force removal of the widget, or move it to the inactive sidebar.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/widgets/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/widgets/&lt;id&gt;</code>
	</div>
</section>
</div>
