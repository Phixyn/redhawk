<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Decision Trees";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "February 21, 2020";
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
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/pixabay-banner-3723725.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <h3 class="h4">Introduction</h3>

          <p>Last year I wrote a blog post discussing different ML approaches and algorithms. One of the algorithm categories I covered was Supervised Learning. At the time that I wrote that blog post, I only knew of Supervised Learning algorithms that could either use classification or regression. Since then, I discovered that there are Supervised Learning algorithms that use both. One example of this is CART (Classification and Regression Trees), or simply: Decision Trees (Gupta, 2017).</p>


          <h3 class="h4">Reasoning</h3>

          <p>Before we move on to how Decision Trees work, I want to discuss some of the reasoning behind using this algorithm for my prototype. In my ML introduction blog post, I discussed Reinforcement Learning algorithms, and gave the example of an agent playing a 2D Platformer Game. At the time of writing that post, I was convinced that Reinforcement Learning was the right choice for my project, especially after coming up with my example use case. However, as I did more research, I also realised that Decision Trees could be suitable for an NPC in a video game.</p>

          <p>One could argue that Decision Trees better model the thought process of a real human being, particularly adults. Reinforcement Learning algorithms are about exploring the environment until the highest reward action set is found. On the other hand, Decision Tree algorithms are about asking questions until the best decision is made. Both can be used to mimic the human brain, and I did not spend time researching into psychology and human thinking. Thus, this is purely a personal option. Since I had to make a decision for this project, I ultimately decided to adopt Decision Trees, as I prefer the question approach more than the exploration approach. This is not to say that one is more suitable than the other in video game development – to reach such conclusion I believe that a substantial amount of research would have to be made in the real world, which is outside of the scope of this project.</p>


          <h3 class="h4">Training Data</h3>

          <p>Before we build our tree, we need training data (also known as a dataset or examples). Each row in our training data has: one or more features (also known as attributes) and a label. The features are our inputs and the label describe the input. See an example of training data below:</p>

        </div> <!-- .cell -->

        <div class="cell">
          <figure style="text-align:center;">
            <a href="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/dt_data_example.png" title="Decision Tree Training Data Example" target="_blank"><img class="thumbnail" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/dt_data_example.png" alt="Decision Tree Training Data Example" /></a>
            <figcaption><em>(Poojari, 2019)</em></figcaption>
          </figure>
        </div> <!-- .cell -->

        <div class="cell">
          <p>In this example, "species" is the label and all the other columns are attributes.</p>

          <h3 class="h4">Building a Tree</h3>

          <p>Decision Trees are built from top to bottom. The top node is the root node and it begins by taking our full training data. Next, a process called splitting (or partitioning) takes place. We take each row and ask a true/false question about one of the features in this row. We then create one node for the false portion and another node for the true portion, known as splitting.</p>

          <p>Each attribute, and indeed each row of data, can answer many questions. We need a way to quantify how much a question helps to reach a solution. While we are splitting data, we are trying to unmix labels. Ideally, we want our algorithm to derive one and only one label (What is a Decision Tree in Machine Learning? | Hacker Noon, 2018), preferably with a high percentage of certainty. Hence, the process of splitting is used to unmix labels and separate them. A node that has one label is known as a pure node. On the other hand, a node that ends up with mixed labels is known as an impure node. We need to ask the right questions to effectively get pure nodes and unmixed labels.</p>

          <p>In other words, mixed labels lead to uncertainty, as it is hard to predict the correct label. To quantify the amount of uncertainty in a node, a metric called Gini Impurity exists. We can also quantify the amount of uncertainty that a question reduces using something called Information Gain.</p>

          <p>In short:</p>
          <ul>
            <li>Gini Impurity measures the amount of uncertainty in a node</li>
            <li>Information Gain is used to determine how much uncertainty a question reduces</li>
          </ul>

          <p>While building our tree, we'll make use of both on each new node. Once there are no more questions to ask on a node, we add a leaf node to the tree, and traverse back up to the partition where we left off, to continue processing it. Because of this, it can be very useful, to use regression to implement Decision Trees. However, we must be careful of overfitting: some problems can be so complex that the depth of the regression becomes too unbearable for a system, or inefficient to use (Gupta, 2017).</p>

          <p>These are the basic concepts of Decision Trees. Like with most ML topics, there is a lot to learn and cover, and I would not be able to cover everything in this project. However, as this topic does interest me, I would like to learn more about it after I submit this project. In the next blog post, I will cover the implementation of a Decision Tree using Python.</p>

          <p></p>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="callout">
            <h3 class="h4">Bibliography</h3>

            <p>Gupta, P., 2017. Decision Trees In Machine Learning. [online] Medium. Available at: <a href="https://towardsdatascience.com/decision-trees-in-machine-learning-641b9c4e8052">https://towardsdatascience.com/decision-trees-in-machine-learning-641b9c4e8052</a> [Accessed 21 February 2020].</p>

            <p>Hackernoon.com. 2018. What Is A Decision Tree In Machine Learning? | Hacker Noon. [online] Available at: <a href="https://hackernoon.com/what-is-a-decision-tree-in-machine-learning-15ce51dc445d">https://hackernoon.com/what-is-a-decision-tree-in-machine-learning-15ce51dc445d</a> [Accessed 20 February 2020].</p>

            <p>Poojari, D., 2019. Machine Learning Basics: Descision Tree From Scratch (Part II). [online] Medium. Available at: <a href="https://towardsdatascience.com/machine-learning-basics-descision-tree-from-scratch-part-ii-dee664d46831">https://towardsdatascience.com/machine-learning-basics-descision-tree-from-scratch-part-ii-dee664d46831</a> [Accessed 20 February 2020].</p>
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
