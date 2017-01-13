// TYPED.JS

$(function() {
	$('#issueInput1').typed({
		strings: ['Something typed', 'Something else typed', 'Words'],
		typeSpeed: 0
	})
	$('#issueInput2').typed({
		strings: ['Something typed', 'Something else typed', 'Words'],
		typeSpeed: 0
	})
});

// ACCORDION RIPPLE

const accordions = Array.from(document.getElementsByClassName('accordion-item'));
	
function accordionRipple() {
	accordions.forEach(accordion => {
		accordion.classList.add('unripple');
	});
}

 window.setTimeout(accordionRipple, 250);
 