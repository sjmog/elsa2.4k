	</div><!-- Row End -->
</section><!-- Container End -->

<footer class="row fullWidth" role="contentinfo">
	<div class="small-12 large-4 large-centered small-centered columns">
		<a href="#" class="button social facebook"><i class="icon-facebook"></i></a>
		<a href="#" class="button social twitter"><i class="icon-twitter"></i></a>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.timeago.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bigtext.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//Turn UNIX timestamps into relative ones
		$('p.timeAgo').timeago();
		// Make headers full-width and fluid
		
		    $('.headersWrap').bigtext();    
		
	})
</script>
</body>
</html>