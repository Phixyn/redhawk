<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - A home automation project - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - A home automation project</div>
					<div class="blog-meta">Posted on February 20, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <p>SmartPhix is a small smart home project. The goal is to monitor temperatures in houses, offices and other interior rooms. <br />
Phidget project.</p>

                <img alt="Hero image for IoT / connected devices" />

                <p>IoT and home automation projects have been on my to-do list for a couple of years. Recently, my co-workers set up a home automation channel on our Discord server to discuss their latest inventions. It made sense for me to join in and start my own project.</p>

                <p>I had a few ideas, mostly revolving around smart LED lights or similar. I saw a <a href="#">cool project</a> where a temperature sensor is used to set the color of the lights in the room based on the current temperature. I thought it was pretty neat and wanted to do something similar. My first thought was to use the Philips Hue lights. I am a big fan of Razer peripherals, and recently Philips and Razer have <a href="#">teamed up</a> with some cool integrations between their products and SDKs.</p>

                <img alt="Phidget board and temperature sensor real picture" />

                <p>As for the temperature sensor, I was given a <a href="#">Phidget</a> at <a href="#">University</a> for the project. However, this project had two problems:</p>

                1. Considering that this was also a project for University coursework, it would be difficult to demo it
                2. It felt too simple and too easy (even if the APIs were somehow horrible to work with, I was confident that it wouldn't take too long to complete)

                <p>So I decided to take the project a step further and make a simple Android app to display the current temperature. That alone would make the scope of the project change drastically, as I had to consider how the app was going to communicate with the Phidgets, in addition to how everything would work with the smart LED lights.</p>

                <todo>
                <p>The main idea so far is:</p>

                1. A Phidget will provide the current temperature from its sensor via a RESTful API server with endpoints such as `GET /temperature`
                2. An Android app will hit the API server with requests to display the current temperature (in Celsius and Fahrenheit)
                3. Based on the current temperature, interior lights (smart LED lights such as Philips Hue) will change color

                <h2>Components</h2>

                <p>The project is divided into several components.</p>

                <h3>Phidget and temperature sensor (double check these models)</h3>

                <p><a href="#">Phidgets Inc</a> offers a range of I/O boards, digital and analog I/O components, and many other hardware components used for rapid prototyping of a wide variety of projects.</p>

                <p>I am using a <a href="#">Phidget 1018 I/O board</a> along with a <a href="#">Phidget 1124 precision temperature sensor</a> module. A digital input cable (?) connects the two components together. The main 1018 I/O board can be plugged in to any computer device via a USB cable. Currently, I am using my Arch Linux PC to develop on. Soon I will have it connected to a Raspberry Pi also running Arch Linux.</p>

                <p>Libraries and drivers can be downloaded from the official Phidgets website, and are easy to set up for development. Devices can be accessed remotely by using the Phidget Network Server. "The Network Server exports the channels of each attached Phidget over the network. Using the Phidget22 API, clients on remote computers, phones, and Single Board Computers can attach to Phidget devices as if they were local."</p>

                <p>The temperature sensor can measure temperatures in the range of -30°C to +80°C with a typical error of ±0.75°C in the 0°C to 80°C range. The temperature sensor component is rated at -50°C to +150°C, but the other components on the board, the connector and the cable are rated at -30°C to +80°C. According to the product page, in a fast prototyping environment the temperature sensor board can be pushed to the ratings of the sensor component.</p>

                <h3>Phidget Python API (combine with previous header)?</h3>

                <p>I chose to use the Python API to communicate with the Phidgets because it is quite easy and quick to use for prototyping. I have a lot of experience using Python and it seems to be used fairly regularly in home automation projects. Additionally, I needed something that I could quickly run (and leave running) on a Raspberry Pi running a Linux distro, so I didn't want to deal with compiling C or C++ code, or installing a JDK for Java.</p>

                <h3>RESTful API</h3>

                <p>A HTTP server written in Python will provide a very simple <a href="#">REST</a> API for the app to get data from the Phidget. For now, it will only have GET endpoints. In the future, I may consider introducing PUT and POST endpoints for things such as setting a sensor's name (see below for more future plans and improvements).</p>

                <p>Some endpoint examples:</p>

                * GET /temperature
                * GET /avg_temperature
                * GET /min_temperature
                * GET /max_temperature

                <p>The reason I chose to have a standalone server to deal with grabbing the sensor data is so that I can, in the future, make the server accessible remotely (and securely!) so I can monitor my house temperature while I'm at work or elsewhere.</p>

                <h3>Android app</h3>

                <p>The Android app will be written in Java, as I am more familiar with it than <a href="#">Kotlin</a>. To start with, its sole purpose will be to display the temperature from a single sensor on the network. For the first stage, it should be fine to hardcode the IP address of the server on the app (or specify one in a textfield in the app). Later on, I can expand the server side of the project to include some kind of broadcast service that the app can discover and connect to, most likely using a protocol such as <a href="#">SSDP.</a></p>

                <h3>Smart LED integration</h3>

                <img alt="Philips Hue" />

                <p>I have not yet decided where the integration with the smart LED lights will happen. In theory, it could be done with the app, by sending API requests to smart lights on the network. However, this might not be the best place to do it from, and may even be a separate background application that monitors the temperature on its own and sets the light colors at a pre-determined interval.</p>

                <h2>Future plans / improvements</h2>

                * There will be a database that stores details about different sensors in a home (or other local) network
                * The app will access the database and display a list of all available sensors
                * When a user selects a sensor, more information about it is displayed (e.g. min, max and average temperature, room name, etc)
                * The database mentioned above should also securely store user login details
                * The app should make use of this feature to allow users to register user accounts and login
                * This enhances security and allows the user to be in control of who can access their sensors
                * API requests to get the temperature should make use of a secure token that is generated when the user logs in, and expired when they log out (or after a certain amount of time).
                * SSDP broadcast and discovery

                <h3>Security considerations</h3>

                * HTTPS
                * Database
                * Securing Phidgets on a network
				
				<p><a href="<?php echo $config['urls']['blog']; ?>/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
