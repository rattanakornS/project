<?php
include "connect/connect.php";
$id_part = $_POST["id_part"];
$part_no = $_POST["part_no"];
$part_name= $_POST["part_name"];    
$supplier = $_POST["supplier"];
$location = $_POST["location"];
$date_now = DATE("Y-m-d H:i:s");
$sql = "UPDATE * admin 
(
id_part,
part_no,
part_name,
supplier,
location,
date_add
)
VALUES
(
'$id_part',
'$part_no',
'$part_name',
'$supplier',
'$location',
'$date_now')";
$result = mysqli_query($conn, $sql);// or die ("Error in query: $sql " . mysqli_error());

mysqli_close($conn);
if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Add Succesfuly');";
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
                         