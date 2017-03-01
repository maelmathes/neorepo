<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


	<p class="footer">
		Página generada en: <strong>{elapsed_time}</strong> Segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>
	<footer>
		<p>&copy; 2016 Company, Inc.</p>
	</footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>js/jquery-3.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/jquery-3.1.1.min.js"><\/script>')</script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url(); ?>js/ie10-viewport-bug-workaround.js"></script>
</body>
