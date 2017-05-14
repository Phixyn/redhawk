<?php 
define("INCLUDES", $_SERVER["DOCUMENT_ROOT"] . "/redhawk/inc/");
$page_title="Home - Alpeche Pancha - Phixyn";
$site_description="Phixyn's personal website";
$site_keywords="Phixyn, is, awesome";

require_once(INCLUDES . "header.php"); ?>

<div class="body-wrapper" id="body-wrapper-800px">

	<div class="banner" id="banner-800px"> Student. Game dev. Programmer. Web designer. </div> <!-- .banner#banner-800px -->
	
	<div class="main-content" id="content-800px">
		<div id="content-intro-800px">
		<img src="<?php echo $images_url; ?>me3.png" style="width: 226px; height: 218px; float: right; padding-left: 8%;" />
		<h1> Hello, my name is Alpeche Pancha... </h1>
		<p> ...and I like to make videogames. During the day, I live life as a <a href="#">Computer Science</a> student at the University of Essex, in England. Later on in the day, you might catch me frivolously coding in my bedroom and <a href="#">tweeting</a> about my coding adventures. At night, I play games while watching live <a href="#">streams</a> of other people who also happen to play games. Welcome to my life! </p>
		<!--<p style="text-align: center; font-style:italic;"> <a href="#">More about me</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">My work</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">Contact me</a> </p>-->
		</div>	<!-- #content-intro-800px -->
		
		<h2 style="clear: both; padding-top: 2%;"> Some of my work </h2>
		<div id="index-projects">
			<div class="index-project">
				<img src="<?php echo $images_url; ?>gameplay3.png" height="180px" />
				<div class="index-project-desc">
					<h3><a href="#"> TetrisPhix </a></h3>
					<p> Tetris clone written in Java using the AWT and Swing libraries. </p>
					<p><a href="#"> View details &raquo; </a></p>
				</div> <!-- .index-project-desc -->
			</div> <!-- .index-project -->
			
			<div class="index-project">
				<img src="<?php echo $images_url; ?>colorPulse_V4.jpg" height="180px" />
				<div class="index-project-desc">
					<h3><a href="#"> ZoeyBot </a></h3>
					<p> IRC and Twitch.tv bot written in Python. </p>
					<p><a href="#"> View details &raquo; </a></p>
				</div> <!-- .index-project-desc -->
			</div> <!-- .index-project -->
			
			<div class="index-project">
				<img src="<?php echo $images_url; ?>starphix.png" height="180px" />
				<div class="index-project-desc">
					<h3><a href="#"> StarPhix </a></h3>
					<p> Retro space arcade game, written in Python using the pyGame module. </p>
					<p><a href="#"> View details &raquo; </a></p>
				</div> <!-- .index-project-desc -->
			</div> <!-- .index-project -->
						
		</div> <!-- #index-projects -->
		
		<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
		
	</div>	<!-- .main-content#content-800px -->
	<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
</div>	<!-- .body-wrapper#body-wrapper-800px -->

<div class="body-wrapper" id="body-wrapper-320px">

	<div class="banner" id="banner-320px"> Student. Game dev. Programmer. Web designer. </div> <!-- .banner#banner-320px -->

	<div class="main-content" id="content-320px">
		<h1 style="text-align: center;"> Hello, my name is Alpeche Pancha! </h1>
		<p style="text-align: center;"><img src="<?php echo $images_url; ?>me3.png" class="my-avatar"/></p>
		<p> This is my mobile portfolio. You can view the full site by <a href="#">clicking here!</a>
		<p> If you want, check out some of the links above or below! </p>
		<h1> Some of my work... </h1>
		<p style="text-align: center;"><img src="#" />
		<img src="#" />
		<img src="#" /></p>
	</div>	<!-- .main-content#content-320px -->

</div>	<!-- .body-wrapper#body-wrapper-320px -->

<?php require_once(INCLUDES . "footer.php"); ?>
