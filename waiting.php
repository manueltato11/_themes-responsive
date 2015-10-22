  <!-- Begin Content -->
  <div class="content">
	<!-- Begin Block -->
  <div class="primary col-md-8 col-sm-12 col-xs-12">
	<div class="panel panel-primary">
	  <div class="panel-body contentF">
		<?php
		echo $img->getObjects('
		<div class="block">

		'.($page->load('object_title')?'<h2 class="titulo"><a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'">#TITLE#</a></h2>':'').'
			<!-- Begin Info -->
			<div class="info">
				<span><span class="fa fa-check-square-o"></span><strong> Descripción: </strong> #TITLE#, #SOURCE#</span><br>
				<span><span class="fa fa-picture-o"></span><strong> Carteles de: </strong> #CATEGORY# </span> | 
				<span><span class="fa fa-user"></span><strong> Autor(a): </strong> <a href="'.$rewrite->user("#OWNER-ID#", "#REWRITE-OWNER#").'" title="Ver Perfil de #OWNER#">#OWNER#</a></span> | 
				<span><span class="fa fa-clock-o"></span><strong> Publicada el: </strong> #DATE#</span> | 
				<span><span class="fa fa-comments"></span><strong> <a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'#comments" title="Ver comentarios">Comentarios (<fb:comments-count href='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'></fb:comments-count>)</a></strong></span><br><br>
			</div>
			<!-- End Info -->
			<!-- Begin Object -->
			<div class="[video=yt]object img-responsive img-thumbnail center-block">
				<div class="podpis">
					<span class="lewa">
						[FAV=<a href="#" title="Agregar a mis Favoritos" onClick="fav(#ID#,this); return false"></a>|<a href="#" title="Eliminar de mis Favoritos" onClick="fav(#ID#,this); return false;"></a>]
					</span>
				</div>
				[object url='.$rewrite->img("#ID#","#REWRITE-TITLE#").']
			</div><!-- End Object -->
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
			              <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1262 1075q-37 121-138 195t-228 74-228-74-138-195q-8-25 4-48.5t38-31.5q25-8 48.5 4t31.5 38q25 80 92.5 129.5t151.5 49.5 151.5-49.5 92.5-129.5q8-26 32-38t49-4 37 31.5 4 48.5zm-494-435q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm512 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm256 256q0-130-51-248.5t-136.5-204-204-136.5-248.5-51-248.5 51-204 136.5-136.5 204-51 248.5 51 248.5 136.5 204 204 136.5 248.5 51 248.5-51 204-136.5 136.5-204 51-248.5zm128 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z" />
			                class="cls-2" fill-rule="evenodd" />
			              </svg>
			            </span>
			            <span class="rrssb-text">Me gusta <span class="badge">#VOTEUP#</span></span>
			          </a>
			        </li>
			        	<li class="rrssb-no-me-gusta">
			          	<a href="#" title="No me gusta" class="thumb_down" onClick="vote_down(#ID#); return false;">
			            <span class="rrssb-icon">
			              <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1262 1229q8 25-4 48.5t-37 31.5-49-4-32-38q-25-80-92.5-129.5t-151.5-49.5-151.5 49.5-92.5 129.5q-8 26-31.5 38t-48.5 4q-26-8-38-31.5t-4-48.5q37-121 138-195t228-74 228 74 138 195zm-494-589q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm512 0q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm256 256q0-130-51-248.5t-136.5-204-204-136.5-248.5-51-248.5 51-204 136.5-136.5 204-51 248.5 51 248.5 136.5 204 204 136.5 248.5 51 248.5-51 204-136.5 136.5-204 51-248.5zm128 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
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
			          <a href="https://twitter.com/intent/tweet?text=#TITLE# %20@CartelesCreativ%20%23CartelesCreativos%20%23Desmotivaciones%20&tw_p=tweetbutton&url='.$rewrite->img("#ID#", "#REWRITE-TITLE#").'%23.hits.twitter" class="popup" title="Twittear a mis seguidores">
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
			</div> <!-- END shared -->
			<div style="clear: both;"></div>
			#MOD_TOOLS#
		</div>
		',1,@$_GET['page'],$page->load('objects_per_page'));
		echo '<nav class="text-center"><ul class="pagination">'.$img->pagination(' <li><a href="?page=#">«</a></li> ',' <li><a href="?page=#">#</a></li> ', ' <li class="active disabled"><a>#</a></li> ', ' <li><a href="?page=#">»</a></li> ',$page->load('objects_per_page'),1,@$_GET['page']).'</ul></nav>';
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
	  <div class="panel-body text-center center-block">
		<?php echo $ads->load('<div class="text-center center-block">#AD[right]#</div>'); ?>
	  </div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title"><span class="fa fa-facebook"></span> <span class="fa fa-twitter"></span> Siguenos en las redes sociales</h3>
		</div>
	  <div class="panel-body center-block">
		<div class="fb-page" data-href="https://www.facebook.com/Cartelescreativos" data-width="500" data-height="230" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Cartelescreativos"><a href="https://www.facebook.com/Cartelescreativos">Cartelescreativos.com</a></blockquote></div></div><br><br>
		<a href="https://twitter.com/CartelesCreativ" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @CartelesCreativ en Twitter</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	  </div>
	</div>
	<script type="text/javascript" async>
	jQuery.noConflict();
	  jQuery(document).ready(function () {  
	  var top = jQuery('.sidebarF').offset().top - parseFloat($('.sidebarF').css('marginTop').replace(/auto/, 0));
	  jQuery(window).scroll(function (event) {
	    var y = jQuery(this).scrollTop();
	    if (y >= top) {
	      jQuery('.sidebarF').addClass('fixed');
	     
	      var sidebarheight = jQuery('.sidebarF').height();
	      var contentheight = jQuery('.contentF').height();
	        
	 if (y > (contentheight - sidebarheight)) {
	     jQuery('.sidebarF').css({marginTop: contentheight - sidebarheight - 10});
	     jQuery('.sidebarF').removeClass('fixed');
	 }
	        else 
	        {
	     jQuery('.sidebarF').css({marginTop: '0'});
	     jQuery('.sidebarF').addClass('fixed');
	        }
	        
	    } else {
	      jQuery('.sidebarF').removeClass('fixed');
	    }
	  });
	});
	</script>
	<div class="panel panel-primary sidebarF">
	  <div class="panel-body text-center center-block">
		<?php echo $ads->load('<div class="text-center center-block">#AD[right]#</div>'); ?>
	  </div>
	</div>
  </div> <!-- END col-md-4-->
  </div> <!-- End Content class=row -->