function buscar (palavra) {
	
$.ajax({
	
	type: "POST",
	dataType: "html",

  url: "php/buscaUsuariosAdmin.php",
 
  beforeSend: function () {
	  
	  $("#loading").html("<img src='img/loading.gif' width='40px'>");
	  
	  },
	  
	   data: {palavra: palavra},

success: function (msg) {
	
	$("#resultadoBusca").html(msg)
	$("#loading").html("")
	
	}

});

	}
	
	$("#texto").keyup(function(){
		
		buscar($("#texto").val())
		
		});
		
		$("#botao").click(function(){
		
		buscar($("#texto").val())
		
		});
