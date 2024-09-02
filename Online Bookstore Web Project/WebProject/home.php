<?php

session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
    $conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `user_product` WHERE user_id = $user_id AND `product_id`=$product_id") or die('query failed');

    if(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart!';
    }else{
        mysqli_query($conn, "INSERT INTO `user_product`(user_id, product_id, quantity) VALUES($user_id,$product_id,$product_quantity)") or die('query failed');
        $message[] = 'product added to cart!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php include 'header.php'; ?>

<section class="home">

    <div class="content">
        <h3>Your First choice Bookstore!</h3>
        <p>The ultimate destination for book lovers.</p>
        <a href="about.php" class="white-btn">discover more</a>
    </div>

</section>

<section class="products">

    <h1 class="title">latest Books</h1>

    <div class="box-container">

        <?php
        $conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
        $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
        if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
                ?>
                <form action="" method="post" class="box">
                    <img class="image" src="images/<?php echo $fetch_products['image']; ?>" alt="">
                    <div class="name"><?php echo $fetch_products['name']; ?></div>
                    <div class="price">$<?php echo $fetch_products['price']; ?></div>
                    <input type="number" min="1" name="product_quantity" value="1" class="qty">
                    <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
                <?php
            }
        }else{
            echo '<p class="empty">no products added yet!</p>';
        }
        ?>
    </div>

    <div class="load-more" style="margin-top: 2rem; text-align:center">
        <a href="shop.php" class="option-btn">load more</a>
    </div>

</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/aboutimg.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>At Bookit, we're passionate about books and providing a diverse selection of titles for all interests. Our team of avid readers is dedicated to exceptional customer service and helping you find the perfect book to suit your unique taste. Thank you for choosing us as your go-to source for books.</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </div>

</section>

<section class="home-contact">

    <div class="content">
        <h3>have any questions?</h3>
        <a href="contact.php" class="white-btn">contact us</a>
    </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>