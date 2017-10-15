<div id="product-gallery">
    <header><i class="fa fa-2x fa-times-circle-o" aria-hidden="true"></i>
    </header>
    <div class="right">
        <div class="img-wrapper">
            <img src=" " />
            <canvas id="cv" style=" margin: auto" width="830" height="447"></canvas>
        </div>
    </div>
    <div class="left mCS-dir-rtl">
        <ul>
            <li>
                <img src="public/img/product gallery/thumbnail/thumb-pic1.jpg"/>
            </li>
            <li class="active" data-image-id="public/img/product gallery/larg/pic1.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic1.jpg"/>
            </li>
            <li data-image-id="public/img/product gallery/larg/pic2.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic2.jpg"/>
            </li>
            <li class="active" data-image-id="public/img/product gallery/larg/pic1.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic1.jpg"/>
            </li>
            <li data-image-id="public/img/product gallery/larg/pic2.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic2.jpg"/>
            </li>
            <li class="active" data-image-id="public/img/product gallery/larg/pic1.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic1.jpg"/>
            </li>
            <li data-image-id="public/img/product gallery/larg/pic2.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic2.jpg"/>
            </li>
            <li class="active" data-image-id="public/img/product gallery/larg/pic1.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic1.jpg"/>
            </li>
            <li data-image-id="public/img/product gallery/larg/pic2.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic2.jpg"/>
            </li>
            <li class="active" data-image-id="public/img/product gallery/larg/pic1.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic1.jpg"/>
            </li>
            <li data-image-id="public/img/product gallery/larg/pic2.jpg">
                <img src="public/img/product gallery/thumbnail/thumb-pic2.jpg"/>
            </li>
        </ul>
    </div>
</div><!-----product-gallery---->
<div id="dark">

</div><!----dark---->
<script>

    $('.product-img img').magnify();


    var thumbImage = $('#product-gallery .left li');
    var image =  $('#product-gallery .right .img-wrapper');

    $('#dark').click(function () {
        fadeOut();
    });

    $('.more-img').click(function () {
        fadeIn();
        thumbImage.removeClass('active');
        thumbImage.eq(0).addClass('active');
        image.find('img').fadeOut(0);
        $('#cv').fadeIn();
    });

    $('.img-gallery li').click(function () {
        fadeIn();
        var thumbImageIndex = $(this).index();
        thumbImageIndex++;
        $('#cv').fadeOut(0);
        var thumbImageId = thumbImage.eq(thumbImageIndex).attr('data-image-id');
        showGallery(thumbImageIndex,thumbImageId);
        thumbImage.removeClass('active');
        thumbImage.eq(thumbImageIndex).addClass('active');
    });



    thumbImage.click(function () {
        var thumbImageIndex = $(this).index();
        thumbImage.removeClass('active');
        $(this).addClass('active');
        if(thumbImageIndex == 0){
            image.find('img').fadeOut(0);
            $('#cv').fadeIn();
        }else {
            $('#cv').fadeOut(0);
            var thumbImageId = $(this).attr('data-image-id');
            showGallery(thumbImageIndex,thumbImageId);
        }

    });

    function showGallery(thumbImageIndex,thumbImageId) {
        image.find('img').attr('src',thumbImageId);
        image.find('img').fadeIn();
    }

    $('#product-gallery header i').click(function () {
        fadeOut();
    });

    function fadeIn() {
        $('#dark').fadeIn(200);
        $('#product-gallery').fadeIn(200);
    }
    function fadeOut() {
        $('#dark').fadeOut(200);
        $('#product-gallery').fadeOut(200);
    }
    $('#product-gallery .left').mCustomScrollbar({
        scrollAmount:"auto",
        deltaFactor:"auto",
        axis:"y",
        setLeft:0,
        theme:"inset-dark",
        autoHideScrollbar:true,
        scrollbarPosition:"outside",
        scrollButtons:{
            enable:true,
            scrollType:"stepless",
            scrollAmount:"auto"
        }

    });
</script> <!-- product-gallery -->
<style>
    #cv{
        display: none;
        cursor: pointer;
    }

    .mCSB_scrollTools{
        left: 5px!important;
    }
    .img-wrapper{
        text-align: center;
        max-height: 440px;
        line-height: 440px;
    }
    .img-wrapper img{
        vertical-align: middle;
        max-height: 350px;
        display: none;
    }
    #product-gallery .left{
        float: left;
        width: 17%;
        height: 88%;
        background-color: #fff;
        overflow-y: auto;
        direction: rtl;
    }
    #product-gallery .left ul li{
        cursor: pointer;
        text-align: center;
        width: 99%;
        height: 130px;
        line-height: 130px;
        border-bottom:1px solid #ddd;
        border-right:1px solid #ddd;
        opacity: 0.5;
        position: relative;
    }
    #product-gallery .left ul li.active{
        opacity: 1;
    }
    #product-gallery .left ul li img{
        vertical-align: middle;
    }
    #product-gallery .right{
        width: 83%;
        background-color: #fff;
        float: right;
    }
    #product-gallery header{
        direction: ltr;
        width: 100%;
        line-height: 40px;
        background-color: #f0f1f2;
    }
    #product-gallery header i{
        color: #999;
        margin: 9px 15px;
        cursor: pointer;
    }
    #product-gallery{
        position: fixed;
        top: 60px;
        left: 0;
        right: 0;
        margin: auto;
        background-color: #fff;
        z-index: 8;
        width: 1000px;
        height: 500px;
        border: 1px solid #eee;
        border-radius: 2px;
        display: none;
    }
    #dark{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: 7;
        top: 0;
        right:0;
        background-color: rgba(0,0,0,0.5);
    }
</style><!--product-gallery-->
<script type="text/javascript">
    var viewer = new JSC3D.Viewer(document.getElementById('cv'));
    viewer.setParameter('SceneUrl',         'public/img/3d/galaxy-s8/source/phone.obj');
    viewer.setParameter('ModelColor',       '#fff');
    viewer.setParameter('BackgroundColor1', '#E5D7BA');
    viewer.setParameter('BackgroundColor2', '#383840');
    viewer.setParameter('RenderMode',       'texture');
    viewer.setParameter('definition', 'high');
    viewer.init();
    viewer.update();

</script><!--JSC3D-->