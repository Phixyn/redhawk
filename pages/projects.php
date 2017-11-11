<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Projects </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <h1> Portfolio </h1>
            <div id="content-projects" class="row">
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
