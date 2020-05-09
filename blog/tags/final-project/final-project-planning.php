<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Project Planning and Risk Management";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "November 29, 2019";
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
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/piqsels-banner-zkfff.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <h3 class="h4">Introduction</h3>

          <p>Last week, I wrote a blog post introducing my final year project. I concluded the post by talking about the next steps and my project plan. Since I am still working on the first Machine Learning blog post, this week I will give an update on my project plan and how I've broken it down into stages.</p>


          <h3 class="h4">Gantt Chart</h3>
          
          <p>To plan my project, I have broken down the project into stages and smaller tasks. I have documented these in a Gantt chart, which can be seen in the screenshot below. The screenshot doesn't include the full timeline, so to view the full Gantt chart, follow <a title="Gantt Chart on Google Spreadsheets" href="https://docs.google.com/spreadsheets/d/1IMTAwnzePDqbKMuIXW1SzfDuX50VkucCHUsX9uG1FFA/edit?usp=sharing">this link.</a></p>
        </div> <!-- .cell -->

        <div class="cell">
          <figure style="text-align:center;">
            <a href="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/gantt-chart-v1.jpg" title="Click for full screen" target="_blank"><img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/gantt-chart-v1.jpg" alt="Gantt Chart" /></a>
            <figcaption><em>Click image to open fullscreen in new tab</em></figcaption>
          </figure>
        </div> <!-- .cell -->

        <div class="cell">
          <p>Note that the plan in the link above may not match the screenshot, as it is constantly evolving and adapting as the project progresses.</p>


          <h3 class="h4">Project Stages</h3>

          <p>I have planned out seven stages for my project and broken them down into tasks as seen in the Gantt Chart. These stages are:</p>
          <ol>
            <li>Project planning and initial research</li>
            <li>Machine Learning research</li>
            <li>Basic demo implementation</li>
            <li>Seminar presentation (exact date to be confirmed)</li>
            <li>Prototype expansion and improvements</li>
            <li>Meet acceptance criteria for believable ambient AI</li>
            <li>Refining, polish and documentation</li>
          </ol>

          <h4 class="h5">Research Stages</h4>

          <p>The project is currently at the second stage. Stages 1 through 4 focus majorly on research for the project. At the end of these stages, I aim to have a very simple prototype to demo at the progress presentation in February with my supervisors. The first iteration of the Gantt Chart, seen above, planned the first Machine Learning research blog post to be published earlier. Unfortunately, I was not able to meet this goal due to other work commitments and projects. Therefore, I have adjusted and re-planned stages 1 and 2 to reflect this.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <figure style="text-align:center;">
            <a href="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/gantt-chart-v2.jpg" title="Click for full screen" target="_blank"><img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/gantt-chart-v2.jpg" alt="Gantt Chart" /></a>
            <figcaption><em>Click image to open fullscreen in new tab</em></figcaption>
          </figure>
        </div> <!-- .cell -->

        <div class="cell">
          <p>The updated Gantt Chart at the time of writing can be seen in the screenshot above. A full and scrollable version is accessible from the <a title="Gantt Chart at Google Spreadsheets" href="https://docs.google.com/spreadsheets/d/1IMTAwnzePDqbKMuIXW1SzfDuX50VkucCHUsX9uG1FFA/edit?usp=sharing">aforementioned link.</a> Based on this, I have identified a risk to the project presentation - it might suffer due to the delays on the ML research. To mitigate this, I might need to cut back on the amount of work done on the initial prototype demo and instead spend more time researching material to discuss at the progress presentation.</p>

          <h4 class="h5">Implementation Stages</h4>

          <p>After the presentation in February, the next stages are to work on the prototype and iterate on it until the end of the project. This part of the project will involve taking the demo developed for the presentation and expanding on it. The fifth stage will also involve addressing feedback received during the presentation.</p>

          <p>For the basic prototype implementation, a suitable programming language for the prototype will be identified through research, and its choice will be justified on this blog. This also applies to any libraries or frameworks used to help with the development of the prototype.</p>

          <h4 class="h5">Final Stages</h4>

          <p>The last few weeks of the project shall be used for polishing the prototype and ensuring that the code is well documented. The final blog posts will serve to evaluate the suitability of ML in video games for creating ambient AI. At the end of the project, the prototype should meet the acceptance criteria for a believable ambient AI agent, which I discussed in the <a title="Final Project Introduction" href="<?php echo $config['urls']['blog']; ?>/tags/final-project/uos-final-project-introduction.php" target="_blank">previous blog post.</a></p>


          <h3 class="h4">Risk Register</h3>

          <p>In the previous section I mentioned one of the risks identified in the project. Due to a delay in publishing the ML research blog post, I may not have as much time to work on the demo before the presentation. I keep track of all the risks associated with the project, in a risk register document.</p>

          <p>The risk register is simple. For each risk identified, it has a description of the risk, the impact it has on the project, and the action taken to mitigate or eliminate the impact of the risk. It also has a risk level column, which allows me to prioritise risks and decide when to take action against risks.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <figure style="text-align:center;">
            <a href="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/risk-register-v1.jpg" title="Click for full screen" target="_blank"><img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/risk-register-v1.jpg" alt="Risk Register" /></a>
            <figcaption><em>Click image to open fullscreen in new tab</em></figcaption>
          </figure>
        </div> <!-- .cell -->

        <div class="cell">
          <p>The full document can be seen here: <a title="Final Project Risk Register" href="https://docs.google.com/spreadsheets/d/1t2SX-vhlha7Y3-EqD1HfHh-XL3XBTMHv8AG2l2nrbKk/edit?usp=sharing">https://docs.google.com/spreadsheets/d/1t2SX-vhlha7Y3-EqD1HfHh-XL3XBTMHv8AG2l2nrbKk/edit?usp=sharing</a></p>


          <h3 class="h4">Conclusion</h3>

          <p>In order to keep the project manageable and within timelines, I must define very clear goals and be careful not to over-scope. With the Gantt Chart and the Risk Register documents, I can ensure that I keep on track and focussed. As mentioned in the previous blog post, I am also using Trello to keep track of smaller and broken-down tasks. I will continue using Trello for this and for sprint planning. It is important to remind myself that the project's main goal is to come up with a prototype that satisfies 3 goals, and only these goals. It is intended to be a proof of concept to demonstrate what can be achieved with ML in game development.</p>

          <p>The next blog post will discuss the on-going Machine Learning research that I have been doing and what I have learned so far.</p>
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
