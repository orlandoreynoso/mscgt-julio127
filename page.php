<?php 

/*
Template Name: Interiores
Template Post Type: post, page, product
 */

 get_header();


?>




<section class="tc-contenido zerogrid"> 

  <article class="conten">

      <div id="titulo">
        <div class="mapeo"><?php the_breadcrumb(); ?></div>
      </div>    

      <div id="interiores" class="pagina">
        <?php /*
         echo  'estoy en page';   


        global $post;
        echo "pageid: ".$post->ID;  */

        ?>    

    <div class="descripcion_categoria">
        <div id="name_cat">
          <!-- span>&nbsp;</span -->
          <!-- a class="cat"><?php the_category (); ?></a -->
        </div>    
        <div id="fecha">
          <span class="icon">&raquo;</span>    
          <span class="date"><?php the_time('j F, Y'); ?></span>  
        </div>
    </div>


            <!-- h1><?php the_title(); ?></h1 -->
             <?php
              while ( have_posts() ) : the_post();
    //          get_template_part( 'content', 'page' );
              the_content();           
              endwhile;
     
    ?>
    <?php // comments_template(); ?>
    <!-- address>Por <?php the_author_posts_link() ?></address -->
      

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





<?php get_footer();  ?>