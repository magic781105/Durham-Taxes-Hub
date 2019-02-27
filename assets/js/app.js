(function ($) {

    $(document).foundation();

    $(document).ready(function () {
        //nav
        $("#navigation").click(function() {
            if($(this).attr("data-click-state")==="0"){
                
            $(this).attr("data-click-state",1);
            $(".menu-bar").animate({
                right: 0+"px",
            });
            } else {
            

                $(this).attr("data-click-state",0);
                $(".menu-bar").animate({
                    right: -200+"px",
                });
        
        }
        });


        //form
        $("#inputCheck").click(function () {
           // debugger;
           if($("#userInput").val()<= $("#threshold").val()) {
            alert("you are eligible");

           } else{
               alert("you are not eligible");
           }
        });
    });
 
 
 
 
 })(jQuery);