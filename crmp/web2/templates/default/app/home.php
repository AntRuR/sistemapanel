<?php //á

$THIS=$PARAMS['this'];
//$SLIDE=$SLIDESHOW[$PARAMS['conector']];
//$ITEMS=array($LISTADO[$PARAMS['conector']][sizeof($LISTADO[$PARAMS['conector']])-1]);
$ITEMS=$LISTADO[$PARAMS['conector']];

?>
<?php foreach($ITEMS as $grupo){ ?>
<div id="app_<?php echo $THIS."_".$grupo['id'];?>" class="cuadro <?php 
	web_selector_control($SELECTED,$THIS,"bloques,menus,listados");
	?>" >
   <?php web_render_item_borde('bors-b'); ?>   

    <div class="barra_arriba">
        <div class="div_fila div_menu" >
            <?php web_render_menu($grupo['menu'],array(
                                                        'lados_externos'=>1
                                                        ,'lados_internos'=>1
                                                        ,'lados_flotantes'=>1
                                                        ,'id'=>'menu_'.$grupo['nombre']
                                                        )); ?>    
    	</div>	
		<div class="div_fila" 
        style="background-color:#8BB42A; text-align:right; height:25px; padding-top:4px; font-weight:normal; text-transform:none; margin-top:-1px; font-size:14px; ">
        Seleccione la sub-categoría 
        <select style="margin-right:4px;width:300px;">
		<?php foreach($grupo['sub_grupos'] as $subgrupo){?><option><?php echo $subgrupo['nombre'];?></option><?php } ?>
        </select>
        </div>    
    </div>    

    <div class="clean"></div>

    <div class="cuadro" >     
        <div class="div_borde div_inner" >
                        
                 <?php $NOOB=$grupo['NOOB']; ?>
        
                 <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">                
                    <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">
                                        
                        <?php  
                        if(sizeof($NOOB['num_items'])==0){ ?><p class="vacio"><?php echo $NOOB['vacio']; ?></p><?php } else {
                            foreach($NOOB['items_bloques'] as $i=>$itembloque){ 
                            ?>
                            <div class="slid">                              
                                <ul  class="listado_items">   
                                <?php foreach($itembloque as $item){  ?>                                             
                                    <li class="listado_item">
                                       <div class="capa" >
                                         <div class="inner" >
                                            <a target="_blank"  href="<?php echo $item['link'];?>" class="titulo" style="margin:0 0 4px;" >
                                         <?php echo $item['nombre'];?> 
                                         </a>
                                            <a target="_blank" href="<?php echo $item['link'];?>" class="foto">
                                         <img border="0" <?php echo $item['foto']['get_atributos'];?> />
                                         	</a>
                                            <div class="div_fila" >
                                            S/.<?php echo $item['precios'][0]['precio'];?>
                                            <a class="lupa"></a>
                                            <a class="carrito"></a> 
                                            </div>
                                        
                                         </div>                                    
                                       </div>                    
                                    </li>							   

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
    
	</div>
    
    <div class="barra_abajo listado_paginacion">
        <a class="ver_todos">Ver todos los productos de esta categoría</a>
        <?php web_render_slider_pie($NOOB); ?>       
   </div>  
   <?php web_render_slider_javascript($NOOB); ?>  

</div> 
       
<?php } ?>