<?php

session_start();

$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/aboutimg.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Choosing our website for your book needs offers a variety of benefits. First and foremost, we offer a wide selection of books in various genres, from bestsellers to niche topics. Our website is easy to navigate, making it simple for you to find what you are looking for quickly. Additionally, we provide competitive pricing and regularly offer promotions and discounts to our customers, choosing us as your go-to source for books is an easy decision.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

    </div>

</section>



<section class="authors">

    <h1 class="title">greate authors</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/ChimamandaAdichie.png" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Chimamanda Adichie</h3>
        </div>

        <div class="box">
            <img src="images/GuillaumeMusso.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Guillaume Musso</h3>
        </div>

        <div class="box">
            <img src="images/J. K. Rowling.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>J. K. Rowling</h3>
        </div>

        <div class="box">
            <img src="images/James-Clear.jpeg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>James Clear</h3>
        </div>

        <div class="box">
            <img src="images/Sarah J.Maas.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Sarah J.Maas</h3>
        </div>

        <div class="box">
            <img src="images/Stephen King.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Stephen King</h3>
        </div>

    </div>

</section>


<section class="reviews">

    <h1 class="title">clients reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>It's a very useful Website, helped me a lot to pick my top books I prefer, I recommend using it, I also wish that it will contain more books, in more languages.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jessica Robert</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>It's a very useful Website, helped me a lot to pick my top books I prefer, I recommend using it, I also wish that it will contain more books, in more languages.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>John Abraham</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>It's a very useful Website, helped me a lot to pick my top books I prefer, I recommend using it, I also wish that it will contain more books, in more languages.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jacobe & Kate Potter</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>It's a very useful Website, helped me a lot to pick my top books I prefer, I recommend using it, I also wish that it will contain more books, in more languages.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Aysha Ahmad</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>It's a very useful Website, helped me a lot to pick my top books I prefer, I recommend using it, I also wish that it will contain more books, in more languages.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mark Dane</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.jpg" alt="">
            <p>It's a very useful Website, helped me a lot to pick my top books I prefer, I recommend using it, I also wish that it will contain more books, in more languages.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Zain Ali</h3>
        </div>

    </div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>