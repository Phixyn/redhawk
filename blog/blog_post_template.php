<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Blog Post Template";
  $postTag = "Change me!";
  $postTagLink = "#";
  $postDate = "February 20, 2018";
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

        <div class="cell blog-post-image">
          <figure>
            <img class="thumbnail" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post header image" />
            <figcaption><em>The Internet of Things: Everything is connected.</em></figcaption>
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <p class="lead">This is the lead paragraph. Its font size is a bit bigger than the rest of the paragraphs.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla nibh, pretium eget nulla id, faucibus rutrum nisl. Vivamus ornare ipsum nec urna accumsan auctor. Nam mattis, nunc at pellentesque rhoncus, lacus erat blandit ligula, ac dignissim orci mauris condimentum nisl.</p>

          <p>A smaller paragraph under the lead paragraph to introduce the next bit of text. Maybe it's not necessary most of the times. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla nibh, pretium eget nulla id, faucibus rutrum nisl.</p>
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
