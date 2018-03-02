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

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/welcome-to-redhawk-20171111.php" title="Welcome to the website">Welcome To The Website</a></div>
					<div class="blog-meta">Posted on November 11, 2017 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>Welcome to my website! This is the first iteration of my website, after a complete refactor and some re-design. It is very much a work in progress. I aim to release a new iteration at least every two weeks, but this may vary depending on how busy I am with coursework and my full-time job.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/welcome-to-redhawk-20171111.php" title="Continue reading">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/v020-release-notes-20171111.php" title="v0.2.0 release notes">v0.2.0 Release Notes</a></div>
					<div class="blog-meta">Posted on November 11, 2017 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <p><b>New features:</b></p>
                <ul>
                    <li>The old website content, style and layout were migrated to new template-based engine (released in v0.1.0)</li>
                    <li>Re-designed sections such as the top navigation bar</li>
                    <li>Integrated Bootstrap in new layout</li>
                    <li>Added a "carousel" section to the homepage</li>
                </ul>

				<p><a href="<?php echo $config['urls']['blog']; ?>/v020-release-notes-20171111.php" title="Continue reading">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->

            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/new-years-resolutions-20141225.php" title="On New Years' resolutions">On New Years' Resolutions</a></div>
					<div class="blog-meta">Posted on December 25, 2014 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>A new year is quickly approaching and with this, people are starting to jot down their plans and goals for the year ahead. New years' resolutions are a great way to motivate yourself and get hyped. However, they might not always work and each year, you might end up with a few goals and plans left unattended, which can make you feel rather disappointed in yourself.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/new-years-resolutions-20141225.php" title="Continue reading">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->

        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
