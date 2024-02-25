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
            

    
    
    <?php 
    include('connect.php');
    $sql ="select * from products";


   $result= mysqli_query($conn,$sql);
   $num=1;
   if(mysqli_num_rows($result)>0)
   {echo " <table>
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>PRoduct Image</th>
                        <th>PRoduct NAme</th>
                        <th>Product Price</th>
                        <th>Action</th>
</tr>
</thead>
<tbody>";

    // logic tro fetch data
    while($row=mysqli_fetch_assoc($result))
   // echo $row['image'];
   {

    ?>
    <tr>
        <td> <?php echo $num ?> </td>
        <td> <img src="images/<?php echo $row["image"]?>" alt=
        <?php echo $row['name'] ?> > </td>

        <td><?php echo $row['name']?> </td>
        <td><?php echo $row['price']?> </td>
        
        <td>
            <a href="delete.php?delete=<?php echo $row['id'] ?>" class="delete-product-btn" 
            onclick="return confirm('Are u sure wanna delete item?');"><i class="fas fa-trash"></i></a>
            <a href="edit.php?edit=<?php echo $row['id'] ?>" class="update-product-btn"><i class="fas fa-edit"></i></a>
</td>
</tr>
    <?php
    $num++;

   }

}else{
    echo "<div class='empty-text'>No Products Avalable </div>";

}
    ?>
    </tbody>
</table>
        </section>
    </div>
</body>
</html>