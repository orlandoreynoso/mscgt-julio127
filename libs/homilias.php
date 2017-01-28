
<?php 

$page_actually = 930;
$perpage_actually = 1;
$day = $perpage_actually-1;

$the_query = new WP_Query(create_page($page_actually,$perpage_actually)); 

?>
<div class="actual">
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	  	<?php // obtener_homilia('Homilias','homilia',$page_actually);  ?>

    <?php 

    $id = get_permalink($pageid);
    $title = get_the_title($pageid);
    $pageid;
    
    ?>   

    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
    <div class="label"><i class="icon-file fa fa-file"></i><a href="<?php the_permalink(); ?>" class="cat"><?php the_title();  ?></a></div>
    <div class="exe"><?php the_excerpt(); ?> </div>

<?php endwhile;?>
</div>

