// JavaScript Document
$(document).ready(function() {
	scretch();
	$(window).resize(function() {
		scretch();
    });
});

function scretch(){
	$w = $(window).width();
	$h = $(window).height();
	if($w < 1200){
		$(".topbar").css({"width":"1200px"});
		$(".header").css({"width":"1200px"});
	}else{
		$(".topbar").css({"width":"100%"});
		$(".header").css({"width":"100%"});
	};
}