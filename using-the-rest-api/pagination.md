# Pagination

WordPress sites can have a lot of content—far more than you'd want to pull down in a single request. The API endpoints default to providing a limited number of items per request, the same way that a WordPress site will default to 10 posts per page in archive views.
## Pagination Parameters
Any API response which contains multiple resources supports several common query parameters to handle paging through the response data:
<ul>
 	<li>`?page=`: specify the page of results to return.
<ul>
 	<li>For example, `/wp/v2/posts?page=2` is the second page of posts results</li>
 	<li>By retrieving `/wp/v2/posts`, then `/wp/v2/posts?page=2`, and so on, you may access every available post through the API, one page at a time.</li>
</ul>
</li>
 	<li>`?per_page=`: specify the number of records to return in one request, specified as an integer from 1 to 100.
<ul>
 	<li>For example, `/wp/v2/posts?per_page=1` will return only the first post in the collection</li>
</ul>
</li>
 	<li>`?offset=`: specify an arbitrary offset at which to start retrieving posts
<ul>
 	<li>For example, `/wp/v2/posts?offset=6` will use the default number of posts per page, but start at the 6th post in the collection</li>
 	<li>`?per_page=5&amp;page=4` is equivalent to `?per_page=5&amp;offset=15`</li>
</ul>
</li>
</ul>
[tip]
Large queries can hurt site performance, so `per_page` is **capped at 100 records**. If you wish to retrieve more than 100 records, for example to build a client-side list of all available categories, you may make multiple API requests and combine the results within your application.
[/tip]

To determine how many pages of data are available, the API returns two header fields with every paginated response:
<ul>
 	<li>`X-WP-Total`: the total number of records in the collection</li>
 	<li>`X-WP-TotalPages`: the total number of pages encompassing all available records</li>
</ul>
By inspecting these header fields you can determine how much more data is available within the API.
## Ordering Results
In addition to the pagination query parameters detailed above, several other parameters control the order of the returned results:

<ul>
<li>`?order=`: control whether results are returned in ascending or descending order
<ul>
<li>Valid values are `?order=asc` (for ascending order) and `?order=desc` (for descending order).</li>
<li>All native collections are returned in descending order by default.</li>
</ul>
</li>
<li>`?orderby=`: control the field by which the collection is sorted
<ul>
<li>The valid values for `orderby` will vary depending on the queried resource; for the `/wp/v2/posts` collection, the valid values are "date," "relevance," "id," "include," "title," and "slug"</li>
<li>See the [REST API reference](https://developer.wordpress.org/rest-api/reference) for the values supported by other collections</li>
<li>All collections with dated resources default to `orderby=date`</li>
</ul>
</li>
</ul>
