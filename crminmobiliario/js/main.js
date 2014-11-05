// require(["jquery", "../../dist/jquery.validate"], function($) {

// 	$.validator.setDefaults({
// 		submitHandler: function() { alert("submitted!"); }
// 	});

// 	// validate the comment form when it is submitted
// 	$("#commentForm").validate();
// });



var jspath  ='js/vendor',
	csspath ='css/vendor';

require([jspath+"/jquery-1.10.2.min.js"], function() {

	$( document ).ready(function() {

		/**
		 * lightbox
		 */
		if( $('.image-link, .image-gallery, .image-gallery, .popup-youtube, .video-gallery').length>0 ){

			require([jspath+"/lightbox/jquery.magnific-popup.min.js"], function() {
				
				loadCss(csspath+"/lightbox/magnific-popup.css");
				$('.image-gallery').magnificPopup({
			        delegate: 'a',
					type:'image',
					closeOnContentClick: false,
					closeBtnInside: false,
					mainClass: 'mfp-with-zoom mfp-img-mobile',					
			        gallery: {
			            enabled: true
			        },					
			        zoom: {
			            enabled: true,
			            duration: 300, // don't foget to change the duration also in CSS
			            opener: function(element) {
			            	return element.find('img');
			            }
			        },					
				});
				
		        $('.video-gallery').magnificPopup({
			        delegate: 'a',		        	
					disableOn: 700,
					type: 'iframe',
					mainClass: 'mfp-fade',
					removalDelay: 160,
					preloader: false,
					fixedContentPos: false,
			        gallery: {
			            enabled: true
			        },					
		        });	

		        $('.popup-youtube, .popup-gmaps').magnificPopup({
					disableOn: 700,
					type: 'iframe',
					mainClass: 'mfp-fade',
					removalDelay: 160,
					preloader: false,
					fixedContentPos: false,
		        });		

				$('.image-link').magnificPopup({
			        delegate: 'a',
					type:'image',
					closeOnContentClick: false,
					closeBtnInside: false,
					mainClass: 'mfp-with-zoom mfp-img-mobile',				
			        zoom: {
			            enabled: true,
			            duration: 300, // don't foget to change the duration also in CSS
			            opener: function(element) {
			            	return element.find('img');
			            }
			        },					
				});		        		

			});

		}	
		/**************************************
		 * SLIDER ADVANCES : FLUX
		 *************************************/

		if($('.slidesFlux').length>0){

			require([jspath+"/sliders/flux.js"], function() {

				$('.slidesFlux').each(function(){ 

					var $slide 	  =$(this);	
					
					var tarray = new Array();
					// tarray.push('blinds');
					// tarray.push('slide');

					window.f = new flux.slider($slide, {
									    // autoplay: false,
									    pagination: true,
									    captions: true,
									    // transitions: tarray,
									    delay: 7000,					
									});	
				});

			});

		}

		/**************************************
		 * SLIDER : UNSLIDER
		 *************************************/

		if($('.slides').length>0){

			require([jspath+"/sliders/unslider.min.js"], function() {
				
				$('.slides').each(function(){ 

					var $slide 	  =$(this);

					if( $slide.find('li').length>1 ){
					
						var opt_delay = ($slide.data('delay')!=undefined)?$slide.data('delay'):10000,
						    opt_dots  = ($slide.data('dots')!=undefined)?$slide.data('dots'):false,
						    opt_keys  = ($slide.data('keys')!=undefined)?$slide.data('keys'):true;

						var unslider = $slide.unslider({
							fluid:false,
							dots:opt_dots,
							delay:opt_delay,
							speed:500,
							keys:opt_keys,
						});
					    $slide.parent().parent().find('.arrow').click(function() {
					        var fn = this.className.split(' ')[1];
					        unslider.data('unslider')[fn]();
					    });

					}

				}).promise().done( function(){  
					
					setTimeout(function() {

						$( ".tabsAfterSlides.tabs" ).each(function(){
							
							// console.log($(this));
							processTabs($(this));

						});
						
					}, 500);		

				});

			});

		}


		/**************************************
		 * FORMS
		 *************************************/

		if($('form').length>0){

			require([jspath+"/form/jquery.form.min.js"], function() {

				$('form').each(function(){ 

					var $form 	  =$(this),
						$button   =$form.find('.submit input');	

					$form.ajaxForm({
						dataType:'json',
						timeout : 3000,
						beforeSubmit:function(){
							$button
								.data('origValue',$button.val())
								.attr('disabled','disabled')
								.val('Enviando......')
								.removeClass('btn-primary')
								.addClass('btn-warning');
						},
						success :function(json) { 

							var	$formbody =$form.find('ul'),
								$alert;

							$alert    =$('<div class="alert alert-'+json.t+'" role="alert">'+json.m+'</div>'),

							$formbody.after($alert);
							$formbody.hide();

						    if(json.t=='success'){			    
						    	$form.resetForm();
							}

							$button
								.removeAttr('disabled')				
								.val($button.data('origValue'))
								.removeClass('btn-warning')
								.addClass('btn-primary');

							setTimeout(function() 
							{
							    $alert.remove()
							    $formbody.show();
							}, 7000);

						},

					}); 			

				});

			});	

		}


		/**************************************
		 * TABS
		 *************************************/

		function processTabs($tabs) {
			
			$tabs.on('click','a',function() {
			  $( this ).parent().parent().find('li').removeClass( 'active' );
			  $( this ).parent().addClass( 'active' );

			  $tabs.parent().find( 'section' ).hide();
			  $tabs.parent().find( '.' + $( this ).data( 'tab' ) ).show();

			});
			$tabs.find( 'li.active a' ).trigger('click');

		}

		$( ":not(.tabsAfterSlides).tabs" ).each(function(){
			
			processTabs($(this));

		});

		/**************************************
		 * END
		 *************************************/		

	});

});

/**
 * helpers
 */
function loadCss(url) {

    var newCSS = document.createElement("link");
        newCSS.type = "text/css";
        newCSS.rel  = "stylesheet";
        newCSS.href = encodeURI(url);

     document.getElementsByTagName("head")[0].appendChild(newCSS);

}








