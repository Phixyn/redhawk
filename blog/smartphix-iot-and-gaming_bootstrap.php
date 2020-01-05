<?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
    $config['page_title'] = "SmartPhix - The IoT and Gaming - Blog - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header_bootstrap.php");
?>

		<div class="banner"> Blog </div>

        <!-- Main content -->
        <div class="container" id="main-content">
            <div class="row blog-post">
				<div class="blog-header">
					<div class="blog-title">SmartPhix - The IoT and Gaming</div>
					<div class="blog-meta">Posted on February 20, 2018 in <a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php">SmartPhix</a> &nbsp; | &nbsp; Comments: Off</div>
				</div>	<!-- .blog-header -->

                <a href="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" target="_blank"><img src="<?php echo $config['urls']['root']; ?>/static/blog/image-uploads/communication-1927706_640.jpg" alt="Internet of Things" style="width: 40%;height:50%;" /></a>

<p>Over the last two decades, technology has grown at an unprecedented pace. Many emerging technologies deserve our attention, including new Artificial Intelligence (AI) and machine learning algorithms, cryptocurrency, Internet of Things (IoT) and Virtual and Augmented Reality. When we take a look at game development, AI, VR and AR seem to be taking the spotlight, rightfully so. However, I believe that there is also place for IoT in game development, which deserves to be explored further.</p>

<p>My project, called SmartPhix, will explore the Internet of Things (IoT) using smart home devices. My aim is to investigate how video games and software applications can make use of IoT technology to enhance user experience.</p>

<h3>What is the Internet of Things?</h3>

<p><a href="https://www.zdnet.com/article/what-is-the-internet-of-things-everything-you-need-to-know-about-the-iot-right-now/">IoT</a> refers to a collection of physical devices that are connected to the Internet, sending and receiving data. These devices can be anything from home computers and appliances, to wearable technology. The concept of IoT first emerged in the late 90s when the MIT’s Auto-ID Centre started researching and publishing <a href="http://cocoa.ethz.ch/downloads/2014/06/None_MIT-AUTOID-WH-001.pdf">white papers</a> on the future and application of IoT, sometimes referred to as a “networked physical world”. The research focused the integration of physical objects with the Internet and <a href="http://cocoa.ethz.ch/downloads/2014/06/None_MIT-AUTOID-WH-001.pdf">the use of RFID (Radio Frequency Idenfitication) tags</a> to capture and transmit data. IoT began trending this decade, and between 2016 and 2017, there was an estimated increase of 31% in physical objects capable of connecting to the Internet, with approximately 8.4 billion devices connected to the Internet in 2017. <a href="https://spectrum.ieee.org/tech-talk/telecom/internet/popular-internet-of-things-forecast-of-50-billion-devices-by-2020-is-outdated">It is estimated that by 2020, the IoT will consist of 30 billion objects.</a></p>

<p>Presently, there are a number of different uses for IoT technology, and a wide range of use cases. For example:</p>
<ul>
<li>Smart watches, typically used as an extension to smartphones, allow users to quickly check notifications, weather reports, calendar events and more.</li>
<li>Fitness bands, used to monitor distance and/or steps taken during exercise activity, as well as heart rate and other vital statistics</li>
<li>Self driving cars</li>
<li>Smart home devices such as <a href="https://nest.com/uk/thermostats/nest-learning-thermostat/overview/" title="NEST thermostats">thermostats</a>, smart light bulbs and refrigerators</li>
</ul>

<h3>Smart home devices</h3>

<p>IoT has played a big part in home automation due to the rise in popularity of smart home gadgets and appliances that can be connected to the Internet. A full home automation system may allow users to control and manage lighting, temperature, appliances, and home security devices within their house. Smart home devices may be controlled via a number of user interfaces, particularly mobile apps, Web interfaces, and wall mounted terminals.</p>

<h3>IoT and Gaming</h3>

<p>As a gamer, IoT and smart home devices have recently caught my attention as I explored ways to customise my gaming setup for an optimal experience. Recently, Razer and Philips have <a href="https://www2.meethue.com/en-gb/friends-of-hue/razer">teamed up</a> to allow users to link their Razer Chroma peripherals with any Philips Hue product. This provides gamers with a more rich and immersive gaming experience in their room.</p>

<p>This also sparked my interest as a game developer, as both Razer Chroma and Philips Hue offer rich APIs for developers to use. In the next blog post, I will discuss the usefulness of these APIs and what opportunities it could provide game developers with in terms of enhancing gaming experience by directly interacting with the gamer’s physical space.</p>
				
				<p><a href="<?php echo $config['urls']['blog']; ?>/tags/smartphix/index.php" title="Back to blog">&laquo; Back to blog</a></p>

            </div> <!-- /.row /.blog-post -->
        </div> <!-- /.container #main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer_bootstrap.php"); ?>
