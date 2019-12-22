<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    // Override title and metadata variables here before including header
    $config['page_title'] = "Home - Alpeche Pancha - Phixyn";
    // TODO test overriding metadata
    require_once($config["paths"]["includes"]["templates"] . "/header_foundation.php");
    require_once($config["paths"]["includes"]["templates"] . "/orbit_foundation.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; Student &#9702; Software &amp; Game Developer &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <div class="cell">
          <div class="media-object">
            <div class="media-object-section">
              <h2 class="h4">Hello! I am Phixyn</h2>

              <p>My name is Alpeche Pancha. I work full-time as a <a href="https://en.wikipedia.org/wiki/Test_engineer" title="Wikipedia - Test Engineer">Software Test Engineer</a> and study part-time for my <a href ="https://www.uos.ac.uk/courses/ug/bsc-hons-computer-games-programming" title="Computer Games Programming at UOS">BSc Computer Games Programming</a> degree. I am based in Suffolk, work at <a href="http://atadastral.co.uk/about/" title="Adastral Park">Adastral Park</a> and study at the <a href="https://www.uos.ac.uk/" title="University of Suffolk">University of Suffolk</a>. Currently, I am on my second year at University.</p>

              <p>In my little spare time, I like to work on my personal projects, such as this website. I also play video games (of course) and play the bass guitar. On this website you can find out more about my hobbies and <a href="projects_foundation.html" title="Projects">projects.</a>

              <p>If you wish, you can drop a follow on my <a href="https://www.twitter.com/Phixyn" title="Twitter - Alpeche Pancha (@Phixyn)">Twitter.</a></p>
            </div> <!-- .media-object-section -->

            <div class="media-object-section">
              <div class="thumbnail"><img src="img/me3.png" alt="Avatar" /></div>
            </div> <!-- .media-object-section -->
          </div> <!-- .media-object -->
        </div> <!-- .cell -->

        <div class="cell">
          <h2 class="h4">My projects</h2>
          <p> These are just some of my game projects. You can view the rest in the <a href="projects_foundation.html" title="Projects">projects page.</a></p>
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">MineCart</h3>
            </div> <!-- .card-divider -->

            <img src="img/mc_1.PNG" alt="MineCart" />

            <div class="card-section">
              <span class="label success">Completed</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>2D platformer endless runner game developed in Unreal Engine 4.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="minecart.html" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">PhinyxEngine</h3>
            </div> <!-- .card-divider -->

            <img src="img/pe_3.PNG" alt="PhinyxEngine" />

            <div class="card-section">
              <span class="label primary">In development</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>2D platformer game engine written in standard C++ 11.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="phinyxengine.html" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->

        <div class="cell large-4 medium-4">
          <div class="card">
            <div class="card-divider">
              <h3 class="h5">TetrisPhix</h3>
            </div> <!-- .card-divider -->

            <img src="img/gameplay3.png" alt="TetrisPhix" />

            <div class="card-section">
              <span class="label success">Completed</span>
            </div> <!-- .card-section -->

            <div class="card-section">
              <p>Tetris clone written in Java using the AWT and Swing libraries.</p>
            </div> <!-- .card-section -->

            <div class="card-section">
              <a href="tetrisphix.html" class="button">View Details</a>
            </div> <!-- .card-section -->
          </div> <!-- .card -->
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>