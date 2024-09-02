<?php

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
if(isset($_POST['update_cart'])){
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $cart_quantity = $_POST['cart_quantity'];

    mysqli_query($conn, "UPDATE `user_product` SET `quantity` = $cart_quantity WHERE `user_id` = $user_id AND `product_id`= $product_id") or die('query failed');
    $message[] = 'cart quantity updated!';
}

if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
    if($delete==1) {
        $user_id=$_GET['user_id'];
        $product_id=$_GET['product_id'];
        mysqli_query($conn, "DELETE FROM `user_product` WHERE user_id = $user_id AND product_id=$product_id") or die('query failed');
        header('location:cart.php');
    }
}

if(isset($_GET['delete_all'])){
$delete = $_GET['delete_all'];
if($delete==1) {
    $user_id=$_GET['user_id'];
    mysqli_query($conn, "DELETE FROM `user_product` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>shopping cart</h3>
    <p> <a href="home.php">home</a> / cart </p>
</div>

<section class="shopping-cart">

    <h1 class="title">products added</h1>

    <div class="box-container">
        <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * from `user_product` LEFT JOIN products ON `user_product`.`product_id` =`products`.`id` where `user_id`=$user_id") or die('query failed');
        if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                ?>
                <div class="box">
                    <a href="cart.php?delete=1&product_id=<?php echo $fetch_cart['product_id']; ?>&user_id=<?php echo $fetch_cart['user_id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
                    <img src="images/<?php echo $fetch_cart['image']; ?>" alt="">
                    <div class="name"><?php echo $fetch_cart['name']; ?></div>
                    <div class="price">$<?php echo $fetch_cart['price']; ?></div>
                    <form action="" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $fetch_cart['product_id']; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $fetch_cart['user_id']; ?>">
                        <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                        <input type="submit" name="update_cart" value="update" class="option-btn">
                    </form>
                    <div class="sub-total"> sub total : <span>$<?php echo $sub_total = ($fetch_cart['quantity'] * $fetch_cart['price']); ?>/-</span> </div>
                </div>
                <?php
                $grand_total += $sub_total;
            }
        }else{
            echo '<p class="empty">your cart is empty</p>';
        }
        ?>
    </div>

    <div style="margin-top: 2rem; text-align:center;">
        <a href="cart.php?delete_all=1&user_id=<?php echo $user_id; ?>" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all</a>
    </div>

    <div class="cart-total">
        <p>grand total : <span>$<?php echo $grand_total; ?>/-</span></p>
        <div class="flex">
            <a href="shop.php" class="option-btn">continue shopping</a>
            <a href="checkout.php" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>