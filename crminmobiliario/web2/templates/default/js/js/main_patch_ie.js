

;(function() {
	if ($.browser.msie === true && $.browser.version === '6.0') {  // anti pattern

		//BOOTSTRAP
		////////////////////

		// fix spans
		$('.row div[class^="span"]:first-child').not('[class*="offset"]').addClass('first-child');

		// fix offsets
		$('.row div[class*="offset"]:first-child').each(function () {
			var margin_left = parseInt($(this).css('margin-left'), 10) - 20;
			$(this).css('margin-left', margin_left);
		});


		//LI:HOVER
		///////////////////

		$('#buttons li').hover (function () {
			$(this).addClass("hover");
		}, function () {
			$(this).removeClass("hover");
		});

	}

	
if($.browser.msie){ 
   $('input[placeholder]').each(function(){  
        
        var input = $(this);        
        
        $(input).val(input.attr('placeholder'));
                
        $(input).focus(function(){
             if (input.val() == input.attr('placeholder')) {
                 input.val('');
             }
        });
        
        $(input).blur(function(){
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.val(input.attr('placeholder'));
            }
        });
    });
   
};
	

})();

