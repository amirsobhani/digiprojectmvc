
<div id="main">
    <script src="public/js/jQueryRotate.js"></script>
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <script src="public/js/Scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <link rel="stylesheet" href="public/js/Scroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="public/js/magnify/css/magnify.css">
    <script src="public/js/magnify/js/jquery.magnify.js"></script>
    <script src="public/js/jsc3d/jsc3d.touch.js"></script>
    <script src="public/js/jsc3d/jsc3d.webgl.js"></script>
    <script src="public/js/jsc3d/bin/jsc3d.min.js"></script>
    <div id="content">
        <?php

            require ('Breadcrumb.php');

            $productInfo = $data[0];

        if ($productInfo['special'] == 1){
            require ('amazingOffer.php');
        }
            require ('ProductDetail.php');
            require('RelatedProduct.php');
            require('FastExplain.php');
        ?>
        <section class="product-tab">
            <header>
                <div id="navbar">
                    <ul class="product-tab-header dk-box">
                        <li class="active">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            نقد و بررسی
                        </li>
                        <li>
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            مشخصات فنی
                        </li>
                        <li>
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            نظرات کاربران
                        </li>
                        <li>
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            پرسش و پاسخ
                        </li>
                    </ul>
                </div>
            </header>
            <article id="tab">
                <div class="item-tab">
                    <?php
                    require ('ItemTab1.php');
                    ?>
                </div>

                <div class="item-tab">
                </div>

                <div class="item-tab">
                </div>

                <div class="item-tab">
                </div>
                <?php
//                    require ('ItemTab1.php');
//                    require ('ItemTab2.php');
//                    require ('ItemTab3.php');
//                    require ('ItemTab4.php');
                    require ('ProductGallery.php')
                ?>
            </article>
        </section><!--product-tab-->
    </div>
</div>
<script>
    $(document).ready(function(){
        var sticky = $('#navbar').offset().top;
        $(window).bind('scroll',function(){
            if ($(window).scrollTop() >= sticky) {
                $('#navbar').addClass('sticky');
            } else {
                $('#navbar').removeClass('sticky');
            }
        });
    });

</script><!--Sticky-->
<script>
    var li = $('.product-tab-header li');

    $(function () {
        getItemTab(li.eq(0));
    });

    li.click(function(){
        goHeader();
        getItemTab(this);
    });

    function goHeader() {
        var body = $("html, body");
        var sticky = $('.product-tab').offset().top;
        body.animate({scrollTop:sticky-50},500);
    }

    function getItemTab(elem) {
        $('.product-tab-header li').removeClass('active');
        $(elem).addClass('active');
        var index = $(elem).index();
        $('.item-tab').hide();
        var tab = $('.item-tab').eq(index);

        var url = '<?= URL ?>product/tab/<?= $productInfo['id']; ?>/<?= $productInfo['idcategory']; ?>';
        var data = {'number':index};
        $.post(url, data, function (msg) {
            tab.html(msg);
        });
        tab.fadeIn();
    }


</script><!--Item Tab--->
<script>

    $('.select-list').click(function(){
        var subSelList = $(this).find('.subSelList');

        if(subSelList.css('display') == 'block'){
            subSelList.slideUp(200);
        }else{
            subSelList.slideDown(250);
        }
    });
    $('.product-info').mouseleave(function(){
        $('.subSelList').slideUp(200);
    });



    $('.select-list li').click(function(){
        var text = $(this).text();
        $(this).parents('.select-list').find('p').text(text);
    });
</script>
<style>
    .scroll-slider{
        width: 100%;
        height: 310px;
        background-color: #fff;
        overflow: hidden;
        position: relative;
        margin: 15px 0;
    }
    .scroll-slider h3{
        direction: rtl;
        line-height: 35px;
        padding: 0 13px;
        font-family: iran-sans;
        font-size: 13px;
        background-color: #E8E8E8;
    }
    .scroll-next{
        width: 50px;
        height: 275px;
        float: right;
    }
    .scroll-prev{
        width: 50px;
        height: 275px;
        float: left;
        position: absolute;
        top: 35px;
        left: 0;
        background-color: #fff;
        box-shadow: 0px 15px 15px #888888;
    }
    .scroll-slider i{
        text-align: center;
        display: block;
        line-height: 275px;
        color: #B8B8B8B8;
        background-color: #fff;
        cursor: pointer;
    }
    .scroll-main{
        height: 90%;
        overflow: hidden;
        margin-right: 50px;
    }
    .scroll-main ul{
        height: 100%;
        width: 1160px;
        float: right;
        overflow: hidden;
    }
    .scroll-main ul li{
        width: 250px;
        height: 100%;
        float: right;
        padding: 0px 20px;
        position: relative;
    }
    .scroll-main ul li::after{
        content: " ";
        height: 190px;
        top: 41px;
        left: 0;
        margin: 0 auto;
        position: absolute;
        border-style: solid;
        border-width: 0.5px;
        border-color: #B8B8B8B8;

    }
    .scroll-product{
        text-align: center;
        display: block;
        height: 90%;
        padding-top: 25px;
    }
    .scroll-product img{
        margin: 30px auto;
        float: right;
        display: block;
    }
    .scroll-product .product-meta{
        direction: rtl;
        font-family: iran-sans;
        font-size: 14px;
        line-height: 20px;
        width: 40%;
        display: block;
        text-align: center;
        padding: 20px 0;
        color: #153574;
    }
    .scroll-product .product-price{
        line-height: 25px;
        text-align: center;
        font-family: iran-sans;
        font-size: 13px;
        direction: rtl;
        width: 40%;
    }
    .product-price-old{
        background-color: #ccc;
        width: 100%;
        display: block;
        text-decoration-line: line-through;
        margin: 5px 0;
    }
    .product-price-old{
        background-color: #a6d45b;
        width: 100%;
        display: block;
    }
</style><!--Scroll Slider-->
<script>
    function scroll(direction,tag){

        var slideTag = $(tag);
        var sliderScrollUl = slideTag.parent('.scroll-slider').find('ul');
        var liLength = sliderScrollUl.find('li').length;
        var liWidth = parseInt(sliderScrollUl.find('li').outerWidth());
        var ulWidthSize = (liLength) * (liWidth);
        var maxMargin = (liLength - 4) * liWidth;
        var marginRight = parseFloat(sliderScrollUl.css('margin-right'));
        sliderScrollUl.css("width", ulWidthSize);

        if(direction == 'left'){
            marginRight=marginRight-liWidth;
            if((-marginRight) > maxMargin){
                marginRight = (-maxMargin)-70;
            }
        }
        if(direction == 'right'){
            marginRight=marginRight+liWidth;
            if(marginRight > 0){
                marginRight = 0;
            }
        }
        sliderScrollUl.animate({'marginRight':marginRight},1000);
    }
    $('.scroll-next').click(function(){
        scroll('left',this);
    });
    $('.scroll-prev').click(function(){
        scroll('right',this);
    });



</script><!--Scroll Slider-->
<style>
    .sticky{
        position: fixed;
        top: 0;
        width: 100%;
        z-index:5;
        right: 0;
    }
</style><!--sticky--->
<style>
    .tabContent{
        padding: 29px;
        text-align: justify;
        line-height: 33px;
    }
    .tabContent img{
        margin: 40px auto;
        display: block;
    }
    .tabList{
        margin: 0 30px;
        border-right: 3px solid #ccc;
    }
    .tabListChild{
        margin: 35px 0;
        position: relative;
    }
    .tabListChild::after{
        background: #e5e5e5;
        content: "";
        height: 1px;
        position: absolute;
        right: -12px;
        top: 10px;
        width: 100%;

    }
    .tabListChild h3{
        font-size: 20px;
        position: relative;
        padding: 0 30px 0 20px;
        z-index: 1;
        background: #fff;
        display: inline-block;
        cursor: pointer;
    }
    .tabListChild h3 i{
        position: absolute;
        right: -11px;
        top: -2px;
        color: #a2a2a2;
        cursor: pointer;
        font-size: 25px;
        background: #fff;
    }
    .item-tab p{
        line-height: 33px;
        text-align: justify;
        padding: 30px;
    }
    .item-tab h2{
        font-size: 20px;
        padding-right: 30px;
    }
    .fa-caret-left{
        color: #2196F3;
        margin-left: 10px;
    }
    #tab .item-tab:first-child{
        display: block;
    }
    .item-tab{
        width: 100%;
        background-color: #fff;
        display: none;
        padding: 40px 0;
    }
    .product-tab{
        width: 100%;
        display: inline-block;
        direction: rtl;
    }
    .product-tab-header{
        line-height: 70px;
        background-color: #F5F6F7;
        border: 1px solid #eee;
        border-bottom: none;
        border-radius: 4px;
        margin: 0 auto;
        width: 1190px;
    }
    .product-tab-header li{
        display: inline-block;
        padding: 0 30px;
        cursor: pointer;
        box-shadow: 0px 0px 16px #eee;
    }
    .product-tab-header li:first-child{
        display: inline-block;
    }
    .product-tab-header li.active{
        background-color: #fff;
        color: #2196F3;
        border-top: 3px solid #2196F3;
        border-bottom: none;
        box-shadow: 0 -2px 2px #ccc;
    }
    .product-tab-header li i{
        margin-left: 10px;
    }
</style><!--item-tab 1-->
<style>
    .product-properties{
        margin: 50px 0;
        display: block;
    }
    .product-properties>h4{
        margin: 0px 25px 15px 0;
        font-size: 20px;
        display: block;
    }
    .productName{
        font-size: 12px;
        color: #888;
        margin: 10px 25px 35px 0;
        display: block;
    }
    .item-tab>h4{
        font-size: 25px;
        font-weight: bolder;
        margin: 5px 25px;
    }
    .pro-tab{
        display: block;
        width: 100%;
        float: right;
    }
    .properties-title{
        float: right;
        width: 20%;
        line-height: 40px;
        background: #F0F1F2;
        margin: 10px 15px 0px;
        padding: 5px 15px;
    }
    .properties-meta{
        float: left;
        display: inline-block;
        width: 72%;
        background: #F7F9FA;
        line-height: 40px !important;
        margin: 10px 0px 0px 12px;
        padding: 5px 10px !important;
        font-size: 13px;
    }
    .item-tab::after{
        content: "";
        display: block;
        clear: both;
    }
</style><!--item-tab 2-->