<?php //á

//$alertas=select("alerta_fecha,estado","ventas_alertas","where 1");
//prin($alertas);

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  DATE(alerta_fecha) < DATE(NOW()) AND cumplido=0
//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha>NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0
//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha<NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0
/*
update(array('estado'=>'1'),"ventas_alertas","where DATE(alerta_fecha) < DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);

update(array('estado'=>'2'),"ventas_alertas","where NOW() < alerta_fecha AND DATE(alerta_fecha) = DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);

update(array('estado'=>'3'),"ventas_alertas","where alerta_fecha < NOW() AND (cumplido=0 or cumplido is null)",0);

update(array('estado'=>'4'),"ventas_alertas","where cumplido=1",0);
*/
//update(array('estado'=>'2'),"ventas_alertas","where alerta_fecha = NULL",1);


// $saldos=select("id,saldo","productos_ventas_documentos","where id_grupo=".$_GET['id']." order by id DESC limit 0,1",1);
//$saldo=$saldos[0]['saldo'];
 
 $saldo=dato("saldo","productos_ventas","where id=".$_GET['id']);
 
?>
<script>
var saldo='<?php echo $saldo; ?>';
//alert(saldo);
saldo=saldo*1;
var saldoV=saldo;
/*
function ondlselect(id){
	if(id!=''){
		new Request({url:'base2/checkowner.php?cl='+id,  method:'get', onSuccess:function(ee) { 
			var json=eval("(" + ee + ")");
			//alert(json.user+' = <?php echo $_SESSION['usuario_id'];?>');
			if(json.user!='<?php echo $_SESSION['usuario_id'];?>'){
				//alert('de otro usuario');
				$('span_id_cliente_dl').innerHTML='<span style="float:right;margin-left:4px;">es obligatorio validar los datos antes de grabar</span> <a rel="width:750,height:400" class="mb updateforeig" style="float:right !important;margin:0 !important;" href="formulario_quick.php?OT=clientes&amp;ran=1&amp;proceso=&amp;parent=VENTAS_ITEMS&amp;load='+encodeURIComponent(ee)+'"></a>';
				$('in_id_cliente').value='';
			} else {
				$('span_id_cliente_dl').innerHTML='<a rel="width:750,height:400" class="mb crearforeig" style="float:right !important;margin:0 !important;" href="formulario_quick.php?OT=clientes&amp;ran=1&amp;proceso=&amp;parent=VENTAS_ITEMS"></a>';
			}
			charge_multibox();
		 } } ).send();
	}
}*/
window.addEvent('domready',function(){ 
<?php if($_GET['proceso']=='1'){ ?>
$('in_monto').value=saldo;
$('in_recibido').value=saldo;
$('in_importe').value=saldo; 
<?php } ?> 
<?php if($_GET['proceso']=='2'){ ?>
$('in_monto').value='-'+saldo;
$('in_recibido').value='-'+saldo;
$('in_importe').value='-'+saldo; 
<?php } ?> 
<?php if($_GET['proceso']=='3'){ ?>
$('in_monto').value='0';
$('in_recibido').value=saldo;
$('in_importe').value=saldo; 
<?php } ?> 

$('in_monto').addEvent('change', function(){ 
saldoV=($('in_moneda').value=='soles')?saldo*$('in_tc').value:saldo;
if($('in_monto').value>saldoV){ $('in_monto').value			=saldoV; } 
if($('in_recibido').value>saldoV){ $('in_recibido').value	=saldoV; } 
if($('in_importe').value>saldoV){ $('in_importe').value		=saldoV; } 
});
$('in_recibido').addEvent('change', function(){ 
saldoV=($('in_moneda').value=='soles')?saldo*$('in_tc').value:saldo;
if($('in_monto').value>saldoV){ $('in_monto').value=saldoV; } 
if($('in_recibido').value>saldoV){ $('in_recibido').value=saldoV; } 
if($('in_importe').value>saldoV){ $('in_importe').value=saldoV; } 
});
/*
$('in_ctabanco').addEvent('change', function(){ 
});
*/

//alert('<?php echo $_GET['id'];?>');
//in_recibido > monto_recibido/
//in_id_cliente
}); 

function update_ini_moneda(){ 
saldoV=($('in_moneda').value=='soles')?saldo*$('in_tc').value:saldo;
<?php if($_GET['proceso']=='1'){ ?>
$('in_monto').value=saldoV;
$('in_recibido').value=saldoV;
$('in_importe').value=saldoV; 
<?php } ?> 
<?php if($_GET['proceso']=='2'){ ?>
$('in_monto').value='-'+saldoV;
$('in_recibido').value='-'+saldoV;
$('in_importe').value='-'+saldoV; 
<?php } ?> 
<?php if($_GET['proceso']=='3'){ ?>
$('in_monto').value='0';
$('in_recibido').value=saldoV;
$('in_importe').value=saldoV; 
<?php } ?> 
}
</script>