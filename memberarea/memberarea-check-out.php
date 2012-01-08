<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/jquery.mCustomScrollbar.css"/>
<!--        <script type="text/javascript" src="<?php // include('elemen/url.php');  ?>js/jquery.tools.min.js"></script>-->
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.min.js"></script>
        <script src="<?php include ('../elemen/url.php'); ?>js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu").css({
                    
                    "margin-top":"20px",
                    "margin-bottom":"10px"
                });
                
                   
                $("p#cartempty").css({
                    "display":"none"
                });
                   
                $("div#cartfadein").css({
                    "display":"block"
                });
                    
               
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
                            <?php include('../elemen/list_menu.php'); ?>
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
                        .content_right .submenu_right .check
                        {
                            display: inline-block;
                            color: #4293e2;
                            font-size: 13px
                        }
                        .content_right .submenu_right .check:hover
                        {
                            color: black;
                            text-decoration: underline;
                        }
                        .content_right .submenu_right .buttonz
                        {
                            height: 16px;
                            width: 44px;
                            border: 1px solid #4293e2;
                            display: inline-block;
                            color: black;
                            text-align: center;
                            padding-top: 5px;
                            font-size: 10px
                        }
                    </style>
                    <div class="submenu_right">
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
                                <td style="width: 130px">vebtago magenta</td>
                                <td>IDR 95.000</td>
                                <td style="width: 170px"><div style="height: 21px;width: 28px;border: 1px solid black;display: inline-block;position: absolute"></div><a href="" style="margin-left: 32px;margin-right: 3px;" class="buttonz">update</a><a href="" class="buttonz">delete</a></td>
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
                            <tr>
                                <td colspan="5"><p><a href="<?php include('../elemen/url.php'); ?>memberarea/memberarea-continue-shopping.php" class="check">Continue Shoping</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php include ('../elemen/url.php'); ?>memberarea/memberarea-cart.php" class="check">Check Out</a></p></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php
            include('../elemen/footer.php');
            ?>
        </div> <!--end wrap-->

    </body>
</html>
