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

/*
dia 0: para el dia lunes
*/
/*
echo '<p>*****</p>';
$viri = get_query_var('name');
echo $viri;
echo '<p> >>>> </p>';
global $wp_query;
$thePostID = $wp_query->post->ID;
$postSlug = $wp_query->post->post_name;
echo $thePostID;
echo '<p>- - >> '.$postSlug.'</p>'; */
?>
<?php // Muestra todoas la páginas con su url wp_list_pages( array( 'title_li' => '' ) ); ?>
<ul>
    <?php
    global $id;
    wp_list_pages( array(
        'title_li'    => '',
        'child_of'    => $month_actually,
        'show_date'   => '',
        'date_format' => $date_format,
        'sort_order' => 'desc'
    ) );
    ?>
</ul>
<?php





$the_query = new WP_Query(create_page($month_actually,$perpage_actually));
	
?>		
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div class="actual col-xs-12 col-md-4">

    <?php 
/*--- Esto es para ver en que página estamos */
/*

global $wp_query;
$thePostID = $wp_query->post->ID;
$postSlug = $wp_query->post->post_name;
echo $thePostID;
echo '<p>- - >> '.$postSlug.'</p>';
*/

    $id = get_permalink($month_actually);
    $title = get_the_title($month_actually);
	echo $pageid;
/* == Este es la info de uno de sus hijos ---*/
/*
	$variable = get_the_ID(); 
	echo $variable;
    ?>   
	<p>Número o ID de la entrada: <?php the_ID(); ?></p>    
*/
?>
<?php  /* si sirve
	  	echo '<pre>';
  		var_dump($the_query);
		echo '<p>--</p>';  	
		$tu	=  $the_query["query"]["post_parent"];
		echo $tu;
		echo 'bli----bli';  */
 ?>
	  	<?php 
//	  		date_default_timezone_set('UTC');
	  		//echo  dia($day = $day + 1);
	  		//$hoy = getdate();	
//	  		echo '<pre>';
	  		//var_dump($hoy);
//			echo $hoy["weekday"];

	  	/* si sirve tambien 
			echo '--';
			$fechi = date('N');
			$hoy = dia($fechi-1);
			echo $hoy.'  ble';
*/
	  	?>
	  	<?php // obtener_reflexion('Reflexiones:','reflexiones','dia');  ?>
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


<?php echo current_time( 'timestamp' ); ?>

			<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
    		<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
			<div class="label"><i class="icon-file fa fa-file"></i>
				<a href="<?php bloginfo('url'); ?>/reflexiones/" class="cat">Reflexiones</a> >>
				<a href="<?php bloginfo('url'); ?>/reflexiones/<?php echo $title; ?>" class="cat"><?php echo $title;  ?></a>				
			</div>
			<div class="exe"><?php excerpt('22'); ?>...[<a href="<?php the_permalink(); ?>"> .....</a>]</div>
</div>
<?php endwhile;?>


