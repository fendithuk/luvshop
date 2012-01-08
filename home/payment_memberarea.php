<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/jquery.mCustomScrollbar.css"/>
<!--        <script type="text/javascript" src="<?php// include('elemen/url.php'); ?>js/jquery.tools.min.js"></script>-->
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
/*                            background-color: #656565;
                            border-radius: 5px;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            -o-border-radius: 5px; */
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
                        /*                        .content_right .submenu_right table tr
                                                {
                                                    margin-bottom: 15px;
                                                }*/
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
                    </style>
                    <div class="submenu_right">
                        <style>
                            .submenu_right img
                            {
                                height: 406px;
                                width: 552px;
                            }
                            .submenu_right .list_payment
                            {
                                position: absolute;
                                margin-top: -302px;
                                margin-left: 227px;

                            }
                            .submenu_right .list_payment p
                            {
                                font-size: 12px;
                                color: #1f282d;
                                font-family: sans-serif;
                                text-align: left;
                                margin-bottom: 5px;
                            }
                            .submenu_right .list_payment li
                            {
                                font-size: 12px;
                                list-style: decimal;
                                font-family: sans-serif;
                                color: #1f282d;
                                margin-bottom: 5px;
                            }
                        </style>
                        <img src="<?php include('../elemen/url.php'); ?>image/home/girl2.gif"/>
                        <div class="list_payment">
                            <p style="font-weight: bold;font-family: sans-serif">Pembayaran</p>
                            <p>Pembayaran dilakukan ke rekening BNI<br/> dan Mandiri via TRANSFER</p>
                            <ol>
                                <li style="margin-left: 20px;">Mandiri : 1490004914372<br/><span style="margin-left: -20px">Atas nama Sheli Rosita</span></li>
                                <li style="margin-left: 20px;">BNI : 0201226431<br/><span style="margin-left: -20px">Atas nama Siska Pratiwi</span></li>
                            </ol>
                            <p style="font-weight: bold">Konfirmase Pembayaran</p>
                            <ul>
                                <li style="list-style: outside;margin-left: 15px;">Konfirmasi pembayaran paling lambat<br/>2 x 24 jam setelah pemesanan.</li>
                                <li style="list-style: outside;margin-left: 15px;">Jika tidak ada konfirmasi maka kami<br/> berhak meng-cancel order.</li>
                                <li style="list-style: outside;margin-left: 15px;">Konfirmasi pembayaran dapat dilakukan <br/>pada menu Confirmation of Payment.</li>
                            </ul>
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
