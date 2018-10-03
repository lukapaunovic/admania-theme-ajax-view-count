<script>
jQuery(document).ready(function( $ ) {
if ( window.location.pathname != '/' ) {
    // Index (home) page
		$.ajax({
			type: 'POST',
			url: '/wp-content/themes/admania/ajax-view-count.php',
			data: {
				post_id: <?php echo get_the_ID(); ?>
			},
			success: function(data) {
				$('.admania_viewcnt').html(" " + data.views_count + " <span class='admania_view_text'> Views </span>");
				console.log("View count: " + data.views_count);
			},
			error: function() {
				console.log("Something is wrong with Ajax View Count");
			}
		});
	});
}
</script>
