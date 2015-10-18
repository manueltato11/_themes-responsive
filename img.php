  <!-- Begin Content -->
  <div id="content" itemscope="" itemtype="http://schema.org/ImageObject">
	<!-- Begin Block -->
  <div class="primary col-md-8 col-sm-12 col-xs-12">
	<div class="panel panel-primary">
	  <div class="panel-body contentF">
		<?php 
		global $urlimg;
		echo $img->getObject('
		<div class="block">
		'.($page->load('object_title')?'<h2 class="titulo" itemprop="name"><span>#TITLE#</span></h2>':'').'
		<div class="info">
			<span><span class="fa fa-check-square-o"></span><strong> Descripción: </strong> #TITLE#, #SOURCE#</span><br>
			<span><span class="fa fa-picture-o"></span><strong> Carteles de: </strong> #CATEGORY# </span> | 
			<span><span class="fa fa-user"></span><strong> Autor(a): </strong> <a href="'.$rewrite->user("#OWNER-ID#", "#REWRITE-OWNER#").'" title="Ver Perfil de #OWNER#">#OWNER#</a></span> | 
			<span><span class="fa fa-clock-o"></span><strong> Publicada el: </strong> #DATE#</span> | 
			<span><span class="fa fa-comments"></span><strong> <a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'#comments" title="Ver comentarios">Comentarios (<fb:comments-count href='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'></fb:comments-count>)</a></strong></span><br><br>
		</div> <!-- End Info -->
		<!-- Begin Object -->
		<div class="[video=yt]object img-responsive img-thumbnail center-block">
			<div class="podpis" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
				<span class="lewa">
					[FAV=<a href="#" title="Agregar a mis Favoritos" onClick="fav(#ID#,this); return false"></a>|<a href="#" title="Eliminar de mis Favoritos" onClick="fav(#ID#,this); return false;"></a>]
				</span>
				<meta itemprop="ratingValue" content="4.8">
				<meta itemprop="ratingCount" content="14">
			</div>
			[object url=#]
		</div> <!-- End Object -->
		<!-- Votos y Redes sociales-->
		<div class="shared">
				<div class="addthis_toolbox addthis_default_style " 
					addthis:title="#TITLE#, #SOURCE# #CartelesCreativos #Desmotivaciones"
					addthis:url="'.$rewrite->img("#ID#", "#REWRITE-TITLE#").'"
					addthis:description="'.$page->load('description').'"
					addthis:screenshot="#SCREENSHOT#">

					<!-- Buttons social start -->
					<ul class="rrssb-buttons clearfix">
					  <li class="rrssb-me-gusta">
			          	<a href="#" title="Me gusta" class="thumb_up" onClick="vote_up(#ID#); return false;">
			            <span class="rrssb-icon">
			              <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M384 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5h-352q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5-59.5 109.5q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5h-129q-96 0-189.5-22.5t-216.5-65.5q-116-40-138-40h-288q-53 0-90.5-37.5t-37.5-90.5v-640q0-53 37.5-90.5t90.5-37.5h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5t30.5-126.5 62-108q39-37 90-37 84 0 151 32.5t102 101.5 35 186q0 93-48 192h176q104 0 180 76t76 179z" />
			                class="cls-2" fill-rule="evenodd" />
			              </svg>
			            </span>
			            <span class="rrssb-text">Me gusta <span class="badge">#VOTEUP#</span></span>
			          </a>
			        </li>
			        	<li class="rrssb-no-me-gusta">
			          	<a href="#" title="No me gusta" class="thumb_down" onClick="vote_down(#ID#); return false;">
			            <span class="rrssb-icon">
			              <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M384 448q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152 576q0-35-21.5-81t-53.5-47q15-17 25-47.5t10-55.5q0-69-53-119 18-32 18-69t-17.5-73.5-47.5-52.5q5-30 5-56 0-85-49-126t-136-41h-128q-131 0-342 73-5 2-29 10.5t-35.5 12.5-35 11.5-38 11-33 6.5-31.5 3h-32v640h32q16 0 35.5 9t40 27 38.5 35.5 40 44 34.5 42.5 31.5 41 23 30q55 68 77 91 41 43 59.5 109.5t30.5 125.5 38 85q96 0 128-47t32-145q0-59-48-160.5t-48-159.5h352q50 0 89-38.5t39-89.5zm128 1q0 103-76 179t-180 76h-176q48 99 48 192 0 118-35 186-35 69-102 101.5t-151 32.5q-51 0-90-37-34-33-54-82t-25.5-90.5-17.5-84.5-31-64q-48-50-107-127-101-131-137-155h-274q-53 0-90.5-37.5t-37.5-90.5v-640q0-53 37.5-90.5t90.5-37.5h288q22 0 138-40 128-44 223-66t200-22h112q140 0 226.5 79t85.5 216v5q60 77 60 178 0 22-3 43 38 67 38 144 0 36-9 69 49 74 49 163z"/>
			                class="cls-2" fill-rule="evenodd" />
			              </svg>
			            </span>
			            <span class="rrssb-text">No gusta <span class="badge">#VOTEDOWN#</span></span>
			          </a>
			        </li> 
					  <li class="rrssb-facebook">
			          	<a href="https://www.facebook.com/sharer/sharer.php?u='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'" class="popup" title="Compartir en Facebook">
			            <span class="rrssb-icon">
			              <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="29" height="29" viewBox="0 0 29 29">
			                <path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"
			                class="cls-2" fill-rule="evenodd" />
			              </svg>
			            </span>
			            <span class="rrssb-text">Compartir</span>
			          </a>
			        </li> 
					 <li class="rrssb-twitter">
			          <a href="https://twitter.com/intent/tweet?text=#TITLE#, #SOURCE# %20%23CartelesCreativos%20%23Desmotivaciones%20&tw_p=tweetbutton&url='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'%23.ViMD9PFHVNU.twitter" class="popup" title="Twittear a mis seguidores">
			            <span class="rrssb-icon">
			              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
			                <path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62c-3.122.162-6.22-.646-8.86-2.32 2.702.18 5.375-.648 7.507-2.32-2.072-.248-3.818-1.662-4.49-3.64.802.13 1.62.077 2.4-.154-2.482-.466-4.312-2.586-4.412-5.11.688.276 1.426.408 2.168.387-2.135-1.65-2.73-4.62-1.394-6.965C5.574 7.816 9.54 9.84 13.802 10.07c-.842-2.738.694-5.64 3.434-6.48 2.018-.624 4.212.043 5.546 1.682 1.186-.213 2.318-.662 3.33-1.317-.386 1.256-1.248 2.312-2.4 2.942 1.048-.106 2.07-.394 3.02-.85-.458 1.182-1.343 2.15-2.48 2.71z"
			                />
			              </svg>
			            </span>
			            <span class="rrssb-text">Twittear</span>
			          </a>
			        </li>
			        <li class="rrssb-googleplus">
			          <a href="https://plus.google.com/share?url='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'" class="popup" title="Compartir en Google+">
			            <span class="rrssb-icon">
			              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z" class="popup"/></svg>            </span>
			            <span class="rrssb-text">google+</span>
			          </a>
			        </li>
			        <li class="rrssb-pinterest">
			          <a href="http://pinterest.com/pin/create/button/?url='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'&amp;media=#SCREENSHOT#&amp;description=#TITLE#, #SOURCE#%20%23CartelesCreativos%20%23Desmotivaciones" class="popup" title="Compartir este pin en Pinterest">
			            <span class="rrssb-icon">
			              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
			                <path d="M14.02 1.57c-7.06 0-12.784 5.723-12.784 12.785S6.96 27.14 14.02 27.14c7.062 0 12.786-5.725 12.786-12.785 0-7.06-5.724-12.785-12.785-12.785zm1.24 17.085c-1.16-.09-1.648-.666-2.558-1.22-.5 2.627-1.113 5.146-2.925 6.46-.56-3.972.822-6.952 1.462-10.117-1.094-1.84.13-5.545 2.437-4.632 2.837 1.123-2.458 6.842 1.1 7.557 3.71.744 5.226-6.44 2.924-8.775-3.324-3.374-9.677-.077-8.896 4.754.19 1.178 1.408 1.538.49 3.168-2.13-.472-2.764-2.15-2.683-4.388.132-3.662 3.292-6.227 6.46-6.582 4.008-.448 7.772 1.474 8.29 5.24.58 4.254-1.815 8.864-6.1 8.532v.003z"
			                />
			              </svg>
			            </span>
			            <span class="rrssb-text">pinterest</span>
			          </a>
			        </li>
			        <li class="rrssb-favoritos">
			          <a href="#" title="Agregar/Eliminar de mis favoritos" onClick="fav(#ID#,this); return false">
			            <span class="rrssb-icon">
			              <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z" />
			                class="cls-2" fill-rule="evenodd" />
			              </svg>
			            </span>
			            <span class="rrssb-text"> Favoritos</span>
			          </a>
			        </li>
					</ul>
					<!-- END Buttons social -->
				</div>
				<br />
				<a href='.$urlimg.' download="#TITLE#-www.CartelesCreativos.com.png" title="Descargar el Cartel: #TITLE#" class="btn btn-primary btn-block"><span class="fa fa-download"></span> Descargar este Cartel al equipo</a>
			</div> <!-- END shared -->
			<div style="clear: both;"></div>
			#MOD_TOOLS#
		</div>
		', $_GET['id']); ?>
		<!-- Begin Block comment -->
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title"><span class="fa fa-comments-o  fa-1x"></span> Comentarios y opiniones</h3>
		  </div>
		  <div class="panel-body">
		    <div class="block" id="comments">
				<?php $img->comments('
					<div id="fb-root"></div>
					<meta property="fb:admins" content="ManuelFernandoMarula"/>
					<meta property="fb:app_id" content="{386695608061555}"/>
					<div class="fb-comments" data-href="#URL#" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>', $page->load('comments'));
				?>
		  </div>
		  </div>
		</div><!-- END Block comment -->

		<!-- Ubicacion Botones anterior y siguiente-->
		<ul class="pager">
		  <li class="previous"><?php echo $img->prev('#PREV#'); ?></li>
		  <li class="next"><?php echo $img->next('#NEXT#'); ?></li>
		</ul>
		<!-- end Ubicacion Botones anterior y siguiente-->
		</div> <!-- body content-->
	</div> <!-- panel panel-primary -->
	<!-- Consultas de los Carteles Relacionados-->
	<?php
	$imgAle=("SELECT * FROM `tentego_img` WHERE `type` = 'img' AND `is_waiting`=0 ORDER BY RAND() LIMIT 3");
	$resulAle=mysql_query($imgAle) or die ("Error al hacer la consulta al server: ".mysql_error());
	//Compruebo si hay algun resultado
	while ($rom = mysql_fetch_array($resulAle, MYSQL_ASSOC)) {
		echo '<div class="col-md-4 col-sm-4 col-xs-12"><div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Quizás también te interese</h3></div><div class="panel-body"><a href="'.$rewrite->img($rom['id'],$rewrite->changeSigns($rom['title'])).'" title="'.$rom["title"].', '.$rom["source"].'"><img  src="'.$rom["src"].'" alt="'.$rom["title"].' '.$rom["source"].'" class="img-responsive img-rounded center-block" /></a></div></div></div> <!-- end col-md-4 col-sm-8 col-xs-12 -->';
	}
	mysql_free_result($resulAle);
	?>
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
		<?php echo $ads->load('<div class="text-center">#AD[right]#</div>'); ?>
	  </div>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-body">
		Facebook!
	  </div>
	</div>
	<div class="panel panel-primary sidebarF">
	  <div class="panel-body">
		ADS fijo al bajar ADS fijo al bajar!
	  </div>
	</div>
  </div> <!-- END col-md-4-->
  </div>
  <!-- End Content -->