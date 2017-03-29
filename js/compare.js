$(".compare_button").click(function(){
	us_id = $(this).data("item"),
	item = '#' + us_id; /*get unic user id from attr data*/

	// create div in compare block
	cr_div = document.createElement('div');/*created div*/
	$(cr_div).addClass("thumbnail_wrapper").addClass(us_id) /*add class for this div*/
		.appendTo("#user_comapre_form");/*push it to div with id user_compare_form*/

	// push remove button
	cr_rm_btn = document.createElement('div');/*created div*/
	$(cr_rm_btn).attr("data-rm", us_id);
	$(cr_rm_btn).addClass("remove_user").addClass("item_center")/*add class for this div*/
		.html("x")
		.appendTo(".thumbnail_wrapper");/*push it to div with id user_compare_form*/

	// push Image
	$(item).find(".user_image")/*in div with elements we find needed element with class user image*/
		.clone()/*clone it */
		.prop({class: "compare_image"})/*Edit its attributes*/
		.appendTo(cr_div);/*push it element in div which we created*/

	// push user name
	$(item).find(".user_name")
		.clone()
		.prop({class: "compare_user_name item_center"})
		.appendTo(".thumbnail_wrapper");

	// push input hidden
	$(item).find("input_hidden")
		.clone()
		.appendTo(".thumbnail_wrapper");

	$(item).fadeOut(300);

	remove_compare_item();
});

function remove_compare_item () {
	$(".remove_user").click(function(){
		rm_item_id = '#' + $(this).data("rm"); /*get unic user id from attr data*/
		$(rm_item_id).fadeIn(300);
		$(this).parent().remove();
	});
}