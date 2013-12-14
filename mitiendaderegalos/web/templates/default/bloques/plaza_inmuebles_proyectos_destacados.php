<?php //á

$THIS=$PARAMS['this'];

//$ITEMS=$LISTADO[$PARAMS['conector']];

$ITEMS=$NOODSLICE[$PARAMS['conector']];

?> 
<div id="listado_<?php echo $THIS;?>">
<?php foreach($ITEMS as $NOOB){ ?>

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques,listados");
        ?>"  >
        <?php //web_render_esquinas(1,4);?>        
    
       <div class="barra_arriba">
       <?php web_render_item_borde('bors-b',1,2);?>        
       <?php echo $NOOB['titulo'];?>
       </div>
             
        <div class="div_borde div_inner" >
               
            <!--            
            <a id="ver_video_cerrar" href="#" onclick="cerrar_ver_video(); return false;">volver a la lista de videos</a>
            <div id="ver_video_titulo"></div>
            <div id="ver_video_eventos_embed" style="text-align:center; position:relative;"></div>
            -->

            <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">                
                <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">
                                    
                    <?php  
                    if(sizeof($NOOB['num_items'])==0){ ?><p class="vacio"><?php echo $NOOB['vacio']; ?></p><?php } else {
                        foreach($NOOB['items_bloques'] as $i=>$itembloque){ 
                        ?>
		                <div class="slid">                              
                            <ul  class="listado_items">   
                            <?php foreach($itembloque as $item){ ?>                                             
                            <?php //FRAME BEGIN// ?>    
                                <li class="listado_item">
									<div class="capa">
                                        <div class="inner">

											<?php echo ($item['link']!='')?'<a class="foto" href="'.$item['link'].'">':'<span class="foto">'; ?>
                                                <img border="0" <?php echo $item['get_atributos'];?> />
                                            <?php echo ($item['link']!='')?'</a>':'</span>'; ?>

											<?php echo ($item['link']!='')?'<a class="titulo" href="'.$item['link'].'">':'<div class="titulo">'; ?>
                                            <?php echo str_replace("/","<br>",$item['foto_descripcion']);?>
                                            <?php echo ($item['link']!='')?'</a>':'</div>'; ?>
                                            
                                    	</div>
                                    </div>    
                                </li>
                            <?php //FRAME END// ?>
                            <?php } ?>
                            </ul> 
                        </div>   
                        <?php 
                        }
                    }
                    ?>
                                 
                </div>
            </div>
            
            
        </div>        
    
       <div class="barra_abajo">
       		<div class="inner_abajo">
	        <?php web_render_slider_pie($NOOB); ?>       
            </div>
       </div>
    
    </div>
	<?php web_render_slider_javascript($NOOB); ?>    
<?php } ?>
</div>

