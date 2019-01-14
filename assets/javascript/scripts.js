// hide/show password
$('.togglePassword').click(function() {
	var inputPassword = $('#inputPassword');
	inputPassword.toggleClass('showPassword');

	if (inputPassword.hasClass('showPassword'))
		inputPassword.attr("type", "text");
	else
		inputPassword.attr("type", "password");
});

// Priority
var priority = $('.priority');
var rateLevel = 5;
var priorityValue = priority.attr("data-priority-value");

for(var i = 0; i < rateLevel; i++) {
	if (i < priorityValue) {
		priority.append('<span class="circle is-active"></span>');
	}
	else {
		priority.append('<span class="circle"></span>');
	}
}

// On click
$('.priority .circle').click(function() {
	var items = $('.priority .circle');
	var active = $('.priority .circle.is-active');
	var input = $('.priority input');

	// reset is-active items
	for (var i = 0; i < active.length; i++) {
		$(active[i]).toggleClass('is-active');	
	}
	// toggle is-active class
	for (var i = 0; i < $(this).index(); i++) {
		if (!$(items[i]).hasClass('is-active')) {
			$(items[i]).toggleClass('is-active');	
		}	
	}
	// update input
	input.attr("value", $(this).index());
});

// tabs
var tabs = $('.tabs li').click(function() {
	if (!$(this).hasClass('is-active')) {
		for (var i = 0; i < tabs.length; i++) {
			if ($(tabs[i]).hasClass('is-active')) {
				$(tabs[i]).toggleClass('is-active');
			}
		}
		$(this).addClass('is-active');
	}
});

// Spinner
(function($) {
	$('.input-spinner .btn:first-of-type').on('click', function() {
		var input = $(this).parent().parent().children('input');
		input.val(parseInt(input.val(), 10) + 1);
	});
	$('.input-spinner .btn:last-of-type').on('click', function() {
		var input = $(this).parent().parent().children('input');
		var newvalue = parseInt(input.val(), 10) - 1;
		if (newvalue >= 0)
			input.val(newvalue);
	});
})(jQuery);