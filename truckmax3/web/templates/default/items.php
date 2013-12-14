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
			            
			<?php 
			
				/***************************/
				/************FICHA**********/
				/***************************/
				if( ($_GET['tab']=='productos') and ($_GET['acc']=='file')  ){ ?>  
                
                <div class="div_columna div_col_1d2">        
                    <?php include(incluget("bloques/arbol_categorias.php")); ?>
                </div>        
                <div class="div_columna div_col_2d2">        
                    <?php include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                </div>                

			<?php }
			
				/***************************/
				/**********LISTADOS*********/
				/***************************/			
				elseif( 
				($_GET['tab']=='productos') and  ($_GET['acc']=='list' and $_GET['gru']!='0') 
				){ ?>  
                <div class="div_fila">
                <img src='web/template/default/img/particular/body/temp.jpg' >           
                </div>
                <?php /* ?>              
                <div class="div_columna div_col_1d3">        
                    <?php include(incluget("bloques/arbol_categorias.php")); ?>
                </div>      
                
                <div class="div_columna div_col_2d3">        
                    <?php //include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                    <?php //include(incluget("bloques/blog.php")); ?>
                    <div class="div_fila">
                        <div class="div_columna">
                            <?php include(incluget("bloques/recomendar.php")); ?>
                        </div>
                        <div class="div_columna">
                            <?php include(incluget("bloques/link_facebook.php")); ?>                    
                        </div>                
                    </div>    
				</div>
                
                <div class="div_columna div_col_3d3">        
                    <?php include(incluget("bloques/menu_contenidos.php")); ?>
                    <?php include(incluget("bloques/link_boletin.php")); ?>
                    <?php include(incluget("bloques/publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/banners.php")); ?>
				</div>        
                <?php */ ?>
                        
                                        	
			<?php } 
			
				/***************************/
				/************HOME***********/
				/***************************/			
				elseif( 
				($_GET['tab']=='productos' and   $_GET['acc']=='list' and $_GET['gru']=='0' )
				){ ?>  
                <div class="div_fila">
                <img src='web/templates/default/img/particular/body/temp.jpg' >           
                </div>
                <?php /* ?>                                           
                <div class="div_columna div_col_1d3">        
                    <?php include(incluget("bloques/arbol_categorias.php")); ?>
                </div>      
                
                <div class="div_columna div_col_2d3">        
                    <?php //include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                    <?php include(incluget("bloques/blog.php")); ?>
                    <div class="div_fila">
                        <div class="div_columna">
                            <?php include(incluget("bloques/recomendar.php")); ?>
                        </div>
                        <div class="div_columna">
                            <?php include(incluget("bloques/link_facebook.php")); ?>                    
                        </div>                
                    </div>    
				</div>
                <div class="div_columna div_col_3d3">        
                    <?php include(incluget("bloques/menu_contenidos.php")); ?>
                    <?php include(incluget("bloques/link_boletin.php")); ?>
                    <?php include(incluget("bloques/publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/banners.php")); ?>
				</div>
				<?php */ ?>
                                     
			<?php } elseif(0) { ?>
            
                <div class="div_columna div_col_1d3">        
                    <?php include(incluget("bloques/arbol_categorias.php")); ?>
                </div>
                
                <div class="div_columna div_col_2d3">        
                    <?php //include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php",array('conector'=>$_GET['tab']))); ?>
                    <?php include(incluget("bloques/blog.php")); ?>
                    
                    <div class="div_fila">
                        <div class="div_columna">
                            <?php include(incluget("bloques/recomendar.php")); ?>
                        </div>
                        <div class="div_columna">
                            <?php include(incluget("bloques/link_facebook.php")); ?>                    
                        </div>
                    </div>
                    
				</div>


                <div class="div_columna div_col_3d3">
                    <?php include(incluget("bloques/menu_contenidos.php")); ?>
                    <?php include(incluget("bloques/link_boletin.php")); ?>
                    <?php include(incluget("bloques/publicidad_fotos.php")); ?>
                    <?php include(incluget("bloques/banners.php")); ?>
				</div>
                
			<?php } ?>                                          
            
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