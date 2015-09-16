<?php //á

$THIS=$PARAMS['this'];

$object=$OBJECT[$PARAMS['this']];

$ITEMS=$object['items'];

//prin($ITEMS['menu']);
foreach($ITEMS as $ITEM){
?>
<div class="menu <?php echo $PARAMS['classStyle']; ?>">
    
    <div class="inner">
    <?php web_render_menu($ITEM['menu'],[],'h3'); ?>        
    </div>
    
</div>    	     
<?php } ?>