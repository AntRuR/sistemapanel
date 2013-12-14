<?php

session_start(); // Iniciar variables de sesión

$VALIDAR_SESION=(@$_COOKIE["admin"]=="1")?"":$VALIDAR_SESION;

if(trim($VALIDAR_SESION)!='' and  $login_proceso != '1'){

$datos_tabla = procesar_objeto_tabla($objeto_tabla[$VALIDAR_SESION]);	

$sesion_id			=	$datos_tabla['id'];
$sesion_vis			=	($datos_tabla['vis']=='')?"":" and ".$datos_tabla['vis']."='1' ";
$sesion_password	=	$datos_tabla['sesion_password'];
$sesion_login		=	$datos_tabla['sesion_login'];
$tabla_sesion		=	$datos_tabla['tabla'];


if( $tabla_sesion!='' and $sesion_id!='' and $sesion_password!='' and $sesion_login!='' ){

	
	// verificar que no sea un usuario logueado
	if(!isset($_SESSION['usuario_id']))
	{    // si es un usuario que retorna al sitio y ha guardado su sesión, recuperar sus variables
		$c_usuario = $_COOKIE['c_usuario'];
		$c_password  = strtolower($_COOKIE['c_password']);
	
		if($c_usuario != "" and $c_password != ""){
		
			$_SESSION['usuario_id'] = select_dato(
				$sesion_id,
				$tabla_sesion,
				"where $sesion_login='$c_usuario' and $sesion_password='$c_password' $sesion_vis "
				,0
				);  
	
		}
	}
	
	$usuario_id_sesion       = $_SESSION['usuario_id'];
	
	if($usuario_id_sesion==''){ header("Location: " . ((!(strpos($_SERVER['SCRIPT_NAME'], $DIR_CUSTOM)===false)) ? "../login.php" : "login.php" ) ); }

}

}

?>