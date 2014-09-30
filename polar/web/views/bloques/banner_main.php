<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['conector']];

// prin($ITEMS);

?>
<div class="row">
  <div class="<?php echo $PARAMS['classStyle'] ?>" >    
      <?php  

      if($ITEMS['total']==0){ ?>
      <ul class="listado_items">
        <p class="vacio"><?php echo $ITEMS['vacio']; ?></p>
      </ul>
      <?php } else {

      web_render_items($ITEMS['filas']);

      }

      ?>           
  </div>
</div>