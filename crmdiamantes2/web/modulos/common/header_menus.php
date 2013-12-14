<?php //á 

$THIS=$PARAMS['this'];

$object=array();

$object['menu']=select("id,nombre",'productos_tipos','where 1 and visibilidad=1 limit 0,100',0,
array(
    'url'=>"index.php?modulo=items&tab=productos&acc=list&gru={id}&friendly={nombre}",
)
);


foreach($object['menu'] as $igm=>$gm){
	$object['menu'][$igm]['submenu']=select(
	array(
		"id",
		"nombre"
	),
	'productos_items',
	'where id_tipo="'.$gm['id'].'" and visibilidad="1" 
	order by calificacion desc 	
	limit 0,100',
	0,
	array(
		'nombre'=>array('str_replace'=>array('INCAPOWER','','{nombre}')),
		'url'=>"index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}",
		'id_grupo'=>'{id}'
	)
	);		
	$gms[]=$gm['id'];
}
$id_tipos=implode(",",$gms);


$object['menu_fotos']=select(
	array(
		"id",
		"nombre",
		"id_tipo as id_grupo",
	),
	'productos_items','where id_tipo in ('.$id_tipos.') and visibilidad="1" order by calificacion desc limit 0,100',
	0,
	array(
		'nombre'=>array('str_replace'=>array('INCAPOWER','','{nombre}')),	
		'foto'=>array('foto'=>array("id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,1",
									"profot_fot",
									array('atributos'=>'4,300x200,0')
				)),
		 'url'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}"))
	)
);


$object['menu'] = web_procesar_menu($object['menu'],"izquierda");

foreach($object['menu'] as $igm=>$gm){
$object['menu'][$igm]['submenu'] = web_procesar_menu($object['menu'][$igm]['submenu'],"izquierda");
}

$object['styles']='header_menus,header_menus2,header_menus3';

$OBJECT[$THIS]=$object;
?>