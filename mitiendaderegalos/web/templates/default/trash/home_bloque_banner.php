<?php //á
?>

<div id="div_home_banner" class="slideshow">
<img src="<?php echo $HOME['banner'][0]['get_archivo'];?>" alt="<?php echo $HOME['banner'][0]['foto_descripcion'];?>" />
</div>

<script type="text/javascript">		
//<![CDATA[
  window.addEvent('domready', function(){
	var data = {
	<?php foreach($HOME['banner'] as $ii=>$item){ ?>
	  '<?php echo $item['get_archivo'];?>': { caption: '<?php echo $item['foto_descripcion'];?>' }<?php echo ($ii==sizeof($HOME['banner'])-1)?"":","; ?> 
	<?php } ?>  
	};
	var myShow = new Slideshow('div_home_banner', data, { 
											captions: true, 
											controller: true, 
											height: 368, 
											hu: '', 
											overlap: false, 
											resize: false, 
											transition: 'back:in:out', 
											width: 311 ,
											loader: {'animate': ['<?php echo THEME_PATH;?>/css/slideshow/loader-#.png', 12]}
											});
  });
//]]>
</script>
