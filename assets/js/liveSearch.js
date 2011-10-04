// JavaScript Document
$(document).ready(function(e) {
    var $sI = $(".searchInput");
	var $sT = $("#searchTitle");
	var $sS = $("#searchSug");
	
	$sI.css("width","200px");
	$sS.hide();
	
	$sI
	.blur(function(){
		if($sI.val()==""){
			$sT.fadeIn(500,"easeInExpo");
			$sI.animate({width:200,opacity:0.7},500,"easeOutExpo");
			$sS.slideUp();
		};
	})
	.focus(function(){
		$sT.hide();
		$sI.animate({width:260,opacity:1},300,"easeOutExpo");
	})
	.keyup(function(){
		$sS.fadeIn();
	})
});