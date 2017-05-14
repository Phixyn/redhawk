<?php 
define("INCLUDES", $_SERVER["DOCUMENT_ROOT"] . "/redhawk/inc/");
$page_title="About - Alpeche Pancha - Phixyn";
$site_description="Phixyn's personal website";
$site_keywords="Phixyn, is, awesome";

require_once(INCLUDES . "header.php"); ?>

<div class="body-wrapper" id="body-wrapper-800px">

	<div class="banner" id="banner-800px"> About </div> <!-- .banner#banner-800px -->
	
	<div class="main-content" id="content-800px">
		<h1 style="text-align: center; padding: 4% 0;"><span style="color: #BBBBBB;">My name is</span> Alpeche <span style="color: #BBBBBB;">and I am a</span> student <span style="color: #BBBBBB;">at the </span>University of Essex.</h1>
				
		<div id="content-intro-800px">
			<img src="<?php echo $images_url; ?>me3.png" style="width: 226px; height: 218px; float: right; padding-left: 8%;" />
			<h1> What I do </h1>
			<p> I make videogames, websites and everything in between. Currently, I'm an undergraduate computer science student on my second year, at the University of Essex, England. As my third and final year approaches, I am looking to start building up my career and making my first steps into the real world. While that does sound a bit daunting, it is mostly exciting for me and it is the moment that I've been waiting for ever since I started high school. </p>
			<p style="text-align: center; font-style:italic;"> <a href="#">My work</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">Request CV</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">Contact me</a> </p>
		</div>	<!-- #content-intro-800px -->
		
		<div id="about-body-800px">		
			<h3> My projects </h3>
			<p> This site is designed to be responsive, with a fluid layout that adjusts to the user's screen. It is also mobile friendly! That is just an example of what I can achieve with 6 years of experience in web development. I am capable of developing solid, standards compliant frontends with XHTML, HTML5, CSS2/3 and JavaScript, with PHP backends that offer awesome features and functionality. In the past, I have worked with Wordpress and developed a custom theme in PHP for my Wordpress site. All of my projects are hosted in a VPS running a Linux OS. As such, and considering I use Linux regularly on my laptop, I am confortable with Unix like systems and have used several distributions. I am confortable with command-line interfaces and even know how to script in Bash! </p>
		
			<p> I am also a keen programmer with 6 years of experience in Python, backed by my ongoing "ZoeyBot" project and my Starphix game. During my first year at University, I started learning Java and achieved 100% grades on both of my Java assignments. This year I'm learning C++ and applying my Java skills in a game development project. My second year Application Programming module assignment involves developing my own version of the classic Tetris game. This project will be completed by December and there will be a potential dev blog while I work on it! </p>
		
			<p> You can find out more about my experience, skills and qualities by <a href="#">requesting a CV.</a> Alternatively, feel free to <a href="#">contact me!</a></p>
		
		</div> <!-- #about-body-800px -->
		
		<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
		
	</div>	<!-- .main-content#content-800px -->
	
	<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->

</div>	<!-- .body-wrapper#body-wrapper-800px -->

<div class="body-wrapper" id="body-wrapper-320px">

	<div class="banner" id="banner-320px"> About </div> <!-- .banner#banner-320px -->

	<div class="main-content" id="content-320px">
		<h1> Hello, my name is Alpeche Pancha! </h1>
		<img src="<?php echo $images_url; ?>me3.png" class="my-avatar"/>
		<p> This is my mobile portfolio. You can view the full site by <a href="#">clicking here!</a>
		<p> If you want, check out some of the links above or below! </p>
		<h1> Some of my work... </h1>
		<img src="#" />
		<img src="#" />
		<img src="#" />
	</div>	<!-- .main-content#content-320px -->

</div>	<!-- .body-wrapper#body-wrapper-320px -->

<?php require_once(INCLUDES . "footer.php"); ?>
