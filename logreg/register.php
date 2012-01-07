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
                $("li#home").removeClass("background_menu").css({
                    
                    "margin-top":"20px",
                    "margin-bottom":"10px"
                    });
                
                
                });
        </script>
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

            z-index: 1;

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

            z-index: -1;
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
            height: 21px;
            width: 60px;
            margin-top: -16px;
            margin-left: 0px;

        }
    </style>
    <img src="<?php include('../elemen/url.php'); ?>image/logo.png"/>
    <div class="logreg">
        <form>
            <table>

                <tr>
                    <td><label>Username</label></td>
                    <td><label>Password</label></td>
                    <td></td>
                </tr>
                <tr>
                    <td><br/></td>
                </tr>
                <tr>
                    <td><input/></td>
                    <td><input/></td>
                    <td><a href=""><img src="<?php include('../elemen/url.php'); ?>image/login.gif"/></a></td>
                </tr>

            </table>
        </form>

        <ul>
            <li><a href="">Forgot your username or password ?</a></li>
            <li><a href="<?php include('../elemen/url.php'); ?>logreg/register.php" style="color: black">Sign Up!</a></li>
        </ul>
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
                        <td><a href="<?php include('../elemen/url.php'); ?>home/order.php"><img src="<?php include('../elemen/url.php'); ?>image/order.gif" id="img2"/></a></td>
                        <td><a href="<?php include('../elemen/url.php'); ?>home/shipping.php"><img src="<?php include('../elemen/url.php'); ?>image/shiping.gif" id="img3"/></a></td>
                    </tr>
                    <tr>
                        <td><a href="<?php include('../elemen/url.php'); ?>home/condition.php"><img src="" id="img4_shadow"/><img src="<?php include('../elemen/url.php'); ?>image/condition.gif" id="img4"/></a></td>
                        <td><a href="<?php include('../elemen/url.php'); ?>home/payment.php"><img src="<?php include('../elemen/url.php'); ?>image/paymen.gif" id="img5"/></a></td>
                    </tr>
                </table>
            </li>
            <li>
                <div class="ym">
                    shinta
                </div>
            </li>
        </ul>
        <script type="text/javascript">
            $("#img2").mouseover(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "3px",
                    "margin-left": "3px"
                });
            });
            $("#img2").mouseout(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "10px",
                    "margin-left": "10px"
                });
            });
            $("#img3").mouseover(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "127px",
                    "margin-left": "5px"
                });
            });
            $("#img3").mouseout(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "120px",
                    "margin-left": "12px"
                });
            });
            $("#img4").mouseover(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "5px",
                    "margin-left": "0px"
                });
                $("#img4_shadow").css({
                    "height":"100px",
                    "width":"50px",
                    "padding-top":"5px",
                    "margin-left":"0px"
                });
            });
            $("#img4").mouseout(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "12px",
                    "margin-left": "-10px"
                });
                $("#img4_shadow").css({
                    "height":"100px",
                    "width":"50px",
                    "padding-top":"12px",
                    "margin-left":"-10px"
                });
            });
            $("#img5").mouseover(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "127px",
                    "margin-left": "0px"
                });
            });
            $("#img5").mouseout(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "120px",
                    "margin-left": "-10px"
                });
            });
        </script>
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
                        <li style="background-image: url('<?php include('../elemen/url.php'); ?>image/menu.jpg');margin-top: 30px" id="lili" >
                            <?php include('../elemen/my-cart.php'); ?>
                        </li>
                        <li style="text-align: center;margin-top: 30px ">
                            <img src="<?php include('../elemen/url.php'); ?>image/bni.gif"/><br/><p>0201226431<br/>Siska Pratiwi</p>
                            <img src="<?php include('../elemen/url.php'); ?>image/mandiri.gif" style="margin-top: 20px"/><p>149004914372<br/>Sheli Rosita</p>
                            <img src="<?php include('../elemen/url.php'); ?>image/tiki.gif" style="margin-top: 20px"/>
                        </li>
                    </ul>
                </div>
                <div class="content_right">
                    <style>
                        .content_right .register
                        {
                            border: 1px solid #cbcbcb;
                            padding: 20px;
                            border-radius: 20px;
                            -webkit-border-radius: 20px;
                            -moz-border-radius: 20px;
                            -o-border-radius: 20px;
                            margin-top: -10px;
                        }
                        .content_right .register h3
                        {
                            margin-bottom: 10px;
                            color: #050505;
                        }
                        .content_right .register table
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .register table label
                        {
                            color: #0c0c0c;
                        }
                        .content_right .register table tr td input
                        {
                            margin: 0 0 5px 0;
                            padding: 0;
                        }
                        .content_right .register form
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .register img
                        {
                            float: right;
                            height: 50px;
                            width: 61px;
                            margin-top: -10px;
                        }

                    </style>
                    <div class="register">
                        <style type="text/css">
                            .register h3
                            {
                                font-weight: bold;
                                font-family: sans-serif;
                                font-size: 13px;
                                color: #070707;
                            }
                            .register label
                            {
                                font-family: sans-serif;
                                font-size: 12px;
                                color: #000000;
                            }
                            .register input
                            {
                                border: 1px solid #9cb2c9;
                            }
                            .register select
                            {
                                background-color: white;
                                outline: none;
                                border: 1px solid #9cb2c9;
                                margin-bottom: 5px;
                                width: 124px;

                            }
                            .register button
                            {

                                float: right;
                                height: auto;
                                width: 58px;
                                border-radius: 10px;
                                background-color: #d6e7ff;
                                color: #001136;
                                padding: 5px;
                                font-weight: bold;
                                font-size: 12px;
                            }
                        </style>
                        <h3>Registration</h3>
                        <form>
                            <table>
                                <tr>
                                    <td><label>Name:</label></td>
                                    <td><input/></td>
                                </tr>
                                <tr>
                                    <td><label>Address:</label></td>
                                    <td><input/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <label>District/City:</label>
                                        <select>
                                            <option value="" >

                                            </option>
                                        </select>
<!--                                        <img src="<?php include('../elemen/url.php'); ?>image/tandabawah.gif" style="height: 20px; width: 20px;position: absolute;margin-left: -20px;margin-top: 0px;"/>-->
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <label style="margin-right: 18px">Province:</label>
                                        <select>
                                            <option value="">

                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Email:</label></td>
                                    <td><input/></td>
                                </tr>
                                <tr>
                                    <td><label>Telp:</label></td>
                                    <td><input/></td>
                                </tr>
                                <tr>
                                    <td><label>Username</label></td>
                                    <td><input/></td>
                                </tr>
                                <tr>
                                    <td><label>Password</label></td>
                                    <td><input/></td>
                                </tr>
                                <tr>
                                    <td><label>Verify Password:</label></td>
                                    <td><input/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button>Register</button></td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include('../elemen/footer.php');
            ?>
        </div> <!--end wrap-->

    </body>
</html>
