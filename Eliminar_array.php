<?php
$colores =array("amarillo","rojo","verde","azul","negro");
$eliminar_color = "verde";
$valor = array_search($eliminar_color,$colores);

if($valor!==false){
unset($colores[$valor]);
}

print_r($colores);
?>