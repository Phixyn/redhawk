<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

		<div class="banner"> About </div>

		<!-- Main content -->
        <div class="container" id="main-content">
            <div class="row">
				<h1 style="text-align: center; padding: 4% 0;"><span style="color: #BBBBBB;">My name is</span> Alpeche <span style="color: #BBBBBB;">and I am a</span> student <span style="color: #BBBBBB;">at the </span>University of Essex.</h1>
                <div class="col-md-12">
                    <img src="<?php echo $config['paths']['images']['root']; ?>/me3.png" style="width: 226px; height: 218px; float: right; padding-left: 8%;" />
					<h1> What I do </h1>
					<p> I make videogames, websites and everything in between. Currently, I'm an undergraduate computer science student on my second year, at the University of Essex, England. As my third and final year approaches, I am looking to start building up my career and making my first steps into the real world. While that does sound a bit daunting, it is mostly exciting for me and it is the moment that I've been waiting for ever since I started high school. </p>
					<p style="text-align: center; font-style:italic;"> <a href="#">My work</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">Request CV</a> &nbsp;<span style="color: #A62139">//</span>&nbsp; <a href="#">Contact me</a> </p>
                </div>
            </div> <!-- /.row -->

			<div class="row">
				<h1> My projects </h1>
				<p> This site is designed to be responsive, with a fluid layout that adjusts to the user's screen. It is also mobile friendly! That is just an example of what I can achieve with 6 years of experience in web development. I am capable of developing solid, standards compliant frontends with XHTML, HTML5, CSS2/3 and JavaScript, with PHP backends that offer awesome features and functionality. In the past, I have worked with Wordpress and developed a custom theme in PHP for my Wordpress site. All of my projects are hosted in a VPS running a Linux OS. As such, and considering I use Linux regularly on my laptop, I am confortable with Unix like systems and have used several distributions. I am confortable with command-line interfaces and even know how to script in Bash! </p>

				<p> I am also a keen programmer with 6 years of experience in Python, backed by my ongoing "ZoeyBot" project and my Starphix game. During my first year at University, I started learning Java and achieved 100% grades on both of my Java assignments. This year I'm learning C++ and applying my Java skills in a game development project. My second year Application Programming module assignment involves developing my own version of the classic Tetris game. This project will be completed by December and there will be a potential dev blog while I work on it! </p>

				<p> You can find out more about my experience, skills and qualities by <a href="#">requesting a CV.</a> Alternatively, feel free to <a href="#">contact me!</a></p>
			</div> <!-- /.row -->
		</div> <!-- /.container /#main-content -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
