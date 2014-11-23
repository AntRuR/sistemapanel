<?php //á

$object=[];

// prin($_GET);

$proyecto=fila(
		"id,nombre,id_grupo,id_subgrupo",
		"productos_items",
		"where id=".$_GET['id'],
		0,
		[
			'name_grupo'=>['dato'=>['nombre','productos_grupos','where id={id_grupo}']],
			'name_subgrupo'=>['dato'=>['nombre','productos_subgrupos','where id={id_subgrupo}']],
		]);

// if($proyecto['id_grupo']=='2'){ //proyectos en ejecucion

// 	$proyecto['grupo']=$proyecto['name_grupo'];

// 	$group_query="id_grupo='".$proyecto['id_grupo']."'";

// } else {

	$proyecto['grupo']=$proyecto['name_grupo']."<br><span>".$proyecto['name_subgrupo'].'</span>';

	$group_query="id_subgrupo='".$proyecto['id_subgrupo']."' and id_grupo='".$proyecto['id_grupo']."'";

// }

// prin($proyecto);

$object['header']=$proyecto['grupo'];
					  
$object['filas']= select(
        "id,fecha_creacion,nombre as titulo,ciudad,fecha"
        ,"productos_items"
        ,"where 1 and $group_query  and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
			'foto'=>array('foto'=>array(
											"file,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,1"
											,"profot_imas"
											,array( 
													 'atributos'=>'4,216x150,0'
											)
									)
						),
			'url'=>array('url'=>array('modulo=items&tab=proyectos&acc=file&id={id}&friendly={titulo}')),
			'esquema'=>'foto,titulo,ciudad,fecha'
			)	   
        );

$object['total']=sizeof($object['filas']);

$object['vacio']='aún no hay fotos en el banner';

// prin($object);

$OBJECT[$PARAMS['this']]=$object;


