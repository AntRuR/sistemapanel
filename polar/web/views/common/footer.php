<?php //á

$THIS=$PARAMS['this'];
$ITEM=$OBJECT[$THIS];
?>
<footer>    
    <div class="div_fila footer_menu">
        <?php echo web_render_menu_footer($ITEM['menu']); ?>
    </div>    
    <?php web_render_footer($ITEM); ?>        
    
	<div class='visitas div_absoluto'><?php echo $ITEM['visitas']; ?> visitas</div>

</footer>