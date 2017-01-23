<?php 


$month_actually = 1305;
$perpage_actually = 20;
$day = 0;

/*
dia 0: para el dia lunes
*/

$the_query = new WP_Query(create_page($month_actually,$perpage_actually));
	
?>		
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div class="nuevas_entradas">
			<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>		
			<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</div>
<?php endwhile;?>

