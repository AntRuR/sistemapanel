<?php //á
switch($_SESSION['usuario_id']){
case "126":
	$extrac=implode(file('base2/villa.txt'));
 	$numguia="003 ".sprintf("%07d",$extrac);
break;
case "127":
	$extrac=implode(file('base2/surquillo.txt'));
 	$numguia="002 ".sprintf("%07d",$extrac);
break;
default:
	$numguia='';
break;
}
?>
<script>
window.addEvent('load',function(){ 
	if($('in_numero_guia').value==''){
		$('in_numero_guia').value='<?php echo $numguia;?>';
	}
});
</script>