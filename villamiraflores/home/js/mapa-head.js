// JavaScript Document
$(document).ready(function(){
				$("#mo").click(function(){
					$("#mapa-head").height(400);
					$("#mo").hide("fast");
					$("#ocu").show("fast");
					});
				$("#ocu").click(function(){
					$("#mapa-head").height(0);
					$("#ocu").hide("fast");
					$("#mo").show("fast");
					});
			});