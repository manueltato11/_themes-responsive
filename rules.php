  <!-- Begin Content -->
  <div id="content">
	<!-- Begin Block -->
	 <div class="primary col-md-12 col-sm-12 col-xs-12">
	 	<div class="panel panel-primary">
		  <div class="panel-body text-center center-block">
			<?php echo $ads->load('<div class="text-center center-block">#AD[left]#</div>'); ?>
		  </div>
		</div>
		<div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title"><span class="fa fa-book"></span> Reglamento de la Comunidad</h3>
		</div>
		  <div class="panel-body">
				<?php
				echo $page->load('regulations');
			?>
		  </div>
		</div>
	</div> <!-- End Block -->
  </div> <!-- End Content -->