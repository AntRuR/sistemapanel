<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['conector']];


?>
<div class="<?php echo $PARAMS['classStyle'] ?>" > 
    <div class="header">
    <?php echo $ITEMS['header']; ?>
    </div>
    <div class="inner">
      <div class="slides">
      <?php  

      if($ITEMS['total']==0){ ?>
      <ul class="listado_items">
        <p class="vacio"><?php echo $ITEMS['vacio']; ?></p>
      </ul>
      <?php } else {

      web_render_items($ITEMS['filas'],$ITEMS['filas'][0]['esquema'],0,
        ($PARAMS['this']=='banner_enlaces2')?2:1);

      }

      ?>   
      </div> 
      <a class="arrow prev"></a>
      <a class="arrow next"></a>      
    </div>               
</div>