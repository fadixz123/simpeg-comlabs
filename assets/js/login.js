// JavaScript Document
$(document).ready(function() {
    $(".text")
	.focus(function() {
        $(this).attr("value","");
    })
	.blur(function() {
		if($(this).val()==""){
        	$(this).attr("value",$(this).attr("name"));
		}
    });
	$(".text").focus();
});