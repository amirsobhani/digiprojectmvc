<div class="item-tab">

</div><!--item-tab 1-->

<script>
    $('.tabListChild h3').click(function(){
        var tabContent = $(this).parent().find('.tabContent');
        var i = $(this).find('i');
        var tabDisplay = tabContent.css('display');
        if(tabDisplay == 'block'){
            i.removeClass('fa-minus-square');
            i.addClass('fa-plus-square');
            tabContent.slideUp(200);
        }else{
            i.removeClass('fa-plus-square');
            i.addClass('fa-minus-square');
            tabContent.slideDown(200);
        }
    });

    $('.product-tab-header li').click(function(){
        var body = $("html, body");
        var sticky = $('.product-tab').offset().top;
        body.animate({scrollTop:sticky-50},500);

        $('.product-tab-header li').removeClass('active');
        $(this).addClass('active');
        var index = $(this).index();
        $('.item-tab').hide();
        $('.item-tab').eq(index).fadeIn();
    });



</script><!--item-tab 1-->
<style>
    .tabContent{
        padding: 29px;
        text-align: justify;
        line-height: 33px;
    }
    .tabContent img{
        margin: 40px auto;
        display: block;
    }
    .tabList{
        margin: 0 30px;
        border-right: 3px solid #ccc;
    }
    .tabListChild{
        margin: 35px 0;
        position: relative;
    }
    .tabListChild::after{
        background: #e5e5e5;
        content: "";
        height: 1px;
        position: absolute;
        right: -12px;
        top: 10px;
        width: 100%;

    }
    .tabListChild h3{
        font-size: 20px;
        position: relative;
        padding: 0 30px 0 20px;
        z-index: 1;
        background: #fff;
        display: inline-block;
        cursor: pointer;
    }
    .tabListChild h3 i{
        position: absolute;
        right: -11px;
        top: -2px;
        color: #a2a2a2;
        cursor: pointer;
        font-size: 25px;
        background: #fff;
    }
    .item-tab p{
        line-height: 33px;
        text-align: justify;
        padding: 30px;
    }
    .item-tab h2{
        font-size: 20px;
        padding-right: 30px;
    }
    .fa-caret-left{
        color: #2196F3;
        margin-left: 10px;
    }
    #tab .item-tab:first-child{
        display: block;
    }
    .item-tab{
        width: 100%;
        background-color: #fff;
        display: none;
        padding: 40px 0;
    }
    .product-tab{
        width: 100%;
        display: inline-block;
        direction: rtl;
    }
    .product-tab-header{
        line-height: 50px;
        font-size: 12px;
        background-color: #F5F6F7;
        border: 1px solid #eee;
        border-bottom: none;
        border-radius: 4px;
        margin: 0 auto;
        width: 1190px;
    }
    .product-tab-header li{
        display: inline-block;
        padding: 0 20px;
        cursor: pointer;
        box-shadow: 0px 0px 16px #eee;
    }
    .product-tab-header li:first-child{
        display: inline-block;
    }
    .product-tab-header li.active{
        background-color: #fff;
        color: #2196F3;
        border-top: 3px solid #2196F3;
        border-bottom: none;
        box-shadow: 0 -2px 2px #ccc;
    }
</style><!--item-tab 1-->