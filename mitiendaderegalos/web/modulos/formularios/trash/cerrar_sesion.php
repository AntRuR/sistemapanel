<?php //á
switch($_GET['id']){
case "login":
	unset($_SESSION['login']);
	echo json_encode(array("js"=>"location.reload();"));
break;
case "publicar":
	delete("productos_items","where id='".$_SESSION['publicar']['usuario_temp']."'",0);
	unset($_SESSION['publicar']);
	echo json_encode(array("js"=>""));	
break;	
}	

?>