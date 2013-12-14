<?php //á
//unset($_SESSION['carrito']);
//prin(json_encode($_SESSION['carrito']));
//prin($_SESSION['carrito']); 
if($_GET['tab']!='carrito'){
?>
<div id="div_carrito" class="carrito <?php
/*Style de carrito */ echo "carrito_1"; ?>">
<div id="actualizar_carrito" style="display:none;">actualizando carrito</div>
</div>
<script type="text/javascript">
window.addEvent('domready', function() {
render_carrito(<?php echo json_encode($_SESSION['carrito']);?>,{main:'0',precio:'0'});
});
</script>
<?php 
} 
?>