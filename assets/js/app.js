(function ($) {

    $(document).foundation();


    $(document).ready(function () {

        debugger;


        $(".empowerment .listContain .listItem:first-child").css("background-image", "url('http://durhamtaxeshub.local/wp-content/themes/durhamtaxeshub/assets/img/menuarrow.svg')");

        $(".empowerment .listContain .listItem:nth-child(1)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/themes/durhamtaxeshub/assets/img/menuarrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(2)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/themes/durhamtaxeshub/assets/img/middlearrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(3)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/themes/durhamtaxeshub/assets/img/middlearrow.svg')");



        });

        $(".empowerment .listContain .listItem:nth-child(4)").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/themes/durhamtaxeshub/assets/img/middleArrow.svg')");



        });

        $(".empowerment .listContain .listItem:last-child").click(function () {

            $(".listContain .listItem").css("background-image", "none");
            $(this).css("background-image", "url('http://durhamtaxeshub.local/wp-content/themes/durhamtaxeshub/assets/img/bottomArrow.svg')");



        });

        // Toggle contents in qualification section by clicking the buttons


    });

})(jQuery);
