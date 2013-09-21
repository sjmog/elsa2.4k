<?php include 'simple_html_dom.php'; 
// Create DOM from URL or file
$html = file_get_html('http://www.indiegogo.com/projects/pacific-solo-row');

$protoPercent = $html->find('p.progress', 0)->plaintext;

$percent = explode(" ", $protoPercent);

?>
<div class="row">
	<div class="large-2 small-4 small-centered large-uncentered columns percentWrap">
		<!--percentage from Indiegogo-->
		<p class="percentage"><?php echo round($percent[0], 0) ?>% <span class="superscript">funded</span></p>
	</div>
	<div class="large-8 small-10 small-centered large-uncentered columns barWrap">
		<!--bar from Indiegogo-->
		<div class="barOuter">
			<div class="barInner" style="width: <?php echo round($percent[0], 3) ?>%"></div>
		</div>
	</div>
	<div class="large-2 small-4 small-centered large-uncentered columns ctaWrap">
		<!--donate button-->
		<a href="#" class="button primary" data-reveal-id="myModal">Donate</a>
	</div>
	
</div>