<?php //á

$ITEMS=$LISTADO['productos'];
//prin($ITEMS);

?>
<div id="listado_productos" class="div_fila cuadro margen_arr <?php 
    /* Style del Cuadro */ echo "bloque_cuadro_6"; ?> <?php
    /* Style del Listado */ echo "grilla_1"; ?>" >
    <?php web_render_esquinas(0,0);?>        
		
    <div class="barra_arriba">
        <!--esquinas--><?php web_render_esquinas(1,2);?>
        <h1><?php echo $ITEMS['titulo']; ?></h1>
    </div>

    <div class="div_borde">
              
       <?php
		/* 
		<!--select-->
        <span id="listado_seleccionador" >
            <label>Nuestros Productos</label>
            <select onchange="if(this.value!=''){location.href=this.value;}">
                <option></option>
                <?php foreach($ITEMS['categorias'] as $item){ ?>
                <option <?php echo $item['selected']; ?> value='<?php echo $item['link']; ?>'><?php echo $item['nombre']; ?></option>
                <?php } ?>
            </select>
            <script>
			var OBJ_CATEGORIAS=<?php echo json_encode($ITEMS['categorias']); ?>;
			</script>
		</span>
		*/
		?>
    
        <!--PAGINACION DEL LISTADO-->
        <div class="listado_paginacion div_barra"  >
                <span class="div_menu <?php
                /* Style de MENU */ echo "menu_filtros"; ?>" id="menu_filtros">
                <?php web_render_menu($ITEMS['menu'],array(
                                                            'lados_externos'=>0
                                                            ,'lados_internos'=>0
                                                            ,'id'=>'menu_filtros'
                                                            )); ?>
                </span>        	
            <!--<span class="total"><?php echo $ITEMS['total']." ".$lang['productos'];?></span>-->
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        </div>
    
        <!--GRILLA-->
        <ul class="listado_items">
        <?php  
    
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
    
            foreach($ITEMS['filas'] as $i=>$item){ 
        
            ?>
        
            <li class="listado_item <?php
            /* CSS de grilla*/ echo "grilla_1"; ?>" <?php echo ($i%3==2)?' style="border-right:none;" ':''; ?> >
        
                <!--foto-->
                <a href="<?php echo $item['get_archivo'];?>" class="foto" title="<?php echo $item['nombre'];?>">
                    <img title="<?php echo $item['title'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['alt'];?>" />
                </a>
                <!--nombre-->
                <h2 class="nombre"><a href="<?php echo $item['link'];?>" ><?php echo $item['nombre'];?></a></h2>
                <?php if($item['precio_num']){?>
                <!--precio-->
                <a class='precio' href="<?php echo $item['link'];?>" ><?php echo $item['precio'];?></a>
                
                <!--carrito-->
                <a class="ico_carrito" title="Agregar a carrito de cotización" 
                 onclick="javascript:carrito({accion:'agregar',id:'<?php echo $item['id'];?>'},0,0); return false;"
                 href="#"></a>
                <?php } ?>
                <!--lupa-->
                <a class="lupa" style="<?php echo (!$item['precio_num'])?'left:83px;':'';?>" title="Ver Detalle"  href="<?php echo $item['link'];?>"></a>
        
            </li>
        
            <?php 
        
            }
    
        }
        ?>
        </ul>
        
        <!--PAGINACION DEL LISTADO-->
        <?php if($ITEMS['total']>0){ ?>
        
            <div class="listado_paginacion div_barra">
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
            </div>
            
        <?php } ?>
        
	</div>        

</div>
<script>
	window.addEvent('domready', function() {
	 
		ReMooz.assign('#listado_productos .listado_items .listado_item a.foto', {
			'origin': 'img',
			'shadow': 'onOpenEnd', // fx is faster because shadow appears after resize animation ( alue can be true, onOpenEnd )
			'resizeFactor': 1, // resize to maximum 80% of screen size
			'cutOut': false, // don't hide the original
			'opacityResize': 0.4, // opaque resize
			'dragging': true, // disable dragging
			'centered': true // resize to center of the screen, not relative to the source element
		});
	 
	});
</script>
