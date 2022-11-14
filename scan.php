<?php
include('connect/connect.php');
session_start();
echo $_SESSION["UserID"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!-- <body style=background:URL(https://static.vecteezy.com/system/resources/previews/006/430/145/original/technology-background-concept-circuit-board-electronic-system-futuristic-hi-tech-light-on-dark-blue-free-vector.jpg)> -->
<br>
<br>
<div class="container mt-5 ">
<div class="mx-auto" style="width: 160px;">
  <p class="text-white">ID :</p>
</div>
 <br>
 
 <form method="POST" action="scan.php">
    <div class="mx-auto hight:500px;" style="width: 280px;">
   
        <input style= "width:280px;height:45px;"type="text" class="text-center" placeholder="Enter Scan" name="qr_code">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <br>
</form >


<form class="text-white mx-auto"class="mx-auto" style="width: 225px;">



</form>



<div class="mx-auto" style="width: 290px;">
<p class="text-white">
<div class="mx-auto" style="width: 225px;">
<p class="text-white">
<?php
                
                $query = "SELECT * FROM iduser";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo 'ID : '.$row.'</h4>';
            ?>
            </div>
            </p>
  <div class="mx-auto" style="width: 225px;">
  <p class="text-white">ID : <?php include ('connect/connect.php'); 
 
 
 //date_default_timezone_set('Asia/Bangkok');
   $date_nows = date('d-m-Y H:i:s');
  
   echo $date_nows;
   echo "<br>";
 



?></p>
</div>
<br>
  <div class="mx-auto" style="width: 85px;">
  <button type="button" class="btn btn-danger"style="width: 70px;">close</button>
</div>
</body>
</html>
