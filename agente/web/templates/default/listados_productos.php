<?php //á
?>
<div class="div_listado" id="listado_productos">
<div id="listado_titulo">
<h1><?php echo $LISTADO['titulo']; ?></h1>
</div>

<div class="listado_paginacion">
<span class="total"><?php echo $LISTADO['total'];?> resultados</span>
<?php echo $LISTADO['anterior']." ".$LISTADO['tren']." ".$LISTADO['siguiente']; ?>
</div>

<ul class="listado_items">
<?php  

if(sizeof($LISTADO['filas'])>0){

foreach($LISTADO['filas'] as $item){ 

?>

<li class="listado_item">
    <!--estado-->
    <?php /*if($item['estado']){ ?><span class="estado">Vendido</span><?php } */?>
    <!--foto-->
    <a href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>" 
    class="foto" href="<?php echo $item['nombre'];?>" title="<?php echo $item['nombre'];?>"><img title="<?php echo $item['nombre'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['nombre'];?>" /></a>
    <!--nombre-->
    <h2 class="nombre"><a href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>" ><?php echo $item['nombre'];?></a></h2>
    <!--codigo-->
    <span class="codigo"><!-- Venta --> (<?php echo $item['codigo'];?>)</span>
    <!--direccion-->
    <h3 class="direccion"><a href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>"><?php echo $item['direccion'];?></a>
    Dpto. <a class="geo" href="index.php?modulo=items&tab=productos&departamento=<?php echo $item['id_departamento'];?>"><?php echo $item['departamento'];?></a>,
    Prov. <a class="geo" href="index.php?modulo=items&tab=productos&departamento=<?php echo $item['id_departamento'];?>&provincia=<?php echo $item['id_provincia'];?>"><?php echo $item['provincia'];?></a>
    Dist. <a class="geo" href="index.php?modulo=items&tab=productos&departamento=<?php echo $item['id_departamento'];?>&provincia=<?php echo $item['id_provincia'];?>&distrito=<?php echo $item['id_distrito'];?>"><?php echo $item['distrito'];?></a>
    </h3>
    <!--descripcion-->
    <a class="descripcion" href="<?php echo procesar_url("index.php?modulo=item&id=".$item['id']);?>"><?php echo $item['descripcion'];?></a>
    <!--area-->
    <span class="area"><?php echo $item['area'];?></span>
    <!--contacto-->
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