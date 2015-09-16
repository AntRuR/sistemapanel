<?php //á

$THIS=$PARAMS['this'];
$ITEM=$OBJECT[$THIS];
?>
<footer>
	<div class="col-xs-4 links">
		<p>
			<strong>Enlaces</strong><br>	
			<div class="enlaces">
			<?php 
			$links=select("id,name,url","links","where visibilidad=1 order by weight desc limit 0,4");
			foreach($links as $link){
				echo "<li><a targe='_blanck' href='".$link['url']."'>".$link['name']."</a></li>";
			}
			?>
			</div>
		</p>
	</div>
	<div class="col-xs-4">

		<p>
			<strong>Dirección</strong><br>
			Oficina Principal<br>
			Jr. Ica 158-35 Lima 1, Perú<br>
			nering@nering.net
		</p>

	</div>
	<div class="col-xs-4">

		<p>
			<strong>Teléfonos</strong><br>
			Central (+511) 460-0203 | 996495192<br>
			RPM #996162<br>
		</p>

	</div>

<!-- 	<p>
		Oficina Principal<br>
		Jr. Ica 158-35 Lima 1, Perú<br>
		Centrar (+511) 000-0000 | Celular 000000000 / RPM #000000000<br>
		Email: info@nering.net<br>
	</p> -->
    <?php //web_render_footer($ITEM); ?>
	<div class='visitas'><?php echo $ITEM['visitas']; ?> visitas</div>
	<div class="nering">NERING ® 2015 Copyright Todos los Derechos Reservados</div>
	<strong class="div_absoluto footer_by" title="Diseño y Desarrollo">by <a href="http://prodiserv.com" title="Diseño y Desarrollo">Prodiserv</a></strong>
</footer>