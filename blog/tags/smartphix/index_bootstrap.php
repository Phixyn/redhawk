<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
	$config['page_title'] = "Blog - Alpeche Pancha - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header_bootstrap.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-and-gaming_bootstrap.php" title="SmartPhix">SmartPhix - The IoT and Gaming</a></div>
					<div class="blog-meta">Posted on February 20th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>Over the last two decades, technology has grown at an unprecedented pace. Many emerging technologies deserve our attention, including new Artificial Intelligence (AI) and machine learning algorithms, cryptocurrency, Internet of Things (IoT) and Virtual and Augmented Reality. When we take a look at game development, AI, VR and AR seem to be taking the spotlight, rightfully so. However, I believe that there is also place for IoT in game development, which deserves to be explored further.</p>

<p>My project, called SmartPhix, will explore the Internet of Things (IoT) using smart home devices. My aim is to investigate how video games and software applications can make use of IoT technology to enhance user experience.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-and-gaming_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-use-case_bootstrap.php" title="SmartPhix">SmartPhix - A use case for IoT in game development</a></div>
					<div class="blog-meta">Posted on February 27th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>In the previous blog post, I briefly discussed one of the potential uses for IoT in game development. This post will expand on the opportunities that this use case can provide to game developers.</p>

<p>Providing the right atmosphere in a video game is important. The feeling of immersion and being part of the game world can be the difference between a good game and an excellent game. This is one of the reasons why Virtual Reality has become so popular.</p>

<p>In the past, game developers were limited to the game itself when it came to providing immersion to players. Over time, developers gained new ways to deliver output from in-game events, such as vibration and LED lights in controllers. PC gaming peripherals also offer the ability to control their LED lights based on in-game events. For example, the RGB LED colors in Razer Chroma peripherals can be programmatically via the Chroma SDK, which can be used to develop Chroma apps. Many official game integrations, such as Overwatch’s Chroma App, are readily available and come pre-installed with the game itself.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-use-case_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-project_bootstrap.php" title="SmartPhix">SmartPhix - A simple IoT project</a></div>
					<div class="blog-meta">Posted on March 6th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

<p>SmartPhix is a simple IoT concept project that aims to highlight the features of IoT devices and how interacting with physical objects programmatically can be useful in game development. This is only a concept project and it is prototyped using <a href="https://www.phidgets.com/">Phidget</a> components, a Hue Go light and the <a href="https://www.philips.co.uk/c-p/8718696516850/hue-bridge">Hue Bridge.</a></p>

<p>In this project, I will explore the Philips Hue smart LED lights, and I will be using the Hue Bridge and its API to change the light’s settings based on environment change. However, I will not be developing a game to demonstrate the concept, as that could take a long time and the key principles of this concept could be lost in the complexity of the game’s development. Instead, I will  develop a very simple smart home IoT project to monitor the temperature inside my house and adjust my Philips Hue light color based on the current temperature. In a video game, a change in game scenery (e.g. time of day or weather) could act as a trigger for changing the Hue light. But to demonstrate this concept, we can do something as simple as monitoring the temperature of a room and have the Hue light react accordingly.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-iot-project_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-http-server_bootstrap.php" title="SmartPhix">SmartPhix - Phidget API and HTTP Server</a></div>
					<div class="blog-meta">Posted on March 13th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>For the last couple of weeks, I have been experimenting with the Python Phidget API for my IoT project. I also started looking at ways to implement the backend API server for the project, mainly learning how to write a HTTP server in Python. As with all of my newer projects, I am using Python 3 for this, as more systems are making the move to this version, with the biggest exception being legacy systems.</p>

<p>For the HTTP server, I chose to use the Python BaseHTTPServer class from the http.server module. My other options were to use a more defined and flexible library such as Flask. However, I felt that with such a simple API, it would not benefit me greatly to use Flask or any other 3rd party library over what is already included in the Python standard libraries. This should also make it easier to set the project up on multiple systems, such as a Raspberry Pi running a Linux distro.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-http-server_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-server-updates_bootstrap.php" title="SmartPhix">SmartPhix - HTTP Server Updates</a></div>
					<div class="blog-meta">Posted on March 23rd, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>Last week I was having some issues integrating my Phidget API helper class with a simple HTTP server in Python. I couldn't store an instance of my PhidgetHeper class in a way that the request handler class could access it and use its helper methods to return the current sensor temperature. However, I did not give up so easily. After digging through more documentation and reading the Python docs for the http.server module, I started understanding more about how I should structure my server code. Additionally, I found a way to pass context onto a HTTPServer instance in Python. By context, I mean member variables, additional helper methods, etc. This is exactly what I was having difficulty doing last week, as I simply could not find a way to keep a persistent instance of my PhidgetHelper class anywhere within the server code.</p>

<p>In order solve this, I had to create a subclass of HTTPServer, which I appropriately named SmartphixHTTPServer. I then created and stored an instance of my PhidgetHelper class in a member variable. The request handler classes were then able to access this member variable by referencing the server object (i.e. self.server.member_var), which is an instance variable of BaseHTTPRequestHandler. This variable seems to be instantiated when our HTTP request handler <b>sub-class (not object, the class reference itself)</b> is passed as an argument of the HTTPServer class’ constructor method.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-server-updates_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-and-retrofit_bootstrap.php" title="SmartPhix">SmartPhix - Android App and Retrofit</a></div>
					<div class="blog-meta">Posted on March 30th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>With the Smartphix HTTP server complete, it was time to start the Android app. For the past week, I made an Android app with a simple UI and set up Retrofit to be used for the API clients. However, all of the data displayed in the UI is placeholder data for now, until I start using Retrofit to get the data. For this week, I just wanted to set up a project and UI.</p>

<p>Firstly, I created a new project in Android studio and made a new app with an empty activity called “MainActivity”. Next, in the AndroidManifest.xml file, I set the name of my app and gave the UI a dark theme, choosing a theme from the <a href="https://developer.android.com/guide/topics/ui/look-and-feel/themes.html">Android Developer themes guide.</a></p>

<p>By default, Android studio projects use Gradle to manage dependencies, such as extra libraries needed for the project. To make my project use the Retrofit API libraries, all I had to do was to update the app-level “build.gradle” file to specify that I wanted Retrofit in my depedencies. Since Retrofit makes HTTP requests, it needs permission to use the network connection on the Android device. This can be specified in the AndroidManifest.xml file, with the XML tag "uses-permission".</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-and-retrofit_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-updates_bootstrap.php" title="SmartPhix">SmartPhix - Android App Updates</a></div>
					<div class="blog-meta">Posted on April 6th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>This week, I managed to make some more progress on my Smartphix Android app. The app now displays the time and date, and the current Celsius temperature.</p>

<p>To display time and date, I replaced the TextView widgets with TextClock widget, which automatically handles displaying the current time and date without any additional code. Initially, I thought that the TextClock widget only displayed time data. However, while learning about the various ways to format the time in 12-hour and 24-hour formats, I stumbled upon the <a href="https://developer.android.com/reference/java/text/SimpleDateFormat#date-and-time-patterns">SimpleDateFormat</a> patterns. Out of curiosity, I tried to use date specific formatters in a TextClock widget to see if I could display the current date using it. To my surprise it worked.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-android-app-updates_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-parsing-json-in-app_bootstrap.php" title="SmartPhix">SmartPhix - Parsing JSON data in the app</a></div>
					<div class="blog-meta">Posted on April 13th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>This past week I was faced with the challenge of using JSON data in my Android app. Retrofit libraries offer what is known as converters. Converters are classes used for converting Java types to their HTTP representation and parsing HTTP entities back into Java types. For example, a HTTP representation of JSON, which is what my HTTP server sends to the app, should be converted to a POJO (Plain Old Java Object) before being used in the app. This is why I chose to use Retrofit instead of alternative libraries such as OkHTTP. Retrofit’s converters make it very easy to parse JSON HTTP responses into POJOs.</p>

<p>To parse plain text data from my server, I used the Scalar converter, which simply takes the text and converts it to a String object. A Gson converter is needed for JSON data. I can specify the type of converter to use when creating my Retrofit object in the MainActivity class. The first step was to replace the Scalar converter with Gson.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-parsing-json-in-app_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-conclusion_bootstrap.php" title="SmartPhix">SmartPhix - Conclusions and future plans</a></div>
					<div class="blog-meta">Posted on April 27th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>Generally, I am happy with my prototype app for the Smartphix project, but there is a lot to be improved. It is currently not practical to use, as IP addresses and API tokens for the Hue API have to be hardcoded both in the app and server. Furthermore, the app’s MainActivity class can be improved to boost performance and usability. Currently, the user has to tap the “Update” button to get new temperatures and set their Hue’s color. However, it would be more practical to have the app update at a set interval, which could be configured by the user. Additionally, the app UI should provide a way to specify the IP addresses of the HTTP server and Hue Bridge.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-conclusion_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_bootstrap.php"); ?>
