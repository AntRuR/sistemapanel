<?php //á

$THIS=$PARAMS['this'];
//$SLIDE=$SLIDESHOW[$PARAMS['conector']];
//$ITEMS=array($LISTADO[$PARAMS['conector']][sizeof($LISTADO[$PARAMS['conector']])-1]);
$ITEMS=$LISTADO[$PARAMS['conector']];

$PAGINA=$PAGES[$PARAMS['conector']];


?>

<?php if($PAGINA){ ?>
    <div class="cuadro <?php 
        web_selector_control($SELECTED,str_replace("_list","_page",$THIS),"bloques");
        ?>" >
        <?php //web_render_esquinas(1,4);?>
    
       <div class="barra_arriba">
       <?php web_render_item_borde('bors-b',1,2);?>        
       <?php echo $PAGINA['titulo']; ?>
       </div>
             
        <div class="div_borde div_inner" id="div_carrito">

            <?php echo $PAGINA['texto']; ?>        
		
			<?php if($PAGINA['foto']!=''){ ?>
            <div style="text-align:center;">
            <img <?php echo $PAGINA['get_atributos']; ?> class="margen_izq" />
            </div>
            <?php } ?>
        
        </div>
        
    </div>	
    
<?php } ?>

<?php if(($_GET['gru']=='0') and isset($COMMON['archivos']['banner_02'])){ ?>
<div class="div_fila">
	<?php web_render_fichero($COMMON['archivos']['banner_02']); ?>
</div>
<?php } ?>

<?php foreach($ITEMS as $grupo){ ?>
<div id="app_<?php echo $THIS."_".$grupo['id'];?>" class="cuadro listado_productos <?php 
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
		<select style="margin-right:4px;width:300px;" onchange="if(this.value!='')location.href='<?php echo $SERVER['BASE'];?>'+this.value">
        <option value=""></option>
        <?php foreach($grupo['sub_grupos'] as $subgrupo){?><option value="<?php echo $subgrupo['link'];?>"><?php echo $subgrupo['nombre'];?></option><?php } ?>
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
                                <?php foreach($itembloque as $item){ ?>                                             
                                    <li class="listado_item">
                                       <div class="capa" >
                                         <div class="inner" >
                                            <a href="<?php echo $item['link'];?>" class="titulo" style="margin:0 0 4px;" title="<?php echo $item['nombre'];?>" >
                                         	<?php echo $item['nombre'];?> 
                                         	</a>
                                            <a href="<?php echo $item['foto']['archivo'];?>" class="foto" title="<?php echo $item['nombre'];?>">
                                         	<img border="0" <?php echo $item['foto']['get_atributos'];?> />
                                         	</a>
                                            <div class="div_fila" >
                                            <?php echo $item['precios_soles'];?>
                                            <a href="<?php echo $item['link'];?>" title="Ver detalle del producto" class="lupa" ></a>
							                <?php if($item['precio']!='S/.' and $item['precio']!='S/.0.00' and $item['precio']!=''){ ?>
											<a class="carrito" title="Agregar a carrito" 
                                            onclick="javascript:carrito({accion:'agregar',id:'<?php echo $item['id'];?>'},0,1); return false;" 
                                            href="#"></a>  
                                            <?php } ?>
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
        <a class="ver_todos" href="<?php echo $grupo['link'];?>" title="<?php echo $grupo['nombre'];?>">Ver todos los productos de esta categoría</a>
        <?php web_render_slider_pie($NOOB); ?>       
   </div>  
   <?php web_render_slider_javascript($NOOB); ?>  

</div> 
       
<?php } ?>
	<script>
	window.addEvent('domready', function() {
	 
		ReMooz.assign('.listado_items .listado_item a.foto', {
			'origin': 'img',
			'shadow': 'onOpenEnd', // fx is faster because shadow appears after resize animation ( alue can be true, onOpenEnd )
			'resizeFactor': 0.8, // resize to maximum 80% of screen size
			'cutOut': false, // don't hide the original
			'opacityResize': 0.4, // opaque resize
			'dragging': true, // disable dragging
			'centered': true // resize to center of the screen, not relative to the source element
		});
	 
	});
	</script>