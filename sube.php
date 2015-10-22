<script type="text/javascript" async src="<?php echo $page->host(); ?>js/jquery.upload.js"></script>
<script type="text/javascript" async src="<?php echo $page->host(); ?>js/jquery.min.js"></script>
<script type="text/javascript" async src="<?php echo $page->host(); ?>js/jquery.form.js"></script>

<?php
global $rewrite;
$catConsulta=mysql_query("SELECT * FROM `tentego_img_cat` ORDER BY `name` ASC");
$resultCat=mysql_num_rows($catConsulta)
?>
  <!-- Begin Content -->
  <div class="content">
  <!-- Begin Block -->
	  <div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
		  <div class="panel-body text-center center-block">
			<?php echo $ads->load('<div class="text-center center-block">#AD[left]#</div>'); ?>
		  </div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
	    		<h3 class="panel-title"><span class="fa fa-plus"></span> Crear Cartel Personalizado</h3>
			</div>
		  <div class="panel-body">
			<div class="text-center">
				<!-- PASO 1-->
				<div class="tle">
					<p>PRIMER PASO: Selecciona tu imagen.</p>
					<div class="img-responsive center-block img-rounded" >	
						<!-- formulario con el que se carga la imagen via ajax -->
						<form id="imageform" method="post" enctype="multipart/form-data" action="upload.php" >
						<div class="demot center-block" id="upload">
							<label for="file">Imagen<span class="required">*</span></label>
							<input required type="file" name="photoimg" id="photoimg" class="left clear" /><br />
						</div>
						</form>	
					</div>
				</div>
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
				<!-- PASO 2-->
				<!-- formulario que envia la foto para ser procesada -->
				<div class="tle">
					<p>SEGUNDO PASO: Completa el título y la descripción.</p>
					<div class="img-responsive center-block img-rounded" >
					<form id="form" method="post" action="crearCartel.php">
						<div id="preview-container" class="left clear img-responsive center-block img-rounded">
							<div id="preview-all" class="left pad img-responsive center-block img-rounded">
								<div id="preview" class="left padd img-responsive center-block img-rounded">
									<div id="imagen_t"><img src="img/bglogo.png" width="440" height="300" title=""></div>
								</div>
								<div id="preview-form" class="left clear">
									<input required type="text" placeholder="TÍTULO" name="titulo" maxlength="36" class="left h1 preview-form">
									<textarea  required name="descp" rows="3" class="left clear h2 preview-form" placeholder="Descripción"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tle">
				<label for="selCat">TERCER PASO: Selecciona la Categoria <span class="required">*</span></label>
					<select required name="selCat" id="selCat">
					<option></option>
					<?php 
						while ($mostcat = mysql_fetch_array($catConsulta))
						{
						echo"<option $mostcat[id]>$mostcat[name]";
						}
						echo "</option>";
					?>
					</select>
				</div>
					</br>
					<input type="submit" name="submit_des" value="Enviar" class="btn btn-primary" style="width:69%; margin-left:1px;">
					<input type="hidden" id="color" name="color" value="0,0,0">
					<input type="hidden" id="fuente" name="fuente" value="arial">
				</form>
				</div>
			</div>
		  </div> <!-- Panel-body -->
		</div> <!-- END panel panel-primary-->
	  </div> <!-- END col-md-12-->
  </div> <!-- End Content class=row -->
