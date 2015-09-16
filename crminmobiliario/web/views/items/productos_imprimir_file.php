<?php //á

$THIS=$PARAMS['this'];

$linea=$DETAIL[$PARAMS['this']];

// prin($linea);
?>


<div class="div_fila">

    <div class="cuadro ficha_producto <?php 
        web_selector_control($SELECTED,$THIS,"bloques,fichas");
        ?>" >

        <div class="div_borde div_inner">

            <div class="div_fila" style="height:75px;">

                    <div class="div_absoluto header-imprimir">
					<?php 

						echo "<img src='panel/config/logo.jpg' style='height:60px;width:auto;'/>";

                    ?>
					<div>
					<?php

					$usuario=fila("id_ptoventa","usuarios","where id='".$_GET['id_usuario']."'"); 

					$direccion=dato("direccion","productos_ptoventa","where id='".$usuario['id_ptoventa']."'");

					?>
					<b style='font-size:9px;'><?php echo nl2br($direccion);?></b>
					</div>

                    </div>

                    <div class="ficha div_absoluto ficha-cliente">

<!--                         <table width="260" border="0"><tbody>

                        <tr><td colspan=2 style="border:1px solid #ddd;" align="center"><?php 

                        echo "Proforma ".str_pad($_GET['id_venta'], 10, "0", STR_PAD_LEFT); 

                        ?></td></tr>

						<?php /* if($fila['banco']){ ?><tr><td style="font-weight:bold;border:1px solid #DDD;" align="left" >Banco</td><td style="border:1px solid #ddd;"><?php echo $fila['banco'];?></td></tr><?php } */ ?>

						<?php /* if($fila['sectorista']){  ?>

						<tr><td colspan=2 style="background:#CCC;border:1px solid #DDD;" align="center"><strong>SECTORISTA</strong></td></tr>

						<tr><td colspan=2 style="border:1px solid #ddd;"  align="center"><?php echo $fila['sectorista'];?></td></tr><?php } */ ?>

						<?php 
						/*
							$phones=array();

							$phoness=implode(" / ",$phones);

						if($phoness!=''){ ?><tr><td style="font-weight:bold;border:1px solid #DDD;" align="left" >Teléfono</td><td style="border:1px solid #ddd;"><?php echo $phoness;?></td></tr><?php } */ ?>

						<?php /* if($fila['sectorista_email']){  ?><tr><td style="font-weight:bold;border:1px solid #DDD;" align="left" >Email</td><td style="border:1px solid #ddd;"><?php echo $fila['sectorista_email'];?></td></tr><?php } */?>

                        </tbody></table> -->

                    	<?php 

						if($_GET['id_mensaje']){

							$fecha=dato("fecha_creacion","ventas_mensajes","where id='".$_GET['id_mensaje']."'");

	                        echo '<table width="260" border="0"><tbody>

	                        <tr><td style="border:1px solid #ddd;" align="center">';

	                        echo fecha_formato($fecha,2);

	                        echo '</td></tr>

	                        </tbody></table>';

						} else {

							$fecha=dato("fecha_creacion","ventas_items","where id='".$_GET['id_venta']."'");

	                        echo '<table width="260" border="0"><tbody>

	                        <tr><td style="border:1px solid #ddd;" align="center">';

	                        echo fecha_formato($fecha,2);

	                        echo '</td></tr>

	                        </tbody></table>';						

						}

						?>
                    </div>

            </div>
	<?php		

	// if($_GET['id']!=''){

$FFILA=$linea=$fila=select_fila(
					array(
					"id_cliente",
					"id_item",
					"id_usuario",
					"id_status",
					"id_nivel",
					"id_canal",
					"forma_pago",
					"pvlista",
					"pvpromocion",
					"porcentaje_cuota_inicial",
					"cuota_inicial",
					"separacion",
					"saldo_financiar",
					"id_banco",
					"id_sectorista",
					"pedido",
					'sectorista_nombre','sectorista_email','sectorista_telefono','id_banco','id_sectorista',
					'id_promocion'
					),
					'ventas_items',
					'where id='.$_GET['id_venta'],
					0,
					array(
						'cliente'	=>array('fila'=>array('empresa,nombre,apellidos,genero,email,dni,telefono,telefono_oficina,celular_claro,celular_movistar,nextel','clientes','where id="{id_cliente}"')),
						'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma,telefono_oficina,celular_claro,celular_movistar','usuarios','where id="{id_usuario}"')),
						//'grupo'		=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),
						//'tipo'		=>array('fila'=>array('nombre','productos_tipo','where id="{id_tipo}"')),
						'item'		=>array('fila'=>array('nombre,descripcion5','productos_items','where id="{id_item}"',0)),							
						// 'item_item'	=>array('fila'=>array('nombre,numero,id_items_tipo','productos_items_items','where id="{id_items_item}"')),							
						'cuenta'	=>array('fila'=>array('nombre,logo,fecha_creacion,dominio','envios_cuentas','where id="{id_cuenta_email}"',0,
								array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))	
							)
						),							
						'sectorista'=>array('fila'=>array('nombre,apellidos,email,telefono','bancos_sectoristas','where id="{id_sectorista}"')),
						'banco'=>array('fila'=>array('nombre','bancos','where id="{id_banco}"')),						
						'promocion'=>array('fila'=>array('texto','promociones','where id="{id_promocion}"')),
					)							
				);
// prin($linea);exit();
$telefonos_fijos=$telefonos_moviles=array();

if($linea['cliente']['telefono']!='')$telefonos_fijos[]=$linea['cliente']['telefono'];
if($linea['cliente']['telefono_oficina']!='')$telefonos_fijos[]=$linea['cliente']['telefono_oficina'];

if($linea['cliente']['celular_claro']!='')$telefonos_moviles[]=$linea['cliente']['celular_claro'];
if($linea['cliente']['celular_movistar']!='')$telefonos_moviles[]=$linea['cliente']['celular_movistar'];
if($linea['cliente']['nextel']!='')$telefonos_moviles[]=$linea['cliente']['nextel'];

$telefonos_fijos_string = implode("/ ",$telefonos_fijos);

$telefonos_moviles_string = implode("/ ",$telefonos_moviles);



	$tableProps='width="100%" cellpadding="0" cellspacing="0" border="0" ';						


		// $producto['ficha']=fix_ficha($producto['ficha']);

		//var_dump($producto);

		$html='';


		$pblocks=[];


		/**
		 * INMUEBLE
		 */
		// $html.='<tr><td colspan=4 class="section">'.$linea['item']['nombre'].' - '.$producto['nombre'].' '.$producto['numero'].'</td></tr>';//
		

		/**
		 * FOTO PROYECTO
		 */
		
		$pblocks[]=render_cliente($linea);


		$pblocks[]=render_proyecto_name($linea);


		$pedido=json_decode($linea['pedido']);
		// prin($linea['pedido']);
		// prin($pedido);
		// exit();

		$pdepartamentos=array();
		$pdepositos=array();
		$pestacionamientos=array();

		$suma=0;
		foreach($pedido as $pedi){
			switch($pedi->type){
				case "departamento":
					$pdepartamentos[]=[
						'id'	=>$pedi->id,
						'price'	=>$pedi->price,
					];
				break;
				case "estacionamiento":
					$pestacionamientos[]=[
						'id'	=>$pedi->id,
						'price'	=>$pedi->price,
					];
				break;
				case "deposito":
					$pdepositos[]=[
						'id'	=>$pedi->id,
						'price'	=>$pedi->price,
					];
				break;						
			}
			$suma=$suma+$pedi->price;
		}

		foreach($pdepartamentos as $pdep)
			$pblocks[]=render_departamentos(extract_departamentos($pdep['id']),$pdep['price']);

		foreach($pdepositos as $pdep)
			$pblocks[]=render_depositos(extract_depositos($pdep['id']),$pdep['price']);

		foreach($pestacionamientos as $pdep)
			$pblocks[]=render_estacionamiento(extract_estacionamiento($pdep['id']),$pdep['price']);	

		$pblocks[]=render_total($linea,$suma);


		if($linea['id_promocion']!=''){

			$pblocks[]=render_promocion($linea);

		}


		$pblocks[]=render_vendedor($linea);


		if($_GET['imprimir']!='1'){

			$pblocks[]=render_plano(extract_departamentos($pdepartamentos['0']['id']),$pdepartamentos['0']['price']);

		}

		// prin($linea);
		// $pblocks[]=render_caracteristicas_inmueble($pdepartamentos['0']);

		if($_GET['imprimir']=='1'){

			$pblocks[]=render_caracteristicas_proyecto_imprimir($linea);

		} else {

			$pblocks[]=render_caracteristicas_proyecto($linea);

		}

		$pblocks[]=render_firma($linea);


		// prin($pblocks);
		$html.='<tr><td colspan=4 class="sections">';

		$html.=implode("",$pblocks);

		$html.='</td></tr>';




		$Producto=str_replace("\\\"","\"",$html);

			echo '<div class="div_fila">';

			echo $html;

			echo '</div>';	

            $firma=dato("firma","usuarios","where id='".$_GET['id_usuario']."'"); 



            if($firma!=''){ ?>            



            <div class="div_fila" style='font-weight:bold;'>

                <?php echo $firma;?>	

            </div>

            <?php } else { ?>                


            <?php } ?>

            <div class="clean"></div>

        </div>

    </div>

</div>
<?php 
// prin($SERVER);
// prin($_SERVER);
if($SERVER['LOCAL']=='0' 
	// and $_SERVER['HTTP_X_REAL_IP']=='190.43.239.11' 
){ //190.43.239.11 ?>
<script>
window.print();
</script>
<?php } ?>
