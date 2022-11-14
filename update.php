<?php
include "connect/connect.php";
$id = $_POST["id"];
$id_part = $_POST["id_part"];
$part_no = $_POST["part_no"];
$part_name= $_POST["part_name"];
$supplier= $_POST["supplier"];
$location= $_POST["location"];

echo $sql="UPDATE admin SET id_part='$id_part',part_no='$part_no',part_name='$part_name',supplier='$supplier',location='$location' WHERE id='$id';";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Update Succesfuly');";
    echo "window.location = 'Data.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "window.location = 'insertdata.php'; ";
    echo "</script>";
    }
?>
