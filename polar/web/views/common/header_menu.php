<?php //á 
$THIS=$PARAMS['this'];
$object=$OBJECT[$THIS];
?>
<nav>
<?php
	web_render_menu(
		$object['menu'],
		[
			'id'=>'menu_main',
			'rel'=>'son_menu_main'
		],
		'h2'
	);
?>
</nav>