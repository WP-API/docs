---
---

# Bp_Xprofile_Types

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_xprofile_types record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-labels">
			<td>
				<code>labels</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Labels to use in various parts of the interface.</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-has_directory">
			<td>
				<code>has_directory</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Whether the profile type should have its own type-specific directory.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Slug of the member type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-directory_slug">
			<td>
				<code>directory_slug</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Directory slug of the member type.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-enable_filter">
			<td>
				<code>enable_filter</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Display this profile type in &quot;Types&quot; filter in Members Directory.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-enable_remove">
			<td>
				<code>enable_remove</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Hide all members of this type from Members Directory.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-network_search_enable_remove">
			<td>
				<code>network_search_enable_remove</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Hide all members of this type from Network Search results.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-enable_profile_field">
			<td>
				<code>enable_profile_field</code><br />
				<span class="type">
					boolean				</span>
			</td>
			<td>
				<p>Allow users to self-select as this profile type from the &quot;Profile Type&quot; profile field dropdown.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp-group-type">
			<td>
				<code>bp-group-type</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Which group types this profile type is allowed to create.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-bp-group-type-auto-join">
			<td>
				<code>bp-group-type-auto-join</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>On Registration and Account activation, Profile Type members will auto-join Groups from Selected Group Types below other than Hidden Groups.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-wp_roles">
			<td>
				<code>wp_roles</code><br />
				<span class="type">
					array				</span>
			</td>
			<td>
				<p>Users of this profile type will be auto-assigned to the following WordPress roles.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Xprofile_Types</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/xprofile/types</code>

		<p>Query this endpoint to retrieve a specific bp_xprofile_types record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/xprofile/types</code>
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
</div>
