<?php //á
?>
<div id="div_listado">
<div id="listado_titulo">
<h1><?php echo $LISTADO['titulo']; ?></h1>
</div>

<div class="listado_paginacion">
<span class="total"><?php echo $LISTADO['total'];?> resultados</span>
<?php echo $LISTADO['anterior']." ".$LISTADO['tren']." ".$LISTADO['siguiente']; ?>
</div>

<ul id="listado_items">
<?php  

if(sizeof($LISTADO['filas'])>0){

foreach($LISTADO['filas'] as $item){ 

?>

<li class="listado_item">
<a href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>" class="foto" href="<?php echo $item['nombre'];?>" title="<?php echo $item['nombre'];?>">
<img title="<?php echo $item['nombre'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['nombre'];?>" />
</a>
<h2 class="nombre">
<a href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>" >
<?php echo $item['nombre'];?>
</a>
</h2>
<span class="codigo"><!-- Venta --> (<?php echo $item['codigo'];?>)</span>
<h3 class="direccion"><a href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>"><?php echo $item['direccion'];?></a></h3>
<a class="descripcion" href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>"><?php echo $item['descripcion'];?></a>
<span class="area"><?php echo $item['area'];?></span>
<a class="contacto" href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>#contactenos" >CONTÁCTENOS</a>
</li>

<?php 

}

} else {
?>
<p class="vacio"><?php echo $LISTADO['vacio']; ?></p>
<?php
}
?>
</ul>
<div class="listado_paginacion">
<?php echo $LISTADO['anterior']." ".$LISTADO['tren']." ".$LISTADO['siguiente']; ?>
</div>
</div>