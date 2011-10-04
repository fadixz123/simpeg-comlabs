// JavaScript Document
$(document).ready(function() {
    $(".subMenu").hide();
	$("#highligt").css({"opacity":0.5,"margin-right":20});
	$("ul.mainMenu li.mainNav")
	.hoverIntent({
		over: function(){
				var sumWidth = 0;
				for($i=0;$i<($(this).index());$i++){
					sumWidth = sumWidth + $("li.mainNav:eq("+$i+")").width() + 20;
				}
				$(this).find("ul.subMenu").fadeIn();
				$("#highligt").animate({"margin-Left":(sumWidth + 20),opacity:1},500,"easeOutExpo");
			},
		out: function(){
				$(this).find("ul.subMenu").hide();
				$("#highligt").animate({opacity:0.5},500,"easeOutExpo");
			},
		sensitivity: 3, 
		interval: 100, 
		timeout: 50, 
  	});
	// buat menu yang dikiri
	$(document).scroll(function() {
		if($(document).scrollTop() >= 173){
			$(".scroll").css({"position":"fixed","top":40});
			$(".isi").css({"margin-left":200});
		}else{
			$(".scroll").css({"position":"relative","top":0});
			$(".isi").css({"margin-left":0});
		};
    });
});