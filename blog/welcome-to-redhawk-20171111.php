<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Welcome To The Website";
  $postTag = "Redhawk";
  $postTagLink = "#";
  $postDate = "November 11, 2017";
  // Override title and metadata variables here before including header
  $config['page_title'] = $postTitle . " - Blog - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; Blog &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <!-- BLOG POST -->
        <div class="cell">
          <h2 class="h3 blog-title"><a href="#"><?php echo $postTitle ?></a></h2>
          <small class="blog-meta">Posted on <?php echo $postDate ?> in <a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <div class="cell">
          <p class="lead">Welcome to my website! This is the first iteration of my website, after a complete refactor and some re-design. It is very much a work in progress. I aim to release a new iteration at least every two weeks, but this may vary depending on how busy I am with coursework and my full-time job.</p>
				
	  			<p>On this website you can find out more about me, <a href="<?php echo $config['urls']['pages']['root']; ?>/projects.php" title="Projects">my projects</a> and my hobbies. If you wish to contact me, please be aware that the contact form has not yet been implemented. Use the email address on the <a href="<?php echo $config['urls']['pages']['root']; ?>/contact.php">contact page</a>, or my social media links in the top navigation bar.</p>

          <p>The links and images currently in use throughout the website are subject to change and may not work or represent the current state of a project. To keep up with updates to the website and new content introduced in each iteration, you may follow me on <a href="https://www.twitter.com/Phixyn" title="Twitter - Alpeche Pancha (@Phixyn)" target="_blank">Twitter.</a></p>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><span class="show-for-sr">Current: </span><?php echo $postTitle ?></li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
