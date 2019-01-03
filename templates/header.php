<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="<?php echo $config['metadata']['site_description']; ?>" />
        <meta name="keywords" content="<?php echo $config['metadata']['site_keywords']; ?>" />
        <title><?php echo $config['page_title']; ?></title>

        <link href="<?php echo $config['paths']['css']; ?>/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo $config['paths']['css']; ?>/style.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Top navbar -->
        <nav class="navbar navbar-inverse" id="top-navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $config['urls']['root']; ?>/index.php">PHIXYN</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo $config['urls']['root']; ?>/index.php">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php echo $config['urls']['blog']; ?>/">Blog</a></li>
                        <li><a href="<?php echo $config['urls']['pages']; ?>/projects.php">Projects</a></li>
                        <li><a href="https://www.twitch.tv/phixyn">Twitch</a></li>
                        <li><a href="<?php echo $config['urls']['pages']; ?>/about.php">About</a></li>
                        <li><a href="<?php echo $config['urls']['pages']; ?>/contact.php">Contact</a></li>
                        <li><a href="#">Donate</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Social Media <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://twitter.com/Phixyn">Twitter</a></li>
                                <li><a href="https://www.facebook.com/phixyn">Facebook</a></li>
                                <li><a href="https://www.linkedin.com/in/alpechepancha">LinkedIn</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="https://github.com/Phixyn">Github</a></li>
                                <li><a href="https://www.livecoding.tv/phixyn/">LiveCoding</a></li>
                                <li><a href="https://www.youtube.com/user/Alpeche21/">Youtube</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- /.navbar-collapse -->
            </div> <!-- /.container-fluid -->
        </nav> <!-- /#top-navbar -->
