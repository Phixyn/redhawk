<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Introduction to Machine Learning";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "December 27, 2019";
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
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/piqsels-banner-oznhq.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <h3 class="h4">Introduction</h3>

          <p>Before I dive into the development of my project in this blog, I want to take the time to write a brief overview of Machine Learning and some of its concepts. This blog post will cover what Machine Learning is, its uses and a brief overview of some of the common algorithms used in ML.</p>


          <h3 class="h4">What is Machine Learning?</h3>

          <p>Machine Learning (ML) is an area of Artificial Intelligence (AI) (Bhandari, 2018). ML focuses on the study of models used to teach computers how to perform tasks without giving them explicit instructions related to the task. Intelligent agents developed with ML algorithms can infer or recognize patterns from a given dataset and make predictions based on these patterns (An Introduction to Machine Learning | Machine Learning, 2017).</p>

          <p>In my previous blog posts, as well as my proposal, I explained that my motivation for this project is the development of believable AI. I have also mentioned the costs and difficulty to pre-program believable AI. For my research, I aim to take advantage of the power of ML algorithms to develop agents that make predictions about their environment and make the most believable decisions based on their predictions. Machine Learning algorithms may offer the answer to the age-old question of how to make computers perform tasks without being told how to perform them (Koza, Bennett, Andre and Keane, 1996).</p>

          <p>ML can be very useful for developing adaptive and flexible intelligent agents. With traditional AI, once you program the agent you cannot make any changes to it while it is in action. Code for these agents may also be difficult to maintain, especially if it tries to cover a large number of possible actions (Russell, 2018). On the other hand, ML agents can learn and adapt, reducing, or even eliminating, the rigidness imposed by the traditional AI algorithms (Carrier, 2018).</p>

          <p>It is important to note that my goal is to program agents that perform the most believable action, not the best action. For example, if an NPC predicts that they are about to get shot by someone who is behind them, it would be unrealistic for them to instantly dodge. Since the NPC can't see the attacker because they are facing the other direction, they can't take any action against being shot in the back. Such intricacies may be covered in future blog posts. For now, the focus is on ML and how it can be used to solve part of the problem of implementation of believable intelligent agents.</p>

          <h4 class="h5">Machine Learning Uses</h4>

          <p>One example of where ML is used is in stock market predictions and sentiment analysis. Harrison Kinsley, more commonly known as Sentdex, has a wide collection of ML videos on YouTube. One of his most popular series teaches how to use ML to predict share prices based on previous share price data (Kinsley, 2016). ML is also used in areas such as speech recognition and facial recognition (Carrier, 2018).</p>

          <p>While there aren't many documented uses of ML in video game development that I could find, ML has been used to teach computers how to play existing games. One example of this is MarI/O playing Super Mario World, developed by user SethBling on YouTube. This implementation can be found here: <a href="https://youtu.be/qv6UVOQ0F44">https://youtu.be/qv6UVOQ0F44</a></p>


          <h3 class="h4">Machine Learning Algorithms</h3>

          <p>There is a plethora of Machine Learning algorithms, each suitable for different sets of problems. ML algorithms can be divided into categories. In this blog post, I will cover the most common categories: Supervised Learning, Unsupervised Learning and Regression Learning.</p>

          <h4 class="h5">Supervised Learning</h4>

          <p>With supervised learning algorithms, agents use knowledge gained from previous data when processing new data. In other words, when given a dataset, the algorithm produces a function that is used to make its predictions. The algorithms derive this function by continuously mapping inputs to outputs on training data (Ivan, 2017). This function can be applied to a new dataset to make future predictions. This is also known as function approximation (Kirk, 2017) and can be better explained with an example.</p>

          <p>Earlier, I stated that ML can be used to predict share prices in the stock market. In this scenario, the inputs in the dataset (also known as training data or examples) could contain open and close prices for shares across a period of 6 months. In this case, the input is the open price and the output is the close price. A supervised learning algorithm would take the open price (input) and devise a function to come up with the close price (output). After it is done with an input-output pair, it moves on to the next row of data. This time, the algorithm will use what it learned when analysing the previous data, to try to make a more accurate prediction. In doing so, after going through the 6 months of data, the function should be able to predict a future close price for the stock with some degree of accuracy. Obviously, this is used as a mere example, and stock market analysis would be much more involved than this in the real world.</p>

          <p>Supervised learning can be further broken down into two types: Classification and Regression. The example given above is a form of regression learning. The algorithm processes data continuously to find a function that best fits the outputs as it goes through each input-output pair. At end, it creates a function that best fits the data it processed (Kinsley, 2016).</p>

          <p>On the other hand, classification algorithms work with classes (also known as categories or labels). The dataset given to classification algorithms contains outputs that are labelled. Classification algorithms are used to predict if the output for a given input has a given label or category. The best example of a classification problem is spam detection in email systems. In this problem, there are two categories: spam and non-spam. The dataset would be the emails themselves. A single input, in this case an email, could be classified as spam or as non-spam. While regression algorithms derive a function to predict outputs, classification algorithms use classifiers to make their predictions (Asiri, 2018).</p>

          <h4 class="h5">Unsupervised Learning</h4>

          <p>Supervised learning algorithms use datasets that have inputs and outputs. That is to say, the datasets used contain the solutions to the problem that is being solved and the algorithm simply devises a function that can find future solutions. On the other hand, unsupervised learning algorithms do not have access to the solutions. Datasets used in unsupervised learning only contain the inputs, not the outputs.</p>

          <p>With unsupervised learning, agents infer functions that describe the data. This is used to explore data and discover patterns in data (Ivan, 2017). One example of unsupervised learning is cluster analysis, wherein similar data is grouped together into clusters.</p>

          <h4 class="h5">Reinforcement Learning</h4>

          <p>Finally, we have reinforcement learning algorithms. These algorithms are completely different to the ones discussed above (Bhatt, 2018). In reinforcement learning, agents perform actions on an environment and receive a reward for it. The reward can be positive or negative. The higher the total reward, the closer the agent is perceived to be to a solution. The state of the environment is also fed back to the agent after it performs the action.</p>

          <p>As an example, let's take a simple 2D platformer game as the environment. In its initial state, the agent may find itself behind a platform that they need to jump onto. The agent can explore the environment by taking several different actions: move left, right, jump forward, jump backward or jump in place. All of these actions have a reward associated with it. If we think about the problem the agent needs to solve, jumping onto a platform, then jumping forward would have the highest reward. The goal for the agent is to learn what the most rewarding action is by exploring the environment. Eventually the agent will find the most rewarding action for a given state. This process then repeats for more states throughout the environment. In our example these states could be jumping onto more platforms, avoiding enemies, and any other mechanic of platformer games.</p>


          <h3 class="h4">Conclusion</h3>

          <p>In this blog post, I summarised some of the common Machine Learning approaches and algorithms that could be used in game development. The main differences in the algorithms available to us are the approach used to find a solution for a problem and the data or environment used.</p>

          <p>While this blog post is by no means a comprehensive guide or a research paper about ML, it serves the purpose of summarizing what I have learned so far. This is helpful for me, as writing down what I learn in my own words helps me understand and process the topics that I am researching. One of the uses for this blog is to keep a journal of what I learn, as this is a research-heavy final project. I will undoubtedly learn more as I progress with the project, and there is still much to cover. As such, I might only be scratching the surface of ML here. Nonetheless, I will try to fill in the gaps as much as I can in future blog posts and write more about my findings while I work on this project.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="callout">
            <h3 class="h4">Bibliography</h3>

            <p>Asiri, S., 2018. Machine Learning Classifiers. [online] Medium. Available at: <a href="https://towardsdatascience.com/machine-learning-classifiers-a5cc4e1b0623">https://towardsdatascience.com/machine-learning-classifiers-a5cc4e1b0623</a> [Accessed 14 December 2019].</p>

            <p>Bhandari, S., 2018. Difference Between Machine Learning, Deep Learning, And Artificial Intelligence. [online] Medium. Available at: <a href="https://medium.com/@UdacityINDIA/difference-between-machine-learning-deep-learning-and-artificial-intelligence-d005ae5f23c">https://medium.com/@UdacityINDIA/difference-between-machine-learning-deep-learning-and-artificial-intelligence-d005ae5f23c</a> [Accessed 12 December 2019].</p>

            <p>Bhatt, S., 2018. 5 Things You Need To Know About Reinforcement Learning - Kdnuggets. [online] KDnuggets. Available at: <a href="https://www.kdnuggets.com/2018/03/5-things-reinforcement-learning.html">https://www.kdnuggets.com/2018/03/5-things-reinforcement-learning.html</a> [Accessed 14 December 2019].</p>

            <p>Carrier, L., 2018. Machine Learning For Beginners. CreateSpace Independent Publishing Platform, pp.4-7.</p>

            <p>Ivan, R., 2017. Cognizant Softvision - What Is Machine Learning?. [online] Cognizant Softvision. Available at: <a href="https://www.cognizantsoftvision.com/blog/what-is-machine-learning/">https://www.cognizantsoftvision.com/blog/what-is-machine-learning/</a> [Accessed 14 December 2019].</p>

            <p>Kinsley, H., 2016. Python Programming Tutorials. [online] Pythonprogramming.net. Available at: <a href="https://pythonprogramming.net/regression-introduction-machine-learning-tutorial/">https://pythonprogramming.net/regression-introduction-machine-learning-tutorial/</a> [Accessed 12 December 2019].</p>

            <p>Kirk, M., 2017. Thoughtful Machine Learning With Python. 1st ed. p.15.</p>

            <p>Koza, J., Bennett, F., Andre, D. and Keane, M., 1996. Automated Design of Both the Topology and Sizing of Analog Electrical Circuits Using Genetic Programming. Artificial Intelligence in Design '96, p.153.</p>

            <p>Russell, R., 2018. Machine Learning: Step-By-Step Guide To Implement Machine Learning Algorithms With Python. Columbia, SC, p.9.</p>

            <p>Wp.wwu.edu. 2017. An Introduction To Machine Learning | Machine Learning. [online] Available at: <a href="https://wp.wwu.edu/machinelearning/2017/01/11/an-introduction-to-machine-learning/">https://wp.wwu.edu/machinelearning/2017/01/11/an-introduction-to-machine-learning/</a> [Accessed 12 December 2019].</p>
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
