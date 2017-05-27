<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

<div class="body-wrapper" id="body-wrapper-800px">

	<div class="banner" id="banner-800px"> Projects </div> <!-- .banner#banner-800px -->
	
	<div class="main-content" id="content-800px">
	
		<h1> Portfolio </h1>
		<div id="index-projects">
			
			<div class="index-project">
				<img src="#" />
				<div class="index-project-desc">
					<h3> ZoeyBot </h3>
					<p> IRC and Twitch.tv bot written in Python. </p>
					<p><a href="#"> View details &raquo; </a></p>
				</div> <!-- .index-project-desc -->
			</div> <!-- .index-project -->

			<div class="index-project">
				<img src="#" />
				<div class="index-project-desc">
					<h3> StarPhix </h3>
					<p> 2D retro space arcade game, written in Python using the pyGame module. </p>
					<p><a href="#"> View details &raquo; </a></p>
				</div> <!-- .index-project-desc -->
			</div> <!-- .index-project -->
			
			<div class="index-project">
				<img src="#" />
				<div class="index-project-desc">
					<h3> EpicPhix </h3>
					<p> This is a description </p>
					<p><a href="#"> View details &raquo; </a></p>
				</div> <!-- .index-project-desc -->
			</div> <!-- .index-project -->
			
		</div> <!-- #index-projects -->
		
		<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
		
	</div>	<!-- .main-content#content-800px -->
	<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
</div>	<!-- .body-wrapper#body-wrapper-800px -->

<div class="body-wrapper" id="body-wrapper-320px">

	<div class="banner" id="banner-320px"> Projects </div> <!-- .banner#banner-320px -->

	<div class="main-content" id="content-320px">
		<p> This is my mobile portfolio. You can view the full site by <a href="#">clicking here!</a>
		<h1> Portfolio </h1>
		<p style="text-align: center"><img src="#" />
		<img src="#" />
		<img src="#" /></p>
	</div>	<!-- .main-content#content-320px -->

</div>	<!-- .body-wrapper#body-wrapper-320px -->

<?php require_once(INCLUDES . "footer.php"); ?>
