---
---

# {{ plural | capitalize }}

<section class="route">
	<div class="primary">
		{{ include('reference-parts/schema.html') }}
	</div>
	<div class="secondary">
		<h3>Example Request</h3>

		<code>$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json{{ attribute( routes | first, 'nicename' ) }}</code>
	</div>
</section>

<div>
{%- for route in routes -%}
	{%- for endpoint in route.endpoints -%}
		{{- include( 'reference-parts/' ~ endpoint.type ~ '.html' ) -}}
	{%- endfor -%}
{%- endfor -%}
</div>
