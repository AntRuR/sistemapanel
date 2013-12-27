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

$item = select_fila(
		"id,nombre,descripcion,dominio,ftp_user,ftp_pass,ftp_root,carpeta,logo,fecha_creacion",
		"proyectos",
		"where id='".$_GET['id']."' order by id asc limit 0,100"
		,0
);

update(
array('fecha_acceso'=>'now()'),
"proyectos",
"where id='".$_GET['id']."'",
0
);
//exit();
// prin("Location: ../../".$item['carpeta']."/panel");
header("Location: ../".$item['carpeta']."/panel");

