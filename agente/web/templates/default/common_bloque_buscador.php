<?php //á
?>
<div id="div_bloque_buscador">

<form id="buscador_form" method="get" action="index.php">
	
    <input type="hidden" name="modulo" value="items"  />
    
    <input type="hidden" name="tab" value="productos"  />

    <select id="buscador_aviso" name="aviso">
    <option value="">Alquiler/Venta</option>
    <option value="alquiler">Alquiler</option>
    <option value="venta">Venta</option>
    </select>
	<script type="text/javascript">
	$('buscador_aviso').value='<?php echo $_GET['aviso']; ?>';	
	</script>    
    
    <select id="buscador_tipo" name="tipo">
    <option value="">Tipo de inmueble</option>
    <?php foreach($BUSCADOR['tipos'] as $tipo){ ?>
    <option <?php echo $tipo['selected'];?> value="<?php echo $tipo['id'];?>"><?php echo $tipo['nombre'];?></option>
	<?php } ?>
    </select>    
    
    <label id="label_buscador_departamento" for="buscador_departamento">Ubicación del inmueble:</label>
    
    <div id="div_buscador_departamento">
    <select  id="buscador_departamento" name="departamento" onchange="get_provincias(this.value);" >
    <option value="">Departamento</option>
    <?php foreach($BUSCADOR['departamentos'] as $departamento){ ?>
    <option <?php echo $departamento['selected'];?> value="<?php echo $departamento['id'];?>"><?php echo ucfirst($departamento['nombre']);?></option>
	<?php } ?>	
    </select>
    </div>
        
    <div id="div_buscador_provincia">
    <select <?php echo (sizeof($BUSCADOR['provincias'])==0)?"disabled='disabled'":"";?> id="buscador_provincia" name="provincia" onchange="get_distritos(this.value);" >
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
    
    <a id="buscador_submit" rel="nofollow" onclick="enviar_buscar();return false;" href="#">Buscar</a>

</form>

</div>