
$("#selectclient tr").click(function() {

    $(".clickableRow").on("click",function(){
     $(".highlight").removeClass("highlight");
    $(this).addClass("highlight");
    
    });
});