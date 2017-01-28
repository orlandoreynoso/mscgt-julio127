<?php 
/*
Template Name: Portada
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>

<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
      </div>
    </div>
</div>

<section class="info-parroquial">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article>
				<?php include (TEMPLATEPATH . '/libs/infoparroquial.php');  ?>
			</article>					
		</div>
	</div>
</div>	
</section>

<section class="espiritualidad">
	<div class="container">
		<div class="row cuadro-reflexiones">
			<div class="col-md-12 reflexiones">
				<div class="titulo">
					<h3>Espiritualidad</h3>
				</div>
				<?php include TEMPLATEPATH.'/libs/homilias.php'; ?>
				<?php include TEMPLATEPATH.'/libs/ref.php'; ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<p>relleno</p>
		</div>
	</div>
</section>

<section class="espiritualidad">
	<article class="space" id="cuadro_reflexiones">
		<div id="titulo_cuadro_reflexiones">
			<h3>Espiritualidad</h3>
		</div>
		<div class="zerogrid" id="reflexiones">
			<?php 
			/*====================  Inicia Seccion de homilia ============================*/
			 include TEMPLATEPATH.'/libs/homilias.php';	
			/*====================  inicia Seccion de reflexiones =========================*/ 
	         include TEMPLATEPATH.'/libs/reflexiones.php';
			  // include TEMPLATEPATH.'/libs/mes1.php';
			  // include TEMPLATEPATH.'/libs/mes2.php';			 
			?>
		</div>
	</article>					
</section>

<section class="crecimiento">
	<article id="cuadro_reflexiones">
		<div id="titulo_cuadro_crecimiento">
			<h3>Crecimiento</h3>
		</div>
		<div class="zerogrid" id="reflexiones">
		<?php $the_query = new WP_Query(create_page(1326,1));  	?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div class="diario">
			  <div class="contenido_homilia"><?php obtener_pagina('Crecimiento cristiano','verde');  ?></div>
			</div>
		<?php endwhile;?>
		<?php $the_query = new WP_Query(create_page(1300,1));  	?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			<div class="diario">
			  <div class="contenido"><?php obtener_categoria('La mision MSC','celeste');  ?></div>
			</div>
		<?php endwhile;?>
		</div>	
	</article>			
</section>
<section class="news">
	<article id="home_entry" class="zerogrid">

				<div id="titulo_entradas">
					<h3>últimas noticias</h3>
				</div>				
				<div id="recientes">
					   <?php get_sidebar('3'); ?>
				</div>	
	</article>		
</section>
<?php get_footer(); ?>