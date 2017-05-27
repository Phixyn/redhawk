<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

<div class="body-wrapper" id="body-wrapper-800px">

	<div class="banner" id="banner-800px"> Contact </div> <!-- .banner#banner-800px -->
	
	<div class="main-content" id="content-800px">

		<div id="contact-form-800px">		
			<form name="contactForm" method="post" action="#" >
				<fieldset>
				<!-- TODO label tag needs a "for" attribute apparently -->
				<ul>
					<li><label>Name</label><input type="text" name="cName" id="contact-name" /></li>
					<li><label>Email</label><input type="text" name="cEmail" id="contact-email" /></li>
					<li><label>Website</label><input type="text" name="cWebsite" id="contact-website" /></li>
					<li class="contact-msg"><label>Message</label><textarea name="cMessage" id="contact-message"> </textarea></li>
					<li><input type="submit" name="submitContact" id="submit-contact" value="Send" /></li>
					<input type="hidden" name="contactSubmitted" id="contact-submitted" value="true" />
				</ul>
				</fieldset>
			</form>
		</div>	<!-- #contact-form-800px -->

		<div id="contact-details-800px">
			<ul id="social-media-icons">
				<li><a href="http://www.facebook.com/phixyn" title="Facebook"><img src="<?php echo $images_url; ?>social/facebook_dark.png" /></a></li>
				<li><a href="http://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $images_url; ?>social/twitter02_dark.png" /></a></li>
				<li><a href="http://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $images_url; ?>social/in_dark.png" /></a></li>
				<li><a href="http://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $images_url; ?>social/twitter02_dark.png" /></a></li>
				<li><a href="http://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $images_url; ?>social/in_dark.png" /></a></li>
			</ul>
			<p style="font-size: 1.2em; color: #999999;"> Alpeche Pancha <br />
			phixyn@phixyn.me </p>
			<p> Colchester, Essex <br />
			England, UK </p>
		</div>	<!-- #contact-details-800px -->

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
