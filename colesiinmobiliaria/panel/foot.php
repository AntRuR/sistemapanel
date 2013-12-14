<?php //á

if($_GET['block']!='form'){

?>&nbsp;
<div style="background-color:#<?php echo $vars['GENERAL']['BG_COLOR_3'];?>;" class="foot bloque"> 
<div style="padding:0px;">
<?php if($Local==1){ ?>
<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/sistemapanel/panel" target="_blank"><?php echo $vars['GENERAL']['factory'];?></a> |
<?php } ?>   
<a href="<?php echo $vars['GENERAL']['by_url'];?>" target="_blank"><?php echo $vars['GENERAL']['by_label'];?></a>
<?php if($Local==1){ ?>
| <a href="maquina.php" >Master</a>
<?php } else { ?>
<a href="maquina.php" style="text-decoration:none; color:#DDDDFF; cursor:text; ">&nbsp;&nbsp;</a>
<?php } ?>
</div>
</div>
<?php } ?>
<script>
window.addEvent('domready',function(){	
	$$('.bloque').each(function(element) {
		element.setStyles({'border':'0'});
		element.innerHTML='<span class="menu_ai"></span><span class="menu_ad"></span><span class="menu_bi"></span><span class="menu_bd"></span>'+element.innerHTML;
	});	
});

window.addEvent('domready', function(){
	//charge_multibox();
});

function charge_multibox(){
	//call multiBox
	var initMultiBox = new multiBox({
		mbClass: '.mb',//class you need to add links that you want to trigger multiBox with (remember and update CSS files)
		container: $(document.body),//where to inject multiBox
		descClassName: 'multiBoxDesc',//the class name of the description divs
		path: './swf/',//path to mp3 and flv players
		useOverlay: false,//use a semi-transparent background. default: false;
		maxSize: <?php if($_GET['block']=='form'){ ?>{w:600, h:300}<?php }else{ ?>{w:900, h:550}<?php } ?>,//max dimensions (width,height) - set to null to disable resizing
		addDownload: false,//do you want the files to be downloadable?
		//pathToDownloadScript: './Scripts/ForceDownload.asp',//if above is true, specify path to download script (classicASP and ASP.NET versions included)
		addRollover: false,//add rollover fade to each multibox link
		addOverlayIcon: true,//adds overlay icons to images within multibox links
		addChain: false,//cycle through all images fading them out then in
		recalcTop: true,//subtract the height of controls panel from top position
		addTips: true//adds MooTools built in 'Tips' class to each element (see: http://mootools.net/docs/Plugins/Tips)
	});
		
}

</script>
