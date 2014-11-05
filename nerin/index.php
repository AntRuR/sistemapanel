<?php //á

$web_path	="web"; //ruta de la carpeta APP 

$panel_path	="panel"; //ruta de la carpeta PANEL 

$file = $_GET['modulo'].".php"; //define modulo a incluir

include $web_path."/index_includes.php"; // includes de web

// estamos en web/views
include "views_driver.php" ;