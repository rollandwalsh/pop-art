// 	 HERO TEXT FADE IN
 function heroTextFadeIn() {
	 const heroText = document.querySelector('.page-hero h1');
	 heroText.style.opacity = '1';
	 heroText.style.transform = 'translateY(0)';
 }
 function heroSubTextFadeIn() {
	 const heroSubText = document.querySelector('.page-hero h5');
	 heroSubText.style.opacity = '1';
	 heroSubText.style.transform = 'translateY(0)';
 }
 
 window.setTimeout(heroTextFadeIn, 1000);
 window.setTimeout(heroSubTextFadeIn, 2000);