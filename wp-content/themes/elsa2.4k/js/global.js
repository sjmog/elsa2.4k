require.config({
	"baseUrl": "wp-content/themes/elsa2.4k/js",
	"paths": {
		"jquery": "vendor/jquery/jquery"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});
