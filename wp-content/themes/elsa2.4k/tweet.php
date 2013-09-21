<div class="row theTweet postFormat">
	<div class="small-12 columns tweetWrap">
		<!--tweet content-->
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
			<div class="small-12 columns tweetTextWrap">
				<p class="tweetText">
					<?php echo $text ?>
				</p>
			</div>
		</div>
		<div class="row postContent">
			<div class="small-6 columns replyWrap">
				<!--reply button-->
			</div>
			<div class="small-6 columns retweetWrap">
				<!--retweet button-->
			</div>
		</div>
	</div>
	<div class="small-4 small-centered large-4 large-uncentered profileImageWrap">
		<!--profile photo-->
		<img src="<?php echo $userImg; ?>" class="profileImage" />
	</div>
</div>