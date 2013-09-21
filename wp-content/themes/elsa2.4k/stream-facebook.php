<?php
//bring in the facebook helper functions
require('facebook.php'); //path to facebook library

//set up our keys

$facebook = new Facebook(array(
  'appId'  => '208534642640533',
  'secret' => 'cc1261aac6b678a46606fb98f3585c17',
));

//choose a path (Elsa's Facebook Page)

$fbPath = "/ElsaHammondPacificSoloRow/feed";

//make a request for the page stream

$postsArray = $facebook->api($fbPath, "GET");
$posts = $postsArray["data"];

?>
<a href="#pageTestimonial" class="facebookBobble bobble"></a>
<div id="facebookStream" class="stream">
	<!--fb stream content-->
	<?php $postCount = 0; ?>
	<?php foreach ($posts as $post) {
		$user = $post["from"];
		$userName = $user["name"];
		//$userImg = $user["profile_image_url"]; //will be $facebook->api('/' . $user["id"], 'GET')["something"]
		$created = $post["created_time"];
		$messageArr = explode('"', $post["message"]);
		$message = array_shift($messageArr);
		$likes = count($post["likes"]["data"]);
		$comments = count($post["comments"]["data"]);
		if($postCount%2) {
			include(locate_template('facebookPost.php'));
		} else {
			include(locate_template('facebookPost-alternate.php'));
		}
		$postCount++;
	}
	?>
</div>