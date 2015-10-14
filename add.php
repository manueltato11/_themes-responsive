  <!-- Begin Content -->

  <div id="content">

	<!-- Begin Block -->

	<div class="block">

		<h1>Añadir un Nuevo Cartel </h1>
		
		<div class="tresc">

		<?php $img->uploadImage(700,$page->load('max_file_size'),$user->userInfo('id'),$page->load('watermark')); ?>

		<?php $img->addMovie($user->userInfo('id'), @$_POST['type']); ?>

			

			<!-- Begin #tabs -->

			<div id="tabs">

			   <ul>

				 <li><a href="#tab-1">Imagen</a></li>

				 <!-- <li><a href="#tab-2">YouTube</a></li> -->

				 <!-- <li><a href="#tab-3">Vimeo</a></li> -->
				 

			   </ul>			

				<!-- Begin #tab-1 (image) -->

				<div id="tab-1">

					<?php $img->uploadForm($rewrite, 'img'); ?>
				
				</script>

				</div>

				<!-- End #tab-1 (image) -->

				<!-- Begin #tab-2 (movie YT) -->

			</div>

			<!-- End #tabs -->
				
		</div>

	</div>

	<!-- End Block -->

  </div>

  <!-- End Content -->