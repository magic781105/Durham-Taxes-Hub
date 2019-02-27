(function ($) {

    $(document).foundation();
 
 
    $(document).ready(function () {
 
        $("#inputCheck").click(function () {
            debugger;
           if($("#userInput").val()<= $("#threshold").val()) {
            alert("you are eligible");

           } else{
               alert("you are not eligible");
           }
 
 
        });
 
 
    });
 
 
 
 
 
 
 })(jQuery);