<!DOCTYPE html>
<?php
include "connect/connect.php";
session_start();
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-success bg-opacity-25">
<div class="bg-success p-2 text-dark bg-opacity-75"></div>
  <div class="bg-success p-2 text-dark bg-opacity-50"></div>
  <div class="bg-success p-2 text-dark bg-opacity-25"></div>
  <div class="bg-success p-2 text-dark bg-opacity-10"></div>

<div class="container mt-3">
  <h2>Manage Part</h2>
  <p></p> 
  <?php
 
echo  $_SESSION["UserID"] ;
?>  
  <button type="button" class="btn btn-primary" style="float:right;margin-right:10px;">Report</button>  
  <a href="insertdata.php"><button type="button" class="btn btn-primary" style="float:right;margin-right:10px;">Add New Part</button></a>
  <a href="index.php"><button type="button" class="btn btn-primary" style="float:right;margin-right:10px;">Main</button></a>
  <table class="table table-dark table-striped">
    <br>
    <thead>
      <tr>
        <th class="table-primary">ID</th>
        <th  class="table-primary">Id_part</th>
        <th class="table-primary">PartNo</th>
        <th class="table-primary">PartName</th>
        <th class="table-primary">Supplier</th>
        <th class="table-primary">Location</th>
        <th class="table-primary">UserID</th>
        <th class="table-primary">Date/Time</th>
        <th class="table-primary">Option</th>
        <th class="table-primary">Option</th>
      </tr>
    </thead>
    <tbody>

      
      <?php
      $sql = " SELECT * FROM admin ORDER BY date_add ASC ";
    $q = mysqli_query( $conn, $sql );
    $no = 0;
    
    while( $f = mysqli_fetch_assoc( $q ) ) {$no++;?>

                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $f['id_part'];?></td>
                    <td><?php echo $f['part_no'];?></td>
                    <td><?php echo $f['part_name'];?></td>
                    <td><?php echo $f['supplier'];?></td>
                    <td><?php echo $f['location'];?></td>
                    <td><?php echo $f['iduser'];?></td>
                    <td><?php echo $f['date_add'];?></td> 
                    <td><a href="edit.php?id=<?php echo $f["id"]?>"><button type="button" class="btn btn-danger">Edit</button></a></td>
                    <td><a href="delete.php?id=<?php echo $f ["id"]?>" class="btn btn-danger" onclick="return confirm('Confirm To Delete?')">Delete</a></td>
                </tr>
            
        
    <?php }?>

    </tbody>
  </table>
</div>

    
  
</body>
</html>
