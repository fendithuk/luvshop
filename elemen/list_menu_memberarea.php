<style>
    .content_left .background_menu
    {
        height: 30px;
        background-color: #656565;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -o-border-radius: 5px; 
        text-align: center
    }
     .content_left li#home a
    {
        position: static;
        padding-top: 6px;
        margin-left: -10px;
        display: block
        
    }
     .content_left li#account a
     {
         position: static;
        padding-top: 6px;
        margin-left: -8px;
        display: block
     }
      .content_left li#progress a
     {
         position: static;
        padding-top: 6px;
        margin-left: -9px;
        display: block
     }
      .content_left li#shipment a
     {
         position: static;
        padding-top: 6px;
        margin-left: -8px;
        display: block
     }
      .content_left li#confpayment a
     {
         position: static;
        padding-top: 6px;
        margin-left: 0px;
        display: block
     }
</style>
<ul style="margin: 0;padding: 0;list-style: none">
    <li style="border-bottom: 1px solid black;height: 20px;margin-bottom: 20px">Main Menu</li>
    <li style="height: 30px" class="background_menu" id="home" ><a href="<?php include('url.php'); ?>memberarea/memberarea.php" style="color: #f08cca;" >Home</a></li>
    <li style="height: 30px" id="account"><a href="<?php include('url.php'); ?>account/my-account-memberarea.php" style="color: #f08cca;"  >My Account</a></li>
    <li style="height: 30px" id="progress"><a href="<?php include('url.php'); ?>progress/progress-memberarea.php" style="color: #f08cca;" >Progress</a></li>
    <li style="height: 30px" id="shipment"><a href="<?php include('url.php'); ?>shipment/shipment-memberarea.php" style="color: #f08cca;" >Shipment</a></li>
    <li style="height: 30px" id="confpayment"><a href="<?php include('url.php'); ?>payment/confirmation-payment-memberarea.php" style="color: #f08cca;font-size: 13px" >Confirmation of Payments</a></li>
</ul>

<script type="text/javascript">
    $(document).ready(function(){
        $("li#home").hover(
        function(){
            $(this).addClass("background_menu");
            $("li#account").removeClass("background_menu");
             $("li#progress").removeClass("background_menu");
              $("li#shipment").removeClass("background_menu");
               $("li#confpayment").removeClass("background_menu");
        },function(){
            return true;
        }
    );
     $("li#account").hover(
        function(){
            $(this).addClass("background_menu");
            $("li#home").removeClass("background_menu");
             $("li#progress").removeClass("background_menu");
              $("li#shipment").removeClass("background_menu");
               $("li#confpayment").removeClass("background_menu");
        },function(){
            return true;
        }
    );
     $("li#progress").hover(
        function(){
            $(this).addClass("background_menu");
            $("li#account").removeClass("background_menu");
             $("li#home").removeClass("background_menu");
              $("li#shipment").removeClass("background_menu");
               $("li#confpayment").removeClass("background_menu");
        },function(){
            return true;
        }
    );
     $("li#shipment").hover(
        function(){
            $(this).addClass("background_menu");
            $("li#account").removeClass("background_menu");
             $("li#progress").removeClass("background_menu");
              $("li#home").removeClass("background_menu");
               $("li#confpayment").removeClass("background_menu");
        },function(){
            return true;
        }
    );
     $("li#confpayment").hover(
        function(){
            $(this).addClass("background_menu");
            $("li#account").removeClass("background_menu");
             $("li#progress").removeClass("background_menu");
              $("li#shipment").removeClass("background_menu");
               $("li#home").removeClass("background_menu");
        },function(){
            return true;
        }
    );
    });
</script>