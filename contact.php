  <!-- Begin Content -->
  <div id="content">
	<!-- Begin Block -->
	<div class="primary col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">
		  <div class="panel-body text-center center-block">
			<?php echo $ads->load('<div class="text-center center-block">#AD[left]#</div>'); ?>
		  </div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title"><span class="fa fa-envelope-o"></span> Contactenos</h3>
			</div>
	  		<div class="panel-body">
				<?php $page->contactForm(); ?>
				<form class="form-horizontal" action="<?php echo $rewrite->contact; ?>" method="post">
					<div class="form-group">
						<label for="nombre" class="col-sm-2 control-label">Nombre <span class="required">*</span></label>
						<div class="col-sm-10">	
							<input required type="text" class="form-control" id="nombre" placeholder="¿Como te llamas?" name="name">
						</div>
					</div>
					<div class="form-group">
						<label for="apellidos" class="col-sm-2 control-label">Apellido</label>
						<div class="col-sm-10">	
							<input type="text" class="form-control" id="apellido" placeholder="Tus Apellidos" name="surname">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Correo electronico <span class="required">*</span></label>
						<div class="col-sm-10">	
							<input required type="email" class="form-control" id="email" placeholder="A que email te respondemos" name="email">
						</div>
					</div>
					<div class="form-group">
						<label for="asunto" class="col-sm-2 control-label">Asunto <span class="required">*</span></label>
						<div class="col-sm-10">	
							<input required class="form-control" id="asunto" placeholder="¿Cual es el asunto del mensaje?" type="text" name="subject">
						</div>
					</div>
					<div class="form-group">
						<label for="mensaje" class="col-sm-2 control-label">Mensaje <span class="required">*</span></label>
						<div class="col-sm-10">	
							<textarea placeholder="En que te podemos ayudar" class="form-control" rows="5" name="content"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary" type="submit" name="submit" value="Enviar" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- End Block -->
  </div> <!-- End Content -->