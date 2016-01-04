<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Newmerrill</title>
		<meta name="description" content="medical supplies company" />
		<meta name="keywords" content="medical, medical supplies, medical equipment" />
<!--		<meta name="author" content="" />-->
		<link rel="shortcut icon" href="img/logo1.png">
        <link rel="stylesheet" type="text/css" href="css/headerStyle.css" />
        <link rel="stylesheet" type="text/css" href="css/footerStyle.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css"/>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_topexpand.css" />
        
        
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
    <body 
	<?php
		session_start();
        if (isset($_GET["from_bar"])) echo 'class="show-menu">';
        else echo ">";
        if(!isset($_SESSION['cart_items'])){
		    $_SESSION['cart_items'] = array();
		    $_SESSION['cart_cnt'] = 0;
		}
    ?>
		<div class="container">
			<div class="menu-wrap">
				<nav class="menu">
                    <!--<img src="img/logo1.png" class="logo" alt="Image Not Found">
                    <h1 style="display:inline-block;">Newmerrill<span>Medical supplies</span></h1>-->
					<div class="icon-list">
                        <a id="i_home" href="?page=home&from_bar"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
						<a id="i_products" href="?page=products&from_bar"><i class="fa fa-fw fa-stethoscope"></i><span>Products</span></a>
						<!--<a id="i_partners" href="?page=partners&from_bar"><i class="fa fa-fw fa-group"></i><span>Partners</span></a>-->
						<a id="i_about" href="?page=about&from_bar"><i class="fa fa-fw fa-question-circle"></i><span>About us</span></a>
						<!-- <a onclick="finished()" id="i_cart" href="?page=cart&from_bar"><i class="fa fa-fw fa-shopping-cart"></i><span>My cart (0)</span></a> -->
						<a onclick="submit()"  href="#" id="i_cart" ><i class="fa fa-fw fa-shopping-cart"></i><span>My cart (<?php echo $_SESSION['cart_cnt']; ?>)</span></a>
                       <form id="form"style="display:inline-block;"method="POST" action="?page=cart&from_bar">
						 
                        <input type="hidden" name="order" id="orderValue" />

                        <!--<a id="i_login" href="login.html"><i class="fa fa-fw fa-unlock-alt"></i><span>Login</span></a>-->
                        </form>
                        <script>
                            var e = document.getElementById("i_<?php echo $_GET['page']?>");
                            e.childNodes[0].className += " active";
                            e.childNodes[1].className = "active";
                        </script>
                        
                        
					</div>
				</nav>
			</div>
            <button class="menu-button" id="open-button"></button>
            <div class="content-wrap <?php echo isset($_GET["from_bar"])? '':'content-wrap_push';?>">
				<div class="content">
                    <div id="logo" class="logo <?php echo isset($_GET["from_bar"])? 'logohide':'';?>">
                        <a href="index.php?page=home"><img src="img/logo1.png" alt="Image Not Found"/></a>
                        <a href="index.php?page=home"><h1 style="display:inline-block;">Newmerrill<span>Medical supplies</span></h1></a>
                    </div>
                    <div id="logo2" class="logo trans <?php echo isset($_GET["from_bar"])? '':'transhide';?>">
                        <a href="index.php?page=home"><img src="img/logo1.png" alt="Image Not Found"/></a>
                        <a href="index.php?page=home"><h1 style="display:inline-block;">Newmerrill<span>Medical supplies</span></h1></a>
                    </div>
					