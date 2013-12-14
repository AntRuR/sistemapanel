<?php //á

$THIS=$PARAMS['this'];
$object=$OBJECT[$THIS];

?>
<div id="div_footer" class="<?php 
web_selector_control($SELECTED,$THIS,"footers");	
?>">
    <div class="div_fila menu">
        <?php echo web_render_menu_footer($object['menu']); ?>
    </div>      
    <?php web_render_footer($object); ?>        
</div>