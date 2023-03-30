//slideshow
$('#slidehome').slick({
    autoplay: true,
    arrows: false,
    pauseOnHover: false,
    fade: true,
    speed: 600
});

$(document).ready(function() {
    //menu mobile
    $("#bt-menu-mobile").click(function(){
        $(this).toggleClass("close-bt-hamburguer");
        $('#mainmenu').attr("style","right:0");
        return false;
    });
    $(".fechar-mobile").click(function(){
        $('#bt-menu-mobile').toggleClass("close-bt-hamburguer");
        $('#mainmenu').removeAttr("style","right:0");
        return false;
    });
});