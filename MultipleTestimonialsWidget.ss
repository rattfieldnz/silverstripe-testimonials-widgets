<% loop Testimonials %>
	<% include Testimonial %>
	<% if Page %>
		<p><a href="$Page.Link">read more...</a>
	<% end_if %>
<% end_loop %>
<div class="clear"></div>