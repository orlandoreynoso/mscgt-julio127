<?php 

include get_template_directory().'/libs/head-metas.php';

?>
<body>
	<div id="contenedor">
		<?php 

	if (is_page('Inicio')){
		include (TEMPLATEPATH . '/libs/header_home.php'); 
		//1305 es el ID para tres consejos
	}

	else{
		include (TEMPLATEPATH . '/libs/header.php'); 
	}

		
		?>
	<nav>
		<div class="zerogrid cuadro-menu" id="cuadro_menu">
			<?php showMenu(); ?>
		</div>			
	</nav>