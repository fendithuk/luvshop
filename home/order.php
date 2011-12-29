<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('../elemen/url.php'); ?>css/reset.css"/>
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
/*                            background-color: #656565;*/
/*                            border-radius: 5px;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            -o-border-radius: 5px; */
                            text-align: center
                        }

                    </style>
                    <ul>
                        <li style="background-image: url('<?php include('../elemen/url.php'); ?>image/menu.jpg');" id="lili">
                            <ul style="margin: 0;padding: 0;list-style: none">
                                <li style="border-bottom: 1px solid black;height: 20px">Main Menu</li>
                                <li class="background_menu"><a href="#" style="color: #f08cca;position: absolute; margin-left: -75px; width: 149px;">Home</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">My Account</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Progress</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Shipment</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Confirmation of Payments</a></li>
                            </ul>
                        </li>
                        <li style="background-image: url('<?php include('../elemen/url.php'); ?>image/menu.jpg');" id="lili">

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
                    <div class="submenu_right" style="padding: 15px">
                        <style>
                            .submenu_right img
                            {
                                height: 362px;
                                width: 552px;
                            }
                            .submenu_right .list_order
                            {
                                position: absolute;
                                margin-top: -302px;
                                margin-left: 244px;
                                
                            }
                            .submenu_right .list_order p
                            {
                                font-size: 10px;
                                color: #1f282d;
                                font-family: sans-serif;
                                text-align: left
                            }
                            .submenu_right .list_order li
                            {
                                font-size: 8px;
                                list-style: decimal;
                                font-family: sans-serif;
                                color: #1f282d;
                            }
                        </style>
                        <img src="<?php include('../elemen/url.php'); ?>image/home/girl1.gif" />
                        <div class="list_order">
                            <p>
                                How to Order ?
                            </p>
                            <br/>
                            <p>
                                Buat Account Baru
                            </p>
                            <br/>
                            <ol>
                                <li>Klik tulisan "Sign Up!" dikanan atas, isi data, tekan tombol Register.</li>
                                <li>Cek email kalian, cari email activation link dari LuvShop boutique.<br/>buka dan klik link yang ada, Kini kalian bisa login diwebsite kami. </li>
                            </ol>
                            <br/>
                            <p>
                                cara ORDER
                            </p>
                            <br/>
                            <ol>
                                <li>Login.</li>
                                <li>Pilih barang yang ingin dipesan.</li>
                                <li>Tekan tombol add to cart pada barang yang ingin dipesan.</li>
                                <li>Jika sudah selesai memilih barang2 yang ingin dipesan, <br/> klik tulisan "show cart" pada kotak Your Cart</li>
                                <li>Klik tulisan "Checkout".</li>
                                <li>Isi data Shipping Information.</li>
                                <li>Tekan tombol next.</li>
                                <li>Cek kembali data orderan kalian, jika sudah betul,<br/> tekan tombol Confirm Order.</li>
                                <li>Untuk melihat data orderan yang pernah kalian buat, <br/>cari menu My account yang ada didalam main menu.</li>
                            </ol>
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
