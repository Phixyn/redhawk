<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

<div class="body-wrapper" id="body-wrapper-800px">

	<div class="banner" id="banner-800px"> Blog </div> <!-- .banner#banner-800px -->
	
	<div class="main-content" id="content-800px" style="padding-top: 1%;">
		<div class="blog-post">
			<div class="blog-header">
				<div class="blog-title"><a href="blog/test-post.php">Sample post</a></div>
				<div class="blog-meta">Posted on December 25, 2014 in <a href="#">Christmas</a> &nbsp; | &nbsp; Comments: Off</div>
			</div>	<!-- .blog-header -->
			
			<p>A new year is quickly approaching and with this, people are starting to jot down their plans and goals for the year ahead. New years' resolutions are a great way to motivate yourself and get hyped. However, they might not always work and each year, you might end up with a few goals and plans left unattended, which can make you feel rather disappointed in yourself.</p>
			<p><a href="blog/test-post.php">Continue reading &raquo;</a></p>
		</div>	<!-- .blog-post -->

		<div class="blog-post">
			<div class="blog-header">
				<div class="blog-title"><a href="#">Lorem Ipsum</a></div>
				<div class="blog-meta">Posted on December 25, 2014 in <a href="#">Christmas</a> &nbsp; | &nbsp; Comments: Off</div>
			</div>	<!-- .blog-header -->
			
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus urna at leo varius tempus. Morbi non rhoncus lorem. Sed tempor eu felis ultrices bibendum. Cras feugiat, ex nec blandit ultrices, tellus nisi iaculis nisl, a mattis erat dolor at nibh. Sed placerat posuere ligula vel placerat. Sed sit amet lorem sit amet nunc sagittis tincidunt. Donec imperdiet nunc ut augue semper, rutrum commodo metus accumsan. Vivamus fermentum erat et elit bibendum dapibus eu nec mauris. Mauris fermentum dui eu vestibulum varius. Duis volutpat, erat at ultrices imperdiet, nunc magna efficitur sem, in volutpat nunc diam eget tortor. Aliquam erat volutpat. </p> 
			
			<p><a href="#">Continue reading &raquo;</a></p>
		</div>	<!-- .blog-post -->
						
	</div>	<!-- .main-content#content-800px -->
	<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
</div>	<!-- .body-wrapper#body-wrapper-800px -->

<div class="body-wrapper" id="body-wrapper-320px">

	<div class="banner" id="banner-320px"> Blog </div> <!-- .banner#banner-320px -->

	<div class="main-content" id="content-320px">
		<!-- <h1> Recent posts </h1> -->
		<div class="blog-post">
			<div class="blog-header">
				<div class="blog-title blog-title-320px"><a href="blog/test-post.php">Sample post</a></div>
				<div class="blog-meta">December 25, 2014 in <a href="#">Christmas</a>, <a href="#">Long category name</a></div>
			</div>	<!-- .blog-header -->
			
			<p>A new year is quickly approaching and with this, people are starting to jot down their plans and goals for the year ahead. New years' resolutions are a great way to motivate yourself and get hyped. However, they might not always work and each year, you might end up with a few goals and plans left unattended, which can make you feel rather disappointed in yourself.</p>
			<p><a href="blog/test-post.php">Open &raquo;</a></p>
		</div>	<!-- .blog-post -->

		<div class="blog-post">
			<div class="blog-header">
				<div class="blog-title blog-title-320px"><a href="#">Lorem Ipsum</a></div>
				<div class="blog-meta">December 25, 2014 in <a href="#">Christmas</a></div>
			</div>	<!-- .blog-header -->
			
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi cursus urna at leo varius tempus. Morbi non rhoncus lorem. Sed tempor eu felis ultrices bibendum. Cras feugiat, ex nec blandit ultrices, tellus nisi iaculis nisl, a mattis erat dolor at nibh. Sed placerat posuere ligula vel placerat. Sed sit amet lorem sit amet nunc sagittis tincidunt. Donec imperdiet nunc ut augue semper, rutrum commodo metus accumsan. Vivamus fermentum erat et elit bibendum dapibus eu nec mauris. Mauris fermentum dui eu vestibulum varius. Duis volutpat, erat at ultrices imperdiet, nunc magna efficitur sem, in volutpat nunc diam eget tortor. Aliquam erat volutpat. </p> 
			
			<p><a href="#">Open &raquo;</a></p>
		</div>	<!-- .blog-post -->

	</div>	<!-- .main-content#content-320px -->

</div>	<!-- .body-wrapper#body-wrapper-320px -->

<?php require_once(INCLUDES . "footer.php"); ?>
