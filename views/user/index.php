
<style>
    #main{
        background-image: url(public/img/1503990105pattern42.png);
        background-color: #eee;
        padding: 10px 0;
    }
    #content{
        width: 1190px;
        margin: 0 auto;
    }
    #content::after{
        content: "";
        display: block;
        clear: both;
    }
    body{
        font-family: iran-sans;
    }
</style><!--Main-->
<div id="main">
    <div id="content">
        <?php
            require ('OrderRoute.php');
            require ('User.php');
        ?>
    </div><!---Content--->
</div>