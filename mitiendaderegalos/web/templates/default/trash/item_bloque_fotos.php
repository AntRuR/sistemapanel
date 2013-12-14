<?php //á
?>
<?php 
$SLIDE=$SLIDESHOW['item-fotos']; 
//prin($SLIDE);
?>
<div class="div_bloque" id="div_item_fotos" >
	<div id="div_item_fotos_content" class="slideshow">
		<img src="<?php echo $SLIDE['listado'][0]['foto_zoom'];?>" alt="<?php echo $SLIDE['listado'][0]['foto_descripcion'];?>" />
	</div>
</div>
<?php if(!empty($SLIDE)){ ?>
	
<script type="text/javascript">
//<![CDATA[
  window.addEvent('domready', function(){
	var data = {
	<?php foreach($SLIDE['listado'] as $ii=>$item_pic){ ?>
	  '<?php echo $item_pic['foto_zoom'];?>': { 
	  caption: '<?php echo $item_pic['foto_descripcion'];?>'
	  ,thumbnail: '<?php echo $item_pic['foto_thumb'];?>'
	  }
	  <?php echo ($ii==sizeof($SLIDE['listado'])-1)?"":","; ?> 
	<?php } ?>
	};
	var myShow = new <?php echo $SLIDE['class'];?>('div_item_fotos_content', data, { 
											captions: true, 
											controller: <?php echo $SLIDE['controller'];?> ,
											width: <?php echo $SLIDE['width'];?> ,
											height: <?php echo $SLIDE['height'];?>, 
											hu: '', 
											thumbnails: <?php echo $SLIDE['thumbnails'];?>,
											overlap: <?php echo $SLIDE['overlap'];?>, 
											resize: <?php echo $SLIDE['resize'];?>, 
											transition: <?php echo $SLIDE['transition'];?>, 
											paused: <?php echo $SLIDE['paused'];?>,
											//replace: [/_4\./, '_1\.'], 
											loader: {'animate': ['<?php echo THEME_PATH;?>/css/slideshow/loader-#.png', 12]}
											});										
  });
//]]>
</script>
<?php } ?>