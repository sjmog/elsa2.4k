
<div class="row theFbPost postFormat">
	<div class="small-12 columns fbPostWrap">
		<!--post content-->
		<div class="row preContent">
			<!--username and time-->
			<div class="small-6 columns userNameWrap">
				<p class="userName">@<?php echo $userName; ?></p>
			</div>
			<div class="small-6 columns timeWrap">
				<i class="icon-time"></i>
				<p class="timeAgo" title="<?php echo $created; ?>">
					
				</p>
			</div>
		</div>
		<div class="row content">
			<div class="small-12 columns fbPostTextWrap">
				<p class="fbPostText">
					<?php echo $message ?>
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
	<div class="small-4 small-centered large-4 large-uncentered profileImageWrap">
		<!--profile photo-->
		<img src="http://s3.amazonaws.com/rapgenius/filepicker%2FvCleswcKTpuRXKptjOPo_kitten.jpg" class="profileImage" />
	</div>
</div>