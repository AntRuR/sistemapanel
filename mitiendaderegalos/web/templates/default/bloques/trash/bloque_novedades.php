<?php //á
?>

<?php    	
$NOOB=$NOODSLICE['ofertas'];
//prin($NOOB);
?>
                    
<div id="bloque_ofertas_elemento_0">
 
       
        <div id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">    
            <div id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">
				                  
                <?php  if($NOOB['num_items']==0){ echo $NOOB['vacio']; } else { ?>   
                <?php foreach($NOOB['items_bloques'] as $itembloque){ ?>            
                <div class="slid">      
                    <ul>    
                        <?php foreach($itembloque as $item){ ?>
                        <!-- inicio frame -->
                        <li>
                        
                        <table><tr><td align="center"><a href="<?php echo $item['link'];?>"><span class="tabla">
                        <img  <?php echo str_replace(array('width=""','height=""'),array('',''),dimensiona_img('prodite_imas', $item['fecha_creacion'], str_replace(".","_5.",$item['file'])))?> border="0" /></span>    
                        </a></td></tr></table>
                        
                        <a href="<?php echo $item['link'];?>" class="nombre" title="<?php echo $oferta['marca'];?>"><?php echo $item['nombre'];?></a>
                        <a href="<?php echo $item['link'];?>" class="ver" title="ver detalles"></a>
                        
                        </li>	
                        <!-- fin frame -->
                        <?php } ?>
                    </ul>
                </div>                
                <?php } ?>                
                <?php } ?>
                
            </div>
        </div>
        
        <?php web_render_slider_pie($NOOB); ?>
    
</div>
    
<?php 
web_render_slider_javascript($NOOB); unset($NOOB);
?>
