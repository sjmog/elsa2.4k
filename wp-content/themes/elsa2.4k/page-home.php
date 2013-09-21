<?php
/*
Template Name: Elsa Homepage
*/
get_header(); ?>
<section class="container" role="document">
<!--random testimonial row-->
<?php get_template_part('testimonial'); ?>

<!-- Row for main content area -->

<?php get_template_part('social-stream'); ?>

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>