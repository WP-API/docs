---
---

# Bp_Notifications

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_notifications record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-id">
			<td>
				<code>id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>A unique numeric ID for the notification.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-user_id">
			<td>
				<code>user_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the user the notification is addressed to.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-item_id">
			<td>
				<code>item_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the item associated with the notification.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-secondary_item_id">
			<td>
				<code>secondary_item_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the secondary item associated with the notification.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-component">
			<td>
				<code>component</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The name of the BuddyPress component the notification relates to.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-action">
			<td>
				<code>action</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The name of the component&#039;s action the notification is about.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
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
				<p>The date the notification was created, in the site&#039;s timezone.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-is_new">
			<td>
				<code>is_new</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>Whether it&#039;s a new notification or not.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-object">
			<td>
				<code>object</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The name of the notification object.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-object_id">
			<td>
				<code>object_id</code><br />
				<span class="type">
					integer				</span>
			</td>
			<td>
				<p>The ID of the notification object.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Description of notification.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-link_url">
			<td>
				<code>link_url</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Link URL for the notification.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-rest_actions">
			<td>
				<code>rest_actions</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Rest Actions which perform accept/reject based on the status.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-readonly">
			<td>
				<code>readonly</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Readonly for the moderated members notification.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-avatar_urls">
			<td>
				<code>avatar_urls</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Avatar URLs for the notification.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>List Bp_Notifications</h2>
		<p>Query this endpoint to retrieve a collection of bp_notifications. The response you receive can be controlled and filtered using the URL query parameters below.</p>

		<h3>Definition</h3>

		<code>GET /buddyboss/v1/notifications</code>

		<h3>Example Request</h3>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/notifications</code>
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
							Default: <code>10</code>
						</p>
														</td>
			</tr>
					<tr>
				<td>
											<code>order_by</code><br />
									</td>
				<td>
											<p>Name of the field to order according to.</p>
																					<p class="default">
							Default: <code>id</code>
						</p>
																<p>One of: <code>id</code>, <code>date_notified</code>, <code>item_id</code>, <code>secondary_item_id</code>, <code>component_name</code>, <code>component_action</code>, <code>include</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>sort_order</code><br />
									</td>
				<td>
											<p>Order sort attribute ascending or descending.</p>
																					<p class="default">
							Default: <code>ASC</code>
						</p>
																<p>One of: <code>ASC</code>, <code>DESC</code></p>
									</td>
			</tr>
					<tr>
				<td>
											<code>component_name</code><br />
									</td>
				<td>
											<p>Limit result set to notifications associated with a specific component</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>component_action</code><br />
									</td>
				<td>
											<p>Limit result set to notifications associated with a specific component&#039;s action name.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>user_id</code><br />
									</td>
				<td>
											<p>Limit result set to notifications addressed to a specific user.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>item_id</code><br />
									</td>
				<td>
											<p>Limit result set to notifications associated with a specific item ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>secondary_item_id</code><br />
									</td>
				<td>
											<p>Limit result set to notifications associated with a specific secondary item ID.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code>is_new</code><br />
									</td>
				<td>
											<p>Limit result set to items from specific states.</p>
																					<p class="default">
							Default: <code>1</code>
						</p>
														</td>
			</tr>
			</table>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Create a Bp_Notifications</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-user_id">user_id</a></code><br />
									</td>
				<td>
											<p>The ID of the user the notification is addressed to.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-item_id">item_id</a></code><br />
									</td>
				<td>
											<p>The ID of the item associated with the notification.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-secondary_item_id">secondary_item_id</a></code><br />
									</td>
				<td>
											<p>The ID of the secondary item associated with the notification.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-component">component</a></code><br />
									</td>
				<td>
											<p>The name of the BuddyPress component the notification relates to.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-action">action</a></code><br />
									</td>
				<td>
											<p>The name of the component&#039;s action the notification is about.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-date">date</a></code><br />
									</td>
				<td>
											<p>The date the notification was created, in the site&#039;s timezone.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-is_new">is_new</a></code><br />
									</td>
				<td>
											<p>Whether it&#039;s a new notification or not.</p>
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
											<p>The name of the notification object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-object_id">object_id</a></code><br />
									</td>
				<td>
											<p>The ID of the notification object.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-link_url">link_url</a></code><br />
									</td>
				<td>
											<p>Link URL for the notification.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-rest_actions">rest_actions</a></code><br />
									</td>
				<td>
											<p>Rest Actions which perform accept/reject based on the status.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-readonly">readonly</a></code><br />
									</td>
				<td>
											<p>Readonly for the moderated members notification.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/notifications</code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Notifications</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/notifications/&lt;id&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_notifications record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/notifications/&lt;id&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the notification.</p>
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
		<h2>Update a Bp_Notifications</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-id">id</a></code><br />
									</td>
				<td>
											<p>A unique numeric ID for the notification.</p>
																								</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-is_new">is_new</a></code><br />
									</td>
				<td>
											<p>Whether it&#039;s a new notification or not.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/notifications/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Delete a Bp_Notifications</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>id</code><br />
									</td>
				<td>
											<p>A unique numeric ID for the notification.</p>
																								</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>DELETE /buddyboss/v1/notifications/&lt;id&gt;</code>

		<h3>Example Request</h3>

		<code>$ curl -X DELETE https://example.com/wp-json/buddyboss/v1/notifications/&lt;id&gt;</code>
	</div>
</section>
</div>
