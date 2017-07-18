# Settings

<section class="route">
	<div class="primary">
		## Schema
<p>The schema defines all the fields that exist for a settings object.</p>
<table class="attributes">
	
		<tbody><tr id="schema-title">
			<td>
				`title`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>Site title.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-description">
			<td>
				`description`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>Site description.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-url">
			<td>
				`url`<br>
				<span class="type">
					string, 
							uri
						
				</span>
			</td>
			<td>
				<p>Site URL.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-email">
			<td>
				`email`<br>
				<span class="type">
					string, 
							email
					
				</span>
			</td>
			<td>
				<p>This address is used for admin purposes. If you change this we will send you an email at your new address to confirm it. The new address will not become active until confirmed.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-timezone">
			<td>
				`timezone`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>A city in the same timezone as you.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-date_format">
			<td>
				`date_format`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>A date format for all date strings.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-time_format">
			<td>
				`time_format`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>A time format for all time strings.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-start_of_week">
			<td>
				`start_of_week`<br>
				<span class="type">
					number
				</span>
			</td>
			<td>
				<p>A day number of the week that the week should start on.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-language">
			<td>
				`language`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>WordPress locale code.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-use_smilies">
			<td>
				`use_smilies`<br>
				<span class="type">
					boolean
				</span>
			</td>
			<td>
				<p>Convert emoticons like :-) and :-P to graphics on display.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-default_category">
			<td>
				`default_category`<br>
				<span class="type">
					number
				</span>
			</td>
			<td>
				<p>Default category.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-default_post_format">
			<td>
				`default_post_format`<br>
				<span class="type">
					string
				</span>
			</td>
			<td>
				<p>Default post format.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
		<tr id="schema-posts_per_page">
			<td>
				`posts_per_page`<br>
				<span class="type">
					number
				</span>
			</td>
			<td>
				<p>Blog pages show at most.</p>
				
				<p>Context: ``</p>
				
			</td>
		</tr>
	
</tbody></table>

	</div>
	<div class="secondary">
		### Example Request

		`$ curl -X OPTIONS -i http://demo.wp-api.org/wp-json/wp/v2/settings`
	</div>
</section>
<section class="route">
	<div class="primary">
		## Update a Setting
		
		
	### Arguments
	<table class="arguments">
		
			<tbody><tr>
				<td>
					
						`[title](#schema-title)`<br>
					
				</td>
				<td>
					
						<p>Site title.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[description](#schema-description)`<br>
					
				</td>
				<td>
					
						<p>Site description.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[url](#schema-url)`<br>
					
				</td>
				<td>
					
						<p>Site URL.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[email](#schema-email)`<br>
					
				</td>
				<td>
					
						<p>This address is used for admin purposes. If you change this we will send you an email at your new address to confirm it. The new address will not become active until confirmed.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[timezone](#schema-timezone)`<br>
					
				</td>
				<td>
					
						<p>A city in the same timezone as you.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[date_format](#schema-date_format)`<br>
					
				</td>
				<td>
					
						<p>A date format for all date strings.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[time_format](#schema-time_format)`<br>
					
				</td>
				<td>
					
						<p>A time format for all time strings.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[start_of_week](#schema-start_of_week)`<br>
					
				</td>
				<td>
					
						<p>A day number of the week that the week should start on.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[language](#schema-language)`<br>
					
				</td>
				<td>
					
						<p>WordPress locale code.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[use_smilies](#schema-use_smilies)`<br>
					
				</td>
				<td>
					
						<p>Convert emoticons like :-) and :-P to graphics on display.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[default_category](#schema-default_category)`<br>
					
				</td>
				<td>
					
						<p>Default category.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[default_post_format](#schema-default_post_format)`<br>
					
				</td>
				<td>
					
						<p>Default post format.</p>
					
					
					
					
				</td>
			</tr>
		
			<tr>
				<td>
					
						`[posts_per_page](#schema-posts_per_page)`<br>
					
				</td>
				<td>
					
						<p>Blog pages show at most.</p>
					
					
					
					
				</td>
			</tr>
		
	</tbody></table>


	</div>
</section>
