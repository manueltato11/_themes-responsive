<!-- Begin Content -->
  <div class="content">
	  <?php $user->uploadAvatar('avatar',$page->load('max_file_size')); $user->changePass(); ?>
	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
		  <div class="panel-body">
			ADS profile responsivo 728x90
		  </div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title"><span class="fa fa-user"></span> Editar Perfil</h3>
			</div>
			<div class="panel-body"> 
				<div class="perfil col-md-4 col-sm-4 col-xs-12">
					<?php $user->userTemplateInfo(0,'
						<div class="panel panel-primary">
							<div class="panel-heading">Avatar</div>
							<div class="panel-body">
								<a href="#" title="Haga Clic para Cambiar de Imagen" class="avatar">#AVATAR#</a>
							</div>
						</div>
				</div>
				<div class="perfil col-md-4 col-sm-4 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Información de Perfil</div>
							<div class="panel-body">
								<ul style="list-style-type: none;padding-left: initial;">
									<li><b style="font-size: 18px;">#LOGIN#</b> - (#STATUS#)</li>
									<li><b>Total de Carteles Compartidos:</b> #OBJECTS#</li>
									<li><b>Fecha de Registro:</b> #REG_DATE#</li>
									<li><b>Actividad Reciente:</b> #LAST_DATE#</li>
								</ul>
							</div>
						</div>
				</div>
				<div class="perfil col-md-4 col-sm-4 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">Cambiar Avatar</div>
							<div class="panel-body">
								<div class="select_avatar">
									'.$user->uploadAvatarForm($rewrite).'
								</div>
							</div>
						</div>
				</div>
						'); ?>
			</div>
		</div> <!-- END panel panel-primary-->
	</div> <!--  END col-md-12 END Block -->

	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title"><span class="fa fa-key"></span> Cambiar Contraseña</h3>
			</div>
		  <div class="panel-body">
			<?php $user->changePassForm($rewrite); ?>
		  </div>
		</div>
	</div> <!--  END col-md-12 END Block -->

	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
		  <div class="panel-heading">
			<h3 class="panel-title"><span class="fa fa-picture-o"></span> Carteles Compartidos</h3>
		  </div>
		  <div class="panel-body">
			<?php echo $img->getProfileObjects('<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'"><img src="#IMG#" title="#TITLE#" style="float:left; width:120px; height:100px; margin:1px;" /></a>', $user->userInfo('id')); ?>
			<br style="clear:both;" />
		  </div>
		</div>
	</div> <!--  END col-md-12 END Block -->
 </div> <!-- End Content class=row -->