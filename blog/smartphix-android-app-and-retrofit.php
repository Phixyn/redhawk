<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "SmartPhix: Android App and Retrofit";
  $postTag = "SmartPhix";
  $postTagLink = $config["urls"]["blog"] . "/tags/smartphix/index.php";
  $postDate = "March 30, 2018";
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
          <p class="lead">With the Smartphix HTTP server complete, it was time to start the Android app. For the past week, I made an Android app with a simple UI and set up Retrofit to be used for the API clients. However, all of the data displayed in the UI is placeholder data for now, until I start using Retrofit to get the data. For this week, I just wanted to set up a project and UI.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <p>Firstly, I created a new project in Android studio and made a new app with an empty activity called <code>MainActivity</code>. Next, in the <code>AndroidManifest.xml</code> file, I set the name of my app and gave the UI a dark theme, choosing a theme from the <a href="https://developer.android.com/guide/topics/ui/look-and-feel/themes.html">Android Developer themes guide.</a></p>

          <p>By default, Android studio projects use Gradle to manage dependencies, such as extra libraries needed for the project. To make my project use the Retrofit API libraries, all I had to do was to update the app-level <code>build.gradle</code> file to specify that I wanted Retrofit in my depedencies. Since Retrofit makes HTTP requests, it needs permission to use the network connection on the Android device. This can be specified in the <code>AndroidManifest.xml</code> file, with the XML tag <code>uses-permission</code>.</p>

          <p>For the UI, I played around with the <code>MainActivity.xml</code> file a bit. I started by having all of my elements in a <code>RelativeLayout</code>. Layouts act as containers for other UI elements, known as widgets. In my layout I added <code>TextView</code> widgets with placeholder data. I wanted to display the time, date, connection status to the HTTP server, and the temperatures. I decided to group the temperatures together in a "rectangle" by surrounding the temperature text with a border. For that, I added a <code>border.xml</code> in my drawable folder, which specifies a transparent rectangle, and used that in <code>MainActivity.xml</code>.</p>

          <p>I found it hard to position and align elements neatly. So instead of having all widgets inside the <code>RelativeLayout</code>, I decided to group them using <code>LinearLayout</code>. I added two <code>LinearLayout</code> widgets inside the <code>RelativeLayout</code>, and then moved the time and date widgets to one <code>LinearLayout</code>, and the temperature text to another <code>LinearLayout</code>. I decided to leave the connection status text in the <code>RelativeLayout</code>, since it was already perfectly positioned. Using <code>LinearLayouts</code> made it easier to make widgets appear consistent in different screen sizes and also made it easier to align them using the <code>android:layout_gravity="center_horizontal"</code> property. In the future I would like to explore more layout options, particularly the <code>ConstraintLayout</code>, which seems to be more widely used. However, the default <code>RelativeLayout</code> will do for this concept app. Next week, I aim to have some of these <code>TextView</code> widgets show real data.</p>
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
