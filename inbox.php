<!-- Begin Content -->
  <div class="content">
	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title"><span class="fa fa-envelope-o"></span> <a href="<?php echo $rewrite->inbox; ?>"> Mensajes Privados <?php $inbox->pms_count('(#NEW#/#TOTAL#)',$user->userInfo('id')); ?></a> <?php $inbox->buttons(); ?></h3>
		  </div>
		  <div class="panel-body">
			<?php $inbox->pms($user->userInfo('id')); ?>
		  </div>
		</div>
	</div> <!--  END col-md-12 END Block -->
  </div>
  <!-- End Content -->