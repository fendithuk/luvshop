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

            <div class="header">
                <style>
                    .header img
                    {
                        height: 160px;
                        width: 370px;
                        position: absolute;
                        margin-top: -20px;
                        margin-left: -10px;
                    }
                    .header .home_img
                    {

                        height: 270px;
                        width: 670px;
                        position: absolute;
                        margin-top: 140px;
                        margin-left: 60px;
                        padding: 8px;
                        background-image: url('<?php include('../elemen/url.php'); ?>image/backgroundBanner.jpg');
                        box-shadow:  0px 0px 20px 20px #E1E1E0;
                        opacity: 0.8;
                    }

                    .header .home_img ul
                    {
                        margin: 0;
                        padding: 0;

                    }

                    .header .home_img ul li
                    {
                        list-style: none;
                    }


                    .header .home_img table
                    {
                        margin: 0 0 0 285px;
                        padding: 0;
                    }
                    .header .home_img table tr
                    {
                        margin: 0;
                        padding: 0;
                    }
                    .header .home_img table tr td
                    {
                        margin: 0;
                        padding: 0;
                        z-index: -10
                    }
                    .header .home_img #img1
                    {
                        height: 210px;
                        width: 300px;
                        position: absolute;
                        padding-top: 10px;
                        margin-left: -10px;
                        box-shadow: 0px 25px 10px -20px #51514f;
                        -webkit-box-shadow: 0px 25px 10px -20px #51514f;
                        -moz-box-shadow: 0px 25px 10px -20px #51514f;
                        -o-box-shadow: 0px 25px 10px -20px #51514f;

                        border-bottom-right-radius: 25px;
                        -webkit-border-bottom-right-radius: 25px;
                        -moz-border-bottom-right-radius: 25px;
                        -o-border-bottom-right-radius: 25px;

                        border-bottom-left-radius: 25px;
                        -webkit-border-bottom-left-radius: 25px;
                        -moz-border-bottom-left-radius: 25px;
                        -o-border-bottom-left-radius: 25px;
                    }

                    .header .home_img #img2
                    {
                        position: absolute;
                        height: 100px;
                        width: 120px;
                        padding-top: 10px;
                        margin-left: 10px;
                        border-radius: 10px;
                        -webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        -o-border-radius: 10px;

                        box-shadow: 0px 15px 10px -10px #51514f;
                        -webkit-box-shadow: 0px 15px 10px -10px #51514f;
                        -moz-box-shadow: 0px 15px 10px -10px #51514f;
                        -o-box-shadow: 0px 15px 10px -10px #51514f;



                    }
                    .header .home_img #img3
                    {
                        position: absolute;
                        height: 100px;
                        width: 120px;
                        padding-top: 120px;
                        margin-left: 12px;
                        -webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        -o-border-radius: 10px;

                        box-shadow: 0px 15px 10px -10px #51514f;
                        -webkit-box-shadow: 0px 15px 10px -10px #51514f;
                        -moz-box-shadow: 0px 15px 10px -10px #51514f;
                        -o-box-shadow: 0px 15px 10px -10px #51514f;
                    }
                    .header .home_img #img4
                    {
                        position: absolute;
                        height: 100px;
                        width: 120px;
                        padding-top: 12px;
                        padding-left: 150px;
                        -webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        -o-border-radius: 10px;
                    }
                    .header .home_img #img4_shadow
                    {
                        position: absolute;
                        height: 100px;
                        width: 50px;
                        padding-top: 12px;
                        padding-left: 150px;
                        -webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        -o-border-radius: 10px;


                        box-shadow: 110px 49px 10px -44px #51514F;
                        /*                        -webkit-box-shadow: 110px 55px 10px -50px #51514f;
                                                -moz-box-shadow: 110px 55px 10px -50px #51514f;
                                                -o-box-shadow: 110px 55px 10px -50px #51514f;*/
                    }
                    .header .home_img #img5
                    {
                        position: absolute;
                        height: 100px;
                        width: 120px;
                        padding-top: 120px;
                        padding-left: 150px;
                        -webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        -o-border-radius: 10px;

                        box-shadow: 75px 85px 10px -80px #51514f;
                        -webkit-box-shadow: 75px 85px 10px -80px #51514f;
                        -moz-box-shadow: 75px 85px 10px -80px #51514f;
                        -o-box-shadow: 75px 85px 10px -80px #51514f;
                    }
                    .header .home_img .menu_img
                    {
                        position: absolute;
                        margin-top: 229px;
                        margin-left: 5px;
                        padding: 0;
                        width: 720px;
                    }
                    .header .home_img .menu_img img
                    {
                        height: 57px;
                        width: 167px;
                        border-radius: 8px;
                        -webkit-border-radius: 8px;
                        -moz-border-radius: 8px;
                        -o-border-radius: 8px;

                        box-shadow: 0 16px 10px -10px #51514F;
                        -webkit-box-shadow: 0 16px 10px -10px #51514F;
                        -moz-box-shadow: 0 16px 10px -10px #51514F;
                        -o-box-shadow: 0 16px 10px -10px #51514F;
                    }
                    .header .ym
                    {
                        border: 1px solid black;
                        float: right;
                        width: 114px;
                        height: 197px;
                        /*                        text-align: center;*/
                    }
                    .logreg
                    {
                        height: 100px;
                        width: 385px;

                        float: right;
                        margin-right: 30px;
                        padding: 10px;
                        margin-top: 16px;
                    }
                    .logreg table
                    {
                        margin: 0;
                        padding: 0;
                    }
                    .logreg table td
                    {
                        width: auto;
                    }
                    .logreg input
                    {
                        outline: none;
                        border: none;
                        width: 148px;
                        margin-right: 3px;
                    }
                    .logreg label
                    {
                        color: #065dff;
                        font-size: 13px;
                    }
                    .logreg ul
                    {
                        margin: 9px 0 0 0;
                        padding: 0;
                    }
                    .logreg ul li
                    {
                        list-style: none;
                        display: inline-block;
                    }
                    .logreg a
                    {
                        color: #ff0901;
                        font-size: 13px;
                        text-decoration: underline;
                    }
                    .logreg img
                    {
                        height: 39px;
                        width: 97px;
                        margin-top: -26px;
                        margin-left: 0px;

                    }
                    .header .member
                    {
                       
                        height: auto;
                        width: auto;
                        float: right;
                        margin-top: 20px;
                        margin-right: 50px;
                    }
                    .header .member p
                    {
                        font-size: 12px;
                        margin: 0 10px 0 0;
                        padding: 0;
                        color: #3496dd;
                    }
                    .header .member img
                    {
                        height: 50px;
                        width: 50px;
                        position: relative;
                    }
                    
                </style>
                <img src="<?php include('../elemen/url.php'); ?>image/logo.png"/>
                <div class="member">
                    <table>
                        <tr>
                            <td><p>Hi, Shinta</p></td>
                            <td><img src="<?php include ('../elemen/url.php'); ?>image/signout.gif"/></td>
                        </tr>
                    </table>
                    
                    
                </div>

                <div class="home_img">
                    <style>
                        .home_img .judul_worktime
                        {
                            padding: 0;
                            position: absolute;
                            color: #054582;
                            font-weight: bold;
                            font-size: 13px;
                            margin-left: 136px;
                            margin-top: 45px;
                            text-align: center
                        }
                    </style>
                    <ul>
                        <li>
                            <img src="<?php include('../elemen/url.php'); ?>image/workTime.gif" id="img1"/>
                            <h3 class="judul_worktime">WORK TIME<br/>09.00 AM-09.00 PM</h3>
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><img src="<?php include('../elemen/url.php'); ?>image/order.gif" id="img2"/></td>
                                    <td><img src="<?php include('../elemen/url.php'); ?>image/shiping.gif" id="img3"/></td>
                                </tr>
                                <tr>
                                    <td><img src="" id="img4_shadow"/><img src="<?php include('../elemen/url.php'); ?>image/condition.gif" id="img4"/></td>
                                    <td><img src="<?php include('../elemen/url.php'); ?>image/paymen.gif" id="img5"/></td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <div class="ym">
                                shinta
                            </div>
                        </li>
                    </ul>

                    <table class="menu_img">
                        <tr>
                            <td><img src="<?php include('../elemen/url.php'); ?>image/fb.gif"/></td>
                            <td><img src="<?php include('../elemen/url.php'); ?>image/sms.gif" style="margin-left: -20px;"/></td>
                            <td><img src="<?php include('../elemen/url.php'); ?>image/pin.gif" style="margin-left: -30px;"/></td>
                            <td><img src="<?php include('../elemen/url.php'); ?>image/sms2.gif" style="margin-left: -39px;"/></td>
                        </tr>
                    </table>

                </div>
            </div>



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
