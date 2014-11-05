<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$PARAMS['conector']];
?>
<div class="row">
    <div class="<?php echo $PARAMS['classStyle']; ?>">

        <div class="header">
        <?php echo $ITEM['header']; ?>
        </div>

        <div class="tabsAfterSlides tabs">
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
                        3); ?>
                    </div>
                    <a class="arrow prev"></a>
                    <a class="arrow next"></a>                
                </div>              
            </section>
        <?php } ?>
      
    </div>
</div>
