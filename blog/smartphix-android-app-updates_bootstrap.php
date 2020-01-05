<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - Android App Updates - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header_bootstrap.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - Android App Updates</div>
					<div class="blog-meta">Posted on April 6th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

<p>This week, I managed to make some more progress on my Smartphix Android app. The app now displays the time and date, and the current Celsius temperature.</p>

<p>To display time and date, I replaced the TextView widgets with TextClock widget, which automatically handles displaying the current time and date without any additional code. Initially, I thought that the TextClock widget only displayed time data. However, while learning about the various ways to format the time in 12-hour and 24-hour formats, I stumbled upon the <a href="https://developer.android.com/reference/java/text/SimpleDateFormat#date-and-time-patterns">SimpleDateFormat</a> patterns. Out of curiosity, I tried to use date specific formatters in a TextClock widget to see if I could display the current date using it. To my surprise it worked.</p>

<p>This might not be the best way to do it, but it works for now. An alternative, and my initial approach, is to use a TextView and grabbing the date from a Calendar object in the MainActivity class, then setting the text of the TextView using the above linked SimpleDateFormat class to format it. Doing it all in the XML seems easier for now, so I decided to use the TextClock widget.</p>

<p>I also started playing around with Retrofit in the app. First, I temporarily changed the HTTP server to return simple text data rather than JSON, to make it easier to parse it in the app and to test Retrofit. I was able to write a simple client class that sent a GET request to the /temperature endpoint. In MainActivity, I had to create a Retrofit object and a client object. After that, I made a Retrofit Call object to actually make the API request. I then made the request asynchronously, using the enqueue method. Retrofit can make API requests synchronously or asyncronously. Synchronous requests will be done on the main thread, which means the app UI will be blocked (not updating) until the request is complete. Therefore, I chose to do the requests asynchronously, which take place on a separate thread, thus not blocking the UI thread. Using this, I was able to display the text returned by the HTTP server, cofirming that Retrofit was able to communicate with my server. The next step is to parse JSON data using data models.</p>

<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_bootstrap.php"); ?>
