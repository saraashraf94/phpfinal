//nice scroll
$(document).ready(
    function(){
    $("html").niceScroll();
    });
//end nice scroll
// start convert password
    $(".convert-pass .in").click(function(){
        $(this).toggleClass("active");
        if ($(this).hasClass("active")) {
           $(".pass").attr("type","text");
        }
        else{
            $(".pass").attr("type","password");
        }
        });
    //end convert password