window.onload = function(){
	var cnt = 0, timeout = 4000, paused = false,
	images = document.querySelectorAll('#slideshow div'),
	numImages = images.length;

	var showCurrentImage = function(incCnt){
		if(incCnt === true)cnt++;
		cnt = (cnt + numImages) % numImages;
		var i;
		for (i = 0; i < numImages; i++) {
			images[i].classList.remove('show');
		};
		images[cnt].classList.add('show');
	};

	var move = function(){
		showCurrentImage(false);
		if(!paused){
			clearInterval(slideShow);
			slideShow = setInterval(function(){showCurrentImage(true)}, timeout);
		}
	};

	var slideShow = setInterval(function(){showCurrentImage(true)}, timeout);

	var prevBtn = document.querySelector('.prev'),
		nextBtn = document.querySelector('.next');

	prevBtn.addEventListener('click', function(){
		cnt--;
		move();
	});

	nextBtn.addEventListener('click', function(){
		cnt++;
		move();
	});

	var pauseBtn = document.querySelector('.pause'),
		playBtn = document.querySelector('.play');

	pauseBtn.addEventListener('click', function(){
		pauseBtn.classList.remove('showBtn');
		playBtn.classList.add('showBtn');
		paused = true;
		clearInterval(slideShow);
	});

	playBtn.addEventListener('click', function(){
		playBtn.classList.remove('showBtn');
		pauseBtn.classList.add('showBtn');
		paused = false;
		slideShow = setInterval(function(){showCurrentImage(true)}, timeout);
	});

	var sliderCtrls = document.querySelector('.sliderCtrls');

	showSliderCtrls = function(){
		sliderCtrls.style.transform = "translate3d(0px, -40px, 0px)";
		sliderCtrls.style.opacity = "1";

		var cover = document.querySelector("#cover");
		cover.style.zIndex = 10;
		cover.style.opacity = 0.6;
	};

	hideSliderCtrls = function(){
		sliderCtrls.style.transform = "translate3d(0px, 0px, 0px)";
		sliderCtrls.style.opacity = "0";

		var cover = document.querySelector("#cover");
		cover.style.zIndex = -1;
		cover.style.opacity = 0;
	};

}