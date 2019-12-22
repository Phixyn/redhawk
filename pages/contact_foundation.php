<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "Contact - Alpeche Pancha - Phixyn";
  require_once($config["paths"]["includes"]["templates"] . "/header_foundation.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; Contact &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <div class="cell medium-6 large-6">
          <form>
            <div class="input-group">
              <span class="input-group-label" style="min-width: 20%;">Name</span>
              <input class="input-group-field" type="text" placeholder="Name" />
            </div> <!-- .input-group -->

            <div class="input-group">
              <span class="input-group-label" style="min-width: 20%;">Email</span>
              <input class="input-group-field" type="email" placeholder="Email" />
            </div> <!-- .input-group -->

            <div class="input-group">
              <span class="input-group-label" style="min-width: 20%;">Website</span>
              <input class="input-group-field" type="text" placeholder="Website (Optional)" />
            </div> <!-- .input-group -->

            <div class="input-group">
              <span class="input-group-label" style="min-width: 20%;">Message</span>
              <textarea class="input-group-field" placeholder="Message"></textarea>
            </div> <!-- .input-group -->

            <button type="button" class="button float-right">Submit</button>
          </form>
        </div> <!-- .cell -->

        <div class="cell medium-5 large-5 medium-offset-1 large-offset-1" id="contact-details">
        <!-- <div class="cell" id="contact-details"> -->
          <h2 class="h5 subheader">
            Alpeche Pancha <br />
            phixyn@gmail.com
          </h2>
          <p></p>
          <p>
            Ipswich, Suffolk <br />
            England, UK
          </p>
          <hr />
          <div class="button-group" id="social-media-icons">
            <p>
              <a href="https://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $config['paths']['images']['social']; ?>/twitter02_dark.png" alt="Twitter" /></a>
              <a href="https://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $config['paths']['images']['social']; ?>/in_dark.png" alt="LinkedIn" /></a>
              <a href="https://www.facebook.com/phixyn" title="Facebook Profile"><img src="<?php echo $config['paths']['images']['social']; ?>/facebook_dark.png" alt="Facebook profile" /></a>
              <a href="https://www.twitter.com/Phixyn" title="Twitter"><img src="<?php echo $config['paths']['images']['social']; ?>/twitter02_dark.png" alt="Twitter" /></a>
              <a href="https://uk.linkedin.com/in/alpechepancha" title="LinkedIn"><img src="<?php echo $config['paths']['images']['social']; ?>/in_dark.png" alt="LinkedIn" /></a>
            </p>
          </div> <!-- .button-group -->
        </div> <!-- .cell #contact-details -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>
