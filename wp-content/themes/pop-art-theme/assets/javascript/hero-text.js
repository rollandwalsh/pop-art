// 	 HERO TEXT FADE IN

var heroText = document.querySelector('.page-hero h1');
var heroSubText = document.querySelector('.page-hero h5');
var heroSmallSubText = document.querySelector('.page-hero h6');

function heroTextFadeIn() {
	heroText.style.opacity = '1';
	heroText.style.transform = 'translateY(0)';
}
function heroSubTextFadeIn() {
	heroSubText.style.opacity = '1';
	heroSubText.style.transform = 'translateY(0)';
}
function heroSmallSubTextFadeIn() {
	heroSmallSubText.style.opacity = '1';
	heroSmallSubText.style.transform = 'translateY(0)';
}
 
if (heroText) {window.setTimeout(heroTextFadeIn, 1000);}
if (heroSubText) {window.setTimeout(heroSubTextFadeIn, 2000);}
if (heroSmallSubText) {window.setTimeout(heroSmallSubTextFadeIn, 2000);}
 