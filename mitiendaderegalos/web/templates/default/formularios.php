<?php //á
include("common/head.php");
?>
<body>
<?php
echo HTML_ALL_INICIO;
echo HTML_MAIN_INICIO;
include("common/header_pre.php");
?>
<div id="contenido_margen">
<?php
include("common/header.php");
include("common/header_after.php");
include("common/menu.php"); 
include("common/status.php"); 
include("common/bar.php");
?>
    <div class="div_canvas">
		
        <!-- DISTRIBUCION INICIO -->
        
        <div class="div_fila">
            
            <div class="div_columna div_col_1d3">        
            	<?php include(incluget("bloques/izquierda_videos.php")); ?>
            	<?php include(incluget("bloques/izquierda_publicidad_fotos.php")); ?>
                <?php include(incluget("bloques/izquierda_recomendar.php",array('conector'=>'recomendar'))); ?>                
            </div>        
            
            <div class="div_columna div_col_2d3">        
            	<?php include("formularios/formularios.php"); ?>
            </div>

            <div class="div_columna div_col_3d3"> 
                <?php include(incluget("bloques/derecha_inscripciones.php")); ?>            
                <?php include(incluget("bloques/derecha_boletin.php")); ?>               
            	<?php include(incluget("bloques/derecha_publicidad_fotos.php")); ?>
            	<?php include(incluget("bloques/derecha_publicidad.php")); ?>
            </div>                                     
            
        </div>   
        
        <div class="div_fila">
        	<?php include(incluget("bloques/bloque_banner_3.php")); ?>                    
        </div>              
        
		<!-- DISTRIBUCION FIN -->    
        <div class="clean"></div>
	</div>
<?php	
include("common/footer_pre.php"); 
include("common/footer.php"); 
?>
</div>
<?php
include("common/footer_after.php"); 
echo HTML_MAIN_FIN;	
echo HTML_ALL_FIN;
?>
</body>
</html>