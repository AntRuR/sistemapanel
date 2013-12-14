<?php
if($_GET['ran']!=''){
	include("lib/compresionInicio.php");	/*para Content-Encoding*/ 
	include("lib/includes.php");
	$MEEE=$objeto_tabla[$_GET['OB']];
	$Proceso=$_GET['proceso'];	
		
	$Open=($_COOKIE['admin']=='1' and $vars['GENERAL']['mostrar_toolbars']=='1')?1:0;}	
	
	$EdicionPanel=($Open and $_SESSION['edicionpanel']=='1')?1:0;
	
/// procesar campos		
$datos_tabla = procesar_objeto_tabla($MEEE);	
verificar_tabla($datos_tabla['tabla']);	

if($Proceso=='login'){
		
	unset($datos_tabla['list']);

	$sesion_id			=	$datos_tabla['id'];
	$sesion_password	=	$datos_tabla['sesion_password'];
	$sesion_login		=	$datos_tabla['sesion_login'];
	$tabla_sesion		=	$datos_tabla['tabla'];
	
	foreach($datos_tabla['form'] as $i=>$camp){
	
		if($camp['sesion_login']=='1'){ $datos_tabla['form'][$i]['validacion']='0'; }
		if($camp['sesion_password']=='1'){ $datos_tabla['form'][$i]['tipo']='paslogin'; $datos_tabla['form'][$i]['validacion']='0';}
	
		if(!($camp['sesion_login']=='1' or $camp['sesion_password']=='1' )){
		
			unset($datos_tabla['form'][$i]);
		
		}
	}
	
	/// asignar variables
	$tbtitulo	=	"LOGIN";
	$tbl		=	$tabla_sesion;
	$tbf		=	"validacion";
	$tb 		=	"val";	
	$tbcampos	=	$datos_tabla['form'];
	$tblistado	=	array();
	$tbquery	=   "";	
		
} else {
	/// asignar variables
	$tbtitulo	=	procesar_dato($datos_tabla['titulo']);
	$tbl		=	$datos_tabla['tabla'];
	$tbf		=	$datos_tabla['archivo'];
	$tb 		=	$datos_tabla['prefijo'];	
	$tbcampos	=	$datos_tabla['form'];
	$tblistado	=	$datos_tabla['list'];
	$tbquery	=   $datos_tabla['query'];
}


$tblistadosize=sizeof($tblistado);
									
 
?>