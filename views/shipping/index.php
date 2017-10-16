
<style>
    .continue-cart{
        width:100%;
        background: #fff;
    }
    .continue-cart::after{
        content: "";
        display: block;
        clear: both;
    }
    .continue-cart .right{
        display: inline-block;
        float: right;
    }
    .continue-cart .left{
        display: inline-block;
        direction: rtl;
        background: #4CAF50;
        color: #fff;
        margin: 55px 0;
        padding: 10px;
    }
    .continue-cart .right p{
        font-size: 11px;
        margin: 20px 0;
        direction: rtl;
    }
    .continue-cart .right h2{
        direction: rtl;
        margin: 30px 0 5px;
    }
    .continue-cart .right h2 i{
        margin-left: 7px;
        color: #2196F3;
    }
    .cart-wrappper{
        margin:0 10px;
    }
    #cart-div{
        background: #fff;
        margin-bottom: 15px;
    }
    .go-main{
        display: inline-block;
        direction: rtl;
        background-color: #969ba8;
        color: #fff;
        margin: 55px 0;
        padding: 10px;
    }
    .reserv-alert{
        direction: rtl;
        font-size: 13px;
        color: red;
        display: inline-block;
        position: relative;
        top: -70px;
        right: -10px;
    }
</style><!--continue-cart--->
<style>
    .cart-table{
        width: 100%;
        margin-bottom: 30px;
    }
    .cart-table table{
        width: 100%;
        direction: rtl;
    }
    .cart-table table tr td{
        text-align: center;
        vertical-align: middle;
        border: 1px solid #eee;
    }
    .cart-table table tr td:first-child{
        text-align: right!important;
    }
    .cart-table table thead{
        line-height: 22px;
        background: #F7F9FA;
        text-align: center;
        font-size: 13px;
    }
    .cart-table table thead tr td{
        border: 1px solid #eee;
        padding: 10px 0;
    }
    .cart-table table thead tr td:first-child{
        text-align: center!important;
    }
    .cart-table table thead tr td:last-child{
        border-right: none;
    }
    .cart-table table thead tr td:nth-child(5){
        border-left:none;
    }
    .product-table-img{
        display: inline-block;
        float: right;
    }
    .product-table-img img{
        width: 100px;
        margin: 30px 10px;
    }
    .product-table-meta{
        display: inline-block;
        float: right;
        margin: 30px 5px;
    }
    .product-table-meta h2{
        font-size: 13px;
        width: 300px;
        line-height: 30px;
        font-weight: 800;
    }
    .product-table-meta h3{
        font-size: 10px;
        line-height: 30px;
        font-weight: 800;
    }
    .product-table-color p{
        display: inline-block;
        font-size: 11px;
        line-height: 30px;
    }
    .product-table-color .color{
        width: 18px;
        height: 18px;
        display: inline-block;
        border-radius: 100%;
        position: relative;
        top:5px;
    }
    .product-table-color span:last-child , .warranty{
        font-size: 12px;
        color: #777;
    }
    .cart-table .delete{
        border-left: 0;
        background: #ffedee;
        border-right: 0;
        color: #ed4848;
        width: 30px;
        cursor: pointer;
    }
    .unitprice{
        width: 25%;
    }
    .seperate{
        margin: 14px 0;
        border-bottom: 1px dashed #e9e9e9;
        height: 1px;
        margin-left: 15px;
    }
    .unitprice-discoount tr{
        line-height: 30px;
    }
    .unitprice-discoount tr td{
        border: none!important;
        padding-right: 15px;
        font-size: 13px;
    }
    .unitprice-discoount tr:last-child td{
        color: #00B12A;
        font-size: 21px;
    }
    .red{
        color: #ff6b6b;
    }
    .cart-table tr.gift td.last span{
        color: #ff6b6b;
        font-size: 19px;
        display: inline-block;
        margin-top: -12px;
        position: absolute;
        right: -7px;
        top: 50%;
        transform: rotate(-90deg);
        font-weight: 800;
    }
    .cart-table tr.gift td.last{
        position: relative;
    }
</style><!---cart-table--->
<style>
    .wrapper-shipping{
        background: #fff;
        height: 100px;
        padding: 20px;
    }
    .shipping{
        background-color: #fff;
        border: 1px solid #c0f0c1;
        width: 96%;
        margin: 10px auto;
        padding: 10px;
        cursor: pointer;
    }
    .shipping .right{
        float: right;
    }
    .shipping .ship-img{
        float: right;
    }
    .ship-title{
        float: right;
        direction: rtl;
        margin: 0 20px;
    }
    .ship-title h2{
        font-size: 15px;
        line-height: 25px;
    }
    .ship-title p{
        font-size: 13px;
        line-height: 25px;
        color: #777;
    }
    .shipping .left{
        line-height: 25px;
        padding-left: 40px;
    }
    .shipping .left p{
        font-size: 14px;
    }
    .shipping .left span{
        margin: 12px;
        white-space: nowrap;
        color: #4caf50;
        font-size: 17px;
    }
    .next-shipment{
        height: 70px;
        background-color: #fff;
    }
    .next-shipment-btn{
        display: inline-block;
        line-height: 30px;
        font-size: 14px;
        background-color: #3ca3f4;
        color: #fff;
        border-radius: 2px;
        padding: 5px 10px;
        margin-left: 25px;
        cursor: pointer;
    }
    .factor-pack{
        direction: rtl;
        font-size: 13px;
        padding: 15px 0;
    }
    .factor-pack i{
        float: right;
        margin-left: 10px;
        margin-top: 9px;
        color: #2396f3;
    }
    .factor-pack p{
        display: inline-block;
    }
    .factor-pack form{
        display: inline-block;
    }
    .factor-pack form span input{
        position: relative;
        top: 4px;
        right: -3px;
    }
    .factor-pack form span{
        margin-right: 10px;
    }
    .factor-message-green{
        direction: rtl;
        padding: 12px 10px;
        background: #f7fff7;
        color: #4caf50;
        border: 1px solid #c0f0c1;
        font-size: 14px;
    }
    .factor-message-brown{
        display: none;
        direction: rtl;
        padding: 12px 10px;
        background: #fffcda;
        color: #7C6A26;
        border: 1px solid #E2C868;
        font-size: 14px;
    }
    .factor-message-green i , .factor-message-brown i{
        float: right;
        margin-left: 10px;
    }
    .shipping-route{
        margin: 20px 0 60px;
    }
    .shipping-route::after{
        content: "";
        display: block;
        clear: both;
    }
    .return-cart{
        float: right;
    }
    .return-cart span{
        background-color: #969BA8;
        padding: 5px 15px;
        color: #fff;
        border-radius: 2px;
        font-size: 13px;
        cursor: pointer;
    }
    .next-step span{
        padding: 5px 15px;
        color: #fff;
        border-radius: 2px;
        font-size: 13px;
        cursor: pointer;
        background-color: #4CAF50;
    }
</style><!---shipping--->
<style>
    .address-head{
        direction: rtl;
    }
    .address-head::after{
        content: "";
        display: block;
        clear: both;
    }
    .add{
        display: inline-block;
        float: right;
        padding: 10px;
        margin: 18px 15px;
        color: #FFFFFF;
        background-color: #999!important;
        font-size: 13px;
        cursor: pointer;
        box-shadow: 0 3px 4px rgba(0,0,0,0.1);
    }
    .address-title{
        display: inline-block;
        line-height: 22px;
        padding: 5px 0;
        margin: 20px 0;
        float: right;
    }
    .address-title i{
        float: right;
        margin-left: 10px;
        color: #2396f3;
    }
    .address-title h2{
        float: right;
    }
</style><!---address-head--->
<style>
    .complete-price{
        width: 590px;
        border: 1px solid #c0f0c1;
        margin-bottom: 30px;
    }
    .complete-price::after{
        content: "";
        display: block;
        clear: both;
    }
    .price{
        height: 55px;
        line-height: 55px;
        padding: 0 40px 0 0;
        border-bottom: 1px solid #c0f0c1;
    }
    .discount{
        display: inline-block;
        text-align: center;
        float: right;
        min-width: 200px;
        font-size: 13px;
        padding: 5px;
        line-height: 20px;
        position: relative;
        top: 7px;
        direction: rtl;
    }
    .discount::after{
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 9px 0 10px 8px;
        border-color: transparent transparent transparent #fff;
        position: absolute;
        left: 5px;
        top: 11px;
    }
    .discount span:first-child{
        background: #FF7272;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }
    .discount span:last-child{
        background: #FF5252;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }
    .lable{
        display: inline-block;
        direction: rtl;
        color: #818181;
        font-size: 14px;
        width: auto;
        margin-left: 60px;
    }
    .lable-price{
        display: inline-block;
        float: left;
        direction: rtl;
        font-size: 20px;
    }
    .toman{
        font-size: 12px;
        margin: 0 15px;
    }
    .pay-price{
        height: 55px;
        line-height: 55px;
        width: 100%;
        float: left;
        background-color: #F7FFF7;
    }
    .green{
        color: #4caf50 !important;
    }
</style><!---complete-price-->
<div id="main">
    <div id="content">
        <?php
            require ('Breadcrumb.php');
            require ('OrderRoute.php');
        ?>

        <div class="address-head">
            <div class="address-title">
                <i class="fa fa-caret-left" aria-hidden="true"></i>
                <h2>
                    انتخاب آدرس
                </h2>
            </div>
            <div class="add dk-box">
                افزودن آدرس جدید
            </div>
        </div><!---address-head--->

        <?php
            require ('AddressScroll.php');
            require ('ShippingType.php');
        ?>

        <div class="shipping-route">
            <div class="return-cart">
				<span>
					بازگشت به سبد خرید
				</span>
            </div>
            <div class="next-step">
				<span>
					ثبت اطلاعات و ادامه خرید
				</span>
            </div>
        </div>
    </div><!---Content--->
</div>
<script>
    function factorN (tag) {
        $('.factor-message-green').fadeOut(0);
        $('.factor-message-brown').fadeIn(50);
    }
    function factorY (tag){
        $('.factor-message-brown').fadeOut(0);
        $('.factor-message-green').fadeIn(50);
    }
</script><!---factor message--->
<script>
    var input = $('.address-select').find('input');
    input.click(function () {
        if($(this).is(':checked')){
            $(this).parent().find('label').addClass('checked');
        }else {
            $(this).parent().find('label').removeClass('checked');
        }
    });
</script><!----address-select---->
