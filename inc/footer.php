	<div class="footer" id="footer-800px">
		<div class="copyright-msg">
			&copy;
			<?php 
				$fromYear = 2014;
				$thisYear = (int)date('Y'); 
				echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');
			?>
			Alpeche Pancha. All Rights Reserved.
		</div>
		<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
	</div>	<!-- .footer#footer-800px -->

	<div class="footer" id="footer-320px">
		<p> <a href="#">Full site</a> &nbsp;//&nbsp; <a href="#">Work</a> &nbsp;//&nbsp; <a href="#">About</a> &nbsp;//&nbsp; <a href="#">Contact</a> </p>
		<div class="copyright-msg">
			&copy;
			<?php 
				$fromYear = 2014;
				$thisYear = (int)date('Y'); 
				echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');
			?>
			Alpeche Pancha. All Rights Reserved.
		</div>
		<div class="parent-clear"></div>	<!-- make parent element automatically expand to child elements' heights -->
	</div>	<!-- .footer#footer-320px -->

</body>
</html>
