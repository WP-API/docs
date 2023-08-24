---
---

# Global_Styles Revisions

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a global_styles revision record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-author">
			<td>
				<code>author</code>
			</td>
			<td>
				<p>The ID for the author of the revision.</p>
				<p class="type">
					JSON data type: integer				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-date">
			<td>
				<code>date</code>
			</td>
			<td>
				<p>The date the revision was published, in the site&#039;s timezone.</p>
				<p class="type">
					JSON data type: string,
											Format: datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
									</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-date_gmt">
			<td>
				<code>date_gmt</code>
			</td>
			<td>
				<p>The date the revision was published, as GMT.</p>
				<p class="type">
					JSON data type: string,
											Format: datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
									</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-id">
			<td>
				<code>id</code>
			</td>
			<td>
				<p>Unique identifier for the revision.</p>
				<p class="type">
					JSON data type: integer				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-modified">
			<td>
				<code>modified</code>
			</td>
			<td>
				<p>The date the revision was last modified, in the site&#039;s timezone.</p>
				<p class="type">
					JSON data type: string,
											Format: datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
									</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-modified_gmt">
			<td>
				<code>modified_gmt</code>
			</td>
			<td>
				<p>The date the revision was last modified, as GMT.</p>
				<p class="type">
					JSON data type: string,
											Format: datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
									</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code>
			</td>
			<td>
				<p>The ID for the parent of the revision.</p>
				<p class="type">
					JSON data type: integer				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-styles">
			<td>
				<code>styles</code>
			</td>
			<td>
				<p>Global styles.</p>
				<p class="type">
					JSON data type: object				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-settings">
			<td>
				<code>settings</code>
			</td>
			<td>
				<p>Global settings.</p>
				<p class="type">
					JSON data type: object				</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Global_Styles Revisions</h2>
		<p>Query this endpoint to retrieve a collection of global_styles revisions. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/global-styles/&lt;parent&gt;/revisions</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/global-styles/&lt;parent&gt;/revisions</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>The ID for the parent of the revision.</p>
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
			</table>

	</div>
</section>
</div>
