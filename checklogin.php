<?php
session_start();
include "connect/connect.php";//เชื่อมต่อฐานข้อมูล

$_POST["user"];
$_POST["pass"];
if (isset($_POST["user"])){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $q = mysqli_query ($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
    $row = mysqli_num_rows($q);
    $rs = mysqli_fetch_array($q);
    echo $row;

    if($row == "1"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
        $_SESSION["UserID"] = $rs["name"];
        Header("Location: Data.php");
        
      }
      else{
        Header("Location: scan.php");
      }
      if ($row == "2")
      {
        $_SESSION["UserID"] = $rs["name"];
        Header("Location: scan.php");
      }
}
?>
