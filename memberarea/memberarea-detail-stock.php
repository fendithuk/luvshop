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
                            padding-top: 10px;
                            padding-bottom: 40px;
                            padding-left: 10px;
                            padding-right: 10px;
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
                        <style type="text/css">
                            .submenu_right ul
                            {
                                margin: 0;
                                padding: 0;
                            }
                            .submenu_right #img_utama
                            {
                                height: 356px;
                                width: 319px;
                                position: absolute;
                                margin-top: -306px;
                                margin-left: -10px
                            }
                            .submenu_right table
                            {
                                margin: 0;
                                padding: 0;
                                
                            }
                            .submenu_right table tr td .img_kedua
                            {
                                height: 72px;
                                width: 79px;
                                margin-right: 3px;
                            }
                        </style>
                        <ul style="list-style: none">
                            <li style="display: inline-block"><img src="<?php include('../elemen/url.php'); ?>image/home/tas5.gif" id="img_utama"/></li>
                            <li style="display: inline-block;margin-left: 288px">
                                <ul style="margin-top: 10px">
                                    <li>
                                        <table>
                                            <tr>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil1.gif" class="img_kedua"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil2.gif" class="img_kedua"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil3.gif" class="img_kedua"/></td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil4.gif" class="img_kedua"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil5.gif" class="img_kedua"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil6.gif" class="img_kedua"/></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>
                                        <ul style="margin-top: 70px; position: static">
                                            <li><h2 style="color: #960316;margin-bottom: 10px;">Rp.95.000</h2></li>
                                            <li>
                                                <p style="font-weight: bold; display: inline-block">Colour:</p>
                                                
                                                <select style="width: 102px; background-color: white;border: 1px solid #bec6d3;display: inline-block; margin-left: 12px; margin-bottom: 10px;">
                                                    <option>
                                                        
                                                    </option>
                                                </select>
                                            </li>
                                            <li>
                                                <p style="font-weight: bold; display: inline-block">Quantity:</p>
                                                <input style="border: 1px solid #bec6d3; width: 50px;"/>
                                            </li>
                                            <li><img src="<?php include('../elemen/url.php'); ?>image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;"/></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul style="margin-left: 24px;margin-top: 40px;">
                                    <li><p style="text-align: left; font-weight: bold">VENTAGO</p></li>
                                    <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                                    <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                                    <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                                    <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                                    <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                                    <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            include('../elemen/footer.php');
            ?>
        </div> <!--end wrap-->

    </body>
</html>
