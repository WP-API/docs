# Changelog

This document details changes to the WP REST API since its public release in version 4.7.0.
## Version 4.8.0
<ul>
 	<li>Improve strings added after 4.7.0 string freeze. [#](https://core.trac.wordpress.org/changeset/40571), [#](https://core.trac.wordpress.org/changeset/40606)</li>
 	<li>Canonicalize header names in `WP_REST_Request::remove_header()`. [#](https://core.trac.wordpress.org/changeset/40577)</li>
 	<li>Allow `Origin: null` from `file:` URLs. [#](https://core.trac.wordpress.org/changeset/40600)</li>
 	<li>Set global `$post` variable when preparing revisions. [#](https://core.trac.wordpress.org/changeset/40601)</li>
 	<li>Include `featured_media` in embed responses. [#](https://core.trac.wordpress.org/changeset/40602)</li>
 	<li>Add `author`, `modified`, and `parent` sort order options for posts. [#](https://core.trac.wordpress.org/changeset/40605)</li>
 	<li>Add endpoint for proxying requests to external oEmbed providers, and use it in the media modal instead of the `parse-embed` AJAX action.  **This is the first usage of the WP REST API in `wp-admin`.** [#](http://core.trac.wordpress.org/changeset/40628)</li>
 	<li>Do not set `X-WP-Deprecated*` headers as often. [#](https://core.trac.wordpress.org/changeset/40782)</li>
 	<li>Avoid sending blank `Last-Modified` headers with authenticated requests. [#](https://core.trac.wordpress.org/changeset/40805)</li>
 	<li>Fix changing parameters with `$request-&gt;set_param()` for some requests. [#](https://core.trac.wordpress.org/changeset/40815)</li>
 	<li>In the admin area, ensure the REST API endpoint URL is forced to `https` when necessary. [#](https://core.trac.wordpress.org/changeset/40843)</li>
</ul>
## Version 4.7.4
<ul>
 	<li>Fix another (DST-related) issue with dates of posts. [#](https://core.trac.wordpress.org/changeset/40325)</li>
 	<li>Add `gmt_offset` and `timezone_string` to the base `/wp-json` response. [#](https://core.trac.wordpress.org/changeset/40336)</li>
 	<li>Confirm that the parent post object of an attachment exists in `WP_REST_Posts_Controller::check_read_permission()`. [#](https://core.trac.wordpress.org/changeset/40337)</li>
 	<li>Allow fetching multiple users and terms at once via the `slug` parameters of the respective endpoints. [#](https://core.trac.wordpress.org/changeset/40426), [#](https://core.trac.wordpress.org/changeset/40427)</li>
</ul>
## Version 4.7.3
<ul>
 	<li>Cast revision author ID to int. [#](https://core.trac.wordpress.org/changeset/40078)</li>
 	<li>Correctly serve the index with `PATH_INFO`. [#](https://core.trac.wordpress.org/changeset/40079)</li>
 	<li>Include the `status` property in `view` context responses from the Posts endpoints. [#](https://core.trac.wordpress.org/changeset/40081)</li>
 	<li>`wp-api.js` client: Use `_.extend` instead of `_.union` when merging objects. [#](https://core.trac.wordpress.org/changeset/40084)</li>
 	<li>To prepare for a full multisite implementation [in 4.8](https://make.wordpress.org/core/2017/02/08/improving-the-rest-api-users-endpoint-for-multisite-in-4-7-3-and-4-8/), do not allow access to users from a different site. [#](https://core.trac.wordpress.org/changeset/40111)</li>
 	<li>Correctly parse body parameters for `DELETE` requests. [#](https://core.trac.wordpress.org/changeset/40113)</li>
 	<li>Fix multiple issues with dates of posts and comments. [#](https://core.trac.wordpress.org/changeset/40114), [#](https://core.trac.wordpress.org/changeset/40115)</li>
 	<li>`wp-api.js` client: Fix route discovery for custom namespaces. [#](https://core.trac.wordpress.org/changeset/40117)</li>
 	<li>Fix the behavior of the `sticky` posts filter when no posts are sticky. [#](https://core.trac.wordpress.org/changeset/40136)</li>
 	<li>Allow setting all post formats even if they are not supported by the theme. [#](https://core.trac.wordpress.org/changeset/40137)</li>
</ul>
## Version 4.7.2
<ul>
 	<li>Unify object access handling for simplicity. [#](https://core.trac.wordpress.org/changeset/39957)</li>
</ul>
## Version 4.7.1
<ul>
 	<li>Treat any falsy value as `false` in `'rest_allow_anonymous_comments'`. [#](https://core.trac.wordpress.org/changeset/39566)</li>
 	<li>`wp-api.js` client: Fix setup of models used by `wp.api.collections` objects. [#](https://core.trac.wordpress.org/changeset/39604)</li>
 	<li>Do not error on empty JSON body. [#](https://core.trac.wordpress.org/changeset/39609)</li>
 	<li>Do not include the `password` argument for the `GET /wp/v2/media` endpoint. [#](https://core.trac.wordpress.org/changeset/39610)</li>
 	<li>Allow sending empty or no-op comment updates. [#](https://core.trac.wordpress.org/changeset/39628)</li>
 	<li>Add support for filename search in the `GET /wp/v2/media` endpoint. [#](https://core.trac.wordpress.org/changeset/39629)</li>
 	<li>Fix PHP warnings when `get_theme_support( 'post-formats' )` is not an array. [#](https://core.trac.wordpress.org/changeset/39630)</li>
 	<li>Improve the `rest_*_collection_params` filter docs and fix the terms filter. [#](https://core.trac.wordpress.org/changeset/39631)</li>
 	<li>Allow schema `sanitization_callback` to be set to `null` to bypass built-in sanitization. [#](https://core.trac.wordpress.org/changeset/39642)</li>
 	<li>Change which users are shown in the users endpoint. [#](https://core.trac.wordpress.org/changeset/39844)</li>
</ul>
