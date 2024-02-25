<?php
include('connect.php');
if(isset($_POST["addproduct"])){
    $name=$_POST["name"];
    // echo $name;
    $price=$_POST["price"];
    $image=$_FILES["image"]['name'];
    $imagetmp=$_FILES['image']['tmp_name'];
    $imagefolder='images/'.$image;
    // $name=$_POST["name"];

    $sql="insert into products(name,price,image) values('$name','$price','$image')";
    $result=mysqli_query($conn,$sql) or die("Insert query failed");
    if($result)
    {
        move_uploaded_file($imagetmp,$imagefolder);
        $displaymsg="Product inserted Successfully";
    }
    else{
        $displaymsg="Something error";
    }
}
?>


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
    include('header.php');?>
  
    
   

<!-- form section -->
<div class="container">
    <!-- message display for insertion -->
    <?php
    if(isset($displaymsg))
    {
        echo "  <div class='display-message'>
        <span>$displaymsg</span>
        <i class='fa-solid fa-scissors' onclick='this.parentElement.style.display=`none`';></i>    
        </div> ";
    }
    ?>
    
    <section>
        <h3 class="heading">Add Products</h3>
        <!-- enctype atttribute of form allow us to just upload image in adatbase -->
        <form action="" method="post" enctype="multipart/form-data" class="add-product">
            <input type="text" name="name" class="input-field" placeholder="Enter product name" required>
            <input type="number" min="0" name="price" placeholder="enter product price" class="input-field" required>
            <input type="file" name="image" class="input-field" accept="image/png, image/jpg, image/jpeg" required>
            <input type="submit" name="addproduct" class="submit-btn" value="Add Product">

        </form>
</section>
</div>




























<script src="js/script.js"></script>
</body>
</html>