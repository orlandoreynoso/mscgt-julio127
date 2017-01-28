<?php 

$month_actually = 3856;
$perpage_actually = 3;
$day = 0;

/*
dia 0: para el dia lunes
*/

$the_query = new WP_Query(create_page($month_actually,$perpage_actually));
	
?>		
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div id="previo_reflexiones">
	  <div class="contenido">
		  	<h2></h2>
	  	<?php // obtener_reflexion('Reflexiones:','reflexiones','dia');  ?>
		<a id="titulo_reflexiones" href="<?php bloginfo('url'); ?>/reflexiones/">
		    <div id="name_cat">
		        <h3><?php echo 'Reflexiones' ?> &raquo; <span id="dia"><?php echo dia($day = $day + 1); ?></span></h3>
		        <!-- h3><?php the_category(); ?></h3 -->
		    </div>
		    <div id="date_cat">
		        <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
		    </div>        
		</a>
		  <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		  <!-- h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2 -->
		  <p>
		    <?php excerpt('22'); ?>...[<a href="<?php the_permalink(); ?>"> .....</a>]
		  </p>
		</div>
	</div>
<?php endwhile;?>

