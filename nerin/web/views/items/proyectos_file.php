<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$PARAMS['this']];

// prin($PARAMS);
// 

?>
<div class="row">
    <div class="<?php echo $PARAMS['classStyle']; ?>">

        <div class="header">
            <?php echo $ITEM['header']; ?>
        </div>

        <div class="tabsAfterSlides tabs">
            <?php web_render_menu($ITEM['menu']); ?>    
        </div>

        <?php foreach($ITEM['menu'] as $tab){
             ?>
            <section class="sec_<?php echo $tab['id']; ?>">
                <div class="inner">

                    <?php if($tab['id']=='0'){ ?>
                        <?php web_render_item(
                        $ITEM['item'],
                        $ITEM['item']['esquema']
                        ); ?>
                    <?php } else { ?>
                    <div class="slides image-gallery" data-delay="false">
                        <?php web_render_items(
                        $ITEM[$tab['id']]['filas'],
                        $ITEM[$tab['id']]['filas'][0]['esquema'],
                        0,
                        6); ?>
                    </div>
                    <a class="arrow prev"></a>
                    <a class="arrow next"></a>    
                    <?php } ?>

                </div>              
            </section>
        <?php } ?>
      
    </div>
</div>
