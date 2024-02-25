<?php include("connect.php");
// update logic
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_FILES["image"]['name'];
    $imagetmp=$_FILES['image']['tmp_name'];
    $imagefolder='images/'.$image;

$sql="update products set name='$name',price='$price' ,image='$image' where id=$id ";
$result=mysqli_query($conn,$sql) ;
if($result)
{
    move_uploaded_file($imagetmp,$imagefolder);
    header("Location:viewproduct.php");
}}
else{
   echo "Something error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet", href="css/style.css">
    <!-- font awesome css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

</head>
<body>
    <?php
    include('header.php');?>

<?php
    if(isset($displaymsg))
    {
        echo "  <div class='display-message'>
        <span>$displaymsg</span>
        <i class='fa-solid fa-scissors' onclick='this.parentElement.style.display=`none`';></i>    
        </div> ";
    }
    ?>
    <section class=" edit-container">
        <!-- php  code for update -->
        <?php
        if(isset($_GET['edit']))
{
            $edit=$_GET['edit'];
            $sql="select * from products where id=$edit";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row=mysqli_fetch_assoc($result)
                
                    
                    ?>
                
                <form action=" " class="update-product product-container-box" method="post" enctype="multipart/form-data">
                <img  src="images/<?php echo $row["image"]?>" alt=
        <?php echo $row['name'] ?> >
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <input type="text" name="name" class="input-field field" value="<?php echo $row['name']?>" required>
                <input type="number" name="price" class="input-field field" value="<?php echo $row['price']?>" required>
                <input type="file" name="image" class="input-field field" required accept="image/jpg, image/jpeg, image/png">
               <div class="btns">
        
                <input type="submit" name="update" class="edit-btn" value="Update Product">
                <input type="reset" id="close-edit" class="cancel-btn">
        </div>
        </form>
        <?php
            } else {
                echo "Product not found.";
            }
        }
        ?>
      
 </section>
</body>
</html>