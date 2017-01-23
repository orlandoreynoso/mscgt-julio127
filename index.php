<?php 

/*

Template Name: INDEX
Template Post Type: post, page, product

 */

?>


<?php get_header(); ?>


<section>

		<div class="zerogrid contenido-general" id="contenido_general">
			<div id="der" class="der">

			  <div id="titulo">
			    <div class="mapeo"><?php the_breadcrumb(); ?></div>
			  </div>    
			<?php // echo 'Estoy en el index';  ?>
						<div id="interiores">


				    <?php if (have_posts()): while(have_posts()): the_post();  ?>

				    <article class="post resume">
				      <div class="post-title">
				        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				        <small class="meta"><span class="label-fecha"><?php the_time(get_option('date_format')); ?></span> &bull; <span class="label-cat"> Categoría </span> <span class="icon-cat"> &raquo </span>  <?php the_category(', '); ?></small>
				      </div><!-- /header -->

				      <div class="cont-all">
				        <div class="linkit"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>                     
				        <div class="the-content"><?php the_excerpt();  ?></div>
				        <div class="continuar-read"><a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Continuar leyendo &rarr;','apk'); ?></a></div>
				        
				      </div>  

				    </article>


				    <?php endwhile; ?>
				        <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
				    <?php else: ?>

				    <article class="post resume">
				      <div class="post-title">
				        <h2><?php _e('No hay contenidos disponibles','apk' ) ?></h2>
				      </div>

				      <div class="post-content">
				        <p><?php _e('No hay contenidos que correspondan con esta pagina, por favor revizar la busqueda para encontrar lo que desea','apk' ) ?></p>
				        <?php get_search_form(); ?>
				      </div>
				    </article>

				    <?php endif; ?>


						</div><!-- ******  fin de contenido ***** -->

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

<?php get_footer(); ?>