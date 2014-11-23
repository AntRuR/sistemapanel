<?php //á

$object=[];

$object['header']='PROYECTOS EN EJECUCIÓN';
					  
$object['filas']= select(
        "id,fecha_creacion,nombre as titulo,ciudad,fecha"
        ,"productos_items"
        ,"where 1 and id_grupo='2' and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
			'foto'=>array('foto'=>array(
											"file,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,1"
											,"profot_imas"
											,array( 
													 'atributos'=>'4,216x129,0'
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


