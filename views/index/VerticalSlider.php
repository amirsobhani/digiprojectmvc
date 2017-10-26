<div id="slider-vr" class="dk-box">
    <?php
    foreach ($data[1] as $row) {

        ?>
        <a href="<?= URL ?>product/index/<?= $row['id']; ?>">
            <div class="slider-vr-content">
                <div class="vr-content-right">
                    <p class="vr-content-title">پیشنهاد شگفت انگیز امروز</p>
                    <div class="vr-price-info">
                        <span class="price-old"><?= $row['price']; ?></span>
                        <span class="price-new"><?= $row['price_total'] ?>
                            هزار تومان</span>
                    </div>
                    <div class="vr-meta">
                        <span class="vr-slider-meta"><p>دارای 5 تیغه با سه شکل مختلف </p></span>
                        <span class="vr-slider-meta"><p>دارای سنسور تشخیص تراکم مو و تنظیم سرعت موتور </p></span>
                        <span class="vr-slider-meta"><p>تیغه‌های تیز شده به کمک فناوری نانو با زاویه‌ی 30 درجه </p></span>
                    </div>
                    <span class="timer-title"><p>فرصت باقی مانده تا این پیشنهاد</p></span>
                    <div class="flipTimer">
                        <div class="hours"></div>
                        <div class="minutes"></div>
                        <div class="seconds"></div>
                    </div>
                </div>
                <div class="vr-content-left">
                    <span class="vrslider-title"><?= $row['title'] ?></span>
                    <span class="vrslider-img"><img
                                src="public/img/product gallery/<?= $row['id']; ?>/product220.jpg"/> </span>
                </div>
            </div>
        </a>
        <?php
    }


    ?>
    <div class="finished"><img src="public/img/Finished_Badge.png"/></div>
    <div id="slider-vr-navigator">
        <ul>
            <?php
            foreach ($data[1] as $row) {
                ?>
                <li><a><?= $row['title'] ?></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
</div><!--Vertical Slider-->
<script>
    var navSlide = 1;
    var navTimeOut = 5000;
    var sliderVr = $('#slider-vr');
    var selNav = $('#slider-vr-navigator ul li');
    var selVrSlide = $('.slider-vr-content');
    var numNavItems = selNav.length;
    function navSlider() {
        if (navSlide > numNavItems) {
            navSlide = 1;
        }
        if (navSlide <= 0) {
            navSlide = numNavItems;
        }
        selVrSlide.hide();
        selVrSlide.eq(navSlide - 1).fadeIn(200);
        selNav.find('a').removeClass('active-vr-nav');
        selNav.find('a').eq(navSlide - 1).addClass('active-vr-nav');
        navSlide++;
    }
    navSlider();
    var sliderNavInterval = setInterval(navSlider, navTimeOut);
    sliderVr.find('a').eq(0).find(selVrSlide).fadeIn();

    sliderVr.mouseleave(function () {
        clearInterval(sliderNavInterval);
        sliderNavInterval = setInterval(navSlider, navTimeOut);
    });

    selNav.click(function () {
        clearInterval(sliderNavInterval);
        var navIndex = $(this).index();
        goToNavSlide(navIndex + 1);
    });
    function goToNavSlide(navIndex) {
        navSlide = navIndex;
        navSlider();
    }
</script><!--Vertical Slider-->
<script>
    $('.flipTimer').flipTimer({
        direction: 'down',
        date: '<?php echo $data[2]; ?>',
        //'september 23, 2017 16:47:30',
        callback: function () {
            $('.slider-vr-content').css('filter', 'blur(3px)');
            $('.finished').fadeIn(100);
        }
    });
</script><!--Timer Script-->
<style>
    #slider-vr {
        width: 890px;
        height: 310px;
        margin: 10px 0;
    }

    .slider-vr-content {
        width: 699px;
        height: 310px;
        float: right;
        position: relative;
        display: none;
    }

    #slider-vr-navigator {
        width: 189px;
        height: 310px;
    }

    #slider-vr-navigator ul li {
        width: 100%;
        height: 38.5px;
        position: relative;
        cursor: pointer;
    }

    #slider-vr-navigator ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        font-size: 12px;
        font-family: iran-sans;
        line-height: 38.5px;
        background-color: #E8E8E8;
    }

    .active-vr-nav {
        background-color: #FF5252 !important;
        color: #fff;
    }

    .active-vr-nav::after {
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19.5px 0 19.5px 20px;
        border-color: transparent transparent transparent #FF5252;
        position: absolute;
        top: 0;
        right: -20px;
    }

    .vr-content-left {
        width: 53%;
        height: 100%;
        float: left;
    }

    .vr-content-right {
        width: 40%;
        height: 85%;
        float: right;
        padding-top: 45px;
        padding-right: 45px;
    }

    .vrslider-title {
        display: block;
        width: 50%;
        height: 10%;
        margin: 20px auto;
        line-height: 20px;
        direction: rtl;
        text-align: center;
        font-size: 16px;
        font-family: iran-sans;
    }

    .vrslider-img {
        display: block;
        width: 58%;
        height: 72%;
        margin: 0 auto;
    }

    .vr-content-right .vr-content-title {
        direction: rtl;
        font-size: 15px;
        font-family: iran-sans;
        font-weight: bolder;
        color: red;
        margin-bottom: 5px;
    }

    .vr-price-info {
        width: 230px;
        height: 35px;
        float: right;
    }

    .price-old {
        display: block;
        width: 33%;
        float: right;
        height: 100%;
        background-color: #777575;
        margin-left: 2px;
        position: relative;
        color: #fff;
        direction: rtl;
        line-height: 35px;
        text-align: center;
        font-family: iran-sans;
        font-size: 18px;
    }

    .price-old::after {
        content: " ";
        height: 0;
        border-style: solid;
        border-width: 10px 12px 10px 0;
        border-color: transparent #777575 transparent transparent;
        position: absolute;
        top: 7px;
        right: 76px;
        z-index: 2;
    }

    .price-old::before {
        content: " ";
        width: 90%;
        height: 0;
        position: absolute;
        border-bottom: 2px solid #000;
        right: 1px;
        top: 16px;
        transform: rotate(-20deg);
    }

    .price-new {
        display: block;
        width: 66%;
        float: left;
        height: 100%;
        background-color: #E01916;
        position: relative;
        color: #fff;
        direction: rtl;
        line-height: 35px;
        text-align: center;
        font-family: iran-sans;
        font-size: 18px;
    }

    .price-new::before {
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 12px 15px 12px 0;
        border-color: transparent #fff transparent transparent;
        position: absolute;
        top: 5px;
        right: -1px;
    }

    .vr-meta {
        margin: 60px 0;
    }

    .vr-slider-meta {
        direction: rtl;
        float: right;
        display: block;
        width: 300px;
        line-height: 21px;
        font-family: iran-sans;
        font-size: 12px;
    }

    .flipTimer {
        transform: scale(0.3);
        position: absolute;
        top: 210px;
        right: -130px;
    }

    .timer-title {
        direction: rtl;
        float: right;
        display: block;
        width: 300px;
        line-height: 21px;
        font-family: iran-sans;
        font-size: 15px;
        margin-top: 35px;
        font-weight: bolder;
    }

    .finished {
        position: absolute;
        top: 225px;
        right: 75px;
        display: none;
    }
</style><!--Vertical Slider--->
