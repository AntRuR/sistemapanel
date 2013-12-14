<?php //á
include("lib/includes.php");
if(file_exists($DIR_CUSTOM.$FILE_DEFAULT)){	
header("Location: ".$DIR_CUSTOM.$FILE_DEFAULT);
} else {
header("Location: maquina.php");
}
?>