<?php //á

$object=array();

$object['p']=array(
			'ids'=>array(''),
			't'=>'4','w'=>'547','h'=>'411',
			);
			
$object['settings']=array(
		'label'=>$PARAMS['conector'],	
		'width'	=>$object['p']['w']*1,
		'height'=>$object['p']['h'],
		'itemsporpagina'=>"1x1",
		'vacio'=>"aún no hay fotos",
		'titulo'=>"",	
		'interval'=>"7000",	
		'autoplay'=>"true",//[true,false]
		'mode'=>"horizontal", //[horizontal,vertical]	
		'handles'=>"1",
		'buttons'=>"0",
			'prev'=>"",
			'next'=>"",
			'title_prev'=>"anterior",
			'title_next'=>"siguiente",
		);	
					
foreach($object['p']['ids'] as $ii=>$ID){				

	//$oGrupo['header']=select_fila('nombre','banners_fotos',"where id='".$ID."'");
	$gxupos=select("id","productos_tipos","where visibilidad='1'");
	$Agxupo=array();
	foreach($gxupos as $gxupo){ $Agxupo[]=$gxupo['id']; } 
	
	$oGrupo['items']= select(
			"id,nombre,id_tipo"
			,"productos_items"
			,"where 1 and id_tipo in (".(implode(",",$Agxupo)).") and  visibilidad='1' order by id_tipo asc,id asc limit 0,100"
			,0
			,array(
				//'nombre'=>'{nombre}',
				'subtitulo'=>array('dato'=>array("nombre","productos_tipos","where id='{id_tipo}'")),
				'url'=>array('url'=>array("index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}")),			
				'foto'=>array('foto'=>array("id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,1",
											"profot_fot",
											array('atributos'=>$object['p']['t'].','.$object['p']['w'].'x'.$object['p']['h'].',4')
											)),
				'foto:foto_descripcion'=>'{nombre}',
				'foto:url'=>array('url'=>array("index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}")),
				//'esquema'=>'foto,nombre:h4',
				)				  
			);			
			
	$oGrupo=web_render_Slider_PreProceso2(array_merge($object['settings'],array(
												'label'=>$object['settings']['label']."_".$ii,
												'titulo'=>$item['nombre']
												//'interval'=>'7000',
												)),$oGrupo);
	$oGrupos[]=$oGrupo; unset($oGrupo);
	
}


	$object=array('items'=>$oGrupos); unset($oGrupos);
	
	$object['panel']='productos_items,productos_fotos';

	
	$OBJECT[$PARAMS['this']]=$object;
	
	$REMOOZZ=1;	
	//$SEXYLIGHTBOX=1;
		
?>