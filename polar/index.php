<?php //á


// if($_GET['modulo']!='error'){
// 	$visitor_file="visitor.txt";
// 	$vis=implode("",file($visitor_file));
// 	if (!isset($_COOKIE['visiter2'])){
// 	setcookie('visiter2','1',time()+60*60*24);
// 	$f1=fopen($visitor_file,"w+");
// 	fwrite($f1,++$vis);
// 	fclose($f1);	
// 	}
// 	$VISITAS=$vis;
// 	
// }

$web_path="web"; //ruta de la carpeta APP 

$panel_path="panel"; //ruta de la carpeta PANEL 

include($panel_path."/lib/compresionInicio.php"); //compresion

$file = $_GET['modulo'].".php"; //define modulo a incluir

include($web_path."/includes.php"); // includes de web

// estamos en web/views
include("driver.php");

chdir($root_dir);

include($panel_path."/lib/compresionFinal.php"); //compresion