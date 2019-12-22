<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "Projects - Alpeche Pancha - Phixyn";
  require_once($config["paths"]["includes"]["templates"] . "/header_foundation.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; Projects &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <div class="cell">
          <h2 class="h4">Portfolio</h2>
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">MineCart</h3>
            </div> <!-- .card-divider -->

            <img src="<?php echo $config['paths']['images']['root']; ?>/mc_1.PNG" alt="MineCart" />

            <div class="card-section">
              <span class="label success">Completed</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>2D platformer endless runner game developed in Unreal Engine 4.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="<?php echo $config['urls']['pages']['projects']; ?>/minecart.php" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">PhinyxEngine</h3>
            </div> <!-- .card-divider -->

            <img src="<?php echo $config['paths']['images']['root']; ?>/pe_3.PNG" alt="PhinyxEngine" />

            <div class="card-section">
              <span class="label primary">In development</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>2D platformer game engine written in standard C++ 11.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="<?php echo $config['urls']['pages']['projects']; ?>/phinyxengine.php" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">TetrisPhix</h3>
            </div> <!-- .card-divider -->

            <img src="<?php echo $config['paths']['images']['root']; ?>/gameplay3.png" alt="TetrisPhix" />

            <div class="card-section">
              <span class="label success">Completed</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>Tetris clone written in Java using the AWT and Swing libraries.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="<?php echo $config['urls']['pages']['projects']; ?>/tetrisphix.php" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">ZoeyBot</h3>
            </div> <!-- .card-divider -->

            <img src="<?php echo $config['paths']['images']['root']; ?>/colorPulse_V4.jpg" alt="ZoeyBot" />

            <div class="card-section">
              <span class="label primary">In development</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>IRC and Twitch.tv bot written in Python.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="#" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">StarPhix</h3>
            </div> <!-- .card-divider -->

            <img src="<?php echo $config['paths']['images']['root']; ?>/starphix.png" alt="StarPhix" />

            <div class="card-section">
              <span class="label success">Completed</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>Retro space arcade game, written in Python using the pyGame module.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="<?php echo $config['urls']['pages']['projects']; ?>/starphix.php" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->

        <!-- Example project
        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">Example Project</h3>
            </div> <!-- .card-divider --

            <img src="<?php echo $config['paths']['images']['root']; ?>/colorPulse_V4.jpg" alt="Image" />

            <div class="card-section">
              <span class="label secondary">On hold</span>
            </div> <!-- .card-section --

            <div class="card-section">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mi libero, pharetra ut volutpat ac, condimentum eget orci.</p>
            </div> <!-- .card-section --

            <div class="card-section">
              <a href="<?php echo $config['urls']['pages']['projects']; ?>/example_project.php" class="button">View Details</a>
            </div> <!-- .card-section --
          </div> <!-- .card --
        </div> <!-- .cell -->

      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>
