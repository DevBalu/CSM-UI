$(document).ready(function(){
	if ($(window).width() < 960) {
		$(".field_compare_sec")
		.parent()
		.removeAttr("class");

		$(".field_compare_sec")
		.prop({
			class: "field_compare_sec",
			style: "width: 20%; float:left; padding: 5px;"
		});

		$(".field_name_sec")
		.parent()
		.prop({
			class: "",
			style: "width: 20%; float:left; padding: 5px;"
		});
	}
});