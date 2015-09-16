<?php //á
?>
<div class="div_listado" id="listado_clientes">
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

    <!--foto-->
    <span class="foto"><img title="<?php echo $item['nombre'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['nombre'];?>" /></span>
    <!--nombre-->
    <h2 class="nombre"><?php echo $item['nombre'];?></h2>
    <!--registro-->
    <?php if($item['registro']){ ?><span class="registro"><b>Registro de agente inmobiliario :</b> <?php echo $item['registro'];?></span><?php } ?>    
    <!--empresa-->
     <?php if($item['empresa']){ ?><span class="empresa"><b>Empresa :</b> <?php echo $item['empresa'];?></span><?php } ?> 
    <!--telefono-->
     <?php if($item['telefono']){ ?><span class="telefono"><b>Teléfono :</b> <?php echo $item['telefono'];?></span><?php } ?> 
    <!--email-->
     <?php if($item['email']){ ?><a class="email"><?php echo $item['email'];?></a><?php } ?> 
    <!--direccion-->
    <?php if($item['direccion']){ ?><span class="direccion"><b> Dirección :</b><?php echo $item['direccion'];?></span><?php } ?>
    <!--descripcion-->
    <?php if($item['descripcion']){ ?><span class="descripcion"><?php echo $item['descripcion'];?></span><?php } ?>

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