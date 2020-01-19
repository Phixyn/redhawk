<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "SmartPhix: Parsing JSON Data In The App";
  $postTag = "SmartPhix";
  $postTagLink = $config["urls"]["blog"] . "/tags/smartphix/index.php";
  $postDate = "April 13, 2018";
  // Override title and metadata variables here before including header
  $config['page_title'] = $postTitle . " - Blog - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; SmartPhix &ndash; Blog &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <!-- BLOG POST -->
        <div class="cell">
          <h2 class="h3 blog-title"><a href="#"><?php echo $postTitle ?></a></h2>
          <small class="blog-meta">Posted on <?php echo $postDate ?> in <a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <div class="cell">
          <p>This past week I was faced with the challenge of using JSON data in my Android app. Retrofit libraries offer what is known as converters. Converters are classes used for converting Java types to their HTTP representation and parsing HTTP entities back into Java types. For example, a HTTP representation of JSON, which is what my HTTP server sends to the app, should be converted to a POJO (Plain Old Java Object) before being used in the app. This is why I chose to use Retrofit instead of alternative libraries such as <code>OkHTTP</code>. Retrofit's converters make it very easy to parse JSON HTTP responses into POJOs.</p>

          <p>To parse plain text data from my server, I used the Scalar converter, which simply takes the text and converts it to a String object. A Gson converter is needed for JSON data. I can specify the type of converter to use when creating my Retrofit object in the <code>MainActivity</code> class. The first step was to replace the Scalar converter with Gson.</p>

          <p>Next, I needed to create a data model that could be used by the converter to store the JSON data. The model class is simply a POJO, but with some extra annotations to help the converter decide which data is stored where. I had made a package called <code>api_clients</code> for the temperature server and Philips Hue API server. Inside, I made a sub-package called <code>models</code>, which I used for the temperature (and later, Hue light) data model. As well as private member variables for the celsius and fahrenheit temperatures, the class also had getter methods to retrieve these values.</p>

          <p>After updating the code in <code>MainActivity</code> to use the Gson converter, and use the getters in the <code>Temperature</code> model class, I reverted the temporary change I had made to my HTTP server's response. My HTTP server now returns JSON again. I tested setting the text in the <code>TextView</code> widgets to the actual temperatures, with the help of the <code>Temperature</code> model class. As a pleasant surprise, everything worked fine, and my app now displays both Celsius and Fahrenheit temperatures from the Phidget sensor. The final stage is to make the app communicate with the Philips Hue API</p>

          <p>This was done by making a data model for the <code>state</code> JSON object returned by calling <code>/api/(api key)/lights/1/state</code>. By sending data in the request JSON, I could change the color of the light. To do so, I had to model the data that I wanted to send. This was done in a <code>HueLightState</code> class inside the models package. After that, like the <code>Smartphix</code> client class, all I had to do was to make a simple <code>HueAPIClient</code> class and use that in <code>MainActivity</code>. I built a separate Retrofit and Call object in <code>MainActivity</code> for the Hue and called that inside the callback for the temperature request, so that I could change the light color based on the temperature value. I also had to add a button to allow the user to refresh the temperature, as I as not able to do that dynamically in a set interval.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a></li>
              <li><span class="show-for-sr">Current: </span><?php echo $postTitle ?></li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
