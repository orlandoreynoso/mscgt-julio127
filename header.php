<?php 

include get_template_directory().'/libs/headermeta.php';

?>

<body>

<?php  

 /*	

Cargamos el logo y el buscador

 include (TEMPLATEPATH . '/libs/header-logo-buscador.php');   
 */

 ?>

<?php 

	if (is_page('Inicio')){
		include (TEMPLATEPATH . '/libs/header-cover.php'); 
		//1305 es el ID para tres consejos
	}

	if(is_page('tres-consejos')) {
		include (TEMPLATEPATH . '/libs/header_tconsejos.php');
	}

	else{
		include (TEMPLATEPATH . '/libs/header_general.php');
	}
?>



</section>