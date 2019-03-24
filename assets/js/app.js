(function ($) {

    $(document).foundation();

    $(document).ready(function () {

        //nav
        $("#navigation").click(function () {
            if ($(this).attr("data-click-state") === "0") {

                $(this).attr("data-click-state", 1);
                $("#menu-bar").animate({
                    right: 0 + "px",
                });
            } else {
                $(this).attr("data-click-state", 0);
                $("#menu-bar").animate({
                    right: -250 + "px",
                });
            }
        });


        //form
        $("#inputCheck").click(function () {

            if ($("#userInput").val() <= $("#threshold").val()) {
                alert("you are eligible");

            } else {
                alert("you are not eligible");
            }
        });


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



        $("#menu-bar li a").removeAttr("href");

        $("#menu-bar li a").each(function (index, item) {

            // let arrayOfId = ['qualification', '', '', '', 'location', 'volunteer', 'empowerment', '', '', '', '', '', 'testimonial'];
            let arrayOfId = ['qualification', 'eligible', 'receipts', 'information', 'location', 'volunteer', 'empowerment', 'financialIteracy', 'taxBenefits', 'financialProducts', 'assetBuilding', 'ConsumerProtection', 'testimonial'];

            let selectedId = arrayOfId[index];


            $(item).attr('id', `${selectedId}`);


        });

        //animated scrolling for sub menu
        $("#primary-menu > li > .sub-menu li").on('click', function (e) {
            // debugger;
            let selection = $(e.target);
            let selectionIndex = $(e.target).index();

            if (selection.parent().parent().parent().children()[0].id === "qualification") {
                
                let id = `#qualification-${selectionIndex}`;

                $('.qualification-div').css({
                    display: 'none'
                });
                $(id).fadeIn('slow');

            } else if (selection.parent().parent().parent().children()[0].id === "empowerment") {

                $('#listHeader').text(selection);

            }


            let section = this.parentElement.parentElement.firstChild.id;


            //let selection = this.children;

            animate(section);

        });


        // destop version
        $("#menu-bar li a").click(function () {

            let clickedSection = $(this).attr("id");

            animate(clickedSection);
        });

        //end of animated scrolling

        // Toggle contents in qualification section by clicking the buttons
        $('#qualificationBubble').on('click', 'li', e => {

            let index = $(e.target).index();
            let id = `#qualification-${index}`;
            console.log("id" + id);
            $('.qualification-div').css({
                display: 'none'
            });
            $(id).fadeIn('slow');
        });

        $('.location-list').on('click', 'h3', (e) => {
            let index = $(e.target).attr('data-id');
            let id = `#${index}`;
            console.log(index);
            $('.tim').css({
                display: 'none'
            });
            $(id).fadeIn('slow');
        });

    });




})(jQuery);