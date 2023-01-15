
$(document).ready(function(){
    $(".invisiblecont").hide();
    $(document).on('click',"#btn",function(){
        var moreLessButton=$(".invisiblecont").is(":visible")?'Read More':'Read Less';
        $(this).text(moreLessButton);
        $(this).parent(".box").find(".invisiblecont").toggle();
        $(this).parent(".box").find(".visiblecont").toggle();
    });
});