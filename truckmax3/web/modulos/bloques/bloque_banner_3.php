<?php //á


$item['sub_select'] = select(
        array(
		"id"
		,"file"
		,"foto_descripcion"
		,"fecha_creacion"
		,"url as link"
		)
        ,"banners_fotos_fotos"
        ,"where 1 and id_grupo='2' and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
        	               
                'carpeta'=>'banfot_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'206x122'
                ,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            ,'centrado'=>'{centrado}'
                                            )
                                        )
				,'link'=>array('url_externa'=>array('link'=>'{link}'))																	
										              	        
              )			  
        );


$items[0]=$item;
//prin($items[0]['sub_select']);		
		
						
	$NOOB=array(
			'label'=>$PARAMS['conector'],	
			'width'=>"711",
			'height'=>"138",
			'itemsporpagina'=>"3x1",
			'vacio'=>"aún no hay fotos",
			'titulo'=>"",	
//			'interval'=>"7000",	
			'autoplay'=>"true",//[true,false]
			'mode'=>"horizontal", //[horizontal,vertical]	
			//'buttons'=>"1"
			);
	
	$NOOB_S=array();
	foreach($items as $ii=>$filas){
	
		$noobst=$NOOB;
		$noobst['label']=$NOOB['label'];
		$noobst['titulo']=$filas['nombre'];
		$noobst['interval']=3000;
		$noobst['items']=$filas['sub_select'];
		$NOOB_S[]=web_render_slider_preproceso($noobst);		
		
	}

	$NOODSLICE[$PARAMS['conector']]=$NOOB_S;

	$REMOOZZ=1;	
	//$SEXYLIGHTBOX=1;
		
?>