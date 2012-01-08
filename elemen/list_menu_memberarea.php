<style>
    .content_left .background_menu
    {
        height: 20px;
        padding-top: 3px;
        margin-top: 20px;
        background-color: #656565;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -o-border-radius: 5px; 
        text-align: center
    }
</style>
<ul style="margin: 0;padding: 0;list-style: none">
    <li style="border-bottom: 1px solid black;height: 20px">Main Menu</li>
    <li class="background_menu" id="home" ><a href="<?php include('url.php'); ?>memberarea/memberarea.php" style="color: #f08cca;" >Home</a></li>
    <li style="height: 30px" id="account"><a href="<?php include('url.php'); ?>account/my-account-memberarea.php" style="color: #f08cca;"  >My Account</a></li>
    <li style="height: 30px" id="progress"><a href="<?php include('url.php'); ?>progress/progress-memberarea.php" style="color: #f08cca;" >Progress</a></li>
    <li style="height: 30px" id="shipment"><a href="<?php include('url.php'); ?>shipment/shipment-memberarea.php" style="color: #f08cca;" >Shipment</a></li>
    <li style="height: 30px" id="confpayment"><a href="<?php include('url.php'); ?>payment/confirmation-payment-memberarea.php" style="color: #f08cca;font-size: 13px" >Confirmation of Payments</a></li>
</ul>