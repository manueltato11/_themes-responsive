  <!-- Begin Content -->
  <div class="content" id="content">
	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
		  <div class="panel-body">
			ADS login responsivo 728x90
		  </div>
		</div>
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title"><span class="fa fa-image"></span> Añadir un nuevo Cartel</h3>
		  </div>
		  <div class="panel-body">
			<?php $img->uploadImage(700,$page->load('max_file_size'),$user->userInfo('id'),$page->load('watermark')); ?>
			<?php $img->addMovie($user->userInfo('id'), @$_POST['type']); ?>
			<!-- Begin #tabs -->
			<div id="tabs">
				<!-- Begin #tab-1 (image) -->
				<div id="tab-1">
					<?php $img->uploadForm($rewrite, 'img'); ?>
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			  <span class="fa fa-info-circle"></span> Ver Recomendaciones
			</button>
				<div class="collapse" id="collapseExample">
				  <div class="well">
				    	<div class="tle text-left recomendaciones"><p class="text-center"> <span class="fa fa-info-circle"></span> RECOMENDACIONES</p>
					<p class="text-primary">Un buen Cartel debe de contener: </p>
						<ol>
							<li class="text-success">Muy buena ortografía.</li>
							<li class="text-success">Una imagen de buena calidad.</li>
							<li class="text-success">Un título corto y muy descriptivo con el mensaje.</li>
							<li class="text-success">El título y la descripción deben de coincidir con el contenido de la imagen.</li>
							<li class="text-success">Seleccionar la categoría correcta que mejor describe de qué trata el cartel.</li>
						</ol>
					<p class="text-primary">Un Cartel nunca debe de tener: </p>
						<ol>
							<li class="text-danger">Cartel sin sentido alguno.</li>
							<li class="text-danger">Cartel con imagenes ofensivas o racistas.</li>
							<li class="text-danger">Cartel que no hace parte de ninguna categoría, es aquel que contiene imágenes personales o sacadas con el móvil de mala Calidad. <a href="http://www.cartelescreativos.com/imagenes/2361/mi-princesa-ruth/">Ver un ejemplo.</a></li>
						</ol>
					<p class="text-success"><a href="http://www.cartelescreativos.com/normas/">Ver normas de la comunidad</a></p>
				</div>
				  </div>
				</div>
				</script>
				</div>
				<!-- End #tab-1 (image) -->
				<!-- Begin #tab-2 (movie YT) -->
			</div> <!-- End #tabs -->
		  </div>
		</div>
	</div> <!--  END col-md-12 END Block -->
  </div>
  <!-- End Content -->