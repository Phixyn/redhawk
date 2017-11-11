        <!-- Footer -->
        <div class="jumbotron" id="footer">
            <div class="container-fluid">
                <div class="copyright-msg">
                    &copy; <?php $fromYear = 2014; $thisYear = (int)date('Y'); echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');?> Alpeche Pancha. All rights reserved.
                </div>
            </div>
        </div> <!-- /#footer -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo $config['paths']['lib']; ?>/bootstrap.min.js"></script>
    </body>
</html>