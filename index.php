<?php
    $root_url="/redhawk/";
    $css_url="/redhawk/css/";
    $js_url="/redhawk/js/";
    $images_url="/redhawk/img/";
    $blog_url="/redhawk/blog/";

    define("INCLUDES", $_SERVER["DOCUMENT_ROOT"] . "/redhawk/inc/");
    $page_title="Home - Alpeche Pancha - Phixyn";
    $site_description="Phixyn's personal website";
    $site_keywords="Phixyn, is, awesome";

    require_once(INCLUDES . "header.php");
?>

        <!-- Carousel -->
        <div id="highlight-box" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#highlight-box" data-slide-to="0" class="active"></li>
            <li data-target="#highlight-box" data-slide-to="1"></li>
            <li data-target="#highlight-box" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide img-responsive" src="img/logo.png" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Watch me on Twitch!</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Check out my Youtube</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Catch me on Livecoding.tv</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#highlight-box" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#highlight-box" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- /.carousel -->

        <!-- Main content -->
        <div class="container" id="main-content">
            <h1>Hello! My name is Phixyn</h1>
            <div class="row">
                <div class="col-md-12">
                    <p> ...and I like to make videogames. During the day, I live life as a <a href="#">Computer Science</a> student at the University of Essex, in England. Later on in the day, you might catch me frivolously coding in my bedroom and <a href="#">tweeting</a> about my coding adventures. At night, I play games while watching live <a href="#">streams</a> of other people who also happen to play games. Welcome to my life! </p>
                    <p> Don't forget to change box-shadows to rgb()! </p>
                </div>
            </div> <!-- /.row -->

            <h1> My projects </h1>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/gameplay3.png" alt="...">
                        <div class="caption">
                            <h3>TetrisPhix</h3>
                            <p>Tetris clone written in Java using the AWT and Swing libraries.</p>
                           <p><a href="#" class="btn btn-default" role="button">View details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/colorPulse_V4.jpg" alt="...">
                        <div class="caption">
                            <h3>ZoeyBot</h3>
                            <p>IRC and Twitch.tv bot written in Python.</p>
					        <p><a href="#" class="btn btn-default" role="button">View details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/starphix.png" alt="...">
                        <div class="caption">
                            <h3>StarPhix</h3>
                            <p>Retro space arcade game, written in Python using the pyGame module.</p>
                            <p><a href="#" class="btn btn-default" role="button">View details</a></p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container #main-content -->

<?php require_once(INCLUDES . "footer.php"); ?>