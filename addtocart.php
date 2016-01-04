<?php
	session_start();
	$name = $_GET['name'];
	$con = mysqli_connect("localhost","root","","newmerrill");
    $sql="SELECT * FROM `product` WHERE `name` ='".$name."'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    array_push($_SESSION['cart_items'], $row);
    $_SESSION['cart_cnt'] = count($_SESSION['cart_items']);
    header('Location: index.php?page=products&from_bar');
?>