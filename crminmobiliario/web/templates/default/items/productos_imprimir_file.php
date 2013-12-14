<?php //á

$THIS=$PARAMS['this'];

$ITEM=$DETAIL[$PARAMS['this']];

//prin($ITEM);

?>
<style>
table { font-size: 15px; border: 1px solid $ccc; border-radius: 5px; }
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

                        <table width="260" border="0"><tbody>

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

                        </tbody></table>

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

	$linea=select_fila(

						array('id_cliente','id_item','id_items_item','id_usuario','id_status',
							//'id_cuenta_email',
							'pvpromocion','cuota_inicial','saldo_financiar','separacion',
							'id_banco','id_cliente'
							),

						'ventas_items',

						'where id='.$_GET['id_venta'],

						0,

						array(

							'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email,dni,telefono,telefono_oficina,celular_claro,celular_movistar,nextel','clientes','where id="{id_cliente}"')), //cliente

							'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email,firma','usuarios','where id="{id_usuario}"')), // asesor

							//'grupo'		=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),

							//'tipo'		=>array('fila'=>array('nombre','productos_tipo','where id="{id_tipo}"')),

							'item'		=>array('fila'=>array('fecha_creacion,file,nombre','productos_items','where id="{id_item}"',0,					
								array(
									'foto'=>array('atributo'=>array(
																	'carpeta'=>'proitefot_imas',
																	'fecha'=>'{fecha_creacion}',
																	'file'=>'{file}',
																	'tamano'=>'2',
																	'dimensionado'=>'260x200',
																	'centrado'=>0,
															)
												),
									))),		// proyecto					

							'banco'		=>array('fila'=>array('nombre','bancos','where id="{id_banco}"')),		// banco					

							'item_item'	=>array('fila'=>array('nombre,numero,id_items_tipo','productos_items_items','where id="{id_items_item}"')),	//modelo

							'cuenta'	=>array('fila'=>array('nombre,logo,fecha_creacion,dominio','envios_cuentas','where id="{id_cuenta_email}"',0,

									array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))	

								)

							),							

						)							

						);	

	// var_dump($linea);

	$producto=fila(
					array('id','id_items_tipo','id_item','nombre','numero','num_garages','has_deposito','has_balcon','num_rooms',"num_bathrooms",'area_total','area_construida'),

					"productos_items_items",

					"where visibilidad=1 and id_item in (select id from productos_items where visibilidad=1) and id='".$linea['id_items_item']."' ",

					0

				);	

	// var_dump($producto);

	$galerias=select("nombre,id","productos_fotos","where id_tipo=".$linea['item_item']['id_items_tipo'],0,

					array(

						'fotos'=>array('fotos'=>array(

													"id,file,fecha_creacion|productos_fotos_fotos|where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,100"

													,'profot_imas'

													,array(												 
														   'archivo'=>'1',

														   'thumb'=>'2,460x400,0',

														   'box'=>'4'
														   //'atributos'=>'3,624x600,0'												   
														  )
													
													 )

									 )

						)



					);		

// prin($galerias['0']['fotos']['0']['thumb']);


$telefonos=array();

if($linea['cliente']['telefono']!='')$telefonos_fijos[]=$linea['cliente']['telefono'];
if($linea['cliente']['telefono_oficina']!='')$telefonos_fijos[]=$linea['cliente']['telefono_oficina'];
if($linea['cliente']['celular_claro']!='')$telefonos_moviles[]=$linea['cliente']['celular_claro'];
if($linea['cliente']['celular_movistar']!='')$telefonos_moviles[]=$linea['cliente']['celular_movistar'];
if($linea['cliente']['nextel']!='')$telefonos_moviles[]=$linea['cliente']['nextel'];

$telefonos_fijos_string = implode("/ ",$telefonos_fijos);
$telefonos_moviles_string = implode("/ ",$telefonos_moviles);

	//prin($galerias['0']['fotos']['0']['thumb']);





	$tableProps='width="100%" cellpadding="0" cellspacing="0" border="0" ';						


		// $producto['ficha']=fix_ficha($producto['ficha']);

		//var_dump($producto);

		$html='';

		$html.="<table width='650px' cellpadding=0 cellspacing=0 border=0  >";

		/**
		 * CLIENTE
		 */

		$html.='<tr><td colspan=4 class="section">Cliente</td></tr>';

		$html.='<tr><td class="variable">Nombre</td><td class="valor" colspan=3>'.strtoupper(dato("nombre","clientes","where id='".$_GET['id_cliente']."'")." ".dato("apellidos","clientes","where id='".$_GET['id_cliente']."'")).'</td></tr>';
		
		$html.='<tr><td class="variable">Email</td><td class="valor">'.$linea['cliente']['email'].'</td>';

		$html.='<td class="variable">DNI</td><td class="valor">'.$linea['cliente']['dni'].'</td></tr>';

		$html.='<tr><td class="variable">Teléfono Fijo</td><td class="valor">'.$telefonos_fijos_string.'</td>';

		$html.='<td class="variable">Teléfono Móvil</td><td class="valor">'.$telefonos_moviles_string.'</td></tr>';

		/**
		 * INMUEBLE
		 */

		$html.='<tr><td colspan=4 class="section">'.$linea['item']['nombre'].' - '.$producto['nombre'].' '.$producto['numero'].'</td></tr>';//

		$html.='<tr><td class="variable">Área Total</td><td class="valor">'.$producto['area_total'].'</td>';
		
			/**
			 * FOTO PROYECTO
			 */
			$html.='<td rowspan=7 colspan=2 valign=middle align=center><img '.$linea['item']['foto'].' ></td></tr>';//

		$html.='<tr><td class="variable">Área Construída</td><td class="valor">'.$producto['area_construida'].'</td></tr>';//

		$html.='<tr><td class="variable"># Garages</td><td class="valor">'.$producto['num_garages'].'</td></tr>';//

		$html.='<tr><td class="variable"># Dormitorios</td><td class="valor">'.$producto['num_rooms'].'</td></tr>';//

		$html.='<tr><td class="variable"># Baños</td><td class="valor">'.$producto['num_bathrooms'].'</td></tr>';//

		$html.='<tr><td class="variable">Tiene Balcón</td><td class="valor">'. (($producto['has_balcon'])?'Si':'No') .'</td></tr>';//

		$html.='<tr><td class="variable">Tiene Depósito</td><td class="valor">'. (($producto['has_deposito'])?'Si':'No') .'</td></tr>';//

		/**
		 * FORMA DE PAGO
		 */
		$html.='<tr><td colspan=4 class="section">Forma de Pago</td></tr>';

		$html.='<tr><td class="variable">Precio</td><td class="valor" colspan=3>'.$linea['pvpromocion'].'</td>';//

		$html.='<tr><td class="variable">Cuota Inicial</td><td class="valor">'.$linea['cuota_inicial'].'</td>';//

		$html.='<td class="variable">Saldo a Financiar</td><td class="valor">'.$linea['saldo_financiar'].'</td></tr>';//

		$html.='<tr><td class="variable">Separación</td><td class="valor">'.$linea['separacion'].'</td>';//

		$html.='<td class="variable">Banco a Financiar</td><td class="valor">'.$linea['banco']['nombre'].'</td></tr>';

		/**
		 * FOTO INMUEBLE
		 */
		$html.='<tr><td colspan=4 class="section"></td></tr>';

		$html.='<tr><td colspan=4 align=center><img '.$galerias['0']['fotos']['0']['thumb'].' ></td></tr>';

		// $html.='<tr><td colspan=2>';

		// if(sizeof($galerias)>0){

		// 	foreach($galerias as $t=>$galeria){

		// 	$html.="<table $tableProps >";

		// 	$html.="<td align=center valign=middle style=\"border:1px solid #999 !important;\" colspan=2>".$galeria['nombre']."</td>";

		// 	$ttt=0;

		// 	foreach($galeria['fotos'] as $t=>$foto){

		// 		if($ttt==0){ $html.='<tr>'; }

		// 		$html.="<td align=center valign=middle style=\"border:1px solid #999 !important;\"><a href='".$foto['box']."'><img ".$foto['thumb']." /></a></td>";

		// 		if($ttt==1){ $html.='</tr>'; }												

		// 		if($ttt==1){ $ttt=0; } else { $ttt=1; }				

		// 	}

		// 	$html.="</table><br>";

		// 	}

		// }

		// $html.='</td></tr>';				

		//$html.='<tr><td height="5" colspan=2></td></tr>';				

		$html.='</table>';

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