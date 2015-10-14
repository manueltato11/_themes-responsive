<!-- Begin Content -->
  <div id="content">
	  <?php $user->uploadAvatar('avatar',$page->load('max_file_size')); $user->changePass(); ?>
	<!-- Begin Block -->
	<div class="block roll">
		<h1><a href="#">Revisión de Cuentas</a></h1>
		<div class="tresc">
			<?php $user->userTemplateInfo(0,'<table>
					<tr>
						<td width="50%">
						<ul style="list-style-type: none;">
							<li><b style="font-size: 18px;">#LOGIN#</b></li>
							<li>(#STATUS#)</li>
							<li><b>Total de Carteles Compartidos:</b> #OBJECTS#</li>
							<li><b>Fecha de Registro:</b> #REG_DATE#</li>
							<li><b>Actividad Reciente:</b> #LAST_DATE#</li>
						</ul>
						</td>
						<td width="50%">
						<div class="select_avatar">
							'.$user->uploadAvatarForm($rewrite).'
						</div>
						</td>
						<td align="right" valign="middle">
						<a href="#" title="Haga Clic para Cambiar de Imagen" class="avatar">#AVATAR#</a>
						</td>
					</tr>
				</table>'); ?>
		</div>
	</div>
	<!-- End Block -->
	<!-- Begin Block -->
	<div class="block roll">
		<h1><a href="#">Cambio de Contraseña</a></h1>
		<div class="tresc">
			<?php $user->changePassForm($rewrite); ?>
		</div>
	</div>
	<!-- End Block -->
	<!-- Begin Block -->
	<div class="block roll">
		<h1><a href="#">Mis Carteles Compartidos</a></h1>
		<div class="tresc">
			<?php echo $img->getProfileObjects('<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'"><img src="#IMG#" title="#TITLE#" style="float:left; width:120px; height:100px; margin:1px;" /></a>', $user->userInfo('id')); ?>
			<br style="clear:both;" />
		</div>
	</div>
	<!-- End Block -->
	  
  </div>
  <!-- End Content -->