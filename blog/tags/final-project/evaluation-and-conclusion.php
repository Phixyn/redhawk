<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Evaluation and Conclusion";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "May 7, 2020";
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
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/piqsels-banner-sqiva.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          
          <h3 class="h4">Self-Evaluation</h3>

          <p>This is a very glooming look at how and why this project has failed. It is important to note that I am not in any way blaming any other entity other than myself for the failure of the project. I make this clear by adding "key takeaways", small bits of advice for myself on what I should do better if I find myself in similar situations in the future.</p>

          <p>Over-scoping, Covid-19, project plan changes and a lack of motivation contributed to the project's failure. There is not single point of failure that can be isolated here, although Covid-19 was arguably the main cause. Before March, I was already feeling overwhelmed with the project and slowly losing motivation. My blog posts were getting slimmer and I simply could not find the motivation to write. The only enjoyable part of the project was writing code and putting knowledge into practice. As an individual, I learn more effectively by doing. The best way for me to learn is to jump straight into a project and figure things out as I need to.</p>

          <p>The key takeaway here is to try to negotiate more with my project supervisor. I should have let Adam know that I felt unhappy and unmotivated with the project and suggested potential solutions.</p>

          <h3 class="h4">Motivation</h3>

          <p>Machine Learning can be overwhelming, and every week I felt the obligation to learn something just to be able to write about it. Instead, I would have preferred a focus on practical work, rather than the blog. This way, I would have felt more motivated throughout the project. From a personal point of view, what I could have done better was to talk to my supervisor about my anxieties and lack of motivation. I did not do this because I found it hard to arrange meetings at suitable times as a part-time student with a full-time job. I also believed that I could mentally cope without any external help, and this is entirely my fault.</p>

          <p>The key takeaway here is to ask for help and keep in touch with lecturers, which is especially important when you're a part-time student disconnected from the rest of your classmates. The takeaway of the previous section is also relevant here.</p>


          <h3 class="h4">Project Scope and Planning</h3>

          <p>Machine Learning is vast. I knew this, but I thought I could cherry-pick certain areas useful for my project and ignore the others. Unfortunately, I ended up going down the rabbit hole and spent more time researching than I had planned for. This led to some initial project plan changes, in an attempt to salvage the project from its wreck. This also did not work. As Adam mentioned in our first meeting, the literature review and research should have all been done as part of the first assignment, the project proposal. I mistakenly started it after I had submitted the proposal, which caused me to be behind by a few weeks. I also had to re-submit the proposal, as I did not deem the first version to be satisfactory.</p>

          <p>The key takeaways here are to frontload research and literature review. This would have helped me ensure that the topic for the project was manageable. It would also have helped me plan better and manage expectations.</p>

          <h3 class="h4">Covid-19 and Work Commitments</h3>

          <p>The pandemic has affected everyone, and my case may not be unique. I suffered from anxiety and depression, compounded by upcoming deadlines and changes happening at my current workplace. I started a new job role on April, which was a stressful endeavour, and March was busy for the company as well. As a full-time employee and a part-time student, this took a heavy toll on my mental health.</p>

          <p>Would I have finished the prototype if the pandemic had not happened? Yes, most likely. Attending the Group Project sessions helped keep my morale up and was a rare chance to talk to some of my classmates in person. Travelling to and from work also helped me keep motivated.</p>

          <p>The key takeaway here is obvious: keep my supervisor informed and apply for extenuating circumstances if needed.</p>

          <p>Apart from starting a new job, I also had to keep up with my Group Project assignment during March and April. We still had tasks to complete up until early May. I prioritised group project over the final project, as I felt that it would be unfair to let my teammates down. Overall, I feel like I should improve my time management skills and try to balance my job better with my studies.</p>

          <h3 class="h4">Machine Learning in Game Development</h3>

          <p>Despite the lack of a completed prototype, I still believe that ML has a place in video game development. As I mentioned in my first Decision Trees blog post, I believe that both Reinforcement Learning algorithms and Decision Trees are strong contenders in AI development for games. Reinforcement Learning has already been used to create agents that learn how to play games (such as <a href="https://youtu.be/qv6UVOQ0F44" title="MarI/O Video" target="_blank">MarI/O</a>), so it is not entirely impossible that a future ML approach will be used for the development of game AI.</p>

          <p>I will continue to learn about ML, although I will not be writing much more about it. Instead, I aim to learn by doing practical work and explore other applications of ML. The Jupyter Notebook I submitted will continue to be used (in a separate copy on my local hard drive) and I will look for ways to improve Decision Tree implementations. I will also explore alternatives to recursion, which I have used in my unfinished prototype implementation.</p>

          <p>I hope that in the future, we can see companies using ML in video game development and make my dreams of believable AI a reality.</p>
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
