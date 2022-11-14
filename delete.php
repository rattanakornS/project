<?php
include "connect/connect.php";
$id = $_GET["id"];
echo $sql="DELETE FROM admin WHERE id='$id';";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'Data.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "window.location = 'Data.php'; ";
    echo "</script>";
    }
?>