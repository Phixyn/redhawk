<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Project Update and Meeting with Adam";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "December 20, 2019";
  // Override title and metadata variables here before including header
  $config['page_title'] = $postTitle . " - Blog - Alpeche Pancha";
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
        <div class="cell">
          <h2 class="h3 blog-title"><a href="#"><?php echo $postTitle ?></a></h2>
          <small class="blog-meta">Posted on <?php echo $postDate ?> in <a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <div class="cell blog-post-image">
          <figure>
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/pxfuel-banner-qnlib.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <h3 class="h4">Progress Update</h3>

          <p>Currently, I am in the process of finalising and proof-reading my first Machine Learning blog post. It was a rather taxing post to write, as I had to learn many new topics and digest them before trying to put them into my own words. All of this combined with other work commitments at my full-time job and part-time University course caused the post to be delayed. I was also not able to write a blog post for the past two weeks. The Machine Learning post will most likely be published straight after Christmas, as I am spending Christmas with my family, which involves travelling. According to the project plan, the post will be delayed by two weeks. However, I had no planned work on this project between the 16th of December and the 3rd of January, since we are on holiday at the University during this period. As such, I will use this period as a buffer, and the project plan will remain unaltered and on track. On my risk register, the risk for this has already been raised to a "High" level, as it can still impact the timeline of the project.</p>

          <h3 class="h4">Meeting with Adam</h3>

          <p>On Wednesday, I had a meeting with my project supervisor, Adam. We briefly discussed the overall progress of the project and what I was working towards. Adam offered advice on how to approach the project and the blog posts. We also discussed the project proposal and the feedback received. Unfortunately, because I re-submitted my proposal after the deadline, the wrong version of the proposal got marked. Luckily, I was able to spot this through the initial feedback received. Adam read the re-submitted proposal and gave feedback during our meeting. The meeting was recorded in a meeting minutes document, which can be found here: <a href="https://docs.google.com/document/d/1kajDsQgMiweSBQkgZWiFRjI86-lvOA2ESzwWiSmndp8/edit?usp=sharing">https://docs.google.com/document/d/1kajDsQgMiweSBQkgZWiFRjI86-lvOA2ESzwWiSmndp8/edit?usp=sharing</a></p>

          <p>That is all for this short update. Next week I will upload the first Machine Learning blog post.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a></li>
              <li><span class="show-for-sr">Current: </span><?php echo $postTitle ?></li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
