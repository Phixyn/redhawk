<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
	$config['page_title'] = "On New Years' Resolutions - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">On New Years' Resolutions</div>
					<div class="blog-meta">Posted on December 25, 2014 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

				<p>A new year is quickly approaching and with this, people are starting to jot down their plans and goals for the year ahead. New years&#8217; resolutions are a great way to motivate yourself and get hyped. However, they might not always work and each year, you might end up with a few goals and plans left unattended, which can make you feel rather disappointed in yourself.</p>
				
				<p>The sad truth is that simply writing down your goals does not help you get any closer to actually achieving them. You need to take action in order to complete them. Thus, why would you wait until the next year to do this? You can start taking action days, weeks and even months before the new year!</p>
				
				<p>Let&#8217;s pretend one of the items in your new years&#8217; resolution is to launch a website. Maybe you haven&#8217;t started planning anything yet, and you don&#8217;t even have any idea of what your website is going to be about. That&#8217;s fine. If you have some free time during Christmas week and you&#8217;re eager to start working on your website, you can take some simple steps before January hits the calendar. Brainstorm ideas, think about your domain name, register a domain name. Christmas is a great time to register your domain name and look for potential hosting companies, as many companies tend to offer great discounts and Christmas deals.</p>
				
				<p>That was just one example of how you can start working towards your new years resolution before the new year. There are many more ways to achieve this, and you can probably come up with a few by taking a look at your new years resolution list. Get ahead of the game by starting to work on your goals and plans for the new year before the fireworks, and you will truly enter the new year on your right foot!</p>
				
				<p><a href="<?php echo $config['urls']['pages']; ?>/blog.php" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
