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
// MENU EVENTS

$(function () {

	"use strict";

	$(".contact-me-link").on('click', function showContactMeForm(e) {
		e.preventDefault();

		var $icon   = $(".navbar-toggle"),
		    $canvas = $(".canvas");
		$icon.removeClass("menu-open");
		$canvas.removeClass("canvas-slid");
		transformBars($icon, "open");

		directToContactForm();

	})
});

/**
 * slide the user to the contact form at the bottom of the page
 */
function directToContactForm ()
{
	$('html, body').animate({
		scrollTop : $("#contact-me").offset().top
	}, 'slow');
}
// PAST WORK

$(function () {
	"use strict";

	var $work = $(".work");

	$work.on('click', function showWork(e) {
		e.preventDefault();

		var $work  = $(this),
			$title = $work.find(".title").text(),
			$dir   = $work.data('project');

		$.ajax({
			url: "past-work/" + $dir,
			success: function (result) {
				var html = "";
				var active = "";
				html =  '<div id="myCarousel" class="carousel slide" data-ride="carousel">';
					html += '<ol class="carousel-indicators">';
						for (var i=0; i<result.length; i++) {
							if(i == 0) {
								active = "active";
							} else {
								active = "";
							}
							html += '<li data-target="#myCarousel" data-slide-to="' + i + '" class="' + active + '"></li>';
						}
						// html += '<li data-target="#myCarousel" data-slide-to="1"></li>';
						// html += '<li data-target="#myCarousel" data-slide-to="2"></li>';
					html += '</ol>';
					html += '<div class="carousel-inner">';
						for (i=0; i<result.length; i++) {
							if(i == 0) {
								active = "active";
							} else {
								active = "";
							}
							html += '<div class="item ' + active + '">';
								html += '<img src="/images/past-work/' + $dir + '/' + result[i] + '" alt="First Slide">';
							html += '</div>';
						}
						// html += '<div class="item">';
						// 	html += '<img src="images/slide2.png" alt="Second Slide">';
						// html += '</div>';
						// html += '<div class="item">';
						// 	html += '<img src="images/slide3.png" alt="Third Slide">';
						// html += '</div>';
					html += '</div>';
					html += '<a class="carousel-control left" href="#myCarousel" data-slide="prev">';
						html += '<span class="glyphicon glyphicon-chevron-left"></span>';
					html += '</a>';
					html += '<a class="carousel-control right" href="#myCarousel" data-slide="next">';
						html += '<span class="glyphicon glyphicon-chevron-right"></span>';
					html += '</a>';
				html += '</div>';
				$(".modal-title").html($title);
				$(".modal-body").html(html);
				$("#modal").modal();
				console.log($title);
				// console.log(result);
			}
		});

	});
});
//# sourceMappingURL=resume.js.map
