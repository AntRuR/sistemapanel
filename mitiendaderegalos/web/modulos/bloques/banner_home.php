<?php //á


$item['nombre']='';

$item['sub_select']= select(
        "id,file,foto_descripcion,fecha_creacion,url"
        ,"publicidad_fotos_fotos"
        ,"where 1 and id_grupo='4' and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
												
                'carpeta'=>'pubfot_imas'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'4'
                                            ,'dimensionado'=>'656x300'
                                            ,'centrado'=>'1'											
                                            )
                                        )										
              	 ,'caption'=>'{foto_descripcion}'
              	 ,'link'=>'{url}'
    
              )			  
        );
		
	
$items[0]=$item;

	$NOOB=array(
			'label'=>$PARAMS['conector'],	
			'width'=>"656",
			'height'=>"300",
			'itemsporpagina'=>"1x1",
			'vacio'=>"aún no hay fotos",
			'titulo'=>"",	
//			'interval'=>"7000",	
			'autoplay'=>"true",//[true,false]
			'mode'=>"horizontal", //[horizontal,vertical]	
			'handles'=>"1"
			);
	
	$NOOB_S=array();
	foreach($items as $ii=>$filas){
	
		$noobst=$NOOB;
		$noobst['label']=$NOOB['label'];
		$noobst['titulo']=$filas['nombre'];
		$noobst['interval']=7000;
		$noobst['items']=$filas['sub_select'];
		$NOOB_S[]=web_render_slider_preproceso($noobst);		
		
	}

	$NOODSLICE[$PARAMS['conector']]=$NOOB_S;

	$REMOOZZ=1;	
	//$SEXYLIGHTBOX=1;
		
?>