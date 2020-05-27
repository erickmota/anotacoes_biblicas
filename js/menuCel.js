$(function(){
    
    $(".menuCel").click(function(){
        
        $("#cMenuCel").slideToggle("fast")
        
    });
    
    $(window).scroll(function(){
        
        $("#cMenuCel").hide("fast")
        
    });
    
});