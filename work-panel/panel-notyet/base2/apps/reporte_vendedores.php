<?php //á

	foreach($meses as $m=>$mes){
		if($m>=date("n")){ $meses1[$m]=$mes; }
	}
	$meses=$meses1;

	$tbcampos=array(
		'from'=>		array(
			//'legend'=>'Fecha', //LEGEND
			'campo'		=>'from',
			'label'		=>'De',
			'tipo'		=> 'com',
			'derecha'	=> '2',
			'style'		=> 'text-transform:capitalize;',
			'default'	=> date("n"),
			'opciones'  => $meses
		),
		'to'=>			array(
			'campo'		=>'to',
			'label'		=>'A',
			'tipo'		=> 'com',
			'derecha'	=> '2',
			'style'		=> 'text-transform:capitalize;',
			'default'	=> date("n")+1,
			'opciones'  => $meses
		),
		'year'=>		array(
			'campo'		=>'year',
			'label'		=>'Año',
			'tipo'		=> 'inp',
			'derecha'	=> '2',
			'style'		=> 'width:60px;',
			'default'	=> date("Y")
		)
	);


	?>
	<div class="bloque_content_crear" ><ul class="formulario">
	<?php include('formulario_campos.php'); ?>
	<li id="linea_crear" class="linea_form linea_derecha" style="margin-top:-15px;">
	<label>&nbsp;</label>
	<input type="button" onclick="cotizar();" style="float:left;" value="Reporte" class="form_boton_1" id="in_submit">
	</li>
	</ul></div>
    <div style="float:left;width:400px;" id="listado_paquetes"></div>


	<style>
	.formulario label { width:40px; }
	.table_paquetes { float:left; width:100%; background:#EEE; }
	.table_paquetes thead th { color:#999; text-transform:uppercase; font-weight:bold; }
	.table_paquetes thead th,
	.table_paquetes tbody td { padding:0 0px 6px 4px; }
	#iframe_paquete {
		 border:1px solid #888;
		 width:100%;
		 height:600px;
		 background-color:#FFF;
	}
	#listado_paquetes div { font-weight:bold; text-align:center; margin-bottom:5px; }
	.select { background-color:#FFC; }
	</style>
	<script>

	function cotizar(){
		var url_inicio='<?php echo $URL_INICIO;?>';
		var url_fin='<?php echo $URL_FIN;?>';
		var json;
		var ae;
		var html='';
		var r=[];
		data={};
		data.paso='cotizar';
		$('in_submit').value='Cotizando....';
		$('in_submit').setStyle('opacity','0.5');
		$('in_submit').disabled=true;
		$$('.form_input').each(function(el) {
			eval("data."+el.name+"='"+el.value+"';");
		});
		new Request({
			url: "base2/cotizador_destinos.php",
			method: 'get',
			data : data,
			onSuccess: function(result){
				json=JSON.decode(result,true);
				r=json.data;
				if(json.total==0){
					html+='<div style="color:red;">No se encontraron paquetes, por favor elija otros parametros de busqueda</div>';
				} else {
					html+='<div>Se encontraron '+json.total+' paquetes</div>'
					html+="<table class='table_paquetes'><thead><tr><th>Paquete</th><th>Nchs</th><th>Desde</th>";
					if(json.aereo!='99') html+="<th>Aéreo</th></tr>";
					html+="<tbody>";
					for(var i=0;i<r.length;i++){
						html+="<tr id='tr_"+i+"'>";
						html+="<td><a href='"+url_inicio+r[i][6]+url_fin+"' onclick='setFila("+i+");' target='iframe_paquete'>"+r[i][3]+"</a></td>";
						html+="<td>"+r[i][0]+"</td>";
						html+="<td>$"+r[i][4]+"</td>";
						if(json.aereo!='99'){
						eval("ae=jsonAereo."+r[i][2]);
						html+="<td><b title='"+ae+"'>"+r[i][2]+"</b></td>";
						}
						html+="</tr>";
					}
				}
				html+="</tbody></table>";
				$('listado_paquetes').innerHTML=html;
				//new Element('div',{html:html}).inject($('inner'), 'bottom');
				$('in_submit').value='Cotizar';
				$('in_submit').disabled=false;
				$('in_submit').setStyle('opacity','1');
			}
		}).send();

	}
	function setFila(i){
	$$(".table_paquetes tr").removeClass('select');
	$("tr_"+i).addClass('select');
	}
	var	jsonAereo=<? echo json_encode($LI);?>;
	function getAereos(dis){
		var value;
		$('in_cod_aereo').innerHTML='';
		new Element('option',{'value':'','html':'.............'}).inject($('in_cod_aereo'), 'bottom');
		new QuerySelect({type:'dato',camps:'aerolineas',table:'lugares',where:'where id='+dis,onSuccess:function(e){
			var co=new Array();
			cods=e.split(",");
			$('in_cod_aereo').innerHTML='';
			new Element('option',{'value':'','html':''}).inject($('in_cod_aereo'), 'bottom');
			new Element('option',{'value':'00','html':'todas','selected':true}).inject($('in_cod_aereo'), 'bottom');
			new Element('option',{'value':'99','html':'ninguna'}).inject($('in_cod_aereo'), 'bottom');
			for(var i=0;i<cods.length;i++){
				eval("value=jsonAereo."+cods[i]);
				new Element('option',{
					'value'	:cods[i],
					'html'	:value
				}).inject($('in_cod_aereo'), 'bottom');
			}
		}
		}).send();

	}



	var QuerySelect = new Class({

		Implements: [Options, Events],
		options : {
			url		: 'query_select.php',
			dir		: '',
			type	: 'select',//select,fila,dato
			camps	: 'id',
			table	: 'items',
			where	: 'where 1 limit 100'
		},
		initialize: function(options){
			this.setOptions(options);
		},
		send : function() {
			new Request({
				url: this.options.dir+this.options.url,
				method: 'get',
				data : {
						'r':this.options.type,
						'c':this.options.camps,
						't':this.options.table,
						'w':this.options.where
						},
				onSuccess: function(result){
					var json;
					if(this.options.type=='select'){
						json=JSON.decode(result,true);
						json=json.s;
					} else if(this.options.type=='fila'){
						json=JSON.decode(result,true);
						json=json.f;
					} if(this.options.type=='dato'){
						json=JSON.decode(result,true);
						json=json.d;
					}
					this.fireEvent('onSuccess', json);
				}.bind(this)
			}).send();
		}
	});

	</script>
