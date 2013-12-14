<?php //á
//prin($PAGINA);
$THIS=$PARAMS['this'];

$object=$OBJECT[$THIS];

?>
<div class="cuadro <?php 
    web_selector_control($SELECTED,$THIS,"bloques");
    ?>" >
   <div class="barra_arriba">
   <?php web_render_item_borde('bors-b',1,2);?>        
   <?php echo $object['titulo']; ?>
   </div>
    <div class="div_borde div_inner">
        <?php if($object['foto']!=''){ ?>
        <div style="margin-bottom:10px;float:left;"><img  <?php echo $object['get_atributos']; ?> class="margen_der" /></div>
        <?php } ?>
        <?php echo $object['texto']; ?>
    </div>
</div>