<?php //á
?>
		
    
    <div id="bloque_nuestras_marcas" class="div_fila cuadro margen_arr <?php 
		/* CSS del Cuadro */ echo "bloque_cuadro_4"; ?>" >
        <?php web_render_esquinas(0,0);?>
        <div class="barra_arriba"><?php echo $lang['nuestras_marcas'];?></div>
        <div class="div_borde" >

                <div class="main_sidebar">
                    <?php
                    $marcas= select(
                        "id,nombre,file,fecha_creacion",
                        "marcas",
                        "where 1 and  visibilidad='1' order by id asc limit 0,100"
                        ,0
                        );
                    ?>	
                    
                    <div id="marks">    
                    <div id="marco_marcas">
                    <?php foreach($marcas as $y=>$marca){ 
                    $yy[]=$y+1;
                    ?>
                    <span><table class="marco" cellpadding="0"  cellspacing="0"><tr><td><img <?php echo str_replace(array('width=""','height=""'),array('',''),dimensiona_img('mar_imas', $marca['fecha_creacion'], str_replace(".","_2.",$marca['file'])))?> /></td></tr></table></span>
                    <?php } ?>
                    </div>
                    </div>
                </div>
                <script type="text/javascript">
                
                    window.addEvent('domready',function(){
                
                        //SAMPLE 2 (transition: Bounce.easeOut)
                        var nS2 = new noobSlide({
                            box: $('marco_marcas'),
                            items: [<?php echo implode(",",$yy); ?>],
                            interval: 5000,
                            autoPlay: true,
                            size:180
                            /*,
                            addButtons: {
                                previous: $('prev1'),
                                play: $('play1'),
                                stop: $('stop1'),
                                next: $('next1')
                            }*/
                        });
                        
                    });
                    
                </script>		
        	
    	</div>
    </div>

	
    <div id="bloque_publicidad" class="div_fila cuadro <?php 
		/* CSS del Cuadro */ echo "bloque_cuadro_4"; ?>" >
        <?php web_render_esquinas(0,0);?>
        <div class="barra_arriba"><?php echo $lang['publicidad'];?></div>
        <div class="div_borde">

            <div class="publicidad_embed">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="198" height="175" ALIGN=""><param name=movie value="publicidad.swf"><param name=quality value=high><embed src="publicidad.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="198" height="175" ALIGN=""></embed></object>
            </div>
        	
    	</div>
    </div>
    