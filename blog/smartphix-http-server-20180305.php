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
					<div class="blog-title">SmartPhix HTTP Server</div>
					<div class="blog-meta">Posted on March 5, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" target="_blank"><img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" alt="Internet of Things" style="width: 40%;height:50%;" /></a>

                <p>Last week, I discussed a <a href="http://flask.pocoo.org/" target="_blank">new project idea</a> I had involving Phidgets and a companion app. I started looking at the backend for the project, mainly writing the writing the HTTP server in Python. As with all of my newer projects, I am using Python 3 for this, as more systems are making the move to this version, with the biggest exception being legacy systems.</p>

                <p>For the HTTP server, I chose to use the Python BaseHTTPServer class from the http.server module. My other options were to use a more defined and flexible library such as <a href="<?php echo $config['urls']['blog']; ?>/smartphix-home-automation-20180220.php" target="_blank">Flask</a>. However, I felt that with such a simple API, it would not benefit me greatly to use Flask or any other 3rd party library over what comes shipped with Python. This should also make it easier to set the project up on multiple systems, such as my Arch Linux Raspberry Pi.</p>

                <p>I was able to make a server that listened for requests and logged them fairly quickly, writing a subclass of BaseHTTPRequestHandler to handle the API requests. The next challenge I had was to integrate the Phidgets' API into the server, in order to have the server return the temperature when a GET request to /temperature is made. Unfortunately, this is less simple than the first part.</p>

                <p>I started by making a PhidgetHelper class that defined callback methods, which were passed to the temperature sensor's channel object. The PhidgetHelper class also containing an __init__ methods that dealt with the initialization of the Phidget, including setting up the temperature sensor. I then tried to instantiate this class inside my HTTP request handler class. However, when I did that I wasn't able to get any data from the Phidgets.</p>
                
                <p>From what I experienced, it seems that the HTTP request handler class (SmartphixRequestHandler) was getting instantiated every time a request was made to the server. It also seemed to be destroyed (however Python recycled objects) after the request was fully processed. This made sense when I thought about it, but I haven't yet found where this is documented in the Python docs. This also makes things difficult when trying to pass data from the PhidgetHelper class to the request handler class. Since the do_GET method inside the request handler class needs to be able to send the current temperature of the Phidget sensor, I needed it to have access to the PhidgetHelper class. If I tried to make an instance of PhidgetHelper inside my request handler class, then it would only be instantiated when a request was first made by a client (and potentially destroyed after the request was processed).</p>

                <h2>An alternative approach</h2>

                <p>An alternative approach to relying on a full PhidgetHelper class and the whole event-driven system of the Phidget API, is to not use event-driven programming for the Phidgets and call getVoltage() from the Phidget VoltageInput API directly. However this does not seem to be <a href="https://www.phidgets.com/docs/Polling_vs._Events#Recommendations" target="_blank">recommended practice.</a> Currently, I register a callback on the temperature sensor channel that returns the sensor's current voltage value at a set interval. The API docs contain a formula for converting this voltage into temperature values. This is the recommended way to use the Phidget API.</p>

                <p>For now, the approach of using getVoltage() instead of event-driven/callbacks seems feasible enough, and will get the server into a good enough state for the Android app. Once I have a basic Android app that can display the temperature using the server's API, I will revisit the server and look at the best way to structure it based on <a href="https://www.phidgets.com/docs/Best_Phidgets_Practices" target="_blank">best practices.</a></p>
				
				<p><a href="<?php echo $config['urls']['blog']; ?>/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
