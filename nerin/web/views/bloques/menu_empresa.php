<?php //á

$THIS=$PARAMS['this'];

$object=$OBJECT[$PARAMS['this']];

$ITEMS=$object['items'];

//prin($ITEMS['menu']);
foreach($ITEMS as $ITEM){
?>
<aside class="<?php echo $PARAMS['classStyle']; ?>" >
    
        <?php
        if($ITEM['header']){ 
        echo '<div class="header">'; web_render_item($ITEM['header']); echo '</div>';
        }
        ?>
        <div class="inner">
                <?php web_render_menu($ITEM['menu'],[],'h3'); ?>
        </div>

        <div class="footer"></div>
		
</aside>   	     
<?php } ?>