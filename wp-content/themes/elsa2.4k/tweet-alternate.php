<div id="tweet-<?php echo $tweetCount;?>" class="row theTweet postFormat alternate">

	<div class="authorColumn small-4 small-centered large-uncentered columns">
		<img src="<?php echo $userImg; ?>">
	</div>
	<div id="tweet-<?php echo $tweetCount;?>Content" class="small-12 large-8 columns tweetWrap contentColumn">
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
		<div class="row tweetContent">
			<div class="small-6 columns replyWrap">
				<!--reply button-->
			</div>
			<div class="small-6 columns retweetWrap">
				<!--retweet button-->
			</div>
		</div>
	</div>
	
</div>
<script type="text/javascript">
	$('#tweet-<?php echo $tweetCount;?> .authorColumn').css('height', ($('#tweet-<?php echo $tweetCount;?>Content').height() + 32));
</script>