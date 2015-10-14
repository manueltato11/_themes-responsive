  <!-- Begin Content -->

  <div id="content">

	<!-- Begin Block -->

	<div class="block">

		<h1>Contactenos</h1>

		<div class="tresc">

			<?php $page->contactForm(); ?>

			<form action="<?php echo $rewrite->contact; ?>" method="post">

				<label>Nombre <span class="required">*</span></label>

				<input type="text" name="name">

				<label>Apellido</label>

				<input type="text" name="surname">

				<label>E-Mail <span class="required">*</span></label>

				<input type="email" name="email">

				<label>Asunto <span class="required">*</span></label>

				<input type="text" name="subject">

				<label>Mensaje <span class="required">*</span></label>

				<textarea name="content"></textarea>

				<br/>

				<input type="submit" name="submit" value="Enviar" />

			</form>

		</div>

	</div>

	<!-- End Block -->

  </div>

  <!-- End Content -->