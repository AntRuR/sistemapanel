<?php //á

$THIS=$PARAMS['this'];

$ITEM=$DETAIL[$PARAMS['this']];

//$SLIDE=$ITEM['SLIDESHOW'];

//prin($item);

?>
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

						if($FFILA['id_cuenta_email']){
						switch($FFILA['id_cuenta_email']){
						case "2": echo "<img src='web/templates/default/img/particular/header/logo_imprimir_daihatsu.jpg' />"; break;
						default: echo "<img src='web/templates/default/img/particular/header/logo_imprimir.jpg' />"; break;							
						}							
						} else {
						switch($mensaje['id_speech']){
						case "11": echo "<img src='web/templates/default/img/particular/header/logo_imprimir_daihatsu_2.jpg' />"; break;
						default: echo "<img src='web/templates/default/img/particular/header/logo_imprimir.jpg' />"; break;							
						}
						}
                    ?>
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
                        <tr><td style="background:#CCC;border:1px solid #DDD;" align="center"><strong>CLIENTE</strong></td></tr>
                        <tr><td style="border:1px solid #ddd;" align="center"><?php 
                        echo strtoupper(dato("nombre","clientes","where id='".$_GET['id_cliente']."'")." ".dato("apellidos","clientes","where id='".$_GET['id_cliente']."'"));
                        ?></td></tr>
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
                <?php echo $ITEM['ficha'];?>
            </div>
            <div class="div_fila" style='font-weight:bold;margin-bottom:10px;'>
                <table width="98%" border="0"><tbody>
                <tr><td style="border:1px solid #ddd;" align="center">
                Precio válido por 10 días
                </td></tr>
                </tbody></table>              
            </div>          
            <div class="div_fila" style='font-weight:bold;'>
				<?php 
				if($FFILA['id_cuenta_email']){
				switch($FFILA['id_cuenta_email']){
				case "2":?>Nacin Chaluja<br>		
                Jefe de Ventas<br>		
                <br>    
                DIAMANTE DEL PACIFICO S.A.<br>		
                TELEF. 224-2352<br>		
                CEL. : 990356914<br>		
                RPM  #  373811<br>		
                ventasdirectas@daihatsu.com.pe<br>		
                NEXTEL 835*816<br>	<?php break;
				case "1": ?>Nacin Chaluja<br>		
                Jefe de Ventas<br>		
                <br>    
                DIAMANTE DEL PACIFICO S.A.<br>		
                TELEF. 224-2352<br>		
                CEL. : 990356914<br>		
                RPM  #  373811<br>		
                ventasdirectas@incapower.com.pe<br>		
                NEXTEL 835*816<br>	<?php break;
				default: ?>Nacin Chaluja<br>		
                Jefe de Ventas<br>		
                <br>    
                DIAMANTE DEL PACIFICO S.A.<br>		
                TELEF. 224-2352<br>		
                CEL. : 990356914<br>		
                RPM  #  373811<br>		
                ventasdirectas@incapower.com.pe<br>		
                NEXTEL 835*816<br>	<?php break;							
				}
				} else {
				echo $SPEECH;
            	switch($SPEECH){
				case "respuesta_web_incapower_v":
				echo dato("texto","speeches","where id='13'");
				break;
				case "respuesta_web_terios_v":
				echo dato("texto","speeches","where id='14'");				
				break;
				default: 
				echo dato("texto","speeches","where id='13'");				
				break;
				} 
				} 
				?>
            </div>
                            
            <div class="clean"></div>
                        
            <?php /////////////////////////////////////////////////////////////////////////////////////////////////////?>   
                 
        </div> 

        <!--<div class="barra_abajo"></div>-->
    
    </div>
</div>
