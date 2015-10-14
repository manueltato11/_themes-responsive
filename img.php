
  <!-- Begin Content -->

  <div id="content" itemscope="" itemtype="http://schema.org/ImageObject">

	<!-- Begin Block -->

	<?php 

	global $urlimg;

	echo $img->getObject('

	<div class="block">

	'.($page->load('object_title')?'<h2 itemprop="name"><span>#TITLE#</span></h2>':'').'

		<!-- Begin Object -->

		<div class="[video=yt]object">

			<div class="podpis" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">

				<span class="lewa">
					<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'#comments" title="Ver Comentarios">
					Comentarios (<fb:comments-count href='.$rewrite->img("#ID#","#REWRITE-TITLE#").'></fb:comments-count>)</a>

					[FAV=<a href="#" class="add_fav" onClick="fav(#ID#,this); return false" title="Agregar a mis Favoritos">Añadir a Favoritos</a>|<a href="#" title="Eliminar de mis Favoritos" class="del_fav" onClick="fav(#ID#,this); return false;">Eliminar de Favoritos</a>]

				</span>
				
				<!-- Begin Share -->
				<div class="botonshare">
				<span class="fb_share2"><fb:share-button href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'" type="button_count"></fb:share-button></span>	
				</div>
				<!-- End Share -->

				<span class="prawa">

					<a href="#" title="Me Gusta" class="thumb_up" onClick="vote_up(#ID#); return false;">Me Gusta( #VOTEUP# )</a>

					<!-- #VOTE# -->

					<a href="#" title="No Me Gusta" class="thumb_down" onClick="vote_down(#ID#); return false;">No me Gusta ( #VOTEDOWN# )</a>

				</span>
				<meta itemprop="ratingValue" content="4.8">
				<meta itemprop="ratingCount" content="14">
			</div>

			[object url=#]

		</div>

		<!-- End Object -->

		<!-- Begin Info -->

		<div class="info">
			<span class="pasek red"><b>Carteles de:</b> #CATEGORY# </span>
			<span class="pasek green"><b>Descripción:</b><span itemprop="description"> #TITLE#, #SOURCE#</span></span>
			<span class="pasek blue"><b>Autor(a):</b><span itemprop="author"> <a href="'.$rewrite->user("#OWNER-ID#", "#REWRITE-OWNER#").'" title="Ver Perfil de #OWNER#">#OWNER#</a></span></span>
			<span class="pasek brown"><b>Fecha:</b><meta itemprop="datePublished" content="#DATE#"> #DATE# </span>
			<span class="pasek face"><strong><a href='.$urlimg.' download="#TITLE#-www.CartelesCreativos.com.png" title="Descargar el Cartel: #TITLE#">Descargar este Cartel en mi PC</a></strong></span>
		</div>

		<!-- End Info -->
		<!-- Begin Share -->
		<div class="share">
			<div class="addthis_toolbox addthis_default_style " 
				addthis:title="#TITLE#, #SOURCE# #CartelesCreativos #Desmotivaciones"
				addthis:url="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'"
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
		#MOD_TOOLS#', $_GET['id']); ?>
		<!-- Ubicacion Botones anterior y siguiente-->
		<div id="nastepny">
            <div class="prev">
            <?php
            echo $img->prev('#PREV#');
            ?>
            </div>
            <div class="next">
            <?php
            echo $img->next('#NEXT#');
            ?>
            </div>
			
        </div>
		<center>
			<div id="etiquetas">
				<?php

				// nos conectamos con la base de datos
				$conn = mysql_connect('localhost', 'root', '');
				if (!$conn or !mysql_select_db('manuel11_carteles2013', $conn)) die('cannot connect to db');
				 
				// nuevas busquedas
				if (isset($_GET['action']) and $_GET['action'] == 's')
				{
				    // obtener la hora actual
				    $now = date("Y-m-d H:i:s");
				 
				    // obtener el término presentado y prepararlo para la consulta de base de datos
				    $name = mysql_real_escape_string(strip_tentego_img_cat(trim($_GET['name'])));
				 
				    // comprobar si se haya presentado antes
				    if (mysql_result(mysql_query("SELECT COUNT(id) FROM tentego_img_cat WHERE name = '$name'"), 0) > 0)
				    {
				        // existe el término - actualizar el contador y la última búsqueda timestamp
				        mysql_query("UPDATE tentego_img_cat SET counter = counter+1, last_search = '$now' WHERE name = '$name'");
				    } else {
				        // el nameino no existe - inserta un nuevo nameino
				        mysql_query("INSERT INTO tentego_img_cat (name, last_search) VALUES ('$name', '$now')");
				    }
				}
				 
				// prepara las etiquetas para visualizarlas
				$names = array(); // crear el arreglo
				$maximum = 0; // $maximo es el más alto contador para un término de búsqueda
				 
				$query = mysql_query("SELECT name, counter FROM tentego_img_cat ORDER BY rand() LIMIT 20");
				 
				while ($row = mysql_fetch_array($query))
				{
				    $name = $row['name'];
				    $counter = $row['counter'];
				 
				    // actualizar $máximo si este plazo es más popular que los términos anteriores
				    if ($counter > $maximum) $maximum = $counter;
				 
				    $names[] = array('name' => $name, 'counter' => $counter);
				 
				}
				 
				// términos aleatoriamente menores o  conservar el orden de mayor a menor
				shuffle($names); 

				?>
				<div id="tagcloud">
            <?php 
            // iniciar un bucle a través de las etiquetas
            foreach ($names as $name):
                // denameinar la popularidad de este término como un porcentaje
                $percent = floor(($name['counter'] / $maximum) * 100);

                // denameinar la clase de este plazo, basado en el porcentaje
                if ($percent < 20):
                    $class = 'smallest';
                elseif ($percent >= 20 and $percent < 40):
                    $class = 'small';
                elseif ($percent >= 40 and $percent < 60):
                    $class = 'medium';
                elseif ($percent >= 60 and $percent < 80):
                    $class = 'large';
                else:
                    $class = 'largest';
                endif;
            ?>
            <span class="<?php echo $class; ?>">

                <a href="<?php echo $rewrite->search; ?>?s=<?php echo urlencode($name['name']); ?>" rel="tag" title="Carteles <?php echo ($name['name']); ?>"><?php echo $name['name']; ?></a>
            </span>
            <?php endforeach; ?>
        </div>
			</div>
		</center>
		<!-- end Ubicacion Botones anterior y siguiente-->
	<!-- End Block -->
		<div class="relacionados">
			<div class="also_interested">
				<h2>Quizás también te interese:</h2></br>
				<!-- Consultas de los Carteles Relacionados-->
				<?php
				$imgAle=("SELECT * FROM `tentego_img` WHERE `type` = 'img' AND `is_waiting`=0 ORDER BY RAND() LIMIT 3");
				$resulAle=mysql_query($imgAle) or die ("Error al hacer la consulta al server: ".mysql_error());
				//Compruebo si hay algun resultado
				while ($rom = mysql_fetch_array($resulAle, MYSQL_ASSOC)) {
					echo '<a href="'.$rewrite->img($rom['id'],$rewrite->changeSigns($rom['title'])).'" title="'.$rom["title"].', '.$rom["source"].'"><img  src="/'.$rom["src"].'" alt="'.$rom["title"].' '.$rom["source"].'" /></a>';
				}
				mysql_free_result($resulAle);
				?>
			</div>
			<div class="anuncio">
							<script type="text/javascript"><!--
			google_ad_client = "ca-pub-0162406634460320";
			/* 300x250-CartelesCreativos.com */
			google_ad_slot = "7007290206";
			google_ad_width = 300;
			google_ad_height = 250;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
			</div>
		</div>
	<!-- UP ADS Skyscraper horizontal (728 x 90) -->
	<center>
		<!--<img src="img/ads-728x90.png" />-->
	</center>
	<!-- END ADS Skyscraper horizontal (728 x 90) -->
	
	<!-- Begin Block -->
	
	<div class="block">
		<h1>¿Te gustó el Cartel? Escribe tu Opinión:</h1><br />
	  <div class="block" id="comments">
			<?php $img->comments('
				<div id="fb-root"></div>
				<meta property="fb:admins" content="ManuelFernandoMarula"/>
				<meta property="fb:app_id" content="{386695608061555}"/>
				<div class="fb-comments" data-href="#URL#" data-num-posts="5" data-width="900" data-colorscheme="dark"></div>', $page->load('comments'));
			?>
	  </div>
	</div>
	<?php //include 'ads728.php'; ?>
	<!-- Begin Subtitulos con la scategorias -->
	<div class="subtitulos">
	<?php include 'catFooter.php'; ?>
	</div>
	<!-- End Subtitulos con la scategorias -->
  </div>
  <!-- End Content -->