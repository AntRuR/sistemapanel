<?php //á
?>
<div id="div_pagina_main">

    <h1 class="titulo"><?php echo $item['titulo'];?></h1>   
    <p class="texto">
    <?php if($item['get_atributos']!=''){ ?>
    <img alt="<?php echo $item['alt'];?>" title="<?php echo $item['title'];?>" <?php echo $item['get_atributos'];?> align="right" class="foto margen-izquierda" /> 
    <?php } ?>
    <?php echo $item['texto'];?>
    </p> 
    
    <?php if($LISTADO){ 
    
    	include("common_listados_socios.php");
    
    } ?>
            
</div>