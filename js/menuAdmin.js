$(function(){
	
	$("#iconeMenu").click(function(){
		
		$("#sidebar").removeClass("col-sm-5 col-md-4 col-lg-3 d-none d-md-block").addClass("col-8")
		$("#colunaGrande").removeClass("col-md-8 offset-md-4 col-lg-9 offset-lg-3").addClass("col-4 offset-8")
		$("#iconeMenu").css({"display": "none"})
		$("#iconeMenu2").css({"display": "block"})
		$(".imgLogo").css({"display": "none"})
		$(".campoBusca").animate({height: "hide"}, 0)
		
	});
	
	$("#iconeMenu2").click(function(){
		
		$("#sidebar").removeClass("col-8").addClass("col-sm-5 col-md-4 col-lg-3 d-none d-md-block")
		$("#colunaGrande").removeClass("col-4 offset-8").addClass("col-md-8 offset-md-4 col-lg-9 offset-lg-3")
		$("#iconeMenu").css({"display": "block"})
		$("#iconeMenu2").css({"display": "none"})
		$(".imgLogo").show("fast")
		$(".campoBusca").show(100)
		
	})
	
})