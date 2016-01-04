(function(){
	var btns = document.querySelectorAll('.view-button'),
		productsLinks = document.querySelectorAll('.grid a'),
		close = document.querySelector('.product-info img'),
		overlayLayer = document.querySelector('.overlay-layer'),
		productWrapper = document.querySelector('.product-wrapper'),
		productsImgs = document.querySelectorAll('figure img'),
		productsTitles = document.querySelectorAll('figure h2'),
		productInfo = document.querySelector('.product-info'),
		productDetails = document.querySelectorAll('.product-details'),
		cartBtn = document.querySelector('.btn'),
		productImg = document.querySelector('#image'),
		productTitle = document.querySelector('#name'),
		productProvider = document.querySelector('#provider'),
		productDesc = document.querySelector('#desc'),
		productPrice = document.querySelector('#price');


	$.ajax({
	  url: "getQuery.php",
	  dataType: "json",
	}).done(function(output) {
		// console.log(output);
		data = eval(output);
		console.log(data);
		
		var bindData = function(ind){
			productImg.src = "img/" + data[ind].image;
			productTitle.innerHTML = data[ind].name;
			productProvider.innerHTML = "Provider: " + data[ind].provider;
			productDesc.innerHTML = data[ind].desc;
			productPrice.innerHTML = "Price: " + data[ind].price + "$";
		}

		var showProductView = function(ind){
			productImg.classList.add('show-product-img');
			overlayLayer.classList.add('show-overlay-layer');
			productWrapper.classList.add('show-product-wrapper');
			productInfo.classList.add('show-product-info');
			for(var i=0; i<productDetails.length; i++){
				productDetails[i].classList.add('show-product-details');
			}
			productDesc.classList.add('show-product-desc');
			cartBtn.classList.add('show-btn');
		}

		var hideProductView = function(){
			productImg.classList.remove('show-product-img');
			overlayLayer.classList.remove('show-overlay-layer');
			productWrapper.classList.remove('show-product-wrapper');
			productInfo.classList.remove('show-product-info');
			for(var i=0; i<productDetails.length; i++){
				productDetails[i].classList.remove('show-product-details');
			}
			productDesc.classList.remove('show-product-desc');
			cartBtn.classList.remove('show-btn');
		}

		for(var i=0; i<btns.length; i++){
			(function(index){
				btns[i].onclick = function(){
					bindData(index);
					showProductView(index);
				};
				productsLinks[i].onclick = function(){
					bindData(index);
					showProductView(index);
				};
			})(i);
		}

		close.addEventListener('click', hideProductView);
		overlayLayer.addEventListener('click', function(){
			hideProductView(); 
			hideContactPage();
		});
		$(document).keyup(function(e){
			if(e.keyCode == 27){
				hideProductView(); 
				hideContactPage();
			}
		});
		

	});

	// contact us fire form
	var contactBtn = document.querySelector('.contact-us-btn img'), contactPageOn = false,
		contactPage = document.querySelector('.contact-page-container'),
		contactForm = document.querySelector('.contact-form'),
		overlayLayerOn = false;
		
	var showContactPage = function(){
		if(overlayLayer.classList.contains('show-overlay-layer')){
			overlayLayerOn = true;
		}
		contactPage.classList.add('show-contact-page');
		contactForm.classList.add('show-contact-form');
		overlayLayer.classList.add('show-overlay-layer');
		contactBtn.src = 'img/contact-us2.png';
		contactPageOn = true;
	}
	var hideContactPage = function(){
		contactPage.classList.remove('show-contact-page');
		contactForm.classList.remove('show-contact-form');
		if(!overlayLayerOn){
			overlayLayer.classList.remove('show-overlay-layer');
		}
		else {overlayLayerOn = false;}
		contactBtn.src = 'img/contact-us.png';
		contactPageOn = false;
	}
	contactBtn.addEventListener('click', function(){
		if(!contactPageOn){showContactPage();}
		else {hideContactPage();}
	});

})();