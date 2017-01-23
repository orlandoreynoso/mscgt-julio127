<?php 


$page_actually = 930;
$perpage_actually = 1;
$day = $perpage_actually-1;

$the_query = new WP_Query(create_page($page_actually,$perpage_actually)); 

?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	<div class="diario">
	  <div class="contenido_homilia">
	  	<?php obtener_homilia('Homilias','homilia');  ?>
	  </div>
	</div>
<?php endwhile;?>