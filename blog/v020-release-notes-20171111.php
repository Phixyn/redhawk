<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "v0.2.0 Release Notes - Blog - Phixyn";
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

                <p><b>New features:</b></p>
                <ul>
                    <li>The old website content, style and layout were migrated to new template-based engine (released in v0.1.0)</li>
                    <li>Re-designed sections such as the top navigation bar</li>
                    <li>Integrated Bootstrap in new layout</li>
                    <li>Added a "carousel" section to the homepage</li>
                </ul>

                <p><b>Known issues:</b></p>
                <ul>
                    <li>The contact form has been disabled until v1.0.0, where its implementation will be complete</li>
                    <li>Several links and images throughout the website may not work or represent the current state of a project</li>
                    <li>An issue wherein when a page has less content than the height of the window, the footer does not stick to the bottom 😖</li>
                    <li>An issue wherein certain pages are not responsive enough or look terrible on mobile devices (for example, the contact page)</li>
                    <li>Blog comments are unavailable at this time</li>
                </ul>
				
				<p><a href="<?php echo $config['urls']['blog']; ?>/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
