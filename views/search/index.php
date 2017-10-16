
<div id="main">
    <?php
        require ('FilterPanel.php');
        require ('ProductPanel.php');
    ?>

</div>
<script>
    $('.check-box').click(function(){
        var parent = $(this).parent();
        if($(this).is(':checked')){

            parent.find('.active-check').addClass('active-check-cheked');
            parent.find('.per-text').css({'color':"#208DE6"});
            parent.find('.en-text').css({'color':"#208DE6"});
            parent.find('.color-name').css({'color':"#fff"});
        }
        else{

            parent.find('.active-check').removeClass('active-check-cheked');
            parent.find('.per-text').css({'color':"#000"});
            parent.find('.en-text').css({'color':"#000s"});
            parent.find('.color-name').css({'color':"#fff"});

        }
    });
</script><!--checkbox-->