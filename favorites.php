<!-- Begin Content -->
  <div id="content">
	<!-- Begin Block -->
	<div class="primary col-md-8  col-sm-12 col-xs-12">
		<div class="panel panel-primary">
		  <div class="panel-body text-center center-block">
			<?php echo $ads->load('<div class="text-center center-block">#AD[left]#</div>'); ?>
		  </div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title"><span class="fa fa-heart"></span> Favoritos del usuario <strong><?php echo $user->userInfo('user'); ?></strong></h3>
			</div>
		  <div class="panel-body">
			<?php
			echo $img->getFavorites('<a href="'.$rewrite->img("#ID#","#REWRITE-TITLE#").'"><img src="#IMG#" style="width:168px; height:168px; margin:2px; float:left;" alt="#TITLE#" title="#TITLE#" /></a>',$user->userInfo('id')); ?>
			<br style="clear:both;" />
		  </div>
		</div>
	</div> <!-- End col-md-8 Block -->
	 <div class="secondary col-md-4 col-sm-12 col-xs-12">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
			<h3 class="panel-title"><span class="fa fa-level-down"></span>  Buscar por categorias </h3>
		</div>
	  <div class="panel-body">
		<div class="tagcloud">
			<ul>
				<?php
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
		<div class="panel-heading">
		    <h3 class="panel-title"><span class="fa fa-facebook"></span> <span class="fa fa-twitter"> </span> Síguenos en las redes sociales</h3>
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
	  <div class="panel-body">
		ADS fijo al bajar ADS fijo al bajar!
	  </div>
	</div>
  </div> <!-- END col-md-4-->
  </div> <!-- End Content -->