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

const sliderElements = Array.from(document.querySelectorAll('.parallax'));

function checkSlide() {
	sliderElements.forEach(sliderElement => {
		const slideInAt = (window.innerHeight - sliderElement.getBoundingClientRect().top) - (sliderElement.offsetHeight / 3);
		const elementBottom = sliderElement.getBoundingClientRect().bottom;
		const isThirdShown = slideInAt >= 0;
		const isNotScrolledPast = elementBottom > 0;
		if (isThirdShown && isNotScrolledPast) {
			sliderElement.classList.add('active');
		} else {
			sliderElement.classList.remove('active');
		}
	});
}

window.addEventListener('scroll', checkSlide);
