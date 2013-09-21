<?php
//bring in the oauth helper functions
require('twitteroauth.php'); // path to twitteroauth library

//some keys

$consumerKey = "eyKNSXVZqECrQOistU816A";
$consumerSecret = "Xt6v6JMzE8TmBfbkhaqCKE0cuN3ShkOdzaPjN2Jsk";
$accessToken = '391482739-NY2rRxVhfJBXLRYIZmuX06DjjzePO4VwlU6wJwDa';
$accessTokenSecret = 'Hc8E5QD6FfIugLoWiNP47M5hrA5rWlRaMxmbWRhog';

//fetch the twitter objects tagged with #elsa2.4k, or whatever Elsa wants

	$hashtag = "elsa";

	$twitter = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
	 
	$tweetsArray = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23' . $hashtag . '&count=30');
	$tweets = ($tweetsArray["statuses"]);
?>

<a href="#pageTestimonial" class="twitterBobble bobble"></a>
<div id="twitterStream" class="stream">
	<!--twitter stream content-->
	<?php $tweetCount = 0; ?>
	<?php foreach ($tweets as $tweet) {
		$user = $tweet["user"];
		$userName = $user["screen_name"];
		$userImg = $user["profile_image_url"];
		$created = $tweet["created_at"];
		$text = $tweet["text"];
		if(!($tweetCount%2)) {
			include(locate_template('tweet.php'));
		} else {
			include(locate_template('tweet-alternate.php'));
		}
		$tweetCount++;
	}
	?>
</div>