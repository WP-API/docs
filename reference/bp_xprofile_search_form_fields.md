---
---

# Bp_Xprofile_Search_Form_Fields

<section class="route">
	<div class="primary">
		<h2>Schema</h2>
<p>The schema defines all the fields that exist within a bp_xprofile_search_form_field record. Any response from these endpoints can be expected to contain the fields below unless the `_filter` query parameter is used or the schema field only appears in a specific context.</p>
<table class="attributes">
	</table>

	</div>
</section>

<div><section class="route">
	<div class="primary">
		<h2>Retrieve a Bp_Xprofile_Search_Form_Field</h2>

		<h3>Definition & Example Request</h3>

		<code>GET /buddyboss/v1/xprofile/search</code>

		<p>Query this endpoint to retrieve a specific bp_xprofile_search_form_field record.</p>

		<code>$ curl https://example.com/wp-json/buddyboss/v1/xprofile/search</code>
	</div>
	<div class="secondary">
			<h3>Arguments</h3>
	<table class="arguments">
					<tr>
				<td>
											<code>form_id</code><br />
									</td>
				<td>
											<p>ID of the profile search form.</p>
																								</td>
			</tr>
			</table>

	</div>
</section>
</div>
