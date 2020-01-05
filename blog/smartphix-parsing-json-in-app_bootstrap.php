<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - Parsing JSON data in the app - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header_bootstrap.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - Parsing JSON data in the app</div>
					<div class="blog-meta">Posted on April 13th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

<p>This past week I was faced with the challenge of using JSON data in my Android app. Retrofit libraries offer what is known as converters. Converters are classes used for converting Java types to their HTTP representation and parsing HTTP entities back into Java types. For example, a HTTP representation of JSON, which is what my HTTP server sends to the app, should be converted to a POJO (Plain Old Java Object) before being used in the app. This is why I chose to use Retrofit instead of alternative libraries such as OkHTTP. Retrofit’s converters make it very easy to parse JSON HTTP responses into POJOs.</p>

<p>To parse plain text data from my server, I used the Scalar converter, which simply takes the text and converts it to a String object. A Gson converter is needed for JSON data. I can specify the type of converter to use when creating my Retrofit object in the MainActivity class. The first step was to replace the Scalar converter with Gson.</p>

<p>Next, I needed to create a data model that could be used by the converter to store the JSON data. The model class is simply a POJO, but with some extra annotations to help the converter decide which data is stored where. I had made a package called “api_clients” for the temperature server and Philips Hue API server. Inside, I made a sub-package called “models”, which I used for the temperature (and later, Hue light) data model. As well as private member variables for the celsius and fahrenheit temperatures, the class also had getter methods to retrieve these values.</p>

<p>After updating the code in MainActivity to use the Gson converter, and use the getters in the Temperature model class, I reverted the temporary change I had made to my HTTP server’s response. My HTTP server now returns JSON again. I tested setting the text in the TextView widgets to the actual temperatures, with the help of the Temperature model class. As a pleasant surprise, everything worked fine, and my app now displays both Celsius and Fahrenheit temperatures from the Phidget sensor. The final stage is to make the app communicate with the Philips Hue API</p>

<p>This was done by making a data model for the “state” JSON object returned by calling /api/(api key)/lights/1/state. By sending data in the request JSON, I could change the color of the light. To do so, I had to model the data that I wanted to send. This was done in a HueLightState class inside the models package. After that, like the Smartphix client class, all I had to do was to make a simple HueAPIClient class and use that in MainActivity. I built a separate Retrofit and Call object in MainActivity for the Hue and called that inside the callback for the temperature request, so that I could change the light color based on the temperature value. I also had to add a button to allow the user to refresh the temperature, as I as not able to do that dynamically in a set interval.</p>

<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_bootstrap.php"); ?>
