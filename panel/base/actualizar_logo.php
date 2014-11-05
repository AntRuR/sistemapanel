<?php



//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

chdir("../");
//include("lib/includes.php");
include("lib/global.php");
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util2.php");
include("config/tablas.php");
include("lib/sesion.php");
include("lib/playmemory.php");

require_once( "lib/ini_manager.php" );

chdir("../");
//echo realpath("./");
$www="";

$item = select_fila(
		"carpeta,logo,fecha_creacion",
		"proyectos",
		"where id='".$_GET['id']."' order by id asc limit 0,100"
		,0
);



if($_GET['confirm']!='1'){

	echo "<h2>Confirmas que deseas actualizar el logo?</h2>";
	//echo "<pre>"; print_r($_SERVER); echo "</pre>";
	echo "<input type=button onclick=\"location.href='?id=".$_GET['id']."&confirm=1';\" value='SI' /><br><br>";

	//echo "<a><< volver</a>";
	echo "<a href=\"../../".$item['carpeta']."/panel\">ir a ".$item['carpeta']."</a> | ";

	echo "<a href=\"../../panel/index.php\">volver a proyectos</a><br>";

	exit();

}

echo "<a href=\"../../".$item['carpeta']."/panel\">ir a ".$item['carpeta']."</a> | ";

echo "<a href=\"../../panel/index.php\">volver a proyectos</a><br>";



//echo "<pre>"; print_r($item); echo "</pre>";
//prin($vars);
$logo = str_replace('"','',str_replace('src="','',str_replace('width="" height=""','',dimensiona_img('proy_imas', $item['fecha_creacion'], str_replace(".","_2.",$item['logo'])))));

$logo_local=str_replace("//","/",str_replace(array($vars['LOCAL']['httpfiles']),array($vars['LOCAL_FTP']['ftp_files_root']),$logo));
$exxx=explode(".",$logo_local);
$ext=$exxx[sizeof($exxx)-1];

$logo_destino=$item['carpeta']."/panel/img/logo_".$item['carpeta'].".".$ext;
//echo $logo_destino."<br>";
//prin($vars);

$conn_id = ftp_connect($vars['LOCAL_FTP']['ftp_files_host'],21) or die("host error");

$login_result = ftp_login($conn_id, $vars['LOCAL_FTP']['ftp_files_user'], $vars['LOCAL_FTP']['ftp_files_pass']) or die("login error");ftp_pasv($conn_id, true);


echo "<br>";

echo "$logo_local     ---->>>   $logo_destino<br>";

echo (ftp_get($conn_id,$logo_destino,trim($logo_local),FTP_BINARY))?"copiado exitosamente a $logo_destino":"copia fallida";
/*
 $ico_destino=$item['carpeta']."/panel/img/favicon.ico";
$Imagick = new Imagick($logo_destino);
$Imagick->cropThumbnailImage(16,16);
$Imagick->setFormat('ico');
$Imagick->writeImage($ico_destino);
*/
echo "<br>";


//chdir("../");
echo file_exists($item['carpeta']."/panel/config/config.ini")?"logo actualizado correctamente":"error al actualizar config.ini";

echo "<br>";

set_params_ini("GENERAL","img_logo", "img/logo_".$item['carpeta'].".".$ext, $item['carpeta']."/panel/config/config.ini" );

?>
