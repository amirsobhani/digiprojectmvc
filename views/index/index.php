<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>فروشگاه دی جی کالا</title>
    <link href="<?= URL ?>font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="<?= URL ?>js/jquery-3.2.1.min.js"></script>
    <link href="<?= URL ?>css/flipTimer.css" rel="stylesheet" type="text/css"/>
    <script src="<?= URL ?>js/jquery.flipTimer.js"></script>


    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        HTML5 display-role reset for older browsers
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        @font-face{
            font-family: iran-sans;
            src: url(<?= URL ?>font/IRANSansLight.ttf),
            url(<?= URL ?>font/IRANSansLight.woff),
            url(<?= URL ?>font/IRANSansMedium.ttf),
            url(<?= URL ?>font/IRANSansMedium.woff);
        }
        a{
            text-decoration: none;
        }
        .dk-box{
            background-color: #fff;
            border: 1px solid #ebeced;
            -ms-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
            -ms-box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden;
        }
    </style>

</head>

<body>

<style>
    #header{
        height: 95px;
        width: 1190px;
        margin: 0 auto;
        position: relative;
    }
    #header-right{
        float: right;
        width: 70%;
        height: 100%;
    }
    #header-left{
        float: right;
        width: 30%;
        height: 100%;
        margin: 17px;
        position: absolute;
    }
    #header-right-top{
        float: right;
        height: 50%;
        width: 100%;
    }
    #header-right-bottom{
        float: right;
        height: 50%;
        width: 100%;
    }

    #header-right-top span,#header-right-top a{
        float: right;
        line-height: 47px;
        color: rgb(150,155,168);
        font-family: iran-sans;
        font-size: 13px;
        margin-left: 5px;
    }
    #header-right-top a:hover{
        color: rgb(239,71,83);
    }
    .fa-lock{
        float: right;
        line-height: 47.5px;
        color: rgb(150,155,168);
        margin-left: 10px;
    }
    .fa-user{
        float: right;
        line-height: 47.5px;
        color: rgb(150,155,168);
        margin:0 30px 0 10px;
    }
    #cart{
        width: 190px;
        height: 36px;
        background-color:rgb(70,163,73);
        float: right;
        border-radius: 3px;
        margin: 5px 0;
        position: relative;
    }
    #cart .fa-shopping-cart{
        float: right;
        line-height: 33.5px;
        color: rgb(255,255,255);
        margin: 0 9px;

    }
    #cart #cart-icon{
        background-color: rgb(92,173,95);
        width: 45px;
        height: 36px;
        float: right;
        display: block;
        border-radius: 0 3px 3px 0;
    }
    #cart-text{
        float: right;
        font-family: iran-sans;
        font-size: 14px;
        line-height: 36px;
        margin-right: 20px;
        color: #fff;
    }
    #cart-count{
        border-radius: 100%;
        background-color: rgb(92,173,95);
        float: right;
        width: 25px;
        height: 25px;
        position: absolute;
        left: 15px;
        top: 5px;
        color: #fff;
        text-align: center;
        line-height: 23px;
    }
    #header-right-bottom input{
        float: right;
        direction: rtl;
        width: 465px;
        height: 30px;
        margin: 6.5px 10px 0 0;
        border-radius:0 3px 3px 0;
        border: solid #A2A2A2 1px;
        font-family: iran-sans;
    }
    .fa-search{
        float: right;
        width: 42px;
        height: 35px;
        background-color: rgb(156,162,176);
        line-height: 30px;
        text-align: center;
        margin-top: 6px;
        border-radius: 3px 0 0 3px;
        color: #fff;
        cursor: pointer;
    }
</style><!--Header Style-->
<style>
    #main-menu{
        display: block;
        width: 100%;
        height: 42px;
        background-color: rgb(247,248,250);
        margin-top: 10px;
        box-shadow: 1px 2px 2px 2px #eee;
        -webkit-box-shadow:1px 2px 2px 2px #eee;
        -moz-box-shadow:1px 2px 2px 2px #eee;
        border: solid 1px #E5E5E5 ;
    }
    #menu{
        width: 1190px;
        height: 42px;
        margin: 0 auto;
        position: relative;
        display: block;

    }
    #menu ul{
        position: relative;
        z-index: 5;
    }
    #menu li{
        display: inline-block;
        float: right;
        font-family: iran-sans;
        font-size: 14px;
        line-height: 40px;
        padding: 0 15px;
    }
    #menu i{
        margin: 0 5px;
    }
    .active-li{
        background-color: white;
        box-shadow: 1px 1px 1px 1px red;
    }

    #menu .submenu1{
        position: absolute;
        width: 100%;
        right: 0;
        width: 100%;
        height: 42px;
        background-color: rgb(247,248,250);
        box-shadow: 1px 1px 1px 1px #eee;
        -webkit-box-shadow:1px 1px 1px 1px #eee;
        -moz-box-shadow:1px 1px 1px 1px #eee;
        border:1px solid rgb(218,219,221) ;
        margin: 0 !important;
        display: none;
    }
    .submenu1-li:hover{
        background-image: url(img/red.png);
        background-repeat: no-repeat;
        background-position: center 30px;
    }

    #menu ul li ul li{
        float: right;
        padding:0 12px;
    }
    .submenu1 .submenu1-li:hover{
        border-bottom: 4px solid red !important;
    }

    .submenu2{
        width: 100%;
        height: 400px;
        position: absolute;
        left: -1px;
        box-shadow: 1px 1px 1px 1px #eee;
        -webkit-box-shadow:1px 1px 1px 1px #eee;
        -moz-box-shadow:1px 1px 1px 1px #eee;
        border:1px solid rgb(218,219,221) ;
        border-radius: 0 0 5px 5px;
        border-top: none;
        display: none;
        top: 45px;
        background-color: #fff;
    }
    #mobile-menu{
        background-image: url(img/mobile.png);
        background-repeat: no-repeat;
        background-position: bottom left;
    }
    #tablet-menu{
        background-image: url(img/tablet-ebook-reader.png);
        background-repeat: no-repeat;
        background-position: bottom left;
    }
    .submenu2 table{
        width: 100%;
        height: 400px;
        direction: rtl;
        float: right;
    }
    .submenu2 .sub-td{
        width: 25%;
        border-left: 1px solid #e2e2e2;
    }
    .sub-td ul{
        height: auto;
        width: 60%;
        margin: 0;
    }
    .sub-td .title{
        text-align: right;
        font-size: 16px;
        font-weight: bold;
        color: rgb(96,193,243);
        margin-left: 50px;
    }
    .item{
        margin-left: 50px;
    }

</style><!--Menu Style-->
<style>
    #content{
        width: 1190px;
        margin: 0 auto;
        height: 100%;
        padding: 10px 0 100px 0;
    }
    #main{
        background-image: url(img/1503990105pattern42.png);
        background-color: rgb(238,239,241);
        width: 100%;
        height: auto;
    }
    #HomeTopBanner{
        margin: 0 auto;
        width: 1190px;
    }
</style>


<div id="header">
    <div id="header-right">
        <div id="header-right-top">
            <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
            <span>،فروشگاه دی جی کالا</span><a href="#">وارد شوید</a>
            <i class="fa fa-user fa-lg" aria-hidden="true"></i>
            <a href="#">ثبت نام کنید</a>
        </div>
        <div id="header-right-bottom">
            <div id="cart">
                <span id="cart-icon"><i class="fa fa-shopping-cart fa-lg fa-flip-horizontal" aria-hidden="true"></i></span>
                <span id="cart-text">سبد خرید</span>
                <span id="cart-count">0</span>
            </div>
            <div>
                <input type="text" placeholder="  محصول، دسته یا برند مورد نظرتان را جستجو کنید. . .">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div id="header-left">
        <img src="<?= URL ?>img/logo.png" alt="logo"/>
    </div>
</div><!--Header-->
<div id="main-menu">
    <nav id="menu">
        <ul>
            <li class="menu-li" ><i class="fa fa-angle-down" aria-hidden="true" ></i>
                <span>کالای دیجیتال</span>
                <ul class="submenu1">
                    <li class="submenu1-li">موبایل
                        <div class="submenu2" id="mobile-menu">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="sub-td">
                                        <ul>
                                            <li class="title">گوشی موبایل</li>
                                            <li class="item">Apple</li>
                                            <li class="item">Samsung</li>
                                            <li class="item">LG</li>
                                            <li class="item">Sony</li>
                                        </ul>
                                    </td>
                                    <td class="sub-td">
                                        <ul>
                                            <li class="title">گوشی موبایل</li>
                                            <li class="item">Apple</li>
                                            <li class="item">Samsung</li>
                                            <li class="item">LG</li>
                                            <li class="item">Sony</li>
                                        </ul>
                                    </td>
                                    <td><ul></ul></td>
                                    <td><ul></ul></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="submenu1-li">تبلت و کتابخوان
                        <div class="submenu2" id="tablet-menu">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="sub-td">
                                        <ul>
                                            <li class="title">گوشی موبایل</li>
                                            <li class="item">Apple</li>
                                            <li class="item">Samsung</li>
                                            <li class="item">LG</li>
                                            <li class="item">Sony</li>
                                        </ul>
                                    </td>
                                    <td class="sub-td">
                                        <ul>
                                            <li class="title">گوشی موبایل</li>
                                            <li class="item">Apple</li>
                                            <li class="item">Samsung</li>
                                            <li class="item">LG</li>
                                            <li class="item">Sony</li>
                                        </ul>
                                    </td>
                                    <td><ul></ul></td>
                                    <td><ul></ul></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="submenu1-li">لپ تاپ</li>
                </ul>
            </li>
            <li class="menu-li" ><i class="fa fa-angle-down" aria-hidden="true" ></i>
                <span>لوازم خانگی
</span>						<ul class="submenu1">
                    <li class="submenu1-li">صوتی و تصویری</li>
                    <li class="submenu1-li">لوازم برقی</li>
                    <li class="submenu1-li">آشپزخانه</li>
                </ul>
            </li>
            <li class="menu-li"><i class="fa fa-angle-down" aria-hidden="true"></i>
                <span>زیبایی و سلامت</span>
                <ul class="submenu1">
                    <li class="submenu1-li">عطر</li>
                    <li class="submenu1-li">لوازم آرایشی</li>
                    <li class="submenu1-li">لوازم بهداشتی</li>
                </ul>
            </li>
            <li class="menu-li"><i class="fa fa-angle-down" aria-hidden="true"></i>
                <span>فرهنگ و هنر</span>
                <ul class="submenu1">
                    <li class="submenu1-li">کتاب و مجلات</li>
                    <li class="submenu1-li">لوازم و تحریر</li>
                    <li class="submenu1-li">صنایع دستی</li>
                </ul>
            </li>
        </ul>
    </nav>
</div><!--Menu-->

<script>

    $('.menu-li').hover(function(){
        $(this).find('.submenu1').slideDown(200);
    },function(){
        $(this).find('.submenu1').slideUp(200);
    })
    $('.submenu1-li').hover(function(){
        $(this).find('.submenu2').fadeIn(100);
    },function(){
        $(this).find('.submenu2').fadeOut(100);
    })

    $('.menu-li').hover(function(){
        $(this).addClass('active-li');
        $('.submenu1').css("background-color","#fff");
    },function(){
        $(this).removeClass('active-li');
        $('.submenu1').css("background-color","rgb(247,248,250)");
    })



</script><!--Menu jQuery-->
<style>
    .view-box{
        display: block;
        line-height: 30px;
        top: 0;
        float: left;
        left: -7px;
        margin: 15px 40px;
        background-color: #4CB050;
        padding: 0 10px;
        font-family: iran-sans;
        color: #fff;
        position: relative;
    }
    .old-price{
        display: block;
        float: right;
        line-height: 40px;
        position: absolute;
        top: 22px;
        right: 40px;
        font-family: iran-sans;
        direction: rtl;
        font-size: 13px;
        color: #7E7E7E;
        text-decoration: line-through;
    }
    .new-price{
        display: block;
        float: right;
        line-height: 40px;
        position: absolute;
        top: 0;
        right: 25px;
        font-family: iran-sans;
        direction: rtl;
        font-size: 15px;
        color: #4CB050;
        font-weight: bold;
    }
    .price-view{
        position: relative;
        background-color: #F3F3F3;
        width: 100%;
        height: 80px;
        top: 73px;
    }
    .ux-realtime-box{
        display: none;
        width: 100%;
        margin-top: 10px;
        border: 1px solid #ebeced;
        border-radius: 4px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
        background-color: #fff;
        position: relative;
        text-align: center;
        overflow: hidden;
        margin-bottom: 10px;

    }
    .ux-realtime-box img{
        width: 70%;
        margin: 5px;
    }
    .ux-header{
        background-color: #DEF9EA;
        color: #4dae4f;
        display: block;
        line-height: 40px;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
        font-family: iran-sans;
    }
    .ux-name{
        direction: rtl;
        font-size: 11px;
        line-height: 2;
        overflow: hidden;
        padding: 0 19px;
        text-overflow: ellipsis;
        float: right;
        margin: 5px;
        color: #000;
        font-family: iran-sans;
        width: 250px;
        display: block;
        white-space: nowrap;
    }
    .ux-name:hover{
        color: #F0568E;
    }
    .ux-loader {
        width: 1%;
        height: 4px;
        position: relative;
        border-radius: 5px;
        -moz-border-radius: 5px;
        margin-top: 35px;
        float: left;
        background-color: #FF6063
    }
    .ux-loader1 {
        width: 100%;
        height: 1px;
        position: relative;
        border-radius: 5px;
        -moz-border-radius: 5px;
        float: right;
        background-color: #fff;
    }
    .sidebar-baner{
        width: 290px;
        height: 260px;
        margin-bottom: 10px;
        box-shadow: 0 1px 2px 0 rgba(0,0,0,.1);
        border: 1px solid #ebeced;
        display: block;

    }
</style><!---uX Slider-->
<style>
    #right-part{
        width: 290px;
        float: right;

    }
    #left-part{
        width: 890px;
    }
    #brands{
        margin-top: 10px;
    }
    .odd-brands{
        float: right;
        margin-bottom: 5px;
        margin-left: 5px;
        display: block;
        background-color: #fff;
    }
    .odd-brands img{
        width: 140px;
        height: 95px;
        float: right;
        margin-left: 0;
    }
    .even-brands{
        background-color: #fff;
        float: right;
        margin-bottom: 5px;
        display: block;
    }
    .even-brands img{
        float: right;
        width: 140px;
        height: 95px;
    }
</style><!--Right Part-->
<style>
    #slider-hr{
        width: 890px;
        height: 310px;
        margin-bottom: 10px;
        position: relative;
    }
    #main-slider{
        width: 100%;
        height: 100%;
        position: relative;
        margin: 10px 0 0 0;
        overflow: hidden;
    }
    .slider-a{
        display: none;
    }
    #slider-navigator{
        width: 890px;
        height: 43px;
        background-color: rgba(92,92,92,0.5);
        position: absolute;
        top: 265px;
    }
    .tab-item{
        width: 20%;
        line-height: 43px;
        direction: rtl;
        float: right;
        text-align: center;
        font-size: 13px;
        font-family: iran-sans;
        cursor: pointer;
    }
    #main-slider .fa-angle-right{
        color: #fff;
        position: absolute;
        top: 110px;
        right: 0;
        cursor: pointer;
    }
    #main-slider .fa-angle-left{
        color: #fff;
        position: absolute;
        top: 110px;
        right: 864px;
        cursor: pointer;
    }

    .active-hr-slider{
        background-color: #fff;
        color:#000;
        cursor: pointer;
        position: relative;
        cursor: pointer;
    }
    .active-hr-slider::after{
        content: " ";
        width: 0;
        height: 0;
        top: -11px;
        right: 0;
        left: 0;
        margin: 0 auto;
        position: absolute;
        border-style: solid;
        border-width: 0 12.5px 12px 12.5px;
        border-color: transparent transparent #fff transparent;
    }
</style><!--Horizontal Slider--->
<style>
    #slider-vr{
        width: 890px;
        height: 380px;
        position: relative;
    }
    #slider-vr-img{
        width: 700px;
        height: 100%;
        float: right;
    }
    #slider-vr-title{
        width: 190px;
        height: 100%;
    }
    #serives{
        width: 890px;
        height: 80px;
    }
    #serives li{
        width: 20%;
        height: 80px;;
        float: right;
    }
    #serives li i{
        float: right;
        margin-right: 15px;
        line-height: 80px;
        color: #9F9F9F;
    }
    #serives li span{
        font-family: iran-sans;
        font-size: 11px;
        line-height: 80px;
        direction: rtl;
        float: right;
        margin: 0 10px;
    }
</style><!--Services-->
<style>
    #slider-vr{
        width: 890px;
        height: 310px;
        margin: 10px 0;
    }
    .slider-vr-content{
        width: 699px;
        height: 310px;
        float: right;
        position: relative;
        display: none;
    }
    #slider-vr-navigator{
        width: 189px;
        height: 310px;
    }
    #slider-vr-navigator ul li{
        width: 100%;
        height: 38.5px;
        position: relative;
        cursor: pointer;
    }
    #slider-vr-navigator ul li a{
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        font-size: 12px;
        font-family: iran-sans;
        line-height: 38.5px;
        background-color: #E8E8E8;
    }
    .active-vr-nav{
        background-color: #FF5252!important;
        color: #fff;
    }

    .active-vr-nav::after{
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19.5px 0 19.5px 20px;
        border-color: transparent transparent transparent #FF5252;
        position: absolute;
        top: 0;
        right: -20px;
    }
    .vr-content-left{
        width: 53%;
        height: 100%;
        float: left;
    }
    .vr-content-right{
        width: 40%;
        height: 85%;
        float: right;
        padding-top: 45px;
        padding-right: 45px;
    }
    .vrslider-title{
        display: block;
        width: 50%;
        height: 10%;
        margin: 20px auto;
        line-height: 20px;
        direction: rtl;
        text-align: center;
        font-size: 16px;
        font-family: iran-sans;
    }
    .vrslider-img{
        display: block;
        width: 58%;
        height: 72%;
        margin: 0 auto;
    }
    .vr-content-right .vr-content-title{
        direction: rtl;
        font-size: 15px;
        font-family: iran-sans;
        font-weight: bolder;
        color: red;
        margin-bottom: 5px;
    }
    .vr-price-info{
        width: 230px;
        height: 35px;
        float: right;
    }
    .price-old{
        display: block;
        width: 33%;
        float: right;
        height: 100%;
        background-color: #777575;
        margin-left: 2px;
        position: relative;
        color: #fff;
        direction: rtl;
        line-height: 35px;
        text-align: center;
        font-family: iran-sans;
        font-size: 18px;
    }
    .price-old::after{
        content: " ";
        height: 0;
        border-style: solid;
        border-width: 10px 12px 10px 0;
        border-color: transparent #777575 transparent transparent;
        position: absolute;
        top: 7px;
        right: 76px;
        z-index: 2;
    }
    .price-old::before{
        content: " ";
        width: 90%;
        height: 0;
        position: absolute;
        border-bottom: 2px solid #000;
        right: 1px;
        top: 16px;
        transform: rotate(-20deg);
    }
    .price-new{
        display: block;
        width: 66%;
        float: left;
        height: 100%;
        background-color: #E01916;
        position: relative;
        color: #fff;
        direction: rtl;
        line-height: 35px;
        text-align: center;
        font-family: iran-sans;
        font-size: 18px;
    }
    .price-new::before{
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 12px 15px 12px 0;
        border-color: transparent #fff transparent transparent;
        position: absolute;
        top: 5px;
        right: -1px;
    }
    .vr-meta{
        margin: 60px 0;
    }
    .vr-slider-meta {
        direction: rtl;
        float: right;
        display: block;
        width: 300px;
        line-height: 21px;
        font-family: iran-sans;
        font-size: 12px;
    }
    .flipTimer{
        transform: scale(0.3);
        position: absolute;
        top: 210px;
        right: -130px;
    }
    .timer-title{
        direction: rtl;
        float: right;
        display: block;
        width: 300px;
        line-height: 21px;
        font-family: iran-sans;
        font-size: 15px;
        margin-top: 35px;
        font-weight: bolder;
    }
    .finished{
        position: absolute;
        top: 225px;
        right: 75px;
        display: none;
    }
</style><!--Vertical Slider--->
<style>
    .scroll-slider{
        width: 890px;
        height: 310px;
        background-color: #fff;
        overflow: hidden;
        position: relative;
        margin-bottom: 10px;
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
        width: 870px;
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
<style>
    #gallery{
        width: 100%;
    }
    .gallery-img{
        display: block;
        float: right;
        width: 290px;
        height: 190px;
        margin : 0 0 10px 10px;
    }
    .larg-img{
        width: 590px!important;
    }
    .gallery-img-last{
        margin-left: 0!important;
        display: block;
        float: right;
        width: 290px;
        height: 190px;
        margin-bottom: 10px;
    }
</style><!--gallery--->
<style>
    #footer{
        width: 100%;
        height: auto;
    }
    .info-bar{
        width: 100%;
        height: 45px;
        background-color: #6D717A;
    }
    .wrapper{
        width: 1190px;
        margin: 0 auto;
        height: 100%;
    }
    .info-bar-meta{
        float: right;
        direction: rtl;
        font-family: iran-sans;
        color: #fff;
        line-height: 45px;
    }
    .info-bar-ul {
        float: left;
        line-height: 45px;
    }
    .info-bar-ul  li{
        float: left;
        direction: rtl;
        color: #fff;
        font-family: iran-sans;
        margin-right: 100px;
    }
    .info-bar-ul li i{
        float: left;
        line-height: 40px;
        margin-right: 10px;
    }
    .subscribe-bar{
        width: 100%;
        background-color: #F7F8FA;
        height: auto;
        float: right;
    }
    .subscribe-bar-menu{
        width: 640px;
        float: right;
        margin: 50px 0;
    }
    .subscribe-bar-form{
        width: 550px;
        float: right;
        margin: 50px 0;
        direction: rtl;
    }
    .subscribe-bar-form input{
        font-family: iran-sans;
        float: right;
        padding: 0 10px;
        line-height: 39px;
        font-size: 15px;
        width: 405px;
        margin: 19px 0 40px 10px;
    }
    .subscribe-bar-form h2{
        line-height: 40px;
        font-family: iran-sans;
    }
    .subscribe-bar-form button{
        width: 110px;
        line-height: 40px;
        float: left;
        margin: 18px 0 40px 0;
        font-family: iran-sans;
        background-color: #208DE6;
        border: 1px solid #ebeced;
        border-radius: 4px;
        color: #fff;
    }
    .subscribe-bar-form #social-net{
        float: right;
    }
    .menu-right{
        float: right;
        direction: rtl;
        width: 30%;
        line-height: 30px;
        font-family: iran-sans;
    }
    .menu-right a{
        direction: rtl;
        float: right;
        font-weight: bolder;
    }
    .menu-right ul{
        float: right;
        display: block;
        margin: 10px 0;
        font-size: 14px;
    }
    .menu-left{
        float: right;
        direction: rtl;
        width: 30%;
        line-height: 30px;
        font-family: iran-sans;
        margin-right: 170px;
    }
    .menu-left a{
        direction: rtl;
        float: right;
        font-weight: bolder;
    }
    .menu-left ul{
        float: right;
        display: block;
        margin: 10px 0;
        font-size: 14px;
    }
    #social-net{
        float: right;
    }
    #social-net i{
        line-height: 48px;
    }
    #appStore{
        float: left;
    }
</style><!--footer-->
<div id="main">
    <div id="content">
        <div id="HomeTopBanner" class="dk-box">
            <a><img src="<?= URL ?>img/87c954a7.jpg"/></a>
        </div><!--HomeTopBanner--->
        <div id="right-part">
            <div>
                <a class="ux-realtime-box">
                    <span class="ux-header">پیشنهاد لحظه ای برای شما</span>
                    <img src="<?= URL ?>img/Mobile-Huawei-P8-Lite-Dual-SIM-16-GBd5a77b.jpg"/>
                    <span class="ux-name">گوشي موبايل شياومي مدل Mi 4i دو سيم‌ کارت ظرفيت 16 گيگابايت</span>
                    <span class="ux-loader"></span>
                    <span class="ux-loader1"></span>
                    <div class="price-view">
                        <span class="new-price">1,400,000 تومان</span>
                        <span class="old-price">1,588,000</span>
                    </div>
                    <p class="view-box dk-box">مشاهده</p>
                </a>
                <a class="ux-realtime-box">
                    <span class="ux-header">پیشنهاد لحظه ای برای شما</span>
                    <img src="<?= URL ?>img/uxbox  img/Samsung-J7-(2016)-Mobile-Phone.jpg"/>
                    <span class="ux-name">گوشي موبايل شياومي مدل Mi 4i دو سيم‌ کارت ظرفيت 16 گيگابايت</span>
                    <span class="ux-loader"></span>
                    <span class="ux-loader1"></span>
                    <div class="price-view">
                        <span class="new-price">1,400,000 تومان</span>
                        <span class="old-price">1,588,000</span>
                    </div>
                    <p class="view-box dk-box">مشاهده</p>
                </a>
                <a class="ux-realtime-box">
                    <span class="ux-header">پیشنهاد لحظه ای برای شما</span>
                    <img src="<?= URL ?>img/Mobile-Huawei-P8-Lite-Dual-SIM-16-GBd5a77b.jpg"/>
                    <span class="ux-name">گوشي موبايل شياومي مدل Mi 4i دو سيم‌ کارت ظرفيت 16 گيگابايت</span>
                    <span class="ux-loader"></span>
                    <span class="ux-loader1"></span>
                    <div class="price-view">
                        <span class="new-price">1,400,000 تومان</span>
                        <span class="old-price">1,588,000</span>
                    </div>
                    <p class="view-box dk-box">مشاهده</p>
                </a>
                <a class="ux-realtime-box">
                    <span class="ux-header">پیشنهاد لحظه ای برای شما</span>
                    <img src="<?= URL ?>img/uxbox  img/Mobile-Phone-Apple-iPhone-SE-64-GBb28f40.jpg"/>
                    <span class="ux-name">گوشي موبايل شياومي مدل Mi 4i دو سيم‌ کارت ظرفيت 16 گيگابايت</span>
                    <span class="ux-loader"></span>
                    <span class="ux-loader1"></span>
                    <div class="price-view">
                        <span class="new-price">1,400,000 تومان</span>
                        <span class="old-price">1,588,000</span>
                    </div>
                    <p class="view-box dk-box">مشاهده</p>
                </a>
            </div><!---uX Slider-->

            <a class="sidebar-baner dk-box" href="#" title="title"><img src="<?= URL ?>img/sidebar img/2FFB-459E-CA38-48B3-90B1-1A67-7767_2-active-.jpg" /></a>
            <a class="sidebar-baner dk-box" href="#" title="title"><img src="<?= URL ?>img/sidebar img/9c0dd05b.jpg" /></a>
            <a class="dk-box" style="margin-bottom: 10px;" href="#" title="title"><img src="<?= URL ?>img/sidebar img/1503742255qweqwe.png"/></a>
            <a class="sidebar-baner dk-box" href="#" title="title"><img src="<?= URL ?>img/sidebar img/381317ac.jpg" /></a>
            <a class="sidebar-baner dk-box" href="#" title="title"><img src="<?= URL ?>img/sidebar img/a82c7fff.jpg"  /></a>
            <a class="sidebar-baner dk-box" href="#" title="title"><img src="<?= URL ?>img/sidebar img/e7966cc8.jpg" /></a>

            <div id="brands">
                <a class="odd-brands dk-box"><img src="<?= URL ?>img/brand img/lg.png"/></a>
                <a class="even-brands dk-box"><img src="<?= URL ?>img/brand img/oral-b.png"/></a>
                <a class="odd-brands dk-box"><img src="<?= URL ?>img/brand img/pars-khazar-8cdaa4.png"/></a>
                <a class="even-brands dk-box"><img src="<?= URL ?>img/brand img/samsung-brand.jpg"/></a>
                <a class="odd-brands dk-box"><img src="<?= URL ?>img/brand img/snowa-cc6b61.png"/></a>
                <a class="even-brands dk-box"><img src="<?= URL ?>img/brand img/x.vision.png"/></a>
            </div>
        </div><!--Right Part-->
        <div id="left-part">
            <div id="slider-hr" >
                <div id="main-slider" class="dk-box">
                    <i class="fa fa-angle-right fa-4x" aria-hidden="true" onClick="preSlider()"></i>
                    <a class="slider-a"><img src="<?= URL ?>img/slider img/97481ec1.jpg"/></a>
                    <a class="slider-a"><img src="<?= URL ?>img/slider img/42aef2f3.jpg"/></a>
                    <a class="slider-a"><img src="<?= URL ?>img/slider img/140a9c8c.jpg"/></a>
                    <a class="slider-a"><img src="<?= URL ?>img/slider img/c6bec8ad.jpg"/></a>
                    <a class="slider-a"><img src="<?= URL ?>img/slider img/d555d2e0.jpg"/></a>
                    <i class="fa fa-angle-left fa-4x" aria-hidden="true" onClick="nextSlider()"></i>
                </div>
                <div id="slider-navigator">
                    <ul>
                        <li class="tab-item"><a>انواع پخش کننده</a></li>
                        <li class="tab-item"><a>انواع پخش کننده</a></li>
                        <li class="tab-item"><a>انواع پخش کننده</a></li>
                        <li class="tab-item"><a>انواع پخش کننده</a></li>
                        <li class="tab-item"><a>انواع پخش کننده</a></li>
                    </ul>
                </div>
            </div> <!--Horizontal Slider--->
            <div id="serives" class="dk-box">
                <ul>
                    <li><a></a><i class="fa fa-truck fa-2x" aria-hidden="true"></i><span>تحویل اکسپرس</span>
                    </li>
                    <li><a></a><i class="fa fa-calendar fa-2x" aria-hidden="true"></i><span>7 روز ضمانت بازگشت</span>
                    </li>
                    <li><a></a><i class="fa fa-credit-card fa-2x" aria-hidden="true"></i><span>پرداخت در محل</span>
                    </li>
                    <li><a></a><i class="fa fa-money fa-2x" aria-hidden="true"></i><span>تضمین بهترین قیمت</span>
                    </li>
                    <li><a></a><i class="fa fa-check-circle fa-2x" aria-hidden="true"></i><span>ضمانت اصل بودن</span>
                    </li>
                </ul>
            </div> <!--Services-->
            <div id="slider-vr" class="dk-box">
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/slider  vr img/panasonic-es-lv65-shaver-2f0798.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/case-logic-vnb-217-backpack-for-17-inch-laptop-8b0abf.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/gameconsole-sony-playstation-4-pro-cuh-2016a-region-2-1-tb.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/jacques-bogart-club-75-eau-de-toilette-for-men-100ml-33dffa.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/Mobile-Huawei-P8-Lite-Dual-SIM-16-GBd5a77b.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/samsung-49m6965-curved-smart-led-tv-49-inch-77459c.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/samsung-galaxy-j7-prime-sm-g610fd-dual-sim-mobile-phone-202313.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="slider-vr-content">
                        <div class="vr-content-right">
                            <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                            <div class="vr-price-info">
                                <span class="price-old">1.160</span>
                                <span class="price-new">850 هزار تومان</span>
                            </div>
                            <div class="vr-meta">
                                <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                                <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                                <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                            </div>
                            <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                            <div class="flipTimer">
                                <div class="hours"></div>
                                <div class="minutes"></div>
                                <div class="seconds"></div>
                            </div>
                        </div>
                        <div class="vr-content-left">
                            <span class="vrslider-title">ماشین اصلاح صورت پاناسونیک مدل ES-LV65</span>
                            <span class="vrslider-img"><img src="<?= URL ?>img/techno-te-8100-steam-press-8a6477.jpg"/> </span>
                        </div>
                    </div>
                </a>
                <div class="finished"><img src="<?= URL ?>img/Finished_Badge.png"/></div>
                <div id="slider-vr-navigator">
                    <ul>
                        <li><a>گوشی موبایل ایسوس</a></li>
                        <li><a>گوشی موبایل ایسوس</a></li>
                        <li><a>گوشی موبایل ایسوس</a></li>
                        <li><a>گوشی موبایل ایسوس</a></li>
                        <li><a>گوشی موبایل ایسوس</a></li>
                        <li><a>گوشی موبایل ایسوس</a></li>
                        <li><a>گوشی موبایل ایسوس</a></li>
                        <li><a>گوشی موبایل ایسوس</a></li>
                    </ul>
                </div>
            </div><!--Vertical Slider-->
            <div id="gallery">
                <a class="gallery-img dk-box"><img src="<?= URL ?>img/gallery/gallery1.jpg"></a>
                <a class="gallery-img-last dk-box larg-img"><img src="<?= URL ?>img/gallery/gallery2.jpg"></a>
                <a class="gallery-img dk-box"><img src="<?= URL ?>img/gallery/gallery3.jpg"></a>
                <a class="gallery-img dk-box"><img src="<?= URL ?>img/gallery/gallery4.jpg"></a>
                <a class="gallery-img-last dk-box"><img src="<?= URL ?>img/gallery/gallery5.jpg"></a>
                <a class="gallery-img dk-box larg-img"><img src="<?= URL ?>img/gallery/gallery6.jpg"></a>
                <a class="gallery-img-last dk-box"><img src="<?= URL ?>img/gallery/gallery7.jpg"></a>
            </div><!--gallery--->
            <div class="scroll-slider dk-box">
                <h3>فقط در دیجی کالا</h3>
                <div class="scroll-next" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></div>
                <div class="scroll-main">
                    <ul>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="scroll-prev" onClick="scroll('right',this);"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></div>

            </div><!--Scroll Slider-->
            <div class="scroll-slider dk-box">
                <h3>فقط در دیجی کالا</h3>
                <div class="scroll-next" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></div>
                <div class="scroll-main">
                    <ul>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="scroll-prev" onClick="scroll('right',this);"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></div>

            </div><!--Scroll Slider-->
            <div class="scroll-slider dk-box">
                <h3>فقط در دیجی کالا</h3>
                <div class="scroll-next" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></div>
                <div class="scroll-main">
                    <ul>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a class="scroll-product">
                                <img src="<?= URL ?>img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                                <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                                <div class="product-price">
                                    <span class="product-price-old">2,700,000</span>
                                    <span class="product-price-new">2,809,000 تومان</span>
                                </div>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="scroll-prev" onClick="scroll('right',this);"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></div>

            </div><!--Scroll Slider-->
        </div><!--Left Part-->
    </div><!---Content--->
</div>
<div id="footer">
    <div class="info-bar">
        <div class="wrapper">
						<span class="info-bar-meta">
۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم.
						</span>
            <ul class="info-bar-ul">
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    info@digikala.com
                </li>
                <li>
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                    <a>
                        سوالات متداول
                    </a>
                </li>
                <li>
                    <a>
                        <span>۹٥۱۱۹۰۹٥ - ۰۲۱</span>
                        <span> | </span>
                        <span>۶۱۹۳۰۰۰۰ - ۰۲۱</span>
                    </a>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </li>
            </ul>
        </div><!--info-bar-->

        <div class="subscribe-bar">
            <div class="wrapper">
                <div class="subscribe-bar-menu">
                    <div class="menu-right">
                        <a>راهنمای خرید از دیجی‌کالا</a>
                        <ul>
                            <li><a>ثبت سفارش</a></li>
                            <li><a>رویه های ارسال سفارش</a></li>
                            <li><a>شیوه های پرداخت</a></li>
                            <li><a>معرفی دیجی بن</a></li>
                        </ul>
                    </div>
                    <div class="menu-left">
                        <a>خدمات مشتریان</a>
                        <ul>
                            <li><a>پاسخ به پرسش های متداول</a></li>
                            <li><a>رویه های باز گرداندن کالا</a></li>
                            <li><a>شرایط استفاده</a></li>
                            <li><a>حریم خصوصی</a></li>
                        </ul>
                    </div>
                </div>
                <div class="subscribe-bar-form">
                    <h2>از تخفیف‌ها و جدیدترین‌های دیجی کالا باخبر شوید!</h2>
                    <input type="email" placeholder="آدرس ایمیل خود را وارد کنید" />
                    <button>تایید ایمیل</button>
                    <div id="social-net">
                        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-telegram fa-2x" aria-hidden="true"></i>
                    </div>
                    <div id="appStore">
                        <a><img src="<?= URL ?>img/ios_app_bg.png"/></a>
                        <a><img src="<?= URL ?>img/cafebazaar-digikala.png"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var uxIndex = 1;
    var uxRealTime = $('.ux-realtime-box');
    var uxLoader = $('.ux-loader');
    var uxLoaderWidth = uxLoader.css('width');
    var uxBoxLenght = uxRealTime.length;
    var uxTimeOut = 4000;

    function uxRealTimeFunc(){
        if(uxIndex >= uxBoxLenght+1 ){
            uxIndex = 1;
            uxRealTime.eq(uxIndex-1).find(uxLoader).css({'width':'1'});
        }
        uxRealTime.eq(uxIndex-1).find(uxLoader).animate({'width':'100%'},uxTimeOut,function(){
            uxRealTime.eq(uxIndex-1).find(uxLoader).animate({'width':'1'});
        });
        uxRealTime.eq(uxIndex-2).css({'display':'none'});
        uxRealTime.eq(uxIndex-1).css({'display':'block'});
        uxIndex++

    };
    uxRealTimeFunc();
    var uxRelaTimeInterval = setInterval(uxRealTimeFunc , uxTimeOut);

</script><!---uX Slider-->
<script>

    var slide = 1;
    var numItems = ($('#main-slider').find('.slider-a')).length;
    var sliderNavigator = $('.tab-item');
    var timeOut = 5000;
    function slider(){
        if(slide>numItems){
            slide = 1;
        }
        if(slide<=0){
            slide = numItems;
        }
        $('#main-slider').find('.slider-a').hide();
        $('#main-slider').find('.slider-a').eq(slide-1).fadeIn(100);
        $('.tab-item').removeClass('active-hr-slider');
        $('.tab-item').eq(slide-1).addClass('active-hr-slider');
        slide++;
    }
    slider();
    var sliderInterval = setInterval(slider,timeOut);

    $('#slider-hr').mouseleave(function(){
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider,timeOut);
    })
    function preSlider(){
        clearInterval(sliderInterval);
        slide = slide - 2;
        slider();
    }
    function nextSlider(){
        clearInterval(sliderInterval);
        slider();
    }
    $('#slider-navigator .tab-item').click(function(){
        clearInterval(sliderInterval);
        var index = $(this).index();
        goToSlide(index+1);
    })
    function goToSlide(index){
        slide = index;
        slider();
    }

</script> <!--Horizontal Slider--->
<script>
    $('.flipTimer').flipTimer({
        direction:'down',
        date: 'september 14, 2017 13:04:30',
        callback:function(){
            $('.slider-vr-content').css('filter','blur(3px)');
            $('.finished').fadeIn(100);
        }
    });
</script><!--Timer Script-->
<script>
    var navSlide = 1;
    var navTimeOut = 5000;
    var selNav = $('#slider-vr-navigator ul li');
    var selVrSlide = $('.slider-vr-content');
    var numNavItems = ($('#slider-vr-navigator ul').find('li')).length;
    function navSlider(){
        if(navSlide>numNavItems){
            navSlide = 1;
        }
        if(navSlide<=0){
            navSlide = numNavItems;
        }
        selVrSlide.hide();
        selVrSlide.eq(navSlide-1).fadeIn(200);
        selNav.find('a').removeClass('active-vr-nav');
        selNav.find('a').eq(navSlide-1).addClass('active-vr-nav');
        navSlide++;
    }
    navSlider()
    var sliderNavInterval = setInterval(navSlider,navTimeOut);

    $('#slider-vr').mouseleave(function(){
        clearInterval(sliderNavInterval);
        sliderNavInterval = setInterval(navSlider,navTimeOut);
    })

    selNav.click(function(){
        clearInterval(sliderNavInterval);
        var navIndex = $(this).index();
        goToNavSlide(navIndex+1);
    })
    function goToNavSlide(navIndex){
        navSlide = navIndex;
        navSlider();
    }
</script><!--Vertical Slider-->
<script>
    function scroll(direction,tag){

        var slideTag = $(tag);
        var sliderScrollUl = slideTag.parent('.scroll-slider').find('ul');
        var liLength = sliderScrollUl.find('li').length;
        var liWidth = parseInt(sliderScrollUl.find('li').outerWidth());
        var ulWidthSize = (liLength) * (liWidth);
        var maxMargin = (liLength - 3) * liWidth;
        var marginRight = parseFloat(sliderScrollUl.css('margin-right'));
        sliderScrollUl.css("width", ulWidthSize);

        if(direction == 'left'){
            marginRight=marginRight-liWidth;
            if((-marginRight) > maxMargin){
                marginRight = (-maxMargin)-80;
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
</body>
</html>
