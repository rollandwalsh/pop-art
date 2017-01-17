// BAM DEMOS

var bamDamDemoStart = document.getElementById('bamDamDemoStart');
var bamDamDemoNext = document.getElementById('bamDamDemoNext');
var bamDamDemoPrev = document.getElementById('bamDamDemoPrev');
var bamDamDemoImgs = Array.from(document.querySelectorAll('.bam-dam-demo-image > img'));
var bamDamDemoNav = document.querySelector('.bam-dam-demo-nav');
var bamDamDemoNavs = Array.from(document.querySelectorAll('.bam-dam-demo-nav > li'));
var bamDamDemoHeaders = Array.from(document.querySelectorAll('.bam-dam-demo-header > *'));
var bamDamDemoContents = Array.from(document.querySelectorAll('.bam-dam-demo-content > *'));
var bamDamDemoButtons = document.querySelector('.bam-dam-demo-buttons');

var bamEndorsementStart = document.getElementById('bamEndorsementStart');
var bamEndorsementNext = document.getElementById('bamEndorsementNext');
var bamEndorsementPrev = document.getElementById('bamEndorsementPrev');
var bamEndorsementImgs = Array.from(document.querySelectorAll('.bam-endorsement-image > img'));
var bamEndorsementNav = document.querySelector('.bam-endorsement-nav');
var bamEndorsementNavs = Array.from(document.querySelectorAll('.bam-endorsement-nav > li'));
var bamEndorsementHeaders = Array.from(document.querySelectorAll('.bam-endorsement-header > *'));
var bamEndorsementContents = Array.from(document.querySelectorAll('.bam-endorsement-content > *'));
var bamEndorsementButtons = document.querySelector('.bam-endorsement-buttons');

function bamDamRemoveCurrent() {
	let bdCurrents = Array.from(document.querySelectorAll('.bam-dam .current'));
	bdCurrents.forEach(bdCurrent => bdCurrent.classList.remove('current'));
}

function bamEndorsementRemoveCurrent() {
	let beCurrents = Array.from(document.querySelectorAll('.bam-endorsement .current'));
	console.log(beCurrents);
	beCurrents.forEach(beCurrent => beCurrent.classList.remove('current'));
}

function bamDamAddCurrent(n) {
	var newCurrents = Array.from(document.querySelectorAll(`[data-bddemo='${n}']`));
	newCurrents.forEach(newCurrent => newCurrent.classList.add('current'));
}

function bamEndorsementAddCurrent(n) {
	var newCurrents = Array.from(document.querySelectorAll(`[data-bedemo='${n}']`));
	newCurrents.forEach(newCurrent => newCurrent.classList.add('current'));
}

function bamDamDemoInit() {
	bamDamRemoveCurrent();
	bamDamAddCurrent(1);
	bamDamDemoStart.setAttribute('style', 'display: none');
	bamDamDemoButtons.setAttribute('style', 'display: block');
	bamDamDemoNav.classList.add('awake');
}

function bamEndorsementInit() {
	bamEndorsementRemoveCurrent();
	bamEndorsementAddCurrent(1);
	bamEndorsementStart.setAttribute('style', 'display: none');
	bamEndorsementButtons.setAttribute('style', 'display: block');
	bamEndorsementNav.classList.add('awake');
}

function bamDamChangeSlide(dir) {
	let currentSlide = document.querySelector('.bam-dam-demo-image .current');
	let slideNumber = currentSlide.dataset.bddemo;
	bamDamRemoveCurrent();
	
	if (Number.isInteger(parseInt(dir))) {
		bamDamAddCurrent(parseInt(dir));
	} else {
		if (dir == 'next') {
			slideNumber ++;
			if (slideNumber == 7) {bamDamAddCurrent(1)}
			else {bamDamAddCurrent(slideNumber)}
		} else {
			slideNumber --;
			if (slideNumber == 0) {bamDamAddCurrent(6)}
			else {bamDamAddCurrent(slideNumber)}
		}
	}
}

function bamEndorsementChangeSlide(dir) {
	let currentSlide = document.querySelector('.bam-endorsement-image .current');
	let slideNumber = currentSlide.dataset.bedemo;
	bamEndorsementRemoveCurrent();
	
	if (Number.isInteger(parseInt(dir))) {
		bamEndorsementAddCurrent(parseInt(dir));
	} else {
		if (dir == 'next') {
			slideNumber ++;
			if (slideNumber == 7) {bamEndorsementAddCurrent(1)}
			else {bamEndorsementAddCurrent(slideNumber)}
		} else {
			slideNumber --;
			if (slideNumber == 0) {bamEndorsementAddCurrent(6)}
			else {bamEndorsementAddCurrent(slideNumber)}
		}
	}
}

bamDamDemoStart.addEventListener('click', bamDamDemoInit);
bamDamDemoPrev.addEventListener('click', function() {bamDamChangeSlide('prev')});
bamDamDemoNext.addEventListener('click', function() {bamDamChangeSlide('next')});
bamDamDemoNavs.forEach(bamDamDemoNav => bamDamDemoNav.addEventListener('click', function() {bamDamChangeSlide(bamDamDemoNav.dataset.bddemo)}));

bamEndorsementStart.addEventListener('click', bamEndorsementInit);
bamEndorsementPrev.addEventListener('click', function() {bamEndorsementChangeSlide('prev')});
bamEndorsementNext.addEventListener('click', function() {bamEndorsementChangeSlide('next')});
bamEndorsementNavs.forEach(bamEndorsementNav => bamEndorsementNav.addEventListener('click', function() {bamEndorsementChangeSlide(bamEndorsementNav.dataset.bedemo)}));
