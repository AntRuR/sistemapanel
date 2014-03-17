<?php


function extract_departamentos($id){

	$product=fila(
	        "id,id_item,id_items_tipo,id_subgrupo,numero,nombre,pvlista,pvpromocion,area_total,area_construida,
	        descripcion,descripcion2,descripcion3,descripcion4,
	        has_balcon,num_rooms,num_bathrooms,
	        id_status,venta_factura,venta_precio,venta_fecha,venta_abono,venta_total_facturas,venta_id_cliente,venta_id_vendedor,codigo,method,tags,fecha_creacion",
	        "productos_items_items",
	        "where id='$id' and visibilidad='1'",
	        0,
	        array(    	
	        	'galerias'=>array('fila'=>array(
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
																					 	   'thumb'=>'3,260x200,0',
																					 	   'box'=>'4',
																					)        																	
	        																)
	        												)
	        									)
	        								)
	        					  )
	        	)
	        );

	//prin($product);

	return $product;

}

function render_departamentos($producto){

	//prin($producto);

	if(1){
	$html='';
	$html.="<table width='650px' cellpadding=0 cellspacing=0 border=0  >";
	// $html.='<tr><td colspan=2 style="text-align:center;font-weight:bold;color:#F10102;">'.$producto['item']['nombre'].' - '.$producto['nombre'].' '.$producto['numero'].'</td></tr>';
	// if(trim(strip_tags($producto['ficha']))!=''){
	//$html.='<tr><td>'.$producto['ficha'].'</td></tr>';
	// }
	$html.='<tr><td colspan=2><strong>Descripción</strong></td></tr>';
	$html.='<tr><td colspan=2>'.$producto['descripcion2	'].'</td></tr>';
	$html.='<tr><td colspan=2><strong>Acabados</strong></td></tr>';
	$html.='<tr><td colspan=2>'.$producto['descripcion3'].'</td></tr>';
	$html.='<tr><td colspan=2><strong>Areas Comunes</strong></td></tr>';
	$html.='<tr><td colspan=2>'.$producto['descripcion4'].'</td></tr>';

	$html.='<tr><td width=100>Área Total</td><td>'.$producto['area_total'].'</td></tr>';
	$html.='<tr><td width=100>Área Construída</td><td>'.$producto['area_construida'].'</td></tr>';

	$html.='<tr><td width=100># Garages</td><td>'.$producto['num_garages'].'</td></tr>';
	$html.='<tr><td width=100># Dormitorios</td><td>'.$producto['num_rooms'].'</td></tr>';
	$html.='<tr><td width=100># Baños</td><td>'.$producto['num_bathrooms'].'</td></tr>';

	$html.='<tr><td width=100>Tiene Balcón</td><td>'. (($producto['has_balcon'])?'Si':'No') .'</td></tr>';
	$html.='<tr><td width=100>Tiene Depósito</td><td>'. (($producto['has_deposito'])?'Si':'No') .'</td></tr>';

	$html.='<tr><td colspan=2>';
	// prin($galerias);
	if(sizeof($galerias)>0){
		foreach($producto['galerias'] as $t=>$galeria){
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
	$html.='</td></tr>';				
	$html.='<tr><td height="5" colspan=2></td></tr>';				
	$html.='</table>';
	}
	return $html;
}


function extract_depositos($id){

	return;

}

function render_depositos($array){

	return "depo";
}

function extract_estacionamiento($id){

	return;

}

function render_estacionamiento($array){

	return "estacionamiento";
}


