<?php 
	session_start();
	unset($_SESSION['cart_items']);
	header('Location: index.php?page=products&from_bar');
?>