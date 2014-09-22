<?php //á

web_render_foot($HEAD,$SERVER);

// echo getcwd();exit();

$THIS=$PARAMS['this'];
$object=$OBJECT[$THIS];
?>
<footer>    
    <div class="div_fila footer_menu">
        <?php echo web_render_menu_footer($object['menu']); ?>
    </div>    
    <?php web_render_footer($object); ?>        
    
	<div class='visitas div_absoluto'><?php echo $VISITAS; ?> visitas</div>

</footer>