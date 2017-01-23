<?php 
/*
Template Name: HOME
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>



<section class="tc-contenido zerogrid">

  <article class="conten">
      <div id="titulo">
          <div class="mapeo"><?php the_breadcrumb(); ?></div>
      </div>
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