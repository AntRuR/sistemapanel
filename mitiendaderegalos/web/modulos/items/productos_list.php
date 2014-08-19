<?php //á



/**********   FILTRO   ************/

if($PARAMS['conector']=='inmuebles_list'){



	$FILTRO = " and id_grupo='".$_GET['gru']."'";

	$ORDEN	= " order by id desc";

	

	$VACIO	= "No hay ningun inmueble registrado";

	$PORPAG = 16;	

	$ENLPAG = "index.php?modulo=items&acc=list&tab=productos&friendly=Inmuebles&pag=";	

	$es_inmueble = 1;

	$bloque = 1;

/* BUSQUEDA */

} elseif($_GET['buscar']!=''){

	$FILTRO = " and ( tags like '%".$_GET['buscar']."%' or nombre like '%".$_GET['buscar']."%' or descripcion like '%".$_GET['buscar']."%' or marca like '%".$_GET['buscar']."%' )";

	$ORDEN	= " order by id desc";

	

	$VACIO	= "La búsqueda <strong>".$_GET['buscar']."</strong> no obtuvo ningún resultado";

	$TITULO = "Resultado para la búsqueda de ".$_GET['buscar'];

	

	$SUBTITULO = "Búsqueda";

	$PORPAG = 24;		

	$ENLPAG = "index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&buscar=".$_GET['buscar']."&pag=";

}

/* HOME */

elseif($_GET['gru']=='0'){

	$FILTRO	= " and estructura in ('1','2','3','4') ";

	$ORDEN	= " order by relevancia asc";

	

	$VACIO	= "No hay ningun producto portada";

	$TITULO = "Portada";

	$PORPAG = 100;

	$ENLPAG = "index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&gru=0&pag=";	



}

/* CATEGORIA */

elseif(!empty($_GET['gru'])) {

		

	$grupos_inmuebles=array();

	$gi0=select("id","productos_subgrupos","where id_grupo='34' and visibilidad='1'");

	foreach($gi0 as $gi) $grupos_inmuebles[]=$gi['id'];

	$es_inmueble=(in_array($_GET['gru'],$grupos_inmuebles))?1:0;	



	$ID_GRUPO = $_GET['gru'];

	$FILTRO = " and id_subgrupo='".$ID_GRUPO."' ";

	$ORDEN	= " order by nombre asc";



	$ID_RUBRO = select_dato("id_grupo","productos_subgrupos","where id='".$ID_GRUPO."'");



	$TITULO = select_dato("nombre","productos_subgrupos","where id='".$ID_GRUPO."'");

	$SUBTITULO = $TITULO;

	

	$VACIO	= "No hay ningun producto en la categoría <b>".$TITULO."</b>";

	$PORPAG = 16;	

	$ENLPAG = "index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&gru=".$ID_GRUPO."&friendly=".$TITULO."&pag=";	



}

/* FILTROS */

elseif(!empty($_GET['fil']) and !empty($_GET['val'])) {

	switch($_GET['fil']){

		case "grupos": 



		$Filtro="id_filtro";

		$FILTRO = " and $Filtro='".$_GET['val']."' ";

		$ORDEN	= " order by nombre asc";

	

		$ID_GRUPO = select_dato("id_subgrupo","productos_filtros","where id='".$_GET['val']."'");



		$ID_RUBRO = select_dato("id_grupo","productos_subgrupos","where id='".$ID_GRUPO."'");



		$TITULO = select_dato("nombre","productos_filtros","where id='".$_GET['val']."'");



		$SUBTITULO = select_dato("nombre","productos_subgrupos","where id='".$ID_GRUPO."'");



		$VACIO	= "No hay ningun producto en la subcategoría <b>".$TITULO."</b>";

		$PORPAG = 16;	

		$ENLPAG = "index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&acc=list&fil=grupos&val=".$_GET['val']."&friendly=".$TITULO."&pag=";	

		

		break;

		case "ofertas": 

				

		$Filtro="oferta";

		$FILTRO = " and $Filtro='".$_GET['val']."' ";

		$ORDEN	= " order by nombre asc";

	

		$ID_GRUPO = select_dato("id_subgrupo","productos_filtros","where id='".$_GET['val']."'");



		$ID_RUBRO = select_dato("id_grupo","productos_subgrupos","where id='".$ID_GRUPO."'");



		$TITULO = "Ofertas";



		$SUBTITULO = "Ofertas";



		$VACIO	= "No hay ningun producto en <b>Oferta</b>";

		$PORPAG = 16;	

		$ENLPAG = "index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&acc=list&fil=ofertas&val=1&friendly=".$TITULO."&pag=";	

		

		break;

		

	}

}







/**********    QUERY    ************/

if($es_inmueble){

$LISTA = paginacionnumerada(

        array(

            'separador'=>""

            ,'porpag'=>$PORPAG

            ,'anterior'=>"&laquo; ".$lang['anterior']

            ,'siguiente'=>$lang['siguiente']." &raquo;"

            ,'enlace'=>$ENLPAG

            ,'procesar_url'=>1

            //,'onclick'=>"?pag="

        )

		,"id,id_grupo,id_subgrupo,id_filtro,nombre,marca,codigo,descripcion,extra_texto,precio,precio_oferta,fecha_creacion,moneda

		,departamento,provincia,distrito,operacion,abr,urbanizacion,amoblamiento,n_dormitorios,n_ambientes,n_banos,n_banos_inc,n_cocheras

		,area_terrenos,area_construida,area_ocupada,pisos_privados,pisos_publicos,zonificacion,piscina,terraza,jardin,ascensores"

        ,"productos_items"

        ,"where 1 and  visibilidad='1' $FILTRO $ORDEN"

        ,0

		,array(

			'precio'=>($_GET['fil']=='ofertas')?'{precio_oferta}':'{precio}',

			'grupo'=>array('sub_select_dato'=>array('campo'=>'nombre','tabla'=>'productos_grupos','where'=>"where id='{id_grupo}'")),

			'subgrupo'=>array('sub_select_dato'=>array('campo'=>'nombre','tabla'=>'productos_subgrupos','where'=>"where id='{id_subgrupo}'")),			

			'filtro'=>array('sub_select_dato'=>array('campo'=>'nombre','tabla'=>'productos_filtros','where'=>"where id='{id_filtro}'")),			

//			'precio'=>array('formato_moneda'=>array('simbolo'=>'S/.','numero'=>'{precio}')),

		    'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}")),		

			'foto'=>array('sub_foto'=>array(

										"id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,1"

										,"profot_imas"

										,array( 

											 'get_atributos'=>'2,150x120,1'											 

											 ,'archivo'=>'3'											 

												)

											)

										),												

			'departamento'=>array('sub_select_dato'=>array(

											'campo'=>"nombre"

											,'tabla'=>"geo_departamentos"

											,'donde'=>"where id='{departamento}'"

											,'debug'=>0

										)

									),

			'provincia'=>array('sub_select_dato'=>array(

											'campo'=>"nombre"

											,'tabla'=>"geo_provincias"

											,'donde'=>"where id='{provincia}'"

											,'debug'=>0

										)

									),

			'distrito'=>array('sub_select_dato'=>array(

											'campo'=>"nombre"

											,'tabla'=>"geo_distritos"

											,'donde'=>"where id='{distrito}'"

											,'debug'=>0

										)

									),

			'descripcion'=>array('limit_string'=>array(

											'string'=>'{descripcion}'

											,'limit'=>'240'

											)

										)									

										

			)									

        );	

} else {

$LISTA = paginacionnumerada(

        array(

            'separador'=>""

            ,'porpag'=>$PORPAG

            ,'anterior'=>"&laquo; ".$lang['anterior']

            ,'siguiente'=>$lang['siguiente']." &raquo;"

            ,'enlace'=>$ENLPAG

            ,'procesar_url'=>1

            //,'onclick'=>"?pag="

        )

		,"id,id_grupo,id_subgrupo,id_filtro,nombre,marca,codigo,descripcion,extra_texto,precio,precio_oferta,fecha_creacion,moneda"

        ,"productos_items"

        ,"where 1 and  visibilidad='1' $FILTRO $ORDEN"

        ,0

		,array(

			'precio'=>($_GET['fil']=='ofertas')?'{precio_oferta}':'{precio}',

			'grupo'=>array('sub_select_dato'=>array('campo'=>'nombre','tabla'=>'productos_grupos','where'=>"where id='{id_grupo}'")),

			'subgrupo'=>array('sub_select_dato'=>array('campo'=>'nombre','tabla'=>'productos_subgrupos','where'=>"where id='{id_subgrupo}'")),			

			'filtro'=>array('sub_select_dato'=>array('campo'=>'nombre','tabla'=>'productos_filtros','where'=>"where id='{id_filtro}'")),			

//			'precio'=>array('formato_moneda'=>array('simbolo'=>'S/.','numero'=>'{precio}')),

		    'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=".$PARAMS['conector']."&acc=file&id={id}&friendly={nombre}")),		

			'foto'=>array('sub_foto'=>array(

										"id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,1"

										,"profot_imas"

										,array( 

											 'get_atributos'=>'2,150x150,1'

											 ,'archivo'=>'3'											 

												)

											)

										)												

			)	

        );

}

//	$REMOOZZ=1;

//	prin($LISTA);		



	if(!empty($ID_GRUPO)){



			

		$grupo = select_fila(

							"id,nombre"

							,"productos_subgrupos"

							,"where id='".$ID_GRUPO."'"

							,0

							,array(

								'sub_categorias'=>array('sub_select'=>array(

													'campos'=>"id,nombre"

													,'tabla' =>"productos_filtros"

													,'donde' =>"where id_subgrupo='{id}' and visibilidad='1' order by id asc limit 0,100"

													,'debug' =>0

													,'opciones' =>array(

														'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=productos&acc=list&fil=grupos&val={id}&friendly={nombre}"))		

													

													)

												)

											)

								)

							);

							

		if($_GET['fil']!='ofertas'){								

		$LISTA['sub_categorias']=$grupo['sub_categorias'];			

		}

	} 

	

		if($_GET['fil']=='ofertas'){											

			$LISTA['menu']=web_procesar_menu(array(

								array(

									'url'=>'index.php?modulo=items&tab=productos&acc=list&fil=ofertas&val=1&friendly=Ofertas'

									,'label'=>$SUBTITULO	

									,'selected'=>1

								)													

							));		

		} else {

			$LISTA['menu']=web_procesar_menu(array(

								array(

									'url'=>'index.php?modulo=items&tab=productos&acc=list&gru='.$grupo['id'].'&friendly='.$grupo['nombre']

									,'label'=>$SUBTITULO	

									,'selected'=>1

								)													

							));					

		}



if($_GET['fil']=='ofertas'){

	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=productos&acc=list&fil=ofertas&val=1&friendly=Ofertas");	

} elseif($ID_RUBRO=='1'){

	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=rubros&acc=list&gru=1");

} else {

	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=rubros&acc=list&gru=0");

}



/**********    POST QUERY    ************/



//prin($LISTA['filas']);



foreach($LISTA['filas'] as $ii=>$LIS){



	$LISTA['filas'][$ii]['precios']=render_precios(array('cambio'=>array(

																		'compra'=>$COMMON['variables']['dolar_compra']

																		,'venta'=>$COMMON['variables']['dolar_venta']																						

																		),'precio'=>$LIS['precio'],'moneda'=>$LIS['moneda']));

//	$LISTA['filas'][$ii]['precio_dolares']=$LISTA['filas'][$ii]['precios']['dolares'];

	$LISTA['filas'][$ii]['precios_soles']=$LISTA['filas'][$ii]['precios']['soles'];

	$LISTA['filas'][$ii]['tiene_precio']=($LIS['precio']!='S/.' and $LIS['precio']!='S/.0.00' and $LIS['precio']!='0' and $LIS['precio']!='')?1:0;

	

	if($_SESSION['login']['status'] or 1){

		$LISTA['filas'][$ii]['consultar']=' href="'.$LIS['link'].'#consulta" ';

	} else {

		$LISTA['filas'][$ii]['consultar']=' href="#" onclick="javascript:if(confirm(\'¿Desea antes registrarse?\')){ location.href=\''.$SERVER['BASE'].'index.php?modulo=formularios&tab=login&redir='.$LIS['link'].'&rediranchor=consulta\'; } else {  location.href=\''.$SERVER['BASE'].''.$LIS['link'].'#consulta\'; } return false; " ';

	}	

	

	$KEYWORDS['B'][]=$LISTA['filas'][$ii]['nombre'];

	$KEYWORDS['B'][]=$LISTA['filas'][$ii]['marca'];

	$KEYWORDS['C'][]=$LISTA['filas'][$ii]['grupo'];

	$KEYWORDS['C'][]=$LISTA['filas'][$ii]['subgrupo'];

	$KEYWORDS['C'][]=$LISTA['filas'][$ii]['filtro'];



 }

	

//prin($LISTA);

$LISTA['vacio']  = $VACIO;



$LISTA['titulo'] = $TITULO;



//$LISTA['menu'] = $MENU_FILTROS;



$LISTADO[$PARAMS['this']]=$LISTA;

//prin($PARAMS['conector']);







$KEYWORDS['A']=array($LISTA['titulo'],$COMMON['datos_root']['titulo_web']);





												

//////////////////HEADER/////////////////////



if(!$bloque){



$HEAD['titulo_H1'] = title_friendly($LISTA['titulo']);



$HEAD['titulo'] =  title_web($HEAD['titulo_H1'],$COMMON['datos_root']['titulo_web']);



//$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

$HEAD['meta_keywords'] = web_procesar_keywords($HEAD['meta_keywords']." ".implode(",",array_merge($KEYWORDS['A'],$KEYWORDS['B'],$KEYWORDS['C'])));



$HEAD['meta_descripcion'] = web_procesar_description( implode(" ",array_merge($KEYWORDS['A'],$KEYWORDS['B']) ));		



}



?>