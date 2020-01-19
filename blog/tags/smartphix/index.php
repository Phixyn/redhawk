<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "SmartPhix - Blog - Phixyn";
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
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-and-gaming.php"><img src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post image" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-and-gaming.php">SmartPhix: The IoT and Gaming</a></h2>
          <small class="blog-meta">Posted on February 20, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>Over the last two decades, technology has grown at an unprecedented pace. Many emerging technologies deserve our attention, including new Artificial Intelligence (AI) and machine learning algorithms, cryptocurrency, Internet of Things (IoT) and Virtual and Augmented Reality. When we take a look at game development, AI, VR and AR seem to be taking the spotlight, rightfully so. However, I believe that there is also place for IoT in game development, which deserves to be explored further.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-and-gaming.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-use-case.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-use-case.php">SmartPhix: A Use Case For IoT In Game Development</a></h2>
          <small class="blog-meta">Posted on February 27, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>In the previous blog post, I briefly discussed one of the potential uses for IoT in game development. This post will expand on the opportunities that this use case can provide to game developers.</p>

          <p>Providing the right atmosphere in a video game is important. The feeling of immersion and being part of the game world can be the difference between a good game and an excellent game. This is one of the reasons why Virtual Reality has become so popular.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-use-case.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-project.php"><img src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/IMG_20180302_122939.jpg" alt="Blog post image" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-project.php">SmartPhix: A Simple IoT Project</a></h2>
          <small class="blog-meta">Posted on March 6, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>SmartPhix is a simple IoT concept project that aims to highlight the features of IoT devices and how interacting with physical objects programmatically can be useful in game development. This is only a concept project and it is prototyped using <a href="https://www.phidgets.com/" target="_blank">Phidget</a> components, a Hue Go light and the <a href="https://www.philips.co.uk/c-p/8718696516850/hue-bridge" target="_blank">Hue Bridge.</a></p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-project.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-http-server.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-http-server.php">SmartPhix: Phidget API and HTTP Server</a></h2>
          <small class="blog-meta">Posted on March 13, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>For the last couple of weeks, I have been experimenting with the Python Phidget API for my IoT project. I also started looking at ways to implement the backend API server for the project, mainly learning how to write a HTTP server in Python. As with all of my newer projects, I am using Python 3 for this, as more systems are making the move to this version, with the biggest exception being legacy systems.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-http-server.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-server-updates.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-server-updates.php">SmartPhix: HTTP Server Updates</a></h2>
          <small class="blog-meta">Posted on March 23, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>Last week I was having some issues integrating my Phidget API helper class with a simple HTTP server in Python. I couldn't store an instance of my <code>PhidgetHelper</code> class in a way that the request handler class could access it and use its helper methods to return the current sensor temperature. However, I did not give up so easily. After digging through more documentation and reading the Python docs for the <code>http.server</code> module, I started understanding more about how I should structure my server code. Additionally, I found a way to pass context onto a <code>HTTPServer</code> instance in Python. By context, I mean member variables, additional helper methods, etc. This is exactly what I was having difficulty doing last week, as I simply could not find a way to keep a persistent instance of my <code>PhidgetHelper</code> class anywhere within the server code.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-server-updates.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-and-retrofit.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-and-retrofit.php">SmartPhix: Android App and Retrofit</a></h2>
          <small class="blog-meta">Posted on March 30, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>With the Smartphix HTTP server complete, it was time to start the Android app. For the past week, I made an Android app with a simple UI and set up Retrofit to be used for the API clients. However, all of the data displayed in the UI is placeholder data for now, until I start using Retrofit to get the data. For this week, I just wanted to set up a project and UI.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-and-retrofit.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-updates.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-updates.php">SmartPhix: Android App Updates</a></h2>
          <small class="blog-meta">Posted on April 6, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>This week, I managed to make some more progress on my Smartphix Android app. The app now displays the time and date, and the current Celsius temperature.</p>

          <p>To display time and date, I replaced the <code>TextView</code> widgets with <code>TextClock</code> widget, which automatically handles displaying the current time and date without any additional code. Initially, I thought that the <code>TextClock</code> widget only displayed time data. However, while learning about the various ways to format the time in 12-hour and 24-hour formats, I stumbled upon the <a href="https://developer.android.com/reference/java/text/SimpleDateFormat#date-and-time-patterns" target="_blank">SimpleDateFormat</a> patterns. Out of curiosity, I tried to use date specific formatters in a <code>TextClock</code> widget to see if I could display the current date using it. To my surprise it worked.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-updates.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-parsing-json-in-app.php"><img src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/Philips-Hue-Alexa-Bridge-Control-Smarthome.jpg" alt="Blog post image" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-parsing-json-in-app.php">SmartPhix: Parsing JSON Data In The App</a></h2>
          <small class="blog-meta">Posted on April 13, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>This past week I was faced with the challenge of using JSON data in my Android app. Retrofit libraries offer what is known as converters. Converters are classes used for converting Java types to their HTTP representation and parsing HTTP entities back into Java types. For example, a HTTP representation of JSON, which is what my HTTP server sends to the app, should be converted to a POJO (Plain Old Java Object) before being used in the app. This is why I chose to use Retrofit instead of alternative libraries such as <code>OkHTTP</code>. Retrofit's converters make it very easy to parse JSON HTTP responses into POJOs.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-parsing-json-in-app.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-conclusion.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-conclusion.php">SmartPhix: Conclusions and Future Plans</a></h2>
          <small class="blog-meta">Posted on April 27, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>Generally, I am happy with my prototype app for the Smartphix project, but there is a lot to be improved. It is currently not practical to use, as IP addresses and API tokens for the Hue API have to be hardcoded both in the app and server. Furthermore, the app's <code>MainActivity</code> class can be improved to boost performance and usability. Currently, the user has to tap the "Update" button to get new temperatures and set their Hue's color. However, it would be more practical to have the app update at a set interval, which could be configured by the user. Additionally, the app UI should provide a way to specify the IP addresses of the HTTP server and Hue Bridge.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-conclusion.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
