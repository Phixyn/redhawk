<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="blog/test-post.php">Sample post</a></div>
					<div class="blog-meta">Posted on December 25, 2014 in <a href="#">Christmas</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>A new year is quickly approaching and with this, people are starting to jot down their plans and goals for the year ahead. New years' resolutions are a great way to motivate yourself and get hyped. However, they might not always work and each year, you might end up with a few goals and plans left unattended, which can make you feel rather disappointed in yourself.</p>

				<p><a href="blog/test-post.php">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->

            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title"><a href="#">Lorem Ipsum</a></div>
					<div class="blog-meta">Posted on December 25, 2014 in <a href="#">Christmas</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->
			
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus urna at leo varius tempus. Morbi non rhoncus lorem. Sed tempor eu felis ultrices bibendum. Cras feugiat, ex nec blandit ultrices, tellus nisi iaculis nisl, a mattis erat dolor at nibh. Sed placerat posuere ligula vel placerat. Sed sit amet lorem sit amet nunc sagittis tincidunt. Donec imperdiet nunc ut augue semper, rutrum commodo metus accumsan. Vivamus fermentum erat et elit bibendum dapibus eu nec mauris. Mauris fermentum dui eu vestibulum varius. Duis volutpat, erat at ultrices imperdiet, nunc magna efficitur sem, in volutpat nunc diam eget tortor. Aliquam erat volutpat. </p>
			
				<p><a href="#">Continue reading &raquo;</a></p>
            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
