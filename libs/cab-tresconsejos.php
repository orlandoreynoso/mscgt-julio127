<?php 

include get_template_directory().'/libs/head-metas.php';
 
?>
<body>
	<div id="contenedor">
		<header>
			<div class="zerogrid header">
				<div class="ls">
					<?php // logo(); ?>
					<?php // slogan(); ?>
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
		<!-- nav>
			<div class="zerogrid cuadro-menu">
				<?php showMenu(); ?>
			</div>			
		</nav -->