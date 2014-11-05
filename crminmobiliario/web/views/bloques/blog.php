<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$PARAMS['conector']];
?>
<div class="row">
    <div class="<?php echo $PARAMS['classStyle']; ?>">
        <div class="tabsAfterSlides tabs">
            <?php web_render_menu($ITEM['menu']); ?>    
        </div>

        <?php foreach(['notas','actividades','fotos','videos'] as $ii=>$tab){ ?>
        <section class="<?php echo $tab; ?>">
            <div class="inner">
                <div class="slides" data-delay="false">
                    <?php web_render_items($ITEM[$tab]['items']); ?>
                </div>
            </div>
            <div class="footer">
            <?php web_render_item($ITEM[$tab]['footer'],'nombre?tag=span'); ?>
              <a class="arrow prev"></a>
              <a class="arrow next"></a>
            </div>               
        </section>
        <?php } ?>
      
    </div>
</div>
