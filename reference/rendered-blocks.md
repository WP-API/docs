---
---

# Rendered Blocks

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a Rendered Block record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
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
</section>

<div><section class="route">
	<div class="primary">
		<h2>Create a Rendered Block</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-name">name</a></code><br />
									</td>
				<td>
											<p>Unique registered name for the block.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-context">context</a></code><br />
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
											<code><a href="#schema-attributes">attributes</a></code><br />
									</td>
				<td>
											<p>Attributes for the block</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-post_id">post_id</a></code><br />
									</td>
				<td>
											<p>ID of the post context.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/block-renderer/&lt;name&gt;</code>
	</div>
</section>
</div>
