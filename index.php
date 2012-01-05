<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php include('elemen/url.php'); ?>css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include('elemen/url.php'); ?>css/reset.css"/>
        <script type="text/javascript" src="<?php include('elemen/url.php'); ?>js/jquery.tools.min.js"></script>
    </head>
    <body>
        <div class="wrap"> <!--start wrap-->
            <?php
            include('elemen/header_login.php');
            ?>
            <div class="content">
                <?php
                    include('elemen/content_left.php');
                ?>
                <?php
                    include('elemen/content_right.php');
                ?>
            </div>
            <?php
            include('elemen/footer.php');
            ?>
        </div> <!--end wrap-->

    </body>
</html>
