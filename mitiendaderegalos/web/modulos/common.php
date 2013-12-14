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

$INCLUDE['version']="?v=972";

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


$COMMON['menu']=array(
						/*
						array(
							'url'=>'index.php?modulo=items&tab=productos&acc=list'
							//'url'=>'index.php?modulo=app&tab=home'
							,'label'=>'PRODUCTOS'
						),
						*/
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=empresa'
							,'label'=>'EMPRESA'
						),						
						array(
							'url'=>'index.php?modulo=items&tab=rubros&acc=list&gru=0'
							,'label'=>'PRODUCTOS'
						),
						array(
							'url'=>'index.php?modulo=items&tab=rubros&acc=list&gru=1&friendly=Regalos Delivery'
							//'url'=>'index.php?modulo=app&tab=home'
							,'label'=>'REGALOS DELIVERY'
						),
						/*
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=compraonline'
							,'label'=>'COMPRA ONLINE'
						),
						*/
						array(
							'url'=>'index.php?modulo=items&tab=productos&acc=list&fil=ofertas&val=1&friendly=Ofertas'
							,'label'=>'OFERTAS'
						),						
						/*
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=servicios'
							,'label'=>'SERVICIOS'
						),
						*/
						array(
//							'url'=>'index.php?modulo=items&tab=faqs&acc=list'
							'url'=>'index.php?modulo=app&tab=pages&page=faqs'
							,'label'=>'PREGUNTAS FRECUENTES'
						),
						/*
						array(
							'url'=>'index.php?modulo=app&tab=pages&page=proveedores'
							,'label'=>'PROVEEDORES'
						),
						*/
						array(
							'url'=>'index.php?modulo=formularios&tab=contacto'
							,'label'=>'CONTACTENOS'
						)
																				
					);
					
/************************************************/
/*********         FOOTER          **************/
/************************************************/

$rubros=select(
        "nombre as label, id as url"
        ,"productos_grupos"
        ,"where 1 and  visibilidad='1' order by nombre asc limit 0,100"
        ,0
        ,array(
			'label'=>array('trim'=>array('string'=>'{label}')),
			'url'=>'index.php?modulo=items&tab=rubros&acc=list&gru={url}&friendly={label}'
		)
	);


//prin($rubros);
		
foreach($rubros as $i=>$rubro){
	$rubros[$i]['classadicional']="letras letra_".strtolower($rubro['label']['0']);
	$LetrasEncontradas[]=strtolower($rubro['label']['0']);
}

$letras=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

$Letras=array();
foreach($letras as $i=>$letra){
	$Letra['label']=strtoupper($letra);
	$Letra['set']="letra_".$letra;	
	$Letra['enabled']=in_array($letra,$LetrasEncontradas)?1:0;	
	$Letras[]=$Letra;
}

//prin($Letras);
		
$COMMON['sub_menu'] = web_procesar_menu($rubros,"izquierda");
		
$COMMON['letras']=$Letras;
		
		
/************************************************/
/*********         FOOTER          **************/
/************************************************/
					
$COMMON['footer']['by']="by <a href='http://prodiserv.com' title='Diseño y Desarrollo'>Prodiserv</a>";
					
//$COMMON['footer']['menu']=$COMMON['menu'];

//$COMMON['footer']['info']['direccion']=$COMMON['datos']['direccion_publica'];
//$COMMON['footer']['info']['telefonos']="Teléfonos ".$COMMON['datos']['telefonos_publicos'];
//$COMMON['footer']['info']['contacto']="e-mail <a href='mailto:".$COMMON['datos']['emails_publicos']."'>".$COMMON['datos']['emails_publicos']."</a>";

//$COMMON['footer']['info']['empresa']=$COMMON['datos_root']['nombre_empresa'];
//$COMMON['footer']['info']['empresa']=strtoupper($COMMON['datos_root']['nombre_empresa'])." &reg;<br>Es marca registrada por la empresa PRODISERV S.A.C.";

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


/*********************************************/
///////////// SELECTS COMMONS /////////////////
/*********************************************/

$COMMON['datos_root']=get_valores(
        "variable","valor"
        ,"configuraciones_root"
        ,"where 1"
        ,0
        );

$COMMON['datos']=get_valores(
        "variable","valor"
        ,"configuraciones"
        ,"where 1"
        ,0
        );

/**********************************************/
///////////// EXTRAER ARCHIVOS /////////////////
/**********************************************/

include("loaddata.php");


/**********************************************/
///////////// INCLUDES AFTER ///////////////////
/**********************************************/


include("css.php");

web_render_get_css($WEBBLOQUES,$CLASSSELECTED);
//prin($SELECTORS);

include("formularios/formularios.php");						


/**********************************************/
/////////////////// DRIVER /////////////////////
/**********************************************/

include("driver.php");

$COMMON['menu'] = web_procesar_menu($COMMON['menu'],"izquierda");
//prin($COMMON['menu']);

include("loaders.php");

////////////////////////////////////////////////
/**********************************************/

if($MASTERCOFIG['editar_friendly_url']=='1'){
	web_guardar_datos_htaccess($_GET,$ALIAS);
}



?>