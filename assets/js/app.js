(function($) {

    $(document).foundation();

    $(document).ready(function(){

        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
      
    });

    // Toggle contents in qualification section by clicking the buttons
    $('#qualificationBubble').on('click', 'li', e => {
        let index = $($(e.target).index('li'));
        let id = `#qualification-${index[0]}`;

        $('.qualification-div').css({'display': 'none'});
        $(id).fadeIn('slow');
    });
})(jQuery);