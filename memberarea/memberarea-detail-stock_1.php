<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/jquery.mCustomScrollbar.css"/>
<!--        <script type="text/javascript" src="<?php // include('elemen/url.php');      ?>js/jquery.tools.min.js"></script>-->
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.min.js"></script>
        <script src="<?php include ('../elemen/url.php'); ?>js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="<?php include('../elemen/url.php'); ?>js/addcart.js"></script>
    </head>
    <body>
        <div class="wrap"> <!--start wrap-->

            <?php include('../elemen/header_memberarea.php'); ?>



            <div class="content">
                <?php include('../elemen/content_left.php'); ?>
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
                               height: 315px;
                                width: 266px;
                                position: absolute;
                                margin-top: -281px;
                                margin-left: 11px;
                                
                            }
                            .submenu_right #img_utama_tk1
                            {
                                height: 315px;
                                width: 266px;
                                position: absolute;
                                margin-top: -281px;
                                margin-left: 11px;
                                display: none
                            }
                            .submenu_right #img_utama_tk2
                            {
                                height: 315px;
                                width: 266px;
                                position: absolute;
                                margin-top: -281px;
                                margin-left: 11px;
                                display: none
                            }
                            .submenu_right #img_utama_tk3
                            {
                               height: 315px;
                                width: 266px;
                                position: absolute;
                                margin-top: -281px;
                                margin-left: 11px;
                                display: none
                            }
                            .submenu_right #img_utama_tk4
                            {
                               height: 315px;
                                width: 266px;
                                position: absolute;
                                margin-top: -281px;
                                margin-left: 11px;
                                display: none
                            }
                            .submenu_right #img_utama_tk5
                            {
                                height: 315px;
                                width: 266px;
                                position: absolute;
                                margin-top: -281px;
                                margin-left: 11px;
                                display: none
                            }
                            .submenu_right #img_utama_tk6
                            {
                                height: 315px;
                                width: 266px;
                                position: absolute;
                                margin-top: -281px;
                                margin-left: 11px;
                                display: none
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
                                opacity: 0.5;
                                /*                                position: absolute*/
                            }
                            img#img_utama_shadow
                            {
                                height: 356px;
                                width: 319px;
                                position: absolute;
                                margin-top: -306px;
                                margin-left: -15px;
                                display: none;
                            }
                        </style>
                        
                        <ul style="list-style: none">
                            <li style="display: inline-block">
                                <img src="<?php include('../elemen/url.php'); ?>image/home/tas5.gif"  id="img_utama"/>
                                <img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil1.gif"  id="img_utama_tk1"/>
                                <img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil2.gif"  id="img_utama_tk2"/>
                                <img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil3.gif"  id="img_utama_tk3"/>
                                <img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil4.gif"  id="img_utama_tk4"/>
                                <img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil5.gif"  id="img_utama_tk5"/>
                                <img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil6.gif"  id="img_utama_tk6"/>
                            </li>
                            <li style="display: inline-block"><img src="<?php include('../elemen/url.php'); ?>image/home/tas5.gif" id="img_utama_shadow"/></li>
                            <li style="display: inline-block;margin-left: 288px">
                                <ul style="margin-top: 10px">
                                    <li>
                                        <table>
                                            <tr>
                                                <td><img  src="<?php include('../elemen/url.php'); ?>image/stock/taskecil1.gif" class="img_kedua" id="tk1"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil2.gif" class="img_kedua" id="tk2"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil3.gif" class="img_kedua" id="tk3"/></td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil4.gif" class="img_kedua" id="tk4"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil5.gif" class="img_kedua" id="tk5"/></td>
                                                <td><img src="<?php include('../elemen/url.php'); ?>image/stock/taskecil6.gif" class="img_kedua" id="tk6"/></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li>
                                        <ul style="margin-top: 70px; position: static">
                                            <li><h style="color: #960316;margin-bottom: 10px;" id="list_harga_barang">Rp.95.000</h1></li>
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
                                                <li>
                                                    <p style="text-align: left;font-size: 10px; margin-top: 5px; display: none;position: absolute" id="confirmasi">
                                                        Available Pre Order<br/>*waktu pembuatan 2 minggu dari tanggal<br/>Confirmation of Payment
                                                    </p>
                                                </li>
                                                <li><img src="<?php include('../elemen/url.php'); ?>image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer" class="addcart"/></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul style="margin-left: 24px;margin-top: 40px;">
                                    <li><p style="text-align: left; font-weight: bold" id="list_nama_barang">VENTAGO</p></li>
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
