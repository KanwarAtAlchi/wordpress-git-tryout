jQuery(document).ready(function($) {
    
    /* Superfish Menu Call */
    $('#corpus_menu').superfish({});
    
    /* Responsive Menu */
    $('.primarymenu-resp').toggle(function(){
        $('.primarymenu-section').addClass('menuClicked');
        $('.menuClicked').fadeIn();
        $('.menuClicked ul.sub-menu').show().css('visibility', 'visible');
        $('.menuClicked ul.children').show().css('visibility', 'visible');
        $('.menuClicked ul.sf-menu').removeClass('sf-js-enabled');
    }, function(){
        $('.menuClicked').hide();
        $('.menuClicked ul.sf-menu').addClass('sf-js-enabled');
        $('.menuClicked ul.sub-menu').hide().css('visibility', 'hidden');
        $('.menuClicked ul.children').hide().css('visibility', 'hidden');
        $('.primarymenu-section').removeClass('menuClicked');
    });
    
    $(window).resize(function(){
       if( $('.primarymenu-resp').css('display') == 'none'){
           
           $('.primarymenu-section').removeClass('menuClicked');
           $('.primarymenu-section ul.sf-menu').addClass('sf-js-enabled');
           $('.primarymenu-section ul.sub-menu').hide().css('visibility', 'hidden');
           $('.primarymenu-section ul.children').hide().css('visibility', 'hidden');
       } else {
           $('.primarymenu-section').addClass('menuClicked');
           $('.primarymenu-section ul.sf-menu').removeClass('sf-js-enabled');
           $('.primarymenu-section ul.sub-menu').show().css('visibility', 'visible');
           $('.primarymenu-section ul.children').show().css('visibility', 'visible');
       }
    });
    
    /* Flexslider */
	$('.flexslider').flexslider({
		animation: corpus_slide_vars.animation,
		direction: corpus_slide_vars.direction,
		slideshow: true,
		slideshowSpeed: parseInt(corpus_slide_vars.slideshowSpeed),
		animationSpeed: parseInt(corpus_slide_vars.animationSpeed),
		pauseOnAction: true,
		controlNav: false,
		directionNav: Boolean(corpus_slide_vars.directionNav),
		smoothHeight: Boolean(corpus_slide_vars.smoothHeight),
	});

});