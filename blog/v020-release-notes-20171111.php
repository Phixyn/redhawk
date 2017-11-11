<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">v0.2.0 Release Notes</div>
					<div class="blog-meta">Posted on November 11, 2017 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <p>
                    <b>New features:</b><br /><br />
                    * The old website content, style and layout were migrated to new template-based engine (released in v0.1.0)<br />
                    * Re-designed sections such as the top navigation bar<br />
                    * Integrated Bootstrap in new layout<br />
                    * Added a "carousel" section to the homepage
                </p>

                <p>
                    <b>Known issues:</b><br /><br />
                    * The contact form has been disabled until v1.0.0, where its implementation will be complete<br />
                    * Several links and images throughout the website may not work or represent the current state of a project<br />
                    * An issue wherein when a page has less content than the height of the window, the footer does not stick to the bottom 😖<br />
                    * An issue wherein certain pages are not responsive enough or look terrible on mobile devices (for example, the contact page)<br />
                    * Blog comments are unavailable at this time
                </p>
				
				<p><a href="<?php echo $config['urls']['pages']; ?>/blog.php" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
