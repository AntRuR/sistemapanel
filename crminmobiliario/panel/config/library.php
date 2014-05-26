<?php

function render_style(){

	$style['table']    ='style="font-size: 10px !important; border:1px solid #AAA !important;"';
	$style['section']  ='style="font-size: 10px; font-weight: bold; padding: 5px 0; text-align: center;"';
	$style['valor']    ='style="color: #000; padding: 3px 0 3px 5px; width: 170px;"';
	$style['variable'] ='style="width: 90px;"';
	$style['foto']     ='style="background-color: #AAA; display: inline-block; height: 162px; width: 310px;"';
	$style['ficha']    ='style="top:0;"';
	$style['head']    ='style="font-weight:bold;text-decoration:underline;font-size:10px;padding-bottom:10px;"';
	$style['bold']    ='style="font-weight:bold;"';

	$style['line5']=$style['line']	  ='<table width="98%"><tr><td height="5"></td></tr></table>';
	$style['line10']='<table width="98%"><tr><td height="10"></td></tr></table>';
	$style['line15']='<table width="98%"><tr><td height="15"></td></tr></table>';
	$style['line20']='<table width="98%"><tr><td height="20"></td></tr></table>';

	$style['enclosure_open']='<table><tr><td style="border:1px solid #AAA !important;">';
	$style['enclosure_close']='</td></tr></table>';

	return $style;

}

function render_logo($linea){
	$html='';
	return $html;
}

function render_plano($linea){
	$html='';
	return $html;
}

function render_firma($linea){
	$html='';
	return $html;
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

function render_vendedor($linea){

	$telefonos_fijos=$telefonos_moviles=array();

	if($linea['cliente']['telefono']!='')$telefonos_fijos[]=$linea['cliente']['telefono'];
	if($linea['cliente']['telefono_oficina']!='')$telefonos_fijos[]=$linea['cliente']['telefono_oficina'];

	if($linea['cliente']['celular_claro']!='')$telefonos_moviles[]=$linea['cliente']['celular_claro'];
	if($linea['cliente']['celular_movistar']!='')$telefonos_moviles[]=$linea['cliente']['celular_movistar'];
	if($linea['cliente']['nextel']!='')$telefonos_moviles[]=$linea['cliente']['nextel'];

	$telefonos_fijos_string = implode("/ ",$telefonos_fijos);
	$telefonos_moviles_string = implode("/ ",$telefonos_moviles);	

	$style=render_style();

	$html='';
		$html.=$style['enclosure_open'];

	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=1 >";
	
	$html.='<tr><td colspan=4 '.$style['head'].'>DATOS DEL EJECUTIVO DE VENTAS</td></tr>';

	$html.="<tr>
	<td ".$style['variable'].">VENDEDOR</td>
	<td ".$style['valor']." colspan=3>".strtoupper($linea['cliente']['nombre']." ".$linea['cliente']['apellidos'])."</td>
	</tr>";

	$html.="<tr>
	<td ".$style['variable'].">EMAIL</td>
	<td ".$style['valor']." colspan=3>".$linea['cliente']['email']."</td>
	</tr>";

	$html.="<tr>
	<td ".$style['variable'].">TELEFONO</td>
	<td ".$style['valor'].">".$telefonos_fijos_string."</td>
	<td ".$style['variable'].">CELULAR</td>
	<td ".$style['valor'].">".$telefonos_moviles_string."</td>
	</tr>";


	$html.="<tr>
	<td ".$style['variable'].">ATENDIDO POR</td>
	<td ".$style['valor']." colspan=3>".strtoupper($linea['cliente']['nombre']." ".$linea['cliente']['apellidos'])."</td>
	</tr>";

	$html.='</table>';
		$html.=$style['enclosure_close'];

	$html.=$style['line'];

	return $html;	

}

function render_cliente($linea){

	$telefonos_fijos=$telefonos_moviles=array();

	if($linea['usuario']['telefono']!='')$telefonos_fijos[]=$linea['usuario']['telefono'];
	if($linea['usuario']['telefono_oficina']!='')$telefonos_fijos[]=$linea['usuario']['telefono_oficina'];

	if($linea['usuario']['celular_claro']!='')$telefonos_moviles[]=$linea['usuario']['celular_claro'];
	if($linea['usuario']['celular_movistar']!='')$telefonos_moviles[]=$linea['usuario']['celular_movistar'];
	if($linea['usuario']['nextel']!='')$telefonos_moviles[]=$linea['usuario']['nextel'];

	$telefonos_fijos_string = implode("/ ",$telefonos_fijos);
	$telefonos_moviles_string = implode("/ ",$telefonos_moviles);	

	$style=render_style();

	$html='';
		$html.=$style['enclosure_open'];

	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=1 >";
	
	$html.='<tr><td colspan=4 '.$style['head'].'>DATOS DEL CLIENTE</td></tr>';

	$html.="<tr>
	<td ".$style['variable'].">CLIENTE</td>
	<td ".$style['valor']." colspan=3>".strtoupper($linea['usuario']['nombre']." ".$linea['usuario']['apellidos'])."</td>
	</tr>";

	$html.="<tr>
	<td ".$style['variable'].">EMAIL</td>
	<td ".$style['valor']." colspan=3>".$linea['usuario']['email']."</td>
	</tr>";

	$html.="<tr>
	<td ".$style['variable'].">TELEFONO</td>
	<td ".$style['valor'].">".$telefonos_fijos_string."</td>
	<td ".$style['variable'].">CELULAR</td>
	<td ".$style['valor'].">".$telefonos_moviles_string."</td>
	</tr>";

	$html.='</table>';
		$html.=$style['enclosure_close'];

	$html.=$style['line'];

	return $html;	

}

function render_departamentos($producto,$precio){

	$style=render_style();

	$html='';
	$html.=$style['enclosure_open'];	
	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=1 >";

	$html.="<tr>
	<td width=200 ".$style['head'].">DATOS DE LA COTIZACIÓN</td>
	<td width=30 ".$style['head'].">S/.</td>
	<td ".$style['head'].">N DORMITORIOS</td>
	<td ".$style['head'].">TIPO DE VISTA</td>
	<td ".$style['head'].">AREA TECHADA</td>
	<td width=100 ".$style['head'].">AREA TOTAL</td>
	</tr>";

	$html.="<tr>
	<td>DEPARTAMENTO</td>
	<td>".$producto['numero']."</td>
	<td>".$producto['num_rooms']."</td>
	<td></td>
	<td>".$producto['area_construida']."</td>
	<td>".$producto['area_total']."</td>
	</tr>";

	$html.="<tr>
	<td colspan=2></td>
	<td colspan=3 ".$style['bold'].">PRECIO FINAL</td>
	<td ".$style['bold']." align=right>".$producto['pvpromocion']."</td>
	</tr>";	

	// $html.='<tr><td '.$style['section'].' colspan=2><strong>'.$producto['proyecto']['nombre'].' - Departamento '.$producto['nombre'].' '.$producto['numero'].'</strong></td></tr>';

	// $html.='<tr><td colspan=2 style="text-align:center;font-weight:bold;color:#F10102;">'.$producto['item']['nombre'].' - '.$producto['nombre'].' '.$producto['numero'].'</td></tr>';
	// if(trim(strip_tags($producto['ficha']))!=''){
	//$html.='<tr><td>'.$producto['ficha'].'</td></tr>';
	// }
	// $html.='<tr><td colspan=2><strong>Descripción</strong></td></tr>';
	// $html.='<tr><td colspan=2>'.$producto['descripcion2'].'</td></tr>';

	// $html.='<tr><td colspan=2><strong>Acabados</strong></td></tr>';
	// $html.='<tr><td colspan=2>'.$producto['descripcion3'].'</td></tr>';
	// $html.='<tr><td colspan=2><strong>Areas Comunes</strong></td></tr>';
	// $html.='<tr><td colspan=2>'.$producto['descripcion4'].'</td></tr>';

	// $html.='<tr><td width=300>Área Total</td><td>'.$producto['area_total'].'</td></tr>';
	// $html.='<tr><td width=300>Área Construída</td><td>'.$producto['area_construida'].'</td></tr>';

	// // $html.='<tr><td width=300># Garages</td><td>'.$producto['num_garages'].'</td></tr>';
	// $html.='<tr><td width=300># Dormitorios</td><td>'.$producto['num_rooms'].'</td></tr>';
	// $html.='<tr><td width=300># Baños</td><td>'.$producto['num_bathrooms'].'</td></tr>';

	// $html.='<tr><td width=300>Tiene Balcón</td><td>'. (($producto['has_balcon'])?'Si':'No') .'</td></tr>';
	// $html.='<tr><td width=300>Tiene Depósito</td><td>'. (($producto['has_deposito'])?'Si':'No') .'</td></tr>';

	// $html.='<tr><td colspan=2>';

	// // prin($producto['galerias']);
	// // exit();

	// if(sizeof($producto['galerias'])>0)
	// {

	// 	foreach($producto['galerias'] as $t=>$galeria){ //prin($galeria);
	// 	$html.="<table $tableProps >";
	// 	$html.="<td align=center valign=middle style=\"border:1px solid #999 !important;\" colspan=2>".$galeria['nombre']."</td>";
	// 	$ttt=0;
		
	// 	foreach($galeria['fotos'] as $t=>$foto){
	// 		if($ttt==0){ $html.='<tr>'; }
	// 		$html.="<td align=center valign=middle style=\"border:1px solid #999 !important;\"><a href='".$foto['box']."'><img ".$foto['thumb']." /></a></td>";
	// 		if($ttt==1){ $html.='</tr>'; }												
	// 		if($ttt==1){ $ttt=0; } else { $ttt=1; }				
	// 	}
	// 	$html.="</table><br>";
	// 	}

	// }
	// // exit();
	// $html.='</td></tr>';				
	
	$html.='</table>';
	$html.=$style['enclosure_close'];
	$html.=$style['line'];
	
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


function render_total($linea,$suma){

	$style=render_style();

	$html='';
	$html.=$style['enclosure_open'];	
	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=0 >";

	$html.="<tr>
	<td ".$style['head'].">PRECIO FINAL</td>
	<td width=100 ".$style['bold']." align=right>".$suma."</td>
	</tr>";		
	$html.="<tr>
	<td>SEPARACIÓN</td>
	<td align=right>".$linea['separacion']."</td>
	</tr>";		
	$html.="<tr>
	<td>CUOTA INICIAL</td>
	<td align=right>".$linea['cuota_inicial']."</td>
	</tr>";		
	$html.="<tr>
	<td>SALDO A FINANCIAR</td>
	<td align=right>".$linea['saldo_financiar']."</td>
	</tr>";		
				
	$html.='</table>';
	$html.=$style['enclosure_close'];
	$html.=$style['line20'];
	
	return $html;
}


function render_depositos($producto,$precio){

	$style=render_style();

	$html='';
	$html.=$style['enclosure_open'];	
	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=1 >";

	$html.="<tr>
	<td width=200 ".$style['head'].">DEPOSITO</td>
	<td width=30 >".$producto['numero']."</td>
	<td>AREA TECHADA : ".$producto['area']."</td>
	<td width=100 ".$style['bold']." align=right>".$precio."</td>
	</tr>";		
	
	$html.='</table>';
	$html.=$style['enclosure_close'];
	$html.=$style['line'];
	
	return $html;
}




function render_estacionamiento($producto,$precio){

	$style=render_style();

	$html='';
	$html.=$style['enclosure_open'];	
	$html.="<table ".$style['table']." width='650px' cellpadding=0 cellspacing=0 border=1 >";

	$html.="<tr>
	<td width=200 ".$style['head'].">ESTACIONAMIENTO</td>
	<td width=30 >".$producto['numero']."</td>
	<td>AREA TECHADA : ".$producto['area']."</td>
	<td width=100 ".$style['bold']." align=right>".$precio."</td>
	</tr>";		
	
	$html.='</table>';
	$html.=$style['enclosure_close'];
	$html.=$style['line'];

	return $html;

}


