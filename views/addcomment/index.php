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
        border: 1px solid #e7e7f8;
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

    .rowLeft h4, .rowRight h4 {
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

    .commentForm {
        background: #fff;
        padding: 20px;
        direction: rtl;
        margin: 10px 0;
        border: 1px solid #e7e7f8;
    }

    .commentForm h3 {
        margin: 15px 0;
        font-size: 14px;
        color: #555;
    }

    .innerComment {
        margin: 50px 0;
        font-size: 14px;
        color: #555;
    }

    .innerComment > label {
        display: block;
        margin: 10px 0;
        font-size: 13px;
    }

    .innerComment input {
        width: 250px;
        line-height: 24px;
        border: 1px solid #b2b2b2;
    }

    .pos-neg {
        margin: 40px 0;
    }

    .pos-neg::after {
        clear: both;
        content: " ";
        display: block;
    }

    .pos-neg label {
        margin: 10px 0;
        font-size: 13px;
    }

    .fa-minus-circle {
        margin-left: 60px;
        cursor: pointer;
    }

    .fa-plus-circle {
        cursor: pointer;
    }

    .textarea {
        width: 750px;
        height: 220px;
        border: 1px solid #b2b2b2;
        padding: 15px;
    }

    .pos-neg .right, .pos-neg .left {
        float: right;
        width: 36%;
        display: inline-block;
    }

    .pos, .neg {
        margin: 10px 0;
    }

    .commentForm button {
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

    .commentForm::after {
        content: " ";
        clear: both;
        display: block;
    }
</style>
<div class="main">
    <div class="content">
        <?php
        error_reporting(E_ERROR | E_PARSE);
        include URL."core/jdf.php";
        require('Breadcrumb.php');
        $productInfo = $data['productInfo'];
        $commentParam = $data['commentParam'];
        $commentParamLength = count($commentParam);
        $commentParamRight = ceil($commentParamLength / 2);
        $commentParamLeft = $commentParamLength - $commentParamRight;
        $commentRight = array_slice($commentParam, 0, $commentParamRight);
        $commentLeft = array_slice($commentParam, $commentParamRight, $commentParamLeft);
        ?>
        <form action="<?= URL ?>addcomment/setComment" method="post">
            <div class="innerContent">
                <div class="right">
                    <div class="pic"><img src="public/img/product gallery/<?= $productInfo['id'] ?>/product350.jpg">
                    </div>
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
                                <input name="value_<?= $right['id'] ?>" type="hidden" value="3" class="flat-slider">
                                <?php
                            }
                            ?>
                        </div>
                        <div class="rowLeft">
                            <?php
                            foreach ($commentLeft as $left) {
                                ?>
                                <h4><?= $left['title'] ?></h4>
                                <input name="value_<?= $left['id'] ?>" type="hidden" value="3" class="flat-slider">
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="commentForm">
                <h3>
                    دیگران را با نوشتن نقد، بررسی و نظرات خود، برای انتخاب این محصول راهنمایی کنید.
                </h3>
                <div class="innerComment">
                    <label>
                        عنوان نقد و بررسی شما (اجباری)
                    </label>
                    <input name="title" maxlength="50">
                    <div class="pos-neg">
                        <div class="right">
                            <div class="pos">
                                <label>
                                    نقاط قوت
                                </label>
                                <input name="posotive[]" maxlength="25">
                                <i class="fas fa-plus-circle" onclick="plus(plus, this)"></i>
                                <i class="fas fa-minus-circle"></i>
                            </div>
                        </div>
                        <div class="left">
                            <div class="neg">
                                <label>
                                    نقاط ضعف
                                </label>
                                <input name="negative[]" maxlength="25">
                                <i class="fas fa-plus-circle" onclick="plus(negative, this)"></i>
                                <i class="fas fa-minus-circle"></i>
                            </div>
                        </div>
                    </div>
                    <label>
                        متن نقد و بررسی شما (اجباری)
                    </label>
                    <textarea class="textarea" name="content"></textarea>
                </div>
                <input name="productId" type="hidden" value="<?= $productInfo['id'] ?>">
                <input name="date" type="hidden" value="<?= jdate("j F Y - h:s", time()); ?>">
                <button>ثبت نظر</button>
            </div>
        </form>
    </div>
</div>
<script>
    var negative;

    function plus(mood, tag) {
        if (mood == plus) {
            var addInputPlus = '<div class="pos"><label> نقاط قوت </label><input name="posotive[]" maxlength="25"> <i class="fas fa-plus-circle" onclick="plus(plus, this)"> </i> <i class="fas fa-minus-circle" onclick="minus(plus, this)"></i> </div>';
            $(tag).parents('.right').append(addInputPlus);
        }
        if (mood == negative) {
            var addInputNegative = '<div class="neg"><label> نقاط ضعف </label><input name="negative[]" maxlength="25"> <i class="fas fa-plus-circle" onclick="plus(negative, this)"></i> <i class="fas fa-minus-circle" onclick="minus(negative, this)"></i> </div>';
            $(tag).parents('.left').append(addInputNegative);
        }
    }

    function minus(mood, tag) {
        if (mood == plus) {
            $(tag).parent('.pos').remove();
        }
        if (mood == negative) {
            $(tag).parent('.neg').remove();
        }
    }

    $(".flat-slider").flatslider({
        min: 1,
        max: 5,
        step: 1,
        value: 3,
        range: "min" // false | true | "min" | "max"
//        einheit: '&euro;'
    });
</script>