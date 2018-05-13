var i = 0;
var images = [];
var time = 30000;


// Image list
images[0] = 'img/img1.jpg';
images[1] = 'img/img2.jpg';
images[2] = 'img/img3.jpg';
// images[3] = 'img/img4.jpg';


// Change image
function changeImg(){
	document.slide.src = images[i];

	if(i < images.length - 1){
		i++;
	} else {
		i = 0;
	}
	setTimeout("changeImg()",time);
}

function SlideButtons(param){
	if(param === 'next'){
		i++;
		if(i > images.length - 1 ){
			i = 0;
		}
	} else {
			i--;
			if (i < 0){
			i = images.length -1;
		}
		
	}
	document.slide.src = images[i];
}


window.onload = changeImg;