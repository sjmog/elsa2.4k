<?php
/*
Template Name: Elsa Innerpage
*/
get_header(); ?>
<!-- Start the main container -->
<?php
	$currentPage = null;
	if (is_page('Blog')) {$currentPage = 'blog';}
	else if (is_page('The Challenge')) {$currentPage = 'challenge';}
	else if (is_page('The Cause')) {$currentPage = 'cause';}
	else {$currentPage = 'home';};
	$theCurrentPage = 'the ' . $currentPage;
?>
<section class="container row <?php echo($currentPage . 'Page') ?>" role="document">

<div class="row">
<?php /* Start loop */ ?>
<?php if (is_page('Blog')) { ?>
<div class="pageTitle"><?php echo($currentPage); ?></div>
<?php include(locate_template('testimonial.php')); ?>
	<?php
	$args = array( 'post_type' => 'personal_post', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<?php include(locate_template('blogPost.php')); ?>
	<?php endwhile; // End the loop ?>
<?php } elseif (is_page('The Challenge')) { ?>
<div class="pageTitle"><?php echo($theCurrentPage); ?></div>
<?php include(locate_template('testimonial.php')); ?>
<?php
$args = array( 'post_type' => 'organiser_post', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
?>
<!--like a dick, I've gotten these different post files the wrong way round. Cause is challenge and challenge is cause...-->
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<?php include(locate_template('causePost.php')); ?>
<?php endwhile; // End the loop ?>
<?php } elseif (is_page('The Cause')) { ?>
<div class="pageTitle"><?php echo($theCurrentPage); ?></div>
<?php include(locate_template('testimonial.php')); ?>
<?php
$args = array( 'post_type' => 'sponsor_post', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<?php include(locate_template('challengePost.php')); ?>
<?php endwhile; // End the loop ?>
<?php }; ?>
<!-- Row for main content area -->
<?php get_sidebar(); ?>
		
<?php get_footer(); ?>