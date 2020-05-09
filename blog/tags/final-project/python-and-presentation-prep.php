<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Python Tutorials and Presentation Preparation";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "January 24, 2020";
  // Override title and metadata variables here before including header
  $config['page_title'] = $postTitle . " - Blog - Alpeche Pancha";
  require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

    <!-- MAIN CONTENT -->
    <div class="grid-container">
      <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell">
          <hr />
          <h1 class="h5 subheader" id="main-content-banner">&bull; UoS Final Project &ndash; Blog &bull;</h1>
          <hr />
        </div> <!-- .cell -->

        <!-- BLOG POST -->
        <div class="cell">
          <h2 class="h3 blog-title"><a href="#"><?php echo $postTitle ?></a></h2>
          <small class="blog-meta">Posted on <?php echo $postDate ?> in <a href="<?php echo $postTagLink ?>"><?php echo $postTag ?></a> &nbsp; | &nbsp; Comments: Off</small>
          <hr />
        </div> <!-- .cell -->

        <div class="cell blog-post-image">
          <figure>
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/piqsels-banner-oznhu.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <h3 class="h4">Preparation for Presentation</h3>

          <p>As part of my final year project at the University of Suffolk, I am required to give a short presentation about my project. This will take place in February. As a part-time student, most of my weekends have been spent working on this presentation or on the game for my group project.</p>
          
          <p>Currently I have about 14 slides, but I might have to cut some content off. With the topic of my final project being Machine Learning, there is a copious amount to cover. My project is mainly research based, and most of its content is theory. I did plan to develop a small prototype for this presentation, but due to other work commitments, I might not be able to finish it on time. For the last few weeks, I have been watching many tutorials and reading books about Machine Learning. I have a substantial amount of code written from these tutorials, but since it's not my own code, I don't feel like it would be fair to add it to my presentation. Additionally, I am not sure if I am allowed to do this.</p>


          <h3 class="h4">Python Tutorials</h3>

          <p>An important aspect that I forgot to cover in my <a title="Introduction to Machine Learning" href="<?php echo $config['urls']['blog']; ?>/tags/final-project/machine-learning-introduction.php" target="_blank">previous blog post</a> was the programming language I am using for this project. It will come as no surprise that the language I chose is Python, one of the most popular languages for Machine Learning (Voskoglou, 2017). While there are alternatives, such as R or even MATLAB, I am an avid Python programmer and have been using the language for over 10 years. I have been watching Harrison Kinsley's (Sentdex) tutorials on Regression Learning and reading about other algorithms. I have not yet decided on an algorithm for the project.</p>


          <h3 class="h4">Conclusion and Upcoming Weeks</h3>

          <p>As documented in my risk register document, the prototype implementation is indeed delayed. This is due to other work commitments and the sheer volume of different topics I have had to learn and research over the past few weeks. I am watching a number of tutorials and doing as many exercises as I can to gather the knowledge necessary to start working on the prototype. As previously mentioned, I am not confident that this prototype will be ready on time for the presentation. However, I feel like I have enough material to cover at the presentation. Nonetheless, I will seek advice from my project supervisor and let him know about this delay. In the next few weeks I will continue with the Python ML tutorials and exercises, as well as work on the rest of my presentation.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="callout">
            <h3 class="h4">Bibliography</h3>

            <p>Voskoglou, C., 2017. What Is The Best Programming Language For Machine Learning?. [online] Medium. Available at: <a href="https://towardsdatascience.com/what-is-the-best-programming-language-for-machine-learning-a745c156d6b7">https://towardsdatascience.com/what-is-the-best-programming-language-for-machine-learning-a745c156d6b7</a> [Accessed 23 January 2020].</p>
          </div> <!-- .callout -->
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
