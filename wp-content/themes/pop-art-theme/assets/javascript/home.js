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

// TWITTER

function formatDate(date) {
	date = new Date(date);
	var hours = date.getHours();
	var minutes = date.getMinutes();
	var ampm = hours >= 12 ? 'pm' : 'am';
	hours = hours % 12;
	hours = hours ? hours : 12; // the hour '0' should be '12'
	minutes = minutes < 10 ? '0'+minutes : minutes;
	var strTime = hours + ':' + minutes + ampm;
	var monthNames = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
	var month = monthNames[date.getMonth()];
	return strTime + ' - ' + date.getDate() + " " + month + " " + date.getFullYear();
}

function twitterSlide(id) {
	$(`#${id}`).slick({
		dots: true,
		autoplay: true,
		autoplaySpeed: 4500,
		speed: 1500
	});
}
