<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  // Override title and metadata variables here before including header
  $config['page_title'] = "Weekly Phix - Spotify Wrapped, Grimes and Sneaky Bacon - Phixyn";
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
          <h2 class="h3 blog-title"><a href="#">Weekly Phix #1 - Spotify Wrapped, Grimes and Sneaky Bacon</a></h2>
          <small class="blog-meta">Posted on December 23, 2019 in <a href="<?php echo $config['urls']['blog']; ?>/weekly-phix/index.php">Weekly Phix</a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <!-- ... or with a caption below it. -->
        <div class="cell blog-post-image">
          <figure>
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/weekly-phix/grimes_cyberpunk_no_overlay.png" alt="Grimes in Cyberpunk 2077" />
            <figcaption><em>Credit: CD Projekt Red</em></figcaption>
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <p class="lead">Welcome to the first weekly blog post. I thought I'd try to do a mini blog post every week. It's almost like a newsletter mixed with a casual blog post. The idea is to give updates on projects I'm working on, as well as news related to my interests and hobbies. I'll try to keep it short and to the point.</p>

          <p>Ideally, I'd like to write a mini blog post every week, followed by a longer monthly blog post which will be more formal and informative. Depending on work and University commitments, I may shift things around a little, but I'd like to give this a try for a few weeks and see how it goes.</p>

          <p>Let's start with the first weekly blog post. This one is a bit late and outdated, but I still wanted to get it out and get things started before the new year.</p>
        </div> <!-- .cell -->
        
        <div class="cell">
          <h3 class="h4">Spotify Wrapped</h3>

          <p style="text-align:center;"><img style="width:70%; height:65%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/weekly-phix/spotify_wrapped_2019.PNG" alt="My Spotify Wrapped 2019" /></p>

          <p>Every year, Spotify users are blessed with statistics about the music they listened to throughout the year. This year's Spotify Wrapped also included stats for the 2010s decade, which was a nice treat. My Spotify Wrapped was not too surprising to me. I listen to a wide variety of music, but there's a few genres that I love: symphonic metal, gothic metal and alternative rock.<p>

          <p>Unsurprisingly, my top genre for this decade was gothic metal. The Birthday Massacre, my favourite band, was my top artist of the decade. What was surprising was seeing Avril Lavigne as my top artist of the year, stealing Grimes' spot. Without a doubt, Grimes was my favourite artist this year, and has been one of my favourites this decade. However, I did listen to full Avril Lavigne albums in my car while driving, so that totally skewed the stats in favour of Avril. Still, Grimes was number one for me this year.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">Cyberpunk 2077: Grimes and The Sound Of Night City</h3>
          
          <!-- <div class="responsive-embed widescreen"> --> <!-- TODO investigate issues with responsive-embed not resizing -->
          <p style="text-align:center;"><iframe width="854" height="480" src="https://www.youtube.com/embed/Q4ZdkEiYvK0" frameborder="0" allowfullscreen></iframe></p>
          <!-- </div> -->

          <p>If you've read the section about Spotify Wrapped above, you can guess why this is a pretty big deal to me. To add to that, Cyberpunk 2077 is a game that I've been anticipating and hyping for pretty much since the first teaser trailer came out. Needless to say, Friday 13th December was a pretty good day to be both a Grimes fan and a Cyberpunk 2077 fan.</p>

          <p>Grimes performed her new song "4&#0198;M" at The Game Awards and was announced to be one of the artists composing songs for the game's soundtrack. Additionally, she will be voicing the character <a href="https://cyberpunk.fandom.com/wiki/Lizzy_Wizzy" title="Cyberpunk Wiki - Lizzy Wizzy" target="_blank">"Lizzy Wizzy"</a>, a musician residing in Night City.</p>

          <p>First Keanu Reeves and then Grimes... this game is truly going to be breathtaking. It's impressive how CD Projekt Red kept both of these announcements from being leaked. Although, I had gotten a strange notification on my Twitter about Grimes liking a particular tweet a few days prior to the announcement. Still, I did not expect her to actually write a song for the game.</p>

          <p style="text-align: center;"><img src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/weekly-phix/grimes_cyberpunk_tweet.PNG" alt="Grimes likes a tweet from the Cyberpunk 2077 Twitter account" /></p>
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">Sneaky Bacon Enters Alpha Stage</h3>
          
          <p style="text-align:center;"><img style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/weekly-phix/sneaky_bacon_main_menu.PNG" alt="Sneaky Bacon Main Menu Screen" /></p>

          <p>For my final year group project, we are developing a fun third person stealth/puzzle-like game. It draws some inspiration from games like the Untitled Goose Game. The game is being developed in Unity and I am one of the gameplay programmers. I am working in C# and have been focusing on enemy AI programming and the tutorial level gameplay. More information about the project will be added to this website soon.</p>

          <p>We've hit Alpha stage at the end of this semester and had some playtesting done during our last lab session of the semester. Playtesting feedback was very constructive and helpful to us. While we were aware of some of the issues raised and improvements suggested, a lot of people gave us new ideas that we're excited to try out. I can't say that feedback was positive, but it wasn't negative either. It was just... feedback. We know the game is very rough around the edges and gameplay is buggy. That's why we're still in Alpha. We will take the playtesting feedback and work hard on the Beta to have a fun and playable game (hopefully!).</p>
        </div> <!-- .cell -->

        <div class="cell">
          <h3 class="h4">Conclusion</h3>

          <p>That concludes the first weekly phix post. It's a bit rough, but the idea and the concept are there. I will continue improving the blog posts and other content on this website in the new year.</p>

          <p>Happy holidays!<br />
          &ndash; Phixyn</p>
        </div> <!-- .cell -->

        <div class="cell">
          <hr />
          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="<?php echo $config['urls']['root']; ?>/index.php">Home</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/index.php">Blog</a></li>
              <li><a href="<?php echo $config['urls']['blog']; ?>/weekly-phix/index.php">Weekly Phix</a></li>
              <li><span class="show-for-sr">Current: </span>Weekly Phix #1 - Spotify Wrapped, Grimes and Sneaky Bacon</li>
            </ul>
          </nav>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
