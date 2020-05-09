<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "SmartPhix: Conclusions and Future Plans";
  $postTag = "SmartPhix";
  $postTagLink = $config["urls"]["blog"] . "/tags/smartphix/index.php";
  $postDate = "April 27, 2018";
  // Override title and metadata variables here before including header
  $config['page_title'] = $postTitle . " - Blog - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; SmartPhix &ndash; Blog &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <!-- BLOG POST -->
        <div class="cell">
          <h2 class="h3 blog-title"><a href="#"><?php echo $postTitle ?></a></h2>
          <small class="blog-meta">Posted on <?php echo $postDate ?> in <a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <div class="cell">
          <p>Generally, I am happy with my prototype app for the Smartphix project, but there is a lot to be improved. It is currently not practical to use, as IP addresses and API tokens for the Hue API have to be hardcoded both in the app and server. Furthermore, the app's <code>MainActivity</code> class can be improved to boost performance and usability. Currently, the user has to tap the "Update" button to get new temperatures and set their Hue's color. However, it would be more practical to have the app update at a set interval, which could be configured by the user. Additionally, the app UI should provide a way to specify the IP addresses of the HTTP server and Hue Bridge.</p>

          <p>Despite the shortcomings of the project and the challenges faced, I've learned a fair bit about IoT development, especially its weaknesses. IoT security is still easily exploitable, which could lead to dangerous situations if not addressed. Thankfully, manufacturers seem to take this seriously, and Philips has recently announced HTTPS support for their Hue Bridge API.</p>

          <p>I've learned about making a simple API, as well as working with an existing API. Working with so many different components and bringing them all together can be challenging sometimes, and I believe that my approach to focusing on one component at a time worked well.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">Project Demo</h3>

          <p>Here's a quick demonstration of the project in action. The color of the Hue light is set according to the celsius temperature shown in the app. You can see the output of the server on the left monitor, and Android studio and API debugger on the right center monitor. The API debugger is used to turn the light off or change its color, so that you can see that by pressing "Update", the app sets the color of the Hue light again.</p>
        </div> <!-- .cell -->

        <div class="cell medium-8 large-8 medium-offset-2 large-offset-2">
          <div class="responsive-embed widescreen">
            <iframe src="https://www.youtube.com/embed/2qVRDFxVzq0" frameborder="0" allowfullscreen></iframe>
          </div> <!-- .responsive-embed .widescreen -->
        </div> <!-- .cell -->

        <div class="cell">
          <p>And here's a shorter one showing the Phidget plugged in to my PC:</p>
        </div> <!-- .cell -->

        <div class="cell medium-8 large-8 medium-offset-2 large-offset-2">
          <div class="responsive-embed widescreen">
            <iframe src="https://www.youtube.com/embed/vO-c1KCDfsM" frameborder="0" allowfullscreen></iframe>
          </div> <!-- .responsive-embed .widescreen -->
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">Future Plans and Improvements</h3>
          <ul>
            <li>Auto discovery for the HTTP server</li>
            <li>Multiple Phidget sensor support</li>
            <li><code>PhidgetHelper</code> class should handle multiple channels and automatically find all sensors connected. Currently, we expect the sensor to be in channel 0</li>
            <li>API token for Hue Bridge should be retrieved via the app in an "initial setup" screen</li>
            <li>App should have Settings, to specify user preferences</li>
            <li>HTTPS support for both API clients, to enhance security</li>
          </ul>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a></li>
              <li><span class="show-for-sr">Current: </span><?php echo $postTitle ?></li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
