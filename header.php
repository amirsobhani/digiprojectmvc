<!doctype html>
<html>
<head>
    <base href="<?= URL ?>">
    <meta charset="utf-8">
    <title>فروشگاه دی جی کالا</title>
    <link href="public/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="public/js/jquery-3.2.1.min.js"></script>
    <link href="public/css/flipTimer.css" rel="stylesheet" type="text/css"/>
    <script src="public/js/jquery.flipTimer.js"></script>


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
            src: url(<?= URL.'public/' ?>font/IRANSansLight.ttf),
            url(<?= URL.'public/' ?>font/IRANSansLight.woff),
            url(<?= URL.'public/' ?>font/IRANSansMedium.ttf),
            url(<?= URL.'public/' ?>font/IRANSansMedium.woff);
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
    .header-search-box .fa-search{
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
        background-image: url(public/img/red.png);
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
        background-image: url(public/img/mobile.png);
        background-repeat: no-repeat;
        background-position: bottom left;
    }
    #tablet-menu{
        background-image: url(public/img/tablet-ebook-reader.png);
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
<div id="header">
    <div id="header-right">
        <div id="header-right-top">
            <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
            <span>،فروشگاه دی جی کالا</span><a href="<?= URL ?>login">وارد شوید</a>
            <i class="fa fa-user fa-lg" aria-hidden="true"></i>
            <a href="<?= URL ?>signup">ثبت نام کنید</a>
        </div>
        <div id="header-right-bottom">
            <a href="cart" id="cart">
                <span id="cart-icon"><i class="fa fa-shopping-cart fa-lg fa-flip-horizontal" aria-hidden="true"></i></span>
                <span id="cart-text">سبد خرید</span>
                <span id="cart-count">0</span>
            </a>
            <div class="header-search-box">
                <input type="text" placeholder="  محصول، دسته یا برند مورد نظرتان را جستجو کنید. . .">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div id="header-left">
        <img src="public/img/logo.png" alt="logo"/>
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
