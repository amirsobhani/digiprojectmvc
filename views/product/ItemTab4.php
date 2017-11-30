


<h2><i class="fa fa-caret-left" aria-hidden="true"></i>پرسش و پاسخ خود را مطرح نمایید</h2>
<div class="question-write">
    <textarea>متن پرسش خود را اینجا بنویسید . . .</textarea>
</div>
<button class="set-question">
    ثبت پرسش
</button>
<div class="rules">
    <label>
        <input type="checkbox"/>
    </label>
    <label class="question-answer">
        اولین پاسخی که به پرسش من داده شد، از طریق ایمیل به من اطلاع دهید.
    </label>
    <span>
									با انتخاب دکمه “ثبت پرسش”، موافقت خود را با قوانین انتشار محتوا در دیجی کالا اعلام می کنم.
								</span>
</div>

<?php
$question = $data[5];
$answer = $data[6];
foreach ($question as $row){
?>
<div class="member-question">
    <div class="main-question">
        <header class="question-header">
            <i class="fa fa-question-circle-o" aria-hidden="true"></i>
            <span>پرسش</span>
            <div class="question">
                <span>توسط امیرحسین سبحانی</span>
                <span>-</span>
                <span><?= $row['date'] ?></span>
            </div>
        </header>
        <div class="question-content">
            <span>
                <?= $row['content'] ?>
            </span>
        </div>
    </div><!---main-question--->
    <?php
    }
        foreach ($answer as $row){
        ?>
        <div class="answer">
            <header class="answer-header">
                <h4>امیرحسین سبحانی</h4>
                <h4><?= $row['date'] ?></h4>
                <span class="like">4<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
</span>
                <span class="dislike">5<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
</span>
            </header>
            <div class="joda"></div>
            <h4 class="answer-title">پاسخ :</h4>
            <div class="answer-content">
                <div>
                    <?= $row['content'] ?>
                </div>
            </div>
        </div><!---answer--->
    </div><!---member-question--->

    <?php
}

?>

<!--<div class="member-question">-->
<!--    <div class="main-question">-->
<!--        <header class="question-header">-->
<!--            <i class="fa fa-question-circle-o" aria-hidden="true"></i>-->
<!--            <span>پرسش</span>-->
<!--            <div class="question">-->
<!--                <span>توسط امیرحسین سبحانی</span>-->
<!--                <span>-</span>-->
<!--                <span>آبان 1396</span>-->
<!--            </div>-->
<!--        </header>-->
<!--        <div class="question-content">-->
<!--            <span>-->
<!--                سلام-->
<!--                منوی فارسی توی بخش سلامتی قسمت سنجش اکسیژن خون فعاله برای اونایی که خریدن؟؟؟؟-->
<!--                واسه نوت 5 من که منو فارسیه فعال نیست ولی دوستم که منوی فارسی نداره فعاله-->
<!--            </span>-->
<!--        </div>-->
<!--    </div><!---main-question--->
<!---->
<!--    <div class="answer">-->
<!--        <header class="answer-header">-->
<!--            <h4>امیرحسین سبحانی</h4>-->
<!--            <h4>۲۰ آبان ۱۳۹۶</h4>-->
<!--            <span class="like">4<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>-->
<!--</span>-->
<!--            <span class="dislike">5<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>-->
<!--</span>-->
<!--        </header>-->
<!--        <div class="joda"></div>-->
<!--        <h4 class="answer-title">پاسخ :</h4>-->
<!--        <div class="answer-content">-->
<!--            <div>-->
<!--                داخل گوگل بنویسید پارس ماکروتل بعد وارد سایتش بشین قسمت درباره ما آدرس و شماره تلفنشون هست تماس بگیرین-->
<!--                راهنماییتون کنن.-->
<!--            </div>-->
<!--        </div>-->
<!--    </div><!---answer--->
<!--</div><!---member-question--->

<!--item-tab 4-->
<style>
    .answer-content {
        margin: 10px 40px;
        padding: 15px 0;
    }

    .answer-title {
        margin: 10px 40px;
        color: #4caf50;
    }

    .answer-header {
        margin: 50px 45px 0;
        font-size: 13px;
    }

    .answer-header h4 {
        display: inline-block;
    }

    .member-question {
        content: "";
        display: block;
        clear: both;
        margin: 10px;
        box-shadow: 0px 3px 7px #ccc;
    }

    .like {
        float: left;
        display: block;
        color: #777;
        border: 1px solid #777;
        border-radius: 3px;
        padding: 5px 10px;
    }

    .like i {
        margin-right: 5px;
    }

    .dislike {
        float: left;
        display: block;
        color: #777;
        border: 1px solid #777;
        border-radius: 3px;
        padding: 5px 10px;
        margin-left: 10px;
    }

    .dislike i {
        margin-right: 5px;
    }

    .joda {
        border-bottom: 1px solid #ccc;
        height: 0;
        width: 93%;
        margin: 0 auto;
        margin-top: 0px;
        margin-top: 35px;
    }

    .question-header {
        display: block;
        padding: 10px 20px;
        background-color: #E8E9EB;
        font-size: 13px;
        line-height: 22px;
        box-shadow: 1px 1px 10px #eee;
        border-radius: 3px 3px 0 0;
    }

    .question {
        line-height: 22px;
        display: inline-block;
        float: left;
    }

    .question-content {
        padding: 20px;
        background: #F5F6F7;
    }

    .rules span {
        display: block;
    }

    .rules {
        margin-left: 50px;
        float: left;
        width: 450px;
        line-height: 30px;
        font-size: 13px;
    }

    .set-question {
        width: 140px;
        line-height: 45px;
        float: left;
        margin: 18px 0 40px 20px;
        font-family: iran-sans;
        background-color: #208DE6;
        border: 1px solid #ebeced;
        border-radius: 4px;
        color: #fff;
        box-shadow: 0 3px 4px #eee;
        overflow: hidden;
    }

    .question-write {
        text-align: center;
        margin: 30px auto;
    }

    .question-write textarea {
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        border: 1px solid #d4dbde;
        width: 98%;
        height: 135px;
        text-align: right;
        direction: rtl;
        font: 13px iran-sans;
        color: #555;
        padding: 11px;
        -ms-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin-bottom: 14px;
        resize: none;
    }
</style><!--item-tab 4-->