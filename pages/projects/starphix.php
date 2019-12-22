<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "StarPhix - Projects - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <!-- <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; Example Project &bull;</h1>
          <hr /> -->
        </div> <!-- .cell -->

        <div class="cell medium-6 large-6">
          <h2 class="h5">StarPhix</h2>
        </div> <!-- .cell -->
        
        <div class="cell medium-6 large-6">
          <h2 class="h6 subheader float-right">Games, Python</h2>
        </div> <!-- .cell -->

        <div class="cell">
          <p>2D space shooter game written using the PyGame library. Simple score feature.</p>
        </div> <!-- .cell -->

        <div class="cell medium-3 large-3">
          <dl>
            <dt>Programming Language</dt>
            <dd>Python</dd>
            <dt>Technologies</dt>
            <dd>PyGame</dd>
            <dt>Status</dt>
            <dd>Completed</dd>
            <dt>Github</dt>
            <dd>Not currently available</dd>
            <dt>Category</dt>
            <dd>Games, Python</dd>
            <dt>Date Started</dt>
            <dd>March 12th, 2016</dd>
          </dl>
        </div> <!-- .cell -->

        <div class="cell medium-8 large-8 medium-offset-1 large-offset-1">
          <img src="<?php echo $config['paths']['images']['root']; ?>/starphix.png" alt="Gameplay and code" />
        </div> <!-- .cell -->

        <!-- TODO: Previous/Next project -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['pages']['root']; ?>/projects.php">Projects</a></li>
              <li><span class="show-for-sr">Current: </span>StarPhix</li>
            </ul>
          </nav>
        </div> <!-- .cell -->

      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
