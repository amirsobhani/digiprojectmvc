<div id="amazing-offer" class="dk-box">
    <div class="inner-offer">
        <div class="flipTimer">
            <div class="hours"></div>
            <div class="minutes"></div>
            <div class="seconds"></div>
        </div>
        <div class="offer-price">
            <span class="num">
                <?=  $productInfo['discount']; ?>
            </span>
            <span class="currency">
                هزارتومان
            </span>
            <span>
                تخفیف
            </span>
        </div>
    </div>
</div>

<style>
    .num{
        line-height: 30px;
        padding: 1px 33px;
        background-color: #FF5252;
        color: #fff;
        float: right;
        font-size: 16px;
    }
    .currency{
        float: right;
        font-size: 10px;
        line-height: 30px;
        padding: 1px 5px;
        background-color: #FF5252;
        color: #fff;
    }
    .offer-price span:last-child{
        padding: 0 5px;
        float: right;
        background-color: #E54949;
        color: #fff;
        line-height: 30px;
        font-size: 15px;
    }
    .offer-price{
        margin-left: 220px;
        height: 30px;
        vertical-align: middle;
        display: inline-block;
        overflow: hidden;
        border-radius: 3px;
    }
    #amazing-offer{
        width: 100%;
        height:60px;
        background: #fff5f5;
        padding: 10px;
    }
    .inner-offer{
        background: url("public/img/amazing-offer.png") no-repeat right;
        width: 100%;
        height: 100%;
        position: relative;
    }
    .flipTimer {
        transform: scale(0.3);
        position: absolute;
        top: -31px;
        left: -174px;
    }
</style>

<script>
    $('.flipTimer').flipTimer({
        direction: 'down',
        date: '<?php echo $productInfo['date_special']; ?>',
//        date: 'November 23, 2017 16:47:30',
        callback: function () {
        }
    });
</script><!--Timer Script-->