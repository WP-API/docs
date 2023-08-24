---
---

# Plugins

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a plugin record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-plugin">
			<td>
				<code>plugin</code>
			</td>
			<td>
				<p>The plugin file.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code>
			</td>
			<td>
				<p>The plugin activation status.</p>
				<p class="type">
					JSON data type: string				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
									<p>One of: <code>inactive</code>, <code>active</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code>
			</td>
			<td>
				<p>The plugin name.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-plugin_uri">
			<td>
				<code>plugin_uri</code>
			</td>
			<td>
				<p>The plugin&#039;s website address.</p>
				<p class="type">
					JSON data type: string,
											Format: uri
									</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code>
			</td>
			<td>
				<p>The plugin author.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-author_uri">
			<td>
				<code>author_uri</code>
			</td>
			<td>
				<p>Plugin author&#039;s website address.</p>
				<p class="type">
					JSON data type: string,
											Format: uri
									</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code>
			</td>
			<td>
				<p>The plugin description.</p>
				<p class="type">
					JSON data type: object				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-version">
			<td>
				<code>version</code>
			</td>
			<td>
				<p>The plugin version number.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-network_only">
			<td>
				<code>network_only</code>
			</td>
			<td>
				<p>Whether the plugin can only be activated network-wide.</p>
				<p class="type">
					JSON data type: boolean				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-requires_wp">
			<td>
				<code>requires_wp</code>
			</td>
			<td>
				<p>Minimum required version of WordPress.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-requires_php">
			<td>
				<code>requires_php</code>
			</td>
			<td>
				<p>Minimum required version of PHP.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-textdomain">
			<td>
				<code>textdomain</code>
			</td>
			<td>
				<p>The plugin&#039;s text domain.</p>
				<p class="type">
					JSON data type: string				</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Plugin</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/plugins</code>

		<p>Query this endpoint to retrieve a specific plugin record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/plugins</code>
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
											<code>search</code><br />
									</td>
				<td>
											<p>Limit results to those matching a string.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limits results to plugins with the given status.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Plugin</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-slug">slug</a></code><br />
									</td>
				<td>
											<p>WordPress.org plugin directory slug.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>The plugin activation status.</p>
																					<p class="default">
							Default: <code>inactive</code>
						</p>
																<p>One of: <code>inactive</code>, <code>active</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/plugins</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Plugin</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/plugins/&lt;plugin&gt;?)</code>

		<p>Query this endpoint to retrieve a specific plugin record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/plugins/&lt;plugin&gt;?)</code>
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
											<code>plugin</code><br />
									</td>
				<td>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Update a Plugin</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-context">context</a></code><br />
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
											<code><a href="#schema-plugin">plugin</a></code><br />
									</td>
				<td>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>The plugin activation status.</p>
																										<p>One of: <code>inactive</code>, <code>active</code></p>
									</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/plugins/&lt;plugin&gt;?)</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Plugin</h2>
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
											<code>plugin</code><br />
									</td>
				<td>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/plugins/&lt;plugin&gt;?)</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/plugins/&lt;plugin&gt;?)</code>
	</div>
</section>
</div>
