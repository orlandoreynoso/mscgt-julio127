


<!-- Archivo de cabecera global de Wordpress -->
<?php 


/*

Template Name: Categorias Tres(3)

 */

 ?>


<?php get_header(); ?>


<section>

  <div class="zerogrid contenido-general" id="contenido_general">
    <div id="der" class="der">
      <div id="titulo">
          <div class="mapeo"><?php the_breadcrumb(); ?></div>
      </div>

  <div id="responsables">
    <p>Responsables de esta sección:</p>
    <p>MESC del Santuario de Nuestra Señora del Sagrado Corazón.</p>
<p>
Esperamos sus comentarios en el correo: <span>1ptecmolino14@gmail.com</span></p>    
  </div>      

  <div id="descripcion">
    <p>Apreciado visitante:</p>
    <p>El propósito de esta área de la página de los Misioneros del Sagrado Corazón, se enfoca en la necesidad sobre el conocimiento de la Sagrada Escritura; que la mayoría de los seres humanos, manifiestan durante su vida terrenal.</p>
    <p>Asumimos que usted es uno de ellos, por esa razón nos permitimos indicarle que, el contenido de esta área, no pretende establecer una clase teológica de la Santa Biblia y mucho menos una discusión; solamente deseamos motivarlo, a que se tome el tiempo necesario, para conocer las enseñanzas de nuestro Señor; y esperamos, que en un futuro no lejano, pueda poner en práctica lo aprendido; y de esta forma contribuir al engrandecimiento de la acogedora y hermosa casa de Dios en esta tierra (Efesios 2:19); ya que en este momento, el mundo clama por esta acción en particular.</p>
    <img src="<?php echo IMAGES.'/dar-la-vida-por-los-demas.jpg'; ?>">
    <p>Las reflexiones estarán colocadas en su lugar, de lunes a viernes; para el sábado y domingo lo invitamos a visitar el área de las homilías.
Gracias por su visita, a ambos lugares de esta página.</p>
  </div>

<!-- *********************************** -->      
<?php 
if(parent){

    $defaults = array(
        'show_option_all' => '', 
        'show_option_none' => __('No categories'),
        'orderby' => 'name', 
        'order' => 'ASC',
        'style' => 'list',
        'show_count' => 1, 
        'hide_empty' => 0,
        'use_desc_for_title' => 1, 
        'child_of' => 3,
        'feed' => '', 
        'feed_type' => '',
        'feed_image' => '', 
        'exclude' => '',
        'exclude_tree' => '', 
        'current_category' => 0,
        'hierarchical' => true, 
        'title_li' => __( '<span class="tit_cat">Reflexiones</span>' ),
        'hide_title_if_empty' => false,
        'echo' => 1, 
        'depth' => 1,
        'separator' => '<br />',
        'taxonomy' => 'category'
    );
 
 ?>

<div id="listado_cat">

<?php
wp_list_categories($defaults);
//wp_list_categories('child_of=3&hide_empty=0&style=list&show_count=1&sort_by=count&depth=1'); //mostra les categories
?>
</div>
<?php

// echo 'Estoy en reflexiones'; 

}
else{
  echo '<p>.....Ups! algo salio mal, te pedimos que navegues por nuestro menu para buscar lo que necesites.</p>';
}

?>
  

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