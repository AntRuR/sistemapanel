<?php //á

$THIS=$PARAMS['this'];
$ITEM=$OBJECT[$THIS];
?>
<footer>
	<p>
		Oficina Principal<br>
		Jr. Ica 158-35 Lima 1, Perú<br>
		Centrar (+511) 000-0000 | Celular 000000000 / RPM #000000000<br>
		Email: info@nering.net<br>
	</p>
    <?php web_render_footer($ITEM); ?>
	<div class='visitas'><?php echo $ITEM['visitas']; ?> visitas</div>
</footer>