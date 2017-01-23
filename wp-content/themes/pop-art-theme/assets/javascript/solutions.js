// TYPED.JS

$(function() {
	$('#issueInput1').typed({
		strings: ['Website navigation', 'Ad ROI', 'App interface', 'Specs volume'],
		typeSpeed: 0,
		shuffle: true
	})
	$('#issueInput2').typed({
		strings: ['up the wall', 'batty', 'crazy', 'insane'],
		typeSpeed: 0,
		shuffle: true
	})
});

$('.accordion-title').on('click', function(event) {
   $('html,body').animate({scrollTop: $(event.target).offset().top}, 'slow');
});
