<?php //á

$THIS='footer';

 if($MASTERBLOCK['footer']){ ?>
    <div id="div_footer" class="<?php 
	web_selector_control($SELECTED,$THIS,"footers");	
    ?>">
    <?php web_render_footer($COMMON['footer']); ?>  

        <div style='position:absolute;width:auto:height:auto;bottom:0px; right:16px; '>
        Tipo de cambio del día. 
        Compra S/.<?php echo number_format($COMMON['variables']['dolar_compra'],2);?> 
        venta S/.<?php echo number_format($COMMON['variables']['dolar_venta'],2);?>         
        </div>  
        
    </div>
<?php } ?>