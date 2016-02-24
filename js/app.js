var j = jQuery;
function divFullScreen(){
	j('.index-background').css('height', window.innerHeight);
}

window.addEventListener('load resize', divFullScreen() );