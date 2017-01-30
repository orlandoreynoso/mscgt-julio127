<?php 
/*
Template Name: Categoria Tres Consejos
*/
?>
<?php get_header(); ?>

<div class="slide">
    <div class="row">
      <div class="col-md-12">
			<div>
				<?php // if ( function_exists( 'easingslider' ) ) { easingslider( 1426 ); } ?>
				<?php  echo do_shortcode("[metaslider id=2725]");  ?>	
			</div>
      </div>
    </div>
</div>

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
			<a class="tci tci-evento"  href="<?php bloginfo('url' ); ?>/category/tres-consejos/eventos/">
					<span class="fa fa-calendar-check-o"></span>
					<span>Eventos</span>					
			</a>
			<a href="<?php bloginfo('url' ); ?>/category/tres-consejos/agenda/"  class="tci tci-agenda">
				<span class="fa fa-calendar"></span>
				<span>Agenda</span>
			</a>
			<a href="<?php bloginfo('url' ); ?>/category/tres-consejos/ayudas-memoria/"  class="tci tci-historia">
				<span class="fa fa-history"></span>
				<span>Ayudas Memoria</span>				
			</a>
			<a href="<?php bloginfo('url' ); ?>/category/tres-consejos/videos/"  class="tci tci-video">
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

<!-- *********************************** -->      
    <?php // echo  'estoy en HOOOOME, para el blog';      ?>  
    
<!-- Título de categoría -->
<!-- h2><?php // single_cat_title(); ?></h2 -->
<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>



    <?php while ( have_posts() ) : the_post(); ?>

<div class="entrada-noticias pagina">

 <div class="contenido">
		<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>      	
		<div class="descripcion_categoria">
		    <div id="name_cat">
		      <span>Categoria &raquo; </span>
		      <a class="cat"><?php the_category (','); ?></a>
		    </div>    
		    <div id="fecha">
		      <!--  span class="icon">&raquo;</span -->    
		      <span class="date"><?php the_time('j F, Y'); ?></span>  
		    </div>
		</div>

		<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
		<div id="info"><?php the_excerpt();  ?></div>
  </div>

   
</div>

    <?php endwhile; ?>

                      <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
<?php /*otra paginacion
    <div class="pagination">
      <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
      <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
    </div>
*/ ?>    
  


<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

<!-- **************************************** -->    
    </article>

  <aside class="recientes">
        <div id="entradas">
          <div id="titulo_entradas">
            <h3>Entradas recientes</h3>
          </div>

          <div id="recientes">
            <?php get_sidebar(); ?>
          </div>  
        </div>
    </div>
  </aside>
       

  
</section>

<?php get_footer(); ?>