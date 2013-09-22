<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<div id="post-<?php the_ID(); ?>" class="row thePost postFormat">
	<div class="authorColumn small-4 small-centered large-uncentered columns">
		<img src="http://s3.amazonaws.com/rapgenius/filepicker%2FvCleswcKTpuRXKptjOPo_kitten.jpg">
	</div>
	<div id="post-<?php the_ID();?>Content" class="small-12 large-8 columns blogPostWrap contentColumn">
		<!--post content-->
		<div class="row preContent">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php reverie_entry_meta(); ?>
			<!--username and time-->
			<div class="small-6 columns userNameWrap">
				<p class="userName"><?php echo $userName; ?></p>
			</div>
			<div class="small-6 columns timeWrap">
				<i class="icon-time"></i>
				<p class="timeAgo" title="<?php echo $created; ?>">
					
				</p>
			</div>
		</div>
		<div class="row content">
			<div class="small-12 columns postTextWrap">
				<p class="postText">
					<?php the_content(); ?>
				</p>
			</div>
		</div>
		<div class="row postContent">
			<div class="small-6 columns commentsWrap">
				<!--comments number-->
				<p class="postInfo"><?php echo $comments; ?> <?php 
					if($comments == 1) 
						{echo 'comment';} 
					else 
						{echo 'comments';} 
					?></p>
				<i class="icon-eye-open"></i>
			</div>
			<div class="small-6 columns likeWrap">
				<!--likes number-->
				<p class="postInfo"><?php echo $likes; ?> <?php 
					if($likes == 1) 
						{echo 'Like';} 
					else 
						{echo 'Likes';} 
					?></p>
				<i class="icon-thumbs-up-alt"></i>
			</div>
		</div>
	</div>
</div>