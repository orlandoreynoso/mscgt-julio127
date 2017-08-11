<?php

/*===========================*/
/* devuelve el directorio donde tenemos nuestra template y se le asigna a temppath */
//define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
//define('IMAGES',TEMPPATH. "/images");

?>
<div class="container-fluid d-flex justify-content-center align-items-center msc817-cover">
	<div class="row text-center p-4">
		<div class="msc817-cover-title col-md-12">
			<h1 class="title">PARROQUIA NUESTRA SEÑORA DEL SAGRADO CORAZÓN</h1>
		</div>
		<div class="msc817-contenido col-md-12">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'content', 'page' );
			// End the loop.
			endwhile;
			?>
			<?php  the_content(); ?>
		</div>
	</div>
</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php include (TEMPLATEPATH . '/template/menu/menu-cover.php');  ?>

			</div>
			<div class="col-md-12">
				<div class="row">
					<!-- Indicates a successful or positive action -->
					<button type="button" class="btn btn-success">Success</button>
				</div>
			</div>
		</div>
	</div>
