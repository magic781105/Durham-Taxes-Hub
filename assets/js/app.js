(function ($) {

    $(document).foundation();


    $(document).ready(function () {


        $(".empowerment .listItem:first-child").css("background-image", "url('/wp-content/themes/durhamtaxeshub/assets/img/menuarrow.svg')");



        $(".empowerment .listContain .listItem:nth-child(1)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxeshub/assets/img/menuarrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(2)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxeshub/assets/img/middleArrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(3)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxeshub/assets/img/middleArrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(4)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxeshub/assets/img/middleArrow.svg')");



        });

        $(".empowerment .listContain .listItem:last-child").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxeshub/assets/img/bottomArrow.svg')");



        });

        // Toggle contents in qualification section by clicking the buttons
        $('#qualificationBubble').on('click', 'li', e => {
            let index = $($(e.target).index('li'));
            let id = `#qualification-${index[0]}`;

            $('.qualification-div').css({
                'display': 'none'
            });
            $(id).fadeIn('slow');
        });

    });




})(jQuery);
