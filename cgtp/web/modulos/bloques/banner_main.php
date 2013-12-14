<?php //á

$object=array();

$secc=$SECCIONES[$_GET['sec']];
$filtro_where=$secc['where'];
$filtro_param=$secc['param'];
$filtro_nombre=$secc['nombre'];

/*
$object['p']=array(
			'ids'=>array("name='banner_main'"),
			't'=>'2','w'=>'752','h'=>'245',
			);
*/			
	/*
	$oGrupo['items']= select(
			"id,file,fecha_creacion,url"
			,"banners_fotos_fotos"
			,"where 1 and id_grupo ='".$grupo['id']."'  order by id asc limit 0,100"
			,0
			,array(
				'foto:url'=>'{url}',
				'foto:atributos'=>array('atributos'=>'banfot_imas,{fecha_creacion},{file},'.$object['p']['t'].','.$object['p']['w'].'x'.$object['p']['h'].',1'),
				//'foto:atributos'=>array('atributos'=>'banfot_imas,{fecha_creacion},{file},2,223x118,1'),
				'esquema'=>'foto'
				)	
	*/			
$fotos_home = select(
        array(
		"id"
		,"file"
		,"fecha_creacion"
		,"url"
		)
        ,"banners_fotos_fotos"
        ,"where 1 and id_grupo ='1'  and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
                'carpeta'=>'banfot_imas'
                ,'foto_zoom'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'2'
                                            )
                                        )										
              	 ,'caption'=>'{foto_descripcion}'
              	 ,'href'=>'{url}'
    
              )
        );
		


//prin($fotos_destinos);

//////////////////SLIDESHOW//////////////////


	$SLISHOW=array(
				'label'=>$PARAMS['this'],
				'zoom'=>"752x245",
				'height'=>245,
				'resize'=>"true",
				'overlap'=>"true",
				'thumbnails'=>"false",
					'thumb'=>"120x140",
					'thumb_filas'=>"1",
					'thumb_direccion'=>"horizontal",
				'paused'=>"false",
				'delay'=>"3000",
				'duration'=>"2000",
				'controller'=>"false",
				'efecto'=>"3",			
				'captions'=>"true",			
				'hrefs'=>"false",			
//				'listado'=>array_merge($fotos_paquetes,$fotos_destinos)
				'listado'=>array_merge($fotos_home)
				);
	
	
	$oGrupos[]=web_render_slideshow_preproceso($SLISHOW);	
	
	

	$object=array('items'=>$oGrupos); unset($oGrupos);
	
	$object['panel']='banners_fotos,banners_fotos_fotos';

	$OBJECT[$PARAMS['this']]=$object;
	
	$REMOOZZ=1;	
	$SLIDESHOW=1;
	//$SEXYLIGHTBOX=1;
		
?>