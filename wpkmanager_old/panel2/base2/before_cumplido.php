<?php 
// prin($_GET);

$mensaje=fila("cumplido,alerta_fecha,alerta,id_grupo","ventas_mensajes",'where id='.$_GET['L'],0);

$item=fila("id_status","ventas_items","where id=".$mensaje['id_grupo'],0);

// prin($mensaje);
// prin($item);
if($mensaje['alerta_fecha']!='' and $mensaje['alerta']=='1' and $mensaje['cumplido']!='1'
and in_array($item['id_grupo'],['7','8','9','10']) ){

	update(['cumplido','1'],'ventas_mensajes','where id='.$_GET['L']);
	die('Alerta Cumplida');

}
if($mensaje['alerta_fecha']!='' and $mensaje['alerta']=='1' and $mensaje['cumplido']=='1'){
	
	// prin($mensaje);
	die("Esta Alerta ya está cumplida");

}
if($mensaje['alerta_fecha']=''){

	die("Antes de cumplir una alerta primero debe programar una fecha de la alerta.");

}
?>
<script>
window.addEvent('domready',function(){
$('in_cumplir').value='<?php echo $_GET['L'];?>';
});
</script>