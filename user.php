<!-- Begin Content -->
  <div id="content">
	<!-- Begin Block -->
	<div class="block roll">
	<?php $user->userTemplateInfo(0,'
		<h2><a href="#">Usuario #LOGIN#</a> '.$inbox->profile_link('#ID#').'</h2>
		<div class="tresc">
				<table>
					<tr>
						<td width="100%">
						<ul style="list-style-type: none;">
							<li><b style="font-size: 18px;">#LOGIN#</b></li>
							<li>(#STATUS#)</li>
							<li><b>Total de Carteles Publicados:</b> #OBJECTS#</li>
							<li><b>Fecha de Registro:</b> #REG_DATE#</li>
							<li><b>Ultima Vez que Ingreso:</b> #LAST_DATE#</li>
						</ul>
						</td>
						<td align="right" valign="middle">#AVATAR#</td>
					</tr>
				</table>
				#MOD_TOOLS#
		</div>',$_GET['id']); ?>
	</div>
	<!-- End Block -->
	<!-- Begin Block -->
	<div class="block roll">
		<h1><a href="#">Carteles que ha Compartido</a></h1>
		<div class="tresc">
			<?php echo $img->getProfileObjects('<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'"><img src="#IMG#" title="#TITLE#" style="float:left; width:120px; height:100px; margin:1px;" /></a>',$_GET['id']); ?>
			<br style="clear:both;" />
		</div>
	</div>
	<!-- End Block -->
	  
  </div>
  <!-- End Content -->