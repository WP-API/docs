---
---

# Nav_Menu_Items

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a nav_menu_item record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
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
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Unique identifier for the object.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-type_label">
			<td>
				<code>type_label</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The singular label used to describe this type of menu item.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The family of objects originally represented, such as &quot;post_type&quot; or &quot;taxonomy&quot;.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
									<p>One of: <code>taxonomy</code>, <code>post_type</code>, <code>post_type_archive</code>, <code>custom</code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A named status for the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
									<p>One of: <code>publish</code>, <code>future</code>, <code>draft</code>, <code>pending</code>, <code>private</code></p>
							</td>
		</tr>
			<tr id="schema-parent">
			<td>
				<code>parent</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID for the parent of the object.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-attr_title">
			<td>
				<code>attr_title</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Text for the title attribute of the link element for this menu item.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-classes">
			<td>
				<code>classes</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Class names for the link element of this menu item.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The description of this menu item.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-menu_order">
			<td>
				<code>menu_order</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The DB ID of the nav_menu_item that is this item&#039;s menu parent, if any, otherwise 0.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-object">
			<td>
				<code>object</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The type of object originally represented, such as &quot;category&quot;, &quot;post&quot;, or &quot;attachment&quot;.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-object_id">
			<td>
				<code>object_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The database ID of the original object this menu item represents, for example the ID for posts or the term_id for categories.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-target">
			<td>
				<code>target</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The target attribute of the link element for this menu item.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
									<p>One of: <code>_blank</code>, <code></code></p>
							</td>
		</tr>
			<tr id="schema-url">
			<td>
				<code>url</code><br />
				<span class="type">
					string,
													uri
										</span>
			</td>
			<td>
				<p>The URL to which this menu item points.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-xfn">
			<td>
				<code>xfn</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>The XFN relationship expressed in the link of this menu item.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-invalid">
			<td>
				<code>invalid</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the menu item represents an object that no longer exists.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>view</code>, <code>edit</code>, <code>embed</code></p>
							</td>
		</tr>
			<tr id="schema-menus">
			<td>
				<code>menus</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The terms assigned to the object in the nav_menu taxonomy.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-meta">
			<td>
				<code>meta</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Meta fields.</p>
								<p class="context">Context: <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Nav_Menu_Items</h2>
		<p>Query this endpoint to retrieve a collection of nav_menu_items. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /wp/v2/menu-items</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/wp/v2/menu-items</code>
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
							Default: <code>100</code>
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
											<code>after</code><br />
									</td>
				<td>
											<p>Limit response to posts published after a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>modified_after</code><br />
									</td>
				<td>
											<p>Limit response to posts modified after a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>before</code><br />
									</td>
				<td>
											<p>Limit response to posts published before a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>modified_before</code><br />
									</td>
				<td>
											<p>Limit response to posts modified before a given ISO8601 compliant date.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>exclude</code><br />
									</td>
				<td>
											<p>Ensure result set excludes specific IDs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>include</code><br />
									</td>
				<td>
											<p>Limit result set to specific IDs.</p>
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
					<tr>
				<td>
											<code>order</code><br />
									</td>
				<td>
											<p>Order sort attribute ascending or descending.</p>
																					<p class="default">
							Default: <code>asc</code>
						</p>
																<p>One of: <code>asc</code>, <code>desc</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>orderby</code><br />
									</td>
				<td>
											<p>Sort collection by object attribute.</p>
																					<p class="default">
							Default: <code>menu_order</code>
						</p>
																<p>One of: <code>author</code>, <code>date</code>, <code>id</code>, <code>include</code>, <code>modified</code>, <code>parent</code>, <code>relevance</code>, <code>slug</code>, <code>include_slugs</code>, <code>title</code>, <code>menu_order</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>search_columns</code><br />
									</td>
				<td>
											<p>Array of column names to be searched.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>slug</code><br />
									</td>
				<td>
											<p>Limit result set to posts with one or more specific slugs.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>status</code><br />
									</td>
				<td>
											<p>Limit result set to posts assigned one or more statuses.</p>
																					<p class="default">
							Default: <code>publish</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>tax_relation</code><br />
									</td>
				<td>
											<p>Limit result set based on relationship between multiple taxonomies.</p>
																										<p>One of: <code>AND</code>, <code>OR</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>menus</code><br />
									</td>
				<td>
											<p>Limit result set to items with specific terms assigned in the menus taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>menus_exclude</code><br />
									</td>
				<td>
											<p>Limit result set to items except those with specific terms assigned in the menus taxonomy.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>menu_order</code><br />
									</td>
				<td>
											<p>Limit result set to posts with a specific menu_order value.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Nav_Menu_Item</h2>
			<h3>Arguments</h3>
	<table class="arguments">
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
																					<p class="default">
							Default: <code>custom</code>
						</p>
																<p>One of: <code>taxonomy</code>, <code>post_type</code>, <code>post_type_archive</code>, <code>custom</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-status">status</a></code><br />
									</td>
				<td>
											<p>A named status for the object.</p>
																					<p class="default">
							Default: <code>publish</code>
						</p>
																<p>One of: <code>publish</code>, <code>future</code>, <code>draft</code>, <code>pending</code>, <code>private</code></p>
									</td>
			</tr>
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
																					<p class="default">
							Default: <code>1</code>
						</p>
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

		<code>POST /wp/v2/menu-items</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Nav_Menu_Item</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp/v2/menu-items/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific nav_menu_item record.</p>

		<code>$ curl https://example.com/wp-json/wp/v2/menu-items/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the post.</p>
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
		<h2>Update a Nav_Menu_Item</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>Unique identifier for the post.</p>
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
											<code><a href="#schema-parent">parent</a></code><br />
									</td>
				<td>
											<p>The ID for the parent of the object.</p>
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

		<code>POST /wp/v2/menu-items/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Nav_Menu_Item</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>Unique identifier for the post.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>force</code><br />
									</td>
				<td>
											<p>Whether to bypass Trash and force deletion.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /wp/v2/menu-items/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/wp/v2/menu-items/&lt;id&gt;</code>
	</div>
</section>
</div>
