jQuery(document).ready(function( $ ) {
    $('.slider-testimonials').slick({
      dots: true,
      speed: 300,
      arrows: false,
      centerMode: true,
      slidesToShow: 1,
      centerPadding: '260px',
      slidesToScroll: 1,
      slidesPerRow: 3,
      customPaging : function(slider, i) {
	        var thumb = $(slider.$slides[i]).find('img').attr('src');
	        return '<img src="'+thumb+'">';
	    },
       responsive: [
        {
          breakpoint: 1024,
          settings: {
            centerPadding: '60px',
            slidesToScroll: 1
          
          }
        },
        {
          breakpoint: 767,
          settings: {
            centerPadding: '0px',
            centerMode: false,
          
          }
        }
    
      ]
    });
   
    
  
        

   
});
