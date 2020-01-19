<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "SmartPhix: Android App Updates";
  $postTag = "SmartPhix";
  $postTagLink = $config["urls"]["blog"] . "/tags/smartphix/index.php";
  $postDate = "April 6, 2018";
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
          <p class="lead">This week, I managed to make some more progress on my Smartphix Android app. The app now displays the time and date, and the current Celsius temperature.</p>

          <p>To display time and date, I replaced the <code>TextView</code> widgets with <code>TextClock</code> widget, which automatically handles displaying the current time and date without any additional code. Initially, I thought that the <code>TextClock</code> widget only displayed time data. However, while learning about the various ways to format the time in 12-hour and 24-hour formats, I stumbled upon the <a href="https://developer.android.com/reference/java/text/SimpleDateFormat#date-and-time-patterns">SimpleDateFormat</a> patterns. Out of curiosity, I tried to use date specific formatters in a <code>TextClock</code> widget to see if I could display the current date using it. To my surprise it worked.</p>

          <p>This might not be the best way to do it, but it works for now. An alternative, and my initial approach, is to use a <code>TextView</code> and grabbing the date from a <code>Calendar</code> object in the <code>MainActivity</code> class, then setting the text of the <code>TextView</code> using the above linked <code>SimpleDateFormat</code> class to format it. Doing it all in the XML seems easier for now, so I decided to use the <code>TextClock</code> widget.</p>

          <p>I also started playing around with Retrofit in the app. First, I temporarily changed the HTTP server to return simple text data rather than JSON, to make it easier to parse it in the app and to test Retrofit. I was able to write a simple client class that sent a <code>GET</code> request to the <code>/temperature</code> endpoint. In <code>MainActivity</code>, I had to create a Retrofit object and a client object. After that, I made a Retrofit Call object to actually make the API request. I then made the request asynchronously, using the enqueue method. Retrofit can make API requests synchronously or asyncronously. Synchronous requests will be done on the main thread, which means the app UI will be blocked (not updating) until the request is complete. Therefore, I chose to do the requests asynchronously, which take place on a separate thread, thus not blocking the UI thread. Using this, I was able to display the text returned by the HTTP server, cofirming that Retrofit was able to communicate with my server. The next step is to parse JSON data using data models.</p>
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
