$(function () {
	console.log('Boby is in the place');

	//####################################################
	//  			Main
	//####################################################

	bindButton();
	animateLogos();

	//####################################################
	//  			Bind button
	//####################################################

	function bindButton() {
		$("#discover-now").click(function () {
			window.location.href = "http://abb-immo.com";
		});
	}


	//####################################################
	//  			Logo Animation
	//####################################################

	function animateLogos() {
		var changeLogos = $("#change-logos");
		var abbLogo = $("#abb-immo");
		var guyHoquet = $('#guy-hoquet');

		changeLogos.mouseenter(function () {
			toDouble(abbLogo);
			toHalf(guyHoquet);
		});
		changeLogos.mouseleave(function () {
			toSimple(abbLogo);
			toSimple(guyHoquet);
		});
	}

	/**
	 * Animate scale to 1/2
	 * @param {object} element - Element to apply the animation
	 */
	function toHalf(element) {
		element.addClass('scale-half');
		element.removeClass('scale-simple');
		element.removeClass('scale-double');
	}

	/**
	 * Animate scale to 1
	 * @param {object} element - Element to apply the animation
	 */
	function toSimple(element) {
		element.addClass('scale-simple');
		element.removeClass('scale-half');
		element.removeClass('scale-double');
	}

	/**
	 * Animate scale to 2
	 * @param {object} element - Element to apply the animation
	 */
	function toDouble(element) {
		element.addClass('scale-double');
		element.removeClass('scale-half');
		element.removeClass('scale-simple');
	}


});
