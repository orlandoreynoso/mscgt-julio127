<?php 
/*
$month_actually = 3444;
$perpage_actually = 5;
$day = 0; */

//2639: Febrero 2016
//4170: Enero 2017

//$month_actually = 4170; 
$month_actually = 2639;
$perpage_actually = 5;
$day = 0;


$the_query = new WP_Query(create_page($month_actually,$perpage_actually));
	
?>		
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div class="actual col-xs-12 col-md-4">

    <?php 
    $id = get_permalink($month_actually);
    $title = get_the_title($month_actually);
?>

	  	<?php /*
		<a id="titulo_reflexiones" href="<?php bloginfo('url'); ?>/reflexiones/">
		    <div id="name_cat">
		        <h3>Entrar a &raquo;  <?php echo 'Reflexiones' ?> &raquo; <span id="dia"><?php echo dia($day = $day + 1); ?></span></h3>
		    </div>
		    <div id="date_cat">
		        <span class="date">Publicación: <?php the_time('j F, Y'); ?></span>
		    </div>        
		</a>
		*/ ?>

			<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
    		<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
			<div class="label">
				<div class="ic-1">
					<i class="icon-file3 fa fa-file"></i>
					<a href="<?php bloginfo('url'); ?>/reflexiones/" class="cat">Reflexiones</a>					
				</div>
				<div class="ic-2">
					<i class="icon-file2 fa fa-link"></i>				
					<a href="<?php bloginfo('url'); ?>/reflexiones/<?php echo $title; ?>" class="cat"><?php echo $title;  ?></a>					
				</div>
				<div class="ic-3">
					<i class="icon-file4 fa fa-clock-o"></i>
					<span class="dia"><?php echo dia($day = $day + 1); ?></span>
				</div>					
			</div>
			<div class="exe"><?php excerpt('22'); ?>...[<a href="<?php the_permalink(); ?>"> .....</a>]</div>
</div>
<?php endwhile;?>


