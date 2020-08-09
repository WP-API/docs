---
---

# Block Directory Items

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a block directory item record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The block name, in namespace/block-name format.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The block title, in human readable format.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A short description of the block, in human readable format.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The block slug.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-rating">
			<td>
				<code>rating</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The star rating of the block.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-rating_count">
			<td>
				<code>rating_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The number of ratings.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-active_installs">
			<td>
				<code>active_installs</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The number sites that have activated this block.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-author_block_rating">
			<td>
				<code>author_block_rating</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The average rating of blocks published by the same author.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-author_block_count">
			<td>
				<code>author_block_count</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The number of blocks published by the same author.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The WordPress.org username of the block author.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-icon">
			<td>
				<code>icon</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>The block icon.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-last_updated">
			<td>
				<code>last_updated</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date when the block was last updated, in fuzzy human readable format.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
			<tr id="schema-humanized_updated">
			<td>
				<code>humanized_updated</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The date when the block was last updated, in fuzzy human readable format.</p>
								<p class="context">Context: <code>view</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Block Directory Items</h2>
		<p>Query this endpoint to retrieve a collection of block directory items. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/block-directory/search</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/block-directory/search</code>
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
																<p>One of: <code>view</code></p>
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
											<code>term</code><br />
									</td>
				<td>
											<p>Limit result set to blocks matching the search term.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
</section>
</div>
