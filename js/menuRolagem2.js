// Função do menu

$(function(){
	
	$(window).scroll(function(){
		
		if($(window).scrollTop() > 180) {
			
			$("#tituloBarraEscura").fadeIn(500)
			
			}else {
				
				$("#tituloBarraEscura").fadeOut(200)
				
				}
		
		})
	
	})