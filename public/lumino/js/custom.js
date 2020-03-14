(window.jQuery);
	$(window).on('resize', function () {
  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
	}
});
//logout menu dropdown 
$(".push-btn").each(function(){
	$(this).click(function(){
		$(".accnt-box").slideToggle();
	});
});




$(function () {

	var appendthis = ("<div class='modal-overlay js-modal-close'></div>");

	$("a[data-modal-id]").click(function (e) {
		e.preventDefault();
		$("body").append(appendthis);
		$(".modal-overlay").fadeTo(500, 0.7);
		//$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$("#" + modalBox).fadeIn($(this).data());
	});

	$(".js-modal-close, .modal-overlay").click(function () {
		$(".modal-box, .modal-overlay").fadeOut(500, function () {
			$(".modal-overlay").remove();
		});
	});

	$(window).resize(function () {
		$(".modal-box").css({
			top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
			left: ($(window).width() - $(".modal-box").outerWidth()) / 2
		});
	});

	$(window).resize();

});






$(function () {
	$('input[placeholder], textarea[placeholder]').placeholder();
	$('#serMemdd').change(function () {
		var k = $(this).val();
		if (k == 1) {
			$("#serMemtb").attr("placeholder", "Type a name (Lastname, Firstname)").placeholder();
		}
		else if (k == 2) {
			$("#serMemtb").attr("placeholder", "Type an ID").placeholder();
		}
		else if (k == 3) {
			$("#serMemtb").attr("placeholder", "Type a Location").placeholder();
		}
	});
});


$.fn.dataTable.ext.search.push(
	function (settings, data, dataIndex) {
		//var min = parseInt($('#min').val(), 10);
		//var max = parseInt($('#max').val(), 10);
		//var age = parseFloat(data[3]) || 0; // use data for the age column

		// if ((isNaN(min) && isNaN(max)) ||
		// 	(isNaN(min) && age <= max) ||
		// 	(min <= age && isNaN(max)) ||
		// 	(min <= age && age <= max)) {
		// 	return true;
		// }
		// return false;
	}
);