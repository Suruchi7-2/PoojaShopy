<!-- delete logic -->
<?php

if(isset($_GET['delete']))
{
    $delete=$_GET['delete'];
    include('connect.php');
   $sql="delete  from products where id='$delete' " ;
   $result=mysqli_query($conn,$sql) or die('Query failed');
   if($result)
   {echo "Product Deleted";
    header("Location:viewproduct.php");
   }
   else{
    echo "Product not deleted";
    echo "Product Deletion getting error";
   }
   // echo $delete;
}
?>