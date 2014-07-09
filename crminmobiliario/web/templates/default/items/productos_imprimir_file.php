<?php //á

$THIS=$PARAMS['this'];

$linea=$DETAIL[$PARAMS['this']];

// prin($linea);

?>
<style>
table { font-size: 15px; border: 1px solid #ccc; border-radius: 5px; }
.section { 
    background-color: #A1BD5B;
    color: #FFFFFF;
    font-size: 18px;
    font-weight: bold;
    padding: 5px 0;
    text-align: center;
}
.variable, .valor { 
    border: 1px solid #CCCCCC;
    color: #000000;
    padding: 3px 0 3px 5px;
}
.variable {  width: 90px; }
.valor { width: 170px; }
.foto { 
    background-color: #CCCCCC;
    display: inline-block;
    height: 162px;
    width: 310px;
}
.ficha {
    top: 0;
}
</style>

<div class="div_fila">

    <div class="cuadro ficha_producto <?php 
        web_selector_control($SELECTED,$THIS,"bloques,fichas");
        ?>" >

        <div class="div_borde div_inner">

            <div class="div_fila" style="height:75px;">

                    <div class="div_absoluto header-imprimir">
					<?php 

						echo "<img src='panel/config/logo.jpg' style='height:60px;'/>";

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
					"id_jefe",
					"id_status",
					"id_nivel",
					"id_canal",
					"forma_pago",
					"pvlista",
					"pvpromocion",
					"porcentaje_cuota_inicial",
					"cuota_inicial",
					"separacion",
					"id_banco",
					"id_sectorista",
					"pedido"
					),
					'ventas_items',
					'where id='.$_GET['id_venta'],
					0,
					array(
						'cliente'	=>array('fila'=>array('empresa,nombre,apellidos,genero,email,dni','clientes','where id="{id_cliente}"')),
						'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma','usuarios','where id="{id_usuario}"')),
						//'grupo'		=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),
						//'tipo'		=>array('fila'=>array('nombre','productos_tipo','where id="{id_tipo}"')),
						'item'		=>array('fila'=>array('nombre','productos_items','where id="{id_item}"')),							
						// 'item_item'	=>array('fila'=>array('nombre,numero,id_items_tipo','productos_items_items','where id="{id_items_item}"')),							
						'cuenta'	=>array('fila'=>array('nombre,logo,fecha_creacion,dominio','envios_cuentas','where id="{id_cuenta_email}"',0,
								array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))	
							)
						),							
					)							
				);
// prin($linea);

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




		$pblocks=array();

		/**
		 * INMUEBLE
		 */
		// $html.='<tr><td colspan=4 class="section">'.$linea['item']['nombre'].' - '.$producto['nombre'].' '.$producto['numero'].'</td></tr>';//
		

		/**
		 * FOTO PROYECTO
		 */
		
		$pblocks[]=render_cliente($linea);

		$pedido=json_decode($linea['pedido']);
		// prin($linea['pedido']);
		// exit();

		$pdepartamentos=array();
		$pdepositos=array();
		$pestacionamientos=array();

		foreach($pedido as $pedi){
			switch($pedi->type){
				case "departamento":
					$pdepartamentos[]=array('id'=>$pedi->id,'price'=>$pedi->price);
				break;
				case "estacionamiento":
					$pestacionamientos[]=array('id'=>$pedi->id,'price'=>$pedi->price);
				break;
				case "deposito":
					$pdepositos[]=array('id'=>$pedi->id,'price'=>$pedi->price);
				break;						
			}

		}

		foreach($pdepartamentos as $pdep)
			$pblocks[]=render_departamentos(extract_departamentos($pdep['id']));

		foreach($pdepositos as $pdep)
			$pblocks[]=render_depositos(extract_depositos($pdep['id']));

		foreach($pestacionamientos as $pdep)
			$pblocks[]=render_estacionamiento(extract_estacionamiento($pdep['id']));	
		
		$pblocks[]=render_total($linea,$suma);

		$pblocks[]=render_vendedor($linea);

		$pblocks[]=render_plano(extract_departamentos($pdepartamentos['0']['id']),$pdepartamentos['0']['price']);

		// $pblocks[]=render_caracteristicas_inmueble($pdepartamentos['0']);

		$pblocks[]=render_caracteristicas_proyecto($linea);

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
<style>
table tr td {
padding: 5px 4px;
vertical-align: top;
color: #4F5767;
}
table {
    border: 1px solid #000;
}
</style>
<?php 
prin($SERVER);
prin($_SERVER);
if($SERVER['LOCAL']=='0' 
	// and $_SERVER['HTTP_X_REAL_IP']=='190.43.239.11' 
){ //190.43.239.11 ?>
<script>
window.print();
</script>
<?php } ?>