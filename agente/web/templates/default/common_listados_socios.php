<?php //á
?>
<div class="div_listado" id="listado_socios">
<div id="listado_titulo">
<h2><?php echo $LISTADO['titulo']; ?></h2>
</div>

<?php /*
<div class="listado_paginacion">
<span class="total"><?php echo $LISTADO['total'];?> resultados</span>
<?php echo $LISTADO['anterior']." ".$LISTADO['tren']." ".$LISTADO['siguiente']; ?>
</div>
*/ ?>

<ul class="listado_items">
<?php  

if(sizeof($LISTADO['filas'])>0){

foreach($LISTADO['filas'] as $item){ 

?>

<li class="listado_item">

    <!--foto-->
    <a class="foto mb" rel="[images],noDesc" title="<?php echo $item['nombre'];?>" href="<?php echo $item['get_archivo']; ?>"><img title="<?php echo $item['nombre'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['nombre'];?>" /></a>
    <!--nombre-->
    <h2 class="nombre"><?php echo $item['nombre'];?></h2>
    <!--registro-->
    <?php if($item['registro']){ ?><span class="registro"><b>Registro de agente inmobiliario :</b> <?php echo $item['registro'];?></span><?php } ?>    
    <!--empresa-->
     <?php if($item['empresa']){ ?><span class="empresa"><b>Empresa :</b> <?php echo $item['empresa'];?></span><?php } ?> 
    <!--telefono-->
     <?php if($item['telefono']){ ?><span class="telefono"><b>Teléfono :</b> <?php echo $item['telefono'];?></span><?php } ?> 
    <!--email-->
     <?php if($item['email']){ ?><a class="email"><?php echo $item['email'];?></a><?php } ?> 
    <!--direccion-->
    <?php if($item['direccion']){ ?><span class="direccion"><b> Dirección :</b><?php echo $item['direccion'];?></span><?php } ?>
    <!--descripcion-->
    <?php if($item['descripcion']){ ?><span class="descripcion"><?php echo $item['descripcion'];?></span><?php } ?>

</li>

<?php 

}

} else {
?>
<p class="vacio"><?php echo $LISTADO['vacio']; ?></p>
<?php
}
?>
</ul>
<?php /*
<div class="listado_paginacion">
<?php echo $LISTADO['anterior']." ".$LISTADO['tren']." ".$LISTADO['siguiente']; ?>
</div>
*/ ?>
</div>
<script type="text/javascript">
window.addEvent('domready', function(){
	//call multiBox
	var initMultiBox = new multiBox({
		mbClass: '.mb',//class you need to add links that you want to trigger multiBox with (remember and update CSS files)
		container: $(document.body),//where to inject multiBox
		descClassName: 'multiBoxDesc',//the class name of the description divs
		path: './swf/',//path to mp3 and flv players
		useOverlay: true,//use a semi-transparent background. default: false;
		maxSize: {w:600, h:400},//max dimensions (width,height) - set to null to disable resizing
		addDownload: false,//do you want the files to be downloadable?
		//pathToDownloadScript: './Scripts/ForceDownload.asp',//if above is true, specify path to download script (classicASP and ASP.NET versions included)
		addRollover: true,//add rollover fade to each multibox link
		addOverlayIcon: false,//adds overlay icons to images within multibox links
		addChain: true,//cycle through all images fading them out then in
		recalcTop: true,//subtract the height of controls panel from top position
		addTips: false//adds MooTools built in 'Tips' class to each element (see: http://mootools.net/docs/Plugins/Tips)
	});

	initMultiBox.title.setStyles({'margin-right':'25px'});
	initMultiBox.nextButton.setStyles({'top':'0px'});
	initMultiBox.previousButton.setStyles({'top':'0px'});
	if(!window.opera){
	initMultiBox.container.setStyles({'border-color': '#FFFFFF'});
	initMultiBox.controls.setStyles({'background-color':'#FFFFFF','color':'#000000'});
	}

});
</script>