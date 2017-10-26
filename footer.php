<?php
    $option = Model::getOption();

?>
<div id="footer">
    <div class="info-bar">
        <div class="wrapper">
						<span class="info-bar-meta">
۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم.
						</span>
            <ul class="info-bar-ul">
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <?= $option['email']; ?>
                </li>
                <li>
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                    <a>
                        سوالات متداول
                    </a>
                </li>
                <li>
                    <a>
                        <span><?= $option['tel1']; ?></span>
                        <span> | </span>
                        <span><?= $option['tel2']; ?></span>
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
                        <a><img src="public/img/ios_app_bg.png"/></a>
                        <a><img src="public/img/cafebazaar-digikala.png"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
</body>
</html>