<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - Conclusions and future plans - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - Conclusions and future plans</div>
					<div class="blog-meta">Posted on April 27th, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

<p>Generally, I am happy with my prototype app for the Smartphix project, but there is a lot to be improved. It is currently not practical to use, as IP addresses and API tokens for the Hue API have to be hardcoded both in the app and server. Furthermore, the app’s MainActivity class can be improved to boost performance and usability. Currently, the user has to tap the “Update” button to get new temperatures and set their Hue’s color. However, it would be more practical to have the app update at a set interval, which could be configured by the user. Additionally, the app UI should provide a way to specify the IP addresses of the HTTP server and Hue Bridge.</p>

<p>Despite the shortcomings of the project and the challenges faced, I’ve learned a fair bit about IoT development, especially its weaknesses. IoT security is still easily exploitable, which could lead to dangerous situations if not addressed. Thankfully, manufacturers seem to take this seriously, and Philips has recently announced HTTPS support for their Hue Bridge API.</p>

<p>I’ve learned about making a simple API, as well as working with an existing API. Working with so many different components and bringing them all together can be challenging sometimes, and I believe that my approach to focusing on one component at a time worked well.</p>

<h3> Project demo </h3>

<p>Here's a quick demonstration of the project in action. The color of the Hue light is set according to the celsius temperature shown in the app. You can see the output of the server on the left monitor, and Android studio and API debugger on the right center monitor. The API debugger is used to turn the light off or change its color, so that you can see that by pressing "Update", the app sets the color of the Hue light again.</p><br />

<iframe width="560" height="315" src="https://www.youtube.com/embed/2qVRDFxVzq0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<p> And here's a shorter one showing the Phidget plugged in to my PC: </p><br />

<iframe width="560" height="315" src="https://www.youtube.com/embed/vO-c1KCDfsM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<h3>Future plans / improvements</h3>

<ul>
<li>Auto discovery for the HTTP server</li>
<li>Multiple Phidget sensor support</li>
<li>PhidgetHelper class should handle multiple channels and automatically find all sensors connected. Currently, we expect the sensor to be in channel 0</li>
<li>API token for Hue Bridge should be retrieved via the app in an “initial setup” screen</li>
<li>App should have Settings, to specify user preferences</li>
<li>HTTPS support for both API clients, to enhance security</li>
</ul>

<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
