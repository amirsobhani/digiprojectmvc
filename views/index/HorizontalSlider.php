<div id="slider-hr">
    <div id="main-slider" class="dk-box">
        <i class="fa fa-angle-right fa-4x" aria-hidden="true" onClick="preSlider()"></i>
        <?php
        foreach ($data as $HorizontalSlider){
            ?>
            <a href="<?= $HorizontalSlider['link'] ?>" class="slider-a">
                <img src="<?= $HorizontalSlider['img'] ?>"/>
            </a>
            <?php
        }
        ?>
        <i class="fa fa-angle-left fa-4x" aria-hidden="true" onClick="nextSlider()"></i>
    </div>
    <div id="slider-navigator">
        <ul>
            <li class="tab-item"><a>انواع پخش کننده</a></li>
            <li class="tab-item"><a>انواع پخش کننده</a></li>
            <li class="tab-item"><a>انواع پخش کننده</a></li>
            <li class="tab-item"><a>انواع پخش کننده</a></li>
            <li class="tab-item"><a>انواع پخش کننده</a></li>
        </ul>
    </div>
</div> <!--Horizontal Slider--->
<script>

    var slide = 1;
    var slider_a = $('#main-slider').find('.slider-a');
    var tabItem = $('.tab-item');
    var numItems = (slider_a).length;
    var timeOut = 5000;

    function slider() {
        if (slide > numItems) {
            slide = 1;
        }
        if (slide <= 0) {
            slide = numItems;
        }
        slider_a.hide();
        slider_a.eq(slide - 1).fadeIn(100);
        tabItem.removeClass('active-hr-slider');
        tabItem.eq(slide - 1).addClass('active-hr-slider');
        slide++;
    }

    slider();
    var sliderInterval = setInterval(slider, timeOut);
    slider_a.eq(0).fadeIn();

    $('#slider-hr').mouseleave(function () {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider, timeOut);
    });

    function preSlider() {
        clearInterval(sliderInterval);
        slide = slide - 2;
        slider();
    }

    function nextSlider() {
        clearInterval(sliderInterval);
        slider();
    }

    $('#slider-navigator .tab-item').click(function () {
        clearInterval(sliderInterval);
        var index = $(this).index();
        goToSlide(index + 1);
    });

    function goToSlide(index) {
        slide = index;
        slider();
    }

</script> <!--Horizontal Slider--->
<style>
    #slider-hr {
        width: 890px;
        height: 310px;
        margin-bottom: 10px;
        position: relative;
    }

    #main-slider {
        width: 100%;
        height: 100%;
        position: relative;
        margin: 10px 0 0 0;
        overflow: hidden;
    }

    .slider-a {
        display: none;
    }

    #slider-navigator {
        width: 890px;
        height: 43px;
        background-color: rgba(92, 92, 92, 0.5);
        position: absolute;
        top: 265px;
    }

    .tab-item {
        width: 20%;
        line-height: 43px;
        direction: rtl;
        float: right;
        text-align: center;
        font-size: 13px;
        font-family: iran-sans;
        cursor: pointer;
    }

    #main-slider .fa-angle-right {
        color: #fff;
        position: absolute;
        top: 110px;
        right: 0;
        cursor: pointer;
    }

    #main-slider .fa-angle-left {
        color: #fff;
        position: absolute;
        top: 110px;
        right: 864px;
        cursor: pointer;
    }

    .active-hr-slider {
        background-color: #fff;
        color: #000;
        cursor: pointer;
        position: relative;
        cursor: pointer;
    }

    .active-hr-slider::after {
        content: " ";
        width: 0;
        height: 0;
        top: -11px;
        right: 0;
        left: 0;
        margin: 0 auto;
        position: absolute;
        border-style: solid;
        border-width: 0 12.5px 12px 12.5px;
        border-color: transparent transparent #fff transparent;
    }
</style><!--Horizontal Slider--->