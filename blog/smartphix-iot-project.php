<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "SmartPhix: A Simple IoT Project";
  $postTag = "SmartPhix";
  $postTagLink = $config["urls"]["blog"] . "/tags/smartphix/index.php";
  $postDate = "March 6, 2018";
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
          <p class="lead">SmartPhix is a simple IoT concept project that aims to highlight the features of IoT devices and how interacting with physical objects programmatically can be useful in game development. This is only a concept project and it is prototyped using <a href="https://www.phidgets.com/" target="_blank">Phidget</a> components, a Hue Go light and the <a href="https://www.philips.co.uk/c-p/8718696516850/hue-bridge" target="_blank">Hue Bridge.</a></p>

          <p>In this project, I will explore the Philips Hue smart LED lights, and I will be using the Hue Bridge and its API to change the light's settings based on environment change. However, I will not be developing a game to demonstrate the concept, as that could take a long time and the key principles of this concept could be lost in the complexity of the game's development. Instead, I will  develop a very simple smart home IoT project to monitor the temperature inside my house and adjust my Philips Hue light color based on the current temperature. In a video game, a change in game scenery (e.g. time of day or weather) could act as a trigger for changing the Hue light. But to demonstrate this concept, we can do something as simple as monitoring the temperature of a room and have the Hue light react accordingly.</p>

          <p>An Android app will be the basis for communicating with the Hue API. I will use additional hardware to monitor and process temperature data, and decide what data to send to the Hue Bridge. For this, I will be using Phidget components and a simple HTTP server that integrates with a Phidget sensor and exposes its temperature data via an API. The Android app will be using this API to display temperature information and determine what data to send to the Hue Bridge in order to update the Hue light's color.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">Summary of Digital Outputs and Digital Technologies</h3>

          <p>The project is divided into several components.</p>

          <p>The following artefacts will be produced for this project:</p>
          <ul>
            <li>Python HTTP server with a REST API</li>
            <li>Android mobile application</li>
          </ul>

          <h4 class="h5">Python HTTP Server</h4>
          <p>To get the temperature from the Phidget sensor, I will be using the Phidget API. There are Phidget libraries for a number of languages, including Java and Python. While I could use the Java API to get the temperature in the Android app, I decided to do this separately. I will be using the Python Phidget libraries instead, and I will develop a HTTP server that can be used to get temperature values from the Phidget using a REST API.</p>

          <p>The reason I chose to have a HTTP server to request the sensor data is so that I can have a consistent way to get the temperature across multiple clients, without using the Phidget API in each client. For example, I can display temperature information in a local webpage, desktop app and mobile app without duplicating any of the code needed to communicate with the Phidget. A simple HTTP <code>GET</code> request to one endpoint will be sufficient to get the information from the server in any client. In the future, I can also make the server accessible remotely (and securely!) so I can monitor my house temperature while I'm away.</p>

          <p>I chose to use the Python API to communicate with the Phidgets because it is quite easy and quick to use for prototyping. I have a lot of experience using Python and it seems to be used fairly regularly in home automation projects. Additionally, I needed something that I could quickly run (and leave running in the background) on a low-powered device such as a Raspberry Pi, so I didn't want to deal with compiling C or C++ code, or installing a JDK for Java.</p>

          <p>For the prototype, the REST API will only have GET endpoints for the temperature, but in the future it may implement PUT and POST endpoints for things such as setting a sensor's name (see future plans and improvements).</p>

          <h4 class="h5">Android Application</h4>
          <p>An Android app will show the user the current temperature, retrieved from the HTTP server using a <code>GET</code> request to an endpoint such as <code>/temperature</code>. I can use Java, Kotlin or even C++ to develop the app. However, I am more familiar with Android development in Java, therefore I will use Java to develop the app. The integration with the Hue smart LED lights will also be done with the app, by sending API requests to a Hue Bridge and setting the light colors at a pre-determined interval.</p>

          <p>In order to communicate with the APIs, I will use a library called <a href="http://square.github.io/retrofit/" target="_blank">Retrofit</a>, which I will write about in a separate blog post. For the first stage of this prototype, I will simply hardcode the IP address of the Phidget HTTP server and Hue Bridge on the app (see practical limitations). Later on in the project, I may expand server to include some kind of broadcast service that the app can discover and connect to, most likely using SSDP or UPnP.</p>

          <h4 class="h5">Required Hardware</h4>

          <h5 class="h6"><b>Phidget and temperature sensor</b></h5>
          <p>For temperature monitoring, I will be using a Phidget I/O board and temperature sensor.</p>

          <figure style="text-align: center;">
            <a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/IMG_20180302_122939.jpg" target="_blank"><img class="thumbnail" style="width: 35%;height:50%;" src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/IMG_20180302_122939.jpg" alt="Phidgets I/O board and temperature sensor" /></a>
            <figcaption><em>Phidgets I/O board and temperature sensor</em></figcaption>
          </figure>

          <p><a href="https://www.phidgets.com/" target="_blank">Phidgets Inc</a> offers a range of I/O boards, digital and analog I/O components, and many other hardware components used for rapid prototyping of a wide variety of projects. I am using a <a href="https://www.phidgets.com/?tier=3&catid=2&pcid=1&prodid=1021" target="_blank">Phidget 1018 I/O board</a> along with a <a href="https://www.phidgets.com/?tier=3&catid=14&pcid=12&prodid=95" target="_blank">Phidget 1124 precision temperature sensor</a> module. A digital input data cable connects these two components together and the main I/O board can be plugged in to any device via a USB cable. Tehcnical details about these components can be found on their product pages. Libraries and drivers are available from the official Phidgets website.</p>

          <h5 class="h6"><b>Philips Hue Go and Philips Hue Bridge</b></h5>
          
          <figure style="text-align: center;">
            <a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/Philips-Hue-Alexa-Bridge-Control-Smarthome.jpg" target="_blank"><img class="thumbnail" style="width: 35%;height:50%;" src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/Philips-Hue-Alexa-Bridge-Control-Smarthome.jpg" alt="Philips Hue Alexa Bridge Control" /></a>
            <figcaption><em>Philips Hue Alexa Bridge Control</em></figcaption>
          </figure>

          <p>The aim of this project is to see the interaction between an application and an IoT object. As mentioned, I will be using a Philips Hue light, and I chose the Go table lamp, as it is portable and convenient to use for demos. The Hue Bridge is necessary, as it acts as a server that clients can use to interact with every Hue light linked to the Bridge. This is how the aforementioned Razer Chroma Apps can detect which lights are available and send data to them. The Android app will send all the requests to the Hue Bridge to adjust the connected lights on the network.</p>

          <p>Note that Hue users must set up and configure their Hue products on their network using the Philips Hue companion app. My project assumes that all users have done this, and completed any necessary firmware updates as prompted by the companion app.</p>

          <h3 class="h4">Summary of Desired Outcome</h3>
          <ol>
            <li>A HTTP server with a RESTful API that allows clients to get the temperature values from a Phidget sensor</li>
            <li>An Android app that uses the API server to display the current temperature</li>
            <li>Communication between the Android app and a Hue Bridge via the Hue API to set the colour, intensity and/or brightness of a smart Hue light.</li>
          </ol>

          <h4 class="h5">Technical Limitations</h4>
          <ul>
            <li>The HTTP server and the Android smartphone must be connected to the same network (Wi-Fi required).</li>
            <li>The HTTP server will only support one Phidget sensor at a time for this concept project, but in the future it can be expanded to handle all sensors connected to the Phidget I/O board.</li>
            <li>While the Hue API is free to use and open source, other APIs for third party products are not always made available. This means that the app will only be compatible with Philips Hue products.</li>
            <li>Security: The concept project will use a basic HTTP server, with no HTTPS support. Thus, the API is not secure. There is no authentication, and anyone on the network can make requests to the server.</li>
            <li>The IP addresses of the HTTP server and the Hue Bridge will need to be specified in the app's code before running the app. There will be no network discovery mechanism for the concept app.</li>
            <li>In the future, I will need to implement network discovery using, for example, UPnP (for the Hue Bridge) and/or SSDP.</li>
          </ul>

          <h4 class="h5">Practical Limitations</h4>
          <ul>
            <li>A HTTP server must be running at all times when the Android app is being used. In the future, I could conveniently run the server as a service on a Raspberry Pi running a Linux distro.</li>
            <li>In order to use Hue with the concept app, a user must set up their Hue Bridge and Hue lights on their home router before using the app. They may also be prompted to trust the app as a client by pressing a hardware button on their Hue Bridge. They must also ensure that the firmware in their Hue devices is up to date.</li>
          </ul>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a></li>
              <li><span class="show-for-sr">Current: </span><?php echo $postTitle ?></li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
