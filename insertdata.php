<?php
include "connect/connect.php";
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
<body>
 <div class="container mt-3">
  <h2>ADD information</h2>
  </div>
<form method="post" action="insert.php" class="form-horizontal mt-4">
            
             <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">Part code</label>
                    <div class="col-sm-5">
                        <input type="text" name="id_part" class="form-control" placeholder="Enter Part code..." required >
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">Part NO.</label>
                    <div class="col-sm-5">
                        <input type="text" name="part_no" class="form-control" placeholder="Enter Part NO..." required>
                    </div>
                </div>
            </div>
             <br>
            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">Part name</label>
                    <div class="col-sm-5">
                        <input type="text" name="part_name" class="form-control" placeholder="Enter Part name..." required>
                    </div>
                </div>
            </div>
             <br>
            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">Supplier</label>
                    <div class="col-sm-5">
                        <input type="text" name="supplier" class="form-control" placeholder="Enter Supplier..." required>
                    </div>
                </div>
            </div>
             <br>
            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">Location</label>
                    <div class="col-sm-5">
                        <input type="text" name="location" class="form-control" placeholder="Enter Location..." required>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">UserID</label>
                    <div class="col-sm-5">
                        <input type="text" name="userid" class="form-control" placeholder="Enter Location..." required>
                    </div>
                </div>
            </div>
            <br>
            

         
            <div class="form-group text-center">
                <div class="col-md-11 mt-3">
                    <td><button type="submit" class="btn btn-success">Submit</button></td>
                    <a href="Data.php" class="btn btn-danger" >Cancel</a>
                </div>
            </div>


    </form>

</body>
</html>
