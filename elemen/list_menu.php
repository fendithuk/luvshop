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
</style>
<ul style="margin: 0;padding: 0;list-style: none">
    <li style="border-bottom: 1px solid black;height: 20px;margin-bottom: 20px">Main Menu</li>
    <li class="background_menu" id="home" style="height: 30px"><a href="<?php include('url.php'); ?>index.php" style="color: #f08cca;" >Home</a></li>
    <li style="height: 30px" id="account"><a href="<?php include('url.php'); ?>account/my-account.php" style="color: #f08cca;"  >My Account</a></li>
    <li style="height: 30px" id="progress"><a href="<?php include('url.php'); ?>progress/progress.php" style="color: #f08cca;" >Progress</a></li>
    <li style="height: 30px" id="shipment"><a href="<?php include('url.php'); ?>shipment/shipment.php" style="color: #f08cca;" >Shipment</a></li>
    <li style="height: 30px" id="confpayment"><a href="<?php include('url.php'); ?>payment/confirmation-payment.php" style="color: #f08cca;font-size: 13px" >Confirmation of Payments</a></li>
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