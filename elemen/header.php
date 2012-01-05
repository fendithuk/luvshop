
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
            background-image: url('<?php include('url.php'); ?>image/backgroundBanner.jpg');
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
    <img src="<?php include('url.php'); ?>image/logo.png"/>
    <div class="home_img">
        <ul>
            <li>
                <img src="<?php include('url.php'); ?>image/workTime.gif" id="img1"/>
                <h3 class="judul_worktime">WORK TIME<br/>09.00 AM-09.00 PM</h3>
            </li>
            <li>
                <table>
                    <tr>
                        <td><a href="<?php include('url.php'); ?>home/order.php"><img src="<?php include('url.php'); ?>image/order.gif" id="img2"/></a></td>
                        <td><a href="<?php include('url.php'); ?>home/shipping.php"><img src="<?php include('url.php'); ?>image/shiping.gif" id="img3"/></a></td>
                    </tr>
                    <tr>
                        <td><a href="<?php include('url.php'); ?>home/condition.php"><img src="" id="img4_shadow"/><img src="<?php include('url.php'); ?>image/condition.gif" id="img4"/></a></td>
                        <td><a href="<?php include('url.php'); ?>home/payment.php"><img src="<?php include('url.php'); ?>image/paymen.gif" id="img5"/></a></td>
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
//                    "box-shadow": "0px 15px 10px -10px red",
//                    "-webkit-box-shadow": "0px 15px 10px -10px red",
//                    "-moz-box-shadow": "0px 15px 10px -10px red",
//                    "-o-box-shadow": "0px 15px 10px -10px red"
                });
            });
            $("#img2").mouseout(function(){
                $(this).css({
                    "height":" 100px",
                    "width": "120px",
                    "padding-top": "10px",
                    "margin-left": "10px"
//                    "box-shadow": "0px 15px 10px -10px #51514f",
//                    "-webkit-box-shadow": "0px 15px 10px -10px #51514f",
//                    "-moz-box-shadow": "0px 15px 10px -10px #51514f",
//                    "-o-box-shadow": "0px 15px 10px -10px #51514f"
                    
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
                <td><img src="<?php include('url.php'); ?>image/fb.gif"/></td>
                <td><img src="<?php include('url.php'); ?>image/sms.gif" style="margin-left: -20px;"/></td>
                <td><img src="<?php include('url.php'); ?>image/pin.gif" style="margin-left: -30px;"/></td>
                <td><img src="<?php include('url.php'); ?>image/sms2.gif" style="margin-left: -39px;"/></td>
            </tr>
        </table>

    </div>
</div>

