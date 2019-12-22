
    <!-- FOOTER -->
    <div class="grid-container full" id="footer">
      <div class="grid-x">
        <div class="cell">
          <p class="copyright-msg">&copy; <?php $fromYear = 2014; $thisYear = (int)date('Y'); echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');?> Alpeche Pancha. All rights reserved. <br />
          <?php echo $config['version'] ?></p>
        </div> <!-- .cell -->
      </div> <!-- .grid-x -->
    </div> <!-- .grid-container -->

    <script src="<?php echo $config['paths']['lib']; ?>/vendor/jquery.js"></script>
    <script src="<?php echo $config['paths']['lib']; ?>/vendor/what-input.js"></script>
    <script src="<?php echo $config['paths']['lib']; ?>/vendor/foundation.min.js"></script>
    <script src="<?php echo $config['paths']['lib']; ?>/app.js"></script>
  </body>
</html>
