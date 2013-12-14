<?php //á 

$THIS=$PARAMS['this'];
$object=array();

if($_GET['acc']=='list' and $_GET['gru']!=''){ 
	$ID_GRUPO=$_GET['gru'];
} elseif($_GET['acc']=='file' and $_GET['id']!=''){ 
	$ID_GRUPO=dato("id_tipo","productos_items","where id='".$_GET['id']."'"); 
}

if($ID_GRUPO){
	
	$object['menu']=select(
		array(
			"id",
			"nombre"
		),
		'productos_items',
		'where id_tipo="'.$ID_GRUPO.'" and visibilidad="1" 
		order by calificacion desc 
		limit 0,100',
		0,
		array(
			'nombre'=>array('str_replace'=>array('INCAPOWER','','{nombre}')),	
			'url'=>"index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}",
		)
	);
	$object['menu']=array_merge(
								array(
									array('nombre'=>'INCAPOWER:')
								),
								$object['menu']);

	
	$object['menu'] = web_procesar_menu($object['menu'],"izquierda");

}

$OBJECT[$THIS]=$object;
?>