$( document ).ready(function(){
	$(".button-collapse").sideNav();
	$("#slide_wrapper > div:gt(0)").hide();

	// navbar effect 
	$("#nav-mobile > li > a").mouseover(function(){
		$(this).children(":nth-child(1)").attr("style", "padding-left: 8px; padding-right: 12px; transition: 0.3s;");
		$(this).children(":nth-child(2)").attr("style", "box-sizing: border-box; border-top: 1px solid; padding-left: 12px; padding-right: 8px; transition: 0.3s;");
		$(this).children(":nth-child(2)").children().attr("style", "top: -9px; transition: 0.3s;");
	});

	$("#nav-mobile > li > a").mouseleave(function(){
		$(this).children(":nth-child(1)").attr("style", "border-bottom: none; padding-left: 10px; padding-right: 10px; transition: 0.3s;");
		$(this).children(":nth-child(2)").attr("style", "border-bottom: none; podding-left: 10px; padding-right: 10px; transition: 0.3s;");
		$(this).children(":nth-child(2)").children().attr("style", "top: -8 px;");
	});

	//END  navbar effect 
})

setInterval(function() {
	$('#slide_wrapper > div:first')
	.fadeOut(1000)
	.next()
	.fadeIn(1000)
	.end()
	.appendTo('#slide_wrapper');
}, 10000);