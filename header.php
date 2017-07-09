<?php 

include get_template_directory().'/libs/headermeta.php';

?>

<body>

	<div class="container">
		<div class="row">
			<div class="m-header">
				<div class="col-xs-12 col-sm-8 col-md-6">
					<div class="ls">
						<?php logo(); ?>
					</div>					
				</div>
				<div class="col-xs-12  col-sm-4 col-md-6">
					<div class="sm">
						<div class="ubicacion">
							<span class="icon fa fa-map-marker"></span>
							<span id="texto">Mixco, Guatemala</span>
						</div>
						<div class="search"><?php  get_search_form(); ?></div>
					</div>					
				</div>
			</div>
		</div>		
	</div>


<?php 

	if (is_page('Inicio')){
		include (TEMPLATEPATH . '/libs/header_home.php'); 
		//1305 es el ID para tres consejos
	}

	if(is_page('tres-consejos')) {
		include (TEMPLATEPATH . '/libs/header_tconsejos.php');
	}

	else{
		include (TEMPLATEPATH . '/libs/header_general.php');
	}
?>

<div class="e-menu">
					<nav class="navbar navbar-default" role="navigation">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
			    		  <a class="navbar-brand" href="#">Menu</a> 
					    </div>

					        <?php
					            wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					        		'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					        ?>
					    </div>
					</nav>
</div>