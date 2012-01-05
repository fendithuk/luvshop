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
                        <li style="background-image: url('<?php include('url.php'); ?>image/menu.jpg');" id="lili">
                            <ul style="margin: 0;padding: 0;list-style: none">
                                <li style="border-bottom: 1px solid black;height: 20px">Main Menu</li>
                                <li class="background_menu"><a href="#" style="color: #f08cca;position: absolute; margin-top: 5px;margin-left: -75px; width: 149px;padding-top: 2px;padding-bottom: 2px">Home</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">My Account</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Progress</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Shipment</a></li>
                                <li style="height: 30px"><a href="" style="color: #f08cca;">Confirmation of Payments</a></li>
                            </ul>
                        </li>
                        <li style="background-image: url('<?php include('url.php'); ?>image/menu.jpg');margin-top: 30px" id="lili" >
                            <?php include('my-cart.php'); ?>
                        </li>
                        <li style="text-align: center;margin-top: 30px ">
                            <img src="<?php include('url.php'); ?>image/bni.gif"/><br/><p>0201226431<br/>Siska Pratiwi</p>
                            <img src="<?php include('url.php'); ?>image/mandiri.gif" style="margin-top: 20px"/><p>149004914372<br/>Sheli Rosita</p>
                            <img src="<?php include('url.php'); ?>image/tiki.gif" style="margin-top: 20px"/>
                        </li>
                    </ul>
                </div>