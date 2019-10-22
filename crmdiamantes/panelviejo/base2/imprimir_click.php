<?php

//á
chdir("../");
include("lib/compresionInicio.php");
//include("lib/includes.php");
include("lib/global.php");
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util.php");
include("lib/webutil.php");
//	include("config/tablas.php");
include("lib/sesion.php");


include("lib/webutils.php");
include("lib/playmemory.php");

require_once( "lib/ini_manager.php" );

chdir("base2");

include("includes.php");


$fila = fila(
		"id_usuario,id_jefe"
		,"ventas_items"
		,"where id=".$_POST['id_venta']." "
		,0
);


insert(array(
			'fecha_creacion'=>'now()',
			'id_grupo'	=>	$_POST['id_venta'],
			'texto'		=>	'Imprimí',
			'tipo'		=>	'3',
			'id_usuario'=>	$fila['id_usuario'],
			'id_jefe'	=>	$fila['id_jefe']
			)
			,"ventas_mensajes"
			,0
			);


include("lib/compresionFinal.php");

?>