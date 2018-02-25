
<style>
    .main-ul {
        float: right;
        width: 1500px;
        overflow: hidden;
        height: 100%;
    }

    .content {
        width: 1200px;
        margin: 0 auto;
    }

    .innerContent {
        background: #fff;
        padding: 20px;
        direction: rtl;
    }

    .innerContent .right {
        direction: rtl;
        width: 25%;
        display: inline-block;
    }

    .innerContent .left {
        width: 70%;
        display: inline-block;
        float: left;
    }

    .innerContent .left h3 {
        margin: 10px 0 50px;
    }

    .pic img {
        max-width: 300px;
    }

    .proTitle {
        font-size: 12px;
        text-align: center;
        margin: 22px 0;
    }

    .proTitle span {
        margin: 10px 0;
        line-height: 26px;
    }

    .rowRight, .rowLeft {
        width: 48%;
        display: inline-block;
    }
    #circles-slider.ui-slider {
        border-radius: 20px;
        background: #434d5a;
        border: none;
        height: 10px;
        margin: 1em 4em 4em; }

    #circles-slider .ui-slider-handle {
        border-radius: 23px;
        height: 23px;
        width: 23px;
        top: -7px;
        margin-left: -11px;
        border: 2px solid #fffaf7; }

    #circles-slider .ui-slider-pip {
        top: 3px; }

    #circles-slider .ui-slider-pip .ui-slider-line {
        width: 4px;
        height: 4px;
        border-radius: 4px;
        margin-left: -2px;
        background: #fffaf7; }

    #circles-slider .ui-slider-pip.ui-slider-pip-last,
    #circles-slider .ui-slider-pip.ui-slider-pip-first {
        top: -7px; }

    #circles-slider .ui-slider-pip.ui-slider-pip-last .ui-slider-line,
    #circles-slider .ui-slider-pip.ui-slider-pip-first .ui-slider-line {
        display: none; }

    #circles-slider .ui-slider-pip.ui-slider-pip-last .ui-slider-label,
    #circles-slider .ui-slider-pip.ui-slider-pip-first .ui-slider-label {
        margin: 0; }

    #circles-slider .ui-slider-pip.ui-slider-pip-first .ui-slider-label {
        left: -2em;
        text-align: right; }

    #circles-slider .ui-slider-pip.ui-slider-pip-last .ui-slider-label {
        left: 2em;
        text-align: left; }

    #circles-slider .ui-slider-pip.ui-slider-pip-selected-initial {
        font-weight: normal; }

    #circles-slider .ui-slider-pip.ui-slider-pip-selected {
        font-weight: bold; }

    #circles-slider .ui-slider-pip.ui-slider-pip-selected,
    #circles-slider .ui-slider-pip.ui-slider-pip-selected-initial {
        color: #434d5a; }
</style>
<div class="main">
    <div class="content">
        <?php
        require('Breadcrumb.php');
        ?>
        <div class="innerContent">
            <div class="right">
                <div class="pic"><img src="public/img/product gallery/1/product350.jpg"></div>
                <div class="proTitle">
                    <span>لپ تاپ 15 اینچی اچ پی مدل 15-bs182nia</span><br>
                    <span class="enTitle">HP 15-bs182nia - 15 inch Laptop</span>
                </div>
            </div>
            <div class="left">
                <h3>امتیاز شما به این محصول</h3>
                <div class="rate">
                    <div class="rowRight">
                        <h4>ارزش خرید در برابر قیمت</h4>
                        <span>row</span>
                    </div>
                    <div class="rowLeft">
                        <h4>ارزش خرید در برابر قیمت</h4>
                        <input hidden class="slider">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".slider").slider({
        min:1,
        max:5,
        value:3,
    }).slider("pips").slider("float");
</script>