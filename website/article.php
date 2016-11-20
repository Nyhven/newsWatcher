<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<meta name="keywords" content="Konstructs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
					<h3>Printing</h3>
					<a href="single.html">Software Review: Autodesk Inventor Fusion for Mac</a>
					<p class="sub_head">Posted by <a href="#">Admin</a> on february 14,2015</p>
					<a href="single.html"><img src="images/printing.jpg" class="img-responsive" alt="" /></a>
					<p class="span"><a href="#">3D Printing, <a href="#">3D Software,</a><a href="#"> Files to Print </a> |  on february 14,2015</p>
					<p class="ptext">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like</p>
					<p class="ptext">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like</p>
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