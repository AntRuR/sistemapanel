<?php //á
session_name('carrito');
session_start(); 
// Iniciar variables de sesión


//echo "<pre>"; print_r($_SESSION); echo "</pre>";

if($_POST['ajax_carrito']=='1'){ 

$web_path="web";
include($web_path."/includes.php");

$set_aumentar=0;

switch($_POST['accion']){
case "agregar":

	
	$session_items=$_SESSION['carrito']['items'];
	unset($_SESSION['carrito']['items']);
	if(sizeof($session_items)>0){
		foreach($session_items as $itca){
			if($itca['id']!=$_POST['id']){
				$_SESSION['carrito']['items'][]=$itca;
			} else {
				$_SESSION['carrito']['items'][]=array(
														"img"=>$itca['img'],
														"nombre"=>$itca['nombre'],
														"marca"=>$itca['marca'],
														"cantidad"=>$itca['cantidad']+1,
														"precio_unitario"=>$itca['precio_unitario'],														
														"precio"=> ($itca['cantidad']+1)*$itca['precio_unitario'],
														"id"=>$itca['id']
														);
				$set_aumentar=1;										
			}
		}
	}

	if($set_aumentar==0) {

$item_carr = select_fila(
"id,nombre,nombre_it,tipo,marca,descripcion,descripcion_it,composicion,composicion_it,tallas,tallas_it,colores,colores_it,precio,Oferta,id_grupo,file,fecha_creacion",
	"productos_items",
	"where id='".$_POST['id']."' "
	,0
	);

$precio=($item_carr['Oferta']=='Si')?str_replace(array(",","&euro;","€"),array(".","",""),trim($item_carr['precio_oferta'])):str_replace(array(",","&euro;","€"),array(".","",""),trim($item_carr['precio']));

$_SESSION['carrito']['items'][]=array(
									"img"=>str_replace(array('width=""','height=""'),array('',''),dimensiona_img('prodite_imas', $item_carr['fecha_creacion'], str_replace(".","_2.",$item_carr['file']))),			
									"nombre"=>$item_carr['nombre'],
									"marca"=>$item_carr['marca'],
									"cantidad"=>1,
									"precio"=>$precio,
									"precio_unitario"=>$precio,
									"id"=>$item_carr['id']
									);
									
	}
	
break;
case "descartar":
$session_items=$_SESSION['carrito']['items'];
unset($_SESSION['carrito']['items']);
if(sizeof($session_items)>0){
	foreach($session_items as $itca){
		if($itca['id']!=$_POST['id']){
			$_SESSION['carrito']['items'][]=$itca;
		}
	}
}
break;
case "eliminar":
	
$session_items=$_SESSION['carrito']['items'];
unset($_SESSION['carrito']['items']);
if(sizeof($session_items)>0){
	foreach($session_items as $itca){
		if($itca['id']!=$_POST['id']){
			$_SESSION['carrito']['items'][]=$itca;
		} else {
			if($itca['cantidad']>1){
				$_SESSION['carrito']['items'][]=array(
														"img"=>$itca['img'],
														"nombre"=>$itca['nombre'],
														"marca"=>$itca['marca'],
														"cantidad"=>$itca['cantidad']-1,
														"precio_unitario"=>$itca['precio_unitario'],														
														"precio"=> ($itca['cantidad']-1)*$itca['precio_unitario'],
														"id"=>$itca['id']
														);
			}										
		}
	}
}
	
break;
}
$tot=0;									
foreach($_SESSION['carrito']['items'] as $itca){
	$tot=$tot+$itca['precio'];
}									
$_SESSION['carrito']['total']=$tot;
//echo "<pre>"; print_r($_SESSION); echo "</pre>";

} else {

?>
<style>
#inner_carrito { position:relative; }
#cargando_carrito { position:absolute; top:0px; left:0px; background-color:#FFFFFF; padding:2px 5px; z-index:1; }
ul.carrito { list-style:none; margin:0; padding:0; }
ul.carrito li img { width:12px; }
ul.carrito li { font-size:11px; float:left; clear:left; position:relative; width:140px; margin-left:4px; padding-left:2px; padding-right:50px; border-top:1px dashed #aaa;}
ul.carrito li .cantidad { font-weight:bold; }
ul.carrito li .precio_unitario { color:#ccc; }
ul.carrito li .precio { position:absolute; right:10px; text-align:right; bottom:0px;  }
ul.carrito li a.eliminar { position:absolute; right:1px; text-align:left; bottom:0px; text-decoration:none; color:#FF0000; }
ul.carrito li .total { font-weight:bold; }
ul.carrito li.total { border-top:1px solid #aaa; height:15px; }
ul.carrito .nombre_total { left:17px; width:100px; text-align:left; font-weight:bold; position:absolute; }
</style>
<script>
function ajax_carrito(accion,id){

	$1('cargando_carrito');
	
	url='carrito_compra.php';
	datos = {
				'accion'		: accion,
				'id'			: id,
				'ajax_carrito'	:'1'
			};
	
	new Ajax( url , { method:'post', data:datos, onComplete: function(eee){		
//		 alert(eee);
		$('inner_carrito').innerHTML=eee;
			
	}}).request();
	
}
</script>
<div id="inner_carrito">
<?php } ?>

<?php if(sizeof($_SESSION['carrito']['items'])>0){ ?>
<?php
/*
$action="https://sandbox.paypal.com/us/cgi-bin/webscr";
$business="guille_1247022983_biz@gmail.com";
*/
$action="https://www.paypal.com/us/cgi-bin/webscr";
$business="eten2000@hotmail.com";

?>
<form action="<?php echo $action;?>" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="<?php echo $business;?>">
<input type="hidden" name="currency_code" value="EUR">

<input type="hidden" name="cancel_return" value="http://www.kkiery.com/pagina_cancel.php">

<input type="hidden" name="return" value="http://www.kkiery.com/pagina_thanks.php">

<input type="hidden" name="cbt" value="volver a la Kkiery">

<input type="hidden" name="image_url" value="http://kkiery.com/img/header_logo.jpg">

<input type="hidden" name="notify_url" value="http://kkiery.com/paypalscript.php">

<?php /*  <input type="hidden" name="shipping_1" value="10"  /> */ ?>

<input type="hidden" name="cpp_payflow_color" value="#FFFFFF"  />

<input type="hidden" name="no_shipping" value="2"  />




   <div class="titulo_sidebar">
        <div class="titulo_sidebar_izquierda"></div>
        <div class="titulo_sidebar_derecha"></div>
        <b><?php echo $lang['carrito'];?></b>
    </div>
    
    <div class="main_sidebar">
        <ul class='carrito'>
            <?php
			$y=0;
			foreach($_SESSION['carrito']['items'] as  $carru){
            $y++;
            ?>
            
            <input type="hidden" name="item_name_<?php echo $y;?>" value="<?php echo $carru['nombre'];?> <?php echo $carru['marca'];?>">
            <input type="hidden" name="item_number_<?php echo $y;?>" value="<?php echo $carru['id'];?>">
            <input type="hidden" name="amount_<?php echo $y;?>" value="<?php echo $carru['precio_unitario'];?>">
            <input type="hidden" name="quantity_<?php echo $y;?>" value="<?php echo $carru['cantidad'];?>">
            <input type="hidden" name="undefined_quantity" value="1"  />

            <li>
            <img <?php echo $carru['img'];?> />
            <span class="cantidad">(<?php echo $carru['cantidad'];?>)</span>
            <span class="nombre"><?php echo $carru['nombre'];?> <?php echo $carru['marca'];?></span> 
            <?php if($carru['cantidad']>1){ ?>
            <span class="precio_unitario">&euro;<?php echo $carru['precio_unitario'];?></span>            
            <?php } ?>           
            <span class="precio">&euro;<?php echo $carru['precio'];?></span>
            <a class="eliminar" title="eliminar" rel="nofollow" href="#" onclick="ajax_carrito('eliminar','<?php echo $carru['id'];?>'); return false;" >x</a>
            </li>
            <?php } ?>
            <li class="total">
            <span class="nombre_total">TOTAL</span>
            <span class="precio total">&euro;<?php echo $_SESSION['carrito']['total'];?></span>
            </li>
                         
        </ul>
        <div style="text-align:right; margin:20px 0 10px; clear:left;  width:200px;">
		<input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </div>
        <div style="clear:left;"></div>
    </div>

</form>

<?php } ?>    
    <div id="cargando_carrito" style="display:none;">cargando carrito....</div>
<?php if($_POST['ajax_carrito']!='1'){ ?>    
</div>
<?php } ?>