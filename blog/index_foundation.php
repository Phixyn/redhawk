<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "Blog - Alpeche Pancha - Phixyn";
  require_once($config["paths"]["includes"]["templates"] . "/header_foundation.php");
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
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/blog_post_foundation.php"><img src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post image" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/blog_post_foundation.php">SmartPhix - The IoT and Gaming</a></h2>
          <small class="blog-meta">Posted on February 20, 2018 in <a href="#">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />

          <p>Over the last two decades, technology has grown at an unprecedented pace. Many emerging technologies deserve our attention, including new Artificial Intelligence (AI) and machine learning algorithms, cryptocurrency, Internet of Things (IoT) and Virtual and Augmented Reality. When we take a look at game development, AI, VR and AR seem to be taking the spotlight, rightfully so. However, I believe that there is also place for IoT in game development, which deserves to be explored further.</p>

          <p><a href="<?php echo $config['urls']['blog']; ?>/blog_post_foundation.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->

        <!-- BLOG POST -->
        <div class="cell large-4 medium-4 small-3 blog-post-thumbnail">
          <div class="thumbnail"><a href="<?php echo $config['urls']['blog']; ?>/example_blog_post_foundation.php"><img src="<?php echo $config['paths']['images']['root']; ?>/colorPulse_V4.jpg" alt="Blog post image" /></a></div>
        </div> <!-- .cell -->

        <div class="cell large-8 medium-8 small-9 blog-post-summary">
          <h2 class="h4 blog-title"><a href="<?php echo $config['urls']['blog']; ?>/example_blog_post_foundation.php">Example Blog Post</a></h2>
          <small class="blog-meta">Posted on November 11, 2017 in <a href="#">Uncategorized</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt fermentum risus, id tincidunt orci porta eget. Fusce consectetur iaculis porta. Fusce suscipit gravida malesuada. In semper efficitur massa, et cursus odio porttitor non.</p>
          <p><a href="<?php echo $config['urls']['blog']; ?>/example_blog_post_foundation.php" title="Continue reading">Continue reading &raquo;</a></p>
        </div> <!-- .cell -->
        <!-- END OF BLOG POST -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>
