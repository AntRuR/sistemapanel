<?php

function render_style(){

	$style['table']    ='style="font-size: 14px !important; border-width: 1px !important; border-style: solid !important; border-color: #ccc !important; "';
	$style['section']  ='style="background-color: #A1BD5B; color: #FFF; font-size: 15px; font-weight: bold; padding: 5px 0; text-align: center;"';
	$style['valor']    ='style="color: #000; padding: 3px 0 3px 5px; width: 170px;"';
	$style['variable'] ='style="width: 90px;"';
	$style['foto']     ='style="background-color: #CCC; display: inline-block; height: 162px; width: 310px;"';
	$style['ficha']    ='style="top:0;"';

	return $style;

}

function extract_departamentos($id){

	$product=fila(
	        "id,id_item,id_items_tipo,id_subgrupo,numero,nombre,pvlista,pvpromocion,area_total,area_construida,
	        descripcion,descripcion2,descripcion3,descripcion4,
	        has_balcon,num_rooms,num_bathrooms,
	        id_status,venta_factura,venta_precio,venta_fecha,venta_abono,venta_total_facturas,venta_id_cliente,venta_id_vendedor,codigo,method,fecha_creacion",
	        "productos_items_items",
	        "where id='$id' and visibilidad='1'",
	        0,
	        array(    	
	        	'galerias'=>array('filas'=>array(
	        									'nombre,id',
	        									'productos_fotos',
	        									'where id_tipo="{id_items_tipo}" and visibilidad="1"',
	        									0,
	        									array(
	        										'fotos'=>array('fotos'=>array(
																					"id,file,fecha_creacion|productos_fotos_fotos|where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,100",
																					"profot_imas",
																					array(												 
																					 	   'archivo'=>'1',
																					 	   'thumb'=>'1,260x200,0',
																					 	   'box'=>'2',
																					)        																	
	        																)
	        												)
	        									)
	        								)
	        					  ),
	    		'proyecto'=>array('fila'=>array(
											'nombre',
											'productos_items',
											'where id="{id_item}"',
											0
											)
						 		  )		        	
	        	)        
	        );
	// prin($product);

	return $product;

}


function render_departamentos($producto){

	// prin($producto);
	// exit();

	$style=render_style();

	if(1){
	$html='';
	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=0 >";
	$html.='<tr><td '.$style['section'].' colspan=2><strong>'.$producto['proyecto']['nombre'].' - Departamento '.$producto['nombre'].' '.$producto['numero'].'</strong></td></tr>';

	// $html.='<tr><td colspan=2 style="text-align:center;font-weight:bold;color:#F10102;">'.$producto['item']['nombre'].' - '.$producto['nombre'].' '.$producto['numero'].'</td></tr>';
	// if(trim(strip_tags($producto['ficha']))!=''){
	//$html.='<tr><td>'.$producto['ficha'].'</td></tr>';
	// }
	$html.='<tr><td colspan=2><strong>Descripción</strong></td></tr>';
	$html.='<tr><td colspan=2>'.$producto['descripcion2'].'</td></tr>';

	$html.='<tr><td colspan=2><strong>Acabados</strong></td></tr>';
	$html.='<tr><td colspan=2>'.$producto['descripcion3'].'</td></tr>';
	// $html.='<tr><td colspan=2><strong>Areas Comunes</strong></td></tr>';
	// $html.='<tr><td colspan=2>'.$producto['descripcion4'].'</td></tr>';

	$html.='<tr><td width=100>Área Total</td><td>'.$producto['area_total'].'</td></tr>';
	$html.='<tr><td width=100>Área Construída</td><td>'.$producto['area_construida'].'</td></tr>';

	// $html.='<tr><td width=100># Garages</td><td>'.$producto['num_garages'].'</td></tr>';
	$html.='<tr><td width=100># Dormitorios</td><td>'.$producto['num_rooms'].'</td></tr>';
	$html.='<tr><td width=100># Baños</td><td>'.$producto['num_bathrooms'].'</td></tr>';

	$html.='<tr><td width=100>Tiene Balcón</td><td>'. (($producto['has_balcon'])?'Si':'No') .'</td></tr>';
	$html.='<tr><td width=100>Tiene Depósito</td><td>'. (($producto['has_deposito'])?'Si':'No') .'</td></tr>';

	$html.='<tr><td colspan=2>';

	// prin($producto['galerias']);
	// exit();

	if(sizeof($producto['galerias'])>0)
	{

		foreach($producto['galerias'] as $t=>$galeria){ //prin($galeria);
		$html.="<table $tableProps >";
		$html.="<td align=center valign=middle style=\"border:1px solid #999 !important;\" colspan=2>".$galeria['nombre']."</td>";
		$ttt=0;
		
		foreach($galeria['fotos'] as $t=>$foto){
			if($ttt==0){ $html.='<tr>'; }
			$html.="<td align=center valign=middle style=\"border:1px solid #999 !important;\"><a href='".$foto['box']."'><img ".$foto['thumb']." /></a></td>";
			if($ttt==1){ $html.='</tr>'; }												
			if($ttt==1){ $ttt=0; } else { $ttt=1; }				
		}
		$html.="</table><br>";
		}

	}
	// exit();
	$html.='</td></tr>';				
	$html.='<tr><td height="5" colspan=2></td></tr>';				
	$html.='</table>';
	}
	return $html;
}


function extract_depositos($id){

$product= fila(
        "id,id_item,id_items_estacionamiento_tipo,id_subgrupo,numero,nombre,tipo,precio,area,descripcion,id_status,venta_factura,venta_precio,venta_fecha,venta_abono,venta_total_facturas,venta_id_cliente,venta_id_vendedor,codigo,method,tags,fecha_creacion"
        ,"productos_estacionamientos_items_items"
	    ,"where id='$id' and visibilidad='1'"
        ,0
    	,array(
    		'proyecto'=>array('fila'=>array(
									'nombre',
									'productos_items',
									'where id="{id_item}"',
									0
								)
					  )
    	)         
        );
return $product;

}

function extract_estacionamiento($id){

$product= fila(
        "id,id_item,id_items_deposito_tipo,id_subgrupo,numero,nombre,tipo,precio,area,descripcion,id_status,venta_factura,venta_precio,venta_fecha,venta_abono,venta_total_facturas,venta_id_cliente,venta_id_vendedor,codigo,method,tags,fecha_creacion"
        ,"productos_depositos_items_items"
	    ,"where id='$id' and visibilidad='1'"
        ,0
    	,array(
    		'proyecto'=>array('fila'=>array(
									'nombre',
									'productos_items',
									'where id="{id_item}"',
									0
								)
					  )
    	)           
        );
return $product;

}

function render_depositos($producto){

	$style=render_style();

	if(1){
	$html='';
	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=0 >";
	$html.='<tr><td '.$style['section'].' colspan=2><strong>'.$producto['proyecto']['nombre'].' - Deposito '.$producto['nombre'].' '.$producto['numero'].'</strong></td></tr>';

	$html.='<tr><td colspan=2><strong>Descripción</strong></td></tr>';
	$html.='<tr><td colspan=2>'.$producto['descripcion'].'</td></tr>';

	$html.='<tr><td width=100>Área</td><td>'.$producto['area'].'</td></tr>';
			
	$html.='<tr><td height="5" colspan=2></td></tr>';				
	$html.='</table>';
	}
	return $html;
}


function render_estacionamiento($producto){

	$style=render_style();

	if(1){
	$html='';
	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=0 >";
	$html.='<tr><td '.$style['section'].' colspan=2><strong>'.$producto['proyecto']['nombre'].' - Estacionamiento '.$producto['nombre'].' '.$producto['numero'].'</strong></td></tr>';

	$html.='<tr><td colspan=2><strong>Descripción</strong></td></tr>';
	$html.='<tr><td colspan=2>'.$producto['descripcion'].'</td></tr>';

	$html.='<tr><td width=100>Área</td><td>'.$producto['area'].'</td></tr>';
			
	$html.='<tr><td height="5" colspan=2></td></tr>';				
	$html.='</table>';
	}
	return $html;

}


