<?php //á

include("lib/compresionInicio.php");

$login_proceso = 1;	
	
include("lib/includes.php");


foreach($objeto_tabla as $i=>$item){
	$objeto_tabla[$i]['menu']='0';
}	
	
include("head.php");
?>
<body>
<?php
if($SERVER['browser']=='IE6'){
?>
<style>
#div_contenedor { background-color:#FFFFFF;}
</style>
<?php
}
echo $HTML_ALL_INICIO;
echo $HTML_MAIN_INICIO;
include("header.php"); 		
include("login_vista.php"); 
include("foot.php"); 
echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;
?>
</body>
</html>
<?php 
include("lib/compresionInicio.php");
?>