<?php

$COMANDOS_OBJETO=array(
				'inp','short','long'
				,'int','int5'
				,'fot','vid','txt'
				,'bit1','bit'
				,'fechc','fech'						
				,'del'
				,'grupos','sub','items'
				);
				
$COMANDOS_TUTO="
CAMPOS:
inp:		input,w:150					ej: nombre:inp
short:		input,w:50					ej: nombre:short
long:		input,w:300					ej: nombre:long
int:		input,variable:float		ej: numero:int
int5:		input,variable:float,w:5	ej: numero:int5
bit:		com,radio,w:50,default:0	ej: opcion:bit
bit1:		com,radio,w:50,default:1	ej: opcion:bit1
bit:		img,com,radio,w:50			ej: opcion:bit
fech:		fch,w:100					ej: fecha:fech
fechc:		fch,contante,w:100			ej: fecha:fech



";				

$LIBRARIES['web']=array('name'=>"web",'value'=>
'
BODY {bg=#000,w=972,font=calibri,s}
HEADERPRE {h,s}
HEADER {h=201,m-b=-10,bg,s}
HEADERAFTER {h,s}
CANVAS {min-h=350,bg=#FFF,inter=5,dbl=178M,tpl,borde=1,p-b,s}
FOOTERPRE {h,s}
FOOTERAFTER {h,s}
'
); 

$LIBRARIES['menus']=array('name'=>"Menu",'value'=>
'
ME{ex=jpg,s}
UL-IZQ{ena=0,w=5}
UL-DER{ena=0,w=5}
LI-IZQ{ena=0,w=5}
LI-DER{ena=0,w=5}
LI-BOR{ena=0,w=1,bg}
A{h,m-lados=1,p-lados,p-t,size,color,bg,color-sel,bg-sel,s}
'
); 

$LIBRARIES['bloques']=array('name'=>"Block",'value'=>
'
BLOQUE{m-t,m-b}
ARRIBA{ena=1,dis,min-h,size,color,bg,bg-out,p-lados,p-t,p-b,s}
SUBARRIBA{ena=1,dis,min-h,size,color,bg,p-lados,p-t,s}
MARCO{min-h,bg,bg-out,p-t,p-izq,p-der,p-b,scroll,h,m,s}
ABAJO{ena=1,dis,min-h,size,color,bg,bg-out,p-lados,p-t,s}
'
);

$LIBRARIES['listados']=array('name'=>"List",'value'=>	
'
FILA{p-lados,w=100%,float=left,s}
PAGINACION{ena=1,dis,size,color,color-sel,m-izq,p}
ITEM{ena=1,h=auto,min-h,w=100%,bg,bg-sel,bg-out,s}
FOTO{ena=1,w,h,p=0,bg,borde,bg-sel,borde-w=1,borde-sel,sangria=0,m-b,s}
TITULO{ena=1,color,bg,size,align,text,weight,s}
SUBTITULO{ena=1,color,size,align,text,weight,s}
TEXTO{ena=1,size,color,align,text,weight,s}
FECHA{ena=0}
PRECIO{ena=0,w,h,p-a,p-i,p-d}
CARRITO{ena=0}
'
);

$LIBRARIES['formularios']=array('name'=>"Form",'value'=>
'
LEGEND{ena=0,color,size,s}
FILA{w,color,s}
LABEL{color,w,align=right,s}
INPUT{borde,bg,color,w,ta-h,s}
SMALL{color,s}
'
);
$LIBRARIES['footers']=array('name'=>"Foot",'value'=>
'
FILA{h,bg}
INFO{align,color,color-sel,p-b}
MENU{align,color,color-sel,p-b}
'
);
$LIBRARIES['fichas']=array('name'=>"File",'value'=>
'
FILA{p-lados,w=100%,float=left,s}
PAGINACION{ena=1,dis}
ITEM{ena=1,h=auto,min-h,w=100%,bg,bg-sel,bg-out,s}
FOTO{ena=1,w,h,p=0,bg,borde,bg-sel,borde-w=1,borde-sel,sangria=0,m-b,s}
TITULO{ena=1,color,bg,size,align,text,weight,s}
SUBTITULO{ena=1,color,size,align,text,weight,s}
TEXTO{ena=1,size,color,align,text,weight,s}
FECHA{ena=0}
PRECIO{ena=0,w,h,p-a,p-i,p-d}
CARRITO{ena=0}
'
);
$LIBRARIES['tablas']=array('name'=>"Tbl",'value'=>
'

'
);



//error_reporting(0);

//date_default_timezone_set('America/New_York');
date_default_timezone_set('America/Lima');

$vars=parse_ini_file("config/config.ini",true);
//echo "<pre>"; print_r($vars); echo "</pre>";
$vars_global=$vars['GENERAL'];

$UPLOAD_FTP=(isset($vars_global['UPLOAD_FTP']))?$vars_global['UPLOAD_FTP']:1;

extract($vars_global);
if ($_SERVER['SERVER_NAME']=="localhost" or $_SERVER['SERVER_NAME']=="127.0.0.1") {

	$vars['LOCAL']['httpfiles']=($vars['GENERAL']['MODO_LOCAL_ARCHIVOS_REMOTOS']==1)?$vars['REMOTE']['httpfiles']:$vars['LOCAL']['httpfiles'];
	$vars_server=$vars['LOCAL'];
	$vars_server_mysql=$vars['LOCAL_MYSQL'];
	$vars_server_ftp=$vars['LOCAL_FTP'];
	$server_place="LOCAL";	
	$Local=1;
	$SERVER['LOCAL']=1;
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
	
} else {
	$vars_server=$vars['REMOTE'];
	$vars_server_mysql=$vars['REMOTE_MYSQL'];
	$vars_server_ftp=$vars['REMOTE_FTP'];
	$server_place="REMOTO";
	$Local=0;
	$SERVER['LOCAL']=0;
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	
}


$parse=parse_url($_SERVER['HTTP_REFERER']);
$SERVER['from_externo']=($parse['host']!=$_SERVER['SERVER_NAME'] )?1:0;
$SERVER['from_interno']=($SERVER['from_externo'])?0:1;

$SERVER['REDIRECT_QUERY_STRING']=$_SERVER['REDIRECT_QUERY_STRING'];
		
/*
$vars_server_local=$vars['LOCAL'];
$vars_server_remoto=$vars['REMOTE'];
$vars_server_ftp_local=$vars['LOCAL_FTP'];
$vars_server_ftp_remoto=$vars['REMOTE_FTP'];
*/
$get_num_vars=0;
foreach($vars as $vars2){
foreach($vars2 as $vars3){
$get_num_vars++;
}
}

extract($vars_server);
extract($vars_server_mysql);
extract($vars_server_ftp);

$HTML_ALL_INICIO    = '
<div id="div_allcontent" >
	<div class="div_sombra_left"></div>
	<div class="div_sombra_right"></div>	
	<div id="div_contenedor" >';		
	
$HTML_MAIN_INICIO   = '
		<div class="contenido_principal" id="contenido_principal"  >';
		
$HTML_MAIN_FIN 		= '
		</div>';		

$HTML_ALL_FIN		= '
	</div>
</div>'; 

$HTML_ESQUINAS_ARRIBA    = '<div class="linea_arriba">
								<div class="arizq"></div>
								<div class="arder"></div>
								<div class="armed"></div>
							</div>';
							
$HTML_ESQUINAS_ABAJO    = '<div class="linea_abajo">
								<div class="abizq"></div>
								<div class="abder"></div>
								<div class="abmed"></div>
							</div>';							

define(HTML_ALL_INICIO,$HTML_ALL_INICIO);
define(HTML_MAIN_INICIO,$HTML_MAIN_INICIO);
define(HTML_MAIN_FIN,$HTML_MAIN_FIN);
define(HTML_ALL_FIN,$HTML_ALL_FIN);

define(CLAV,"guillermolozan");


$DEPARTAMENTOS_PERU = array(
							"Amazonas",
							"Áncash",
							"Apurímac",
							"Arequipa",
							"Ayacucho",
							"Cajamarca",
							"Callao",
							"Cusco",
							"Huancavelica",
							"Huánuco",
							"Ica",
							"Junín",
							"La Libertad",
							"Lambayeque	",
							"Lima",
							"Loreto",
							"Madre de Dios",
							"Moquegua",
							"Pasco",
							"Piura",
							"Puno",
							"San Martín",
							"Tacna",
							"Tumbes"
							);

$script_A = explode("/",$_SERVER['REQUEST_URI']);
$url_script=$script_A[sizeof($script_A)-1];

$script_A = explode("/",$_SERVER['SCRIPT_FILENAME']);
$file_script=$script_A[sizeof($script_A)-1];

$script_A = explode("/",$_SERVER['PHP_SELF']);
unset($script_A[sizeof($script_A)-1]);
$dir_script=implode("/",$script_A);

$SERVER['URL']=$url_script;
$SERVER['ARCHIVO']=$file_script;
$SERVER['BASE']="http://".$_SERVER['HTTP_HOST'].$dir_script."/";

$LOGIN=(!(strpos($_SERVER['SCRIPT_NAME'], "login.php")===false))?1:0;

$BGCOLOR_DESARROLLO="#FFEEE0";

$LOREN_IPSUM="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, s";


$LOREN_IPSUM_HTML="<p>$LOREN_IPSUM</p><p>$LOREN_IPSUM</p><p>$LOREN_IPSUM</p>";

$limite_campos_en_lista=5;


$STOPWORDS=array();
$STOPWORDS_=file("stopwords.txt");
foreach($STOPWORDS_ as $stop){
$STOPWORDS[]=trim($stop);
}
function get_browser_()
{
	global $_SERVER;
	$user_agent=$_SERVER['HTTP_USER_AGENT'];
	$browsers = array(
		'Opera' => 'Opera',
		'Firefox'=> '(Firebird)|(Firefox)',
		'Galeon' => 'Galeon',
		'Mozilla'=>'Gecko',
		'MyIE'=>'MyIE',
		'Lynx' => 'Lynx',
		'Netscape' => '(Mozilla/4\.75)|(Netscape6)|(Mozilla/4\.08)|(Mozilla/4\.5)|(Mozilla/4\.6)|(Mozilla/4\.79)',
		'Konqueror'=>'Konqueror',
		'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)',
		'IE8' => '(MSIE 8\.[0-9]+)',
		'IE7' => '(MSIE 7\.[0-9]+)',
		'IE6' => '(MSIE 6\.[0-9]+)',
		'IE5' => '(MSIE 5\.[0-9]+)',
		'IE4' => '(MSIE 4\.[0-9]+)',
	);
 
	foreach($browsers as $browser=>$pattern)
	{
		if (eregi($pattern, $user_agent))
			return $browser;
	}
	return 'Unknown';
	
}

$SERVER['browser']=get_browser_();

$combos=array(
				'inp'	=>'inp'
				,'int'	=>'int'
				,'txt'	=>'txt'
				,'fot'	=>'fot'
				,'fech'	=>'fech'
				,'bit'	=>'bit'
				,'opc'	=>'opc'
				
				);
				
$EDITOR_TEXTUAL_CAMPOS = "";
$EDITOR_TEXTUAL_CAMPOS.= "<div class='dredre'>";
$EDITOR_TEXTUAL_CAMPOS.= "<div>";
$EDITOR_TEXTUAL_CAMPOS.= "<input type='text' id='nuevo_campo' />";
$EDITOR_TEXTUAL_CAMPOS.= "<select>";
foreach($combos as $com=>$bos){ $EDITOR_TEXTUAL_CAMPOS.= "<option value='$com'>$bos</option>"; }
$EDITOR_TEXTUAL_CAMPOS.= "</select>";
$EDITOR_TEXTUAL_CAMPOS.= "</div>";
$EDITOR_TEXTUAL_CAMPOS.= "<div style='position:relative;'>";
$EDITOR_TEXTUAL_CAMPOS.= "<textarea id='jjjson' class='flext growme' style='border:1px solid #000;' >";
$EDITOR_TEXTUAL_CAMPOS.= "</textarea>";
$EDITOR_TEXTUAL_CAMPOS.= "<a style='position:absolute;right:5px;top:0px;'
 href='#' onclick=\"javascript:procesar_objt(); return false;\" rel='nofollow' >procesar campos</a>";
$EDITOR_TEXTUAL_CAMPOS.= "</div>";
$EDITOR_TEXTUAL_CAMPOS.= "</div>";
$EDITOR_TEXTUAL_CAMPOS.= "<script>";
$EDITOR_TEXTUAL_CAMPOS.= "$('jjjson').addEvent('keydown',function(event){if(event.key=='a'&&event.control){procesar_objt();};});";
$EDITOR_TEXTUAL_CAMPOS.= "</script>";

$EDITOR_TEXTUAL_PROPIEDADES = "";
$EDITOR_TEXTUAL_PROPIEDADES.= "<div class='dredre'>";
$EDITOR_TEXTUAL_PROPIEDADES.= "<div>";
$EDITOR_TEXTUAL_PROPIEDADES.= "<input type='text' id='nueva_propiedad' />";
$EDITOR_TEXTUAL_PROPIEDADES.= "<select>";
foreach($combos as $com=>$bos){ $EDITOR_TEXTUAL_PROPIEDADES.= "<option value='$com'>$bos</option>"; }
$EDITOR_TEXTUAL_PROPIEDADES.= "</select>";
$EDITOR_TEXTUAL_PROPIEDADES.= "</div>";
$EDITOR_TEXTUAL_PROPIEDADES.= "<div style='position:relative;'>";
$EDITOR_TEXTUAL_PROPIEDADES.= "<textarea id='jjjsonprop' class='flext growme' style='border:1px solid #000;' >";
$EDITOR_TEXTUAL_PROPIEDADES.= "</textarea>";
$EDITOR_TEXTUAL_PROPIEDADES.= "<a style='position:absolute;right:5px;top:0px;'
 href='#' onclick=\"javascript:procesar_props(); return false;\" rel='nofollow' >procesar propiedades</a>";
$EDITOR_TEXTUAL_PROPIEDADES.= "</div>";
$EDITOR_TEXTUAL_PROPIEDADES.= "</div>";
$EDITOR_TEXTUAL_PROPIEDADES.= "<script>";
$EDITOR_TEXTUAL_PROPIEDADES.= "$('jjjsonprop').addEvent('keydown',function(event){if(event.key=='a'&&event.control){procesar_props();};});";
$EDITOR_TEXTUAL_PROPIEDADES.= "</script>";

$EDITOR_TEXTUAL_OBJETO = "";
$EDITOR_TEXTUAL_OBJETO.= "<div class='dredre'>";
$EDITOR_TEXTUAL_OBJETO.= "<div>";
$EDITOR_TEXTUAL_OBJETO.= "<input type='text' id='nuevo_objecto' />";
$EDITOR_TEXTUAL_OBJETO.= "<select>";
foreach($combos as $com=>$bos){ $EDITOR_TEXTUAL_OBJETO.= "<option value='$com'>$bos</option>"; }
$EDITOR_TEXTUAL_OBJETO.= "</select>";
$EDITOR_TEXTUAL_OBJETO.= "</div>";
$EDITOR_TEXTUAL_OBJETO.= "<div style='position:relative;'>";
$EDITOR_TEXTUAL_OBJETO.= "<textarea id='jjjsonproy' class='flext growme' style='border:2px solid red; background-color:#f5f5f5;'>";
$EDITOR_TEXTUAL_OBJETO.= "</textarea>";
$EDITOR_TEXTUAL_OBJETO.= "<a style='position:absolute;right:5px;top:0px;'
 href='#' onclick=\"javascript:procesar_proyecto(); return false;\" rel='nofollow' >procesar proyecto</a>";
$EDITOR_TEXTUAL_OBJETO.= "</div>";
$EDITOR_TEXTUAL_OBJETO.= "</div>";
$EDITOR_TEXTUAL_OBJETO.= "<script>";
$EDITOR_TEXTUAL_OBJETO.= "$('jjjsonproy').addEvent('keydown',function(event){if(event.key=='a'&&event.control){procesar_proyecto();};});";
$EDITOR_TEXTUAL_OBJETO.= "</script>";




	
?>