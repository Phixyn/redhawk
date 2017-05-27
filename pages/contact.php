<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Contact </div>

		<!-- Main content -->
        <div class="container" id="main-content">
            <div class="row">
                <div class="col-md-6" id="contact-form">
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
                </div> <!-- /.col-* /#contact-form -->

				<div class="col-md-6" id="contact-details">
					<ul id="social-media-icons">
						<li><a href="http://www.facebook.com/phixyn" title="Facebook"><img src="<?php echo $config['paths']['images']['social']; ?>/facebook_dark.png" /></a></li>
						<li><a href="http://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $config['paths']['images']['social']; ?>/twitter02_dark.png" /></a></li>
						<li><a href="http://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $config['paths']['images']['social']; ?>/in_dark.png" /></a></li>
						<li><a href="http://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $config['paths']['images']['social']; ?>/twitter02_dark.png" /></a></li>
						<li><a href="http://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $config['paths']['images']['social']; ?>/in_dark.png" /></a></li>
					</ul>

					<p style="font-size: 1.2em; color: #999999;"> Alpeche Pancha <br />
					phixyn@phixyn.me </p>
					<p> Colchester, Essex <br />
					England, UK </p>
				</div> <!-- /.col-* /#contact-details -->
            </div> <!-- /.row -->
		</div>	<!-- /.container /#main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
