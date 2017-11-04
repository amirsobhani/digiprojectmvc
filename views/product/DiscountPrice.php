<div class="discount-detail">
    <div class="old-price">
        <p>قیمت</p>
        <span class="old-price-num"><?= $productInfo['price'] ?></span>
        <span class="toman">تومان</span>
    </div>
    <div class="new-price">
        <p>تخفیف</p>
        <span><?= $productInfo['discount'] ?></span>
        <h5>هزار تومان</h5>
    </div>
</div>
<style>
    .discount-detail{
        direction: rtl;
        margin-top: 20px;
    }
    .old-price ,.new-price ,.old-price p,.new-price p , .new-price h5{
        display: inline-block;
    }
    .old-price{
        color: #888;
        font-size: 13px;
        margin-left: 15px;
    }
    .old-price-num{
        text-decoration: line-through;
    }
    .new-price{
        font-size: 13px;
        background-color: #FF5252;
        color: #fff;
        line-height: 23px;
        padding: 0 10px;
        border-radius: 3px;
        position: relative;
    }
    .new-price::after{
        content: "";
        display: block;
        position: absolute;
        right: 0;
        top:4px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 7px 7px 7px 0;
        border-color: transparent #ffffff transparent transparent;
    }
    .new-price p{
        margin-left: 15px;
    }
</style><!--Discount Price--->
