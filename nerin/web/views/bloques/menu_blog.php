<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['this']];

?>
<div class="menu_blog <?php echo $PARAMS['classStyle']; ?>">
<?php web_render_menu($ITEMS['menu'],[],'h4'); ?>           
</div>
        
<aside class="<?php echo $PARAMS['classStyle']; ?>" >
  
    <div class="header">
   		<?php web_render_item($ITEMS['header']); ?>                
   	</div>
   	<div class="inner">
   		<?php web_render_tree($ITEMS['items']); ?>
    </div>
    <div class="footer">
   		<?php web_render_item($ITEMS['footer']); ?>             
   	</div>
        
</aside>         
