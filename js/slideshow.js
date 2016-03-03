//slideshow
function SlideShow(images, timer){
	this.div = document.querySelector('.index-background');
	this.currentSlide = 0;
	this.url = location.origin + '/wp-content/themes/gilmarafaconi/images';
	this.images = images;
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
		var image = this.url;
		image += "/";
		image += this.images[this.currentSlide];
		var imageUrl = "url(" + image + ")";
		this.div.style.backgroundImage = imageUrl;
		this.currentSlide++;
		this.init();
	},
	// verefica se é o ultimo slide
	check: function(){
		if(this.currentSlide > this.images.length - 1)
			this.currentSlide = 0;
	}

}


