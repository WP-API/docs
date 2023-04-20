---
---

# Bp_Account_Settings_Options

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_account_settings_options record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-name">
			<td>
				<code>name</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A unique name for the field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-label">
			<td>
				<code>label</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Label of the field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-type">
			<td>
				<code>type</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The type the field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-value">
			<td>
				<code>value</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The saved value for the field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-options">
			<td>
				<code>options</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Available options for the field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-headline">
			<td>
				<code>headline</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>Headline text for the field.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
			<tr id="schema-subfields">
			<td>
				<code>subfields</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>Related sub fields.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code>embed</code>, <code>view</code>, <code>edit</code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Account_Settings_Options</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/account-settings/&lt;nav&gt;</code>

		<p>Query this endpoint to retrieve a specific bp_account_settings_options record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/account-settings/&lt;nav&gt;</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>nav</code><br />
									</td>
				<td>
											<p>Navigation item slug.</p>
																<p class="required">
							Required: 1
						</p>
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
		<h2>Update a Bp_Account_Settings_Options</h2>
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code><a href="#schema-nav">nav</a></code><br />
									</td>
				<td>
											<p>Navigation item slug.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
					<tr>
				<td>
											<code><a href="#schema-fields">fields</a></code><br />
									</td>
				<td>
											<p>The list of fields Objects to update with name and value of the field.</p>
																<p class="required">
							Required: 1
						</p>
																			</td>
			</tr>
			</table>

	</div>
	<div class="secondary">
		<h3>Definition</h3>

		<code>POST /buddyboss/v1/account-settings/&lt;nav&gt;</code>

		<h3>Example Request</h3>

		<code></code>
	</div>
</section>
</div>
