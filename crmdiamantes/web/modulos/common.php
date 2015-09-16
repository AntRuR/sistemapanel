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



$INCLUDE['version']="?v=1532";



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


function web_render_get_css($objs,$CLASSSELECTED){
	global $SERVER;
	global $HEAD;
	global $SELECTORS;
	global $SELECTED;
	global $vars;
	global $LIBRARIES;
	global $WEBBLOQUES;
	global $CLASSSELECTED;
	global $CLASSPARAMETERS;
	global $MASTERCOFIG;
	list($local,$dos)=explode($vars['INTERNO']['CARPETA_PROYECTO'],$SERVER['BASE']);

	$Ruta2 = $local.'/panel/csslib/';
	$Ruta3 = "../../../panel/csslib/";

	if($_SESSION['edicionweb']=='1' and $SERVER['LOCAL']=='1' and $MASTERCOFIG['editar_css']=='1'){

		foreach($objs as $key=>$obj){

			$objA=array();
			$objA=explode(",",$obj);

			foreach($objA as $ob){

				$obj2['id_class']=$key."-".$ob;
				$obj2['carpeta']=$ob;
				$obj2['selected']=$CLASSSELECTED[$obj2['id_class']];
				$iidd=$obj2['id_class'];
				$carpeta=$obj2['carpeta'];


				$directorio=$Ruta3.$carpeta;
				if(is_dir($directorio)){
					$directorio_s = dir($directorio);
					while($fichero=$directorio_s->read()) {
						$archivo=$directorio."/".$fichero;
						if($fichero!='.' and $fichero!='..' and is_dir($archivo) ){
							$arra2[]=$fichero;
						}
					}
					$directorio_s->close();
				}


				foreach($arra2 as $arr){
					//echo "../../".THEME_PATH.'css/'.$carpeta."/".$arr.'/css.css'; echo "<br>";
					if(file_exists($Ruta3.$carpeta."/".$arr.'/css.css')){
						//$it['path']='css/'.$carpeta."/".$arr.'/css.css';
						$it['option']=$arr;
						if($arr==$obj2['selected']){
							$it['selected']=1;
						}
						$SELECTORS[$key][$iidd]['tipo']=$LIBRARIES[$ob]['name'];
						$SELECTORS[$key][$iidd]['path']=$Ruta2.$carpeta;
						$SELECTORS[$key][$iidd]['options'][]=$it;
						unset($it);
					}
				}

				unset($arra2);

			}


		}

		list($local,$dos)=explode($vars['INTERNO']['CARPETA_PROYECTO'],$SERVER['BASE']);
		/*
		$Url_panel_lib=$vars['LOCAL']['url_publica']."/web/templates/".THEME_PATH."/css/";
		$Path_panel_lib="../templates/".THEME_PATH."/css/lib/";
		*/
		$Url_panel_lib=$local."/panel/csslib/";
		$Path_panel_lib="../../../panel/csslib/";

		foreach($WEBBLOQUES as $key=>$obj){

			$objA=array();
			$objA=explode(",",$obj);

			foreach($objA as $ob){

				$obj2['id_class']=$key."-".$ob;
				$obj2['carpeta']=$ob;
				$obj2['selected']=$CLASSSELECTED[$obj2['id_class']];
				$iidd=$obj2['id_class'];
				$carpeta=$obj2['carpeta'];

				$ccssss[$obj2['id_class']."|".$obj2['carpeta']."/".$CLASSSELECTED[$obj2['id_class']]]=$obj2['carpeta']."/".$CLASSSELECTED[$obj2['id_class']];

			}

		}

		$HEAD['INCLUDES']['css'][]='css/css.css';

		$HEAD['INCLUDES']['css'][]='lib/css_temp.css';

		foreach($ccssss as $Nam=>$cs){

			list($name,$ex)=explode("|",$Nam);
			$uurrll=$Url_panel_lib.$cs."/css.css?name=".$name."&".str_replace("#","",$CLASSPARAMETERS[$name]);
	/* 		echo $uurrll."\n";
			echo $cs."\n\n";	 	*/
			$HEAD['INCLUDES']['cssabs']['css_'.$name]=$uurrll;

		}

		$HEAD['INCLUDES']['cssabs'][]=$local.$vars['INTERNO']['CARPETA_PROYECTO'].'/'.THEME_PATH.'css/css_particular.php?particular=1';


	} else {

		$HEAD['INCLUDES']['css'][]='lib/css.css';

	}

	$SELECTED=$CLASSSELECTED;


}

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



include("driver_render.php");



//$COMMON['header_after']['menu'] = web_procesar_menu($COMMON['header_after']['menu'],"izquierda");

//prin($COMMON['header_after']['menu']);

//prin($COMMON['menu']);



include("loaders.php");



////////////////////////////////////////////////

/**********************************************/



if($MASTERCOFIG['editar_friendly_url']=='1'){

	web_guardar_datos_htaccess($_GET,$ALIAS);

}







?>