<?php //á 



// echo "</div><div style='text-align:left;'>";

$participantes=array(
					'1'			=> 'Inmobiliaria',
					'2'			=> 'Cliente',
					'3'			=> 'Notaria',
					'4'			=> 'Otro Banco',
					'5'			=> 'BCP',
			);

$cumplido=array(
					'1'			=> 'Cumplido',
					'0'			=> 'Por Cumplir',
			);

$fila=fila("
	id,
	id_banco",
	
	"tramites_items",
	
	"where id=".$_GET['id'],

	0);

$sibcp=($fila['id_banco']=='7')?1:0;

$sibcp_query=($sibcp)?' and sibcp in (1,2) ':' and sibcp in (1,3) ';

$pasos_base=select("
	id,
	nombre,
	paso,
	orden
	",
	"tramites_items_base",
	"where 1 $sibcp_query",
	0);

// prin($pasos);


	// if(sizeof(json_decode($fila['pedido']))>0){
		echo '<ul class="tabla_objetos">
		';
		$proceder=1;

		$onemore=true;

		$openscroll=true;

		foreach($pasos_base as $paso){

			// if(0) 
			// if($onemore==false) continue;

			// if($pedido->type=="departamento")
			// 	$tt="productos_items_items";
			// elseif($pedido->type=="estacionamiento")
			// 	$tt="productos_estacionamientos_items_items";
			// elseif($pedido->type=="deposito")
			// 	$tt="productos_depositos_items_items";

			// $fila0=fila("id_status",$tt,"where id=".$pedido->id,0,['status'=>['fila'=>['nombre,color','productos_stock_status','where id={id_status}',0]]]);	
			// $					
			// prin($fila);
			
			$estado=fila("cumplido","tramites_subitems","where id_grupo=".$_GET['id']." and orden=".$paso['orden'],0);

			if($estado==false){
				$estad='<a class="btn btn-small btn-primary" onclick="
				$(\'in_nombre\').value=$(\'i_'.$paso['id'].'\').getProperty(\'data-n\');
				$(\'in_orden\').value=$(\'i_'.$paso['id'].'\').getProperty(\'data-o\');
				$(\'in_paso\').value=$(\'i_'.$paso['id'].'\').getProperty(\'data-p\');
				">Agregar</a>';
				$onemore=false;

			} else {
				$estad='<span class="label label-'. ( ($estado['cumplido']=='0')?'important':'success' ) .'">'.$cumplido[$estado['cumplido']].'<span>';
			}

			if($estado==false and $openscroll==true){
				echo '<div class="scroll">';
				$openscroll=false;
			}
			echo '<li>';		
			// echo '<td>'.$paso['orden'].'</td>';
			echo '<div id="i_'.$paso['id'].'" data-p="'.$paso['paso'].'" data-n="'.$paso['nombre'].'" data-o="'.$paso['orden'].'">'.$participantes[$paso['nombre']].'</div>';
			echo '<div>'.nl2br($paso['paso']).'</div>';

			echo '<div>'.$estad.'</div>';
			echo '</li>';

			// if(in_array($fila0['id_status'],[3,4]) and $proceder==1){ $proceder=0; } 

		}
		echo '
			</div>
		</ul>
<style>
ul.tabla_objetos { display:block; }
ul.tabla_objetos li { border:1px solid #ccc; border-bottom-width:0px; }
/*ul.tabla_objetos li:last-child { border-bottom-width:1px; }*/
ul.tabla_objetos li div { display:inline-block; padding:5px 10px; box-sizing:border-box; }
ul.tabla_objetos li div:nth-child(1) { width:10%; }
ul.tabla_objetos li div:nth-child(2) { width:80%; }
ul.tabla_objetos li div:nth-child(3) { width:10%; text-align:right; }
ul.tabla_objetos div.scroll { max-height:100px; overflow:auto; border:1px solid #cf6a27;  }
</style>
		';

	// }

	if(!$proceder){

		echo '<div class="alert alert-danger">El inmueble que desea vender ya está separado o vendido</div>';

		exit();

	}

// prin($fila);
?>
<script>
// window.addEvent('domready',function(){

// 	// alert('<?php echo $fila['forma_pago']; ?>');

// 	$('in_id_ventas_item').value           ='<?php echo $fila['id']; ?>';
// 	// $('in_id_cliente').value               ='<?php echo $fila['id_cliente']; ?>';
// 	// $('in_id_item').value                  ='<?php echo $fila['id_item']; ?>';
// 	$('in_forma_pago').value               ='<?php echo $fila['forma_pago']; ?>';
// 	$('in_pvlista').value                  ='<?php echo $fila['pvlista']; ?>';
// 	$('in_pvpromocion').value              ='<?php echo $fila['pvpromocion']; ?>';
// 	$('in_porcentaje_cuota_inicial').value ='<?php echo $fila['porcentaje_cuota_inicial']; ?>';
// 	$('in_cuota_inicial').value            ='<?php echo $fila['cuota_inicial']; ?>';
// 	$('in_saldo_financiar').value          ='<?php echo $fila['saldo_financiar']; ?>';
// 	$('in_separacion').value               ='<?php echo $fila['separacion']; ?>';
// 	$('in_id_usuario').value               ='<?php echo $fila['id_usuario']; ?>';

// 	$('in_saldo_inmobiliaria').value         ='<?php echo $fila['saldo_inmobiliaria']; ?>';
// 	$('in_saldo_inmobiliaria_cuotas').value  ='<?php echo $fila['saldo_inmobiliaria_cuotas']; ?>';
// 	$('in_saldo_ahorro').value               ='<?php echo $fila['saldo_ahorro']; ?>';
// 	$('in_saldo_ahorro_cuotas').value        ='<?php echo $fila['saldo_ahorro_cuotas']; ?>';


// 	// $('in_forma_pago').fireEvent('change');
// 	if($('in_forma_pago').value=='1'){
// 		$0("id_in_porcentaje_cuota_inicial");$0("id_in_cuota_inicial");$0("id_in_saldo_financiar");
// 	}
// 	if($('in_forma_pago').value=='2'){
// 		$0("id_in_porcentaje_cuota_inicial");$0("id_in_cuota_inicial");$0("id_in_saldo_financiar");
// 	}
// 	if($('in_forma_pago').value=='3'){
// 		$1("id_in_porcentaje_cuota_inicial");$1("id_in_cuota_inicial");$1("id_in_saldo_financiar");
// 	}
// 	if($('in_forma_pago').value=='4'){
// 		$1("id_in_porcentaje_cuota_inicial");$1("id_in_cuota_inicial");$1("id_in_saldo_financiar");
// 		$1("id_in_saldo_inmobiliaria");$1("id_in_saldo_inmobiliaria_cuotas");$1("id_in_saldo_ahorro");$1("id_in_saldo_ahorro_cuotas");
// 	}	

// });
</script>
<?php 

?>