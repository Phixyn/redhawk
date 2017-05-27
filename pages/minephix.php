<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/redhawk/phix.php");
    require_once($config["paths"]["includes"]["templates"] . "/header.php");
?>

<div id="body-wrapper">

	<div id="main-content-wrapper">
	
	<div id="main-content">
				
		<h1> Minephix </h1>
		<h2> Links </h2>


		<h2> General: </h2>
		<ul>
			<li><a href="http://docs.python-guide.org/en/latest/writing/structure/"> structuring your python project - docs.python-guide.org </a></li>
			<li><a href="http://www.nerdparadise.com/tech/python/pygame/tipsandtricks/"> NerdParadise - pygame tricks and tips </a></li>
		</ul>
		
		<h2> Tutorials: </h2>
		<ul>
			<li><a href="http://www.pygame.org/docs/tut/SpriteIntro.html"> Pygame.org - Sprite Intro </a></li>
			<li><a href="http://www.pygame.org/docs/tut/newbieguide.html"> Pygame.org - Newbie Guide (good tips) </a></li>
			<li><a href="http://www.pygame.org/docs/tut/tom/MakeGames.html"> Pygame.org - Making Games </a></li>
			<li><a href="http://muagames.com/tutorials/"> MUA Games Tutorials (includes Pong and Breakout tutorials) </a></li>
			<li><a href="http://inventwithpython.com/blog/2010/09/01/the-top-10-pygame-tutorials/"> Invent With Python - Top 10 Pygame Tutorials </a></li>
			<li><a href="http://lorenzod8n.wordpress.com/category/pygame-tutorial/"> "Keeping it Small and Simple" - Pygame Tutorials </a></li>
			<li><a href="http://eli.thegreenplace.net/2008/12/13/writing-a-game-in-python-with-pygame-part-i/"> Eli Bendersky's website - Pygame Tutorial </a></li>
		</ul>
		
		<h2> Main loop stuffs: </h2>
		<ul>
			<li><a href="http://entitycrisis.blogspot.co.uk/2007/07/general-pygame-main-loop.html"> Pygame main loop info and "step size" info </a></li>
			<li><a href="http://qq.readthedocs.org/en/latest/main_loop.html"> More main loop tips (damn, this looks really good o.O) </a></li>
		</ul>
		
		<h2> Game menus stuffs: </h2>
		<ul>
			<li><a href="http://scripters-corner.net/2013/04/11/creating-a-menu-in-pygame/"> Creating a menu in Pygame </a></li>
			<li><a href="http://nebelprog.wordpress.com/2013/08/14/create-a-simple-game-menu-with-pygame-pt-1-writing-the-menu-options-to-the-screen/"> Creating a simple menu with Pygame pt. 1 </a></li>
		</ul>
		
	</div>	<!-- #main-content -->
	
	</div>	<!-- #main-content-wrapper -->
	
	<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
</div>	<!-- #body-wrapper -->

<?php require_once($config["paths"]["includes"]["templates"] . "/footer.php"); ?>
