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
					<div class="blog-title">SmartPhix Server Update</div>
					<div class="blog-meta">Posted on April 9th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" target="_blank"><img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" alt="Internet of Things" style="width: 40%;height:50%;" /></a>

                <p>Last month I was having some issues integrating my Phidget code with my HTTP server code. I couldn't store an instance of my PhidgetHeper class in a way that the request handler class could access it and use its helper methods to return the current temperature. After reading the Python docs for the http.server, I started understanding more about how I should structure my server code. Additionally, I found a way to pass context onto a HTTPServer instance in Python. By context, I mean member variables, additional helper methods, etc.</p>

                <p>In order to do this, I have to create a subclass of HTTPServer, which I appropriately named SmartphixHTTPServer. I then created and stored an instance of my PhidgetHelper class in a member variable. The request handler classes can then access this member variable by referencing the server object (i.e. self.server.member_var). Using this approach, I was able to integrate my Phidget helper class with the HTTP server.</p>

                <p>The next step was to write a response for the /temperature API endpoint in a format that could be easily parsed by clients. I planned to use Retrofit on my Android app to handle API calls. I have two different values to send in the reponse to a GET request to /temperature: Celsius and Fahrenheit temperature. An easy and clean way to do this is to send the response in JSON format, which is widely used and supported. An older approach would be to send an XML response, but this can be slower to parse by clients, and I don't generally see API services returning XML often (especially for small responses). As such, I decided to stick with a simple JSON response:</p>

                <!--
                <code>
                { 
                    temperature: {
                        [
                            celsius: xx,
                            fahrenheit: xx
                        ]
                    }
                }
                </code>
                -->

                <p>With my current approach for the server, I am able to run the Phidget client and a HTTP server in parallel without violating anything mentioned on the Phidget <a href="https://www.phidgets.com/docs/Best_Phidgets_Practices" target="_blank">best practices.</a> page. The next step is to display the temperature values in the Android app.</p>
				
				<p><a href="<?php echo $config['urls']['blog']; ?>/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
