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
        let index = $(e.target).index();
        let id = `#qualification-${index}`;
        $('.qualification-div').css({
            display: 'none'
        });
        $(id).fadeIn('slow');
    });

    $('.location-list').on('click', 'h3', (e) => {
        let index = $(e.target).attr('data-id');
        let id = `#${index}`;
        console.log(index);
        $('.tim').css({display: 'none'});
        $(id).fadeIn('slow');
    });
})(jQuery);