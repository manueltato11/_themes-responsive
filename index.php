  <!-- Begin Content -->
  <div class="content">
  <!-- Begin Block -->
  <div class="primary col-md-8 col-sm-12 col-xs-12">
	<div class="panel panel-primary">
	  <div class="panel-body">
	    <?php
		echo $img->getObjects('
		<div class="block">

		'.($page->load('object_title')?'<h2 class="titulo"><a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'">#TITLE#</a></h2>':'').'
			<!-- Begin Info -->
			<div class="info">
				<span><span class="glyphicon glyphicon-check"></span><strong> Descripción: </strong> #TITLE#, #SOURCE#</span><br>
				<span><span class="glyphicon glyphicon-picture"></span><strong> Carteles de: </strong> #CATEGORY# </span> | 
				<span><span class="glyphicon glyphicon-user"></span><strong> Autor(a): </strong> <a href="'.$rewrite->user("#OWNER-ID#", "#REWRITE-OWNER#").'" title="Ver Perfil de #OWNER#">#OWNER#</a></span> | 
				<span><span class="glyphicon glyphicon-time"></span><strong> Publicada el: </strong> #DATE#</span><br><br>
			</div>
			<!-- End Info -->
			<!-- Begin Object -->
			<div class="[video=yt]object img-responsive img-thumbnail center-block">
				<div class="podpis">
					<span class="lewa">
						<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'#comments" title="Ver Comentarios">Comentarios (<fb:comments-count href='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'></fb:comments-count>)</a>
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
			<!-- Begin Share -->
			<div class="share">
				<div class="addthis_toolbox addthis_default_style " 
					addthis:title="#TITLE#, #SOURCE# #CartelesCreativos #Desmotivaciones"
					addthis:url="'.$rewrite->img("#ID#", "#REWRITE-TITLE#").'"
					addthis:description="'.$page->load('description').'"
					addthis:screenshot="#SCREENSHOT#"> 
					<a class="addthis_button_facebook_like" fb:like:layout="box_count" fb:like:width="67"></a>
					<a class="addthis_button_tweet" tw:count="vertical"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
				  </div> 
			</div>
			<!-- End Share -->
			<div style="clear: both;"></div>
		</div>
		#MOD_TOOLS#',0,@$_GET['page'],$page->load('objects_per_page'));
		echo '<div class="pagination">'.$img->pagination(' <a href="?page=#" class="square previous">&laquo;</a> ',' <a href="?page=#" class="square number">#</a> ', ' <span class="square current">#</span> ', ' <a href="?page=#" class="square next">&raquo;</a> ',$page->load('objects_per_page'),0,@$_GET['page']).'</div>';
		?>
	  </div>
	</div>
  </div> <!-- END col-md-8-->
  <!-- End Block -->

  <div class="secondary col-md-4 col-sm-12 col-xs-12">
  	<div class="panel panel-primary">
	  <div class="panel-body">
		<div class="tagcloud">
			<ul>
				<?php
			   global $rewrite;
			   // nos conectamos con la base de datos
			   $conn = mysql_connect('localhost', 'root', '');
			   if (!$conn or !mysql_select_db('manuel11_carteles2013', $conn)) die('cannot connect to db');
			   // prepara las categorias para visualizarlas
			   $query = mysql_query("SELECT  * FROM  `tentego_img_cat` ORDER BY  `tentego_img_cat`.`name` ASC ");
			   while($cat = mysql_fetch_array($query)){
			    echo '<li><a href="'.$rewrite->categories($cat['id'],$rewrite->changeSigns($cat['name'])).'" title="Carteles y Desmotivaciones de '.$cat['name'].'" rel="tag"><span>'.$cat['name'].'</span></a></li>';
			   }
			   ?>
			</ul>
		</div>
	  </div>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-body">
		<?php echo $ads->load('<div style="position:fixed;right:10px;top:200px;">#AD[right]#</div>'); ?>
	  </div>
	</div>
  </div> <!-- END col-md-4-->
  </div> <!-- End Content class=row -->