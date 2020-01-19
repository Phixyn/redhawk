<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "UoS Final Project - Blog - Phixyn";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; UoS Final Project &ndash; Blog &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/final-project-introduction.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" alt="Blog post thumbnail image" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/final-project-introduction.php">UoS Final Project: Introduction</a></h2>
          <small class="blog-meta">Posted on December 23, 9999 in <a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/index.php">UoS Final Project</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>Welcome to the first weekly blog post. I thought I'd try to do a mini blog post every week. It's almost like a newsletter mixed with a casual blog post. The idea is to give updates on projects I'm working on, as well as news related to my interests and hobbies. I'll try to keep it short and to the point.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/final-project-introduction.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/template.php"><img src="<?php echo $config['paths']['static']; ?>/img/colorPulse_V4.jpg" alt="Blog post thumbnail image" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/template.php">UoS Final Project: Introduction</a></h2>
          <small class="blog-meta">Posted on December 23, 9999 in <a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/index.php">UoS Final Project</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>Welcome to the first weekly blog post. I thought I'd try to do a mini blog post every week. It's almost like a newsletter mixed with a casual blog post. The idea is to give updates on projects I'm working on, as well as news related to my interests and hobbies. I'll try to keep it short and to the point.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/tags/final-project/template.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
