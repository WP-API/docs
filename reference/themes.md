---
---

# Themes

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist for a theme object.</p>
<table class="attributes">
			<tr id="schema-theme_supports">
			<td>
				<code>theme_supports</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Features supported by this theme.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
	</table>

	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i https://example.com/wp-json/wp/v2/themes</code>
	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Themes</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>context</code><br />
									</td>
				<td>
											<p>Scope under which the request is made; determines fields present in response.</p>
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
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to themes assigned one or more statuses.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>GET /wp/v2/themes</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/themes</code>
	</div>
</section>
</div>
