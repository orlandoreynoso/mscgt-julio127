<?php
/*
Template Name: Cover-mscgt
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>


<section class="portada-iglesias">
	<div class="container">
		<div class="row text-center">
			<div class="tit-portada-iglesias-msc">
				<div class="iglesias-titulo">
					<h3>Seleciona tu iglesia</h3>
				</div>
				<div class="church-descriptions">
					<p>Estamos conformados por tres Iglesias y un consejo parroquial, ingresa a la página de tu interés.</p>
				</div>
			</div>
		</div>
	</div><!--  fin de 1er container -->
</section>

<section class="mc-iglesias">
	<div class="container-fluid">
		<div class="row">
			<div class="iglesias">
				<div class="mc-churchs div-block-2">
					<img class="image-5" src="<?php echo IMAGES.'/tresconsejos.png'; ?>" alt="">
				</div>
				<div class="mc-churchs div-block-3">
					<img class="image-6" src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
				</div>
				<div class="mc-churchs div-block-4">
					<img class="image-7" src="<?php echo IMAGES.'/tesoro.png'; ?>" alt="">
				</div>
				<div class="mc-churchs div-block-5">
					<img class="image-8" src="<?php echo IMAGES.'/santarita.png'; ?>" alt="">
				</div>
			</div>
		</div>
	</div><!--  fin container fluid -->
</section>

<section>

	<div class="container">
		<div class="row text-center">

			<div class="conta">

			</div>
			<div class="">
				<div class="msc-portada">
					<div class="foto-portada">
						<div class="cover-title">
							<h1>PARROQUIA</h1>
							<h2>NUESTRA SEÑORA DEL SAGRADO CORAZÓN</h2>
						</div>
						<div class="contenido">Somos una comunidad de cristianos católicos, religiosos(as) laicos y laicas, que buscamos a través de la espiritualidad y el carisma de los Misioneros del Sagrado Corazón, conocer y vivir el amor de Dios revelado por su hijo Jesucristo, llevando su mensaje sanador y liberador a todas las personas, especialmente a los más necesitados y a los que sufren en nuestra comunidad.</div>
						<a href="<?php the_permalink(); ?>/quienes-somos" class="ingresar">INGRESAR</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>

	<?php
		$verri  = get_template_directory_uri();
		$verurl  = get_template_directory();
		$otro  = get_bloginfo('stylesheet_directory');
	?>
	<p>-- esto es el template directori uri</p>
	<pre>
		<?php var_dump($verri); ?>
	</pre>
	<p>----  solo el template directory</p>
	<pre>
		<?php var_dump($verurl); ?>
	</pre>
	<p>----  get_blo info: </p>
	<pre>
		<?php var_dump($otro); ?>
	</pre>
</section>

<section class="msc-espiritualidad">
		<div class="ref">
			<div class="img-ref">
				<img src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
			</div>
			<div class="tit-ref">Señor, aumenta mi caridad</div>
		</div>
		<div class="ref">
			<div class="img-ref">
				<img src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
			</div>
			<div class="tit-ref">Señor, aumenta mi caridad</div>
		</div>
		<div class="ref">
			<div class="img-ref">
				<img src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
			</div>
			<div class="tit-ref">Señor, aumenta mi caridad</div>
		</div>
		<div class="ref">
			<div class="img-ref">
				<img src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
			</div>
			<div class="tit-ref">Señor, aumenta mi caridad</div>
		</div>
		<div class="ref">
			<div class="img-ref">
				<img src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
			</div>
			<div class="tit-ref">Señor, aumenta mi caridad</div>
		</div>
		<div class="ref">
			<div class="img-ref">
				<img src="<?php echo IMAGES.'/santuario.png'; ?>" alt="">
			</div>
			<div class="tit-ref">Señor, aumenta mi caridad</div>
		</div>
	</div>
</section>

<!-- div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php // include (TEMPLATEPATH . '/libs/banner.php');   ?>
      </div>
    </div>
</div -->

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
			<div class="titulo"><h3>Espiritualidad</h3></div>
			<div class="col-md-12 reflexiones">
					<?php include TEMPLATEPATH.'/libs/homilias.php'; ?>
					<?php include TEMPLATEPATH.'/libs/reflexiones.php'; ?>
					<?php // include TEMPLATEPATH.'/libs/mes1.php'; ?>
					<?php // include TEMPLATEPATH.'/libs/mes2.php'; ?>
			</div>
		</div>
	</div>
</section>


<section class="crecimiento">
	<div class="container">
		<div class="row cuadro-crecimiento">
			<div class="titulo"><h3>Crecimiento</h3></div>
			<div class="contenido">
				<div class="actual col-xs-12 col-md-6">
					<?php $the_query = new WP_Query(create_page(1326,1));  	?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<?php
					    $id = get_permalink(1326);
					    $title = get_the_title(1326);
				     ?>

					<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    		<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
					<div class="label">
						<div class="ic-2">
							<i class="icon-file2 fa fa-link"></i>
							<a href="<?php bloginfo('url'); ?>/<?php echo $title; ?>" class="cat"><?php echo $title;  ?></a>
						</div>
					</div>
					<div class="exe"><?php the_excerpt(); ?></div>
					<?php endwhile;?>
				</div>
				<div class="actual col-xs-12 col-md-6">
					<?php $the_query = new WP_Query(create_page(1300,1));  	?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

					<?php
					    $id = get_permalink(1300);
					    $title = get_the_title(1300);
				     ?>

					<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    		<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
					<div class="label">
						<div class="ic-2">
							<i class="icon-file2 fa fa-link"></i>
							<a href="<?php bloginfo('url'); ?>/<?php echo $title; ?>" class="cat"><?php echo $title;  ?></a>
						</div>
					</div>
					<div class="exe"><?php the_excerpt(); ?></div>
					<?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="last">
	<div class="container">
		<div class="row cuadro-last">
			<div class="titulo"><h3>últimas noticias</h3></div>
			<div class="contenido">
				<?php // get_sidebar('3'); ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
