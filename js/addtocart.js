var addtocart=[];
cnt=0;
function addtoCart(){
	var Name = document.querySelector('#name ');
	var price = document.querySelector('#price ');
	var provider = document.querySelector('#provider ');
	var desc = document.querySelector('#desc ');
	
	Name=Name.innerHTML;
	price=set(price.innerHTML);
	provider=set(provider.innerHTML);
	desc=desc.innerHTML;
	
	

	addtocart[cnt]={name:Name , price:price, provider:provider ,desc:desc};
	cnt++;

	window.location.href = "addtocart.php?name=" + Name;
	// var cart = $('#i_cart span');
	// var cartText=cart.text();
	// cartText=cartText.slice(0, cartText.indexOf('(')+1) + cnt + cartText.slice(cartText.indexOf(')'), cartText.length);
	// console.log(cartText);
	// cart.text(cartText);
}

function set(str){
	return str.slice(str.indexOf(':')+2,str.length);
}

function submit(){
	doit();
	$("#form").submit();
}

var doit = function() {
    var arrayString = JSON.stringify( addtocart );
    $('#orderValue').val( arrayString );
    // rest of code
}
