<?php //á
?>
<?php if($MASTERBLOCK['header']){ ?>
    <div id="div_header" class="div_fila">
    	<h1 class="main_title"><?php echo $HEAD['titulo_H1'] ?></h1>
		<?php /*<a href="<?php echo $COMMON['url_home'];?>" class="div_absoluto header-logo" title="<?php echo $COMMON['datos_root']['titulo_home'];?>" >
        <?php //web_logo($COMMON,""); ?>
        </a>*/?>
       	<div class="div_columna">        
		<?php web_render_fichero($COMMON['archivos']['logo']); ?>        
		</div>
       	<div class="div_columna" style="float:left;margin:7px 0px 0px 2px;width:120px;">                
        <?php include(incluget("bloques/mi_cuenta.php")); ?>                    
        </div>
    </div>
<?php } ?>