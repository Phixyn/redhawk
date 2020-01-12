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
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/welcome-to-redhawk-20171111_bootstrap.php" title="Welcome to the website">Welcome To The Website</a></div>
					<div class="blog-meta">Posted on November 11, 2017 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>Welcome to my website! This is the first iteration of my website, after a complete refactor and some re-design. It is very much a work in progress. I aim to release a new iteration at least every two weeks, but this may vary depending on how busy I am with coursework and my full-time job.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/welcome-to-redhawk-20171111_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->

			<div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/v020-release-notes-20171111_bootstrap.php" title="v0.2.0 release notes">v0.2.0 Release Notes</a></div>
					<div class="blog-meta">Posted on November 11, 2017 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <p><b>New features:</b></p>
                <ul>
                    <li>The old website content, style and layout were migrated to new template-based engine (released in v0.1.0)</li>
                    <li>Re-designed sections such as the top navigation bar</li>
                    <li>Integrated Bootstrap in new layout</li>
                    <li>Added a "carousel" section to the homepage</li>
                </ul>

				<p><a href="<?php echo $config['urls']['blog']; ?>/v020-release-notes-20171111_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->

            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="<?php echo $config['urls']['blog']; ?>/new-years-resolutions-20141225_bootstrap.php" title="On New Years' resolutions">On New Years' Resolutions</a></div>
					<div class="blog-meta">Posted on December 25, 2014 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>A new year is quickly approaching and with this, people are starting to jot down their plans and goals for the year ahead. New years' resolutions are a great way to motivate yourself and get hyped. However, they might not always work and each year, you might end up with a few goals and plans left unattended, which can make you feel rather disappointed in yourself.</p>

				<p><a href="<?php echo $config['urls']['blog']; ?>/new-years-resolutions-20141225_bootstrap.php" title="Continue reading">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->

        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_bootstrap.php"); ?>
