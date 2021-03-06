<div id="post-<?php the_ID(); ?>" class="row thePost causePost postFormat">
	<div class="authorColumn small-4 small-centered large-uncentered large-6 medium-4 columns">
		<img src="<?php the_field('organiser_logo') ?>">
		<h2 class="authorTitle"><a href="<?php the_field('organiser_url'); ?>"><?php the_field('organiser_name') ?></h2>
	</div>
	<div id="post-<?php the_ID();?>Content" class="small-12 medium-8 large-6 columns blogPostWrap contentColumn">
		<!--post content-->
		<div class="row preContent">
			<!--username and time-->
			<div class="small-12 columns timeWrap">
				<i class="icon-time"></i>
				<p class="timeAgo" title="<?php the_time(c) ?>">
					
				</p>
			</div>
		</div>
		<div class="row content">
			<div class="small-12 columns postTextWrap">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row postContent">
			<div class="small-6 columns commentsWrap">
				<!--comments number-->
				<p class="postInfo">
					<?php comments_number( 'No comments.', 'One comment.', '% comments.' ); ?>
				</p>
				<i class="icon-eye-open"></i>
			</div>
			<div class="small-6 columns socialPostWrap">
				<a href="#" class="button social facebook"><i class="icon-facebook"></i></a>
				<a href="#" class="button social twitter"><i class="icon-twitter"></i></a>
			</div>
		</div>
	</div>
	<div class="postComments">
		<?php comments_template(); ?>
	</div>
</div>