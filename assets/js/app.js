(function ($) {

    $(document).foundation();

    $(document).ready(function () {

        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });

        $(".empowerment .listItem:first-child").css("background-image", "url('http://durhamtaxeshub.local/wp-content/uploads/2019/02/menuarrow.svg')");

        $(".empowerment .listContain .listItem:nth-child(2)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/uploads/2019/02/middlearrow.svg')");



        });

        $(".empowermentMain .listContain .listItem:nth-child(3)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/uploads/2019/02/middleArrow.svg')");



        });

        $(".empowermentMain .listContain .listItem:nth-child(4)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/uploads/2019/02/middleArrow.svg')");



        });

        $(".empowermentMain .listContain .listItem:last-child").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/uploads/2019/02/bottomArrow.svg')");



        });





    });

})(jQuery);
