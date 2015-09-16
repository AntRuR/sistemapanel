<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['conector']];

$number=[
'banner_enlaces1'=>'1',
'banner_enlaces2'=>'2',
'banner_enlaces3'=>'4',
];

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

      web_render_items(
        $ITEMS['filas'],
        $ITEMS['filas'][0]['esquema'],
        0,
        $number[$THIS]
        );

      }

      ?>   
      </div> 
    </div> 
    <div class="footer">
      <a class="arrow prev">anterior</a>
      <a class="arrow next">siguiente</a>
    </div>                
</div>
