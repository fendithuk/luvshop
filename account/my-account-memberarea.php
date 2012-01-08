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
                    "margin-bottom":"-10px",
                    "margin-top":"20px"
                });
                
                $("li#account").addClass("background_menu").css({
                    "padding-top":"3px",
                    "height":"22px"
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


                    </style>
                    <ul>
                        <li style="background-image: url('<?php include('../elemen/url.php'); ?>image/menu.jpg');" id="lili">
                            <?php include('../elemen/list_menu_memberarea.php'); ?>
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
                        }
                        .content_right .submenu_right .img_sort img
                        {
                            margin-bottom: 10px;
                            margin-right: 44px;
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
                            width: 41px;
                            margin-bottom: 4px;
                        }
                        .content_right .submenu_right .img_sort hr
                        {
                            width: 292px;
                            margin-left: 116px;
                            border: 1px solid #3473ba;
                            position: absolute;
                            margin-top: 33px;
                        }

                    </style>
                    <div class="submenu_right">
                        <style>
                            .submenu_right input
                            {
                                border: 1px solid #8ea8c1;
                                margin-bottom: 5px;
                            }

                        </style>
                        <form>
                            <table>
                                <tr>
                                    <td><h3 style="color: black; font-size: 12px;font-weight: bold; float: left">My Account</h3></td>
                                </tr>
                                <tr>
                                    <td><label>Name : </label></td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td><label>Address : </label></td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <label style="margin-right: 6px">District/City : </label>
                                        <select style="background-color: white; margin-bottom: 5px;border: 1px solid #8ea8c1;">
                                            <option style="width: 90px;">

                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <label style="margin-right: 25px;">Province : </label>
                                        <select style="background-color: white; margin-bottom: 5px;border: 1px solid #8ea8c1;">
                                            <option style="width: 90px; ">

                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email : </td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td>Telp : </td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="Edit" style="border-radius: 5px;background-color: white;float: right"/>
                                        <input type="submit" value="Save" style="border-radius: 5px; background-color: white;float: right"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <style>
                            .submenu_right table.table_on
                            {
                                margin-top: 20px
                            }
                            .submenu_right table.table_on tr
                            {
                                border: 1px solid black
                            }

                            .submenu_right table.table_on tr td
                            {
                                border: 1px solid black;
                                height: 20px;
                                width: 131px;
                                text-align: center
                            }
                        </style>
                        <table class="table_on">
                            <tr>
                                <td>Number of Purchase</td>
                                <td>The Date of Booking</td>
                                <td>Product</td>
                                <td>Quantity</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
