<div class="user">
    <div class="sing-in">
				<span>
					<i class="fa fa-lock fa-4x"></i>
				</span>
        <h2>
            عضو دیجی کالا هستید؟
        </h2>
        <p>
            برای تکمیل فرآیند خرید خود وارد شوید
        </p>
        <div class="signIN-but dk-box">
            <a>
                ورود به دیجی کالا
            </a>
        </div>
    </div>
    <div class="sing-up">
				<span>
					<i class="fa fa-user fa-4x"></i>
				</span>
        <h2>
            تازه وارد هستید؟
        </h2>
        <p>
            برای تکمیل فرآیند خرید خود ثبت نام کنید
        </p>
        <div class="signUp-but dk-box">
            <a>
                ثبت نام در دیجی کالا
            </a>
        </div>
        <p>
            با عضویت در دیجی‌کالا تجربه متفاوتی از خرید اینترنتی داشته باشید. وضعیت سفارش خود را پیگیری نموده و سوابق خریدتان را مشاهده کنید.
        </p>
    </div>
</div>
<style>
    .user{
        height: 420px;
        width: 100%;
        background-color: #fff;
    }
    .user::after{
        content: "";
        display: block;
        clear: both;
    }
    .sing-in{
        width: 50%;
        float: right;
        display: inline-block;
        text-align: center;
        margin: 50px auto;
    }
    .sing-in span i , .sing-up span i{
        float: none;
        margin: 0 auto;
    }
    .sing-up{
        width: 49%;
        border-right: 1px solid #ddd;
        float: left;
        display: inline-block;
        text-align: center;
        margin: 50px auto;
    }
    .sing-in h2 , .sing-up h2{
        margin: 10px 0;
        font-size: 15px;
    }
    .sing-in p , .sing-up p{
        font-size: 12px;
        margin: 15px auto;
        color: #888;
    }
    .sing-in .dk-box a , .sing-up .dk-box a{
        color: #fff;
    }
    .signIN-but , .signUp-but{
        display: inline-block;
        padding: 10px;
        background-color: #3ca3f4;
        cursor: pointer;
        font-size: 14px;
        margin: 10px auto;s
    }
    .signUp-but{
        background-color: #4CAF50!important;
    }
    .sing-up p:last-child{
        width: 70%;
        line-height: 25px;
        direction: rtl;
    }
</style><!--User-->