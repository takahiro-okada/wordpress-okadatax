(function ($, root, undefined) {

	$(function () {
		var swiper = new Swiper('.swiper-container', {
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
			},
			autoplay: {
				delay: 5000,
			},
			loop: true,
			autoHeight: false,
			on: {
				slideChange: function () {
					jQuery('.swiper-slide-content').css('opacity', '0');
					realIndex = this.realIndex + 1;
					jQuery('.swiper-slide-content-' + realIndex).css('opacity', '1');
				},
			},
		});

		'use strict';

	});

})(jQuery, this);

// drawer.js
jQuery(document).ready(function () {
	$('.drawer').drawer();
});

// smooth scroll
jQuery(document).ready(function(){
	$("#js-totop").click(function() {
			$("body,html").animate({scrollTop:0},800); // 800msかけて上に戻る
			return false;
	});
});