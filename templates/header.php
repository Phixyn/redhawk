<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $config['metadata']['site_description']; ?>" />
    <meta name="keywords" content="<?php echo $config['metadata']['site_keywords']; ?>" />
    <title><?php echo $config['page_title']; ?></title>

    <link rel="stylesheet" href="<?php echo $config['paths']['css']; ?>/foundation.css" />
    <link rel="stylesheet" href="<?php echo $config['paths']['css']; ?>/app.css" />
  </head>

  <body>
    <!-- TOP NAV BAR -->
    <div class="title-bar" data-responsive-toggle="top-navbar" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="top-navbar"></button>
      <div class="title-bar-title">Menu</div>
    </div> <!-- .title-bar -->

    <div class="top-bar" id="top-navbar">
      <div class="top-bar-left">
        <ul class="menu">
          <!-- SITE TITLE -->
          <li class="menu-text">PHIXYN</li>
        </ul>
      </div> <!-- .top-bar-left -->

      <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
          <!-- <li class="is-active"><a href="#">Home</a></li> -->
          <?php echo ($config['active_page'] == 'home') ? '<li class="is-active">':'<li>'; ?><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
          <?php echo ($config['active_page'] == 'blog') ? '<li class="is-active">':'<li>'; ?><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
          <?php echo ($config['active_page'] == 'projects') ? '<li class="is-active">':'<li>'; ?><a href="<?php echo $config['urls']['pages']['root']; ?>/projects.php">Projects</a></li>
          <li><a href="https://www.twitch.tv/phixyn">Twitch</a></li>
          <?php echo ($config['active_page'] == 'about') ? '<li class="is-active">':'<li>'; ?><a href="<?php echo $config['urls']['pages']['root']; ?>/about.php">About</a></li>
          <?php echo ($config['active_page'] == 'contact') ? '<li class="is-active">':'<li>'; ?><a href="<?php echo $config['urls']['pages']['root']; ?>/contact.php">Contact</a></li>
          <li class="is-dropdown-submenu-parent has-submenu">
            <a href="#">Social Media</a>
            <ul class="submenu menu vertical" data-submenu>
              <li><a href="https://twitter.com/Phixyn">Twitter</a></li>
              <li><a href="https://www.facebook.com/phixyn">Facebook</a></li>
              <li><a href="https://www.linkedin.com/in/alpechepancha">LinkedIn</a></li>
              <hr />
              <li><a href="https://github.com/Phixyn">Github</a></li>
              <!-- <li><a href="https://www.livecoding.tv/phixyn/">LiveCoding</a></li> -->
              <li><a href="https://www.youtube.com/user/Alpeche21/">Youtube</a></li>
            </ul> <!-- .submenu .menu .vertical -->
          </li>
        </ul> <!-- .dropdown .menu -->
      </div> <!-- .top-bar-right -->
    </div> <!-- .top-bar #top-navbar -->
