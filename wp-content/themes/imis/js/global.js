jQuery(document).ready(function(){
	console.log('jQuery On!');

	enableSliderHome();
});


var enableSliderHome = function(){
	jQuery(".images").slick({
        dots: true,
        infinite: true,
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false
    });
}

var enableButtonCollaspe = function(){
	jQuery('.button-collapse').sideNav({
      menuWidth: 300,
      closeOnClick: true,
      edge: 'right'
    });

    jQuery('.collapsible').collapsible();
}

      