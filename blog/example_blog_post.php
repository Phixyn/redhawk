<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "Example Blog Post - Blog - Alpeche Pancha";
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
          <h2 class="h3 blog-title"><a href="#">Example Blog Post - The IoT and Gaming</a></h2>
          <small class="blog-meta">Posted on February 20, 2018 in <a href="#">IoT</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <!-- We can have a simple image without a caption... -->
        <!-- <div class="cell blog-post-image">
          <img class="thumbnail" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post image" />
        </div> !-- .cell .blog-post-image -->

        <!-- ... or with a caption below it. -->
        <div class="cell blog-post-image">
          <figure>
            <img class="thumbnail" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/communication-1927706_640.jpg" alt="Blog post header image" />
            <figcaption><em>The Internet of Things: Everything is connected.</em></figcaption>
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <p class="lead">This is the lead paragraph. Its font size is a bit bigger than the rest of the paragraphs.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla nibh, pretium eget nulla id, faucibus rutrum nisl. Vivamus ornare ipsum nec urna accumsan auctor. Nam mattis, nunc at pellentesque rhoncus, lacus erat blandit ligula, ac dignissim orci mauris condimentum nisl.</p>

          <p>A smaller paragraph under the lead paragraph to introduce the next bit of text. Maybe it's not necessary most of the times. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla nibh, pretium eget nulla id, faucibus rutrum nisl.</p>
        </div> <!-- .cell -->
          
        <div class="cell">
          <h3 class="h4">What is the Internet of Things?</h3>

          <p><a href="https://www.zdnet.com/article/what-is-the-internet-of-things-everything-you-need-to-know-about-the-iot-right-now/">IoT</a> refers to a collection of physical devices that are connected to the Internet, sending and receiving data. These devices can be anything from home computers and appliances, to wearable technology. The concept of IoT first emerged in the late 90s when the MIT’s Auto-ID Centre started researching and publishing <a href="http://cocoa.ethz.ch/downloads/2014/06/None_MIT-AUTOID-WH-001.pdf">white papers</a> on the future and application of IoT, sometimes referred to as a “networked physical world”. The research focused the integration of physical objects with the Internet and <a href="http://cocoa.ethz.ch/downloads/2014/06/None_MIT-AUTOID-WH-001.pdf">the use of RFID (Radio Frequency Idenfitication) tags</a> to capture and transmit data. IoT began trending this decade, and between 2016 and 2017, there was an estimated increase of 31% in physical objects capable of connecting to the Internet, with approximately 8.4 billion devices connected to the Internet in 2017. <a href="https://spectrum.ieee.org/tech-talk/telecom/internet/popular-internet-of-things-forecast-of-50-billion-devices-by-2020-is-outdated">It is estimated that by 2020, the IoT will consist of 30 billion objects.</a></p>

          <p>We could use definition lists in Foundation. For example:</p>
          <dl>
            <dt>This is the definition term</dt>
              <dd>This is the meaning of the term, and an explanation of it.</dd>
            <dt>Another one</dt>
              <dd><a href="#" title="Lorem">Lorem</a> ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla nibh, pretium eget nulla id, faucibus rutrum nisl. Vivamus ornare ipsum nec urna accumsan auctor.</dd>
          </dl>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="media-object">
            <div class="media-object-section">
              <div class="thumbnail"><img src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/Philips-Hue-Alexa-Bridge-Control-Smarthome.jpg" alt="Blog post image" /></div>
            </div> <!-- .media-object-section -->

            <div class="media-object-section">
              <h3 class="h4">Media Section</h3>

              <p>An example of a media section, with a thumbnail image. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla nibh, pretium eget nulla id, faucibus rutrum nisl. Vivamus ornare ipsum nec urna accumsan auctor. Nam mattis, nunc at pellentesque rhoncus, lacus erat blandit ligula, ac dignissim orci mauris condimentum nisl. Maecenas nec est nulla. Aenean nec commodo justo.</p>
            </div> <!-- .media-object-section -->
          </div> <!-- .media-object -->
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">Conclusion</h3>

          <p>A closing paragraph. It might have a <a href="#" title="link">link</a>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla nibh, pretium eget nulla id, faucibus rutrum nisl. Vivamus ornare ipsum nec urna accumsan auctor. Nam mattis, nunc at pellentesque rhoncus, lacus erat blandit ligula, ac dignissim orci mauris condimentum nisl. Maecenas nec est nulla. Aenean nec commodo justo. Curabitur tempus ultrices suscipit. Integer aliquet lectus mauris, sit amet ultricies quam rhoncus eget.</p>

          <p>Morbi dapibus lacus risus, sit amet fermentum diam hendrerit sed. Nunc tempor dolor nisi, id venenatis metus iaculis non. Curabitur vitae velit enim. Aliquam molestie, quam nec ornare dictum, enim purus molestie elit, ac condimentum justo mi eget arcu. Vivamus ut sem nisl. Nam in felis sit amet dui imperdiet ultricies. Nam condimentum velit id lectus consectetur volutpat.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><span class="show-for-sr">Current: </span>Example Blog Post - The IoT and Gaming</li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
