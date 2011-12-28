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
            <?php
            include('../elemen/header_login.php');
            ?>
            
            <div class="content">
                <?php
                    include('../elemen/content_left.php');
                ?>
                <div class="content_right">
                    <style>
                        .content_right .submenu_right
                        {
                            border: 1px solid black;
                            padding: 10px;
                            margin-top: -10px;
                            border-radius: 30px;
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
