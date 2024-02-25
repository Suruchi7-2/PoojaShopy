<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopit</title>
    <link rel="stylesheet", href="css/style.css">
    <!-- font awesome css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- header -->
    <?php include("header.php")?>
    <div class="container">
        <section class="products">
            <h1 class="heading">Shop it</h1>
            <div class="product-container">
                <div class="edit-form">
                    <img src="images/17.jpeg" alt="">
                    <h3>Headphone</h3>
                    <div class="price">Price: $120000/-</div>
                    <input type="submit" class="submit-btn cart-btn" value="Add to Cart">
                </div>
            </div>
        </section>
    </div>
</body>
</html>