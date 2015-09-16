<?php //á

$web_path="web";

$panel_path="panel";

include($panel_path."/lib/compresionInicio.php");

$_GET['modulo'] = (isset($_GET['modulo']))?$_GET['modulo']:"home";

$file = $_GET['modulo'].".php";

include($web_path."/includes.php");

include($file);

chdir($root_dir);

include($panel_path."/lib/compresionFinal.php");

?>