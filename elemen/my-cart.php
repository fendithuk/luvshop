<div class="mycart">
    <style>
        .mycart
        {
            margin: 0;
            padding: 0;

        }
        .mycart .img_cart
        {
            height: 30px;
            width: 30px;
            float: left;
            margin-left: 10px;
        }
        .mycart .p_cart
        {
            text-decoration: underline;
            float: left;
            margin-top: 10px;
            margin-left: 5px;
        }
        div#cartfadein
        {
            display: none;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            opacity: 0.5;
            
        }
        div#cartfadein table
        {
            margin: 0;
            padding: 0;
        }

        div#cartfadein table tr
        {
            margin: 0;
            padding: 0;
        }
        div#cartfadein table tr td
        {

            width: 83px
        }
        div#cartfadein table tr td p
        {
            text-align: center;
            font-size: 12px;
        }
        a p#showcart
        {
            display: none;
        }

    </style>

    <img src="<?php include('url.php'); ?>image/cart.gif" class="img_cart" />
    <p class="p_cart">My Cart</p>
    <br/>
    <br/>


    <!-- content block -->
    <div id="mcs_container" style="position: absolute">
        <div class="customScrollBox">
            <div class="container">
                <div class="content">
                    <h1>Adjustable scroller height with easing</h1>
				<p><a href="#" onclick="LoadNewContent('mcs_container','dynamic_content.html');return false">Load new content dynamically</a></p>
            	<p style="color:#C96;">Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. </p>
            	<p class="alt"><em>consectetur adipiscing elit. Nulla consectetur libero consectetur quam consequat nec tincidunt massa feugiat. Donec egestas mi turpis. Fusce adipiscing dui eu metus gravida vel facilisis ligula iaculis. Cras a rhoncus massa. Donec sed purus eget nunc placerat consequat.</em></p>
            	<img src="mcsImg1.jpg" />
            	<p>Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. Cras venenatis condimentum nibh a mollis. Duis id sapien nibh. Vivamus porttitor, felis quis blandit tincidunt, erat magna scelerisque urna, a faucibus erat nisl eget nisl. Aliquam consequat turpis id velit egestas a posuere orci semper. Mauris suscipit erat quis urna adipiscing ultricies. In hac habitasse platea dictumst. Nulla scelerisque lorem quis dui sagittis egestas.</p> 
                <p class="alt">Etiam sed massa felis, aliquam pellentesque est. Quisque quis ante tortor, sed egestas risus. Maecenas varius adipiscing nulla, nec rhoncus est mattis id. Aenean blandit convallis nisi at fringilla. Nunc id massa eu sapien fringilla posuere.</p>
            	<img src="mcsImg2.jpg" />
            	<p style="color:#C96;">Nam eu arcu at purus tincidunt pharetra ultrices at ipsum. Mauris urna nunc, vulputate quis gravida in, pharetra id mauris. Ut sit amet mi dictum nulla lobortis adipiscing quis a nulla. Etiam diam ante, imperdiet vel scelerisque eget, venenatis non eros. Praesent ipsum sem, eleifend ut gravida eget, tristique id orci. Nam adipiscing, sem in mattis vulputate, risus libero adipiscing risus, eu molestie mi justo eget nulla.</p> 
                <p>Cras venenatis metus et urna egestas non laoreet orci rutrum. Pellentesque ullamcorper dictum nisl a tincidunt. Quisque et lacus quam, sed hendrerit mi. Mauris pretium, sapien et malesuada pulvinar, lorem leo viverra leo, et egestas mi nisl quis odio. </p>
                <p>Aliquam erat volutpat. Sed urna arcu, tempus eu vulputate adipiscing, consectetur et orci. Vivamus congue, nunc vitae fringilla convallis, libero massa lacinia lorem, id convallis mauris elit ut leo. Nulla vel odio sem. Duis lorem urna, congue vitae rutrum sed, tincidunt vel tortor. In hac habitasse platea dictumst. Nunc vitae enim ante, vitae facilisis massa. Etiam sagittis sapien at nibh fermentum consectetur convallis lacus blandit.</p>
            	<h1>the end.</h1>

<!--                    <div id="cartfadein">
                        <table>
                            <tr>
                                <td id="nama_barang"></td>
                                <td id="harga_barang"></td>
                            </tr>
                        </table>
                        <hr/>
                        <table>
                            <tr>
                                <td><p>Total</p></td>
                                <td><p>IDR 95.000</p></td>
                            </tr>
                        </table>
                    </div>-->
                    
                </div>
            </div>
            <div class="dragger_container">
                <div class="dragger"></div>
            </div>
        </div>
        <a href="#" class="scrollUpBtn"></a> <a href="#" class="scrollDownBtn"></a>
    </div>

    <!-- content to show if javascript is disabled -->
    <noscript>
    <style type="text/css">
        #mcs_container .customScrollBox{overflow:auto;}
        #mcs_container .dragger_container{display:none;}
    </style>
    </noscript>

    <script>
        $(window).load(function() {
            mCustomScrollbars();
        });

        function mCustomScrollbars(){
            /* 
            malihu custom scrollbar function parameters: 
            1) scroll type (values: "vertical" or "horizontal")
            2) scroll easing amount (0 for no easing) 
            3) scroll easing type 
            4) extra bottom scrolling space for vertical scroll type only (minimum value: 1)
            5) scrollbar height/width adjustment (values: "auto" or "fixed")
            6) mouse-wheel support (values: "yes" or "no")
            7) scrolling via buttons support (values: "yes" or "no")
            8) buttons scrolling speed (values: 1-20, 1 being the slowest)
             */
            $("#mcs_container").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 
        }

        /* function to fix the -10000 pixel limit of jquery.animate */
        $.fx.prototype.cur = function(){
            if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {
                return this.elem[ this.prop ];
            }
            var r = parseFloat( jQuery.css( this.elem, this.prop ) );
            return typeof r == 'undefined' ? 0 : r;
        }

        /* function to load new content dynamically */
        function LoadNewContent(id,file){
            $("#"+id+" .customScrollBox .content").load(file,function(){
                mCustomScrollbars();
            });
        }
    </script>


    <script type="text/javascript" src="<?php include('url.php'); ?>js/jquery.mCustomScrollbar.js"></script>

<a href="<?php include('url.php'); ?>memberarea/memberarea-check-out.php"><p id="showcart">SHOW CART</p></a>
    <!--    <div id="cartfadein">
            <table>
                <tr>
                    <td id="nama_barang"></td>
                    <td id="harga_barang"></td>
                </tr>
            </table>
            <hr/>
            <table>
                <tr>
                    <td><p>Total</p></td>
                    <td><p>IDR 95.000</p></td>
                </tr>
            </table>
            <a href="<?php //include('url.php');   ?>memberarea/memberarea-check-out.php"><p id="showcart">SHOW CART</p></a>
        </div>-->

    <p style="font-size: 13px;margin-top: 69px" id="cartempty">Your Cart is Empty</p>

</div>