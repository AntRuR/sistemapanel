<?php //á
?>
<div id="div_app_main"  class="div_main">
            
	<!--BARRA DEL LISTADO-->
		
    <div class="titulo">
        <!--lados-->
        <span class='titulo_izq'></span>
        <span class='titulo_der'></span>
        <h1>Carrito de pedidos</h1>
    </div>
    &nbsp;
   	<div class="div_barra">&nbsp;</div>
    
    <div id="div_carrito"></div>    
	<script type="text/javascript">
    //window.addEvent('domready', function() {
    render_carrito(<?php echo json_encode($_SESSION['carrito']);?>,{main:'1'});
    //});
    </script>    
</div>        