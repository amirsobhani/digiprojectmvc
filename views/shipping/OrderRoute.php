<div class="order-route-wrapper">
    <div class="order-route">
        <div class="dashed approved">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class="approved">
                <i class="fa fa-check"></i>
                <span class="state-circle"></span>
                <span class="state-title">
							ورود به دیجی کالا
						</span>
            </li>
            <li class="">
                <i class="fa fa-check"></i>
                <span class="state-circle"></span>
                <span class="state-title">
							اطلاعات ارسال سفارش
						</span>
            </li>
            <li class="">
                <i class="fa fa-check"></i>
                <span class="state-circle"></span>
                <span class="state-title">
							اطلاعات پرداخت
						</span>
            </li>
        </ul>
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div><!---order-route---->
</div>
<style>
    .order-route-wrapper{
        background-color: #fff;
        text-align: center;
        padding: 10px 0;
    }
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
        right: -23px;
        top: -5px;
        color: #FFFFFF;
        z-index: 2;
    }
    .order-route ul li.approved{
        background: #2396f3;
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
        right: -90px;
        top: 30px;
        width: 150px;
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
        padding-left: 250px;
        height: 2px;
        background: #dee1e7;
        display: inline-block;
        position: relative;
        margin-left: 30px;
    }
    .order-route ul li:last-child{
        margin-left: 0;
        padding: 0;
    }
    .order-route ul{
        direction: rtl;
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