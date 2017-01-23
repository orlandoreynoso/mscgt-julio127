<?php 
/**
*  $long es una variable para indicar de cuantos caracteres de
*   longitud queremos nuestro extracto
*/
function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)."";
echo $excerpt;
}
$more_strings = array('Leer mas…','Sigue leyendo…', '¡Espera! Hay mas…', 'Leer el resto del artículo…');
?>