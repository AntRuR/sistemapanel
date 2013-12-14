<?php //á
$THIS=$PARAMS['this'];
$object=$OBJECT[$THIS];
?>
<div class="div_fila cuadro <?php 
web_selector_control($SELECTED,$THIS,"bloques,menus");	
?>">
    <?php web_render_esquinas(1,2);?>
    <div class="barra_arriba"></div>   
       
    <div class="div_borde div_inner">
 
        <!--<h1 class="main_title"><?php echo $HEAD['titulo_H1'] ?></h1>-->
        <div class="div_absoluto header-logo">                  
            <?php web_render_fichero($COMMON['archivos']['logo']); ?>        
        </div>     
		<?php /*
        <div class="div_absoluto header-menu">
            <div class="div_fila div_menu"><?php
            web_render_menu($object['menu'],array(
												'lados_externos'=>0
												,'lados_internos'=>1
												,'lados_flotantes'=>0
												,'menu_borde'=>0
												//,'id'=>'menu_main'
												//,'rel'=>'son_menu_main'
												//,'ul'=>'div'													
												),'h2');
            ?></div>            
        </div>
        ?>
        <?php /*<a href="<?php echo $COMMON['url_home'];?>"><img src="web/templates/default/img/particular/header/logo.jpg" /></a>*/?>
        <?php //web_render_fichero($COMMON['archivos']['logo']); ?>                
        
    </div>
</div>