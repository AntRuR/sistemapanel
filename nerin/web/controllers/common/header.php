<?php //á

$THIS=$PARAMS['this'];

$object=[];

/*
$object['archivos']= fila(
		"id,nombre,titulo,fichero,fecha_creacion,url as link,dimensiones"
		,"banners"
		,"where 1 and  visibilidad='1' and  nombre='cabecera' $filtro_where "
		,0
		,array(
				'get_archivo'=>array('get_archivo'=>array('carpeta'=>'ban_imas','fecha'=>'{fecha_creacion}','file'=>'{fichero}'))
			  )
		);
*/		
	

// $object['menu'] = web_procesar_menu($object['menu'],"izquierda");

//$object['menu'] = web_re_procesar_menu($object['menu'],'f');


$OBJECT[$THIS]=$object;