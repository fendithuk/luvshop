<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/jquery.mCustomScrollbar.css"/>
<!--        <script type="text/javascript" src="<?php // include('elemen/url.php');   ?>js/jquery.tools.min.js"></script>-->
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.min.js"></script>
        <script src="<?php include ('../elemen/url.php'); ?>js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu");
                
                $("li#progress").addClass("background_menu").css({
                    "margin-top":"-1px"
                });
               $("li#account,li#shipment,li#confpayment").css({
                   "margin-top":"-1px"
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
                            height: 403px
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
                            margin-top: 20px
                        }
                        .content_right .submenu_right .img_sort img
                        {
                            margin-bottom: 10px;
                            margin-right: 40px
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
                            width: 39px;
                            margin-bottom: 4px;
                        }
                        .content_right .submenu_right .img_sort hr
                        {
                            width: 535px;
                            margin-left: 0px;
                            border: 1px solid #3473ba;
                            position: absolute;
                            margin-top: 33px;
                        }


                    </style>
                    <div class="submenu_right">

                        <h3 style="color: black;font-size: 12px;float: left;font-weight: bold">Progress</h3>
                        <br/>
                        <label style="font-size: 10px;text-align: left">Number of Purchase : </label>
                        <input type="text" style="border: 1px solid #8ea8c1;width: 100px"/>
                        <div class="img_sort">
                            <hr/>
                            <img src="<?php include('../elemen/url.php'); ?>image/progress/robotpesan.gif" id="img2a"/>
                            <img src="<?php include('../elemen/url.php'); ?>image/progress/robotbayar.gif" id="img2a"/>
                            <img src="<?php include('../elemen/url.php'); ?>image/progress/robotprogress.gif" id="img1a"/>
                            <img src="<?php include('../elemen/url.php'); ?>image/progress/robotprogress2.gif" id="img2a"/>
                            <img src="<?php include('../elemen/url.php'); ?>image/progress/robotprogress3.gif" id="img2a"/>
                            <img src="<?php include('../elemen/url.php'); ?>image/progress/robotkirim.gif" id="img2a"/>
                        </div>
                        <p style="color: black; float: left">Keterangan : </p>
                    </div>
                </div>
            </div>
            <?php
            include('../elemen/footer.php');
            ?>
        </div> <!--end wrap-->

    </body>
</html>
