// compare serction
$(document).ready(function() {
	$(".compare_button").click(function() {
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
			.appendTo(cr_div);/*push it to div with id user_compare_form*/

		// push Image
		$(item).find(".user_image")/*in div with elements we find needed element with class user image*/
			.clone()/*clone it */
			.prop({class: "compare_image item_center"})/*Edit its attributes*/
			.appendTo(cr_div);/*push it element in div which we created*/

		// push user name
		$(item).find(".user_name")
			.clone()
			.prop({class: "compare_user_name item_center"})
			.appendTo(cr_div);

		// push input hidden
		$(item).find(".input_hidden")
			.clone()
			.appendTo(cr_div);

		$(item).fadeOut(300);

		remove_compare_item();
		hide_show_compare_form();
	});
	
	$('form#user_comapre_form').submit(function(e) {
		if (!$(this).find('.thumbnail_wrapper').length) {
			e.preventDefault();
		}
	});
});

function remove_compare_item() {
	$(".remove_user").click(function() {
		rm_item_id = '#' + $(this).data("rm"); /*get unic user id from attr data*/
		$(rm_item_id).fadeIn(300);
		$(this).parent().remove();
		hide_show_compare_form();
	});
}

/**
 * 
 */
function hide_show_compare_form() {
	if (!$('#user_compare_block .thumbnail_wrapper').length) {
		$('#user_compare_block').removeClass('comparison_active');
	}
	else {
		$('#user_compare_block').addClass('comparison_active');
	}
}
// END compare serction
