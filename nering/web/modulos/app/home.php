<?php //á

//////////////////HEADER/////////////////////

$PAGINA=$PAGE[$PARAMS['this']]=web_render_page('bienvenido');

$HEAD['titulo_H1'] = $COMMON['datos_root']['titulo_home'];

$HEAD['titulo'] = $HEAD['titulo_H1'];

//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

?>