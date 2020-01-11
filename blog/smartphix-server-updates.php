<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "SmartPhix: HTTP Server Updates";
  $postTag = "SmartPhix";
  $postTagLink = $config["urls"]["blog"] . "/tags/smartphix/index.php";
  $postDate = "March 23, 2018";
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

        <div class="cell">
          <p>Last week I was having some issues integrating my Phidget API helper class with a simple HTTP server in Python. I couldn't store an instance of my <code>PhidgetHeper</code> class in a way that the request handler class could access it and use its helper methods to return the current sensor temperature. However, I did not give up so easily. After digging through more documentation and reading the Python docs for the <code>http.server</code> module, I started understanding more about how I should structure my server code. Additionally, I found a way to pass context onto a <code>HTTPServer</code> instance in Python. By context, I mean member variables, additional helper methods, etc. This is exactly what I was having difficulty doing last week, as I simply could not find a way to keep a persistent instance of my <code>PhidgetHelper</code> class anywhere within the server code.</p>

          <p>In order solve this, I had to create a subclass of <code>HTTPServer</code>, which I appropriately named <code>SmartphixHTTPServer</code>. I then created and stored an instance of my <code>PhidgetHelper</code> class in a member variable. The request handler classes were then able to access this member variable by referencing the server object (i.e. <code>self.server.member_var</code>), which is an instance variable of <code>BaseHTTPRequestHandler</code>. This variable seems to be instantiated when our HTTP request handler <b>sub-class (not object, the class reference itself)</b> is passed as an argument of the <code>HTTPServer</code> class' constructor method.</p>

          <p>Using this approach, I was able to integrate my Phidget helper class with the HTTP server. With this approach for the server, I am able to run the Phidget client and a HTTP server in parallel without violating anything mentioned on the Phidget best practices page. The next step is to display the temperature values in the Android app.</p>

          <p>When implementing this, I noticed that the requests to the Phidget were made alongside the server listening for, and handling incoming requests. According to my logging, the HTTP server and the Phidget requests were running in parallel. However, this does not mean that they were running in separate threads, as I have not implemented any kind of multi-threading on this server (yet). Instead, what was happening was that the server did not block the Phidget client (which sends requests to the sensor every second) from running <b>until it had to process a request.</b> Once it received a request, the Phidget client code was unable to run until the request was processed. However, because the request was processed very quickly (in milliseconds on my PC), it made it look like the Phidget client never stopped to wait for the server to do its work. This made it look like it was multi-threaded when it was not. To verify this, I spammed the server with requests with the help of another Python script, and completely blocked the Phidget client from running (I would not recommend doing this, by the way!). So an improvement for the future would be to look at <code>Threading</code> in Python and run the HTTP server and Phidget client in their own separate threads, so that a request to the server doesn't stop the client from requesting data from the sensor.</p>

          <p>With the server and Phidget integration complete, the next step was to write a suitable response for <code>GET</code> requests to the <code>/temperature</code> API endpoint, in a format that could be easily parsed by clients. I plan to use Retrofit on my Android app to handle API calls. I have two different values to send in the response to a <code>GET</code> request to <code>/temperature</code>: Celsius and Fahrenheit temperature. An easy and clean way to do this is to send the response in JSON format, which is widely used and supported. An older approach would be to send an XML response, but this can be slower to parse by clients, and I don't generally see API services returning XML often (especially for small responses). As such, I decided to stick with a simple JSON response:</p>
        </div> <!-- .cell -->

        <div class="cell medium-8 large-8 medium-offset-2 large-offset-2">
          <pre>
            {
            "temperature": {
              "celsius": xx,
              "fahrenheit": xx
              }
            }</pre>
        </div> <!-- .cell -->

        <div class="cell">
          <p>To do this, I needed to update two methods: the <code>get_temperature</code> method in the <code>PhidgetHelper</code> class, and the <code>do_GET</code> method in the HTTP request handler subclass. First, instead of returning a number in <code>get_temperature</code>, I returned the JSON object mentioned above. Using Python's JSON module, I was able to convert a Python dictionary to a JSON string using the <code>dumps()</code> method. I could have also created a JSON object in the <code>voltageChangeHandler</code> method and stored the JSON object as an instance variable, but this method gets called more often than <code>get_temperature</code>, so it would be more resource intensive to create/update a JSON object every second. By doing it in <code>get_temperature</code> instead, the JSON object is only created when necessary. The reason why I didn't do all of this in the <code>do_GET</code> is because I want to keep all temperature related code in the <code>PhidgetHelper</code> class, and keep the HTTP server classes only responsible for the server itself.</p>

          <p>Next, I had to update the <code>do_GET</code> method. Firstly, I had to add a HTTP header to the response being sent, to tell clients that I was sending them JSON data. This was as simple as adding <code>self.send_header('Content-Type', 'application/json')</code> followed by <code>self.end_header()</code>, at the start of <code>do_GET</code>. After this, all I had to do was call <code>self.wfile.write(self.server.ph.get_temperature().encode("utf-8"))</code>. The <code>write()</code> method of the request class' <code>wfile</code> object expects byte data, so <code>encode()</code> is used to encode the JSON string to a byte-like format.</p>

          <p>With this, the server side is now complete, and I can move on to the Android app implementation, which will be the subject of the next blog post.</p>
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
