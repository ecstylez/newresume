// scripts

$(function () {
	var $hamburger = $(".navbar-toggle");

	$hamburger.on('click', function showMenu() {
		var $icon    = $(this);
		$icon.toggleClass("menu-open");


		if($icon.hasClass("menu-open")) {
			transformBars($icon, "close");
		} else {
			transformBars($icon, "open");
		}

		$(".canvas").toggleClass("canvas-slid");
	});
});

// methods

/**
 * method used to transform hamburger into an x, and back
 * @return {[type]} [description]
 */
function transformBars(element, direction)
{
	var $icon    = element,
		barCount = 0;

	// transform hamburger
	if (direction == "close") {
		$icon.find(".icon-bar").each(function transformBars() {
			var $bar = $(this);
			if(barCount == 0) {
				$bar.addClass("rotate-bar-left");
			}
			if(barCount == 1) {
				$bar.addClass("rotate-bar-right");
			}
			if(barCount == 2) {
				$bar.hide();
			}
			barCount++;
		});
	} else {
		$icon.find(".icon-bar").each(function transformBars() {
			var $bar = $(this);
			if(barCount == 0) {
				$bar.removeClass("rotate-bar-left");
			}
			if(barCount == 1) {
				$bar.removeClass("rotate-bar-right");
			}
			if(barCount == 2) {
				$bar.show();
			}
			barCount++;
		});
	}

}