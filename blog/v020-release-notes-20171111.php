<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "v0.2.0 Release Notes";
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
