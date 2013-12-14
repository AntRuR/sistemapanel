<?php //á
$THIS=$PARAMS['this'];

$ITEM=$DETAIL[$PARAMS['this']];

//$SLIDE=$ITEM['SLIDESHOW'];

//prin($item);

?>
<style>.album { padding: 0 0 0 88px; }</style>
<div class="div_fila">

    <div class="cuadro ficha_producto <?php
        web_selector_control($SELECTED,$THIS,"bloques,fichas");
        ?>" >
        <?php web_render_esquinas(1,4);
		//prin($FBL);?>


	   <?php /*
       <div class="barra_arriba">
       <?php web_render_item_borde('bors-b',1,2);?>
       <a href="<?php echo $ITEM['link'];?>" title="<?php echo $ITEM['grupo'];?>"><?php echo $ITEM['titulo'];?></a>
       </div>
       */ ?>

        <div class="div_borde div_inner">

            <div class="div_fila" style="height:100px;">
                    <div class="div_absoluto header-imprimir">
					<?php
						/*
						if($FFILA['id_cuenta_email']){
						switch($FFILA['id_cuenta_email']){
						case "2": echo "<img src='web/templates/default/img/particular/header/logo_imprimir_daihatsu.jpg'  />"; break;
						default: echo "<img src='web/templates/default/img/particular/header/logo_imprimir.jpg' style='height:80px;'/>"; break;
						}
						} else {
						switch($mensaje['id_speech']){
						case "11": echo "<img src='web/templates/default/img/particular/header/logo_imprimir_daihatsu_2.jpg' style='height:80px;'/>"; break;
						default: echo "<img src='web/templates/default/img/particular/header/logo_imprimir.jpg' style='height:80px;'/>"; break;
						}
						}
						*/
						//prin($ITEM ['id_grupo']);
						//if($ITEM ['id_grupo']){
						switch($ITEM ['id_grupo']){
						case "4": echo "<img src='web/templates/default/img/particular/header/logo_imprimir_daihatsu.jpg' style='height:60px;' />"; break;
						default: echo "<img src='web/templates/default/img/particular/header/logo_imprimir.jpg' style='height:60px;'/>"; break;
						}
						//}

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

						$empresa=dato("empresa","clientes","where id='".$_GET['id_cliente']."'");
						if($empresa!=''){
						?>
                        <table width="260" border="0"><tbody>
                        <tr><td style="background:#CCC;border:1px solid #DDD;" align="center"><strong>EMPRESA</strong></td></tr>
                        <tr><td style="border:1px solid #ddd;" align="center"><?php
                        echo $empresa;
                        ?></td></tr>
                        </tbody></table>
                        <?php } ?>
                        <table width="260" border="0"><tbody>
                        <tr><td colspan=2 style="background:#CCC;border:1px solid #DDD;" align="center"><strong>CLIENTE</strong></td></tr>
                        <tr><td colspan=2 style="border:1px solid #ddd;" align="center"><?php
                        echo strtoupper(dato("nombre","clientes","where id='".$_GET['id_cliente']."'")." ".dato("apellidos","clientes","where id='".$_GET['id_cliente']."'"));
                        ?></td></tr>
						<?php if($fila['banco']){ ?><tr><td style="font-weight:bold;border:1px solid #DDD;" align="left" >Banco</td><td style="border:1px solid #ddd;"><?php echo $fila['banco'];?></td></tr><?php } ?>
						<?php if($fila['sectorista']){  ?>
						<tr><td colspan=2 style="background:#CCC;border:1px solid #DDD;" align="center"><strong>SECTORISTA</strong></td></tr>
						<tr><td colspan=2 style="border:1px solid #ddd;"  align="center"><?php echo $fila['sectorista'];?></td></tr><?php } ?>
						<?php
							$phones=array();
							if(trim($fila["sectorista_fijo"])) $phones[]=trim($fila["sectorista_fijo"]);
							if(trim($fila["sectorista_movistar"])) $phones[]=trim($fila["sectorista_movistar"]);
							if(trim($fila["sectorista_claro"])) $phones[]=trim($fila["sectorista_claro"]);
							if(trim($fila["sectorista_rpc"])) $phones[]=trim($fila["sectorista_rpc"]);
							if(trim($fila["sectorista_rpm"])) $phones[]=trim($fila["sectorista_rpm"]);
							if(trim($fila["sectorista_nextel"])) $phones[]=trim($fila["sectorista_nextel"]);
							$phoness=implode(" / ",$phones);
						if($phoness!=''){ ?><tr><td style="font-weight:bold;border:1px solid #DDD;" align="left" >Teléfono</td><td style="border:1px solid #ddd;"><?php echo $phoness;?></td></tr><?php } ?>
						<?php if($fila['sectorista_email']){  ?><tr><td style="font-weight:bold;border:1px solid #DDD;" align="left" >Email</td><td style="border:1px solid #ddd;"><?php echo $fila['sectorista_email'];?></td></tr><?php } ?>
                        </tbody></table>

                    </div>
            </div>

            <div class="div_fila" style='color:#000;text-align:center; font-size:15px; font-weight:bold;'>
            ESPECIFICACIONES TÉCNICAS
            </div>

            <div class="div_fila" style='margin-bottom:10px;'>
            <div style="color:#FF0000; text-align:center;padding:1px 0; font-size:15px; background-color:#CCC; font-weight:bold;margin:0 14px 0 3px;">
            <?php echo $ITEM['titulo'];?>
            </div>
            </div>

            <div class="ficha">


                <div class="area_tab <?php echo 'menu_'.$PARAMS['this'];?>_area_tab" style='display:block;' id="<?php echo 'menu_'.$PARAMS['this'];?>_area_tab_1">

				   <?php
				   echo "<ul class='album'>";
				   foreach($ITEM['fotos'] as $foto){
					   echo "<li class='thumb'>";
					   echo "<a rel='imagezoom[album]' ";
					   echo "href='".$foto['href']."' ";
					   //echo "style='background-image:url(".$foto['foto_thumb'].");' title='".$foto['foto_descripcion']."' ";
					   echo ">";
					   echo "<img ";
					   //echo " src='".$foto['foto_thumb']."' ";
					   echo $foto['get_atributos'];
					   echo "alt='".$foto['foto_descripcion']."' >";
					   echo "</a>";
					   echo "</li>";
					}
				   echo "</ul>";
				   ?>
            	   <?php //web_render_slideshow_proceso($SLIDE); ?>

                </div>
                <?php echo $ITEM['ficha'];?>
            </div>
            <div class="div_fila" style='font-weight:bold;margin-bottom:10px;'>
                <table width="98%" border="0"><tbody>
                <tr><td style="border:1px solid #ddd;" align="center">
                Precio válido por 10 días
                </td></tr>
                </tbody></table>
            </div>

			<?php
            $firma=dato("firma","usuarios","where id='".$_GET['id_usuario']."'");
            if($firma!=''){ ?>
            <div class="div_fila" style='font-weight:bold;'>
                <?php echo $firma;?>
            </div>
            <?php } else { ?>
            <div class="div_fila" style='font-weight:bold;'>
                Atentamente Diamante del Pacífico<br />
            </div>
            <?php } ?>

            <div class="clean"></div>
            <?php /////////////////////////////////////////////////////////////////////////////////////////////////////?>
        </div>

        <!--<div class="barra_abajo"></div>-->

    </div>
</div>
