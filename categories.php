  <!-- Begin Content -->
  <div id="content">
	<!-- Begin Block -->
	<?php
	echo $img->getObjects('
	<div class="block">
	'.($page->load('object_title')?'<h2><span><a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'">#TITLE#</a></span></h2>':'').'
		<!-- Begin Object -->
		<div class="[video=yt]object">
			<div class="podpis">
				<span class="lewa">

					<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'#comments" title="Ver Comentarios">Comentarios (<fb:comments-count href='.$rewrite->img("#ID#","#REWRITE-TITLE#").'></fb:comments-count>)</a>

					[FAV=<a href="#" title="Agregar a mis Favoritos" class="add_fav" onClick="fav(#ID#,this); return false">Añadir a Favoritos</a>|<a href="#" title="Eliminar de mis Favoritos" class="del_fav" onClick="fav(#ID#,this); return false;">Eliminar de Favoritos</a>]

				</span>

				<span class="prawa">

					<a href="#" title="Me Gusta" class="thumb_up" onClick="vote_up(#ID#); return false;">Me Gusta( #VOTEUP# )</a>

					<!-- #VOTE# -->

					<a href="#" title="No Me Gusta" class="thumb_down" onClick="vote_down(#ID#); return false;">No me Gusta ( #VOTEDOWN# )</a>

				</span>

			</div>
			[object url='.$rewrite->img("#ID#","#REWRITE-TITLE#").']

		</div>
		<!-- End Object -->
		<!-- Begin Info -->
		<div class="info">
			<span class="pasek red"><b>Carteles de:</b> #CATEGORY# </span>
			<span class="pasek green"><b>Descripción:</b> #TITLE#, #SOURCE#</span>
			<span class="pasek blue"><b>Autor(a):</b> <a href="'.$rewrite->user("#OWNER-ID#","#REWRITE-OWNER#").'" title="Ver Perfil de #OWNER#">#OWNER#</a></span>
			<span class="pasek brown"><b>Fecha:</b> #DATE#</span>
		</div>
		<!-- End Info -->
		<!-- Begin Share -->
		<div class="share">
			<script type="text/javascript">

			var addthis_config = {

				data_track_clickback: false,

				ui_click: true

			}
			</script>

			<div class="addthis_toolbox addthis_default_style " 

				addthis:title="#TITLE# - '.$page->load('title').'"

				addthis:url="'.$rewrite->img("#ID#", "#REWRITE-TITLE#").'"

				addthis:description="'.$page->load('description').'"

				addthis:screenshot="#SCREENSHOT#"> 

				<a class="addthis_button_facebook_like" fb:like:layout="box_count" fb:like:width="67"></a>

				<a class="addthis_button_tweet" tw:count="vertical"></a>

				<a class="addthis_button_google_plusone" g:plusone:size="tall"></a>

			  </div> 

			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>

		</div>

		<!-- End Share -->

		<div style="clear: both;"></div>

	</div>

	#MOD_TOOLS#',0,@$_GET['page'],$page->load('objects_per_page'), 1, @$_GET['id']);

	echo '<div class="pagination">'.$img->pagination(' <a href="'.$rewrite->categories(@$_GET['id'],@$_GET['title'],'#').'" class="square previous">&laquo;</a> ',' <a href="'.$rewrite->categories(@$_GET['id'],@$_GET['title'],'#').'" class="square number">#</a> ', ' <span class="square current">#</span> ', ' <a href="'.$rewrite->categories(@$_GET['id'],@$_GET['title'],'#').'" class="square next">&raquo;</a> ',$page->load('objects_per_page'),0,@$_GET['page'],1,@$_GET['id']).'</div>';

	?>

	<!-- End Block -->
	<!-- Begin Subtitulos con la scategorias -->
	<div class="subtitulos">
	<?php include 'catFooter.php'; ?>
	</div>
	<!-- End Subtitulos con la scategorias -->
  </div>

  <!-- End Content -->