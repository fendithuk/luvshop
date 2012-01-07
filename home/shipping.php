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

            <?php include('../elemen/header_login.php'); ?>



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
                                height: 175px;
                                width: 552px;
                            }
                            .submenu_right .list_shipping
                            {
                                position: absolute;
                                margin-top: -164px;
                                margin-left: 23px;

                            }
                            .submenu_right .list_shipping p
                            {
                                font-size: 12px;
                                color: #1f282d;
                                font-family: sans-serif;
                                text-align: left;
                                margin-bottom: 5px;
                            }
                            .submenu_right .list_shipping li
                            {
                                font-size: 11px;
                                list-style: none;
                                font-family: sans-serif;
                                color: #1f282d;
                                margin-bottom: 5px;
                            }
                        </style>
                        <img src="<?php include('../elemen/url.php'); ?>image/home/keramik.gif"/>
                        <div class="list_shipping">
                            <p>Semua pengiriman ACE BOUTIQUE menggunakan jasa pengiriman TIKI.<br/>Tarif kirim dapat dilihat dari YOGYAKARTA ke KOTA-KOTA lain.<br/>keterangan : </p>
                            <ol>
                                <li style="margin-left: 0px">1.Estimasi berat 1 kg = 1-2 bags.<br/>untuk tas besar minimal 2kg (dihitung volume) </li>
                                <li style="margin-left: 0px">2.Segera setelah barang dikirim, kami akan memberikan <br/> nomer resi TIKI agar informasi status pengiriman dapat <br/> dicek secara online di http://www.tiki-online.com</li>
                                <li style="margin-left: 0px">3.Jadwal pengiriman JNE oleh LuvShop boutique dilakukan <br/> setiap hari (senin-jumat, kecuali hari libur) dengan syarat,<br/>payment sebelum jam 13.00 WIB.</li>
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
