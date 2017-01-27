<div class="titulo--groupings">
	<h3>Agrupaciones</h3>
</div>
<div class="c-agrupaciones">
<?php //  $the_query = new WP_Query(get_agrupaciones(14,20));  	?>
<?php $the_query = new WP_Query(get_agrupaciones(2883,-1));  	?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="list">            
            <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a> 
            <div class="exe"><?php the_excerpt(); ?> </div>
        </div>
<?php endwhile;?>
</div>	