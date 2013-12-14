<?php //á
set_time_limit(0);
//error_reporting(E_ALL);
include("lib/compresionInicio.php");
include("lib/includes.php");

//print_r($_GET);

$sss=explode("|",$_GET['s']);

$lineas=array();
$items=select($sss['0'],$sss['1'],str_replace("==","=",$sss['2']."=".$_GET['s2']),0);
foreach($items as $item){
foreach($item as $dato){ $data[]=$dato; } 
$lineas[]=$data; unset($data);
}

echo json_encode($lineas);
	
include("lib/compresionFinal.php");
?>