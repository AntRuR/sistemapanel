<?php //á

$THIS=$_GET['tab'];

$FORM=$FORMULARIO[$THIS];

?>
<div class="cuadro <?php
	web_selector_control($SELECTED,$THIS,"bloques,formularios");
	?>" >
    <?php web_render_esquinas(1,4);?>		

	   	<div class="barra_arriba">
       <?php web_render_item_borde('bors-b',1,2);?>                
        <h1><?php echo $FORM['titulo']; ?></h1>
        </div>

        <div class="div_borde div_inner" >
		<?php
            include("formularios/".$_GET['tab'].".php");
		?>   
        </div>

</div>    	
