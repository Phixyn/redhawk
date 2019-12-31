<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $projectName = "StarPhix";
  $projectCategory = "Games, Python";
  $projectSummary = "2D space shooter game written using the PyGame library. Simple score feature.";
  $projectLanguage = "Python";
  $projectTechnologies = "PyGame";
  $projectStatus = "Completed";
  $projectVCSLink = "#";
  $projectStartDate = "March 12th, 2016";
  // Override title and metadata variables here before including header
  $config['page_title'] = $projectName . " - Projects - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <!-- <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; <?php echo $projectName ?> &bull;</h1>
          <hr /> -->
        </div> <!-- .cell -->

        <div class="cell medium-6 large-6">
          <h2 class="h5"><?php echo $projectName ?></h2>
        </div> <!-- .cell -->
        
        <div class="cell medium-6 large-6">
          <h2 class="h6 subheader float-right"><?php echo $projectCategory ?></h2>
        </div> <!-- .cell -->

        <div class="cell">
          <p><?php echo $projectSummary ?></p>
        </div> <!-- .cell -->

        <div class="cell medium-3 large-3">
          <dl>
            <dt>Programming Language</dt>
            <dd><?php echo $projectLanguage ?></dd>
            <dt>Technologies</dt>
            <dd><?php echo $projectTechnologies ?></dd>
            <dt>Status</dt>
            <dd><?php echo $projectStatus ?></dd>
            <dt>Github</dt>
            <dd>Not currently available</dd>
            <dt>Category</dt>
            <dd><?php echo $projectCategory ?></dd>
            <dt>Date Started</dt>
            <dd><?php echo $projectStartDate ?></dd>
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
              <li><span class="show-for-sr">Current: </span><?php echo $projectName ?></li>
            </ul>
          </nav>
        </div> <!-- .cell -->

      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
