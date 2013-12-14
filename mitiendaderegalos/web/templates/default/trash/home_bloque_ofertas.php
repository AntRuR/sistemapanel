<?php //á
?>
<?php 
$NOOB=$NOODSLICE['ofertas'];
?>
<style type="text/css"> 
#contenedor_slider_<?php echo $NOOB['label'];?>_fijo,
#contenedor_slider_<?php echo $NOOB['label'];?>_movil div.slid {
width: <?php echo $NOOB['width'];?>px; height:<?php echo $NOOB['height'];?>px; 
}
#contenedor_slider_<?php echo $NOOB['label'];?>_movil div.slid li { 
width:<?php echo $NOOB['width_bloque'];?>px; height:<?php echo $NOOB['height_bloque'];?>px; 
}
</style>
<div id="div_bloque_ofertas" class="div_bloque" >
	
    <div class="titulo">
    	<!--lados-->
		<span class='titulo_izq'></span>
		<span class='titulo_der'></span>    
    	<h3>Ofertas</h3>    
	</div>
    
    <div id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">
    
        <div id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">
            <?php 
            $bloques_sliders=array();
            if(sizeof($NOOB['items'])==0){ 
            echo $NOOB['vacio'];
            } else { 
            $bloques_sliders=array_chunk($NOOB['items'],$NOOB['itemsporpagina']);
            foreach($bloques_sliders as $yyy=>$bloque_slider){ 
            $uuu[]=$yyy+1;		
            ?>   
            <div class="slid">      
                <ul>    
                    <?php foreach($bloque_slider as $item){ ?>
                    <li>
                    	<!--foto-->
                        <a class="foto" href="<?php echo $item['link'];?>">
                            <img alt="<?php echo $item['alt'];?>" title="<?php echo $item['title'];?>" <?php echo $item['get_atributos'];?> />
                        </a>
                        <!--nombre-->
                        <a class="nombre" href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a>
                        <!--precio-->
                        <a class="precio" href="<?php echo $item['link'];?>"><?php echo $COMMON['datos_root']['simbolo_moneda']." ".$item['precio'];?></a>
                        <!--ver-->
                        <a class="ver" href="<?php echo $item['link'];?>" title="ver"></a>
                        
                    </li>
                    <?php } ?>
                </ul>
            </div>    
            <?php } ?>                
            <?php } ?>
        </div>
    
    </div>
    
    <div class="bloque_pie div_barra">
    
    	<span class="total" style="float:left;"><?php echo sizeof($NOOB['items']);?> ofertas</span>
        <?php if($NOOB['buttons']==1 and sizeof($bloques_sliders)>1 ){ ?>  
                <a id="contenedor_slider_<?php echo $NOOB['label'];?>_prev" class="but_prev">&laquo;anterior</a>
                <a id="contenedor_slider_<?php echo $NOOB['label'];?>_next" class="but_next">siguiente&raquo;</a>      
        <?php } else {?>&nbsp;<?php } ?>

    </div>
        
</div>        
<?php 
if(sizeof($bloques_sliders)>1){ ?>
<script type="text/javascript">

	window.addEvent('domready',function(){		
		
		//SAMPLE 2 (transition: Bounce.easeOut)
		var NS_<?php echo $NOOB['label'];?> = new noobSlide({
			box: $('contenedor_slider_<?php echo $NOOB['label'];?>_movil'),
			items: [<?php echo implode(",",$uuu); ?>],
			interval: 7000,
			autoPlay: <?php echo $NOOB['autoplay'];?>,
			size:<?php echo ($NOOB['mode']=='vertical')?$NOOB['height']:$NOOB['width'];?>,
			mode:'<?php echo $NOOB['mode'];?>'
			<?php if($NOOB['buttons']==1){ ?>
			,addButtons: {
				previous: $('contenedor_slider_<?php echo $NOOB['label'];?>_prev'),
				next: $('contenedor_slider_<?php echo $NOOB['label'];?>_next')
			}
			<?php } ?>
		});
		
	});
	
</script>		
<?php } ?>
<?php 
unset($uuu);
unset($NOOB);
unset($bloques_sliders);
?>