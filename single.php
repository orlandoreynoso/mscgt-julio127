<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>


<!-- ****************Actual******************** -->



<section class="tc-contenido zerogrid"> 


<article class="conten">

  <div id="titulo">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>
  </div>    

  <div id="interiores" class="pagina">
    <?php // echo  'estoy en single';      ?>    


<div class="descripcion_categoria">
    <div id="name_cat">
      <span>Categoria &raquo; </span>
      <a class="cat"><?php the_category (); ?></a>
    </div>    
    <div id="fecha">
      <!--  span class="icon">&raquo;</span -->    
      <span class="date"><?php the_time('j F, Y'); ?></span>  
    </div>
</div>

        <!-- h1><?php //   the_title(); ?></h1 -->
         <?php
          while ( have_posts() ) : the_post();
//          get_template_part( 'content', 'page' );
          the_content();           
          endwhile;
          ?>

  </div>


</article>
<!-- **************************************** -->        
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



<!-- *********************************************** -->


<?php get_footer(); ?>