<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "StarPhix - Projects - Alpeche Pancha";
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
              <li><a href="<?php echo $config['urls']['root']; ?>/index_foundation.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['pages']['root']; ?>/projects_foundation.php">Projects</a></li>
              <li><span class="show-for-sr">Current: </span>StarPhix</li>
            </ul>
          </nav>
        </div> <!-- .cell -->

        <!--
        <div class="cell"><hr /></div>

        <div class="cell medium-10 large-10 medium-offset-2 large-offset-2"> TODO temporary
          <img src="img/gameplay3.png" alt="Gameplay 2" />
        </div> .cell

        <div class="cell">
          <p>Vestibulum tellus risus, pretium et facilisis nec, porta in felis. Nullam fermentum, lorem nec tincidunt tempus, risuslectus venenatis nisi, quis ultrices tortor arcu id diam. Nunc eros est, iaculis non quam et, mattis dignissim lacus. Vivamus finibus id augue eu sagittis. Nam sapien nisi, auctor in vestibulum in, pulvinar vel nibh. Pellentesque malesuada sit amet nulla sit amet porttitor. Proin fringilla nulla eget libero varius, eu blandit sapien consectetur.</p>
        </div> .cell -->

      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>
