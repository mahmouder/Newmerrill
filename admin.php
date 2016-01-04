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
  <h2>Admin login <section></section></h2>
  <form role="form" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php
$email=""; 
$password=""; 
$err = array ();

 if (isset($_POST['email'])&&isset($_POST['password'])){


    if( empty($_POST["email"])){ 
      $err[]="email is required ";
    }
    
    else{
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
            $err[]="email is not valid ";
        }
        else{
            $email=$_POST["email"];
         }
    }

    if( empty($_POST["password"])){ 
     $err[]="password is required ";
    }
    else{
        $password=$_POST["password"];
    }
     $conn = mysqli_connect("localhost","root","","newmerrill");
    $sql="SELECT * FROM `admin` WHERE `id` =1";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();

    if($row["email"]==$email && $row["password"]=$password ){
        header('Location: /newmerrill/post.php'); 
    }else{echo"Wrong email or password!";}



 }
?>

</body>
</html>
