<header>
	<div class="zerogrid header" id="header">
		<div id="ls" class="ls">
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
</header>