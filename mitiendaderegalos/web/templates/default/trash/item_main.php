<?php //á
?>
<?php $item=$ITEM['datos']; ?>
<div id="div_item_main" class="div_main">
            
	<!--BARRA DEL LISTADO-->
	<div id="barra_listado">
		
		<div id='listado_titulo' class="titulo">
			<!--lados-->
			<span class='titulo_izq'></span>
			<span class='titulo_der'></span>
			<h1><?php echo $item['grupo_nombre']; ?></h1>
		</div>
		<!--select-->
        <?php /*
        <span id="listado_seleccionador">
		<label>Nuestros Productos</label>
		<select onchange="if(this.value!=''){location.href=this.value;}">
        <option></option>
		<?php foreach($ITEMS['categorias'] as $item){ ?>
		<option <?php echo $item['selected']; ?> value='<?php echo $item['link']; ?>'><?php echo $item['nombre']; ?></option>
		<?php } ?>
		</select>
		</span>
		*/ ?>

                        
	</div>
   	<div class="listado_paginacion div_barra"  >
        <ul class="tabs">
            <li class="selected" id="tab_1">
                <a href="#" rel="nofollow" onclick="javascript:show_tab(1); return false;">
                    Fotos del producto
                </a>
            </li>
            <li id="tab_2">
                <a href="#" rel="nofollow" onclick="javascript:show_tab(2);return false;">
                    Descripción del producto
                </a>
            </li>
        </ul>    
    </div>
                            
    <!--nombre-->
    <h1 class="nombre"><?php echo $item['nombre'];?></h1>
                                        
    <ul class="area_tabs">         
        
        <li id="area_tab_1" class="area_tab">
            <div id="area_foto">
            
            <?php include("item_bloque_fotos.php"); ?>            
        
            </div>                                
        </li>  
                
        <li id="area_tab_2" class="area_tab" style="display:none;">
            
            <!--base-->
            <?php if($item['base']){?><div class='base'>BASE : <?php echo $item['base'];?></div><?php } ?>
            <!--descripcion-->
            <p class="descripcion"><?php echo $item['descripcion'];?></p>
                                                                                                            
        </li>                         
        
    </ul>
    
    
	<?php if($item['precio']){?>
    <!--carrito-->
    <a class="carrito" title="Agregar a Carrito" 
    onclick="javascript:carrito({accion:'agregar',id:'<?php echo $item['id'];?>'},0); return false;"
    href="#">Agregar a carrito</a>
    
    <!--precio-->
    <span class='precio' ><?php echo $COMMON['datos_root']['simbolo_moneda']." ".number_format($item['precio'],2);?></span>
    <?php } ?>
                
    <?php /**/ ?>
    


</div>
