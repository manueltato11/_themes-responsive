<?php
//require_once 'connect.php';
$conexion=mysql_connect("localhost","root","") or exit("No se conecta".mysql_error()); // Conexion con el servidor db (servidor,usuario, pass)
mysql_select_db("manuel11_carteles2013",$conexion) or exit("No se conecta con la base de datos".mysql_error()); // Seleccionamos la base de datos
$catConsulta=mysql_query("SELECT * FROM `tentego_img_cat` ORDER BY `name` ASC");
$resultCat=mysql_num_rows($catConsulta)

?>

<div id="contentSube">
<div style="text-align:center;">
<div class="tle" style="border: 2px solid blue;">PASO 1: Sube una foto</div>
<!-- PASO 1-->
<div style="height:100px; margin:10px; padding: 10px;">	
	<div>
				<!-- formulario con el que se carga la imagen via ajax -->
				<form id="imageform"  method="post" enctype="multipart/form-data" action="/upload.php" >
				<div class="demot" id="upload">
				<label for="file">Imagen<span class="ColorRed">*</span></label>
				<input required type="file" name="photoimg" id="photoimg" class="left clear" /><br />
				</div>
				</form>
	</div>		
</div>
<!-- PASO 2-->

							<!-- formulario que envia la foto para ser procesada -->
			<!-- si te fijas hasta el moento no hace nada  a la imagen solo la carga en un a carpeta al servidor -->
			<!-- y la redimenciona y la manda a este formulariopara poner el titulo y la descripcion -->
			<div class="tle" style="border: 2px solid blue;">PASO 2: Completa el Titulo y la descripci&oacute;n</div>
			</br>
			<form id="form" method="post" action="/crearCartel.php">
			<center>
				<div id="preview-container" class="left clear">
					<div id="preview-all" class="left pad">
						<div id="preview" class="left padd">
							<div id="imagen_t"><img src="/img/bglogo.png" width="440" height="300" title=""></div>
						</div>
						<div id="preview-form" class="left clear">
								<input required type="text" placeholder="TÍTULO" name="titulo" maxlength="36" class="left h1 preview-form">
								<textarea  required name="descp" rows="3" class="left clear h2 preview-form" placeholder="Descripci&oacute;n"></textarea>
						</div>
					</div>
				</div>
				</br>
				<div class="tle" style="border: 2px solid blue;">
				<label for="selCat">PASO 3: Seleccionar Categoria <span class="ColorRed">*</span></label>
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
				</br></br>
				<input type="submit" name="submit_des" value="Enviar" class="clear button verde medium save" style="width:69%; margin-left:1px;">
				<input type="hidden" id="color" name="color" value="0,0,0">
				<input type="hidden" id="fuente" name="fuente" value="arial">
				</center>
			</form>
			</div>
		</div>
	</div>
