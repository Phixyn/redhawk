<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "About - Alpeche Pancha - Phixyn";
  require_once($config["paths"]["includes"]["templates"] . "/header_foundation.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; About &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <div class="cell">
          <h2 class="h5" style="text-align: center;">My name is <strong>Alpeche</strong> and I am a <strong>Games Programming Student</strong> at <strong>UOS.</strong></h2>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="callout">
            <div class="media-object">
              <div class="media-object-section">
                <h2 class="h4">What I do</h2>

                <p>I am a Software Test Engineer for a small software development company based at <a href="http://atadastral.co.uk/about/" title="Adastral Park">Adastral Park</a>, Suffolk. I am studying part-time for my <a href ="https://www.uos.ac.uk/courses/ug/bsc-hons-computer-games-programming" title="Computer Games Programming at UOS">BSc Computer Games Programming</a> degree at the <a href="https://www.uos.ac.uk/" title="University of Suffolk">University of Suffolk</a>. During my little spare time, I like to work on my game development projects, as well as this website. My other interests in computing include operating systems, networking and artificial intelligence.</p>

                <p>Some of the hobbies I enjoy are gaming, playing bass guitar, going to concerts and travelling. One day, I want to move to Canada.<br />
                If you wish, you can drop a follow on my <a href="https://www.twitter.com/Phixyn" title="Twitter - Alpeche Pancha (@Phixyn)">Twitter.</a></p>
      
                <p style="text-align: center; font-style:italic;"><a href="<?php echo $config['urls']['pages']['root']; ?>/projects_foundation.php">Portfolio</a> &nbsp;//&nbsp; <a href="<?php echo $config['paths']['static']; ?>/Alpeche_Pancha_CV.pdf" title="Download CV">Download CV</a> &nbsp;//&nbsp; <a href="<?php echo $config['urls']['pages']['root']; ?>/contact_foundation.php">Contact me</a></p>
              </div> <!-- .media-object-section -->

              <div class="media-object-section">
                <div class="thumbnail"><img src="<?php echo $config['paths']['images']['root']; ?>/me3.png" alt="Avatar" /></div>
              </div> <!-- .media-object-section -->
            </div> <!-- .media-object -->
          </div> <!-- .callout -->
        </div> <!-- .cell -->

        <div class="cell">
          <h2 class="h4">My projects</h2>
          <hr />

          <p> I am currently working on my second year group project at UOS, which is a 2D platformer game developed in Unreal Engine 4. You can read more about it <a href="<?php echo $config['urls']['pages']['projects']; ?>/minecart.php">here.</a></p>

  				<p> I am also working on a C++ game engine built using SFML. I've submitted a first version of this engine for an University assignment and was graded a first. Currently, a lot more work is required to make it good! The repository can be <a href="https://github.com/Phixyn/PhinyxEngine" title="PhinyxEngine - Phixyn's Github">found here.</a> </p>

          <p> You can find out more about my experience, skills and qualities by <a href="<?php echo $config['paths']['static']; ?>/Alpeche_Pancha_CV.pdf" title="Download CV">downloading my CV.</a> Alternatively, feel free to <a href="<?php echo $config['urls']['pages']['root']; ?>/contact_foundation.php">contact me!</a></p>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>
