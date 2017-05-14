<?php
$stylesheet_url="/redhawk/css/" . "style.css";
$images_url="/redhawk/img/";
$pages_url="/redhawk/pages/";
$root_url="/redhawk/"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $site_description; ?>" />
	<meta name="keywords" content="<?php echo $site_keywords; ?>" />
	<meta charset="iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet_url; ?>" />
</head>


<body>
	
	<div class="header-wrapper" id="header-wrapper-800px">
		<div class="row">
			<div class="col" id="site-logo">PHIXYN</div> <!-- #site-logo -->
			<nav class="col top-menu" id="top-menu-800px">
				<ul>
					<li class="col"><a href="#" title="Donate"> Donate </a></li>
					<li class="col"><a href="<?php echo $pages_url; ?>contact.php" title="Contact">Contact</a></li>
					<li class="col"><a href="<?php echo $pages_url; ?>about.php" title="About">About</a></li>
					<li class="col"><a href="<?php echo $pages_url; ?>projects.php" title="Projects">Projects</a></li>
					<li class="col"><a href="<?php echo $pages_url; ?>blog.php" title="Blog"> Blog </a></li>
					<li class="col"><a class="current" href="<?php echo $root_url; ?>index.php" title="Home">Home</a></li>
				</ul>
			</nav>	<!-- #top-menu-800px -->
		</div>		<!-- .row -->
	</div>			<!-- #header-wrapper-800px -->
	
	<header>
		<div class="col" id="social-icons">
			<ul>
				<li class="col"><a href="http://www.facebook.com/phixyn" title="Facebook"><img src="<?php echo $images_url; ?>social/facebook_dark.png" /></a></li>
				<li class="col"><a href="http://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $images_url; ?>social/twitter02_dark.png" /></a></li>
				<li class="col"><a href="http://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $images_url; ?>social/in_dark.png" /></a></li>
			</ul>
		</div>	<!-- #social-icons -->
	</header>
	
	<div class="header-wrapper" id="header-wrapper-320px">
		<nav class="top-menu" id="top-menu-320px">
			<ul>
				<li><a href="<?php echo $root_url; ?>index.php" title="Home"><img src="<?php echo $images_url; ?>home-icon.png" /></a></li>
				<li><a href="<?php echo $pages_url; ?>projects.php" title="Projects"><img src="<?php echo $images_url; ?>home-icon.png" /></a></li>
				<li><a class="current" href="#" title="Chat"><img src="<?php echo $images_url; ?>home-icon.png" /></a></li>
				<li><a href="<?php echo $pages_url; ?>about.php" title="About"><img src="<?php echo $images_url; ?>home-icon.png" /></a></li>
				<li><a href="<?php echo $pages_url; ?>contact.php" title="Contact"><img src="<?php echo $images_url; ?>home-icon.png" /></a></li>
			</ul>
		</nav>	<!-- #top-menu-320px -->
	</div>	<!-- #header-wrapper-320px -->
	
