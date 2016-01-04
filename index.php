<?php
    $pages = array(
        "products"  => "products.php",
        "partners"  => "partners.php",
        "home"      => "slider.php",
        "login"     => "login.php",
        "about"     => "about.php",
        "cart"      => "cart.php",
        "empty_cart"=> "empty_cart.php",
        "addtocart"=> "addtocart.php"
    );
    $footer_enabled = array("home");
    if (!isset($_GET["page"])) $_GET["page"] = "home";
    if (!array_key_exists($_GET["page"],$pages)) {
        echo "Page not found.";
        http_response_code(404);
        exit;
    }else{
        include_once "header.php";
        include_once $pages[$_GET["page"]];
        $bar = (isset($_GET["from_bar"])?"true":"false");
        echo "<script>topExpand(".$bar.");</script>";
        if (in_array($_GET["page"],$footer_enabled)) include_once "footer.php";
    }
?>
