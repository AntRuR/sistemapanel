<?php //á
$THIS=$PARAMS['this'];
$object=$OBJECT[$THIS];

?><div class="div_fila cuadro <?php 
web_selector_control($SELECTED,$THIS,"bloques,menus");	
?>">
	<div class="div_borde div_inner">

		<!--<h1 class="main_title"><?php echo $HEAD['titulo_H1'] ?></h1>-->

		<div class="div_menu div_absoluto header-menu">
		<?php web_render_menu($object['menu'],array(
													'lados_externos'=>0
													,'lados_internos'=>0
													,'lados_flotantes'=>1
													//,'id'=>'menu_main'
													),'h2'); ?>
		
		</div>
		
        <div class="div_absoluto header-logo">                  
            <?php web_render_fichero($COMMON['archivos']['header_logo']); ?>        
        </div>     

        <div class="div_absoluto header-telefono">                  
            <?php web_render_fichero($COMMON['archivos']['header_telefono']); ?>        
        </div>             
        
		<div class="clean"></div>
        
	</div>
</div>