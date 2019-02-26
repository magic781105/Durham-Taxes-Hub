(function ($) {

    $(document).foundation();


    $(document).ready(function () {


        $(".empowerment .listItem:first-child").css("background-image", "url('/wp-content/themes/durhamtaxhub/assets/img/menuarrow.svg')");



        $(".empowerment .listContain .listItem:nth-child(1)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxhub/assets/img/menuarrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(2)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxhub/assets/img/middleArrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(3)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxhub/assets/img/middleArrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(4)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxhub/assets/img/middleArrow.svg')");



        });

        $(".empowerment .listContain .listItem:last-child").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('/wp-content/themes/durhamtaxhub/assets/img/bottomArrow.svg')");



        });


        // Animated scrolling

        function animate(sectionClass) {

            $("html, body").animate({
                scrollTop: $('.' + sectionClass).offset().top

            }, 1000);

        }

        $(".nav-bar li").click(function () {

            let clickedSection = $(this).attr("id");

            animate(clickedSection);
        });

        //end of animated scrolling

        // Toggle contents in qualification section by clicking the buttons
        $('#qualificationBubble').on('click', '.qualification-btn', e => {
            let index = $($(e.target).index('.qualification-btn'));
            let id = `#qualification-${index[0]}`;
            console.log("id" + id);
            $('.qualification-div').css({
                display: 'none'
            });
            $(id).fadeIn('slow');
        });

    });




})(jQuery);
