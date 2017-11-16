<div class="comment">
    <div class="comment-rate">
        <div class="comment-header">
            <h2><i class="fa fa-caret-left" aria-hidden="true"></i> امتیاز کاربران به:</h2>
            <p>
                گوشي موبايل سامسونگ مدل Galaxy S8 G950FD دو سيم کارت
            </p>
        </div>
        <?php
        $comment_params = $data[2];
        foreach ($comment_params as $param) {
            ?>
            <div class="rated">
										<span class="rate-title">
											<?= $param['title']; ?>
										</span>
                <ul class="rate-list">
                    <li><span class="full"></span></li>
                    <li><span class="full"></span></li>
                    <li><span class="full"></span></li>
                    <li><span style="width:90%"></span></li>
                    <li><span></span></li>
                    <span class="numberRate">3.9</span>
                </ul>
            </div>
            <?php
        }
        ?>
    </div><!--comment-rate-->
    <div class="set-comment">
        <div class="txt-count">
            <span>۳.۹</span>
            <span>/۵</span>
            <span>( ۱۶۱۰ نفر )</span>
        </div>
        <p>شما هم می توانید در مورد این کالا نظر بدهید.</p>
        <span class="sing-war">
										برای ثبت نظرات، نقد و بررسی شما لازم است ابتدا وارد حساب کاربری خود شوید. اگر این محصول را قبلا از دیجی کالا خریده باشید، نظر شما به عنوان مالک محصول ثبت خواهد شد.
									</span>
        <button>نظر خود را بنویسید</button>
    </div>
</div><!--set-comment-->
<div id="last-comment">
    <h2 class="people-comment">
        <i class="fa fa-caret-left" aria-hidden="true"></i>
        نظرات کاربران
    </h2>
    <span class="comment-count">(۷۵۳ نظر )</span>
    <div class="comment-sort">
        <span>مرتب سازی بر اساس :</span>
        <ul>
            <li>
                <label>
                    جدیدترین نظرات
                </label>
                <div class="input-sort">
                    <input type="radio" autocomplete="on" name="comment"/>
                </div>
            </li>
            <li>
                <label>
                    مفیدترین نظرات
                </label>
                <div class="input-sort">
                    <input type="radio" autocomplete="off" name="comment"/>
                </div>
            </li>
        </ul>
    </div>

    <?php
    $getComment = $data[3];
    foreach ($getComment as $comment) {
        ?>
        <div class="user-comment">
            <div class="comment-form">
                <header>
                    <span class="user-name">امیرحسین سبحانی</span>
                    <span class="comment-time"><?= $comment['date'] ?></span>
                </header>
                <div class="user-form">
                    <div class="comment-form-rate">
                        <?php
                        $rates = unserialize($comment['params']);
                        foreach ($comment_params as $param) {
                            $param_id = $param['id'];
                            $rate = $rates[$param_id];
                            ?>
                            <div class="rated">
												<span class="rate-title">
													<?= $param['title']; ?>
												</span>
                                <ul class="rate-list">
                                    <?php
                                    for ($i = 0; $i < $rate; $i++) {
                                        ?>
                                        <li><span class="full"></span></li>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    for ($i = 0; $i < 5 - $rate; $i++) {
                                        ?>
                                        <li><span></span></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <?php
                        }
                        ?>
                    </div><!--comment-form-rate-->
                    <div class="comment-form-description">
                        <h3 class="comment-form-title">
                            <?= $comment['title'] ?>
                        </h3>
                        <div class="advantages">
                            <span>نقاط قوت</span>
                            <ul>
                                <?php
                                $posotive = unserialize($comment['posotive']);
                                foreach ($posotive as $pos_neg) {
                                    ?>
                                    <li>
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span><?= $pos_neg; ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="disadvantages">
                            <span>نقاط ضعف</span>
                            <ul>
                                <?php
                                $negative = unserialize($comment['negative']);
                                foreach ($negative as $pos_neg) {
                                    ?>
                                    <li>
                                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        <span><?= $pos_neg; ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <p>
                            <?= $comment['content']; ?>
                        </p>
                        <div class="comment-usefull">
                            <span>آیا این نظر برایتان مفید بود ؟</span>
                            <a class="like">
                                <span>بلی</span>
                                <span class="counter"><?= $comment['like']; ?></span>
                            </a>
                            <a class="dislike">
                                <span>خیر</span>
                                <span class="counter"><?= $comment['dislike']; ?></span>
                            </a>
                        </div>
                    </div>
                </div><!--user-form-->
            </div>
        </div><!--user-comment-->
        <?php
    }
    ?>
    <style>
        .comment-usefull > span {
            margin-left: 20px;
            font-size: 14px;
        }

        .comment-usefull {
            float: left;
            margin: 35px 10px 10px;
        }

        .comment-usefull .counter {
            float: left;
        }

        .comment-usefull a {
            margin-left: 10px;
            font-size: 11px;
            border: 1px solid #ccc;
            width: 35px;
            display: inline-block;
            line-height: 25px;
            border-radius: 3px;
            color: #91a2ad;
            cursor: pointer;
            padding: 0 10px;
            background-color: #fff;
        }

        .user-form {
            background-color: #FAFBFC;
            border: 1px solid #eee;
            box-shadow: 0 3px 1px rgba(0, 0, 0, 0.2);
        }

        .user-form::after {
            content: "";
            clear: both;
            display: block;
        }

        .disadvantages {
            line-height: 30px;
        }

        .disadvantages > span {
            color: #ff5153;
        }

        .disadvantages ul i {
            color: #ff5153;
        }

        .advantages > span {
            color: #4caf50;
        }

        .advantages ul i {
            color: #4caf50;
        }

        .advantages {
            float: right;
            line-height: 30px;
            margin-left: 135px;
            width: 270px;
        }

        .user-comment {
            margin-top: 35px;
        }

        .comment-form header {
            background-color: #F5F6F7;
            border: 1px solid #eee;
            border-radius: 4px;
            padding: 5px 20px;
        }

        .user-name {
            font-size: 14px;
            display: block;
            margin: 10px 0;
        }

        .comment-time {
            font-size: 12px;
            color: #777;
        }

        .comment-form-rate {
            background-color: #FAFBFC;
            width: 35%;
            padding: 37px 15px 20px 15px;
            display: inline-block;
        }

        .comment-form-rate .rated .rate-title {
            font-size: 10px;
            width: 120px;
            display: inline-block;
            font-weight: 600;
        }

        .comment-form-rate .rate-list {
            height: 5px;
            margin: 0;
            vertical-align: none;
        }

        .comment-form-rate .rate-list li {
            width: 40px;
            position: relative;
            top: -7px;
        }

        .comment-form-rate .full {
            background-color: #a1a6b5;
            display: block;
        }

        .comment-form-rate .rate-list span {
            background-color: #a1a6b5;
            right: 0;
            top: 0;
            height: 100%;
        }

        .comment-form-rate .rated {
            margin: 15px 30px 0 0;
        }

        .comment-form-description {
            width: 59%;
            display: inline-block;
            float: left;
            padding: 37px 15px 20px 15px;
        }

        .comment-form-title {
            line-height: 31px;
            font-size: 14px;
            color: #686868;
            margin-bottom: 24px;
        }
    </style><!--last-comment-->
    <style>
        .input-sort {
            display: inline-block;
            position: relative;
            top: 4px;
        }

        .comment-sort ul li {
            float: right;
            margin-left: 10px;
        }

        .comment-sort ul {
            float: left;
            font-size: 12px;
        }

        .comment-sort > span {
            float: right;
            font-size: 13px;
            color: #2196F3;
            margin-left: 15px;
        }

        .comment-sort {
            line-height: 30px;
            width: 32%;
            float: left;
        }

        #last-comment {
            display: block;
            margin: 80px 10px 10px;
            border-bottom: 2px solid #eee;
            padding-bottom: 40px;
        }

        .comment-count {
            font-size: 12px;
        }
    </style><!---comment-sort---->
    <style>
        .set-comment button {
            width: 140px;
            line-height: 45px;
            float: left;
            margin: 18px 0 40px 0;
            font-family: iran-sans;
            background-color: #208DE6;
            border: 1px solid #ebeced;
            border-radius: 4px;
            color: #fff;
            box-shadow: 0 3px 4px #eee;
            overflow: hidden;
        }

        .sing-war {
            text-align: justify;
            display: block;
            line-height: 30px;
            margin: 45px 0;
            font-size: 14px;
        }

        .set-comment {
            display: inline-block;
            width: 49%;
            float: left;
            direction: rtl;
            margin-left: 20px;
        }

        .set-comment > p {
            font-size: 20px;
            font-weight: 400;
            font-size: 20px;
            font-weight: 400;
            padding: 0 !important;
            margin: 10px;
        }
    </style><!--set-comment-->
    <style>

        .people-comment {
            display: inline-block;
            font-size: 19px !important;
        }

        .rate-title {
            font-size: 13px;
            width: 150px;
            display: inline-block;
        }

        .numberRate {
            position: absolute;
            left: -21px;
            font-size: 12px;
        }

        .rate-list li span {
            background-color: #69CA6D;
            display: block;
            height: 80%;
            position: relative;
            right: -3px;
            width: 0;
        }

        .rate-list li span.full {
            width: 104%;
        }

        .rated {
            margin: 20px 30px 0 0;
        }

        .comment-header h2 {
            display: inline-block;
        }

        .comment-header p {
            padding: 0 !important;
            display: inline-block;
            font-size: 12px;
            margin-right: 8px;
        }

        .comment-rate {
            width: 47%;
            display: inline-block;
            direction: rtl;
        }

        .rate-list {
            position: relative;
            vertical-align: middle;
            height: 10px;
            display: inline-block;
            background-color: #EBECED;
            margin-right: 15px;
        }

        .rate-list li {
            width: 60px;
            height: 100%;
            display: inline-block;
            border-left: 1px solid #fff;
        }
    </style><!--comment-rate-->