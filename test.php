<style>
    .scroll-slider{
        width: 890px;
        height: 310px;
        background-color: #fff;
        overflow: hidden;
        position: relative;
        margin-bottom: 10px;
    }
    .scroll-slider h3{
        direction: rtl;
        line-height: 35px;
        padding: 0 13px;
        font-family: iran-sans;
        font-size: 13px;
        background-color: #E8E8E8;
    }
    .scroll-next{
        width: 50px;
        height: 275px;
        float: right;
    }
    .scroll-prev{
        width: 50px;
        height: 275px;
        float: left;
        position: absolute;
        top: 35px;
        left: 0;
        background-color: #fff;
        box-shadow: 0px 15px 15px #888888;
    }
    .scroll-slider i{
        text-align: center;
        display: block;
        line-height: 275px;
        color: #B8B8B8B8;
        background-color: #fff;
        cursor: pointer;
    }
    .scroll-main{
        height: 90%;
        overflow: hidden;
        margin-right: 50px;
    }
    .scroll-main ul{
        height: 100%;
        width: 870px;
        float: right;
        overflow: hidden;
    }
    .scroll-main ul li{
        width: 250px;
        height: 100%;
        float: right;
        padding: 0px 20px;
        position: relative;
    }
    .scroll-main ul li::after{
        content: " ";
        height: 190px;
        top: 41px;
        left: 0;
        margin: 0 auto;
        position: absolute;
        border-style: solid;
        border-width: 0.5px;
        border-color: #B8B8B8B8;

    }
    .scroll-product{
        text-align: center;
        display: block;
        height: 90%;
        padding-top: 25px;
    }
    .scroll-product img{
        margin: 30px auto;
        float: right;
        display: block;
    }
    .scroll-product .product-meta{
        direction: rtl;
        font-family: iran-sans;
        font-size: 14px;
        line-height: 20px;
        width: 40%;
        display: block;
        text-align: center;
        padding: 20px 0;
        color: #153574;
    }
    .scroll-product .product-price{
        line-height: 25px;
        text-align: center;
        font-family: iran-sans;
        font-size: 13px;
        direction: rtl;
        width: 40%;
    }
    .product-price-old{
        background-color: #ccc;
        width: 100%;
        display: block;
        text-decoration-line: line-through;
        margin: 5px 0;
    }
    .product-price-old{
        background-color: #a6d45b;
        width: 100%;
        display: block;
    }
</style><!--Scroll Slider-->
<div class="scroll-slider dk-box">
    <h3>پرفروش ترین</h3>
    <div class="scroll-next" onClick="scroll('left',this);"><i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></div>
    <div class="scroll-main">
        <ul>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
            <li>
                <a class="scroll-product">
                    <img src="public/img/scroll slider/Samsung-Galaxy-S8-Dual-SIM-Mobile-Phone-a8bcd0.jpg"/>
                    <span class="product-meta">
گوشي موبايل سامسونگ مدل Galaxy S8 Plus SM-G955FD دو سيم کارت</span>
                    <div class="product-price">
                        <span class="product-price-old">2,700,000</span>
                        <span class="product-price-new">2,809,000 تومان</span>
                    </div>

                </a>
            </li>
        </ul>
    </div>
    <div class="scroll-prev" onClick="scroll('right',this);"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i></div>

</div><!--Scroll Slider-->
<script>
    function scroll(direction,tag){

        var slideTag = $(tag);
        var sliderScrollUl = slideTag.parent('.scroll-slider').find('ul');
        var liLength = sliderScrollUl.find('li').length;
        var liWidth = parseInt(sliderScrollUl.find('li').outerWidth());
        var ulWidthSize = (liLength) * (liWidth);
        var maxMargin = (liLength - 3) * liWidth;
        var marginRight = parseFloat(sliderScrollUl.css('margin-right'));
        sliderScrollUl.css("width", ulWidthSize);

        if(direction == 'left'){
            marginRight=marginRight-liWidth;
            if((-marginRight) > maxMargin){
                marginRight = (-maxMargin)-80;
            }
        }
        if(direction == 'right'){
            marginRight=marginRight+liWidth;
            if(marginRight > 0){
                marginRight = 0;
            }
        }
        sliderScrollUl.animate({'marginRight':marginRight},1000);
    }
    $('.scroll-next').click(function(){
        scroll('left',this);
    });
    $('.scroll-prev').click(function(){
        scroll('right',this);
    });



</script><!--Scroll Slider-->

