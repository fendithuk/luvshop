$(document).ready(function(){
    $("img.addcart").click(function(){
        $("img#img_utama_shadow").css({
            "display":"block"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama").animate({height:200},"fast");
        $("img#img_utama").animate({width:170},"fast");
        $("img#img_utama").animate({marginLeft:-197},"fast");
        $("img#img_utama").animate({marginTop:-72},"fast");
        $("img#img_utama").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000);
        $(this).animate({marginTop:41},"slow");
        $("p#confirmasi").fadeIn(5000);
    });
});