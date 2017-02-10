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