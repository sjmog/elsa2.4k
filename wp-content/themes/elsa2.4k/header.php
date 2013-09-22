<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--Grab Font Awesome-->
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css" rel="stylesheet">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js" type="text/javascript"></script>

</head>

<body <?php body_class(); ?>>

<?php if (!is_front_page()): ?>
	<div class="row navRow">
		<div class="small-12 columns navWrap">
			<?php get_template_part('nav'); ?>
		</div>
	</div>
<? endif; ?>
<!--get the page featured image and set it as the background-->

	<section class="fullWidth fullHeight" style="background-image:url('<?php the_field('page_image') ?>')">


	<header class="row" role="banner">
		<div class="small-12 columns donateWrap">
			<?php get_template_part('donatebar'); ?>
		</div>
		<div class="small-12 columns titlesWrap">
			<div class="row">
				<div class="small-12 columns headersWrap">
					<h1><a href="<?php bloginfo('url'); ?>" title="<?php the_title(); ?>"><?php the_field('header');?></a></h1>
					<h2><?php the_field('subHeader');?></h2>
				</div>
			</div>
			<div class="row">
				<div class="small-8 small-centered columns">
					<div class="large-6 small-centered large-uncentered columns ctaWrap">
						<?php if (is_page('Blog')) { ?>
						<a href="/challenge" class="button primary block">The Challenge</a>
						<?php } else { ?>
						<a href="/blog" class="button primary block">Elsa</a>
						<?php }; ?>
					</div>
					<div class="large-6 small-centered large-uncentered columns ctaWrap">
						<?php if (is_page('The Cause')) { ?>
						<a href="/challenge" class="button primary block">The Challenge</a>
						<?php } else { ?>
						<a href="/cause" class="button primary block">The Cause</a>
						<?php }; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-4 small-centered small-8 columns">
					<div class="large-12 small-centered small-12 columns ctaWrap">
						<a href="#" data-reveal-id="myModal" class="button secondary block">Sponsorships</a>
					</div>
				</div>
			</div>
		</div>
	</header>
</section>


	