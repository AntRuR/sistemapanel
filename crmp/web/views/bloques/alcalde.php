<?php //á

$THIS=$PARAMS['this'];

// $object=$OBJECT[$PARAMS['this']];


// $PARAMS['classStyle']=$object['classStyle'];
//prin($ITEMS['menu']);
?>
<div class="div_fila">

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$PARAMS['classStyle'],"bloques");
        ?>" >
        <?php web_render_esquinas(1,4);?>        
    
        <?php
        // if($ITEM['header']){ 
        echo '<div class="barra_arriba">'; echo "Nuestro Alcalde"; echo '</div>';
        // }
        ?>
             
        <div class="div_borde div_inner">
        <a href="index.php?modulo=app&tab=pages&page=alcalde">
        <img src="web/templates/default/img/alcalde.jpg" style="margin:1px 7px;" >
        </a>
        </div>
        
        <?php
        echo '<div class="barra_abajo">
        <a href="index.php?modulo=app&tab=pages&page=alcalde">
        Ver presentación
        </a>        
        </div>';
        ?>
    </div>
    
</div>           
