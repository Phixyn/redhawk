<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "On New Years' Resolutions";
  $postTag = "Uncategorized";
  $postTagLink = "#";
  $postDate = "December 25, 2014";
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
          <p class="lead">A new year is quickly approaching and with this, people are starting to jot down their plans and goals for the year ahead. New years' resolutions are a great way to motivate yourself and get hyped. However, they might not always work and each year, you might end up with a few goals and plans left unattended, which can make you feel rather disappointed in yourself.</p>
          
          <p>The sad truth is that simply writing down your goals does not help you get any closer to actually achieving them. You need to take action in order to complete them. Thus, why would you wait until the next year to do this? You can start taking action days, weeks and even months before the new year!</p>
          
          <p>Let's pretend one of the items in your new years' resolution is to launch a website. Maybe you haven't started planning anything yet, and you don't even have any idea of what your website is going to be about. That's fine. If you have some free time during Christmas week and you're eager to start working on your website, you can take some simple steps before January hits the calendar. Brainstorm ideas, think about your domain name, register a domain name. Christmas is a great time to register your domain name and look for potential hosting companies, as many companies tend to offer great discounts and Christmas deals.</p>
          
          <p>That was just one example of how you can start working towards your new years resolution before the new year. There are many more ways to achieve this, and you can probably come up with a few by taking a look at your new years resolution list. Get ahead of the game by starting to work on your goals and plans for the new year before the fireworks, and you will truly enter the new year on your right foot!</p>
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
