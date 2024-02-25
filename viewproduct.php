<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link rel="stylesheet", href="css/style.css">
    <!-- font awesome css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php 
    include('header.php');
    ?>

    <!-- buikld table to show product -->
    <div class="container">
        <section class="display-product">
            <table>
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>PRoduct Image</th>
                        <th>PRoduct NAme</th>
                        <th>Product Price</th>
                        <th>Action</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>shop</td>
        <td>lapy</td>
        <td>34</td>
        <td>
            <a href="" class="delete-product-btn"><i class="fas fa-trash"></i></a>
            <a href="" class="update-product-btn"><i class="fas fa-edit"></i></a>
</td>
        </tr>
    </tbody>

</table>
        </section>
    </div>
</body>
</html>