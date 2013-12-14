<?php //á

$object=array();
/**
 * MENUS
 */

$menus=select(
			"nombre as label,id,';' as onclick",
			"productos_fotos_tipos",
			"where 1",
			0
			);

$menusA=array();

$menusA[]=array(
		'label'   =>'Descripcion',
		'onclick' =>';',
		'id'      =>'0',
		'default' =>'1'
		);


foreach($menus as $menu)
	$menusA[]=$menu;


$menus=$menusA;


//$menus[0]['default']=1;


/**
 * HEADER
 */
$header=array(
				'nombre'=>'NOMBRE DEL PROYECTO'
			);


//$pre_object['menu']=web_procesar_menu($menus);	


foreach($menus as $ii=>$menu){

	$pre_object =array();
	$items      =array();
	$objeto_grupo=array();

/**
 * SETTINGS
 */
$settings=array(
		'label'          =>$PARAMS['conector'].'_'.$ii,	
		'width'          =>"290",
		'height'         =>"250",
		'itemsporpagina' =>"2x3",
		'vacio'          =>"aún no hay fotos",
		'titulo'         =>"",	
		'interval'       =>"7000",	
		'autoplay'       =>"false",//[true,false]
		'mode'           =>"horizontal",//[horizontal,vertical]
		//'handles'      =>"0",
		'buttons'        =>"1",
		'prev'           =>"",
		'next'           =>""
		);

											// "id,file,foto_descripcion as caption,fecha_creacion,id_tipo|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,8"
	$fotos=select(
				  "file,fecha_creacion",
				  "productos_fotos",
				  "where id_item=".$_GET['id']." and id_tipo=".$menu['id']." and visibilidad=1 order by id desc limit 0,100"
				  ,0
				  ,array(
				  	'atributos'=>array('get_atributos'=>array(
															'carpeta'      =>'profot_imas',
															'fecha'        =>'{fecha_creacion}',
															'file'         =>'{file}',
															'tamano'       =>'3',
															'dimensionado' =>'140x80',
															'centrado'     =>0
				  										)
				  						)
				  		)
				  );	

	$items['items']=array();
	foreach($fotos as $foto){
		$items['items'][]=array(
						'foto'=>$foto,
						'esquema'=>'foto,label,titulo,ciudad,fecha'
						);
		$items['items'][]=array(
						'foto'=>$foto,
						'esquema'=>'foto,label,titulo,ciudad,fecha'
						);
		$items['items'][]=array(
						'foto'=>$foto,
						'esquema'=>'foto,label,titulo,ciudad,fecha'
						);
		$items['items'][]=array(
						'foto'=>$foto,
						'esquema'=>'foto,label,titulo,ciudad,fecha'
						);
		$items['items'][]=array(
						'foto'=>$foto,
						'esquema'=>'foto,label,titulo,ciudad,fecha'
						);		
	}

	// prin($items['items']);

	// $items['items']= select(
	//         "id,
	//         fecha_creacion,
	//         nombre as titulo,
	//         ciudad,
	//         fecha,
	//         'Nombre del Proyecto' as label
	//         "
	//         ,"productos_items"
	//         ,"where 1 and id_subgrupo='".$menu['id']."' and  visibilidad='1' order by id asc limit 0,100"
	//         //,"where 1 and id_grupo='1' and visibilidad='1' order by id asc limit 0,100"
	//         ,0
	// 		,array(
	// 			'foto'=>array('foto'=>array(
	// 											"file,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,1"
	// 											,"profot_imas"
	// 											,array( 
	// 													 'atributos'=>'3,158x174,0'
	// 											)
	// 									)
	// 						),
	// 			'url'=>array('url'=>array('modulo=items&tab=productos&acc=file&id={id}&friendly={titulo}')),
	// 			'esquema'=>'foto,label,titulo,ciudad,fecha'
	// 			)	   
	//         );


	// prin($items);


		$objeto_grupo[]=$items;


		foreach($objeto_grupo as &$item){
			$item=web_render_Slider_PreProceso2(array_merge($settings,array(
													'label'=>$settings['label'],
													'titulo'=>$item['nombre']
													//'interval'=>'7000',
													)),$item);
		}



		unset($item);
						

		$objetos_grupo[$menu['id']]=$objeto_grupo;

	}


	$OBJECT[$PARAMS['this']] = array(
								'header' =>$header,
								'menu'   =>web_procesar_menu($menus),
								'tabs'   =>$objetos_grupo
								);

	
	$REMOOZZ=1;	
	//$SEXYLIGHTBOX=1;


