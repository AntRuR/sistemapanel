<?php

chdir("../");
//include("lib/includes.php");
include("lib/global.php");
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util.php");
include("config/tablas.php");
include("lib/sesion.php");
include("lib/playmemory.php");

require_once( "lib/ini_manager.php" );

chdir("../");
//echo realpath("./");

$www="";

if($_GET['id']!=''){

	$items = select(
			"id,nombre,descripcion,dominio,ftp_user,ftp_pass,ftp_root,carpeta,logo,fecha_creacion",
			"proyectos",
			"where id in (".$_GET['id'].") order by id asc limit 0,100"
			,0
	);

} else {

	echo "prohibido actualizar todos los paneles";
	exit();

	$items= select(
			"id,nombre,descripcion,dominio,ftp_user,ftp_pass,ftp_root,carpeta,logo,fecha_creacion",
			"proyectos",
			"where 1 and  visibilidad='1' order by id asc limit 0,100"
			,0
	);

}

$AJUSTES[]=array("GENERAL","ESTILO_2","1");
//$AJUSTES[]=array("GENERAL","MODO_LOCAL_ARCHIVOS_REMOTOS","1");
//$AJUSTES[]=array("GENERAL","BG_COLOR_2","FFFFFF");
//$AJUSTES[]=array("GENERAL","BG_COLOR_3","C9E4E4");
//$AJUSTES[]=array("GENERAL","BG_COLOR_4","CCCCCC");
//$AJUSTES[]=array("GENERAL","MODO_LOCAL_ARCHIVOS_REMOTOS","1");
$AJUSTES0[]=array("GENERAL","titulo_font_size","\"35px\"");
$AJUSTES0[]=array("GENERAL","UPLOAD_FTP","\"0\"");
$AJUSTES0[]=array("GENERAL","WEBS","WEB_CONFIG");
$AJUSTES0[]=array("GENERAL","PAGES","PAGE_CONFIG");

//$AJUSTES0[]=array("GENERAL","MULTIWEBS","\"0\"");
//$AJUSTES0[]=array("GENERAL","MULTIPAGES","\"0\"");


foreach($items as $item){

	/*actualizar archivo panel*/
	$objeto_tabla_temp=$objeto_tabla;
	if($_GET['id']!=''){
		unset($objeto_tabla);
		include($item['carpeta']."/panel/config/tablas.php");
		$buffi='';
		foreach($objeto_tabla as $oott){

			foreach($oott['campos'] as $oocc){

				if(is_array($oocc['opciones'])){

					foreach($oocc['opciones'] as  $ookey=>$oovalor){

						$buffi.="\$OpcionesTabla['".$oott['tabla']."']['".$oocc['campo']."'][$ookey]='$oovalor';\n";

					}

				}

			}

		}


		if(file_exists($item['carpeta']."/web/modulos/panel.php")){
			$ffile=implode("",file($item['carpeta']."/web/modulos/panel.php"));
			list($uno,$dos,$tres)=between($ffile,"/*OPCIONES-START*/","/*OPCIONES-END*/");
			$f1=fopen($item['carpeta']."/web/modulos/panel.php","w+");fwrite($f1,$uno."/*OPCIONES-START*/\n".$buffi."/*OPCIONES-END*/".$tres);fclose($f1);
		}else{
			$f1=fopen($item['carpeta']."/web/modulos/panel.php","w+");fwrite($f1,"<?php \n\n/*OPCIONES-START*/\n".$buffi."/*OPCIONES-END*/\n\n?>");fclose($f1);
		}


	}

	$objeto_tabla=$objeto_tabla_temp;
	/*fin*/

	/*actualizar htaccess*/
	/*
	$from="############################
			#                          #
			#        GENERALES         #
			#                          #
			############################";
	$to="############################
			#                          #
			#          URLS            #
			#                          #
			############################";

	$htaccess="panel/lib/bridge/.htaccess";
	$HTaccess=file_get_contents($htaccess);
	$ht0=$item['carpeta']."/.htaccess";
	if(file_exists($item['carpeta']."/.htaccess")){
		$htpartes=between($HTaccess,$from,$to);
		echo "actualizar .htaccess<br>";
		$htpartes2=between(file_get_contents($ht0),$from,$to);
		$ht=$htpartes2[0].$from.$htpartes[1].$to.$htpartes2[2];
	} else {
		echo "crear .htaccess<br>";
		$ht=$HTaccess;
	}
	if(!file_exists($item['carpeta']."/index.php")){
		$ht=str_replace("#HOME-START
				#HOME-END","#HOME-START
				RewriteRule ^\$ panel/ [L]
				#HOME-END",$ht);
	}
	$carpeta=$item['carpeta'];
	$dominio=str_replace("www.","",$item['dominio']);
	$ht=str_replace("[CARPETA]",$carpeta,$ht);
	$ht=preg_replace("/(RewriteBase \/sistemapanel\/)([a-z0-9]{2,30})(\/)/","$1".$carpeta."$3",$ht);
	$ht=preg_replace("/(ErrorDocument 404 \/sistemapanel\/)([a-z0-9]{2,30})(\/index.php\?modulo=error&tab=404)/","$1".$carpeta."$3",$ht);
	$ht=preg_replace('/(RewriteCond %\{HTTP_HOST\} \^www\.)([a-z0-9\.\-]{6,30})(\$ \[NC\])/',"$1".$dominio."$3",$ht);
	$ht=preg_replace('/(RewriteRule \^\(\.\*\)\$ http:\/\/)([a-z0-9\.\-]{2,30})(\/\$1 \[R=301\,L\])/',"$1".$dominio."$3",$ht);

	$f1=fopen($ht0,"w+");fwrite($f1,$ht);fclose($f1);

	*/

	/**/

	$AJUSTES[]=array("GENERAL","dominio_estadisticas",$item['dominio']);

	$AJUSTES[]=array("INTERNO","CARPETA_PROYECTO",$item['carpeta']);

	$AJUSTES0[]=array("GENERAL","factory","Demiurgo");

	//echo "<pre>"; print_r($item); echo "</pre>";
	$archivos1=array();
	$dirs=array("panel/",
			"panel/lib/",
			/*
			 "panel/lib/sm/",
	"panel/lib/sm/classes/",
	"panel/lib/sm/classes/Swift/",
	"panel/lib/sm/classes/Swift/ByteStream/",
	"panel/lib/sm/classes/Swift/CharacterReader/",
	"panel/lib/sm/classes/Swift/CharacterReaderFactory/",
	"panel/lib/sm/classes/Swift/CharacterStream/",
	"panel/lib/sm/classes/Swift/Encoder/",
	"panel/lib/sm/classes/Swift/Events/",
	"panel/lib/sm/classes/Swift/KeyCache/",
	"panel/lib/sm/classes/Swift/Mailer/",
	"panel/lib/sm/classes/Swift/Mime/",
	"panel/lib/sm/classes/Swift/Mime/ContentEncoder/",
	"panel/lib/sm/classes/Swift/Mime/HeaderEncoder/",
	"panel/lib/sm/classes/Swift/Mime/Headers/",
	"panel/lib/sm/classes/Swift/Plugins/",
	"panel/lib/sm/classes/Swift/Plugins/Decorator/",
	"panel/lib/sm/classes/Swift/Plugins/Loggers/",
	"panel/lib/sm/classes/Swift/Plugins/Pop/",
	"panel/lib/sm/classes/Swift/Plugins/Reporters/",
	"panel/lib/sm/classes/Swift/StreamFilters/",
	"panel/lib/sm/classes/Swift/Transport/",
	"panel/lib/sm/classes/Swift/Transport/Esmtp/",
	"panel/lib/sm/classes/Swift/Transport/Esmtp/Auth/",
	"panel/lib/sm/dependency_maps/",
	*/
			"panel/lib/bridge/",
			"panel/lib/PHPExcel/",
			"panel/lib/PHPExcel/CachedObjectStorage/",
			"panel/lib/PHPExcel/Calculation/",
			"panel/lib/PHPExcel/Cell/",
			"panel/lib/PHPExcel/RichText/",
			"panel/lib/PHPExcel/Shared/",
			"panel/lib/PHPExcel/Shared/JAMA/",
			"panel/lib/PHPExcel/Shared/JAMA/utils/",
			"panel/lib/PHPExcel/Shared/OLE/",
			"panel/lib/PHPExcel/Shared/OLE/PPS/",
			"panel/lib/PHPExcel/Shared/trend/",
			"panel/lib/PHPExcel/Style/",
			"panel/lib/PHPExcel/Worksheet/",
			"panel/lib/PHPExcel/Worksheet/Drawing/",
			"panel/lib/PHPExcel/Writer/",
			"panel/lib/PHPExcel/Writer/Excel5/",
			"panel/lib/fotos_prueba/",
			"panel/img/",
			"panel/img/mb_Components/",
			"panel/css/",
			"panel/css/fonts/",
			"panel/css/fonts/caviardreams/",
			"panel/css/images/",
			"panel/css/Other/",
			"panel/css/MooTooltips/",
			"panel/js/",
			"panel/js/vendor/",
			//"panel/js/MooEditable12/",
			//"panel/js/MooEditable13/",
			"panel/removerbom/");

	//	$dirs=array("img/");
	@mkdir($item['carpeta']);
	foreach($dirs as $dir){
		@mkdir($item['carpeta']."/".$dir);
		$directorio = dir($dir);
		while($fichero=$directorio->read()) {
			if($fichero!='.' and $fichero!='..' and $fichero!='desktop.ini' and !is_dir($dir.$fichero) ){
				$arr =$dir.$fichero."(" . (file_exists($dir.$fichero)?"1":"0") . ") -- ".$item['carpeta']."/".$dir.$fichero."(" . (file_exists($item['carpeta']."/".$dir.$fichero)?"1":"0") . ") - ";
				$arr.=( (copy($dir.$fichero , realpath("./")."/".$item['carpeta']."/".$dir.$fichero))?"1":"0");
				$archivos1[] = $arr;
			}
		}
		$directorio->close();

	}

	echo "<h3>actualizando en carpeta ".$item['carpeta']."</h3>";

	//	echo "<a href=\"../../".$item['carpeta']."/panel\">ir a ".$item['carpeta']."</a> | ";

	//	echo "<a href=\"../../panel/index.php\">volver a proyectos</a><br>";

	echo "<pre>"; print_r($archivos1); echo "</pre>";



	if(file_exists($item['carpeta']."/panel/config/config.ini")){


		$var_semilla=$vars;
		$vars_carpeta=parse_ini_file($item['carpeta']."/panel/config/config.ini",true);
		foreach($vars_carpeta as $aa=>$vargru){
			foreach($vargru as $bb=>$var){
				unset($var_semilla[$aa][$bb]);
			}
		}
		//prin(parse_ini_file($item['carpeta']."/panel/config/config.ini",true));
		foreach($var_semilla as $aa=>$vargru){
			foreach($vargru as $bb=>$var){
				set_params_ini($aa,$bb, $var, $item['carpeta']."/panel/config/config.ini" );
			}
		}

		//prin($AJUSTES0);
		if(sizeof($AJUSTES0)>0){
			foreach($AJUSTES0 as $ajuste){
				set_params_ini($ajuste[0],$ajuste[1],$ajuste[2],$item['carpeta']."/panel/config/config.ini" );
				echo "<div>config: ".$ajuste[0]."->".$ajuste[1]."->".$ajuste[2]."->".$item['carpeta']."/panel/config/config.ini"."</div>";
			}
		}

		//prin(parse_ini_file($item['carpeta']."/panel/config/config.ini",true));

	}



}

?>