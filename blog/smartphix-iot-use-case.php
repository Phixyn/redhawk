<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "SmartPhix: A use case for IoT in game development";
  $postTag = "SmartPhix";
  $postTagLink = $config["urls"]["blog"] . "/tags/smartphix/index.php";
  $postDate = "February 27, 2018";
  // Override title and metadata variables here before including header
  $config['page_title'] = $postTitle . " - Blog - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; Blog &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <!-- BLOG POST -->
        <div class="cell">
          <h2 class="h3 blog-title"><a href="#"><?php echo $postTitle ?></a></h2>
          <small class="blog-meta">Posted on <?php echo $postDate ?> in <a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <div class="cell blog-post-image">
          <figure>
            <img class="thumbnail" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post header image" />
            <figcaption><em>The Internet of Things: Everything is connected.</em></figcaption>
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <p class="lead">In the previous blog post, I briefly discussed one of the potential uses for IoT in game development. This post will expand on the opportunities that this use case can provide to game developers.</p>

          <p>Providing the right atmosphere in a video game is important. The feeling of immersion and being part of the game world can be the difference between a good game and an excellent game. This is one of the reasons why Virtual Reality has become so popular.</p>

          <p>In the past, game developers were limited to the game itself when it came to providing immersion to players. Over time, developers gained new ways to deliver output from in-game events, such as vibration and LED lights in controllers. PC gaming peripherals also offer the ability to control their LED lights based on in-game events. For example, the RGB LED colors in Razer Chroma peripherals can be programmatically via the Chroma SDK, which can be used to develop Chroma apps. Many official game integrations, such as Overwatch’s Chroma App, are readily available and come pre-installed with the game itself.</p>

          <p>In essence, developers are no longer restricted to their game's interface in order to deliver content in their games. I am using Razer as an example because recently, Razer and Philips have <a href="https://www2.meethue.com/en-gb/friends-of-hue/razer" target="_blank">teamed up</a> to allow users to link their Razer Chroma peripherals with Philips Hue products. Philips Hue are rich RGB smart LED bulbs. The Hue products have an open source API that has led to many apps being developed for them. The integration between Chroma gaming peripherals and these smart home devices opens up an oppurtunity for game developers to deliver an additional output from their games: directly to the gamer’s room.</p>

          <p>Through the Chroma SDK, it is possible to interact with any connected Chroma device. As the Hue is seen as a Chroma device when set up using Razer Synapse 3 (as well as the official Hue companion app), Chroma Apps are also able to programmatically set the color, lighting effect and brightness of the smart LED Hue bulbs. Hopefully in the future we will see more integrations between smart home devices and gaming peripherals and accessories, with APIs that allow game developers to take control (to a reasonable extent) of their player’s own living room for a greater gaming experience.</p>

          <p>Using the aforementioned integration as an example, it is easy to identify one of the main use cases for IoT in gaming: to deliver a more immersive and epic gaming experience. My project aims to take advantage of this integration to develop a concept app that makes use of the Hue API in a simple home automation project. In the next blog post, I will discuss this smart home project idea and technical plan in more detail.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><span class="show-for-sr">Current: </span><?php echo $postTitle ?></li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
