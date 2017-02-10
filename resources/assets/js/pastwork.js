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