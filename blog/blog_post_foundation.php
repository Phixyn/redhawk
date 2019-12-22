<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "Example Blog Post - Blog - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header_foundation.php");
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
          <h2 class="h3 blog-title"><a href="#">SmartPhix - The IoT and Gaming</a></h2>
          <small class="blog-meta">Posted on February 20, 2018 in <a href="#">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <!-- We can have a simple image without a caption... -->
        <!-- <div class="cell blog-post-image">
          <img class="thumbnail" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post image" />
        </div> !-- .cell .blog-post-image -->

        <!-- ... or with a caption below it. -->
        <div class="cell blog-post-image">
          <figure>
            <img class="thumbnail" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post image" />
            <figcaption><em>The Internet of Things: Everything is connected.</em></figcaption>
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <p class="lead">Over the last two decades, technology has grown at an unprecedented pace. Many emerging technologies deserve our attention, including new Artificial Intelligence (AI) and machine learning algorithms, cryptocurrency, Internet of Things (IoT) and Virtual and Augmented Reality. When we take a look at game development, AI, VR and AR seem to be taking the spotlight, rightfully so. However, I believe that there is also place for IoT in game development, which deserves to be explored further.</p>

          <p>My project, called SmartPhix, will explore the Internet of Things (IoT) using smart home devices. My aim is to investigate how video games and software applications can make use of IoT technology to enhance user experience.</p>
        </div> <!-- .cell -->
          
        <div class="cell">
          <h3 class="h4">What is the Internet of Things?</h3>

          <p><a href="https://www.zdnet.com/article/what-is-the-internet-of-things-everything-you-need-to-know-about-the-iot-right-now/">IoT</a> refers to a collection of physical devices that are connected to the Internet, sending and receiving data. These devices can be anything from home computers and appliances, to wearable technology. The concept of IoT first emerged in the late 90s when the MIT’s Auto-ID Centre started researching and publishing <a href="http://cocoa.ethz.ch/downloads/2014/06/None_MIT-AUTOID-WH-001.pdf">white papers</a> on the future and application of IoT, sometimes referred to as a “networked physical world”. The research focused the integration of physical objects with the Internet and <a href="http://cocoa.ethz.ch/downloads/2014/06/None_MIT-AUTOID-WH-001.pdf">the use of RFID (Radio Frequency Idenfitication) tags</a> to capture and transmit data. IoT began trending this decade, and between 2016 and 2017, there was an estimated increase of 31% in physical objects capable of connecting to the Internet, with approximately 8.4 billion devices connected to the Internet in 2017. <a href="https://spectrum.ieee.org/tech-talk/telecom/internet/popular-internet-of-things-forecast-of-50-billion-devices-by-2020-is-outdated">It is estimated that by 2020, the IoT will consist of 30 billion objects.</a></p>

          <p>Presently, there are a number of different uses for IoT technology, and a wide range of use cases. For example:</p>
          <dl>
            <dt>Smart watches</dt>
              <dd>Typically used as an extension to smartphones, allow users to quickly check notifications, weather reports, calendar events and more.</dd>
            <dt>Fitness bands</dt>
              <dd>Used to monitor distance and/or steps taken during exercise activity, as well as heart rate and other vital statistics.</dd>
            <dt>Self driving cars</dt>
              <dd>AI driving.</dd>
            <dt>Smart home devices</dt>
              <dd><a href="https://nest.com/uk/thermostats/nest-learning-thermostat/overview/" title="NEST thermostats">Thermostats</a>, smart light bulbs and refrigerators.</dd>
          </dl>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="media-object">
            <div class="media-object-section">
              <div class="thumbnail"><img src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/Philips-Hue-Alexa-Bridge-Control-Smarthome.jpg" alt="Blog post image" /></div>
            </div> <!-- .media-object-section -->

            <div class="media-object-section">
              <h3 class="h4">Smart Home Devices</h3>

              <p>IoT has played a big part in home automation due to the rise in popularity of smart home gadgets and appliances that can be connected to the Internet. A full home automation system may allow users to control and manage lighting, temperature, appliances, and home security devices within their house. Smart home devices may be controlled via a number of user interfaces, particularly mobile apps, Web interfaces, and wall mounted terminals.</p>
            </div> <!-- .media-object-section -->
          </div> <!-- .media-object -->
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">IoT and Gaming</h3>

          <p>As a gamer, IoT and smart home devices have recently caught my attention as I explored ways to customise my gaming setup for an optimal experience. Recently, Razer and Philips have <a href="https://www2.meethue.com/en-gb/friends-of-hue/razer">teamed up</a> to allow users to link their Razer Chroma peripherals with any Philips Hue product. This provides gamers with a more rich and immersive gaming experience in their room.</p>

          <p>This also sparked my interest as a game developer, as both Razer Chroma and Philips Hue offer rich APIs for developers to use. In the next blog post, I will discuss the usefulness of these APIs and what opportunities it could provide game developers with in terms of enhancing gaming experience by directly interacting with the gamer’s physical space.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index_foundation.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index_foundation.php">Blog</a></li>
              <li><span class="show-for-sr">Current: </span>Blog Post Title</li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_foundation.php"); ?>
