<?php //á
//unset($_SESSION['carrito']);
//prin(json_encode($_SESSION['carrito']));
//prin($_SESSION['carrito']); 
?>
<div id="div_carrito" class="div_bloque">
<div id="actualizar_carrito" style="display:none;">actualizando carrito</div>
</div>
<script type="text/javascript">
//window.addEvent('domready', function() {
render_carrito(<?php echo json_encode($_SESSION['carrito']);?>,{main:'0'});
//});
</script>