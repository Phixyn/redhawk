<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Prototype Implementation";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "April 28, 2020";
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
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/piqsels-banner-oazvd.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">

          <p>Due to the Covid-19 pandemic and several work commitments, I have not been able to work on this project as much as I'd like to. This blog post explains my submission and contains some of the initial text written in early March. I still wanted to at least implement a very simple prototype to demonstrate what can be done with ML and explain how I would have built on this prototype if I had spent more time working on the project. A couple of paragraphs in this post were written between in early, before the pandemic. The implementation is not complete, but I wanted to submit what I had managed to do.</p>
          
          <p>Unfortunately, I did not have enough time to create my own training data for this prototype. My plan was to create a simple dataset that would represent a single, very simple scenario in an open world game. As the deadline is getting closer, I am not able to do this. However, after submission, I may attempt to create such dataset and run the algorithm against it. In this implementation, I used a sample training data from a previous tutorial I have followed on Decision Trees.</p>

          <hr />

          <p>So far, most of my project has been focused on research. Now it's time to take what I have learned and use it to implement a prototype. As mentioned in the first blog post, the prototype will be used to evaluate the suitability of ML for video game AI.</p>

          <p>As mentioned in a previous blog post, I have been using Python for ML. The prototype will also be written in Python, and the code will be written using a tool called Jupyter Notebook. Jupyter Notebook is a tool used to write and share code. A Jupyter Notebook document (.ipynb) can also store and display equations, data visualizations and markdown (Project Jupyter, 2020). This is a very useful tool for ML and prototyping.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <figure style="text-align:center;">
            <a href="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/jupyter-notebook-dt.jpg" title="Click for full screen" target="_blank"><img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/jupyter-notebook-dt.jpg" alt="Jupyter Notebook in action" /></a>
            <figcaption><em>Jupyter Notebook in action</em></figcaption>
          </figure>
        </div> <!-- .cell -->

        <div class="cell">
          <p>I have uploaded the incomplete Jupyter Notebook of prototype implementation to GitHub, and I will also attach it to my submission on Brightspace. Originally, I planned to explain the implementation process step-by-step in a series of additional blog posts. Unfortunately, I lost motivation as the events of Covid-19 unfolded and took over the world, my life and the lives of many.</p>

          <p>When I feel that I am at a better place mentally, I will pick up this Notebook again and complete the implementation. I also want to replace the tutorial's training data with my own data and experiment with different features and labels.</p>

          <p>In case there are issues with the submitted Jupyter Notebook on Brightspace, the GitHub link to the Notebook file is: <a href="https://github.com/Phixyn/uos-final-year-project/blob/master/final_project_dt.ipynb" target="_blank">https://github.com/Phixyn/uos-final-year-project/blob/master/final_project_dt.ipynb</a></p>

          <p>There are no differences between this file and the submitted file – any future work I do on this prototype shall be done in a separate copy of the file.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="callout">
            <h3 class="h4">Bibliography</h3>

            <p>Jupyter.org. 2020. Project Jupyter. [online] Available at: <a href="https://jupyter.org/" target="_blank">https://jupyter.org/</a> [Accessed 3 March 2020].</p>
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
