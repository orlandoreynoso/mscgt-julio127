<?php 
/*
Template Name: Tres Consejos
*/
?>
<?php get_header(); ?>
<section>
	<article class="banner">
		<?php  echo do_shortcode("[metaslider id=2666]");  ?>
	</article>
</section>

<section>
	<article class="titulo-consejo">
		<div class="mapeo"><?php the_breadcrumb(); ?></div>			
	</article>
	<article>
		<div class="tc-iconos">
			<a class="tci tci-evento"  href="<?php bloginfo('url' ); ?>/tres-consejos/eventos">
					<span class="fa fa-calendar-check-o"></span>
					<span>Eventos</span>					
			</a>
			<a href="<?php bloginfo('url' ); ?>/tres-consejos/agenda"  class="tci tci-agenda">
				<span class="fa fa-calendar"></span>
				<span>Agenda</span>
			</a>
			<a href="<?php bloginfo('url' ); ?>/tres-consejos/ayudas-memoria"  class="tci tci-historia">
				<span class="fa fa-history"></span>
				<span>Ayudas Memoria</span>				
			</a>
			<a href="<?php bloginfo('url' ); ?>/tres-consejos/videos"  class="tci tci-video">
				<span class="fa fa-video-camera"></span>
				<span>Videos</span>				
			</a>
			<a href="<?php bloginfo('url' ); ?>/category/tres-consejos/fotos/" class="tci tci-foto">
				<span class="fa fa-camera"></span>
				<span>Fotos</span>				
			</a>
		</div>
	</article>
</section>


<section class="tc-contenido zerogrid">	
	<article class="conten">
		<div class="pagina">
			<?php
				while ( have_posts() ) : the_post();
				//          get_template_part( 'content', 'page' );
				the_content();           
				endwhile;
			?>
		</div>
	</article>
	<aside class="recientes">
		<h2>Tres consejos recientes entradas</h2>		
		<?php include TEMPLATEPATH.'/libs/entradas-tresconsejos.php'; ?>		
	</aside>
</section>

<?php get_footer(); ?>