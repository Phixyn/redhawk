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
                    <h1>Hello! My name is Phixyn</h1>
                    <p> ...and I like to make videogames. During the day, I live life as a <a href="#">Computer Science</a> student at the University of Essex, in England. Later on in the day, you might catch me frivolously coding in my bedroom and <a href="#">tweeting</a> about my coding adventures. At night, I play games while watching live <a href="#">streams</a> of other people who also happen to play games. Welcome to my life! </p>
                    <p> Don't forget to change box-shadows to rgb()! </p>
                </div>

                <div class="col-sm-6 col-md-2">
                    <img src="<?php echo $config['paths']['images']['root']; ?>/me3.png" style="max-width: 226px; max-height: 218px;" />
                </div>
            </div> <!-- /.row /#content-intro -->

            <div class="row">
                <h1> My projects </h1>
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
