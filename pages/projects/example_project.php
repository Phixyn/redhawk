<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "Example Project - Projects - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header_foundation.php");
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
          <h2 class="h5">Example Project</h2>
        </div> <!-- .cell -->
        
        <div class="cell medium-6 large-6">
          <h2 class="h6 subheader float-right">Games, C++</h2>
        </div> <!-- .cell -->

        <div class="cell">
          <p>This is a short project summary.</p>
        </div> <!-- .cell -->

        <div class="cell medium-3 large-3">
          <dl>
            <dt>Programming Language</dt>
            <dd>C++</dd>
            <dt>Technologies</dt>
            <dd>SFML</dd>
            <dt>Status</dt>
            <dd>On hold</dd>
            <dt>Github</dt>
            <dd><a href="#">https://github.com/Example_Project</a></dd>
            <dt>Category</dt>
            <dd>Games, C++</dd>
            <dt>Date Started</dt>
            <dd>January 31st, 2019</dd>
          </dl>
        </div> <!-- .cell -->

        <div class="cell medium-8 large-8 medium-offset-1 large-offset-1">
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
                    <img class="orbit-image" src="<?php echo $config['paths']['images']['root']; ?>/mc_2.PNG" alt="Gameplay" />
                  </figure>
                </li>
                <li class="orbit-slide">
                  <figure class="orbit-figure">
                    <img class="orbit-image" src="<?php echo $config['paths']['images']['root']; ?>/mc_3.PNG" alt="Gameplay 2" />
                  </figure>
                </li>
                <li class="orbit-slide">
                  <figure class="orbit-figure">
                    <img class="orbit-image" src="<?php echo $config['paths']['images']['root']; ?>/mc_1.PNG" alt="Gameplay 3" />
                  </figure>
                </li>
                <li class="orbit-slide">
                  <figure class="orbit-figure">
                    <img class="orbit-image" src="<?php echo $config['paths']['images']['root']; ?>/mc_game_over.PNG" alt="Game Over" />
                  </figure>
                </li>
              </ul> <!-- .orbit-container -->
            </div> <!-- .orbit-wrapper -->
          </div> <!-- .orbit -->
        </div> <!-- .cell -->

        <!-- Optional section - extra project info, videos, etc -->
        <div class="cell"><hr /></div>

        <div class="cell medium-10 large-10 medium-offset-2 large-offset-2">
          <p> Here's a quick gameplay demo video. </p>  
          <img src="<?php echo $config['paths']['images']['root']; ?>/gameplay3.png" alt="Gameplay 2" />
        </div> <!-- .cell -->

        <div class="cell">
          <p>Vestibulum tellus risus, pretium et facilisis nec, porta in felis. Nullam fermentum, lorem nec tincidunt tempus, risuslectus venenatis nisi, quis ultrices tortor arcu id diam. Nunc eros est, iaculis non quam et, mattis dignissim lacus. Vivamus finibus id augue eu sagittis. Nam sapien nisi, auctor in vestibulum in, pulvinar vel nibh. Pellentesque malesuada sit amet nulla sit amet porttitor. Proin fringilla nulla eget libero varius, eu blandit sapien consectetur.</p>
        </div> <!-- .cell -->

        <!-- TODO: Previous/Next project -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index_foundation.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['pages']['root']; ?>/projects_foundation.php">Projects</a></li>
              <li><span class="show-for-sr">Current: </span>Example Project</li>
            </ul>
          </nav>
        </div> <!-- .cell -->

      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>
