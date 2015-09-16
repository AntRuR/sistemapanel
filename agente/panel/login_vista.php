<?php //á


/// procesar campos		
if(trim($VALIDAR_SESION)==''){ header("Location: index.php"); }
$datos_tabla = procesar_objeto_tabla($objeto_tabla[$VALIDAR_SESION]);	

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

$saved[$VALIDAR_SESION]['crearopen']=1;
//echo "<pre>"; print_r($saved); echo "</pre>";

verificar_tabla($tabla_sesion);
	
/// asignar variables

$tbtitulo	=	"LOGIN";

$tbl		=	$tabla_sesion;
$tbf		=	"validacion";
$tb 		=	"val";

	
$tbcampos	=	$datos_tabla['form'];
$tblistado	=	array();
$tbquery	=   "";


include("vista.php");


?>