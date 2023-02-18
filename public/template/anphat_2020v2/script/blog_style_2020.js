  

$(document).ready(function(){
  
      
    $('.img-small')
        .on('init', function (event, slick) {
            $('.img-small .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            focusOnSelect: false,
            infinite: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            }]
        });
    if($('.title-theme').length > 0){
        $('.title-theme').each(function(){
            var count = $(this).attr('data-count');
            var words = $.trim($(this).text()).split(" ");
            var ar = words.slice(' ');
            let title = '<span>';
            ar.forEach((value, index) => {
                if( index == (count - 1) ){
                    title += value + ' </span>';
                }else{
                    title += value + ' ';
                }
                $(this).html(title);
            });
        });
    }
});