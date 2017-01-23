// TYPED.JS

const array1 = ['Website navigation', 'Ad ROI', 'App interface', 'Specs volume'];
const array2 = ['up the wall', 'batty', 'crazy', 'insane'];

$(function() {
	$('#issueInput1').typed({
		strings: array1,
		typeSpeed: 0,
		shuffle: true
	})
	$('#issueInput2').typed({
		strings: array2,
		typeSpeed: 0,
		shuffle: true
	})
});

// ACCORDION SCROLL

$('.accordion-title').on('click', function(event) {
	setTimeout(function() {
	   $('html,body').animate({scrollTop: $(event.target).offset().top}, 'slow');
	}, 250);
});

// FORM INPUTS

const input1 = document.getElementById('issueInput1');
input1.addEventListener('focus', function() {
	if(array1.indexOf(input1.value) > -1) { input1.value = ''; }
});

const input2 = document.getElementById('issueInput2');
input2.addEventListener('focus', function() {
	if(array2.indexOf(input2.value) > -1) { input2.value = ''; }
});
