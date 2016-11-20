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
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php">
				<img src="images/logo_newswatcher.png" alt="" />
				<h1>News Watcher</h1></a>
			</div>
			<div class="navigation">
				<ul>
				<?php
					include 'pages/about.php'
				?>
				</ul>
			</div>
			<div class="moto">
				<span>Your personnal news trusting indicator</span>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
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
			<div class="col-md-8 content-left">
				<div class="article">
					<h5 class="head">in recent news</h5>
					<h6>Test Nodes</h6>
					<a class="title" href="single.html">Node testing of cytoscape.js </a>
					<div class="cwbox">
						<div id=cy class="cytoscape"></div>
						<script>
						  var cy = cytoscape({
							container: document.getElementById('cy'),
							elements: [
								{ data: { id: 'a' } },
								{ data: { id: 'b' } },
								{
								data: {
									id: 'ab',
									source: 'a',
									target: 'b'
								}
								}]
							});
						</script>
					</div>
				</div>
				<div class="article">
					<h6>Software </h6>
					<a class="title" href="single.html">DeltaMaker – The new kid on the block An Elegant 3D Printer and a new wicked ass thing</a>
					<a href="single.html"><img src="images/a1.jpg" alt="" /></a>
					<p>Products were inspired by Behance's research of especially productive teams in the creative industry. Hundreds of individuals and teams were interviewed, and Behance chronicled the work habits and best practices of creative leaders. </p>
					<p>The paper products were initially designed by and for the Behance team as a way to stay organized. In 2007, at the insistence of friends who wanted Action Pads of their own...</p>
				</div>
				<div class="article">
					<h6>Printers</h6>
					<a class="title" href="single.html">Nokia offering customers printable STL phone cases for the Lumia 820 and things </a>
					<a href="single.html"><img src="images/a2.jpg" alt="" /></a>
					<p>This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia a files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. This week Nokia announced it is giving away files for printable case for it’s new Lumia 820 range. </p>
				</div>
			</div>
			<div class="col-md-4 content-right">
			<div class="content-right-top">
				<h5 class="head">Popular</h5>	
				<a href="single.html">
					<div class="editor text-center">
						<h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
						<p>A new cheap ass 3D Printer worth checking out</p>
						<label>2 Days Ago</label>
						<span></span>
					</div>
				</a>
				<a class="active" href="single.html">
					<div class="editor text-center">
						<h3>Software Review: Autodesk Inventor Fusion for Mac</h3>
						<p>3D Printing, 3D Software</p>
						<label>3 Days Ago</label>
						<span></span>
					</div>
				</a>
				<a href="single.html">
					<div class="editor text-center">
						<h3>DeltaMaker – The new kid on the block An Elegant 3D Printer</h3>
						<p>A new cheap ass 3D Printer worth checking out</p>
						<label>2 Days Ago</label>
						<span></span>
					</div>
				</a>
				<a href="single.html">
					<div class="editor text-center">
						<h3>Software Review: Autodesk Inventor Fusion for Mac</h3>
						<p>3D Printing, 3D Software</p>
						<label>3 Days Ago</label>
						<span></span>
					</div>
				</a>
				</div>
				<div class="editors-pic-grids">
					<h5>Editors Pick</h5>
					<div class="editors-pic">
						<div class="e-pic">
							<a href="single.html"><img src="images/ep1.jpg" alt="" /></a>
						</div>
						<div class="e-pic-info">
							<a href="single.html">MarkerBot Announces the ‘Replicator 2x’  For the Experimental</a>
							<span></span>
							<label>2 Days Ago</label>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="editors-pic">
						<div class="e-pic">
							<a href="single.html"><img src="images/ep2.jpg" alt="" /></a>
						</div>
						<div class="e-pic-info">
							<a href="single.html">3D Printed Record – the next revolution?</a>
							<span></span>
							<label>2 Days Ago</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
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