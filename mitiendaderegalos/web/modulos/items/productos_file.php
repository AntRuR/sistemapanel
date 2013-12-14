<?php //á







$ITEM = select_fila(



        "consulta,id,id_grupo,id_subgrupo,id_filtro,nombre as titulo,marca,codigo,descripcion,extra_texto,precio,precio_oferta,moneda,fecha_creacion,politica_legal,nombre_fichero,fichero,oferta

		,departamento,provincia,distrito,operacion,abr,urbanizacion,amoblamiento,n_dormitorios,n_ambientes,n_banos,n_banos_inc,n_cocheras

		,area_terrenos,area_construida,area_ocupada,pisos_privados,pisos_publicos,zonificacion,piscina,terraza,jardin,ascensores"

        ,"productos_items"

        ,"where 1 and  visibilidad='1' and id=".$_GET['id']." order by id asc"

        ,0



		,array(

//			'precio'=>array('formato_moneda'=>array('simbolo'=>'S/.','numero'=>'{precio}'))												

		    'titulo'=>array('limit_string'=>array('string'=>"{titulo}",'limit'=>"75"))	

		    ,'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=".$PARAMS['this']."&acc=file&id={id}&friendly={titulo}"))

			,'archivo'=>array('get_archivo'=>array('carpeta'=>'doc_imas','fecha'=>'{fecha_creacion}','file'=>'{fichero}'))

			,'archivo'=>array('urlencode'=>array('{archivo}'))

			,'down'=>'panel/down.php?name={nombre_fichero}&file={archivo}'					

			,'fotos'=>array('sub_fotos'=>array(

											"id,file,foto_descripcion as caption,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc "

											,"profot_imas"

											,array( 

													 //'get_atributos'=>'3,360x460,0'

													  'foto_thumb'=>'1'

													 ,'foto_zoom'=>'3'													 

													 ,'href'=>'4'													 

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

									)										



			)

		

        );





//prin($ITEM);





$grupos_inmuebles=array();

$gi0=select("id","productos_subgrupos","where id_grupo='34' and visibilidad='1'");

foreach($gi0 as $gi) $grupos_inmuebles[]=$gi['id'];



//prin($_SERVER['BASE']);



$ITEM['down']="http://nivueltaquedarle.com/".str_replace("http://nivueltaquedarle.com","",$ITEM['down']);



//prin($ITEM['down']);



$ITEM['es_inmueble']=(in_array($ITEM['id_subgrupo'],$grupos_inmuebles))?1:0;





$ITEM['precio']=($ITEM['oferta']=='1')?$ITEM['precio_oferta']:$ITEM['precio'];



$ITEM['precios']=render_precios(array('cambio'=>array(

													'compra'=>$COMMON['variables']['dolar_compra']

													,'venta'=>$COMMON['variables']['dolar_venta']																						

													),'precio'=>$ITEM['precio'],'moneda'=>$ITEM['moneda']));



$ITEM['precios_texto']="precio en sóles : ".$ITEM['precios']['soles']."<br>"."precio en dólares : ".$ITEM['precios']['dolares'];



$ITEM['tiene_precio']=($ITEM['precio']!='S/.' and $ITEM['precio']!='S/.0.00' and $ITEM['precio']!='')?1:0;



//prin($ITEM['tiene_precio']);





if(empty($ITEM)){ web_reload($SERVER['BASE']); }



//////////////////MENU//////////////////





$MENu[]=array('label'=>"Fotos del Producto", 	'onclick'=>";", 'id'=>'1', 'default'=>'1');

$MENu[]=array('label'=>"Descripción", 			'onclick'=>";", 'id'=>'2');



//if(trim($ITEM['politica_legal'])!='')

	$MENu[]=array('label'=>"Política Legal", 	'onclick'=>";", 'id'=>'3');

				

if($ITEM['id_grupo']=='1')

	$MENu[]=array('label'=>"Personaliza tu regalo" ,'onclick'=>";", 'id'=>'4');		



//if(trim($ITEM['consulta'])!=''){

	if($_SESSION['login']['status']){

		$MENu[]=array('label'=>"Consultar" ,'onclick'=>";", 'id'=>'5');		

	} else {

		$MENu[]=array('label'=>"Consultar" ,'onclick'=>'if(confirm("¿Desea antes registrarse?")){ location.href="'.$SERVER['BASE'].'index.php?modulo=formularios&tab=login&redir='.$_SERVER['REQUEST_URI'].'&rediranchor=consulta"; } else { return false; }', 'id'=>'5');		

	}

//}





$ITEM['menu']=web_procesar_menu($MENu);								

//prin($ITEM);



//MENU



if($ITEM['id_grupo']=='1'){

	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=rubros&acc=list&gru=1");

} else {

	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=rubros&acc=list&gru=0");

}



//////////////////SLIDESHOW//////////////////





	$SLIDESHOW=array(

				'label'=>$PARAMS['this'],

				'zoom'=>"346x270",

				'height'=>400,

				'resize'=>"false",

				'overlap'=>"false",				

				'thumbnails'=>"true",

					'thumb'=>"126x136",

					'thumb_filas'=>"1",

					'thumb_direccion'=>"vertical",

				'paused'=>"true",

				'delay'=>"3000",

				'duration'=>"1000",

				'controller'=>"false",

				'efecto'=>"4",		

				'captions'=>"false",			

				'hrefs'=>"true",						

				'linked'=>"true",						

				'lightbox'=>"true",						

				'listado'=>$ITEM['fotos']

				);

//	prin($SLIDESHOW);

	

	$ITEM['SLIDESHOW']=web_render_slideshow_preproceso($SLIDESHOW);	



//////////////////FACEBOOK LIKE//////////////////



	$FBL['url']	= $SERVER['BASE'].procesar_url($SERVER['ARCHIVO']."?".$SERVER['REDIRECT_QUERY_STRING'],0);

	$FBL['w']	= 215;

	$FBL['h']	= 65;

	

	$ITEM['FBL']=$FBL;



//////////////////////CONECTOR/////////////



$DETAIL[$PARAMS['conector']]=$ITEM;





include(incluget("formularios/comentarios.php",array('this'=>'comentarios','conector'=>'comentarios')));

/*

$HEAD['INCLUDES']['js'][]='js/mootools-1.2.3-core-yc.js';

$HEAD['INCLUDES']['js'][]='js/mootools-1.2.3.1-more.js';

$HEAD['INCLUDES']['js'][]='js/js.js';

$HEAD['INCLUDES']['js'][]='js/lang/es.js';

$HEAD['INCLUDES']['js'][]='js/formcheck.js';

$HEAD['INCLUDES']['css'][]='css/theme/grey/formcheck.css'; //[blue,classic,green,grey,red,white]

*/



																	

//////////////////HEADER/////////////////////



$HEAD['titulo_H1'] = title_friendly($ITEM['titulo']);



$HEAD['titulo'] = title_web($HEAD['titulo_H1'],$COMMON['datos_root']['titulo_web']);



//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));

$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

 

//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		

$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);







//////////////////FACEBOOK/////////////////////



$HEAD['facebook']['og:title']=$HEAD['titulo'];

$HEAD['facebook']['og:type']='activity';

$HEAD['facebook']['og:url']=$SERVER['URL'];

$HEAD['facebook']['og:image']=$ITEM['fotos']['0']['foto_zoom'];

$HEAD['facebook']['og:site_name']=$COMMON['datos_root']['titulo_web'];

$HEAD['facebook']['fb:admins']='665417593';

$HEAD['facebook']['og:description']=strip_tags(str_replace(array("</li>","\""),array("</li>\n",""),$ITEM['descripcion']));







?>