<?php //á

$object=array();

$object['header']=array(
						'nombre'=>'PROYECTOS EN EJECUCIÓN'
					  );

// $object['items']= select(
//         "id,file,fecha_creacion,url,foto_descripcion as titulo"
//         ,"banners_fotos_fotos"
//         ,"where 1 and id_grupo='1' and  visibilidad='1' order by id asc limit 0,100"
//         ,0
// 		,array(
// 			'foto:url'=>'{url}',
// 			'foto:atributos'=>array('atributos'=>'banfot_imas,{fecha_creacion},{file},2,200x150,1'),
// 			'esquema'=>'titulo,foto',
// 			'file'=>'null'
// 			)	   
//         );


// var_dump($object['items'][0]);


$object['items']= select(
        "id,fecha_creacion,nombre as titulo,ciudad,fecha,'Nombre del Proyecto' as label"
        ,"productos_items"
        ,"where 1 and id_grupo='2' and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
			'foto'=>array('foto'=>array(
											"file,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,1"
											,"profot_imas"
											,array( 
													 'atributos'=>'3,216x235,0'
											)
									)
						),
			'url'=>array('url'=>array('modulo=items&tab=productos&acc=file&id={id}&friendly={titulo}')),
			'esquema'=>'foto,label,titulo,ciudad,fecha'
			)	   
        );


	//prin($object['items']);


	$object['grupos'][]=$object;
			
						
	$object['settings']=array(
			'label'=>$PARAMS['conector'],	
			'width'=>"320",
			'height'=>"328",
			'itemsporpagina'=>"1x1",
			'vacio'=>"aún no hay fotos",
			'titulo'=>"",	
			'interval'=>"7000",	
			'autoplay'=>"true",//[true,false]
			'mode'=>"horizontal", //[horizontal,vertical]	
			//'handles'=>"0",
			'buttons'=>"1",
				'prev'=>"",
				'next'=>""
			);
	

	foreach($object['grupos'] as &$item){
		$item=web_render_Slider_PreProceso2(array_merge($object['settings'],array(
												'label'=>$object['settings']['label'],
												'titulo'=>$item['nombre']
												//'interval'=>'7000',
												)),$item);
	}
	unset($item);

	//prin($object['grupos']);

	$OBJECT[$PARAMS['this']]=$object['grupos'];

	
	$REMOOZZ=1;	
	//$SEXYLIGHTBOX=1;





