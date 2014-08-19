<?php //á

$COMMON['sub_menu_show']=1;

//prin($rubros);
		
//$COMMON['sub_menu']

if($_GET['gru']=='0'){

	$FILTRO = " and ver_home='1' ";
	$ORDEN	= " order by relevancia desc, id asc limit 0,4 ";
	$VACIO	= "No hay ningun producto portada";
	$TITULO = "Portada";
	$PORPAG = 20;
	$ENLPAG = "index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&gru=0&pag=";	

}
/* CATEGORIA */
elseif(!empty($_GET['gru'])) {

	if($_GET['gru']!='1'){
	
		$FILTRO = " and ver_rubro='1' and id_grupo='".$_GET['gru']."' ";
		$ORDEN	= " order by relevancia desc, id asc limit 0,20 ";
		$VACIO	= "No hay ningun producto en la categoría <b>".$TITULO."</b>";
		$TITULO = select_dato("nombre","productos_subgrupos","where id='".$_GET['gru']."'");
		$PORPAG = 20;
		$ENLPAG = "index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&gru=".$_GET['gru']."&friendly=".$TITULO."&pag=";	

	} else {

		$PAGINA = select_fila(
			"id,nombre as titulo,texto,foto,fecha_creacion"
			,"productos_grupos"
			,"where id='".$_GET['gru']."' and  visibilidad='1' order by nombre asc limit 0,100"
			,0
			,array(
							   
					'carpeta'=>'progru_imas'
					,'tamano'=>'2'
					,'dimensionado'=>'400x400'
					//,'centrado'=>'1'
					,'get_atributos'=>array('get_atributos'=>array(
												'carpeta'=>'{carpeta}'
												,'fecha'=>'{fecha_creacion}'
												,'file'=>'{foto}'
												,'tamano'=>'{tamano}'
												,'dimensionado'=>'{dimensionado}'
												//,'centrado'=>'{centrado}'
												)
											)
				  )
				  
			);
			
			
	}

}

if($_GET['gru']!='1'){
	
	$grupos = select(
			"id,nombre"
			,"productos_subgrupos"
			,"where 1 and  visibilidad='1' $FILTRO 
			and (SELECT COUNT(*) FROM productos_items WHERE id_subgrupo=productos_subgrupos.id and  visibilidad='1' )>0
			$ORDEN"
			,0
			,array(
				'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=productos&acc=list&gru={id}&friendly={nombre}")),
				'sub_grupos'=>array('sub_select'=>array(
											'campos'=>"id,nombre"
											,'tabla' =>"productos_filtros"
											,'donde' =>"where id_subgrupo='{id}' and visibilidad='1' order by nombre asc limit 0,100"
											,'debug' =>0
											,'opciones'=>array(
												'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=productos&acc=list&fil=grupos&val={id}&friendly={nombre}"))		
												)
											)
										),      	    
				 
				'productos'=>array('sub_select'=>array(
											'campos'=>"id,id_grupo,id_subgrupo,id_filtro,nombre,marca,descripcion,precio,moneda"
											,'tabla' =>"productos_items"
											,'donde' =>"where id_subgrupo='{id}' and visibilidad='1' order by nombre asc limit 0,100"
											,'debug' =>0
											,'opciones'=>array(
												//'precio'=>array('formato_moneda'=>array('simbolo'=>'S/.','numero'=>'{precio}'))										
												'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}"))												
												,'foto'=>array('sub_foto'=>array(
													"id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,1"
													,"profot_imas"
													,array( 
															 'get_atributos'=>'2,150x150,1'
															 ,'archivo'=>'3'
															)
														)
													)
												/*,'precios'=>array('sub_select'=>array(
													'campos'=>"id,cantidad,precio"
													,'tabla' =>"productos_precios"
													,'donde' =>"where id_item='{id}' and visibilidad='1' and cantidad='1' order by id asc limit 0,1"
														)
													)											
												*/	 
												)
											)
										)      	    
		
		
				 )			 
		  
			);
	
	
			
		$NOOB=array(
				'label'=>$PARAMS['conector'],	
				'width'=>"662",
				'height'=>"240",
				'inter_col'=>"7",
				'itemsporpagina'=>"4x1",
				'vacio'=>"aún no hay productos",
				'titulo'=>"",	
	//			'interval'=>"7000",	
				'autoplay'=>"false",//[true,false]
				'mode'=>"horizontal", //[horizontal,vertical]	
				'buttons'=>"1"
				);	
	
		$REMOOZZ=1;	
		
		$grupos2 = array();
		
	foreach($grupos as $ii=>$grupo){
		foreach($grupo['productos'] as $oo=>$LIS){
		
			$grupos[$ii]['productos'][$oo]['precios']=render_precios(array('cambio'=>array(
																						'compra'=>$COMMON['variables']['dolar_compra']
																						,'venta'=>$COMMON['variables']['dolar_venta']																						
																						),'precio'=>$LIS['precio'],'moneda'=>$LIS['moneda']));
			//prin($LISTA['filas'][$ii]['precios']);	
			$grupos[$ii]['productos'][$oo]['precios_soles']=$grupos[$ii]['productos'][$oo]['precios']['soles'];

			$grupos[$ii]['productos'][$oo]['tiene_precio']=($LIS['precio']!='S/.' and $LIS['precio']!='S/.0.00' and $LIS['precio']!='0' and $LIS['precio']!='')?1:0;
//			prin($grupos[$ii]['productos'][$oo]['precios']);
			if($_SESSION['login']['status'] or 1){
				$grupos[$ii]['productos'][$oo]['consultar']=' href="'.$LIS['link'].'#consulta" ';
			} else {
				$grupos[$ii]['productos'][$oo]['consultar']=' href="#" onclick="javascript:if(confirm(\'¿Desea antes registrarse?\')){ location.href=\''.$SERVER['BASE'].'index.php?modulo=formularios&tab=login&redir='.$LIS['link'].'&rediranchor=consulta\'; } else { location.href=\''.$SERVER['BASE'].''.$LIS['link'].'#consulta\'; } return false; " ';
			}	
		
		}
				
		$grupo['menu']=web_procesar_menu(array(
							array(
								'url'=>'index.php?modulo=items&tab=productos&acc=list&gru='.$grupo['id'].'&friendly='.$grupo['nombre']
								,'label'=>$grupo['nombre']	
								,'selected'=>1
							)													
						));
	
		$noobst=$NOOB;
		$noobst['label']=$NOOB['label'].'_'.$ii;
		$noobst['titulo']=$filas['nombre'];
		$noobst['interval']=$ii*1000+7000;
		$noobst['items']=$grupos[$ii]['productos'];
		
		$grupo['NOOB']=web_render_slider_preproceso($noobst);

		$grupos2[]=$grupo;
		
		unset($noobst);
		
	}

}

if($_GET['gru']!='1'){
	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=rubros&acc=list&gru=0");
}


/**********    POST QUERY    ************/

//prin($LISTA['filas']);



//prin($LISTA['filas']);

/****************************************************/

$NOMBRE_RUBRO=select_dato("nombre","productos_grupos","where id='".$_GET['gru']."'");

//prin($grupos2);		

//$LISTA['titulo'] = "Mi Tienda de Regalos";

//$LISTA['menu'] = $MENU_FILTROS;


$LISTADO[$PARAMS['this']]=$grupos2;


$PAGES[$PARAMS['this']]=$PAGINA;


$KEYWORDS['A']=array($LISTA['titulo'],$COMMON['datos_root']['titulo_web']);

		
//////////////////HEADER/////////////////////

$HEAD['titulo_H1'] = title_friendly($NOMBRE_RUBRO);

$HEAD['titulo'] =  title_web($HEAD['titulo_H1'],$COMMON['datos_root']['titulo_web']);

//$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
$HEAD['meta_keywords'] = web_procesar_keywords($HEAD['meta_keywords']." ".implode(",",array_merge($KEYWORDS['A'],$KEYWORDS['B'],$KEYWORDS['C'])));

//$HEAD['meta_descripcion'] = web_procesar_description( implode(" ",array_merge($KEYWORDS['A'],$KEYWORDS['B']) ));		

$HEAD['meta_descripcion'] = "NI VUELTA QUE DARLE :: Compra ONLINE, Tienda virtual que nace para atender y satisfacer las demandas propias de cada usuario en particular del internet, ofreciéndole para ello una amplia y selecta variedad de productos y servicios de primera calidad, los cuales están a su disposición las 24 horas del día en nuestra tienda virtual, a la que usted podrá acceder desde la comodidad de su casa, oficina, o desde cualquier punto desde donde tenga acceso a una conexión a internet. ";		

																						
?>