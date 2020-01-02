---
---

# {{ plural | capitalize }}

<section class="route">
	<div class="primary">
		{{ include('reference-parts/schema.html') }}
	</div>
</section>

<div>
{%- for route in routes -%}
	{%- for endpoint in route.endpoints -%}
		{{- include( 'reference-parts/' ~ endpoint.type ~ '.html' ) -}}
	{%- endfor -%}
{%- endfor -%}
</div>
