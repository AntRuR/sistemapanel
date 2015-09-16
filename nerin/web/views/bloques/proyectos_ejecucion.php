<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$PARAMS['conector']];

?>
<div class="row">
    <div class="<?php echo $PARAMS['classStyle']; ?>" style="text-align:center;">

        <div class="header" style='display:inline-block;'>
        <?php echo $ITEM['header']; ?>
        </div>

        <?php //prin($ITEM['menu']);
        echo "<select onchange=\"javascript:\$('.tabsAfterSlides [data-tab='+this.value+']').trigger('click');\" 
        style='display:inline-block;margin-left:20px;'>";
        foreach($ITEM['menu'] as $tab){ 
            echo "<option ".
             ( ($tab['class']=='active')?'selected':'') .
             " value=".str_replace("data-tab=","",$tab['more']).">".
            $tab['label'].
            "</option>"; 
        }
        echo "</select>";

        ?>

        <div class="tabsAfterSlides tabs" style="display:none;">
            <?php web_render_menu($ITEM['menu']); ?>    
        </div>

        <?php foreach($ITEM['menu'] as $tab){ ?>
            <section class="sec_<?php echo $tab['id']; ?>">
                <div class="inner">
                    <div class="slides" data-delay="false">
                        <?php web_render_items(
                        $ITEM[$tab['id']]['filas'],
                        $ITEM[$tab['id']]['filas'][0]['esquema'],
                        0,
                        2); ?>
                    </div>
                    <a class="arrow prev"></a>
                    <a class="arrow next"></a>                
                </div>              
            </section>
        <?php } ?>
      
    </div>
</div>
