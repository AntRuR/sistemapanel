<?php

if($_GET['ran']!=''){
	chdir("../");	
	//include("lib/compresionInicio.php");	/*para Content-Encoding*/ 
	include("lib/includes.php");
}	
/// procesar campos		
$datos_tabla = procesar_objeto_tabla($objeto_tabla['CONSULTAS']);	

verificar_tabla($datos_tabla['tabla']);
	
/// asignar variables

$tbtitulo	=	procesar_dato($datos_tabla['titulo']);

$tbl		=	$datos_tabla['tabla'];
$tbf		=	$datos_tabla['archivo'];
$tb 		=	$datos_tabla['prefijo'];
	
$tbcampos	=	$datos_tabla['form'];
$tblistado	=	$datos_tabla['list'];
$tbquery	=   $datos_tabla['query'];


include("vista.php");


if($_GET['ran']!=''){
	//include("lib/compresionFinal.php");	/*para Content-Encoding*/ 
}

?>