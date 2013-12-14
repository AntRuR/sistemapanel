<?php //á

/**********************************************/
//////////////////  VARS  //////////////////////
/**********************************************/

//unset($_SESSION['publicar']);
//prin($_SESSION);
//prin($_COOKIE);
//prin($_GET);
//prin($SERVER);
//prin($_SERVER);
/**********************************************/
///////////////// VERSION //////////////////
/**********************************************/

$INCLUDE['version']="?v=1384";

$HEAD['INCLUDE']['version']=$INCLUDE['version'];

/**********************************************/
///////////////// MASTERCOFIG //////////////////
/**********************************************/

include("master.php");

/**********************************************/
////////////////  IDIOMA  //////////////////////
/**********************************************/

$default_lang="es";
include("../../".$web_path."/lang.php");
unset($lang);
include("../../".$web_path."/lang/lang_".$c_lang.".php");


/**********************************************/
/////////////INCLUDES BEFORE ///////////////////
/**********************************************/

include("lib/class.autokeyword.php");
include("lib/include.php");
include("urls.php");

/**********************************************/
///////////// EXTRAER ARCHIVOS /////////////////
/**********************************************/

include("loaddata.php");


/************************************************/
/********         HEADER         ****************/
/************************************************/


//web_render_swf_script($SERVER['BASE'].THEME_PATH."img/particular/header/bg.swf","header_bg_swf","930x145");

/*
$COMMON['header_info'] = "
<span class='ico ico_mobile'>".$COMMON['datos']['nextel_1']."</span>
<span class='ico ico_phone'>".$COMMON['datos']['telefono_1']." / ".$COMMON['datos']['telefono_2']."</span>
<a href='mailto:".$COMMON['datos']['email_ventas']."' class='ico ico_email'>".$COMMON['datos']['email_ventas']."</a>
";
*/

/*
$COMMON['categorias'] = select(
        "id,nombre"
        ,"productos_grupos"
        ,"where 1 and  visibilidad='1' order by id asc limit 0,100"
        ,0
		);
*/


/************************************************/
/*********          BAR          ****************/
/************************************************/

//web_render_swf_script($SERVER['BASE'].THEME_PATH."img/particular/bar/bg.swf","bar_bg_swf","930x100");


/*
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
*/


/************************************************/
/*********          MENU          ***************/
/************************************************/

$COMMON['header_pre']=array(
						array(
							'url'=>'index.php?modulo=app&tab=home'
							,'label'=>'Inicio'
						),						
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=empresa'
							,'label'=>'Empresa'
						),	
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=servicios'
							,'label'=>'Servicios'
						),
						array(
							'url'=>'index.php?modulo=items&tab=blog_noticias&acc=list'
							,'label'=>'Blog'
						),
						array(
							'url'=>'index.php?modulo=formularios&tab=contactenos'
							,'label'=>'Contacto'
						)																						
					);				
					
$COMMON['header_after']=select("id,nombre as label",'productos_grupos','where 1 limit 0,100',0,
array(
    'url'=>"index.php?modulo=items&tab=productos&acc=list&gru={id}&friendly={label}",
)
);
//prin($COMMON['header_after']);
foreach($COMMON['header_after'] as $igm=>$gm){
	$COMMON['header_after'][$igm]['submenu']=select(
	array(
		"id",
		"nombre as label"
	),'productos_items','where id_grupo="'.$gm['id'].'" limit 0,100',0,
	array(
		'url'=>"index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={label}",
		'id_grupo'=>'{id}'
	)
	);		
}

$COMMON['header_after_fotos']=select(
	array(
		"id",
		"nombre",
		"id_grupo",
		"precio",
		"codigo"
	),'productos_items','where visibilidad="1"',0,
	array(
		'foto'=>array('foto'=>array("id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id asc limit 0,1",
									"profot_imas",
									array('atributos'=>'4,300x200,0')
				)),
		 'url'=>array('procesar_url'=>array('url'=>"index.php?modulo=items&tab=productos&acc=file&id={id}&friendly={nombre}"))
	)
);

		
/************************************************/
/*********         FOOTER          **************/
/************************************************/
					
/*					
$COMMON['menu_extra']=array(
						array(
								'url'	=>'index.php?modulo=formularios&tab=compre_en_usa'
								,'label'=>'Compre en USA'	
							)
						,array(
								'url'	=>'index.php?modulo=formularios&tab=compre_en_lima'
								,'label'=>'Compre en Lima'	
							)
						,array(
								'url'	=>'index.php?modulo=formularios&tab=compramos_por_ti'
								,'label'=>'Compramos por Ti'
							)
						,array(
								'url'	=>'index.php?modulo=app&tab=pages&page=compre-en-nuestra-tienda'
								,'label'=>'Compre en Nuestra Tienda'
							)
					);

$COMMON['footer']['menu']=array_merge($COMMON['menu'],$COMMON['menu_extra']);
*/

$COMMON['footer']['by']="by <a href='http://prodiserv.com' title='Diseño y Desarrollo'>Prodiserv</a>";

$COMMON['footer']['info']['direccion']=$COMMON['datos']['direccion_publica'];
$COMMON['footer']['info']['contacto']="Email <a href='mailto:".$COMMON['datos']['emails_publicos']."'>".$COMMON['datos']['emails_publicos']."</a>";
$COMMON['footer']['info']['telefonos']="Teléfonos ".$COMMON['datos']['telefonos_publicos'];
//$COMMON['footer']['info']['empresa']=$COMMON['datos_root']['nombre_empresa'];

$COMMON['footer']['info']['copy']=strtoupper($COMMON['datos_root']['nombre_empresa'])." &reg; 2011 Copyright Todos los Derechos Reservados";

//$COMMON['footer']['by']="by <a href='http://prodiserv.com' title='Diseño y Desarrollo'>Prodiserv</a>";

/********************************************/
////////////////// HEAD //////////////////////
/********************************************/

$HEAD['titulo_H1'] = $COMMON['datos_root']['titulo_web'];

$HEAD['titulo'] = $COMMON['datos_root']['titulo_web'];


/*******************************************/
////////////////// SESSION //////////////////
/*******************************************/

/*
if($_SESSION['login']['status']==1){
$LOGIN['usuario']="<b>".$_SESSION['login']['nombre']."</b>| <a href='#' >mi cuenta</a> | <a href='#' >mis anuncios</a> | <a href='#' onclick='javascript:cerrar_sesion(\"login\");return false;' rel='nofollow'>salir</a>";
}

if(isset($_SESSION['publicar']['usuario_temp'])){
$STATUS='Hay un anuncio pendiente de publicación (<a class="main" href="'.$COMMON['url_publicar-2'].'">editar</a>). Para terminar de publicar debe <a class="main" href="'.$COMMON['url_registro'].'">registrarse</a> o <a class="main" href="'.$COMMON['url_login'].'">iniciar sesión</a>. O puede <a href="#" onclick="javascript:cerrar_sesion(\'publicar\');return false;" rel="nofollow" class="main" >cancelar</a> la publicación';
}
*/






/**********************************************/
///////////// INCLUDES AFTER ///////////////////
/**********************************************/


include("css.php");

web_render_get_css($WEBBLOQUES,$CLASSSELECTED);
//prin($SELECTORS);

//include("formularios/formularios.php");						

/**********************************************/
/////////////////// STORE //////////////////////
/**********************************************/

//include("store/moneda.php");

//$COMMON['store']['cambio']=unserialize($INDICADORES['dolar']);


/**********************************************/
/////////////////// DRIVER /////////////////////
/**********************************************/

include("driver.php");

$COMMON['header_pre'] = web_procesar_menu($COMMON['header_pre'],"izquierda");
foreach($COMMON['header_after'] as $igm=>$gm){
$COMMON['header_after'][$igm]['submenu'] = web_procesar_menu($COMMON['header_after'][$igm]['submenu'],"izquierda");
}

$COMMON['header_after'] = web_procesar_menu($COMMON['header_after'],"izquierda");

//prin($COMMON['menu']);

include("loaders.php");

////////////////////////////////////////////////
/**********************************************/

if($MASTERCOFIG['editar_friendly_url']=='1'){
	web_guardar_datos_htaccess($_GET,$ALIAS);
}



?>