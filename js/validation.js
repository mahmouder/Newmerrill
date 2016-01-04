(function(){
	//validate = function(){
	// 	var mailField = document.querySelector('input[type=email]'),
	// 		nameField = document.querySelector('input[type=text]'),
	// 		commentField = document.querySelector('.comment-input');

	// 	nameField.oninvalid = function(){
	// 		if(nameField.validity.valueMissing){
	// 			nameField.setCustomValidity("Please enter your name.");
	// 		}
	// 	}
	// 	nameField.oninput = function(){
	// 		nameField.setCustomValidity("");
	// 	}

	// 	mailField.oninvalid = function(){
	// 		mailField.setCustomValidity("");
	// 		if(mailField.validity.valueMissing){
	// 			mailField.setCustomValidity("Please enter your email.");
	// 		}
	// 		else if(mailField.validity.patternMismatch){
	// 			mailField.setCustomValidity("'" + mailField.value + "'" + " is not a valid mail");
	// 		}
	// 	}
	// 	mailField.oninput = function(){
	// 		mailField.setCustomValidity("");
	// 	}

	// 	commentField.oninvalid = function(){
	// 		if(commentField.validity.valueMissing){
	// 			commentField.setCustomValidity("Please enter your comment.");
	// 		}
	// 	}
	// 	commentField.oninput = function(){
	// 		commentField.setCustomValidity("");
	// 	}
	// }
	// validate();

	var mailField = document.querySelector('#email'),
	 	nameField = document.querySelector('#name'),
	 	commentField = document.querySelector('.comment-input'),
	 	warnings = document.querySelectorAll('.warning-label'),
	 	re = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/,
	 	valid = false;

	removeWarnings = function(){
		for(var i=0; i<warnings.length; i++){
	 		warnings[i].classList.remove("active-warning");
	 	}
	}
	validate = function(){

	 	nameField.onblur = removeWarnings;
	 	mailField.onblur = removeWarnings;
	 	commentField.onblur = removeWarnings;
	 	
		if(nameField.value === ""){
			warnings[0].innerHTML = "please enter your name!";
			warnings[0].classList.add("active-warning");
			nameField.focus();
			return false;
		}
		if(mailField.value === ""){
			warnings[1].innerHTML = "please enter your email!";
			warnings[1].classList.add("active-warning");
			mailField.focus();
			return false;
		}
		if(!re.test(mailField.value)){
			warnings[1].innerHTML = "please enter a valid mail (e.g. example@domain.com)";
			warnings[1].classList.add("active-warning");
			return false;
		}
		if(commentField.value === ""){
			warnings[2].innerHTML = "please enter your comment!";
			warnings[2].classList.add("active-warning");
			commentField.focus();
			return false;
		}

	}
	//^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$
})();