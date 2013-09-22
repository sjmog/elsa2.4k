
<?php
//get a random testimonial
$args = array( 'post_type' => 'testimonial', 'orderby' => 'rand', 'showposts' => 1 );
$loop = new WP_Query( $args );
?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>


<div id="pageTestimonial" class="row testimonialRow">
	<div class="small-12 columns">
		<div class="large-8 small-12 columns testimonialTextWrap">
			<?php the_content(); ?>
		</div>
		<div class="large-4 small-12 columns testimonialAuthorWrap">
			<?php the_field('testifier'); ?>
			<!--author and details as per blog post-->
		</div>

	</div>
</div>

<?php endwhile; // End the loop ?>