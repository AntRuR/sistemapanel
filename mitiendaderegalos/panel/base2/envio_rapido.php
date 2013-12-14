<?php //á

//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

include("crear_envio.php");

$url = "http://portafolioeconomico.com/panel/base2/hilo_boletin.php";
echo file_get_contents($url);

?>