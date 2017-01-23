<header>
	<div class="zerogrid header" id="header">
		<div class="ls">
			<div class="logo">
				<a href="<?php bloginfo('url' ); ?>">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/web.png" alt="">
				</a>						
			</div>
		</div>
		<div class="sm">
			<div class="ubicacion">
				<span class="icon-location2 fa fa-map-marker"></span>
				<span class="texto">Mixco, Guatemala</span>
			</div>
			<div class="search"><?php  get_search_form(); ?></div>
		</div>		
	</div>
	<div id="welcome" class="zerogrid welcome">
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
</header>