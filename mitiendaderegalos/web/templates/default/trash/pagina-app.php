<?php //á
include("common/head.php");
?>
<body>
<?php
echo HTML_ALL_INICIO;
echo HTML_MAIN_INICIO;
include("common/pre_header.php");
?>
<div id="contenido_margen">
<?php
include("common/header.php");
include("common/menu.php"); 
?>  
    <div class="div_canvas">
        <div class="div_sombra_left"></div>
        <div class="div_sombra_right"></div> 
<!-- DISTRIBUCION INICIO -->    




   
        
        <div class="div_fila">
        
            <div class="div_left div_columna">        
            <?php include("bloques/bars/bar_columna_1.php"); ?>
            </div>           
            
            <div class="div_main div_columna">        
            <?php
            switch($_GET['tab']){
            case "home":
                include("app/home.php");
            break;	
            case "carrito":
                include("app/carrito.php");
            break;
            case "faqs":
                include("app/faqs.php");
            break;	            
			case "pages":
                include("app/pages.php");
            break;		
            }
            ?>
            </div>
            
        </div>

        <div class="div_fila margen_arr">
        
        <?php include("bloques/bars/bar_fila_2.php"); ?>
		
		</div>
                         
    
    

<!-- DISTRIBUCION FIN -->    
	</div>
<?php	
include("common/footer.php"); 
?>
</div>
<?php
echo HTML_MAIN_FIN;	
echo HTML_ALL_FIN;
?>
</body>
</html>