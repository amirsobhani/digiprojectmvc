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
    .rowLeft h4, .rowRight h4{
        font-size: 13px;
        color: #555;
    }

    .rowLeft {
        float: left;
    }

    .flat-slider {
        width: 280px;
        margin: 15px 0 25px;
    }

    .flat-slider .ui-slider-handle {
        background-color: #666;
    }
</style>
<div class="main">
    <div class="content">
        <?php
        require('Breadcrumb.php');
        $productInfo = $data['productInfo'];
        $commentParam = $data['commentParam'];
        $commentParamLength = count($commentParam);
        $commentParamRight = ceil($commentParamLength / 2);
        $commentParamLeft = $commentParamLength - $commentParamRight;
        $commentRight = array_slice($commentParam, 0, $commentParamRight);
        $commentLeft = array_slice($commentParam, $commentParamRight, $commentParamLeft);
        ?>
        <div class="innerContent">
            <div class="right">
                <div class="pic"><img src="public/img/product gallery/<?= $productInfo['id'] ?>/product350.jpg"></div>
                <div class="proTitle">
                    <span><?= $productInfo['title'] ?></span><br>
                    <span class="enTitle"><?= $productInfo['product_model'] ?></span>
                </div>
            </div>
            <div class="left">
                <h3>امتیاز شما به این محصول</h3>
                <div class="rate">
                    <div class="rowRight">
                        <?php
                        foreach ($commentRight as $right) {
                            ?>
                            <h4><?= $right['title'] ?></h4>
                            <input type="hidden" class="flat-slider">
                            <?php
                        }
                        ?>
                    </div>
                    <div class="rowLeft">
                        <?php
                        foreach ($commentLeft as $left) {
                            ?>
                            <h4><?= $left['title'] ?></h4>
                            <input type="hidden" class="flat-slider">
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".flat-slider").flatslider({
        min: 1,
        max: 5,
        step: 1,
        value: 3,
        range: "min" // false | true | "min" | "max"
//        einheit: '&euro;'
    });
</script>