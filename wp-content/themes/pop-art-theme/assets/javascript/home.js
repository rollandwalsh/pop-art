// 	 PARALLAX
function debounce(func, wait = 20, immediate = true) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timeout);
		timeout = setTimeout(function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		}, wait);
			if (immediate && !timeout) func.apply(context, args);
	};
};

const sliderElements = document.querySelectorAll('.parallax');

function checkSlide() {
	sliderElements.forEach(sliderElement => {
		const slideInAt = (window.scrollY + window.innerHeight) - (sliderElement.offsetHeight / 3);
		const elementBottom = sliderElement.offsetTop + sliderElement.offsetHeight;
		const isThirdShown = slideInAt > sliderElement.offsetTop;
		const isNotScrolledPast = window.scrollY < elementBottom;
		if (isThirdShown && isNotScrolledPast) {
			sliderElement.classList.add('active');
		} else {
			sliderElement.classList.remove('active');
		}
	});
}

window.addEventListener('scroll', checkSlide);
	
$(window).scroll(function() {
   var hT = $('#homeTwitterSlider').offset().top,
       hH = $('#homeTwitterSlider').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)) {
	   $('#homeCTA').fadeOut(750);
   } else {
	   $('#homeCTA').fadeIn(750);
   }
});
