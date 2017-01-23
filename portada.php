<?php 
/*
Template Name: Portada
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>

<section>
	<article class="banner">
		<?php  echo do_shortcode("[metaslider id=2677]");  ?>
	</article>
</section>

<section class="iglesias">
	<article class="selection">
		<h3>Selecciona tu iglesia</h3>
	</article>
	<article class="tc-iglesias">
			<div id="div1" class="ig-p">
				<a href="<?php bloginfo('url'); ?>/category/tres-consejos/">
					<img src="<?php echo IMAGES.'/tresconsejos.png'; ?>" alt="">
					<span>Parroquia - Tres consejos</span>					
				</a>
			</div>
			<div id="div1" class="ig-p">
				<a href="<?php bloginfo('url'); ?>/molino-de-las-flores/">
					<img src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
					<span>Santuario NSSC</span>
				</a>
			</div>
			<div id="div1" class="ig-p">
				<a href="<?php bloginfo('url'); ?>/sede-parroquial-el-tesoro/">
					<img src="<?php echo IMAGES.'/tesoro.png'; ?>" alt="">
					<span>Sede Parroquial El Tesoro</span>
				</a>
			</div>
			<div id="div1" class="ig-p">
				<a href="<?php bloginfo('url'); ?>/rectoria-de-santa-rita/">
					<img src="<?php echo IMAGES.'/santarita.png'; ?>" alt="">
					<span>Rectoria de Santa Rita</span>
				</a>
			</div>
	</article>
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