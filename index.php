<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet", href="css/style.css">
    <!-- font awesome css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
     
</head>
<body>
    <!-- include header -->
    <?php
    include('header.php')
    ?>
   

<!-- form section -->
<div class="container">
    <section>
        <h3 class="heading">Add Products</h3>
        <form action="" class="add-product">
            <input type="text" name="" class="input-field" placeholder="Enter product name" required>
            <input type="number" min="0" name="" placeholder="enter product price" class="input-field" required>
            <input type="file" name="" class="input-field" required>
            <input type="submit" name="" class="submit-btn" value="Add Product">

        </form>
</section>
</div>




























<script src="js/script.js"></script>
</body>
</html>