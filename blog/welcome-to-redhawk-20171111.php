<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "Welcome To The Website - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">Welcome To The Website</div>
					<div class="blog-meta">Posted on November 11, 2017 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <p>Welcome to my website! This is the first iteration of my website, after a complete refactor and some re-design. It is very much a work in progress. I aim to release a new iteration at least every two weeks, but this may vary depending on how busy I am with coursework and my full-time job.</p>
				
				<p>On this website you can find out more about me, <a href="<?php echo $config['urls']['pages']; ?>/projects.php" title="Projects">my projects</a> and my hobbies. If you wish to contact me, please be aware that the contact form has not yet been implemented. Use the email address on the <a href="<?php echo $config['urls']['pages']; ?>/contact.php">contact page</a>, or my social media links in the top navigation bar.</p>

                <p>The links and images currently in use throughout the website are subject to change and may not work or represent the current state of a project. To keep up with updates to the website and new content introduced in each iteration, you may follow me on <a href="https://www.twitter.com/Phixyn" title="Twitter - Alpeche Pancha (@Phixyn)">Twitter.</a></p>
				
				<p><a href="<?php echo $config['urls']['blog']; ?>/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
