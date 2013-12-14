<?php //á
?>
<?php if($MASTERBLOCK['bar']){ ?>
        <div id="div_bar" class="div_fila">
            <div class="div_absoluto div-buscador" >
			<?php web_render_buscador($_GET['buscar']); ?>
			</div>
        </div>
<?php } ?>