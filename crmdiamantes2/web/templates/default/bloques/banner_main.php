<?php //á

$THIS=$PARAMS['this'];

//$ITEMS=$LISTADO[$PARAMS['conector']];

$ITEMS=$OBJECT[$PARAMS['this']]['items'];

?>
<?php foreach($ITEMS as $ITEM){ ?>
<div class="cuadro <?php 
       web_selector_control($SELECTED,$THIS,"bloques,listados");
       ?>" >
       <?php web_render_esquinas(1,4);?>
            
       <?php
	   if($ITEM['header']){ 
	   echo '<div class="barra_arriba">'; web_render_item($ITEM['header']); echo '</div>';
	   }
	   ?>
       
       <div class="div_borde div_inner">

            <div  id="contenedor_slider_<?php echo $ITEM['settings']['label'];?>_fijo" class="contenedor_slider_fijo">
                <div  id="contenedor_slider_<?php echo $ITEM['settings']['label'];?>_movil" class="contenedor_slider_movil">
                    <?php
                    if(sizeof($ITEM['settings']['num_items'])==0){ ?><p class="vacio"><?php echo $ITEM['settings']['vacio']; ?></p><?php } else {
                        foreach($ITEM['items_bloques'] as $i=>$items){
                        ?>
		                <div class="slid">                              
                        <?php //SLIDE FRAME INICIO ?>    
                            <div class="div_borde">
                            	<?php //web_render_items($items); ?>
                                <?php
								$html="<ul class='listado_items'>";
									foreach($items as $item){			
										$html.='<li class="listado_item">';
										$esquema=($esquema!='')?$esquema:(($item['esquema']!='')?$item['esquema']:'nombre');
										$html.=web_item($item,"foto");
										$html.='<div class="sub_grupo_1">';
										$html.=web_item($item,"subtitulo,nombre:h4");	
										$html.='</div>';
										$html.='</li>';
									} 
								$html.="</ul>";								
								echo $html;
								?>
                            </div>
                        <?php //SLIDE FRAME FIN ?>
                        </div>   
                        <?php 
                        }
                    }
                    ?>
                </div>
            </div>
            
        </div>        
    
       <div class="barra_abajo">
	        <?php //web_render_item($ITEM['footer']); ?>       
	       <div class="listado_paginacion">
	       		<?php web_render_slider_pie($ITEM['settings']); ?>       
           </div>
       </div>
    
    </div>

<?php } ?>