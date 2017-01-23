<?php 

/*
Template Name: Principales
 */

 get_header();


?>

<?php /*


<section>

<div class="zerogrid" id="contenido_general">
<div id="der">

  <div id="titulo">
    <div class="mapeo"><?php the_breadcrumb(); ?></div>
  </div>    

  <div id="interiores">
    <?php  echo  'estoy en Principales';   


    global $post;
    echo "pageid: ".$post->ID;

    ?>    

<div class="descripcion_categoria">
    <div id="name_cat">
    </div>    
    <div id="fecha">
      <span class="icon">&raquo;</span>    
      <span class="date"><?php the_time('j F, Y'); ?></span>  
    </div>
</div>

         <?php
          while ( have_posts() ) : the_post();
          the_content();           
          endwhile;
 
?>

  </div>


</div>
<!-- **************************************** -->        
    <div id="iz">
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

*/  ?>

<!-- *********************************************** -->




<section>

  <div class="zerogrid" id="contenido_general">
    <div id="der">
 

      <div id="titulo">
          <div class="mapeo"><?php the_breadcrumb(); ?></div>
      </div>



    <?php  echo  'estoy en Principales';   


    global $post;
    echo "pageid: ".$post->ID;


$perpage_actually = -1;
$page_actually = $post->ID;
//$page_actually = 121321;

$the_query = new WP_Query(create_page($page_actually,$perpage_actually));    

    ?>  


<?php if ( $the_query -> have_posts() ) : ?>



<?php 


  
?>    
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <div id="principales_content">
    <div class="contenido">
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>            
      <p>
        <?php  the_excerpt(); ?>...[<a href="<?php the_permalink(); ?>"> .....</a>]
      </p>
    </div>
  </div>
<?php endwhile;?>





    <!-- div class="pagination">
      <span class="in-left"><?php // next_posts_link('« Entradas antiguas'); ?></span>
      <span class="in-right"><?php // previous_posts_link('Entradas más recientes »'); ?></span>
    </div -->
  

    <div class="pagination"><?php pagination('»', '«'); ?></div>



<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

<!-- **************************************** -->    
    </div>
    <div id="iz">
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


<?php get_footer();  ?>