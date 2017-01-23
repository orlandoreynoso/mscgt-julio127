


<!-- Archivo de cabecera global de Wordpress -->
<?php 


/*

Template Name: Categorias Cuatro(4)

 */

 ?>


<?php get_header(); ?>


<section>

  <div class="zerogrid contenido-general" id="contenido_general">
    <div id="der" class="der">
      <div id="titulo">
          <div class="mapeo"><?php the_breadcrumb(); ?></div>
      </div>
<!-- *********************************** -->      
    <?php  echo  'estoy en category No. 4';      ?>  
    
<!-- Título de categoría -->
<!-- h2><?php // single_cat_title(); ?></h2 -->
<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>



    <?php while ( have_posts() ) : the_post(); ?>

<div class="entrada-noticias">

  <div class="fecha">
    <span class="label1"><?php the_time('j  '); ?></span> de
    <span class="label2"><?php the_time('F '); ?></span>
    <span class="label2"><?php the_time('Y '); ?></span>
  </div>

  <div class="contenido">
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <div class="con">
        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <div id="info"><?php the_excerpt();  ?></div>
      </div>      
  </div>

   
</div>

    <?php endwhile; ?>



    <div class="pagination">
      <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
      <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
    </div>
  


<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

<!-- **************************************** -->    
    </div>
    <div id="iz" class="iz">
        <div id="entradas">
          <div id="titulo_entradas">
            <h3>Entradas recientes</h3>
          </div>

          <div id="recientes">
            <?php get_sidebar(); ?>
          </div>  
        </div>
    </div>
    
       
  </div>
  
</section>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>