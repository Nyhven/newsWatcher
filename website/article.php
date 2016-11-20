<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

require_once("back/pages/article.php");

?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="FAVNW1.png" />
<title>News Watcher | Your personnal news trusting indicator</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="This Article is referenced in NewsWatcher : <?php echo $articleDatas['title']; ?>" />
<meta property="og:type" content="<?php echo $articleDatas['content']; ?>" />
<meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="http://www.newswatch.tk/images/stamp_<?php echo $articleDatas['grade']; ?>.jpg" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src='js/cytoscape/cytoscape.js'></script>
</head>
<body>

	<!-- header-section-starts -->
	<?php
		include 'pages/header.php'
	?>
	<div class="container bodycontainer">
		<div class="header-bottom">
            <div class="type">
				<h5>Article Types</h5>
			</div>
			<span class="menu"></span>
			<div class="list-nav">
				<ul>
					<?php
						include 'pages/navbar.php'
					?>
				</ul>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".list-nav" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->

			<div class="clearfix"></div>
        </div>
	</div>
	<div class="container bodycontainer">
		<div class="content">
			<div class="single-page">
				<div class="print-main">
					<h3><?php echo $articleDatas['title']; ?></h3>

					<div class="cwbox">
						<div id=cy class="cytoscape"></div>
					</div>
					<?php
					/*
					$scriptNode = "<script>" .
						"var cy = cytoscape({" .
							"container: document.getElementById('cy')," .
							"elements: [" .
								"{data: {id: 'center'}},";
					foreach ($srcDatas as $tab) {
						$scriptNode .= "{data: {id: '" . $tab['nom'] . "'}},";
					}
					$scriptNode .= '{ ';
					foreach ($srcDatas as $tab) {
						$scriptNode .= "data: {" .
							"id: 'centerTo" . $tab['nom'] . "', " .
							"source: 'center'," .
							"target: '" . $tab['nom'] . "', },";
					}
					$scriptNode .= "}] }); </script>";
					echo $scriptNode;*/
					?>
					<script>
						var cy = cytoscape({
							container: document.getElementById('cy'),
							elements: {
								nodes: [
									{data: {id: 'A',name:"sourceA"}},
									{data: {id: 'B',name:"sourceB"}},
									{data: {id: 'C',name:"sourceC"}},
									{data: {id: 'center', name:"Cible"}},
								],
								edges: [
									{ data: { source: 'center', target: 'A' } },
									{ data: { source: 'center', target: 'B' } },
									{ data: { source: 'center', target: 'C' } },
								]
							},
						});
					</script>
					<p class="ptext">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $articleDatas['content']; ?></p>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="col-md-3 footer-links">
					<h4>Other pages and things</h4>
					<a href="#">Design a creative Blog</a>
					<a href="#">Design a iPad Website</a>
					<a href="#">Single Page sales portfolio </a>
					<a href="#">Flat product website in Photoshop</a>
					<a href="#">Design a creative Blog</a>
					<a href="#">Design a iPad Website</a>
					<a href="#">Single Page sales portfolio </a>
					<a href="#">Flat product website</a>
				</div>
				<div class="col-md-3 footer-links span_66">
					<a href="#">Flat product website in Photoshop</a>
					<a href="#">Design a creative Blog</a>
					<a href="#">Design a iPad Website </a>
				</div>
				<div class="col-md-3 footer-links">
					<h4>Relevant Articles</h4>
					<a href="#">Design a creative Blog</a>
					<a href="#">Design a iPad Website</a>
					<a href="#">Single Page sales portfolio </a>
					<a href="#">Flat product website</a>
					<a href="#">Design a creative Blog</a>
				</div>
				<div class="col-md-3 footer-links">
					<h4>Other pages and things</h4>
					<a href="#">Blaz Robar</a>
					<a href="#">Nick Toranto</a>
					<a href="#">Joisp Kelava</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="copyrights">
					<p>Konstructs © 2015 All rights reserved | Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
