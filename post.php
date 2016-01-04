<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
		<h2>Post product <section></section></h2>
		<form role="form" method="POST">
			<div class="form-group">
				<label for="product">Product:</label>
				<input type="name" name="product" class="form-control"  placeholder="Enter product name">
			</div>
			<div class="form-group">
				<label for="price">Price:</label>
				<input type="number" name="price" class="form-control"  placeholder="Enter price">
			</div>

			<div class="form-group">
				<label for="provider">Provider:</label>
				<input type="name" name="provider" class="form-control"  placeholder="Enter provider name">
			</div>
			
			<div class="form-group">
				<label for="description">Description:</label>
				<textarea name="description" class="form-control" rows="5" placeholder="Enter description" ></textarea>
			</div>
			<div class="form-group">
				<label for="img">Select product image:</label>
				<input type="file" class="form-control" name="img">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		<?php
		$product="";
		$price="";
		$img="";
		$provider="";
		$description="";
		if (isset($_POST['product'])&& !empty($_POST['product']) && isset($_POST['provider'])&& !empty($_POST['provider'])  && isset($_POST['price']) && !empty($_POST['price']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['img'])&& !empty($_POST['img']) ){
			$product=$_POST['product'];
			$price=$_POST['price'];
			$img=$_POST['img'];
			$description=$_POST['description'];
			$provider=$_POST['provider'];
			$conn = mysqli_connect("localhost","root","","newmerrill");
		$sql="INSERT INTO `product` (`name`, `desc`, `provider`,`image`, `price`) VALUES('$product','$description','$provider','$img',$price)";
		$result = $conn->query($sql);
		var_dump($provider);
		}
		?>
		
		
	</div>
</body>
</html>