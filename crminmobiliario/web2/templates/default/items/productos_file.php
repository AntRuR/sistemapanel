<?php //á

$THIS=$PARAMS['this'];

$ITEM=$DETAIL[$PARAMS['this']];

//$SLIDE=$ITEM['SLIDESHOW'];

//prin($item);

?>
<div class="div_fila">
  
    <div class="cuadro ficha_producto <?php 
        web_selector_control($SELECTED,$THIS,"bloques,fichas,formularios");
        ?>" >
        <?php web_render_esquinas(1,4);
		//prin($FBL);?>        
    
       <div class="barra_arriba">
       <?php web_render_item_borde('bors-b',1,2);?>        
       <a href="<?php echo $ITEM['link'];?>" title="<?php echo $ITEM['grupo'];?>"><?php echo $ITEM['titulo'];?></a>
             
       </div>
             
        <div class="div_borde div_inner">
        
			<?php /////////////////////////////////////////////////////////////////////////////////////////////////////?>        
    		<?php /* ?>    
            <div class="div_fila div_menu">
                <?php web_render_menu($ITEM['menu'],array(
                                                            'lados_externos'=>1
                                                            ,'lados_internos'=>1
                                                            ,'lados_flotantes'=>1
                                                            ,'id'=>'menu_'.$PARAMS['this']
                                                            )); ?>    
            </div>
    		<?php */ ?>
    		<div class="area_tabs" style="padding-left:10px;">
            
                <div class="area_tab <?php echo 'menu_'.$PARAMS['this'];?>_area_tab" style='display:block;' id="<?php echo 'menu_'.$PARAMS['this'];?>_area_tab_1">
				   
				   <?php
				   echo "<ul class='album'>";
				   foreach($ITEM['fotos'] as $foto){
					   echo "<li class='thumb'>";
					   echo "<a rel='imagezoom[album]' ";
					   echo "href='".$foto['href']."' ";
					   //echo "style='background-image:url(".$foto['foto_thumb'].");' title='".$foto['foto_descripcion']."' ";
					   echo ">";
					   echo "<img ";
					   //echo " src='".$foto['foto_thumb']."' ";
					   echo $foto['get_atributos'];
					   echo "alt='".$foto['foto_descripcion']."' >";
					   echo "</a>";
					   echo "</li>";
					}
				   echo "</ul>"; 	
				   ?>
            	   <?php //web_render_slideshow_proceso($SLIDE); ?>                                	            

                </div>             
                
                <div class="area_tab <?php echo 'menu_'.$PARAMS['this'];?>_area_tab" style='display:block;' id="<?php echo 'menu_'.$PARAMS['this'];?>_area_tab_2">
                    <div class="ficha">
                    	<?php echo $ITEM['ficha'];?>
                    </div>
                </div>
				
                <?php /*	                
                <div class="area_tab <?php echo 'menu_'.$PARAMS['this'];?>_area_tab" style='display:block;' id="<?php echo 'menu_'.$PARAMS['this'];?>_area_tab_3">
	                <?php include(incluget("bloques/fpr,comentarios.php")); ?>    
                </div>      
                */ ?>
                            
                </div>       

         

			<?php /*
    		<div class="file_derecha">
            
	            <div class="div_fila"><?php web_render_facebook_like($FBL); ?></div>
                
	            <div class="div_fila">
                <?php if($ITEM['precio']!='S/.' and $ITEM['precio']!='S/.0'){ ?>
                	<a class="carrito" title="Agregar a carrito" 
                    onclick="javascript:carrito({accion:'agregar',id:'<?php echo $ITEM['id'];?>'},0,1); return false;" 
                    href="#">Agregar a carrito</a>  
                <?php } ?>
                </div>
                                            
                                            
    		</div>
            */ ?>        
            <div class="clean"></div>
                        
            <?php /////////////////////////////////////////////////////////////////////////////////////////////////////?>   
                 
        </div> 
        
    
       <!--<div class="barra_abajo"></div>-->
    
    </div>
</div>

 
 