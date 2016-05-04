
var j = jQuery.noConflict();

(function($){
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
	j(document).on('ready',function(){

		/*|----------------------------------------------------------------------|*/
		/*|-----  CAROUSEL HOME  LIBRERIA REVslider -----|*/
		/*|----------------------------------------------------------------------|*/
		if ( j.fn.cssOriginal!=undefined)   // CHECK IF fn.css already extended
        j.fn.css =  j.fn.cssOriginal;

		j("#carousel-home").revolution({
			fullWidth  : "off",
			startheight: 490,                            
			startwidth : 890,
		}); 


	});
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
})(jQuery);