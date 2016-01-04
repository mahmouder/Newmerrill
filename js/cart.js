
var cnt = 0;
var addToCart = function(){
	cnt++;
	var cartText = $("#i_cart").text();
	$("#i_cart span").text(cartText.slice(0, cartText.indexOf('(')+1) + cnt + cartText.slice(cartText.indexOf(')'), cartText.length));
}