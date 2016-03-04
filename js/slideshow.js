/**
 * SlideShow de images usando CSS.
 * @constructor
 * @param {Integer} timer - Tempo que cada imagem ficara na Tela.
  */
function SlideShow(timer){
	//div com height com 100% da tela
	this.div = document.querySelector('.index-background');
	this.currentSlide = 0;
	this.url = location.origin + '/wp-content/themes/gilmarafaconi/images';
	
	//seleciona todas as imagens que estão na pagina
	//colocar esses elementos com dysplay none
	this.slideImages = document.querySelectorAll('.slideimage');
	this.timer = timer;
}
SlideShow.prototype = {
	init: function(){
		//espera 3 segundos e troca o slide
		this.check();
		window.setTimeout(this.change.bind(this), this.timer);
	},
 
	change: function(){
		// caminho para a imagem
		var image = this.slideImages[this.currentSlide].src;
		var imageUrl = "url(" + image + ")";
		this.div.style.backgroundImage = imageUrl;
		console.log(imageUrl);
		this.currentSlide++;
		this.init();
	},
	// verefica se é o ultimo slide
	check: function(){
		if(this.currentSlide > this.slideImages.length - 1)
			this.currentSlide = 0;
	}

}


