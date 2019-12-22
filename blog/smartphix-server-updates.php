<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - HTTP Server Updates- Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header_bootstrap.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - HTTP Server Updates</div>
					<div class="blog-meta">Posted on March 23rd, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

<p>Last week I was having some issues integrating my Phidget API helper class with a simple HTTP server in Python. I couldn't store an instance of my PhidgetHeper class in a way that the request handler class could access it and use its helper methods to return the current sensor temperature. However, I did not give up so easily. After digging through more documentation and reading the Python docs for the http.server module, I started understanding more about how I should structure my server code. Additionally, I found a way to pass context onto a HTTPServer instance in Python. By context, I mean member variables, additional helper methods, etc. This is exactly what I was having difficulty doing last week, as I simply could not find a way to keep a persistent instance of my PhidgetHelper class anywhere within the server code.</p>

<p>In order solve this, I had to create a subclass of HTTPServer, which I appropriately named SmartphixHTTPServer. I then created and stored an instance of my PhidgetHelper class in a member variable. The request handler classes were then able to access this member variable by referencing the server object (i.e. self.server.member_var), which is an instance variable of BaseHTTPRequestHandler. This variable seems to be instantiated when our HTTP request handler <b>sub-class (not object, the class reference itself)</b> is passed as an argument of the HTTPServer class’ constructor method.</p>

<p>Using this approach, I was able to integrate my Phidget helper class with the HTTP server. With this approach for the server, I am able to run the Phidget client and a HTTP server in parallel without violating anything mentioned on the Phidget best practices page. The next step is to display the temperature values in the Android app.</p>

<p>When implementing this, I noticed that the requests to the Phidget were made alongside the server listening for, and handling incoming requests. According to my logging, the HTTP server and the Phidget requests were running in parallel. However, this does not mean that they were running in separate threads, as I have not implemented any kind of multi-threading on this server (yet). Instead, what was happening was that the server did not block the Phidget client (which sends requests to the sensor every second) from running <b>until it had to process a request.</b> Once it received a request, the Phidget client code was unable to run until the request was processed. However, because the request was processed very quickly (in milliseconds on my PC), it made it look like the Phidget client never stopped to wait for the server to do its work. This made it look like it was multi-threaded when it was not. To verify this, I spammed the server with requests with the help of another Python script, and completely blocked the Phidget client from running (I would not recommend doing this, by the way!). So an improvement for the future would be to look at Threading in Python and run the HTTP server and Phidget client in their own separate threads, so that a request to the server doesn’t stop the client from requesting data from the sensor.</p>

<p>With the server and Phidget integration complete, the next step was to write a suitable response for GET requests to the /temperature API endpoint, in a format that could be easily parsed by clients. I plan to use Retrofit on my Android app to handle API calls. I have two different values to send in the response to a GET request to /temperature: Celsius and Fahrenheit temperature. An easy and clean way to do this is to send the response in JSON format, which is widely used and supported. An older approach would be to send an XML response, but this can be slower to parse by clients, and I don't generally see API services returning XML often (especially for small responses). As such, I decided to stick with a simple JSON response:</p>
<p>
<pre>
{
"temperature": {
  "celsius": xx,
  "fahrenheit": xx
  }
}</pre>

<p>To do this, I needed to update two methods: the get_temperature method in the PhidgetHelper class, and the do_GET method in the HTTP request handler subclass. First, instead of returning a number in get_temperature, I created returned the JSON object mentioned above. Using Python’s JSON module, I was able to convert a Python dictionary to a JSON string using the "dumps()" method. I could have also created a JSON object in the voltageChangeHandler method and stored the JSON object as an instance variable, but this method gets called more often than get_temperature, so it would be more resource intensive to create/update a JSON object every second. By doing it in get_temperature instead, the JSON object is only created when necessary. The reason why I didn’t do all of this in the do_GET is because I want to keep all temperature related code in the PhidgetHelper class, and keep the HTTP server classes only responsible for the server itself.</p>

<p>Next, I had to update the do_GET method. Firstly, I had to add a HTTP header to the response being sent, to tell clients that I was sending them JSON data. This was as simple as adding self.send_header('Content-Type', 'application/json') followed by self.end_header(), at the start of do_GET. After this, all I had to do was call self.wfile.write(self.server.ph.get_temperature().encode(“utf-8”)). The write() method of the request class’ wfile object expects byte data, so encode() is used to encode the JSON string to a byte-like format.</p>

<p>With this, the server side is now complete, and I can move on to the Android app implementation, which will be the subject of the next blog post.</p>

<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_bootstrap.php"); ?>
