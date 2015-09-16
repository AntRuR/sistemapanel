<?php
chdir("../");	
include("lib/includes.php");
include("head.php");
?>
<body>
<?php
echo $HTML_ALL_INICIO;
echo $HTML_MAIN_INICIO;
include("header.php"); 		
include("boletines_vista.php"); 
include("foot.php"); 
echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;
?>
</body>
</html>
<?php 
?>