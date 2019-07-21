---
---

# Rendered-blocks

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist for a rendered-block object.</p>
<table class="attributes">
			<tr id="schema-rendered">
			<td>
				<code>rendered</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The rendered block.</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i https://example.com/wp-json/wp/v2/block-renderer/&lt;name&gt;</code>
	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Rendered-block</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>name</code><br />
									</td>
				<td>
											<p>Unique registered name for the block.</p>
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
																<p>One of: <code>edit</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>attributes</code><br />
									</td>
				<td>
											<p>Attributes for core/tag-cloud block</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>post_id</code><br />
									</td>
				<td>
											<p>ID of the post context.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>GET /wp/v2/block-renderer/&lt;name&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/block-renderer/&lt;name&gt;</code>
	</div>
</section>
</div>
