<?php //á

$THIS=$PARAMS['this'];

$object=$OBJECT[$THIS];

?>
<header>
	<?php 
	echo ($COMMON['url_home']==$SERVER['URL'])?'<h1>':'<h2>'; 
	echo $COMMON['datos_root']['titulo_home'];
	echo ($COMMON['url_home']==$SERVER['URL'])?'</h1>':'</h2>'; 
	?>
	<figure>
		<a href="<?=$COMMON['url_home'] ?>" title="<?=$COMMON['datos_root']['titulo_home'] ?>">
			<img src="img/logo.png" title="<?=$COMMON['datos_root']['titulo_home'] ?>" alt="<?=$COMMON['datos_root']['titulo_home'] ?>" >
		</a>
		<h3>Envíos de Paquetes, Courier, Logística y Transporte</h3>
	</figure>
	<a class="trazabilidad btn btn-primary" href="http://143.208.132.26:8080/intranet/index.php">TRAZABILIDAD DE PEDIDO</a>
</header>