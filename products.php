<link rel="stylesheet" type="text/css" href="css/products-style.css">
<link rel="stylesheet" type="text/css" href="css/product-view-style.css">
<link rel="stylesheet" type="text/css" href="css/contact-us-style.css">
<link rel="stylesheet" type="text/css" href="css/footerStyle.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Search Bar -->
<div id="search-bar-wrap" class="clearfix">
    <form method="post" autocomplete="off" >
        <input name='search' class="search" type="text" placeholder="What are you looking for?" value="<?php
if (isset($_POST['search'])) echo $_POST['search'];
else echo '';
                                                          ?>">
        <input class="search-submit" type="submit" value="">
    </form>
</div>
<!-- Products List -->
<section class="grid clearfix">
    <?php
    $con = mysqli_connect("localhost","root","","newmerrill");
    $res = mysqli_query($con,"SELECT * FROM product;");
    if(mysqli_num_rows($res)!=0){
       while($row = mysqli_fetch_assoc($res)){
           $flag = true;
           if (isset($_POST['search']) && $_POST['search'] != ''){
               $flag = false;
               $flag = strpos(strtolower($row['name']),strtolower($_POST['search'])) !== false ||
                    strpos(strtolower($row['desc']),strtolower($_POST['search'])) !== false;
           }

           if ($flag) echo '<a href="#">
            <figure>
                <img src="img/'.$row['image'].'" alt="product image">
                <figcaption>
                    <h2>'.$row['name'].'</h2>
                    <p>'.$row['desc'].'</p>
                </figcaption>
                <button class="view-button">View</button>
            </figure>
        </a>';
       }
    }
    ?>
</section>
<!-- Product Quick View -->
<div class="overlay-layer"></div>
<div class="product-wrapper">
    <img id="image" src="img/1.jpg" alt="product image" class="product-img">
    <div class="product-info">
        <img src="img/close.png">
        <h2 id="name" class="product-details">Product Title</h2>
        <h4 id="provider" class="product-details">Provider: <?php echo $row['provider']?></h4>
        <p id="desc" class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam eveniet quo, ullam itaque expedita impedit. Eveniet, asperiores amet iste repellendus similique reiciendis, maxime laborum praesentium.</p>
        <br>
        <br>
        <h4 id="price" class="product-details">Price: <?php echo $row['price'] ;?> (USD)</h4> 
        <a onclick="addtoCart()" class="btn btn-3 btn-3a">
            <i class="fa fa-fw fa-shopping-cart"></i>
            Add to cart
        </a>
    </div>
</div>  
<!-- CONTACT FORM -->
<div class="contact-us-btn">
    <img src="img/contact-us.png">
</div>
<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])){
        $con = mysqli_connect("localhost","root","","newmerrill");
        $res = mysqli_query($con,"INSERT INTO contact VALUES('".mysql_real_escape_string($_POST['name'])."','"
                            .mysql_real_escape_string($_POST['email'])."','".mysql_real_escape_string($_POST['comment'])."');");
    }    
?>
<div class="contact-page-container">
    <form method="post" class="contact-form" onsubmit="return validate();" novalidate>
        <h3>Contact us</h3>
        <label><p class="warning-label">name field</p></label>
        <input type="text" placeholder="Name" class="name-input" id="name" name="name">
        <label><p class="warning-label">empty field</p></label>
        <input type="text" placeholder="Email" class="name-input" id="email" name="email">
        <label><p class="warning-label">empty field</p></label>
        <textarea placeholder="comment..." class="comment-input" name="comment"></textarea>
        <input type="submit" value="submit" class="submit-btn">
    </form>

</div>

<script type="text/javascript" src="js/product-view-script.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript" src="js/addtocart.js"></script>
<script type="text/javascript">
    (function(){
        var search = document.querySelector(".search");
        search.onfocus = function(){
            search.classList.add("search-focus");
        }
        search.onblur = function(){
            if(search.value === ""){
                search.classList.remove("search-focus");
            }
        }
        if(search.value !== ""){
            search.classList.add("search-focus");
        }
    })();
</script>