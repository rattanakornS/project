<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<style>
  img{
    width : 500px
  }
</style>
<body style="background:url(123.jpg);background-repeat:no-repeat;background-size:100%">
  <center>
  <div class="bg-success p-2 text-dark bg-opacity-75"></div>
  <div class="bg-success p-2 text-dark bg-opacity-50"></div>
  <div class="bg-success p-2 text-dark bg-opacity-25"></div>
  <div class="bg-success p-2 text-dark bg-opacity-10"></div>
<!-- <div class="container mt-3">
<div class="card" style="width: 20rem;" >
  <div class="card-body bg-success bg-opacity-25">
    <h5 class="card-title">Login</h5>
    <p class="card-text">
       
</p>
  </div> -->

<div class="card border-success mb-5 mt-2" style="max-width: 25rem; max-hight: 50rem;">
  <!-- <div class="card-header">LOGIN</div> -->
  <div class="card-body text-success">
    <h5 class="card-title">LOGIN</h5>
    <p class="card-text"> <form method="POST" action="checklogin.php" >
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="user" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
  <button type="submit" class="btn btn-danger">Cancel</button>
    </form></p>
  </div>
</center>

</body>

<script src="popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>

