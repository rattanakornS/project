<?php
session_start();
include "connect/connect.php";

$qr_code = $_POST["qr_code"];
$_SESSION["UserID"];
$date_now = DATE("Y-m-d H:i:s");
echo $barcode;
echo $_SESSION["UserID"];
echo $date_now = DATE("Y-m-d H:i:s");
$sql = "INSERT INTO iduser
(
UserID,
qr_code,
date_now

)
VALUES
(
  
 '$barcode',
 '$date_now'

 
  
 )";
$result = mysqli_query($conn, $sql);// or die ("Error in query: $sql " . mysqli_error());

mysqli_close($conn);
// if($result){
//     echo "<script type='text/javascript'>";
//     echo "alert('Add Succesfuly');";
//     echo "window.location = 'Data.php'; ";
//     echo "</script>";
//     }
//     else{
//     echo "<script type='text/javascript'>";
//     echo "alert('Error back to upload again');";
//     echo "window.location = 'insertdata.php'; ";
//     echo "</script>";
//     }
//     ?>
                         