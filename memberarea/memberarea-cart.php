<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/reset.css"/>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.tools.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                
                   
                    $("p#cartempty").fadeOut(2000);
                   
                    $("div#cartfadein").show(3000);
                    
               
            });
        </script>
    </head>
    <body>
        <div class="wrap"> <!--start wrap-->

            <?php include('../elemen/header_memberarea.php'); ?>



            <div class="content">
                <div class="content_left">
                    <style>
                        .content_left ul
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_left ul #lili
                        {
                            list-style: none;
                            height: 200px;
                            width: 170px;
                            margin-left: auto;
                            margin-right: auto;
                            margin-bottom: 15px;
                            border-radius: 15px;
                            text-align: center;
                            padding: 5px;
                        }
                        .content_left ul li img
                        {
                            height: 50px;
                            width: 100px;

                        }
                        .content_left ul li p
                        {

                            margin: 0;
                            padding: 0;
                        }
                        .content_left #lili a
                        {
                            color: #ffb3cd;
                        }
                        .content_left .background_menu
                        {
                            height: 30px;
                            margin-top: 20px;
                            background-color: #656565;
                            border-radius: 5px;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            -o-border-radius: 5px; 
                            text-align: center
                        }

                    </style>
                    <ul>
                        <li style="background-image: url('<?php include('../elemen/url.php'); ?>image/menu.jpg');" id="lili">
                            <ul style="margin: 0;padding: 0;list-style: none">
                                <li style="border-bottom: 1px solid black;height: 20px">Main Menu</li>
                                <li class="background_menu"><a href="#" style="color: #f08cca;border: 1px solid #9d9d9d;position: absolute; margin-top: 5px;margin-left: -75px; width: 149px;padding-top: 2px;padding-bottom: 2px">Home</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">My Account</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Progress</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Shipment</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Confirmation of Payments</a></li>
                            </ul>
                        </li>
                        <li style="background-image: url('<?php include('../elemen/url.php'); ?>image/menu.jpg');" id="lili">
                            <?php include('../elemen/my-cart.php'); ?>
                        </li>
                        <li style="text-align: center">
                            <img src="<?php include('../elemen/url.php'); ?>image/bni.gif"/><br/><p>0201226431<br/>Siska Pratiwi</p>
                            <img src="<?php include('../elemen/url.php'); ?>image/mandiri.gif"/><p>149004914372<br/>Sheli Rosita</p>
                            <img src="<?php include('../elemen/url.php'); ?>image/tiki.gif"/>
                        </li>
                    </ul>
                </div>
                <div class="content_right">
                    <style>
                        .content_right .submenu_right
                        {
                            border: 1px solid #cbcbcb;
                            padding: 15px;
                            margin-top: -10px;
                            border-radius: 30px;
                            -webkit-border-radius: 30px;
                            -moz-border-radius: 30px;
                            -o-border-radius: 30px;
                        }
                        .content_right .submenu_right table
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .submenu_right table tr
                        {
                            margin: 0;
                            padding: 0;

                        }
                        .content_right .submenu_right table tr td
                        {
                            width: 110px;

                            font-size: 12px;
                            font-family: sans-serif;

                        }
                        .content_right .submenu_right ul
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .submenu_right ul li img
                        {
                            margin: 0;
                            padding: 0;
                            height: 206px;
                            width: 189px;
                        }
                        .content_right .submenu_right h3
                        {
                            color: #00438d;
                            text-align: center;
                            font-size: 15px;
                        }
                        .content_right .submenu_right p
                        {
                            color: #32597a;
                            text-align: center;
                            font-size: 11px;
                        }
                        .content_right .submenu_right .tombol
                        {
                            margin-top: 172px;
                            text-align: center;
                        }
                        .content_right .submenu_right .tombol img
                        {
                            height: 24px;
                            width: 88px;
                        }
                        .content_right .submenu_right .img_sort
                        {
                            margin-bottom: 20px;
                            text-align: center;
                        }
                        .content_right .submenu_right .img_sort img
                        {
                            margin-bottom: 10px;
                            margin-right: 44px;
                        }
                        
                        .content_right .submenu_right .img_sort #img1a
                        {
                            height: 58px;
                            width: 67px;
                            margin-bottom: -6px;
                        }
                        
                        .content_right .submenu_right .img_sort #img2a
                        {
                            height: 30px;
                            width: 41px;
                            margin-bottom: 4px;
                        }
                        .content_right .submenu_right .img_sort hr
                        {
                            width: 292px;
                            margin-left: 116px;
                            border: 1px solid #3473ba;
                            position: absolute;
                            margin-top: 33px;
                        }
                        
                    </style>
                    <div class="submenu_right">
                        <div class="img_sort">
                            <hr/>
                            <img src="<?php include('../elemen/url.php'); ?>image/cart/cartorder.gif" id="img1a"/>
                            <img src="<?php include('../elemen/url.php'); ?>image/cart/shippingorder.gif" id="img2a"/>
                            <img src="<?php include('../elemen/url.php'); ?>image/cart/completeorder.gif" id="img2a"/>
                        </div>
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Weight</td>
                                <td>Subtotal</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td>vebtago magenta</td>
                                <td>IDR 95.000</td>
                                <td></td>
                                <td>0,5</td>
                                <td>IDR 95.000</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr style="border-bottom: 1px dashed black">
                                <td></td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Shipping fee: </td>
                                <td>0,5</td>
                                <td>Waiting</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total: </td>
                                <td>IDR 95.000</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr style="border-bottom: 1px dashed black">
                                <td></td>
                            </tr>
                            <tr>
                                <td><p style="margin-top: 5px;"></p></td>
                            </tr>

                            <tr style="border-bottom: 1px solid black;"> 
                                <td></td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>

                        </table>
                        <div class="tombol">
                            <a href="<?php include('../elemen/url.php'); ?>memberarea/memberarea-check-out.php"><img src="<?php include('../elemen/url.php'); ?>image/cart/back.gif"/></a>
                            <a href="<?php include('../elemen/url.php'); ?>memberarea/memberarea-shipping.php"><img src="<?php include('../elemen/url.php'); ?>image/cart/next.gif"/></a>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            include('../elemen/footer.php');
            ?>
        </div> <!--end wrap-->

    </body>
</html>