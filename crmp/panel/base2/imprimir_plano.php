<?php

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


$galerias=select("nombre,id_tipo,id","productos_fotos","where id_tipo=".$_GET['id'],0,

	array(
		'fotos'=>array('fotos'=>array(
										"id,file,fecha_creacion|productos_fotos_fotos|where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,100",
										"profot_imas",
										array(												 
										 	   'archivo'=>'1',
										 	   'thumb'=>'2,649x400,0',
										 	   'box'=>'2',
									)        																	
						)
			)
        )

	);

echo '<!DOCTYPE HTML>
<html lang="es">
<head><title>Plano</title></head><body>';
echo '<img src="'.$galerias[0]['fotos'][0]['archivo']).'" >';
echo '<script>window.print();</script>';
echo '</body>
</html>';

// prin($_GET);


// $fila = fila(

// 		"id_usuario,id_jefe"

// 		,"ventas_items"

// 		,"where id=".$_POST['id_venta']." "

// 		,0

// );





// insert(array(

// 			'fecha_creacion'=>'now()',

// 			'id_grupo'	=>	$_POST['id_venta'],

// 			'texto'		=>	'Imprimí',

// 			'tipo'		=>	'3',

// 			'id_usuario'=>	$fila['id_usuario'],

// 			'id_jefe'	=>	$fila['id_jefe']

// 			)

// 			,"ventas_mensajes"

// 			,0

// 			);





include("lib/compresionFinal.php");
