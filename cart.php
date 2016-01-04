<?php
    $data=json_decode($_POST["order"] ,true);
    $length = count($data);

    for($i=0; $i<$length; $i++){
      $_SESSION['cart_items'][$i] = $data[$i];
    }
    $_SESSION['cart_cnt'] = count($_SESSION['cart_items']);
    // var_dump($_SESSION['cart_cnt']);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add to cart</title>
    <link rel="stylesheet" type="text/css" href="css/cart.css">
  </head>


  <body style="padding: 0;">
    <h1 style="text-align: center;">My cart</h1>
    <table class="rwd-table">
      
      <?php
        if($_SESSION['cart_cnt'] > 0){
            echo "
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Provider</th>
              <th>Description</th>
            </tr>
            ";
          	for($i=0; $i<$_SESSION['cart_cnt']; $i++){
          		echo"<tr>";
          		echo"<td data-th='Title'>".$_SESSION['cart_items'][$i]["name"]."</td>";
          		echo"<td data-th='price'>".$_SESSION['cart_items'][$i]["price"]."</td>";
          		echo"<td data-th='provider'>".$_SESSION['cart_items'][$i]["provider"]."</td>";
          		echo"<td data-th='Description'>".$_SESSION['cart_items'][$i]["desc"]."</td>";
          		echo"</tr>";
          		
          	}
        }
        else {
            echo "<h3 style='text-align:center;'>Your cart is empty</h3>";
        }
      ?>
 
    </table>
    <?php
      if($_SESSION['cart_cnt'] > 0)echo "<a href='empty_cart.php' class='empty-btn'>Empty cart</a>";
    ?>
  </body>
</html>