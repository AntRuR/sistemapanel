<?php //á



$web_path="web"; //ruta de la carpeta web 



$panel_path="panel"; //ruta de la carpeta modulos 


if(substr(trim($_GET['modulo']),0,4)=='http'){

	header("HTTP/1.0 404 Not Found");

	exit();

}


include($panel_path."/lib/compresionInicio.php"); //compresion



if(isset($_GET['buscar'])){ 

 $_GET['modulo']='items';

 $_GET['tab']='productos';

 $_GET['acc']='list';

}


$file = $_GET['modulo'].".php"; //define modulo a incluir



include($web_path."/includes.php"); // includes de web



include($file);



chdir($root_dir);



include($panel_path."/lib/compresionFinal.php"); //compresion



?>