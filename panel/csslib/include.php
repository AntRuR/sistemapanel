<?php
header("Content-type: text/css");
include('../../../lib/util.php');
error_reporting(0);

$carps=explode("/",$_SERVER['SCRIPT_NAME']);
$archivo=$carps[sizeof($carps)-2];

echo "\n**************************************************\n";
echo "* RUTA       : http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']." \n";
echo "* ARCHIVO    : $archivo \n";
echo "* NAME       : " . $_GET['name'] . " \n";
echo "* PARAMETROS : ". ( http_build_query($_GET) ) ." \n";
echo "**************************************************\n";

if($_GET['name']!=''){
	$name=".".$_GET['name'];
}else{
	$name=".".$archivo;
}



?>