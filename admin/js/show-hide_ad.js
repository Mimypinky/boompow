<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="food_menu"){
            $(".food_menu").toggle();
        }
      
    });
});
</script>