<style>
    #main{
        background-image: url(public/img/1503990105pattern42.png);
    }
    #main::after{
        content: " ";
        display: block;
        clear: both;
    }
    #filter-panel{
        width: 15%;
        background-color: #fff;
        float: right;
        margin: 15px 5px;
        border: 1px solid #eee;
        border-radius: 4px;
    }
    #filter-panel::after{
        content: " ";
        display: block;
        clear: both;
    }
    .filtered{
        width: 100%;
        border-bottom: 1px solid #eee;
        float: right;
        font-family: iran-sans;
    }
    .filter-header{
        float: right;
        font-size: 15px;
        margin: 15px;
        font-family: iran-sans;
    }
    .filter-clearAll{
        float: left;
        font-size: 12px;
        margin: 15px;
        color: #208DE6;
        cursor: pointer;
    }
    .filter-item{
        float: right;
        width: 100%;
        margin: 10px 0 20px;
    }
    .filter-selected{
        float: right;
        font-size: 13px;
        background-color: #F7F8FA;
        line-height: 25px;
        padding: 0px 5px 0 25px;
        margin: 5px;
        border: 1px solid #c4c4c4;
        border-radius: 2px;
        position: relative;
    }
    .filter-selected i{
        float: left;
        position: absolute;
        left: 5px;
        top: 5px;
        cursor: pointer;
    }
    .filter-existenc{
        width: 98%;
        float: right;
        position: relative;
        margin: 10px 5px;
    }
    .filter-existenc span{
        font-size: 14px;
    }
    .check-box{
        display: block;
        float: right;
        margin-left: 10px;
        z-index: 2;
        position: relative;
        cursor: pointer;
        opacity: 0;
    }
    .active-check{
        width: 15px;
        height: 15px;
        display: block;
        float: right;
        border: 1px solid #eee;
        position: absolute;
        border-radius: 2px;
    }
    .active-check i{
        color: #fff;
        margin-right: 1px;
    }
    .active-check-cheked{
        background-color: #208DE6;
        border-radius: 2px;
        border: none;
    }
    .filter{
        width: 100%;
        float: right;
        position: relative;
        margin: 3px 0;
        border-top: 1px solid #eee;
    }
    .filter-label{
        width: 100%;
        display: block;
        float: right;
        cursor: pointer;
    }

    .filter-header-i{
        float: left;
        position: absolute;
        top: 15px;
        left: 15px;
        cursor: pointer;
    }
    .product-category{
        float: right;
        line-height: 30px;
        font-family: iran-sans;
        font-size: 15px;
        font-weight: bolder;
    }
    .filter-option{
        width: 100%;
        float: right;
        position: relative;
        display: none;
        padding-bottom: 15px;
    }
    .filter-option ul{
        width: 85%;
        margin: 0 auto;
    }
    .filter-option ul li{
        direction: rtl;
    }
    .filter-option ul li i{
        margin-left: 5px;
    }
    .filter-category-ul{
        float: right;
        margin-right: 15px!important;
        direction: rtl;
        padding-right: 15px;
    }
    .filter-category-li{
        width: 100%;
        float: right;
        line-height: 30px;
        font-family: iran-sans;
        font-size: 13px;
    }
    .filter-category-li a{
        float: right;
        display: block;
    }
    .filter-option .search-pro{
        float: right;
        width: 85%;
        font-family: iran-sans;
        padding: 5px;
        color: #777;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin: 12px;
        direction: rtl;
        line-height: 30px;
    }
    .filter-option label{
        position: relative;
        width: 100%;
        margin-bottom: 12px;
        display: block;
        float: right;
        direction: rtl;
        cursor: pointer;
    }
    .per-text{
        font-family: iran-sans;
        line-height: 25px;
        font-size: 12px;
        font-weight: normal;
        color: #4B4B4B;
        float: right;
    }
    .per-text:hover{
        color: #000;
    }
    .en-text{
        font-family: iran-sans;
        line-height: 25px;
        font-size: 12px;
        font-weight: normal;
        float: left;
        margin-left: 20px;
        color: #4B4B4B;
    }
    .en-text:hover{
        color: #000;
    }
    .more{
        display: block;
        float: right;
        direction: rtl;
        font-family: iran-sans;
        margin-right: 9px;
        font-size: 12px;
        color: rgb(32, 141, 230);
        font-weight: bolder;
        cursor: pointer;
    }
    .less{
        display: none;
        float: right;
        direction: rtl;
        font-family: iran-sans;
        margin-right: 9px;
        font-size: 12px;
        color: rgb(32, 141, 230);
        font-weight: bolder;
        cursor: pointer;
        position: absolute;
        bottom: 3px;
        right: 0;
    }
    .more span{
        font-family: iran-sans;
        margin-left: 5px;
        font-size: 12px;
    }
    .back-color{
        display: block;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        float: right;
        margin: 10px 15px 0 10px;
    }
    .input-color{
        position: absolute;
        top: 13px;
        right: 17px;
        opacity: 0;
        cursor: pointer;
    }
    .color-name{
        font-family: iran-sans;
        font-size: 14px;
        color: #fff;
        background-color: #99999B;
        display: block;
        width: 100%;
        position: absolute;
        line-height: 27px;
        top: -25px;
        right: 7px;
        text-align: center;
        border-radius: 2px;
        display: none;
    }
    .color-name::after{
        content: " ";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 7px 7px 0 7px;
        border-color: #99999B transparent transparent transparent;
        top: 27px;
        right: 17px;
        position: absolute;

    }
    .color{
        width: 20%!important;
        margin: 10px 7px 0 0;
    }
    .color-check{
        color: #fff;
        position: relative;
        top: 7px;
        right: 7px;
        display: none;
    }
    .color-check::after{
        content: " ";
        display: block;
        position: absolute;
        top: -7px;
        right: -7px;
        width: 25px;
        height: 25px;
        border: 3px solid #fff;
        border-radius: 100%;
    }
</style><!--filter-panel-->
<div id="filter-panel">
    <div class="filtered">
        <span class="filter-header">انتخاب شما</span>
        <div class="filter-clearAll" onClick="removeAll()">پاک کردن همه</div>
        <div class="filter-item">
        </div>
    </div><!--filtered-->
    <div class="filter-existenc filter-option" style="display: block;">
        <label>
						<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
            <input type="checkbox" class="check-box">
            <span data-id="1" class="per-text">فقط کالاهای موجود</span>
        </label>
    </div><!--filter-existenc-->
    <div class="filter">
        <label class="filter-label">
            <span class="filter-header">دسته بندی</span>
            <span class="filter-header-i"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </label>
        <div class="filter-option">
            <ul>
                <li><span class="product-category"><i class="fa fa-angle-down ngl"></i>کالای دیجیتال</span>
                    <ul class="filter-category-ul">
                        <li class="filter-category-li"><a>موبایل</a></li>
                        <li class="filter-category-li"><a>تبلت و کتابخوان</a></li>
                        <li class="filter-category-li"><a>لپتاپ</a></li>
                        <li class="filter-category-li"><a>کامپیوتر و تجهیزات جانبی</a></li>
                        <li class="filter-category-li"><a>ماشین های اداری</a></li>
                        <li class="filter-category-li"><a>دوربین</a></li>
                        <li class="filter-category-li"><a>لوازم جانبی کالای دیجینال</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!--Product Category-->
    <div class="filter">
        <label class="filter-label">
            <span class="filter-header">برند و سازنده کالا</span>
            <span class="filter-header-i"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </label>
        <div class="filter-option">
            <input autocomplete="off" class="search-pro" type="text" placeholder="جستجو کنید" />
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="2" class="per-text">اپل</span>
                <span class="en-text">Apple</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="3" class="per-text">سامسونگ</span>
                <span class="en-text">Samsung</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="4" class="per-text">سونی</span>
                <span class="en-text">Sony</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input  autocomplete="off" type="checkbox" class="check-box">
                <span data-id="5" class="per-text">نوکیا</span>
                <span class="en-text">Nokia</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="6" class="per-text">ال جی</span>
                <span class="en-text">LG</span>
            </label>

            <span class="more" style="display: none;"><span class="label-length"></span>مورد بیشتر</span>
            <span class="less" style="display: none;">نمایش کمتر</span>
        </div>
    </div><!---Producer & Brand--->
    <div class="filter">
        <label class="filter-label">
            <span class="filter-header">براساس نوع</span>
            <span class="filter-header-i"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </label>
        <div class="filter-option">
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="7" class="per-text">سایر سیستم عامل ها</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="8" class="per-text">سیستم عامل iOS</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="checkbox" class="check-box">
                <span data-id="9" autocomplete="off" class="per-text">سیستم عامل اندروید</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="checkbox" class="check-box">
                <span data-id="10" autocomplete="off" class="per-text">سیستم عامل ویندوز فون</span>
            </label>
        </div>
    </div><!--OS Sort-->
    <div class="filter">
        <label class="filter-label">
            <span class="filter-header">تعداد سیم کارت</span>
            <span class="filter-header-i"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </label>
        <div class="filter-option">
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="11" class="per-text">تک سیم کارت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="12" class="per-text">دو سیم کارت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="13" class="per-text">سه سیم کارت</span>
            </label>
        </div>
    </div><!--Sim Sort-->
    <div class="filter">
        <label class="filter-label">
            <span class="filter-header">حافطه داخلی</span>
            <span class="filter-header-i"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </label>
        <div class="filter-option">
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="14" class="per-text">128 گیگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="15" class="per-text">128 مگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="17" class="per-text">16 گیگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="18" class="per-text">16 مگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="19" class="per-text">1 گیگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="20" class="per-text">256 گیگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="21" class="per-text">256 مگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="22" class="per-text">2 گیگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="checkbox" class="check-box">
                <span data-id="23" class="per-text">32 گیگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="24" class="per-text">32 مگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="25" class="per-text">32 مگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="26" class="per-text">4 گیگابایت</span>
            </label>
            <label>
							<span class="active-check" style="right: 3px;
top: 3px;"><i class="fa fa-check" aria-hidden="true"></i></span>
                <input autocomplete="off" type="checkbox" class="check-box">
                <span data-id="27" class="per-text">4 مگابایت</span>
            </label>
            <span class="more"><span class="label-length"></span>مورد بیشتر</span>
            <span class="less">نمایش کمتر</span>
        </div>
    </div><!--Storage Sort-->
    <div class="filter">
        <label class="filter-label">
            <span class="filter-header">رنگ بندی</span>
            <span class="filter-header-i"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </label>
        <div class="filter-option" style="display: none;">
            <label class="color">
                <input autocomplete="off" class="input-color check-box" type="checkbox"/>
                <span class="back-color" style="background-color: red;">
								<i class="fa fa-check color-check" aria-hidden="true"></i>
							</span>
                <span data-id="28" class="color-name per-text">قرمز</span>
            </label>
            <label class="color">
                <input autocomplete="off" class="input-color check-box" type="checkbox"/>
                <span class="back-color" style="background-color: blue;">
								<i class="fa fa-check color-check" aria-hidden="true"></i>
							</span>
                <span data-id="29" class="color-name per-text">آبی</span>
            </label>
            <label class="color">
                <input autocomplete="off" class="input-color check-box" type="checkbox"/>
                <span class="back-color" style="background-color: green;">
								<i class="fa fa-check color-check" aria-hidden="true"></i>
							</span>
                <span data-id="30" class="color-name per-text">سبز</span>
            </label>
            <label class="color">
                <input autocomplete="off" class="input-color check-box" type="checkbox"/>
                <span class="back-color" style="background-color: black;">
								<i class="fa fa-check color-check" aria-hidden="true"></i>
							</span>
                <span data-id="31" class="color-name per-text">سیاه</span>
            </label>
            <label class="color">
                <input autocomplete="off" class="input-color check-box" type="checkbox"/>
                <span class="back-color" style="background-color: #662021;">
								<i class="fa fa-check color-check" aria-hidden="true"></i>
							</span>
                <span data-id="32" class="color-name per-text">قهوه ای</span>
            </label>
            <label class="color">
                <input autocomplete="off" class="input-color check-box" type="checkbox"/>
                <span class="back-color" style="background-color:yellow;">
								<i class="fa fa-check color-check" aria-hidden="true"></i>
							</span>
                <span data-id="33" class="color-name per-text">زرد</span>
            </label>
            <span class="more"><span class="label-length"></span>مورد بیشتر</span>
            <span class="less">نمایش کمتر</span>
        </div>

    </div><!--Color Sort-->
</div><!--filter-panel-->
<script>

    $('.check-box').click(function(){
        var text = $(this).parent('label').find('.per-text').text();

        var id = $(this).parent('label').find('.per-text').attr("data-id");
        var append_tag ='<span data-id="'+id+'" class="filter-selected">'+text+'<i onClick=removeItem(this,'+id+') class="fa fa-times-circle" aria-hidden="true"></i></span>';

        var idLength = $('.filter-item').find('span[data-id="'+id+'"]').length;

        if(idLength > 0){
            $('.filter-item').find('span[data-id="'+id+'"]').remove();

        }
        else{
            $('.filtered').find('.filter-item').append(append_tag);
        }

    });
</script><!--Append Filter-->
<script>
    function removeItem(tag,dataId){
        $(tag).parent('span').remove();
        var spanID = $('.filter-option label').find('span[data-id="'+dataId+'"]');
        spanID.parent('label').find('.active-check').removeClass('active-check-cheked');
        spanID.parent('label').find('.color-check').css({display:'none'});
        spanID.parent('label').find('input').prop('checked', false);
        spanID.parent('label').find('.per-text').css({color:"#000"});
        spanID.parent('label').find('.en-text').css({color:"#000"});
        spanID.parent('label').find('.color-name').css({color:"#fff"});

    }

    function removeAll(){
        var filters = $('.filter-item span');
        $.each(filters, function(index,value){
            var idAttr = $(value).attr("data-id");
            removeItem(value ,idAttr);
            value.remove();
        })
    }
</script><!--Remove-->
<script>
    $('.color').hover(function(){
        $(this).find('.color-name').fadeIn(100);
    },function(){
        $(this).find('.color-name').fadeOut(100);
    })

    $('.input-color').click(function(){
        var color = $(this).parent('.color').find('.color-check');
        if($(this).is(':checked')){
            color.fadeIn(100);
        }else{
            color.fadeOut(100);
        }
    });
</script><!--Color--->
<script>
    var i;
    $('.filter-label').click(function(){
        var filterOption = $(this).parent('.filter').find('.filter-option');
        var labelLength = filterOption.find('label').length;
        var more = filterOption.find('.more');
        var less = filterOption.find('.less');

        if(labelLength <= 4){
            more.css({display:"none"});
            less.css({display:"none"});
        }

        filterOption.find('.label-length').text(labelLength-4);
        for(i=4;i<labelLength;i++){
            filterOption.find('label').eq(i).css({display:"none"});
        }
    });


    $('.more').click(function(){
        var filterOption = $(this).parent('.filter-option');
        var labelLength = filterOption.find('label').length;

        for(i=4;i<labelLength;i++){
            filterOption.find('label').eq(i).slideDown(200);
            $(this).hide();
            filterOption.find('.less').show();
        }
    });
    $('.less').click(function(){
        var filterOption = $(this).parent('.filter-option');
        var labelLength = filterOption.find('label').length;

        for(i=4;i<labelLength;i++){
            filterOption.find('label').eq(i).slideUp(200);
            $(this).hide();
            filterOption.find('.more').show();
        }

    });


</script><!--More &  Less & Filter Label-->
<script>
    var roatateValue=0;

    $('.filter-label').click(function(){
        var filterOption = $(this).parent('.filter').find('.filter-option');

        if(filterOption.css('display') == 'block' ){

            filterOption.slideUp(200);
            roatateValue +=180;
            $(this).find('.filter-header-i').rotate({animateTo:roatateValue});
        }
        else{
            filterOption.slideDown(200);
            roatateValue +=180;
            $(this).find('.filter-header-i').rotate({animateTo:roatateValue});
            filterOption.find('.less').hide();
            filterOption.find('.more').show();

            roatateValue=0;
        }

    });

</script><!--Angle Rotate-->