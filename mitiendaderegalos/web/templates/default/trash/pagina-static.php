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
                
                    <div id="listado_productos" class="div_fila cuadro margen_arr <?php 
                        /* Style del Cuadro */ echo "bloque_cuadro_6"; ?>" >
                        <?php web_render_esquinas(0,0);?>  
                        
                            <div class="barra_arriba">
                                <!--esquinas--><?php web_render_esquinas(1,2);?>
                                <h1><?php echo $_GET["tab"]; ?></h1>
                            </div>      
                            <div class="div_barra"></div>   
                            
                   	        <div class="div_borde">                       
								<?php
                                switch($_GET['tab']){
                                case "final-publicacion":
                                    echo 'Su aviso ha sido publicado exitosamente. Usted puede ver su anuncio en el <a style="color:red;" href="#">siguiente link</a><br><br>';
                                    echo 'Usted puede revisar su email al cual le hemos enviado un link para que pueda  Editar su aviso, o Finalizar su publicación.  Muchas gracias por usar nuestro servicio.';
                                break;	
                                case "final-registro":
                                    echo 'Has sido registrado exitosamente<br>';		
                                break;
                                case "nosotros":
                                    include("static/nosotros.php");
                                break;	
                                case "servicios":
                                    include("static/paginas.php");
                                break;						
                                }
                                ?>
							</div>
                                                            
					  </div>                                
                      
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