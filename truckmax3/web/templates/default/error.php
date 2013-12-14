<?php //á
include("common/head.php");
?>
<body>
<?php

echo $HTML_ALL_INICIO;
echo $HTML_MAIN_INICIO;

include("common/header_pre.php");
?>
<div id="contenido_margen">
<?php
include("common/header.php");
include("common/menu.php"); 
include("common/status.php"); 
include("common/bar.php");

	?>
    <div class="div_canvas">
        <div class="div_sombra_left"></div>
        <div class="div_sombra_right"></div> 
		<!-- DISTRIBUCION INICIO -->         
	
        <div class="div_columna">
            <?php include("error/error_main.php"); ?>
        </div>
    
		<!-- DISTRIBUCION FIN -->    
	</div>    
    <?php

include("common/footer.php"); 
?>
</div>
<?php
include("common/footer_after.php"); 
echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;

?>
</body>
</html>