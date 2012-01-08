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

            margin: 149px 0 -168px 0;
            padding: 0;
        }
        .content_left #lili a
        {
            color: #ffb3cd;
        }

    </style>
    <ul>
        <li style="background-image: url('<?php include('url.php'); ?>image/menu.jpg');" id="lili">
            <?php include('list_menu.php'); ?>
        </li>
        <li style="background-image: url('<?php include('url.php'); ?>image/menu.jpg');margin-top: 30px;" id="lili" >
            <?php include('my-cart.php'); ?>
        </li>
        <li style="text-align: center;margin-top: 30px ">
            <img src="<?php include('url.php'); ?>image/bni.gif"/><br/><p>0201226431<br/>Siska Pratiwi</p>
            <img src="<?php include('url.php'); ?>image/mandiri.gif" style="margin-top: 20px"/><p>149004914372<br/>Sheli Rosita</p>
            <img src="<?php include('url.php'); ?>image/tiki.gif" style="margin-top: 20px"/>
        </li>
    </ul>
</div>