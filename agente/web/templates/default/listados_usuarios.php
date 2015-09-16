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

<ul class="listado_items" id="listado_usuarios">
<?php  

if(sizeof($LISTADO['filas'])>0){

foreach($LISTADO['filas'] as $item){ 

?>

<li class="listado_item">

    <!--foto-->
    <span class="foto"><img title="<?php echo $item['nombre'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['nombre'];?>" /></span>
    <!--nombre-->
    <h2 class="nombre"><?php echo $item['nombre'];?></h2>
    <!--empresa-->
    <span class="empresa"><?php echo $item['empresa'];?></span>
    <!--telefono-->
    <span class="telefono"><?php echo $item['telefono'];?></span>
    <!--email-->
    <a class="email"><?php echo $item['email'];?></a>
    <!--direccion-->
    <span class="direccion"><?php echo $item['direccion'];?></span>

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