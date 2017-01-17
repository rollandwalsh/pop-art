// BAM DAM DEMO

var bamDamDemoStart = document.getElementById('bamDamDemoStart');
var bamDamDemoNext = document.getElementById('bamDamDemoNext');
var bamDamDemoPrev = document.getElementById('bamDamDemoPrev');
var bamDamDemoImgs = Array.from(document.querySelectorAll('.bam-dam-demo-image *'));
var bamDamDemoNav = document.querySelector('.bam-dam-demo-nav');
var bamDamDemoNavs = Array.from(document.querySelectorAll('.bam-dam-demo-nav *'));
var bamDamDemoHeaders = Array.from(document.querySelectorAll('.bam-dam-demo-header *'));
var bamDamDemoContents = Array.from(document.querySelectorAll('.bam-dam-demo-content *'));
var bamDamDemoButtons = document.querySelector('.bam-dam-demo-buttons');

function removeCurrent() {
	let bamDamDemoCurrents = Array.from(document.querySelectorAll('.bam-dam .current'));
	bamDamDemoCurrents.forEach(bamDamDemoCurrent => bamDamDemoCurrent.classList.remove('current'));
}

function addCurrent(n) {
	var newCurrents = Array.from(document.querySelectorAll(`[data-bddemo='${n}']`));
	console.log(newCurrents);
	newCurrents.forEach(newCurrent => newCurrent.classList.add('current'));
}

function bamDamDemoInit() {
	removeCurrent();
	addCurrent(1);
	bamDamDemoStart.setAttribute('style', 'display: none');
	bamDamDemoButtons.setAttribute('style', 'display: block');
	bamDamDemoNav.classList.add('awake');
}

function changeSlide(dir) {
	let currentSlide = document.querySelector('.bam-dam-demo-image .current');
	let slideNumber = currentSlide.dataset.bddemo;
	removeCurrent();
	
	if (Number.isInteger(parseInt(dir))) {
		console.log('number');
		addCurrent(parseInt(dir));
	} else {
		if (dir = 'next') {
			slideNumber ++;
			if (slideNumber == 7) {addCurrent(1)}
			else {addCurrent(slideNumber)}
		} else {
			slideNumber --;
			if (slideNumber == 0) {addCurrent(6)}
			else {addCurrent(slideNumber)}
		}
	}
}

bamDamDemoStart.addEventListener('click', bamDamDemoInit);
bamDamDemoPrev.addEventListener('click', function() {changeSlide('prev')});
bamDamDemoNext.addEventListener('click', function() {changeSlide('next')});
bamDamDemoNavs.forEach(bamDamDemoNav => bamDamDemoNav.addEventListener('click', function() {changeSlide(bamDamDemoNav.dataset.bddemo)}));
