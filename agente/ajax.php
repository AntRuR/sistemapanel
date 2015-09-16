<?php //á

$web_path="web";

$panel_path="panel";

include($web_path."/ajax_includes.php");

chdir($web_path."/modulos");

switch($_GET['mode']){
case "get":
	include("ajax_get.php");
break;
case "form":
	include("formularios.php");
break;
case "put":

break;
}

?>