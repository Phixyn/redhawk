<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/phix.php");
	$config['page_title'] = "About Me - Alpeche Pancha - Phixyn";
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> About </div>

		<!-- Main content -->
        <div class="container" id="main-content">
			<h1 class="main-content-main-title"><span style="color: #BBBBBB;">My name is</span> Alpeche <span style="color: #BBBBBB;">and I am a</span> Test Engineer <span style="color: #BBBBBB;">at</span> Adastral Park.</h1>
            <div class="row" id="content-intro">
                <div class="col-sm-6 col-md-10">
					<h1> What I do </h1>

					<p> I am a Software Test Engineer for a small software development company based at <a href="http://atadastral.co.uk/about/" title="Adastral Park">Adastral Park</a>, Suffolk. I am studying part-time for my <a href ="https://www.uos.ac.uk/courses/ug/bsc-hons-computer-games-programming" title="Computer Games Programming at UOS">BSc Computer Games Programming</a> degree at the University of Suffolk. During my little spare time, I like to work on my game development projects, as well as this website. My other interests in computing include operating systems, networking and artificial intelligence. </p>

					<p> Some of the hobbies I enjoy are gaming, playing bass guitar, going to concerts and travelling. One day, I want to move to Canada.<br />
					If you wish, you can drop a follow on my <a href="https://www.twitter.com/Phixyn" title="Twitter - Alpeche Pancha (@Phixyn)">Twitter.</a></p>

					<p style="text-align: center; font-style:italic;"> <a href="#">My work</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">Request CV</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">Contact me</a> </p>
                </div>

                <div class="col-sm-6 col-md-2">
                    <img src="<?php echo $config['paths']['images']['root']; ?>/me3.png" style="max-width: 226px; max-height: 218px;" />
                </div>
            </div> <!-- /.row /#content-intro -->

			<div class="row">
				<h1> My projects </h1>

				<p> Project "Redhawk" is this website. In 2014, I released its first version, but didn't continue maintaining it regularly due to other workload. In 2017, I finally picked up the project again and decided to rewrite it. The previous version had a template based engine written in JavaScript, and some CSS to deal with different sized screens. This new version has a template based engine written in PHP, based on Wordpress but much more lightweight, and uses the Bootstrap framework for its layout and responsiveness across multiple devices. </p>

				<p> I am also working on a C++ game engine built using SFML. I've submitted a first version of this engine for an University assignment and was graded a first. Currently, a lot more work is required to make it good! The repository can be <a href="https://github.com/Phixyn/PhinyxEngine" title="PhinyxEngine - Phixyn's Github">found here.</a> </p>

				<p> You can find out more about my experience, skills and qualities by <a href="#">requesting a CV.</a> Alternatively, feel free to <a href="#">contact me!</a></p>
			</div> <!-- /.row -->
		</div> <!-- /.container /#main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
