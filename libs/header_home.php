<section class="msc-cover">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contenido">
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
	</div>
</section>