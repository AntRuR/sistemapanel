<?php //á

$secc=$SECCIONES[$_GET['sec']];
$filtro_where=$secc['where'];
$filtro_param=$secc['param'];
$filtro_nombre=$secc['nombre'];

$object=array();
// prin($_GET);
$object=web_render_page($_GET['page'],$filtro_where,array('foto_dimension'=>'380x500'));
// prin($object);

$OBJECT[$PARAMS['this']]=$object;

//////////////////HEADER/////////////////////

$HEAD['titulo'] = ucwords(strtolower($object['titulo']))." | ".$COMMON['datos_root']['titulo_web'];

//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
//$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
//$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

