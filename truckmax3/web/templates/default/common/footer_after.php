<?php //á
$THIS='footer';
?>
<?php if($MASTERBLOCK['footer_after']){ ?>
<div class="div_fila <?php 
web_selector_control($SELECTED,$THIS,"footers");	
?>">     
    <div class="div_fila footer_menu">
        <?php echo web_render_menu_footer($COMMON['footer']['menu']); ?>
    </div>    
    <?php web_render_footer($COMMON['footer']); ?>        
    
</div>
<?php } ?>
