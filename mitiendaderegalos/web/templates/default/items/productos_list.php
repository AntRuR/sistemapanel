<?php //á

$THIS=$PARAMS['this'];

$CLASSSTYLE=$PARAMS['classStyle'];
//$SLIDE=$SLIDESHOW[$PARAMS['conector']];
//$ITEMS=array($LISTADO[$PARAMS['conector']][sizeof($LISTADO[$PARAMS['conector']])-1]);
$ITEMS=$LISTADO[$PARAMS['this']];

?>

<div id="app_<?php echo $THIS."_".$grupo['id'];?>" class="listado_productos cuadro <?php 
	web_selector_control($SELECTED,$CLASSSTYLE,"bloques,menus,listados");
	?>" >
   <?php web_render_item_borde('bors-b'); ?>   


    <div class="barra_arriba">
        <div class="div_fila div_menu" >
            <?php web_render_menu($ITEMS['menu'],array(
                                                        'lados_externos'=>1
                                                        ,'lados_internos'=>1
                                                        ,'lados_flotantes'=>1
                                                        ,'id'=>'menu_'.$ITEMS['nombre']
                                                        )); ?>    
    	</div>	
		<div class="div_fila" 
        style="background-color:#8BB42A; text-align:right; height:25px; padding-top:4px; font-weight:normal; text-transform:none; margin-top:-1px; font-size:14px; ">
        <?php if(sizeof($ITEMS['sub_categorias'])>0){ ?>
        Seleccione la sub-categoría 
        <select style="margin-right:4px;width:300px;" onchange="if(this.value!='')location.href='<?php echo $SERVER['BASE'];?>'+this.value">
        <option value=""></option>
		<?php foreach($ITEMS['sub_categorias'] as $subgrupo){ ?><option value="<?php echo $subgrupo['link'];?>" <?php echo ($subgrupo['id']==$_GET['val'])?"selected":""; ?> ><?php echo $subgrupo['nombre'];?></option><?php } ?>
        </select>
        <?php } ?>
        </div>    
    </div>


    <div class="clean"></div>

    <div class="cuadro">
    	
        <div class="div_borde div_inner" >
                                
                        <?php  
						//prin($ITEMS['filas']);
                        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
							
						if($CLASSSTYLE=='inmuebles_list'){
							
                            ?>
                                <ul  class="listado_items">   
                                <?php 
								foreach($ITEMS['filas'] as $item){  ?>                                             
                                    <li class="listado_item">
                                       <div class="capa" >
                                         <div class="inner" >
                                            <a href="<?php echo $item['foto']['archivo'];?>" class="foto" title="<?php echo $item['nombre'];?>">
                                         	<img border="0" <?php echo $item['foto']['get_atributos'];?> />
                                         	</a>
                                            <a href="<?php echo $item['link'];?>" class="titulo" style="margin:0 0 4px;" title="<?php echo $item['nombre'];?>" >
                                         	<?php echo $item['nombre'];?> 
                                         	</a>                                            

                                            <h3 class="direccion">
                                            <a href="<?php echo $item['link'];?>"><?php echo $item['direccion'];?></a>
                                            Dpto. <span class="geo"><?php echo $item['departamento'];?></span>
                                            , Prov.<span class="geo" href="<?php echo $item['link'];?>"><?php echo $item['provincia'];?></span>
                                            Dist. <span class="geo" href="<?php echo $item['link'];?>"><?php echo $item['distrito'];?></span>
                                            </h3>
                                            <!--descripcion-->
                                            <a class="descripcion" href="<?php echo $item['link'];?>"><?php echo $item['descripcion'];?></a>
                                            <!--area-->
                                            <span class="area"><?php echo $item['area'];?></span>
    
                                            <a <?php echo $item['consultar'];?> class="consultar" title="Consultar">Consultar</a>
                                                                    
                                         </div>                                     
                                       </div>                    
                                    </li>							   

                                <?php } ?>
                                </ul> 
                            <?php 
						
						} else {
							
                            ?>
                                <ul  class="listado_items">   
                                <?php foreach($ITEMS['filas'] as $item){  ?>                                             
                                    <li class="listado_item">
                                       <div class="capa" >
                                         <div class="inner" >
                                            <a href="<?php echo $item['link'];?>" class="titulo" style="margin:0 0 4px;" title="<?php echo $item['nombre'];?>" >
                                         	<?php echo $item['nombre'];?> 
                                         	</a>
                                            <a href="<?php echo $item['foto']['archivo'];?>" class="foto" title="<?php echo $item['nombre'];?>">
                                         	<img border="0" <?php echo $item['foto']['get_atributos'];?> />
                                         	</a>
                                            <a class="verdescripcion" title="Ver detalle del producto" href="<?php echo $item['link'];?>">Ver detalle</a>
                                            <div class="div_fila" >
							                <?php if($item['tiene_precio']){ ?>                                            
                                            <?php echo $item['precios_soles'];?>
                                            <?php } else { ?>
                                            <a <?php echo $item['consultar'];?> class="consultar" title="Consultar">Consultar</a>
                                            <?php } ?>                          
                                            <a href="<?php echo $item['link'];?>" title="Ver detalle del producto" class="lupa" ></a>
							                <?php if($item['tiene_precio']){ ?>
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
                            <?php 
							}
						}
                        ?>
                          
        </div>
    
	</div>
    
    <div class="barra_abajo">
    	<div class="listado_paginacion">
    	<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        <!--<a class="ver_todos">Ver todos los productos de esta categoría</a>-->
        </div>
   </div>  

</div> 
       

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