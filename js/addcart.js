$(document).ready(function(){
    
    $("img.addcart").live("click",function(){
        $("img#img_utama_shadow").css({
            "display":"block"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama").animate({
            height:200
        },"fast");
        $("img#img_utama").animate({
            width:170
        },"fast");
        $("img#img_utama").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama").animate({
            marginTop:-72
        },"fast");
        $("img#img_utama").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"147px"
           
        });
        
        $(this).animate({
            marginTop:41
        },"slow");
        $("p#list_nama_barang").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang").clone().insertAfter(this).appendTo("h2#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
    });
    
////    $(document.body).append($("<div>"));	
//	 var n = $("div").size();	
//	 $("span").text("There are " + n + " divs." +	
//	 "Click to add more.");	
//	 }).click(); // trigger the click to start
//    
//    
//    
//    
//    $("img.addcart").click(function(){
//        $("img#img_utama_shadow").css({
//            "display":"block"
//        });
//        $("p#cartempty").fadeOut(2000);
//        $("img#img_utama").animate({height:200},"fast");
//        $("img#img_utama").animate({width:170},"fast");
//        $("img#img_utama").animate({marginLeft:-197},"fast");
//        $("img#img_utama").animate({marginTop:-72},"fast");
//        $("img#img_utama").fadeOut(1000);
//        $("div#cartfadein").fadeIn(3000);
//        $(this).animate({marginTop:41},"slow");
//        $("p#confirmasi").fadeIn(5000);
//    });
});

$(document).ready(function(){          
    $("img.img_kedua").hover(
        function(){
            $(this).css({
                "box-shadow":" 0 0 40px 0 red",
                "-webkit-box-shadow":" 0 0 40px 0 red",
                "-moz-box-shadow":" 0 0 40px 0 red",
                "-o-box-shadow":" 0 0 40px 0 red",
                "cursor":"pointer",
                "opacity":"1"
            });
        },function(){
            $(this).css({
                "box-shadow":" 0 0 40px 0 white",
                "-webkit-box-shadow":" 0 0 40px 0 white",
                "-moz-box-shadow":" 0 0 40px 0 white",
                "-o-box-shadow":" 0 0 40px 0 white",
                "cursor":"pointer",
                "opacity":"0.5"
            });
        }
        );
                            
    $("img#tk1").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk1").fadeIn(3000);     
        $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
    });
    
    $("img#tk2").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk2").fadeIn(3000);
         $("img#img_utama_tk1,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
    });
    
    $("img#tk3").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk3").fadeIn(3000);
         $("img#img_utama_tk2,img#img_utama_tk1,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
    });
    
    $("img#tk4").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk4").fadeIn(3000);
         $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk1,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
    });
    
    $("img#tk5").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk5").fadeIn(3000);
         $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk1,img#img_utama_tk6").css({
            "display":"none"
        });
    });
    
    $("img#tk6").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk6").fadeIn(3000);    
         $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk1").css({
            "display":"none"
        });
    });
});