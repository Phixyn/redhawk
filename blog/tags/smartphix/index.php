<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
	$config['page_title'] = "Blog - Alpeche Pancha - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-http-server-20180305.php" title="SmartPhix HTTP Server">SmartPhix HTTP Server</a></div>
					<div class="blog-meta">Posted on March 6th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" target="_blank"><img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" alt="Internet of Things" style="width: 40%;height:50%;" /></a>

				<p>Last week, I discussed a <a href="<?php echo $config['urls']['blog']; ?>/smartphix-home-automation-20180220.php" target="_blank">new project idea</a> I had involving Phidgets and a companion app. I started looking at the backend for the project, mainly writing the HTTP server in Python. As with all of my newer projects, I am using Python 3 for this, as more systems are making the move to this version, with the biggest exception being legacy systems.</p>

				<p>For the HTTP server, I chose to use the Python BaseHTTPServer class from the http.server module. My other options were to use a more defined and flexible library such as <a href="http://flask.pocoo.org/" target="_blank">Flask</a>. However, I felt that with such a simple API, it would not benefit me greatly to use Flask or any other 3rd party library over what comes shipped with Python. This should also make it easier to set the project up on multiple systems, such as my Arch Linux Raspberry Pi.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-http-server-20180305.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/smartphix-home-automation-20180220.php" title="SmartPhix - A home automation project">SmartPhix - A home automation project</a></div>
					<div class="blog-meta">Posted on February 20, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/IMG_20180302_122939.jpg" target="_blank"><img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/IMG_20180302_122939.jpg" alt="Phidgets I/O board and temperature sensor" style="width: 35%;height:50%;" /></a>
				
				<p>SmartPhix is a small smart home project. The goal is to monitor temperatures in houses, offices and other interior rooms. It is currently being prototyped using <a href="https://www.phidgets.com/" target="_blank">Phidget</a> components.</p>
				
				<p>IoT and home automation projects have been on my to-do list for a couple of years. Recently, my co-workers set up a home automation channel on our Discord server to discuss their latest inventions. It made sense for me to join in and start my own project.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/smartphix-home-automation-20180220.php" title="Continue reading">Continue reading &raquo;</a></p>
			</div> <!-- /.row /.blog-post -->

        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
