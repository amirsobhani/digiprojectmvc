<div class="fast-explain dk-box">
    <h2>
        معرفی اجمالی محصول
        <span>گوشي موبايل سامسونگ مدل Galaxy S8 G950FD دو سيم کارت </span>
    </h2>
    <div class="text">
        <p>
            <?= $productInfo['introduction']; ?>
        </p>
    </div>
    <a class="product-more-less">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
        <span class="more-less-pro">نمایش بیشتر</span>
    </a>
</div>
<style>
    .text{
        color: #666;
    }

    .product-more-less{
        cursor: pointer;
        direction: rtl;
        display: block;
        text-align: center;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0px;
        line-height: 200px;
        height: 120px;
        background: linear-gradient(to bottom ,rgba(255,255,255,0.5) 0%,#fff);
    }
    .product-more-less i{
        margin-left: 10px;
        transition-duration: 0.4s;
    }
    .rotate{
        transform: rotate(180deg);
        transition-duration: 0.4s;
    }
    .height{
        height: auto!important;
        transition-duration: 1s;
    }
    .fast-explain{
        position: relative;
        width: 100%;
        height: 450px;
        margin-bottom: 15px;
        direction: rtl;
        padding: 25px 25px 120px 25px;
        text-align: justify;
        line-height: 35px;
    }
    .fast-explain h2{
        font-size: 23px;
    }
    .fast-explain h2 span{
        display: block;
        font-size: 14px;
        color: #777;
        margin: 30px 0;
    }
</style><!--fast-explain--->
<script>

    $('.product-more-less').click(function(){
        var height = $(this).parent().css('height');

        if(parseInt(height) <= 450){
            $(this).find('.more-less-pro').text("نمایش کمتر");

        }else{
            $(this).find('.more-less-pro').text("نمایش بیشتر");
        }


        $(this).find('i').toggleClass('rotate');
        $(this).parent('.fast-explain').toggleClass('height');

    });
</script><!---caption-more-less-->