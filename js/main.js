$( document ).ready(function(){
	$(".button-collapse").sideNav();
	$("#slide_wrapper > div:gt(0)").hide();
})

setInterval(function() {
  $('#slide_wrapper > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slide_wrapper');
}, 10000);