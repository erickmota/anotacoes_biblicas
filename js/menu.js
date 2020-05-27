$(function(){
    
    $(".imgMenuIcon").click(function(){
        
       $("#cMenu").slideToggle("fast")
       $("#camadaMenu").show("fast")
        
    });
    
    $("#camadaMenu").click(function(){
        
        $("#cMenu").slideToggle("fast")
        $("#camadaMenu").hide("fast")
        
    });
    
    $(window).scroll(function(){
        
        $("#cMenu").hide("fast")
        $("#camadaMenu").hide("fast")
        
    });
    
})

