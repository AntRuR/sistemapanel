<?php //á
//var_dump($_GET);
$THIS=$PARAMS['this'];

if($_GET['id_mensaje']!=''){

	$mensaje=fila("id_grupo,id_speech","ventas_mensajes","where id='".$_GET['id_mensaje']."'",0);
	$_GET['id_venta']=$mensaje['id_grupo'];
	$SPEECH=dato("nombre","speeches","where id='".$mensaje['id_speech']."'");
	$fila=fila(
			array(
			"id_item",
			"id_cliente",
			"id_usuario",
			"banco",
			"sectorista",
			"sectorista_fijo","sectorista_movistar","sectorista_claro","sectorista_rpc","sectorista_rpm","sectorista_nextel",
			"sectorista_email"
			),"ventas_items","where id='".$_GET['id_venta']."'",0);
	$_GET['id']=$fila['id_item'];
	$_GET['id_cliente']=$fila['id_cliente'];
	$_GET['id_usuario']=$fila['id_usuario'];

} elseif($_GET['id_venta']!=''){

	$FFILA=$fila=fila(
			array(
			"id_item",
			"id_cliente",
			"id_usuario",
			"id_cuenta_email",
			"banco",
			"sectorista",
			"sectorista_fijo","sectorista_movistar","sectorista_claro","sectorista_rpc","sectorista_rpm","sectorista_nextel",
			"sectorista_email"
			),"ventas_items","where id='".$_GET['id_venta']."'",0);
	$_GET['id']=$fila['id_item'];
	$_GET['id_cliente']=$fila['id_cliente'];
	$_GET['id_usuario']=$fila['id_usuario'];

}

$ITEM = select_fila(

        array(
			"id",
			"id_grupo",
			"id_tipo",
			"nombre",
			"ficha",
			"fecha_creacion"
		)
        ,"productos_items"
        ,"where 1 and  visibilidad='1' and id=".$_GET['id']." order by id asc"
        ,0

		,array(
		    'titulo'=>array('limit_string'=>array('string'=>"{nombre}",'limit'=>"75"))
		    ,'link'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=".$PARAMS['conector']."&acc=file&id={id}&friendly={titulo}"))
			,'archivo'=>array('get_archivo'=>array('carpeta'=>'doc_imas','fecha'=>'{fecha_creacion}','file'=>'{fichero}'))
			,'ficha'=>array('stripslashes'=>array('string'=>'{ficha}'))
			,'tipo'=>array('dato'=>array('nombre','productos_tipos','where id="{id_tipo}"'))

//			,'down'=>'panel/down.php?name={nombre_fichero}&file={archivo}'
			,'fotos'=>array('sub_fotos'=>array(
											"id,file,foto_descripcion as caption,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by calificacion desc limit 0,3"
											,"profot_fot"
											,array(
													 'get_atributos'=>'2,140x90,3',
													 'foto_thumb'=>'2',
													 'foto_zoom'=>'3',
													 'href'=>'4',
													)
											)
										)

			)

        );

		$ITEM['ficha']=strip_tags($ITEM['ficha'],"<table><tr><td><tbody><strong><font>");
		$ITEM['ficha']=str_replace('&nbsp;','',$ITEM['ficha']);


//prin($ITEM);

if(empty($ITEM) and $_GET['id']!=''){ web_reload($SERVER['BASE']); }

if(1){$HEAD['INCLUDES']['script'][]="window.addEvent('domready', function(){		new Element('div', {'id':'imprimir-button', 'html': 'IMPRIMIR',			'styles': {				position: 'absolute',				top: 0,				right: 0,				width: 'auto',				height: 'auto',				'background-color': 'black',				'z-index': 1,				'text-align' : 'center',				'color' : 'white',				'text-align' : 'center',				'padding' : '3px 10px',				'cursor' : 'pointer'			},			'events': {                'click': function(el){					$0('imprimir-button');                    window.print();					new Request({url:'panel/base2/imprimir_click.php',method:'post',data:{'id_venta':'".$_GET['id_venta']."'},onSuccess:function(eee){						//parent.ax('pagina','ventas_mensajes',parent.document.getElementById('pagina').value);						parent.ax('recargar');                    	parent.initMultiBox.close();						//$1('imprimir-button');}}).send();                }            }}).inject($(document.body), 'top');});";
}

$HEAD['INCLUDES']['style'][]='
#div_allcontent { width:100%; }
.div_body { background:none; }
.div_col_1d1 { width:683px; }p { margin: 0; padding: 0; }</style>
';


/*
if($ITEM['id_grupo']=='1'){
	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=rubros&acc=list&gru=1");
} else {
	$COMMON['menu'] = web_re_procesar_menu($COMMON['menu'],"index.php?modulo=items&tab=rubros&acc=list&gru=0");
}
*/


//////////////////FACEBOOK LIKE//////////////////
/*
	$FBL['url']	= $SERVER['BASE'].procesar_url($SERVER['ARCHIVO']."?".$SERVER['REDIRECT_QUERY_STRING'],0);
	$FBL['w']	= 215;
	$FBL['h']	= 65;

	$ITEM['FBL']=$FBL;
*/
//////////////////////CONECTOR/////////////
//prin($PARAMS);

$DETAIL[$THIS]=$ITEM;

//////////////////HEADER/////////////////////

$HEAD['titulo_H1'] = title_friendly($ITEM['titulo']);

$HEAD['titulo'] = title_web($HEAD['titulo_H1'],$COMMON['datos_root']['titulo_web']);

//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);


//////////////////FACEBOOK/////////////////////

/*
$HEAD['facebook']['og:title']=$HEAD['titulo'];
$HEAD['facebook']['og:type']='activity';
$HEAD['facebook']['og:url']=$SERVER['URL'];
$HEAD['facebook']['og:image']=$ITEM['fotos']['0']['foto_zoom'];
$HEAD['facebook']['og:site_name']=$COMMON['datos_root']['titulo_web'];
$HEAD['facebook']['fb:admins']='665417593';
$HEAD['facebook']['og:description']=strip_tags(str_replace(array("</li>","\""),array("</li>\n",""),$ITEM['descripcion']));
*/

?>