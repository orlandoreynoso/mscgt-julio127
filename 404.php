<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>


<!-- ****************Actual******************** -->



<section>

<div class="zerogrid" id="contenido_general">
<div id="der">

  <div id="titulo">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>
  </div>    

  <div id="interiores">
    <?php // echo  'estoy en single';      ?>    


<div class="descripcion_categoria">
    <div id="name_cat">
      <span>Categoria &raquo; </span>
      <a class="cat"><?php the_category (); ?></a>
    </div>    
    <div id="fecha">
      <span class="icon">&raquo;</span>    
      <span class="date"><?php the_time('j F, Y'); ?></span>  
    </div>
</div>

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

  </div>


</div>
<!-- **************************************** -->        
    <div id="iz">
        <div id="entradas">
          <div id="titulo_entradas">
            <h3>Entradas recientes</h3>
          </div>

          <div id="recientes">
            <?php get_sidebar('2'); ?>
          </div>  
        </div>
    </div>
    
       
  </div>
  
</section>



<!-- *********************************************** -->


<?php get_footer(); ?>