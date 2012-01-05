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
        div#cartfadein a p#showcart
        {
            margin-top: 83px;
            color: #FD81AB;
        }
        
    </style>
    
    <img src="<?php include('url.php'); ?>image/cart.gif" class="img_cart" />
    <p class="p_cart">My Cart</p>
    <br/>
    <br/>
    
    <div id="cartfadein">
        <table>
            <tr>
                <td><p>ventago</p></td>
                <td><p>IDR 95.000</p></td>
            </tr>
        </table>
        <hr/>
        <table>
            <tr>
                <td><p>Total</p></td>
                <td><p>IDR 95.000</p></td>
            </tr>
        </table>
        <a href="<?php include('url.php'); ?>memberarea/memberarea-check-out.php"><p id="showcart">SHOW CART</p></a>
    </div>
    
    <p style="font-size: 13px;margin-top: 69px" id="cartempty">Your Cart is Empty</p>
    
</div>