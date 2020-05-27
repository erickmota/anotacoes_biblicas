$(function(){
    
    $(".marcador").click(function(){
        
       $("#menuMarcacao").slideToggle("fast")
       $("#camadaMenuMarcacao").show("fast")
        
    });
    
    $("#camadaMenuMarcacao").click(function(){
        
        $("#menuMarcacao").slideToggle("fast")
        $("#camadaMenuMarcacao").hide("fast")
        
    });
    
    $(window).scroll(function(){
        
        $("#menuMarcacao").hide("fast")
        $("#camadaMenuMarcacao").hide("fast")
        
    });
    
})


