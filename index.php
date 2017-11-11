<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
    require_once($config["paths"]["includes"]["templates"] . "/carousel.php");
?>

        <div class="banner">
            Student. Game dev. Programmer. Web designer.
        </div> <!-- /.banner -->

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row" id="content-intro">
                <div class="col-sm-6 col-md-10">
                    <h1>Hello! I am Phixyn</h1>
                    <p>My name is Alpeche Pancha. I work full-time as a <a href="https://en.wikipedia.org/wiki/Test_engineer" title="Wikipedia - Test Engineer">Software Test Engineer</a> and study part-time for my <a href ="https://www.uos.ac.uk/courses/ug/bsc-hons-computer-games-programming" title="Computer Games Programming at UOS">BSc Computer Games Programming</a> degree. I am based in Suffolk, work at <a href="http://atadastral.co.uk/about/" title="Adastral Park">Adastral Park</a> and study at the <a href="https://www.uos.ac.uk/" title="University of Suffolk">University of Suffolk</a>. Currently, I am on my second year at University.</p>

                    <p>In my little spare time, I like to work on my personal projects, such as this website. I also play video games (of course) and play the bass guitar. On this website you can find out more about my hobbies, including music and gaming, and <a href="<?php echo $config['urls']['pages']; ?>/projects.php" title="Projects">my projects.</a> The website is very much a work in progress and a new iteration gets deployed to my live server approximately every two weeks (this can vary depending on coursework and my full-time job).</p>

                    <p>If you wish, you can drop a follow on my <a href="https://www.twitter.com/Phixyn" title="Twitter - Alpeche Pancha (@Phixyn)">Twitter.</a></p>
                </div>

                <div class="col-sm-6 col-md-2">
                    <img src="<?php echo $config['paths']['images']['root']; ?>/me3.png" style="max-width: 226px; max-height: 218px;" />
                </div>
            </div> <!-- /.row /#content-intro -->

            <h1> My projects </h1>
            <div class="row" id="content-projects">
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $config['paths']['images']['root']; ?>/gameplay3.png" alt="...">
                        <div class="caption">
                            <h3>TetrisPhix</h3>
                            <p>Tetris clone written in Java using the AWT and Swing libraries.</p>
                           <p><a href="#" class="btn btn-default" role="button">View details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $config['paths']['images']['root']; ?>/colorPulse_V4.jpg" alt="...">
                        <div class="caption">
                            <h3>ZoeyBot</h3>
                            <p>IRC and Twitch.tv bot written in Python.</p>
					        <p><a href="#" class="btn btn-default" role="button">View details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $config['paths']['images']['root']; ?>/starphix.png" alt="...">
                        <div class="caption">
                            <h3>StarPhix</h3>
                            <p>Retro space arcade game, written in Python using the pyGame module.</p>
                            <p><a href="#" class="btn btn-default" role="button">View details</a></p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
