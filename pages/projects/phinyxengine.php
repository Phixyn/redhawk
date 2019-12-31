<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $projectName = "PhinyxEngine";
  $projectCategory = "Game Engine, C++";
  $projectSummary = "This is a simple 2D game engine. Developers are able to make levels based on a simple text file format, where they define the layout of the map and what sprites to use. It is written using the standard libraries in C++ 11 and the <a href=\"https://www.sfml-dev.org/index.php\" title=\"SFML\">SFML Library.</a>";
  $projectLanguage = "C++ 11";
  $projectTechnologies = "Standard libraries, <a href=\"https://www.sfml-dev.org/index.php\" title=\"SFML\">SFML</a>";
  $projectStatus = "In development";
  $projectVCSLink = "https://github.com/Phixyn/PhinyxEngine";
  $projectStartDate = "29 Apr 2017";
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

        <div class="cell medium-4 large-4">
          <dl>
            <dt>Programming Language</dt>
            <dd><?php echo $projectLanguage ?></dd>
            <dt>Technologies</dt>
            <dd><?php echo $projectTechnologies ?></dd>
            <dt>Status</dt>
            <dd><?php echo $projectStatus ?></dd>
            <dt>Github</dt>
            <dd><a href="<?php echo $projectVCSLink ?>"><?php echo $projectVCSLink ?></a></dd>
            <dt>Category</dt>
            <dd><?php echo $projectCategory ?></dd>
            <dt>Date Started</dt>
            <dd><?php echo $projectStartDate ?></dd>
          </dl>
        </div> <!-- .cell -->

        <div class="cell medium-8 large-8">
          <!-- ORBIT -->
          <div class="orbit" role="region" aria-label="Project slideshow" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
            <div class="orbit-wrapper">
              <div class="orbit-controls">
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
              </div> <!-- .orbit-controls -->
              <ul class="orbit-container">
                <li class="is-active orbit-slide">
                  <figure class="orbit-figure">
                    <img class="orbit-image" src="<?php echo $config['paths']['images']['root']; ?>/pe_1.PNG" alt="Gameplay" />
                  </figure>
                </li>
                <li class="orbit-slide">
                  <figure class="orbit-figure">
                    <img class="orbit-image" src="<?php echo $config['paths']['images']['root']; ?>/pe_3.PNG" alt="Gameplay 2" />
                  </figure>
                </li>
                <li class="orbit-slide">
                  <figure class="orbit-figure">
                    <img class="orbit-image" src="<?php echo $config['paths']['images']['root']; ?>/pe_2.PNG" alt="Gameplay 3" />
                  </figure>
                </li>
              </ul> <!-- .orbit-container -->
            </div> <!-- .orbit-wrapper -->
          </div> <!-- .orbit -->
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
