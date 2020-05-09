<?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
  $postTitle = "Final Project Introduction";
  $postTag = "UoS Final Project";
  $postTagLink = $config["urls"]["blog"] . "/tags/final-project/index.php";
  $postDate = "November 20, 2019";
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
            <img class="thumbnail" style="width:70%; height:70%;" src="<?php echo $config['paths']['static']; ?>/blog/image-uploads/uos-final-project/final-project-intro-banner.jpg" alt="Blog post header image" />
          </figure>
        </div> <!-- .cell .blog-post-image -->

        <div class="cell">
          <p>Welcome to the development blog for my final year project. I am a part-time student at the University of Suffolk studying Computer Games Programming. For my final year project, I am researching Machine Learning. Specifically, the aim of the project is to determine if Machine Learning (ML) techniques can be used in video game development to create believable ambient AI. This post will introduce the project and talk about its goals, rationale and planning of the project.</p>


          <h3 class="h4">Introduction</h3>

          <p>With advancements in technology and computing power, computer games have become increasingly realistic in terms of appearance. Modern titles such as Red Dead Redemption 2 (Rockstar Games, 2018) feature vast open worlds with photorealistic graphics. This may lead to a greater sense of immersion, though proof of this is not conclusive (Cheng and Cairns, 2005). While the graphical nature of games may contribute to immersion, many open world games are also filled with ambient Artificial Intelligence (AI) agents that serve the same purpose (Madigan, 2010). These can be non-player characters (NPCs) that roam the vast lands of the game's world, shop clerks, quest givers and more. Ambient AI is an equally important component of video games when it comes to creating a sense of immersion for the players (Plch et al. 2014).</p>


          <h3 class="h4">Main Goals and Project Scope</h3>

          <p>Machine Learning (ML) is a vast and growing field (Jordan and Mitchell, 2015) and there are different areas of ML that could be used in video games. The main goal of my research is to identify a suitable area of ML that can be used to develop believable ambient AI. As such, I will be comparing and contrasting different ML algorithms, models and techniques that could, in theory, be used to achieve this goal.</p>

          <p>Creating believable ambient AI that engages in meaningful interactions with those around them, as well as the player, can be challenging. My research aims to determine whether modern day ML algorithms and methodologies can help with the development of believable ambient AI and hopefully address some of the existing challenges in programming complex behaviour (Plch et al. 2014).</p>

          <h4 class="h5">Defining Believable</h4>

          <p>In the context of my research, believable AI means AI that is capable of engaging in meaningful and sensible interactions based on the world around them, other AI around them, world events and the player character. An intelligent agent should be aware of their surrounding environment by making observations, have a set of actions to choose from and be able to make decisions to choose the best action from its set of actions.</p>

          <p>At the end of the project I aim to identify whether there is a suitable way to use ML to implement believable AI, and develop a very simple prototype to demonstrate this in a very simple scenario. The intelligent agent in the prototype should meet the following goals:</p>
          <ul>
            <li>Be aware of the world changing around them by making observations</li>
            <li>Have a set of actions to choose from</li>
            <li>Choose the best action from its set of actions based on the world around it</li>
          </ul>

          <p>In order to measure the success of a chosen algorithm/methodology in achieving these goals, I will present a comparison of data across algorithms. Data visualization will be presented in order to display the success and suitability of the chosen algorithm/methodology in accomplishing these goals.</p>

          <h4 class="h5">Assessment Criteria and Deliverables</h4>
          
          <p>Machine learning is a vast (Wittek, 2014) and growing technical field (Holzinger, 2016). There is much to uncover and learn. As such, it is very important to narrow down exactly what I want my research to focus on and the deliverables I want to produce at the end to be graded on. As much as I'd enjoy spending time heavily researching ML, the project timescales don't allow for such scope. As a result, sadly this project might only scratch the surface of ML. However, further research could be done as part of a masters degree and/or a PhD study further down the line.</p>

          <p>As discussed in the previous section, one of my goals is to develop a simple prototype after identifying a suitable ML algorithm. This will be made available alongside the research detailed in these development blog posts. Hence, the deliverables produced alongside this blog will be the prototype (i.e. its code) and any data produced or used in supporting the suitability of ML to implement ambient AI. The code shall be well documented and version controlled using Git.</p>

          <p>I will also supply the data produced by running the prototype in order to evaluate its suitability and whether it meets its goals. The suitability and success of the prototype will be evaluated based on the aforementioned goals, in a blog post. Video demonstrations and training data might also be provided if deemed necessary, along with implementation details in these development blog posts.</p>

          <h4 class="h5">Project Limitations</h4>

          <p>My research is not targeted at any particular video game genre or game development engine. I will also not be exploring enemy/friendly AI, agents learning to play games like chess, or any similar concept. My research is not about any particular game genre or AI type, but rather how ambient AI in video games can be developed with the use of ML. While my research is not targeted at a particular video game genre, I do use open world games as an inspiration.</p>

          <p>Since I will only be developing a small prototype, I will not be working with, or for any particular game engine. I will also not be aiming to create a game that makes use of the prototype and its data. However, these are both good things to explore in the future. Future research could be done to expand upon the findings of this research.</p>


          <h3 class="h4">Rationale</h3>

          <p>In modern video games, ambient AI is already present and well developed. Many open world games such as Grand Theft Auto V (Rockstar Games, 2013), Red Dead Redemption 2 (Rockstar Games, 2018) and Watch Dogs (Ubisoft, 2014) feature ambient AI. However, pre-programmed AI can quickly become predictable. ML could provide ways to improve ambient AI, both in the development process and the end product. For example, an NPC that acts and makes decisions based on the world around it and events that occur, could lead to much more realism and immersion than a pre-programmed AI that makes the same decisions each time a predetermined scenario occurs.</p>

          <p>With Machine Learning, NPCs could learn from each other and from the world around them, breaking up the monotony of pre-programmed AI. This could also lead to more design opportunities, such as:</p>
          <ul>
            <li>Enhancing atmosphere and immersion, by creating meaningful interactions between NPCs and the world around them.</li>
            <li>Giving NPC actions that will have context from the world around them and events that happen.</li>
          </ul>

          <h4 class="h5">Existing Research and Challenges</h4>

          <p>This project's topic takes inspiration from previous work mentioned in my project proposal's references and reading list. Some of these resources have been referenced throughout this post, and more will surely be mentioned in future blog posts. Currently, Machine Learning is used to create intelligent agents that learn to play and win existing games. One example of this is the research into how techniques such as Reinforcement Learning can be used to create agents that learn to play and win games like chess (Emigh et al., 2016).</p>

          <p>However, the usage of ML in video game development is scarce, or even close to non-existent. This might be due to many factors. One article suggests that game developers may be wary of ML's limited use and what it could offer over traditional AI algorithms (Sarmah, 2019). This could also be due to performance concerns, as integrating ML into a game engine could be computationally expensive. Performance is already one of the biggest challenges in existing AI development (Minh Do, 2019), so it would come as no surprise that ML would pose an even bigger challenge.</p>

          <p>In fact, the developers of an ambient AI system for the S.T.A.L.K.E.R series have mentioned performance, and financial budget as two of their main issues when developing complex ambient AI (Plch et al. 2014). As such, it is reasonable to assume that the costs of research, design and implementation of ML in video games could be even higher, leading to the wariness towards ML.</p>


          <h3 class="h4">Conclusion</h3>

          <p>This is an exciting project to work on. ML is a growing field and there is much to learn and discover. During the next few weeks I will be conducting research to learn more about ML techniques and to deepen my understanding of ML. This research will be the topic of my next blog posts, where I'll write about my research and findings. Due to the complexity of this research topic, this may be split into multiple blog posts and take longer to write than this one.</p>

          <p>I will also be reviewing my project plan and creating a Gantt Chart to keep track of it. I have already created a Trello board for the project and a Git repository on Github. If any project planning updates do occur, I will aim to write a blog post about the updates made. While I aim to post weekly updates, the workload of my other modules and my full-time job may not always allow this. For now, I will focus on conducting research for the project and post an update next week.</p>
        </div> <!-- .cell -->

        <div class="cell">
          <div class="callout">
            <h3 class="h4">Bibliography</h3>

            <p>Cheng, K. and Cairns, P. (2005). Behaviour, realism and immersion in games. CHI '05 extended abstracts on Human factors in computing systems - CHI '05.</p>
            <p>Emigh, M., Kriminger, E., Brockmeier, A., Principe, J. and Pardalos, P. (2016). Reinforcement Learning in Video Games Using Nearest Neighbor Interpolation and Metric Learning. IEEE Transactions on Computational Intelligence and AI in Games, 8(1), pp.56-66.</p>
            <p>Holzinger, A., 2016. Interactive machine learning for health informatics: when do we need the human-in-the-loop?. Brain Informatics, 3(2), pp.119-131.</p>
            <p>Jordan, M. and Mitchell, T. (2015). Machine learning: Trends, perspectives, and prospects. Science, 349(6245), pp.255-260.</p>
            <p>Madigan, J. (2010). The Psychology of Immersion in Video Games. [online] The Psychology of Video Games. Available at: <a href="https://www.psychologyofgames.com/2010/07/the-psychology-of-immersion-in-video-games/">https://www.psychologyofgames.com/2010/07/the-psychology-of-immersion-in-video-games/</a> [Accessed 30 Nov. 2019].</p>
            <p>Minh Do, T., 2019. AI Gaming And The New "Wild West" Of AI Development. [online] Medium. Available at: <a href="https://becominghuman.ai/ai-gaming-and-the-new-wild-west-of-ai-development-93b003e8e14d">https://becominghuman.ai/ai-gaming-and-the-new-wild-west-of-ai-development-93b003e8e14d</a> [Accessed 30 November 2019].</p>
            <p>Plch, T.; Marko, M.; Ondracek, P.; Cerny, M.; Gemrot, J.;and Brom, C. 2014. An AI System for Large Open Virtual World. In Proceedings of Tenth Annual AAAI Conference on Artificial Intelligence and Interactive Digital Entertainment.</p>
            <p>Rockstar Games, 2013. Grand Theft Auto V. Available at: <a href="http://www.rockstargames.com/V/">http://www.rockstargames.com/V/</a> [Accessed 30 November 2019].</p>
            <p>Rockstar Games, 2018. Red Dead Redemption 2. Available at: <a href="https://www.rockstargames.com/reddeadredemption2/">https://www.rockstargames.com/reddeadredemption2/</a> [Accessed 30 November 2019].</p>
            <p>Sarmah, H., 2019. How Ubisoft Is Mainstreaming Machine Learning Into Game Development. [online] Analytics India Magazine. Available at: <a href="https://analyticsindiamag.com/how-ubisoft-is-mainstreaming-machine-learning-into-game-development/">https://analyticsindiamag.com/how-ubisoft-is-mainstreaming-machine-learning-into-game-development/</a> [Accessed 30 November 2019].</p>
            <p>Ubisoft, 2014. Watch Dogs. Available at: <a href="https://www.ubisoft.com/en-us/game/watch-dogs/">https://www.ubisoft.com/en-us/game/watch-dogs/</a> [Accessed 30 November 2019].</p>
            <p>Wittek, P., 2014. Machine Learning. Quantum Machine Learning, pp.11-24.</p>
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
