<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Contact </div>

		<!-- Main content -->
        <div class="container" id="main-content">
            <div class="row">
                <div class="col-sm-8 col-md-6" id="contact-form">
					<form name="contactForm" method="post" action="#" >
						<fieldset>
							<ul>
								<li>
									<label for="contact-name">Name</label>
									<input type="text" name="cName" id="contact-name" required="required" disabled="disabled" />
								</li>
								<li>
									<label for="contact-email">Email</label>
									<input type="text" name="cEmail" id="contact-email" required="required" disabled="disabled" />
								</li>
								<li>
									<label for="contact-website">Website</label>
									<input type="text" name="cWebsite" id="contact-website" disabled="disabled" />
								</li>
								<li class="contact-msg">
									<label for="contact-message">Message</label>
									<textarea name="cMessage" id="contact-message" maxlength="500" required="required" placeholder="Describe your query..." disabled="disabled">The contact form is not yet implemented. To contact me, please send an email to the address on the right-hand side.

Alternatively, use the social media links on the right-hand side to get in touch.
									</textarea>
								</li>
								<li>
									<input type="submit" name="submitContact" id="submit-contact" value="Send" disabled="disabled" />
								</li>
								<input type="hidden" name="contactSubmitted" id="contact-submitted" value="true" disabled="disabled" />
							</ul>
						</fieldset>
					</form>
                </div> <!-- /.col-* /#contact-form -->

				<div class="col-sm-4 col-md-6" id="contact-details">
					<ul id="social-media-icons">
						<li><a href="https://www.facebook.com/phixyn" title="Facebook"><img src="<?php echo $config['paths']['images']['social']; ?>/facebook_dark.png" /></a></li>
						<li><a href="https://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $config['paths']['images']['social']; ?>/twitter02_dark.png" /></a></li>
						<li><a href="https://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $config['paths']['images']['social']; ?>/in_dark.png" /></a></li>
						<li><a href="https://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $config['paths']['images']['social']; ?>/twitter02_dark.png" /></a></li>
						<li><a href="https://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $config['paths']['images']['social']; ?>/in_dark.png" /></a></li>
					</ul>

					<p id="contact-details-header"> Alpeche Pancha <br />
					phixyn@gmail.com </p>
					<p> Ipswich, Suffolk <br />
					England, UK </p>
				</div> <!-- /.col-* /#contact-details -->
            </div> <!-- /.row -->
		</div>	<!-- /.container /#main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
