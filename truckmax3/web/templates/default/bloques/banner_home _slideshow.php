<?php //á

$SLIDE=$SLIDESHOW[$PARAMS['conector']];
?>
<?php if($_GET['gru']=='0'){ ?>
<div class="clean"></div>
<div class="div_fila" style="background-color:#299FCA;">
	<?php //web_render_fichero($COMMON['archivos']['banner_02']); ?>
	<?php web_render_slideshow_proceso($SLIDE); ?>                             
</div>
<?php } ?>