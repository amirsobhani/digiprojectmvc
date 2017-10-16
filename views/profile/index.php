
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
            src: url(public/font/IRANSansLight.ttf),
            url(public/font/IRANSansLight.woff),
            url(public/font/IRANSansMedium.ttf),
            url(public/font/IRANSansMedium.woff);
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
<style>
    .tracking-order-table tr td{
        padding: 15px 0!important;
        width: 33%;
    }
    .order-track tr:last-child td{
        padding: 0;
    }
    .order-route{
        text-align: center;
        display: inline-block;
        margin-bottom: 50px;
    }
    .order-route::after{
        content: "";
        display: block;
        clear: both;
    }
    .order-route div.approved span{
        background: #2396f3;
    }
    .dashed{
        float: right;
        margin-top: 20px;
    }

    .order-route ul li i{
        position: absolute;
        right: -21px;
        top: -5px;
        color: #FFFFFF;
        z-index: 2;
    }
    .order-route ul li.approved{
        background: #2396f3;
        padding-left: 80px;
        height: 2px;
        display: inline-block;
        position: relative;
        margin-left: 30px;
    }
    .approved .state-circle{
        border: 3px solid #2396f3!important;
        background: #2396f3;
    }
    .approved .state-title{
        color: #2396f3;
    }
    .order-route .state-title{
        position: absolute;
        right: -45px;
        top: 30px;
    }
    .order-route .state-circle{
        display: inline-block;
        direction: rtl;
        width: 18px;
        height: 18px;
        border-radius: 100%;
        border: 3px solid #bec2cc;
        position: absolute;
        top: -10px;
        right: -27px;
    }
    .order-route ul li{
        padding-left: 80px;
        height: 2px;
        background: #dee1e7;
        display: inline-block;
        position: relative;
        margin-left: 30px;
    }
    .order-route ul li:last-child{
        margin-left: 0;
    }
    .order-route ul{
        float: right;
        margin: 20px 35px 0 10px;
    }
    .order-route .dashed span{
        display: inline-block;
        width: 11px;
        height: 2px;
        background: #ccc;
    }
    .rotate{
        transform: rotate(180deg);
        transition-duration: 0.4s;
    }
</style><!---order-track--->
<style>
    .order{
        width: 97%;
        margin: 0 auto;
        margin-bottom: 20px;
    }
    .order > thead{
        background: #eee;
    }
    .order>thead>td{
        border: 1px solid #e1e1e1;
        line-height: 22px;
        font-size: 12px;
        text-align: center;
        padding: 10px 0;
        color: #6b6b6b;
        background: #f8f9fb;
    }
    .order tr td{
        border: 1px solid #e1e1e1;
        line-height: 22px;
        font-size: 12px;
        text-align: center;
        padding: 10px 0;
    }
    .more-order-detail{
        color: #6b6b6b;
        cursor: pointer;
    }
    .more-order-detail i{
        position: relative;
        top: 9px;
    }
    .button a{
        display: inline-block;
        padding: 5px 10px;
        border: 1px solid #e2e2e2;
        border-radius: 4px;
        cursor: pointer;
    }
    .sub-order{
        margin:50px;
    }
    .sub-order h3{
        text-align: right;
        margin: 10px 0;
    }
    .sub-order table{
        width: 100%;
    }
    .sub-order table thead{
        background-color: #ebecee!important;
    }
</style><!----Order--->
<style>
    #content{
        width: 1190px;
        margin: 0 auto;
        height: 100%;
        padding: 10px 0 100px 0;
    }
    #main{
        background-image: url(public/img/1503990105pattern42.png);
        background-color: rgb(238,239,241);
        width: 100%;
        height: auto;
    }
    body{
        font-family: iran-sans;
    }
</style>
<style>
    .report-wrapper{
        margin-bottom: 10px;
    }
    .report-wrapper header{
        background-color: #f8f9fb;
        padding: 8px 15px;
        font-size: 14px;
        direction: rtl;
    }
    .report-info-wrapper{
        direction: rtl;
        padding: 15px;
    }
    .info-title{
        font-size: 15px;
    }
    .report-info-wrapper table {
        width: 100%;
        font-size: 11px;
        margin: 15px 0;
    }
    .report-info-wrapper table tr{
        line-height:22px;
    }
    .report-info-wrapper table tr td{
        border:1px solid #eee;
        padding: 10px 15px;
    }
    ._txt{
        color: #2095f2;
        margin-right: 5px;
    }
    .report-button-container{
        margin: 25px 0;
        direction: ltr;
    }
    .report-button-container a{
        padding: 8px 23px;
        font-size: 14px;
        color: #fff;
        margin-right: 10px;
        cursor: pointer;
        background-color: #2196f3;
        border-radius: 2px;
    }
</style><!--report-wrapper-->
<div id="main">
    <div id="content">
        <div class="report-wrapper dk-box">
            <header>
                اطلاعات کاربر
            </header>
            <div class="report-info-wrapper">
                <span class="info-title">اطلاعات مشتری حقیقی</span>
                <table>
                    <tr>
                        <td>
                            <span class="title">نام و نام خانوادگی :</span>
                            <span class="_txt">امیرحسین سبحانی</span>
                        </td>
                        <td>
                            <span class="title">آدرس الکترونیک :</span>
                            <span class="_txt">devi***************l.com</span>
                        </td>
                        <td>
                            <span class="title">کد ملی :</span>
                            <span class="_txt">037****313</span>
                        </td>
                        <td>
                            <span class="title">شماره تلفن ثابت  :</span>
                            <span class="_txt">025**104</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="title">شماره تلفن همراه  :</span>
                            <span class="_txt">091*****964</span>
                        </td>
                        <td>
                            <span class="title">تاریخ تولد :</span>
                            <span class="_txt">1372</span>
                        </td>
                        <td>
                            <span class="title">جنسیت :</span>
                            <span class="_txt">مرد</span>
                        </td>
                        <td>
                            <span class="title">محل سکونت  :</span>
                            <span class="_txt">قم ، قم</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="title">شماره کارت :</span>
                            <span class="_txt">xxxx-xxxx-xxxx-9103</span>
                        </td>
                        <td>
                            <span class="title">دریافت خبرنامه : </span>
                            <span class="_txt">✔</span>
                        </td>
                        <td>
                            <span class="title"></span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title"></span>
                            <span class="_txt"></span>
                        </td>
                    </tr>
                </table><!---Table--->
                <div class="report-button-container">
                    <a><span>ویرایش اطلاعات</span></a>
                    <a><span>تغییر کلمه عبور</span></a>
                </div>
            </div>
        </div>
        <div class="report-wrapper dk-box">
            <header>
                گزارش عملکرد
            </header>
            <div class="report-info-wrapper">
                <table>
                    <tr>
                        <td>
                            <span class="title">تعداد کل سفارشات :</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">کل دیجی بن دریافتی:</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">تعداد نظرات ارسال شده:</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">سفارشات در انتظار تایید:</span>
                            <span class="_txt"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="title">کل دیجی بن مصرفی</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">تعداد نقد‌های ارسال شده:</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">سفارشات در حال پردازش:</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">کل دیجی بن باطل شده:</span>
                            <span class="_txt"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="title">تعداد پیغام‌های خوانده نشده:</span>
                            <span class="_txt">0</span>
                        </td>
                        <td>
                            <span class="title">سفارشات انصراف داده شده:</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">دیجی بن مانده قابل مصرف:</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title">سفارشات ارسال شده:</span>
                            <span class="_txt"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="title">دیجی بن مصرف شده در سفارشات درحال پردازش:</span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title"></span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title"></span>
                            <span class="_txt"></span>
                        </td>
                        <td>
                            <span class="title"></span>
                            <span class="_txt"></span>
                        </td>
                    </tr>
                </table><!---Table--->
            </div>
        </div>
        <section class="product-tab">
            <header>
                <div id="navbar">
                    <ul class="product-tab-header dk-box">
                        <li class="active">
                            پیغام های من
                        </li>
                        <li>
                            سفارشات من
                        </li>
                        <li>
                            لیست مورد علاقه
                        </li>
                        <li>
                            نقد های من
                        </li>
                        <li>
                            نظرات من
                        </li>
                        <li>
                            دیجی بن های من
                        </li>
                        <li>
                            کارت های هدیه من
                        </li>
                        <li>
                            آدرس ها
                        </li>
                        <li>
                            اطلاع رسانی ها
                        </li>
                    </ul>
                </div>
            </header>
            <article id="tab">
                <?php
                    require ('ItemTab1.php');
                    require ('ItemTab2.php');
                    require ('ItemTab3.php');
                    require ('ItemTab4.php');
                ?>
            </article>
        </section>

        <script>
            $('.more-order-detail').click(function () {
                $(this).find('i').toggleClass('rotate');
                $(this).parents('tr').next().slideToggle(200);
            });
        </script><!---More Order Detail-->

    </div><!---Content--->
</div>
