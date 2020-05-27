// Função do menu

$(function(){
	
	$(window).scroll(function(){
		
		if($(window).scrollTop() > 48) {
			
			$("#barraEscura").css({position: "fixed"})
                        $("#barraEscura").css({top: "0px"})
                        $("#barraEscura").css({right: "0px"})
                        $(".imgBanner").css({"margin-top": "60px"})
                        $("#corpoAnotacoesRapidas").css({"margin-top": "60px"})
			
			}else {
				
				$("#barraEscura").css({position: "relative"})
                                $("#barraEscura").css({top: "0px"})
                                $("#barraEscura").css({right: "0px"})
                                $(".imgBanner").css({"margin-top": "30px"})
                                $("#corpoAnotacoesRapidas").css({"margin-top": "30px"})
				
				}
		
		})
	
	})