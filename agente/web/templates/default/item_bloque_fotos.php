<?php //á
?>
<style type="text/css"> #contenedor_slider_<?php echo $ITEM['fotos']['label'];?>_movil div.slid { width:<?php echo $ITEM['fotos']['width'];?>px; height:<?php echo $ITEM['fotos']['height'];?>px; } </style>

<div id="div_bloque_vistas"  >

	<div class="bloque_cuadro_6" >
                
            <div style=" width:<?php echo $ITEM['fotos']['width'];?>px; height:<?php echo $ITEM['fotos']['height'];?>px;" class="contenedor_slider_fijo">
            
                <div id="contenedor_slider_<?php echo $ITEM['fotos']['label'];?>_movil" class="contenedor_slider_movil">
                    <?php if(sizeof($ITEM['fotos']['items'])==0){ ?>
                 
                    <?php } else { 
                    $bloques_sliders=array_chunk($ITEM['fotos']['items'],$ITEM['fotos']['itemsporpagina']);
                    foreach($bloques_sliders as $yyy=>$bloque_slider){ 
                    $uuu[]=$yyy+1;		
                    ?>   
                    <div class="slid">     
                        <ul>    
                            <?php foreach($bloque_slider as $item){ ?>
                            <li>
                                <a rel="[images],noDesc" class="mb foto" title="<?php echo $item['title'];?>" href="<?php echo $item['foto_zoom'];?>" >
                                <img <?php echo $item['atributos_foto_thumb'];?> alt="<?php echo $item['alt'];?>" />
                                </a>
                            </li>
                            <?php } ?>
                       </ul>
                    </div>    
                    <?php } ?>                
                    <?php } ?>
                </div>
            
            </div>
            
        </div>        
        <div class="bloque_pie">
            <?php if(sizeof($bloques_sliders)>1){ ?>  
                    <a id="contenedor_slider_<?php echo $ITEM['fotos']['label'];?>_prev" class="but_prev"></a>
                    <a id="contenedor_slider_<?php echo $ITEM['fotos']['label'];?>_next" class="but_next"></a>      
            <?php } ?>
        </div>
        
</div>
<?php 
if(sizeof($bloques_sliders)>1){ ?>
<script type="text/javascript">

	window.addEvent('domready',function(){		
		
		//SAMPLE 2 (transition: Bounce.easeOut)
		var NS_<?php echo $ITEM['fotos']['label'];?> = new noobSlide({
			box: $('contenedor_slider_<?php echo $ITEM['fotos']['label'];?>_movil'),
			items: [<?php echo implode(",",$uuu); ?>],
			interval: 7000,
			autoPlay: <?php echo $ITEM['fotos']['autoplay'];?>,
			size:<?php echo $ITEM['fotos']['height'];?>,
			mode:'<?php echo $ITEM['fotos']['mode'];?>',
			addButtons: {
				previous: $('contenedor_slider_<?php echo $ITEM['fotos']['label'];?>_prev'),
				next: $('contenedor_slider_<?php echo $ITEM['fotos']['label'];?>_next')
			}			
		});
		
	});
	
</script>		
<?php } ?>
<?php 

unset($label);	
unset($width);
unset($height);
unset($autoplay);
unset($itemsporpagina);
unset($bloques_sliders);
unset($uuu);

?>
<script type="text/javascript">
window.addEvent('domready', function(){
	//call multiBox
	var initMultiBox = new multiBox({
		mbClass: '.mb',//class you need to add links that you want to trigger multiBox with (remember and update CSS files)
		container: $(document.body),//where to inject multiBox
		descClassName: 'multiBoxDesc',//the class name of the description divs
		path: './swf/',//path to mp3 and flv players
		useOverlay: true,//use a semi-transparent background. default: false;
		maxSize: {w:1000, h:2000},//max dimensions (width,height) - set to null to disable resizing
		addDownload: false,//do you want the files to be downloadable?
		//pathToDownloadScript: './Scripts/ForceDownload.asp',//if above is true, specify path to download script (classicASP and ASP.NET versions included)
		addRollover: true,//add rollover fade to each multibox link
		addOverlayIcon: false,//adds overlay icons to images within multibox links
		addChain: true,//cycle through all images fading them out then in
		recalcTop: true,//subtract the height of controls panel from top position
		addTips: true//adds MooTools built in 'Tips' class to each element (see: http://mootools.net/docs/Plugins/Tips)
	});
	
	initMultiBox.title.setStyles({'margin-right':'25px'});
	initMultiBox.nextButton.setStyles({'top':'0px'});
	initMultiBox.previousButton.setStyles({'top':'0px'});	
	if(!window.opera){
	initMultiBox.container.setStyles({'border-color': '#001533'});
	initMultiBox.controls.setStyles({'background-color':'#001533','color':'#FFFFFF'});	
	}
		
});
</script>