<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - Phidget API and HTTP Server - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - Phidget API and HTTP Server</div>
					<div class="blog-meta">Posted on March 13th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

<p>For the last couple of weeks, I have been experimenting with the Python Phidget API for my IoT project. I also started looking at ways to implement the backend API server for the project, mainly learning how to write a HTTP server in Python. As with all of my newer projects, I am using Python 3 for this, as more systems are making the move to this version, with the biggest exception being legacy systems.</p>

<p>For the HTTP server, I chose to use the Python BaseHTTPServer class from the http.server module. My other options were to use a more defined and flexible library such as Flask. However, I felt that with such a simple API, it would not benefit me greatly to use Flask or any other 3rd party library over what is already included in the Python standard libraries. This should also make it easier to set the project up on multiple systems, such as a Raspberry Pi running a Linux distro.</p>

<p>After reading the documentation for the http.server module and its various classes, I was quickly able to make a server that listened for requests and logged them, by creating a subclass of BaseHTTPRequestHandler to handle the API requests. The next challenge I had was to integrate the Phidget's API with the server, in order to have the server return the sensor’s temperature when a GET request to /temperature was made. Unfortunately, this was less simple than the first part.</p>

<p>I started by making a PhidgetHelper class that defined callback methods, which were passed to the temperature sensor's channel object. The PhidgetHelper class also contained an __init__ method that dealt with the initialization of the Phidget, including finding an attached temperature sensor to get data from. I then tried to instantiate this class inside my HTTP request handler class. However, when I did that I wasn't able to get any data from the Phidgets.</p>
                
<p>From what I experienced, it seems that the HTTP request handler class (SmartphixRequestHandler) was getting instantiated every time a new request was made to the server. I tested this by navigating to “http://localhost/temperature” on my web browser and logging what the HTTP request handler class was doing. The instance of this class also seemed to be destroyed (or however Python recycles objects) after the request was fully processed. All of this made sense when I thought about it, but I couldn’t find where this was documented in the Python documentation for this class.</p>

<p>Another challenge I had was trying to pass data from the PhidgetHelper class to the request handler class. Since the do_GET method inside the request handler class needs to be able to send the current temperature from the Phidget sensor, I needed it to have access to the PhidgetHelper class. If I tried to make an instance of PhidgetHelper inside my request handler class, then it would only be instantiated when a request was first made by a client and potentially destroyed after the request was processed. There was no persistence for my PhidgetHelper object, and I couldn’t get temperature data while the HTTP server was listening for requests. Could it be that I have to use threading to solve this issue?</p>

<h3>An alternative approach</h3>

<p>An alternative approach to relying on a PhidgetHelper class and the whole event-driven system of the Phidget API, is to not use event-driven programming for the Phidgets. Instead, I could call getVoltage() from the Phidget VoltageInput API directly. However this does not seem to be recommended practice. Currently, I register a callback on the temperature sensor channel that returns the sensor's current voltage value at a set interval. The API docs contain a formula for converting this voltage into temperature values. This is the recommended way to use the Phidget API.</p>

<p>For now, the approach of using getVoltage() instead of event-driven/callbacks seems feasible enough to get the server into a ready state for the Android app. Once I have a basic Android app that can display the temperature using the server's API, I can revisit the server and look at the best way to structure it based on best practices, so I will take this approach for now.</p>

<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
