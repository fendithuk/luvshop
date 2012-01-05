<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/reset.css"/>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.tools.min.js"></script>
    </head>
    <body>
        <div class="wrap"> <!--start wrap-->
            <?php
            include('../elemen/header_login.php');
            ?>

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
                                <li class="background_menu"><a href="#" style="color: #f08cca;position: absolute; margin-top: 5px;margin-left: -75px; width: 149px;padding-top: 2px;padding-bottom: 2px">Home</a></li>
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
                            padding: 10px;
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
                        <table>
                            <tr>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas5.gif"/></li>
                                        <li><p>VENTAGO</p></li>
                                        <li><h3>Rp 95.000</h3></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas8.gif"/></li>
                                        <li><p>VELONA</p></li>
                                        <li><h3>Rp 90.000</h3></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas3.gif"/></li>
                                        <li><p>ELECTRA</p></li>
                                        <li><h3>Rp 95.000</h3></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas4.gif"/></li>
                                        <li><p>FLOWER</p></li>
                                        <li><h3>Rp 260.000</h3></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas9.gif"/></li>
                                        <li><p>BUCKET DRAWSTRING</p></li>
                                        <li><h3>Rp 90.000</h3></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas6.gif"/></li>
                                        <li><p>ELLSIE</p></li>
                                        <li><h3>Rp 90.000</h3></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas7.gif"/></li>
                                        <li><p>STRIPE SPEEDY</p></li>
                                        <li><h3>Rp 75.000</h3></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas2.gif"/></li>
                                        <li><p>BOTTEGA CABAG</p></li>
                                        <li><h3>Rp 250.000</h3></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li><img src="<?php include('../elemen/url.php'); ?>image/home/tas1.gif"/></li>
                                        <li><p>FASHION</p></li>
                                        <li><h3>Rp 210.000</h3></li>
                                    </ul>
                                </td>
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
