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
