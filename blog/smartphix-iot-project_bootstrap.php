<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - A simple IoT project - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header_bootstrap.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - A simple IoT project</div>
					<div class="blog-meta">Posted on March 6th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" target="_blank"><img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" alt="Internet of Things" style="width: 40%;height:50%;" /></a>

<p>SmartPhix is a simple IoT concept project that aims to highlight the features of IoT devices and how interacting with physical objects programmatically can be useful in game development. This is only a concept project and it is prototyped using <a href="https://www.phidgets.com/">Phidget</a> components, a Hue Go light and the <a href="https://www.philips.co.uk/c-p/8718696516850/hue-bridge">Hue Bridge.</a></p>

<p>In this project, I will explore the Philips Hue smart LED lights, and I will be using the Hue Bridge and its API to change the light’s settings based on environment change. However, I will not be developing a game to demonstrate the concept, as that could take a long time and the key principles of this concept could be lost in the complexity of the game’s development. Instead, I will  develop a very simple smart home IoT project to monitor the temperature inside my house and adjust my Philips Hue light color based on the current temperature. In a video game, a change in game scenery (e.g. time of day or weather) could act as a trigger for changing the Hue light. But to demonstrate this concept, we can do something as simple as monitoring the temperature of a room and have the Hue light react accordingly.</p>

<p>An Android app will be the basis for communicating with the Hue API. I will use additional hardware to monitor and process temperature data, and decide what data to send to the Hue Bridge. For this, I will be using Phidget components and a simple HTTP server that integrates with a Phidget sensor and exposes its temperature data via an API. The Android app will be using this API to display temperature information and determine what data to send to the Hue Bridge in order to update the Hue light’s color.</p>

<h2>Summary of Digital Outputs and Digital Technologies</h2>

<p>The project is divided into several components.</p>

<p>The following artefacts will be produced for this project:</p>
<ul>
<li>Python HTTP server with a REST API</li>
<li>Android mobile application</li>
</ul>

<h3>Python HTTP server:</h3>

<p>To get the temperature from the Phidget sensor, I will be using the Phidget API. There are Phidget libraries for a number of languages, including Java and Python. While I could use the Java API to get the temperature in the Android app, I decided to do this separately. I will be using the Python Phidget libraries instead, and I will develop a HTTP server that can be used to get temperature values from the Phidget using a REST API.</p>

<p>The reason I chose to have a HTTP server to request the sensor data is so that I can have a consistent way to get the temperature across multiple clients, without using the Phidget API in each client. For example, I can display temperature information in a local webpage, desktop app and mobile app without duplicating any of the code needed to communicate with the Phidget. A simple HTTP GET request to one endpoint will be sufficient to get the information from the server in any client. In the future, I can also make the server accessible remotely (and securely!) so I can monitor my house temperature while I'm away.</p>

<p>I chose to use the Python API to communicate with the Phidgets because it is quite easy and quick to use for prototyping. I have a lot of experience using Python and it seems to be used fairly regularly in home automation projects. Additionally, I needed something that I could quickly run (and leave running in the background) on a low-powered device such as a Raspberry Pi, so I didn't want to deal with compiling C or C++ code, or installing a JDK for Java.</p>

<p>For the prototype, the REST API will only have GET endpoints for the temperature, but in the future it may implement PUT and POST endpoints for things such as setting a sensor's name (see future plans and improvements).</p>

<h3>Android application:</h3>

<p>An Android app will show the user the current temperature, retrieved from the HTTP server using a GET request to an endpoint such as “/temperature”. I can use Java, Kotlin or even C++ to develop the app. However, I am more familiar with Android development in Java, therefore I will use Java to develop the app. The integration with the Hue smart LED lights will also be done with the app, by sending API requests to a Hue Bridge and setting the light colors at a pre-determined interval.</p>

<p>In order to communicate with the APIs, I will use a library called <a href="http://square.github.io/retrofit/">Retrofit</a>, which I will write about in a separate blog post. For the first stage of this prototype, I will simply hardcode the IP address of the Phidget HTTP server and Hue Bridge on the app (see practical limitations). Later on in the project, I may expand server to include some kind of broadcast service that the app can discover and connect to, most likely using SSDP or UPnP.</p>

<h3>Required hardware</h3>

<p><b>Phidget and temperature sensor</b><br/>
For temperature monitoring, I will be using a Phidget I/O board and temperature sensor.</p>

<img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/IMG_20180302_122939.jpg" alt="Phidgets I/O board and temperature sensor" style="width: 35%;height:50%;" />

<p><a href="https://www.phidgets.com/">Phidgets Inc</a> offers a range of I/O boards, digital and analog I/O components, and many other hardware components used for rapid prototyping of a wide variety of projects. I am using a <a href="https://www.phidgets.com/?tier=3&catid=2&pcid=1&prodid=1021">Phidget 1018 I/O board</a> along with a <a href="https://www.phidgets.com/?tier=3&catid=14&pcid=12&prodid=95">Phidget 1124 precision temperature sensor</a> module. A digital input data cable connects these two components together and the main I/O board can be plugged in to any device via a USB cable. Tehcnical details about these components can be found on their product pages. Libraries and drivers are available from the official Phidgets website.</p>

<p><b>Philips Hue Go and Philips Hue Bridge</b></p>

<img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/Philips-Hue-Alexa-Bridge-Control-Smarthome.jpg" alt="Philips Hue Alexa Bridge Control" style="width: 35%;height:50%;" />

<p>The aim of this project is to see the interaction between an application and an IoT object. As mentioned, I will be using a Philips Hue light, and I chose the Go table lamp, as it is portable and convenient to use for demos. The Hue Bridge is necessary, as it acts as a server that clients can use to interact with every Hue light linked to the Bridge. This is how the aforementioned Razer Chroma Apps can detect which lights are available and send data to them. The Android app will send all the requests to the Hue Bridge to adjust the connected lights on the network.</p>

<p>Note that Hue users must set up and configure their Hue products on their network using the Philips Hue companion app. My project assumes that all users have done this, and completed any necessary firmware updates as prompted by the companion app.</p>

<h2>Summary of desired outcome</h2>
<ol>
<li>A HTTP server with a RESTful API that allows clients to get the temperature values from a Phidget sensor</li>
<li>An Android app that uses the API server to display the current temperature</li>
<li>Communication between the Android app and a Hue Bridge via the Hue API to set the colour, intensity and/or brightness of a smart Hue light.</li>
</ol>
<!-- TODO [Diagram here] -->

<h3>Technical limitations</h3>
<ul>
<li>The HTTP server and the Android smartphone must be connected to the same network (Wi-Fi required).</li>
<li>The HTTP server will only support one Phidget sensor at a time for this concept project, but in the future it can be expanded to handle all sensors connected to the Phidget I/O board.</li>
<li>While the Hue API is free to use and open source, other APIs for third party products are not always made available. This means that the app will only be compatible with Philips Hue products.</li>
<li>Security: The concept project will use a basic HTTP server, with no HTTPS support. Thus, the API is not secure. There is no authentication, and anyone on the network can make requests to the server.</li>
<li>The IP addresses of the HTTP server and the Hue Bridge will need to be specified in the app’s code before running the app. There will be no network discovery mechanism for the concept app. <li>In the future, I will need to implement network discovery using, for example, UPnP (for the Hue Bridge) and/or SSDP.</li>
</ul>

<h3>Practical limitations</h3>
<ul>
<li>A HTTP server must be running at all times when the Android app is being used. In the future, I could conveniently run the server as a service on a Raspberry Pi running a Linux distro.</li>
<li>In order to use Hue with the concept app, a user must set up their Hue Bridge and Hue lights on their home router before using the app. They may also be prompted to trust the app as a client by pressing a hardware button on their Hue Bridge. They must also ensure that the firmware in their Hue devices is up to date.</li>
</ul>
<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index_bootstrap.php" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_bootstrap.php"); ?>
