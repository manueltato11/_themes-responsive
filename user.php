<!-- Begin Content -->
  <div class="content">
	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
			<div class="panel-heading">			
			<?php $user->userTemplateInfo(0,'
				<h3 class="panel-title"><span class="fa fa-user"></span> <a href="#">Perfil de #LOGIN#</a> '.$inbox->profile_link('#ID#').'</h3>
			</div>
		  	<div class="panel-body">
		  		<div class="primary col-md-4 col-sm-4 col-xs-12">
		  			<div class="panel panel-primary">
		  				<div class="panel-body">
							<span align="right" valign="middle">#AVATAR#</span>
						</div>
					</div>
		  		</div>
		  		<div class="primary col-md-4 col-sm-4 col-xs-12">
		  			<div class="panel panel-primary">
		  				<div class="panel-body">
					  		<ul style="list-style-type: none;padding-left: initial;">
								<li><b style="font-size: 18px;">#LOGIN#</b> - (#STATUS#)</li>
								<li><b>Total de Carteles Publicados:</b> #OBJECTS#</li>
								<li><b>Fecha de Registro:</b> #REG_DATE#</li>
								<li><b>Ultima Vez que Ingreso:</b> #LAST_DATE#</li>
							</ul>
						</div>
					</div>
		  		</div>
		  		<div class="primary col-md-4 col-sm-4 col-xs-12">
		  			<div class="panel panel-primary">
		  				<div class="panel-body text-center center-block">
					  		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- CratelesCreativos-Responsive -->
							<ins class="adsbygoogle"
							     style="display:block"
							     data-ad-client="ca-pub-0162406634460320"
							     data-ad-slot="4725435007"
							     data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					</div>
		  		</div>						
				#MOD_TOOLS#
			',$_GET['id']); ?>
			</div>
		</div>	
	</div> <!--  END col-md-12 END Block -->

	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="fa fa-picture-o"></span> Carteles Publicados</h3>
			</div>
			<div class="panel-body">
				<?php echo $img->getProfileObjects('<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'"><img src="#IMG#" title="#TITLE#" style="float:left; width:120px; height:100px; margin:1px;" /></a>',$_GET['id']); ?>
				<br style="clear:both;" />
			</div>
		</div>
	</div> <!--  END col-md-12 END Block -->
  </div><!-- End Content class=row -->