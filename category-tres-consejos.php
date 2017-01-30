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
				<?php  echo do_shortcode("[metaslider id=4329]");  ?>	
			</div>
      </div>
    </div>
</div>

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


<section class="con-general">

  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

           <div class="contenido">
                  <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <div class="date-cat">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php the_time('j F, Y'); ?></div>
                        <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php the_category (' , '); ?></a></div>
                    </div>
                  </div>
                  <div class="thumb">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>              
                  </div>
                  <div class="info"><?php the_excerpt();  ?></div>
            </div>   


          <?php endwhile; ?>
          <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
          <?php else : ?>
          <p><?php _e('Ups!, no hay entradas.'); ?></p>
          <?php endif; ?>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>

            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>  
          </div>        
        </div>      
    </div>
  </div>
  
</section>

<?php get_footer(); ?>