<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - Android App and Retrofit - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - Android App and Retrofit</div>
					<div class="blog-meta">Posted on March 30th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

<p>With the Smartphix HTTP server complete, it was time to start the Android app. For the past week, I made an Android app with a simple UI and set up Retrofit to be used for the API clients. However, all of the data displayed in the UI is placeholder data for now, until I start using Retrofit to get the data. For this week, I just wanted to set up a project and UI.</p>

<p>Firstly, I created a new project in Android studio and made a new app with an empty activity called “MainActivity”. Next, in the AndroidManifest.xml file, I set the name of my app and gave the UI a dark theme, choosing a theme from the <a href="https://developer.android.com/guide/topics/ui/look-and-feel/themes.html">Android Developer themes guide.</a></p>

<p>By default, Android studio projects use Gradle to manage dependencies, such as extra libraries needed for the project. To make my project use the Retrofit API libraries, all I had to do was to update the app-level “build.gradle” file to specify that I wanted Retrofit in my depedencies. Since Retrofit makes HTTP requests, it needs permission to use the network connection on the Android device. This can be specified in the AndroidManifest.xml file, with the XML tag "uses-permission".</p>

<p>For the UI, I played around with the MainActivity.xml file a bit. I started by having all of my elements in a RelativeLayout. Layouts act as containers for other UI elements, known as widgets. In my layout I added TextView widgets with placeholder data. I wanted to display the time, date, connection status to the HTTP server, and the temperatures. I decided to group the temperatures together in a “rectangle” by surrounding the temperature text with a border. For that, I added a “border.xml” in my drawable folder, which specifies a transparent rectangle, and used that in MainActivity.xml.</p>

<p>I found it hard to position and align elements neatly. So instead of having all widgets inside the RelativeLayout, I decided to group them using LinearLayout. I added two LinearLayout widgets inside the RelativeLayout, and then moved the time and date widgets to one LinearLayout, and the temperature text to another LinearLayout. I decided to leave the connection status text in the RelativeLayout, since it was already perfectly positioned. Using LinearLayouts made it easier to make widgets appear consistent in different screen sizes and also made it easier to align them using the android:layout_gravity="center_horizontal" property. In the future I would like to explore more layout options, particularly the ConstraintLayout, which seems to be more widely used. However, the default RelativeLayout will do for this concept app. Next week, I aim to have some of these TextView widgets show real data.</p>

<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
