---
---

# Wp Site Health Tests

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a wp site health test record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
			<tr id="schema-test">
			<td>
				<code>test</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The name of the test being run.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-label">
			<td>
				<code>label</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A label describing the test.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-status">
			<td>
				<code>status</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>The status of the test.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
									<p>One of: <code>good</code>, <code>recommended</code>, <code>critical</code></p>
							</td>
		</tr>
			<tr id="schema-badge">
			<td>
				<code>badge</code><br />
				<span class="type">
					object				</span>
			</td>
			<td>
				<p>The category this test is grouped in.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-description">
			<td>
				<code>description</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>A more descriptive explanation of what the test looks for, and why it is important for the user.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
			<tr id="schema-actions">
			<td>
				<code>actions</code><br />
				<span class="type">
					string				</span>
			</td>
			<td>
				<p>HTML containing an action to direct the user to where they can resolve the issue.</p>
									<p class="read-only">Read only</p>
								<p class="context">Context: <code></code></p>
							</td>
		</tr>
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Wp Site Health Test</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp-site-health/v1/tests/background-updates</code>

		<p>Query this endpoint to retrieve a specific wp site health test record.</p>

		<code>$ curl https://example.com/wp-json/wp-site-health/v1/tests/background-updates</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Wp Site Health Test</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp-site-health/v1/tests/loopback-requests</code>

		<p>Query this endpoint to retrieve a specific wp site health test record.</p>

		<code>$ curl https://example.com/wp-json/wp-site-health/v1/tests/loopback-requests</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Wp Site Health Test</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp-site-health/v1/tests/https-status</code>

		<p>Query this endpoint to retrieve a specific wp site health test record.</p>

		<code>$ curl https://example.com/wp-json/wp-site-health/v1/tests/https-status</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Wp Site Health Test</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp-site-health/v1/tests/dotorg-communication</code>

		<p>Query this endpoint to retrieve a specific wp site health test record.</p>

		<code>$ curl https://example.com/wp-json/wp-site-health/v1/tests/dotorg-communication</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
<section class="route">
	<div class="primary">
		<h2>Retrieve a Wp Site Health Test</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /wp-site-health/v1/tests/authorization-header</code>

		<p>Query this endpoint to retrieve a specific wp site health test record.</p>

		<code>$ curl https://example.com/wp-json/wp-site-health/v1/tests/authorization-header</code>
	</div>
	<div class="secondary">
			<p>There are no arguments for this endpoint.</p>

	</div>
</section>
</div>
