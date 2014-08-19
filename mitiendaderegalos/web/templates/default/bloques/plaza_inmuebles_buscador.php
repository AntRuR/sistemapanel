<?php //á

$THIS=$PARAMS['this'];
//prin($THIS);
$FORM=$FORMULARIO[$PARAMS['this']];

?>
<div id="formulario_<?php echo $THIS;?>" class="cuadro <?php 
	web_selector_control($SELECTED,$THIS,"bloques,listados");
	?>" >
    <?php //web_render_esquinas(1,2);?>		        
    <div class="barra_arriba">
    <?php web_render_item_borde('bors-b',1,2);?>    
    <?php echo $FORM['titulo'];?>
    </div>         
    
     <div class="div_borde div_inner">   
     
     <div class="banner"></div>

<form id="buscador_form" method="get" action="index.php">
	
    <input type="hidden" name="modulo" value="items"  />    
    <input type="hidden" name="tab" value="productos"  />
    <input type="hidden" name="acc" value="list"  />


	<label>Operación:</label>	

	    <input type="hidden" name="aviso" value="items" id="buscador_aviso" />       
        
        <div class="linea"><input type="checkbox" id="aviso_alquiler" value="alquiler" /><label for="aviso_alquiler">Alquiler</label></div>
        
        <div class="linea"><input type="checkbox" id="aviso_venta" value="venta" /><label for="aviso_venta">Venta</label></div>
        
        <script type="text/javascript">
        //$('buscador_aviso').value='<?php echo $_GET['aviso']; ?>';	
        </script>    
    
    
    
	<label>Tipo de inmueble:</label>	
        
        <select id="buscador_tipo" name="tipo">
        <option value="">Tipo de inmueble</option>
        <?php foreach($BUSCADOR['tipos'] as $tipo){ ?>
        <option <?php echo $tipo['selected'];?> value="<?php echo $tipo['id'];?>"><?php echo $tipo['nombre'];?></option>
        <?php } ?>
        </select>    
        
    
    
    <label id="label_buscador_departamento" for="buscador_departamento">Ubicación del inmueble:</label>    
        
        <div id="div_buscador_departamento">
        <select  id="buscador_departamento" name="departamento" onchange="get_provincias(this.id,this.value);" rel="buscador_provincia" >
        <option value="">Departamento</option>
        <?php foreach($BUSCADOR['departamentos'] as $departamento){ ?>
        <option <?php echo $departamento['selected'];?> value="<?php echo $departamento['id'];?>"><?php echo ucfirst($departamento['nombre']);?></option>
        <?php } ?>
        </select>
        </div>
            
        <div id="div_buscador_provincia">
        <select <?php echo (sizeof($BUSCADOR['provincias'])==0)?"disabled='disabled'":"";?> id="buscador_provincia" name="provincia" onchange="get_distritos(this.id,this.value);" rel="buscador_distrito" >
        <option value="">Provincia</option>
        <?php foreach($BUSCADOR['provincias'] as $provincia){ ?>
        <option <?php echo $provincia['selected'];?> value="<?php echo $provincia['id'];?>"><?php echo ucfirst($provincia['nombre']);?></option>
        <?php } ?>
        </select>
        </div>
        
        <div id="div_buscador_distrito">
        <select <?php echo (sizeof($BUSCADOR['distritos'])==0)?"disabled='disabled'":"";?> id="buscador_distrito" name="distrito"  >
        <option value="">Distrito</option>
        <?php foreach($BUSCADOR['distritos'] as $distrito){ ?>
        <option <?php echo $distrito['selected'];?> value="<?php echo $distrito['id'];?>"><?php echo ucfirst($distrito['nombre']);?></option>
        <?php } ?>
        </select>
        </div>
        
        <div class="linea">
        <input type="submit" class="boton_buscar" value="" />
        </div>

</form>

	<div class="clean"></div>    
        
	</div>        

</div>
