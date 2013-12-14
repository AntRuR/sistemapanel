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

$grupos_inmuebles=array();
$gi0=select("id","productos_subgrupos","where id_grupo='34' and visibilidad='1'");
foreach($gi0 as $gi) $grupos_inmuebles[]=$gi['id'];

?>  
    <div class="div_canvas">
		
        <!-- DISTRIBUCION INICIO -->
        <? /*
        <div class="div_fila">
                  
            <div class="div_columna div_col_1-1">        
            	<?php include("bars/bar_0-1.php"); ?>
            </div>
            
        </div>
		*/ ?>
        <div class="div_fila">
			<?php // DETALLE // ?>
			<?php if( ($_GET['tab']=='productos') and ($_GET['acc']=='file') ){ ?>  
                
                <div class="div_columna div_col_1d2">        
	                <?php include(incluget("bloques/bloque_carrito.php",array('this'=>'carrito'))); ?>
                    <?php include(incluget("bloques/izquierda_arbol_categorias.php")); ?>
	            	<?php include(incluget("bloques/izquierda_facebook.php")); ?>                                                                           
	                <?php include(incluget("bloques/izquierda_recomendar.php",array('conector'=>'recomendar'))); ?>                                                       
                </div>        
                <div class="div_columna div_col_2d2">        
                    <?php include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                </div>                
                
			<?php // PLAZA INMUEBLES // ?>
			<?php /*} elseif( 
				($_GET['tab']=='rubros' and ($_GET['acc']=='list' and $_GET['gru']=='34') )
				){ ?>  
                              
                <div class="div_columna div_col_1d3">        
					<?php //include(incluget("bloques/google_adsense.php")); ?>
                    <?php include(incluget("bloques/plaza_inmuebles_buscador.php")); ?>
                    <?php include(incluget("bloques/plaza_inmuebles_publicidad_fotos.php")); ?>
	                <?php //include(incluget("bloques/bloque_carrito.php",array('this'=>'carrito'))); ?>
                    <?php //include(incluget("bloques/izquierda_arbol_categorias.php")); ?>
                </div>        
                <div class="div_columna div_col_2d3">  
					<?php include(incluget("bloques/plaza_inmuebles_categorias.php")); ?>
                    <?php include(incluget("bloques/plaza_inmuebles_proyectos_destacados.php")); ?>
                    <?php include(incluget("bloques/plaza_inmuebles_avisos_destacados.php")); ?>	                
                    <?php include(incluget("items/productos_list.php",array('conector'=>'inmuebles_list','classStyle'=>'inmuebles_list'))); ?>
                </div>
                <div class="div_columna div_col_3d3">        
                    <?php include(incluget("bloques/derecha_inscripciones.php")); ?>
                    <?php include(incluget("bloques/derecha_boletin.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad.php")); ?>
                </div>    
                                
			<?php // LISTADOS : PRODUCTOS MENOS BUSQUEDA O RUBROS MENOS HOME // */ ?>                        	
			<?php } elseif( 
				($_GET['tab']=='productos') and  ($_GET['acc']=='list' and $_GET['buscar']=='') 
				or
				($_GET['tab']=='rubros' and ($_GET['acc']=='list' and $_GET['gru']!='0') )
				){ ?>  
            
			<?php //PLAZA INMUEBLES
				if(in_array($_GET['gru'],$grupos_inmuebles)){ ?>                
                <div class="div_columna div_col_1d3">        
	                <?php include(incluget("bloques/bloque_carrito.php",array('this'=>'carrito'))); ?>
                    <?php include(incluget("bloques/izquierda_arbol_categorias.php")); ?>
                    <?php include(incluget("bloques/plaza_inmuebles_buscador.php")); ?>
                    <?php include(incluget("bloques/plaza_inmuebles_publicidad_fotos.php")); ?>                    
	            	<?php include(incluget("bloques/izquierda_facebook.php")); ?>                                                                           
	                <?php include(incluget("bloques/izquierda_recomendar.php",array('conector'=>'recomendar'))); ?>                	                    
                    
                </div>        
                <div class="div_columna div_col_2d3">  
                    <?php include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab'],'classStyle'=>'inmuebles_list'))); ?>
                </div>
                <div class="div_columna div_col_3d3">        
                    <?php include(incluget("bloques/derecha_inscripciones.php")); ?>
                    <?php include(incluget("bloques/derecha_boletin.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad.php")); ?>
                </div>                               
			<?php } elseif($_GET['fil']=='ofertas') { ?>
            
                <div class="div_columna div_col_1d3">        
	                <?php include(incluget("bloques/bloque_carrito.php",array('this'=>'carrito'))); ?>
                    <?php include(incluget("bloques/izquierda_videos.php")); ?>
                    <?php include(incluget("bloques/izquierda_publicidad_fotos.php")); ?>
	            	<?php include(incluget("bloques/izquierda_facebook.php")); ?>                                                                           
	                <?php include(incluget("bloques/izquierda_recomendar.php",array('conector'=>'recomendar'))); ?>                	                    
                    
                </div>        
                <div class="div_columna div_col_2d3">  
                    <?php include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                </div>
                <div class="div_columna div_col_3d3">        
                    <?php include(incluget("bloques/derecha_inscripciones.php")); ?>
                    <?php include(incluget("bloques/derecha_boletin.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad.php")); ?>
                </div>  
                                                            
			<?php } else { ?>
            
                <div class="div_columna div_col_1d3">        
	                <?php include(incluget("bloques/bloque_carrito.php",array('this'=>'carrito'))); ?>
                    <?php include(incluget("bloques/izquierda_arbol_categorias.php")); ?>
	            	<?php include(incluget("bloques/izquierda_facebook.php")); ?>                                                                           
	                <?php include(incluget("bloques/izquierda_recomendar.php",array('conector'=>'recomendar'))); ?>                	                    
                    
                </div>        
                <div class="div_columna div_col_2d3">  
                    <?php include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                </div>
                <div class="div_columna div_col_3d3">        
                    <?php include(incluget("bloques/derecha_inscripciones.php")); ?>
                    <?php include(incluget("bloques/derecha_boletin.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad.php")); ?>
                </div>  
                            
            <?php } ?>
            
			<?php // HOME // ?>            
			<?php } else { ?>
            
                <div class="div_columna div_col_1d3">        
	                <?php include(incluget("bloques/bloque_carrito.php",array('this'=>'carrito'))); ?>                    
                    <?php include(incluget("bloques/izquierda_videos.php")); ?>
                    <?php //include(incluget("bloques/plaza_inmuebles_publicidad_home_fotos.php")); ?>
                    <?php include(incluget("bloques/izquierda_publicidad_fotos.php")); ?>  
	            	<?php include(incluget("bloques/izquierda_facebook.php")); ?>                                                                           
	                <?php include(incluget("bloques/izquierda_recomendar.php",array('conector'=>'recomendar'))); ?>                	                    
                </div>        
                <div class="div_columna div_col_2d3">        
                	<?php if($_GET['gru']=='0'){ ?>
                	<?php include(incluget("bloques/banner_home.php")); ?>                
                    <?php } ?>
                    <?php include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                </div>
                <div class="div_columna div_col_3d3">        
                    <?php include(incluget("bloques/derecha_inscripciones.php")); ?>
                    <?php include(incluget("bloques/derecha_boletin.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/derecha_publicidad.php")); ?>
                </div>             
            
			<?php } ?>                                          
            
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