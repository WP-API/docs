---
---

# Nav_Menu_Item Revisions

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a nav_menu_item revision record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-author">
			<td>
				<code>author</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the author of the revision.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-date">
			<td>
				<code>date</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the revision was published, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-date_gmt">
			<td>
				<code>date_gmt</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the revision was published, as GMT.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-guid">
			<td>
				<code>guid</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>GUID for the revision, as it exists in the database.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the revision.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-modified">
			<td>
				<code>modified</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the revision was last modified, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-modified_gmt">
			<td>
				<code>modified_gmt</code><br />
				<span class="type">
					string,
													datetime (<a href="https://core.trac.wordpress.org/ticket/41032">details</a>)
										</span>
			</td>
			<td>
				<p>The date the revision was last modified, as GMT.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the parent of the revision.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-slug">
			<td>
				<code>slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>An alphanumeric identifier for the revision unique to its type.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-title">
			<td>
				<code>title</code><br />
				<span class="type">
					string or object				</span>
			</td>
			<td>
				<p>The title for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-preview_link">
			<td>
				<code>preview_link</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>Preview link for the post.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Nav_Menu_Item Revision</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/menu-items/&lt;id&gt;/autosaves</code>

		<p>Query this endpoint to retrieve a specific nav_menu_item revision record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/menu-items/&lt;id&gt;/autosaves</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>The ID for the parent of the autosave.</p>
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
		<h2>Create a Nav_Menu_Item Revision</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-title">title</a></code><br />
									</td>
				<td>
											<p>The title for the object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-type">type</a></code><br />
									</td>
				<td>
											<p>The family of objects originally represented, such as &quot;post_type&quot; or &quot;taxonomy&quot;.</p>
																										<p>One of: <code>taxonomy</code>, <code>post_type</code>, <code>post_type_archive</code>, <code>custom</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>A named status for the object.</p>
																										<p>One of: <code>publish</code>, <code>future</code>, <code>draft</code>, <code>pending</code>, <code>private</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-attr_title">attr_title</a></code><br />
									</td>
				<td>
											<p>Text for the title attribute of the link element for this menu item.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-classes">classes</a></code><br />
									</td>
				<td>
											<p>Class names for the link element of this menu item.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-description">description</a></code><br />
									</td>
				<td>
											<p>The description of this menu item.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-menu_order">menu_order</a></code><br />
									</td>
				<td>
											<p>The DB ID of the nav_menu_item that is this item&#039;s menu parent, if any, otherwise 0.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-object">object</a></code><br />
									</td>
				<td>
											<p>The type of object originally represented, such as &quot;category&quot;, &quot;post&quot;, or &quot;attachment&quot;.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-object_id">object_id</a></code><br />
									</td>
				<td>
											<p>The database ID of the original object this menu item represents, for example the ID for posts or the term_id for categories.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-target">target</a></code><br />
									</td>
				<td>
											<p>The target attribute of the link element for this menu item.</p>
																										<p>One of: <code>_blank</code>, <code></code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-url">url</a></code><br />
									</td>
				<td>
											<p>The URL to which this menu item points.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-xfn">xfn</a></code><br />
									</td>
				<td>
											<p>The XFN relationship expressed in the link of this menu item.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-menus">menus</a></code><br />
									</td>
				<td>
											<p>The terms assigned to the object in the nav_menu taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-meta">meta</a></code><br />
									</td>
				<td>
											<p>Meta fields.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /wp/v2/menu-items/&lt;id&gt;/autosaves</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Nav_Menu_Item Revision</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/menu-items/&lt;parent&gt;/autosaves/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific nav_menu_item revision record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/menu-items/&lt;parent&gt;/autosaves/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>parent</code><br />
									</td>
				<td>
											<p>The ID for the parent of the autosave.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>The ID for the autosave.</p>
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
</div>
