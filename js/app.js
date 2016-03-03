
var slide;
window.onload = function(){
	
	function iniciar(){
		
		divFullScreen();
		new WOW().init();
		var images = [
		'back-cereja.jpg',
		'back-morango.jpg',
		'background-image2.png',
		'back-bolo.jpg',
		'bc-bem-casado.jpg'
		];
		
		if(document.querySelector('.index-background') != undefined){
			slide = new SlideShow(images, 5000);
			slide.init();
		}
		
	
	}
	
	iniciar();

	function divFullScreen(){
		var div = document.querySelector('.index-background');
		var imageGilmara =  document.querySelector(".sobreRight");
		if(div)
			div.style.height = window.innerHeight + 'px';
	}

	function scroolldow(pos){
		
		//pega a barra do topo
		var navbar = document.getElementById('navbar');

		//adiciona ou remove a classe opaco do menu principal
		if(pos > 150){
			navbar.classList.add('opaco');
		}else{
			navbar.classList.remove('opaco');
		}
		console.log(pos);
		//efeito parallex
		
	}
	function parallex(el, velocidade, pos){
	
		el.style.backgroundPositionY = -pos / velocidade + "px";
		
	}

	window.addEventListener('scroll', function(){
			scroolldow(window.scrollY);
			if(document.querySelector('.index-background') != undefined)
				parallex(document.querySelector('.index-background'), 5, window.scrollY);
		});

	window.addEventListener('load', divFullScreen() );
	window.addEventListener('resize', divFullScreen() );
	
	
 
}
