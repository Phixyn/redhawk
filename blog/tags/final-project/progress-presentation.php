<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Progress Presentation";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "February 18, 2020";
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
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/piqsels-banner-zvtoz.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          
          <p class="lead">This week I gave a progress presentation to my project supervisor and two other lecturers who were not familiar with my project. The purpose of the presentation was to talk about my project, the reasoning behind it, and the progress made so far.</p>

          <h3 class="h4">Meeting with Adam</h3>
          <p>Before the presentation, I arranged a meeting with my project supervisor, Adam. The meeting took place on Friday. We discussed my progress on the project so far and I raised the issue of not having the prototype implementation done. Adam stated that it would be good to try to get some form of demo for the presentation, as the panel members could raise the lack of practical work. We also discussed the contents of my presentation and the number of slides I had. I was concerned about the amount of content, and Adam validated my concerns. He also agreed that I did not need to go into depth about Machine Learning.</p>

          <p>Before our meeting, I wrote a list of what I had planned to present. During the meeting I updated the list as we discussed some of the topics that could be cut and other topics that could be expanded on. The full list is documented in the meeting minutes, which can be found here: <a title="Meeting Minutes" href="https://docs.google.com/document/d/1XceUpLad9UGDlYMj0GNDA89J4cgOa2ulgz1ukxAwb7w/edit?usp=sharing" target="_blank">https://docs.google.com/document/d/1XceUpLad9UGDlYMj0GNDA89J4cgOa2ulgz1ukxAwb7w/edit?usp=sharing</a></p>


          <h3 class="h4">Presentation</h3>
          <p>My presentation started with a brief overview of what my project was: a research into ML to determine its suitability in video game AI development. I talked about the rationale and motivation behind the project and then covered its goals. This led nicely into the project plan and risk management slides. Lastly, I talked about the progress thus far, the research made and some of the Regression Learning tutorials watched. I did mention the delayed prototype risk, as I was not able to have a prototype demo ready in time for the presentation. I have also made changes to the project plan to take more serious action against this risk. I concluded the presentation by talking about the next steps for the project and taking on questions from the panel.</p>

          <p>A video recording of my presentation can be seen below. The slides can be found here: <a title="Presentation Slides" href="https://drive.google.com/file/d/178Ifn8EyrtTMWUsS4vOz-JAjCrLIhrU4/view?usp=sharing" target="_blank">https://drive.google.com/file/d/178Ifn8EyrtTMWUsS4vOz-JAjCrLIhrU4/view?usp=sharing</a></p>
        </div> <!-- .cell -->  
        
        <div class="cell medium-8 large-8 medium-offset-2 large-offset-2">
          <div class="responsive-embed widescreen">
            <iframe src="https://www.youtube.com/embed/RfjOtGu6FEY" frameborder="0" allowfullscreen></iframe>
          </div> <!-- .responsive-embed .widescreen -->
        </div> <!-- .cell -->

        <div class="cell">

          <h3 class="h4">Project Plan Updates</h3>

          <p>As previously mentioned, to act on the risk imposed by delayed prototype, I have made changes to the project plan. Stage 3 has been slimmed down and tasks relating to the preparation of the demo for the presentation have been removed. Tasks pertaining to the development of the prototype were slightly modified. For example, there was a task to address presentation feedback of the prototype, but this task was no longer relevant and thus removed. Finally, some tasks had to be removed, as I feel like I will no longer have time to complete them and they were over-scoping the project. The target dates for tasks were also changed to mitigate the impact caused by delays. The current version of the project plan can be seen here: <a title="Gantt Chart" href="https://docs.google.com/spreadsheets/d/1IMTAwnzePDqbKMuIXW1SzfDuX50VkucCHUsX9uG1FFA/edit?usp=sharing" target="_blank">https://docs.google.com/spreadsheets/d/1IMTAwnzePDqbKMuIXW1SzfDuX50VkucCHUsX9uG1FFA/edit?usp=sharing</a></p>

          <p>Note that because I am constantly updating this document, so it might quickly change. For reference, here’s a screenshot of all the stages after this week’s re-planning:</p>
        </div> <!-- .cell -->

        <div class="cell">
          <figure style="text-align:center;">
            <a href="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/gantt-chart-v3-presentation-update.jpg" title="Click for full screen" target="_blank"><img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/gantt-chart-v3-presentation-update.jpg" alt="Gantt Chart" /></a>
            <figcaption><em>Click image to open fullscreen in new tab</em></figcaption>
          </figure>
        </div> <!-- .cell -->

        <div class="cell">
          <p>Note that on the presentation video, the slides contained the wrong version of the screenshot above, and thus was wrong. This has been rectified after the presentation on the slides I linked above. However, it was wrong during the presentation. The screenshot above is, as of today, the most up-to-date project plan. As we can see from the screenshot, the prototype implementation has started this week and will be my focus for the rest of the project.</p>
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
